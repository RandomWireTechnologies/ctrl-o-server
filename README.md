ctrl-o-server
===========

This is the PHP code based on Code Ignitor and Flexi-Auth that provides the database backend management.

##Requirements
* Apache or similar
* PHP
* MySQL

##Setup
From a fresh Ubuntu install

* sudo apt-get update
* sudo apt-get install apache2 mysql-server php5 git libapache2-mod-auth-mysql php5-mysql libapache2-mod-php5 php5-mcrypt sendmail
* sudo mysql_install_db
 * This started then didn't exit last time I ran this, but Ctrl-C to get out and move on if you hit that issue.
* sudo /usr/bin/mysql_secure_installation
 * Follow most of the defaults (you can skip root password if you set one during install above)

* edit /etc/apache2/mods-enabled/dir.conf
 * Add/Change "index.php" as first item in DirectoryIndex (eg sudo pico -w /etc/apache2/mods-enabled/dir.conf)

* Edit Apache Config
 * Change /home/ctrl-o/ctrl-o-server as the web root for apache under /etc/apache2/sites-enabled
  * Or to where ever you're going to install the ctrl-o-server code
 * Make sure ServerName matches the domain name for your website (eg ctrl-o.randomwire.biz)
 * Update settings to point to your properly signed SSL certificate or to the one created by using these steps.
 
     
* Enable mod_rewrite for Apache
 * sudo a2enmod rewrite
* sudo adduser ctrl-o (Optional)
* As user ctrl-o:
 * git clone https://github.com/RandomWireTechnologies/ctrl-o-server.git
 * cd ctrl-o-server
 * mysql -uroot -p < ctrl_o.sql
 * mysql -uroot -p ctrl-o < mysql_update_add_node_access.sql

* Restart apache
 * sudo service apache2 restart
* goto site and register new user
* manually edit mysql tables to make that user an admin

* Update mysql
 * These instructions assume you don't have another MySQL server running.  In this case you need to setup another instance of MySQL or alter the config to make both live together
 * Create users for ctrl-o - login to mysql (mysql -uroot -p)
  * use mysql
  * create user 'ctrl-o'@'%' identified by 'ctrl-o-db-password';
  * grant all on `ctrl-o`.* to 'ctrl-o'@'localhost';
  * grant all on `ctrl-o`.* to 'ctrl-o'@'%' require ssl;
  * create user 'ctrl-o-node'@'%' identified by 'ctrl-o-access'; 
  * grant replication slave on *.* to 'ctrl-o-node'@'%' require ssl;
  * flush privileges;
  * 
 * Setup replication
  * Generate SSL Certificates
   * openssl genrsa 2048 > ctrl-o-ca.key
   * openssl req -sha1 -new -x509 -nodes -days 3650 -key ctrl-o-ca.key -out ctrl-o-ca.crt
    * Fill out information for your location, for the CA use the root of your FQDN for your server for the "Common Name". For example randomwire.biz for ctrl-o.randomwire.biz
   * openssl req -sha1 -newkey rsa:2048 -days 3650 -nodes -keyout ctrl-o-server.key -out ctrl-o-server.csr
    * Fill out as above but use your FQDN for the Common Name.
   * openssl rsa -in ctrl-o-server.key -out ctrl-o-server.key
   * openssl x509 -sha1 -req -in ctrl-o-server.csr -days 3650 -CA ctrl-o-ca.crt -CAkey ctrl-o-ca.key -set_serial 01 -out ctrl-o-server.crt
   * openssl req -sha1 -newkey rsa:2048 -days 3650 -nodes -keyout ctrl-o-client.key -out ctrl-o-client.csr
   * openssl rsa -in ctrl-o-client.key -out ctrl-o-client.key
   * openssl x509 -sha1 -req -in ctrl-o-client.csr -days 3650 -CA ctrl-o-ca.crt -CAkey ctrl-o-ca.key -set_serial 01 -out ctrl-o-client.crt
   * Transfer all these new files to /etc/mysql/ (if not already there as root)
  * Edit /etc/mysql/my.cnf

# This was formally known as [safe_mysqld]. Both versions are currently parsed.
[mysqld_safe]
socket          = /var/run/mysqld/mysqld.sock
nice            = 0

[mysqld]
#
# * Basic Settings
#
user            = mysql
pid-file        = /var/run/mysqld/mysqld.pid
socket          = /var/run/mysqld/mysqld.sock
port            = 6779
basedir         = /usr
datadir         = /var/lib/mysql
tmpdir          = /tmp
lc-messages-dir = /usr/share/mysql
skip-external-locking
#
# Instead of skip-networking the default is now to listen only on
# localhost which is more compatible and is not less secure.
bind-address            = 0.0.0.0
#
# * Fine Tuning
#
key_buffer              = 16M
max_allowed_packet      = 16M
thread_stack            = 192K
thread_cache_size       = 8
# This replaces the startup script and checks MyISAM tables if needed
# the first time they are touched
myisam-recover         = BACKUP
#max_connections        = 100
#table_cache            = 64
#thread_concurrency     = 10
#
# * Query Cache Configuration
#
query_cache_limit       = 1M
query_cache_size        = 16M
#
# * Logging and Replication
#
#
# Error log - should be very few entries.
#
log_error = /var/log/mysql/error.log
#
server-id               = 1
log_bin                 = /var/log/mysql/mysql-bin.log
expire_logs_days        = 10
max_binlog_size         = 100M
#binlog_do_db           = include_database_name

ssl-ca=/etc/mysql/ctrl-o-ca.crt
ssl-cert=/etc/mysql/ctrl-o-server.crt
ssl-key=/etc/mysql/ctrl-o-server.key

innodb_buffer_pool_size = 800M
innodb_additional_mem_pool_size = 64M

* Configure Ctrl-O Settings
 * Update application/config/database.php (only if you used non-default passwords, which you should probably change
 * Update application/config/flexi_auth.php
  * Get a reCAPTCHA key.  Goto http://www.google.com/recaptcha and get a public/private key for your site and update line 522/523 with those values
  *
* Create first admin account
 * Open up page and click to register a new user, fill out form, wait for email, click confirmation link
 * Login to confirm creation
 * Login to mysql as root
  * Lookup user id (should be 1 if this is really the first user)
   * select * from users;
  * Manually make user an admin
   * update users set group_id=2 where id=1;
 * Relogin to webpage with admin user and confirm new admin tabs are available for managment
 * Back in MySQL
  * Manually add nodes for each door being added
   * insert into nodes values('','First Door','EXTERIOR_DOOR','ctrl-0','','','',1);