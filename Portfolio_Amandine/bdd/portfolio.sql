Drop database if exists portfolio; 
Create database portfolio; 
Use portfolio; 

Drop table if exists user;
Create table if not exists user (
	iduser int(3) not null auto_increment,
	nom varchar(30),
	prenom varchar(30),
	email varchar(50),
	mdp varchar(50),
	role enum ("admin", "user"),
	primary key (iduser)
) ENGINE=InnoDB;
