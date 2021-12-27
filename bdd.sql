Drop database if exists restaurant ;
create database restaurant CHARACTER SET utf8 COLLATE utf8_general_ci;
use restaurant ;

create table utilisateur( 
	pseudo varchar(255) unique primary key,
	password varchar(255),
	fullname varchar(255),
	telephone int(8),
                 email varchar(255),
	role varchar(255)
)ENGINE=InnoDB;

create table plat(
	id int auto_increment primary key,
	nom varchar(50) unique,
	prix real,
	description varchar(255),
	photo varchar(255)
)ENGINE=InnoDB;

create table commande(
	id int primary key,
	date_commande varchar(255),
	prix_total real,
	modePayement varchar(255),
                 address varchar(255),
	pseudo varchar(255)
)ENGINE=InnoDB;

create table list_commande(
	id_commande int ,
	id_plat int,
	nbr_plat int 
)ENGINE=InnoDB;

create table reservation(
	id int primary key,
                 date_reservation varchar(255),
                 heure_arrive varchar(255),
	nombre_perso int,
                 phone varchar(255),
                 fullname varchar(255),
                 email varchar(255)
)ENGINE=InnoDB;


Alter table commande add foreign key(pseudo) references utilisateur(pseudo);
Alter table list_commande add foreign key(id_commande) references commande(id);
Alter table list_commande add primary key(id_commande,id_plat) ;
Alter table list_commande add foreign key(id_plat) references plat(id);
