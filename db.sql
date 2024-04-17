
CREATE DATABASE auth_kocins;

CREATE TABLE users (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL,
	PASSWORD VARCHAR(255) NOT null 
);


Insert INTO users
(email, PASSWORD)
VALUES
("beate@ckc.lv", "Parole123");