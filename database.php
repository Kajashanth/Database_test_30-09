<?php

/*
CREATE TABLE `experiments` (
	`id`		int(11)		NOT NULL auto_increment,
    	`code`		varchar(10)	NOT NULL unique,
	`title`		varchar(100)	NOT NULL,
	`amount`	int(11)		NOT NULL default 0,
	PRIMARY KEY (`id`)
);

CREATE TABLE `subjects` (
	`id`		int(11)		NOT NULL auto_increment,
	`cf`		varchar(16)	NOT NULL unique,
    	`name`		varchar(100)	NOT NULL,
    	`surname`	varchar(100)	NOT NULL,
	PRIMARY KEY  (`id`)
);

CREATE TABLE `experiment_subject` (
	`experiment_id`	int(11)	NOT NULL,
    	`subject_id`	int(11)	NOT NULL,
    	`date`		date	NOT NULL,
    	PRIMARY KEY (`experiment_id`, `subject_id`)
);
*/

$dbhost = "localhost";
$dbname = "iit_experiments";
$dbuser = "admin";
$dbpass = "DLc0TIdrYLLC";
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die (mysql_error());
mysql_select_db($dbname) or die (mysql_error());

?>
