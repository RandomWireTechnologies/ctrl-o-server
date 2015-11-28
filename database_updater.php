<?php
// This should update the database to the latest state
// Should only be run once on the command line
define('BASEPATH',''); // Just something to get past fault on config file
include('application/config/database.php');
$host = $db['default']['hostname'];
$port = $db['default']['port'];
$username = $db['default']['username'];
$password = $db['default']['password'];
$database = $db['default']['database'];
$dbdriver = $db['default']['dbdriver'];
$dbprefix = $db['default']['dbprefix'];
$pconnect = $db['default']['pconnect'];
$db_debug = $db['default']['db_debug'];
$cache_on = $db['default']['cache_on'];
$cachedir = $db['default']['cachedir'];
$char_set = $db['default']['char_set'];
$username = "root";
$password = "ctrl-o-master";

echo "Attempting to connect to $host:$port - $database as $username\n";
$db = new mysqli($host, $username, $password, $database, $port);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Check to see if new membership tables exist
if ($db->query("show tables like 'membership_names'")->num_rows == 0) {
    echo "Didn't find membership_names table, doing upgrade...\n";
    $result = $db->query("create table membership_names (id int not null primary key auto_increment, owner_id int not null, type_id int not null, name varchar(64), created_at timestamp, index owner_id_idx (owner_id), index type_id_idx (type_id))");
    if ($result == FALSE) {echo "Failed to create table membership_names: ".$db->error."\n"; return;}
    $result = $db->query("drop table if exists membership_credits");
    if ($result == FALSE) {echo "Failed to drop table membership credits: ".$db->error."\n";}
    $result = $db->query("create table membership_credits (id int not null primary key auto_increment, membership_id int, owner_id int not null, type_id int not null, price_paid decimal(10,2) not null default '0.0', auto_activate tinyint, start timestamp null, end timestamp null, purchased timestamp not null default NOW(), notes text, index membership_id_idx (membership_id), index owner_id_idx (owner_id), index type_id_idx (type_id))");
    if ($result == FALSE) {echo "Failed to create table membership_credits: ".$db->error."\n"; return;}
    $result = $db->query("drop table if exists membership_users");
    if ($result == FALSE) {echo "Failed to drop table membership_users: ".$db->error."\n";}
    $result = $db->query("create table membership_users (id int not null primary key auto_increment, membership_id int not null, user_id int not null, index membership_id_idx (membership_id), index user_id_idx (user_id))");
    if ($result == FALSE) {echo "Failed to create table membership_credits: ".$db->error."\n"; return;}
    $result = $db->query("drop table if exists membership_log");
    $result = $db->query("create table membership_log (id int not null primary key auto_increment, membership_id int not null, user_id int not null, action varchar(64) not null, for_user_id int, result varchar(64), index membership_id_idx (membership_id), index user_id_idx (user_id))");
    if ($result == FALSE) {echo "Failed to create table membership_credits: ".$db->error."\n"; return;}
    // Get lookup table for duplicated membership_types
    $table = $db->query("select a.id as from_id,b.id as to_id from membership_types as a left join membership_types as b on a.length = b.length AND a.number=b.number and a.price=b.price where a.auto_renew=1 and b.auto_renew=0");
    $type_lookup=array();
    while($obj = $table->fetch_object()) {
        $type_lookup[$obj->from_id] = $obj->to_id;
    }
    // Get list of users with memberships
    $users = $db->query("select distinct user_id from memberships");
    while($user = $users->fetch_object()) {
        echo "@";
        $user_id = $user->user_id;
        $memberships_added = array();
        // for each user get a list of membership types owned
        $types = $db->query("select distinct type_id from memberships where user_id=$user_id");
        while ($type = $types->fetch_object()) {
            echo "!";
            $old_type_id = $type->type_id;
            $type_id = $old_type_id;
            if ($type_id == 0) {
                continue;
            }
            // Check to see if type is a duplicated type, if so remap it
            if (array_key_exists($old_type_id,$type_lookup)) {
                $type_id = $type_lookup[$old_type_id];
                echo "*$old_type_id->$type_id*";
            }
            $membership_id = NULL;
            if (!array_key_exists($type_id,$memberships_added)) {
                // Lookup the name of type 
                $type_name_lookup = $db->query("select name from membership_types where id=$type_id")->fetch_object();
                $type_name = $type_name_lookup->name;
                // for each membership type create a new membership
                $db->query("insert into membership_names values ('', $user_id, $type_id, '$type_name Membership', NOW())");
                $membership_id = $db->insert_id;
                // Add each user to their own memberships (assumption but a fairly safe one for now)
                $db->query("insert into membership_users values ('', $membership_id, $user_id)");
                $memberships_added[$type_id] = $membership_id;
            }
            $membership_id = $memberships_added[$type_id];
            // get a list of old memberships of that type and create membership credits for them
            $credits = $db->query("select m.*,t.auto_renew from memberships as m,membership_types as t where m.user_id='$user_id' and m.type_id='$old_type_id' and m.type_id=t.id");
            while ($credit = $credits->fetch_object()) {
                echo ".";
                if ($credit->auto_renew) {
                    $subscription = 2;
                } else {
                    $subscription = 0;
                }
                $start = $credit->start;
                $end = $credit->end;
                $price = $credit->price;
                $purchased = $credit->purchased;
                $notes = $db->escape_string($credit->notes);
                // Add credit
                $db->query("insert into membership_credits values ('', '$membership_id', '$user_id', '$type_id', '$price', '$subscription', '$start', '$end', '$purchased', '$notes')");
            }
        }
    } // end users while
    echo "\n"; // Make clean exit
    // Fix all the credits '0000-00-00 00:00:00' to NULL
    $db->query("update membership_credits set start=null where start='0000-00-00 00:00:00'");
    $db->query("update membership_credits set end=null where end='0000-00-00 00:00:00'");
    // Update current_memberships view
    $db->query("alter sql security invoker view current_memberships as select c.membership_id as id,u.user_id,c.type_id,c.start,c.end,c.purchased,c.price_paid,c.notes from membership_credits as c,membership_users as u where c.membership_id=u.membership_id and c.membership_id is not null and c.start<=NOW() and c.end>=now();");
    // Update membership_type
    $db->query("alter table membership_types change auto_renew subscription TINYINT NOT NULL DEFAULT 0;");
    $db->query("alter table membership_types add column paypal_button varchar(16) after subscription;");
    $db->query("alter table membership_types add column paypal_subscription_button varchar(16) after paypal_button;");
    $db->query("alter table membership_types add column disabled TINYINT NOT NULL DEFAULT 0 after paypal_subscription_button;");
    foreach ($type_lookup as $key=>$value) {
        $db->query("delete from membership_types where id=$key");
        $db->query("update membership_types set subscription=1 where id=$value");
    }
}
?>
