
CREATE DATABASE dbregutp;
use dbregutp;
CREATE TABLE usuario
(
	iduser INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(10) NOT NULL,
	password varchar(100) NOT NULL,
	nombre varchar(20) NOT NULL,
	apellidoP varchar(15) NOT NULL,
	apellidoM varchar(15) NOT NULL,
	email varchar(30) NOT NULL,
	admin varchar(2) NOT NULL,
	fechaC datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	fechaM datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	estado int(1) DEFAULT '1'
)AUTO_INCREMENT=101;

INSERT INTO usuario(username,password,nombre,apelllidoP,apellidoM,email,admin) VALUES ('eddi','eddi123','gabriel', 'santos','florez','ed_94@outlook.com','si');
INSERT INTO usuario(username,password,nombre,apelllidoP,apellidoM,email,admin) VALUES ('cintyaer','cintya123','cintya', 'espinoza','rivera','ciner@outlook.com','no');
