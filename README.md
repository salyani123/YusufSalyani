# YusufSalyani

The following are the mysql queries to set up the database

CREATE DATABASE cat 2;

CREATE TABLE users (
	user_ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	user_first_name varchar(50) NOT NULL,
	user_last_name varchar(50) NOT NULL,
	username varchar(50) NOT NULL,
	user_password varchar(50) NOT NULL,
	user_email varchar(100) NOT NULL,
	user_phone varchar(20) NOT NULL
);
