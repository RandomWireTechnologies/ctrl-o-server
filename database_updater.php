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

$db = mysqli_connect($host, $username, $password, $database, $port);


// Check to see if new membership tables exist
if ($db->query("show tables like 'membership_names'")->num_rows == 0) {
    $db->query("create table membership_names (id int not null primary key auto_increment, owner_id int not null, type_id int not null, name varchar(64), created_at timestamp)");
    $db->query("drop table membership_credits if exists");
    $db->query("create table membership_credits (id int not null primary key auto_increment, membership_id int, owner_id int not null, type_id int not null, price_paid decimal(10,2) not null default '0.0', auto_activate tinyint, start timestamp, end timestamp, purchased timestamp not null, notes text)");
    $db->query("drop table membership_users if exists");
    $db->query("create table membership_users (id int not null primary key auto_increment, membership_id int not null, user_id int not null)");
    $db->query("drop table membership_log if exists");
    $db->query("create table membership_log (id int not null primary key auto_increment, membership_id int not null, user_id int not null, action varchar(64) not null, for_user_id int, result varchar(64))");
    // Get list of users with memberships
    $users = $db->query("select distinct user_id from memberships");
    while($user = $users->fetch_object()) {
        $user_id = $user->user_id;
        // for each user get a list of membership types owned
        $types = $db->query("select distinct type_id from memberships where user_id=$user_id");
        while ($type = $types->fetch_object()) {
            $type_id = $type->type_id;
            // for each membership type create a new membership
            $db->query("insert into membership_names values ('', $user_id, $type_id, 'Unnamed Membership', NOW())");
            $membership_id = $db->insert_id;
            // get a list of old memberships of that type and create membership credits for them
            $credits = $db->query("select * from memberships where user_id='$user_id' and type_id='$type_id'");
            while ($credit = $credits->fetch_object()) {
                $start = $credit->start;
                $end = $credit->end;
                $price = $credit->price;
                $purchased = $credit->purchased;
                $notes = $credit->notes;
                // Add credit
                $db->query("insert into membership_credits values ('', '$membership_id', '$user_id', '$type_id', '$price', 0, '$start', '$end', '$purchased', '$notes')");
            }
        }
    
    } // end users while
}
?>