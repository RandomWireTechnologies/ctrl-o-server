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
    $result = $db->query("create table membership_names (id int not null primary key auto_increment, owner_id int not null, type_id int not null, name varchar(64), created_at timestamp)");
    if ($result == FALSE) {echo "Failed to create table membership_names: ".$db->error."\n"; return;}
    $result = $db->query("drop table if exists membership_credits");
    if ($result == FALSE) {echo "Failed to drop table membership credits: ".$db->error."\n";}
    $result = $db->query("create table membership_credits (id int not null primary key auto_increment, membership_id int, owner_id int not null, type_id int not null, price_paid decimal(10,2) not null default '0.0', auto_activate tinyint, start timestamp, end timestamp, purchased timestamp not null, notes text)");
    if ($result == FALSE) {echo "Failed to create table membership_credits: ".$db->error."\n"; return;}
    $result = $db->query("drop table if exists membership_users");
    if ($result == FALSE) {echo "Failed to drop table membership_users: ".$db->error."\n";}
    $result = $db->query("create table membership_users (id int not null primary key auto_increment, membership_id int not null, user_id int not null)");
    if ($result == FALSE) {echo "Failed to create table membership_credits: ".$db->error."\n"; return;}
    $result = $db->query("drop table if exists membership_log");
    $result = $db->query("create table membership_log (id int not null primary key auto_increment, membership_id int not null, user_id int not null, action varchar(64) not null, for_user_id int, result varchar(64))");
    if ($result == FALSE) {echo "Failed to create table membership_credits: ".$db->error."\n"; return;}
    // Get list of users with memberships
    $users = $db->query("select distinct user_id from memberships");
    while($user = $users->fetch_object()) {
        echo "@";
        $user_id = $user->user_id;
        // for each user get a list of membership types owned
        $types = $db->query("select distinct type_id from memberships where user_id=$user_id");
        while ($type = $types->fetch_object()) {
            echo "!";
            $type_id = $type->type_id;
            // for each membership type create a new membership
            $db->query("insert into membership_names values ('', $user_id, $type_id, 'Unnamed Membership', NOW())");
            $membership_id = $db->insert_id;
            // Add each user to their own memberships (assumption but a fairly safe one for now)
            $db->query("insert into membership_users values ('', $membership_id, $user_id)");
            // get a list of old memberships of that type and create membership credits for them
            $credits = $db->query("select * from memberships where user_id='$user_id' and type_id='$type_id'");
            while ($credit = $credits->fetch_object()) {
                echo ".";
                $start = $credit->start;
                $end = $credit->end;
                $price = $credit->price;
                $purchased = $credit->purchased;
                $notes = $db->escape_string($credit->notes);
                // Add credit
                $db->query("insert into membership_credits values ('', '$membership_id', '$user_id', '$type_id', '$price', 0, '$start', '$end', '$purchased', '$notes')");
            }
        }
    
    } // end users while
    echo "\n"; // Make clean exit
    // Update current_memberships view
    $db->query("alter sql security invoker view current_memberships as select c.membership_id as id,u.user_id,c.type_id,c.start,c.end,c.purchased,c.price_paid,c.notes from membership_credits as c,membership_users as u where c.membership_id=u.membership_id and c.membership_id is not null and c.start<=NOW() and c.end>=now();");
}
?>
