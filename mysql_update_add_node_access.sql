
alter table nodes add column hostname VARCHAR(64) DEFAULT NULL, add column ip VARCHAR(16) DEFAULT NULL, add column mac VARCHAR(18) DEFAULT NULL, add column login_key VARCHAR(64) DEFAULT NULL, add column enabled tinyint DEFAULT 0;

create table if not exists access_groups (id int(6) unsigned primary key not null auto_increment, name VARCHAR(64) NOT NULL, enabled tinyint unsigned DEFAULT 0 ) ENGINE=InnoDB;

create table if not exists access_group_users 
(access_group_id int(6) unsigned not null, user_id int(6) unsigned not null, INDEX grp_id_index (access_group_id), INDEX uid_index (user_id));


create table if not exists access_group_priveleges 
(id int(6) unsigned primary key not null auto_increment, access_group_id int(6) unsigned not null, 
node_id int(6) not null, schedule_id int(6) UNSIGNED default NULL, membership_type_id int(6) default NULL, 
INDEX grp_id_index (access_group_id), INDEX node_id_index (node_id));

create table if not exists access_user_priveleges 
(id int(6) unsigned primary key not null auto_increment, user_id int(6) not null, 
node_id int(6) unsigned not null, schedule_id int(6) UNSIGNED default NULL, membership_type_id int(6) default NULL,
INDEX uid_index (user_id), INDEX node_id_index (node_id));

create table if not exists schedules (id int(6) unsigned primary key not null auto_increment, name VARCHAR(64) not null);

create table if not exists schedule_times (id int(6) unsigned primary key not null auto_increment, 
schedule_id int(6) unsigned not null, day_of_week tinyint default NULL, start_date date default NULL, end_date date default NULL, 
start_time TIME default NULL, end_time TIME default NULL, INDEX sch_id_index (schedule_id));

create or replace view current_schedules as 
select distinct schedule_id from schedule_times where 
(day_of_week is NULL OR day_of_week=DAYOFWEEK(NOW())) AND 
(start_date is NULL OR start_date <= DATE(NOW())) AND 
(end_date is NULL OR end_date>= DATE(NOW())) AND 
(start_time is null OR start_time <= TIME(NOW())) AND 
(end_time is null OR end_time >= TIME(NOW()));

create or replace view current_memberships as
select * from memberships where start<=NOW() and end>=NOW();
create table if not exists access_manual_unlock (id int(6) unsigned primary key not null auto_increment, name VARCHAR(64) not null, 
node_id int(6) unsigned not null, schedule_id int(6) unsigned not null, enabled tinyint not null);
