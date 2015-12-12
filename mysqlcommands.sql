CREATE DATABASE `tetraining` ;

USE `tetraining`;

CREATE TABLE IF NOT EXISTS `usertable` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 