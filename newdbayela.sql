drop database if exists ayela;
create database if not exists ayela;
use ayela;


create table users(
    id int(10) not null collate latin1_general_ci  unique key AUTO_INCREMENT,
	  nom varchar(255) not null collate latin1_general_ci primary key,
    mdp varchar(255) not null collate latin1_general_ci,
    mail varchar(255) not null collate latin1_general_ci
  );



CREATE TABLE `declarations` (
  id int(11) NOT NULL primary key AUTO_INCREMENT ,
  nom varchar(255) not null ,
  prenom varchar(255) not null,
  numero_document varchar(255)  not null unique key,
  type_document varchar(255) not null,
  photo varchar(255) not null,
  telephone varchar(255) not null,
  what varchar(255) not null,
  commune varchar(255) not null ,
  lieu varchar(255) not null
);


CREATE TABLE `retrouve` (

   id int(11) NOT NULL primary key AUTO_INCREMENT ,
  nom varchar(255) not null ,
  prenom varchar(255) not null,
  numero_document varchar(255)  not null  unique key,
  type_document varchar(255) not null,
  photo varchar(255) not null default "",
  telephone varchar(255) not null,
  what varchar(255) not null,
  commune varchar(255) not null ,
  lieu varchar(255) not null

);