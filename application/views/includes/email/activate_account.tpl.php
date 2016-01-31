<html>
<body>
	<p>Thank you for signing up for a Lowell Makes membership account.
	<p>In order to activate the account for <?php echo $identity;?>, please click <?php echo anchor('auth/activate_account/'. $user_id .'/'. $activation_token, 'this link');?> to activate your account.</p>
	<p>Or copy and paste the following line into your browser:</p>
	<p><?php echo anchor('auth/activate_account/'. $user_id .'/'. $activation_token);?></p>
</body>
</html>
