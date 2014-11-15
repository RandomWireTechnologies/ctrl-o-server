ctrl-o-server
===========

This is the PHP code based on Code Ignitor and Flexi-Auth that provides the database backend management.

== Requirements ==
* Apache or similar
* PHP
* MySQL

== Setup ==
From a fresh Ubuntu install

sudo apt-get update
sudo apt-get install apache2 mysql-server php5 git libapache2-mod-auth-mysql php5-mysql libapache2-mod-php5 php5-mcrypt
sudo mysql_install_db
sudo /usr/bin/mysql_secure_installation

* edit /etc/apache2/mods-enabled/dir.conf
** Add "index.php" as first item in DirectoryIndex

* Add /home/ctrl-o/ctrl-o-server as the web root for apache under /etc/apache2/sites-enabled
sudo adduser ctrl-o

* As user ctrl-o:
** git clone https://github.com/RandomWireTechnologies/ctrl-o-server.git
** cd ctrl-o-server
** mysql -p -uroot < ctrl_o.sql

* goto site and register new user
* manually edit mysql tables to make that user an admin
