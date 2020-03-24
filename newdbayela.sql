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
  `id_declaration` int(11) NOT NULL primary key ,
  `LibelleDeclaration` varchar(20) NOT NULL,
  `F_id_piece` int(11) NOT NULL,
  `F_id_personne` int(11) NOT NULL
);


CREATE TABLE `pieces` (
  `id_piece` int(11) NOT NULL primary key ,
  `LibellePiece` varchar(20) NOT NULL,
  `NumeroPiece` varchar(25) NOT NULL
);