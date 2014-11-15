<html>
<body>
	<h1>New member added...</h1>
    <ul>
	    <li>Name: <?php echo $name;?></li>
	    <li>Username: <?php echo $username;?></li>
	    <li>Email: <?php echo $email;?></li>
    </ul>
    <p>Click <?php echo anchor('user/setup/'.$user_id, 'here');?> to setup user. </p>
</body>
</html>