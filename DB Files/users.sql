/*
SQLyog Community v11.12 (64 bit)
MySQL - 5.0.41-log 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `users` (
	`uid` int (7),
	`username` varchar (90),
	`password` varchar (150),
	`firstname` varchar (75),
	`lastname` varchar (75),
	`flag` varchar (60)
); 
insert into `users` (`uid`, `username`, `password`, `firstname`, `lastname`, `flag`) values('1','admin','password','Michael','Balkos','admin');
insert into `users` (`uid`, `username`, `password`, `firstname`, `lastname`, `flag`) values('2','user','password','Frank','lnFrank','user');
