	<div class="content_wrap nav_bg">
		<div id="sub_nav_wrap" class="content">
        <ul id="sub_nav">
        <?php if (! $this->flexi_auth->is_logged_in()) { ?>
        	<li>
        	    <a href="<?php echo $base_url;?>auth">Login</a>
        	</li>
        	<li>
        	    <a href="<?php echo $base_url;?>auth/register_account">Register</a>
        	</li>
            <?php } else { ?>
                <li>
                    <a href="<?php echo $base_url;?>user/profile">Profile</a>
                </li>
                <li>
                    <a href="<?php echo $base_url;?>card">Cards</a>
                </li>
                <li>
                    <a href="<?php echo $base_url;?>membership">Membership</a>
                </li>
                <?php if ($this->flexi_auth->is_admin()) { ?>
                    <li class="css_nav_dropmenu">
                	    <a href="<?php echo $base_url;?>auth_admin/">Admin Dashboard</a>
                        <ul>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/">Admin Dashboard</a>
                            </li>
                            <li class="header">Select Feature to Manage</li>
                            <li>
                                <a href="<?php echo $base_url;?>card/manage">Manage Cards</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url;?>membership/manage">Manage Memberships</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url;?>node">Manage Nodes</a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/manage_user_accounts">Manage User Accounts</a>			
                            </li>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/manage_user_groups">Manage User Groups</a>			
                            </li>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/manage_privileges">Manage User Privileges</a>			
                            </li>
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/list_user_status/active">List Active Users</a>
                            </li>	
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/list_user_status/inactive">List Inactive Users</a>
                            </li>	
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/delete_unactivated_users">List Unactivated Users</a>
                            </li>	
                            <li>
                                <a href="<?php echo $base_url;?>auth_admin/failed_login_users">List Failed Logins</a>			
                            </li>	
                        </ul>		
                    </li>
        		<?php } ?>
        		<li>
        		    <a href="<?php echo $base_url;?>auth/logout">Logout</a>
        		</li>
        	<?php } ?>
        	</ul>
        </div>
	</div>
