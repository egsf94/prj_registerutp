
CREATE DATABASE dbregutp;
use dbregutp;
CREATE TABLE carrera
(
	idcarrera INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nomcarrera varchar(30) NOT NULL,
	fechaC datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	fechaM datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	estado int(1) DEFAULT '0'
)AUTO_INCREMENT=101;

CREATE TABLE alumno
(
	idalumno int(8) NOT NULL PRIMARY KEY,
	nombre varchar(20) NOT NULL,
	apelllidoP varchar(15) NOT NULL,
	apellidoM varchar(15) NOT NULL,
	email varchar(30) NOT NULL,
	telefono int(9) NOT NULL,
	idcarrera INT(3),
	fechaC datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	fechaM datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	estado int(1) DEFAULT '0'
);

CREATE TABLE horario
(
	idalumno INT(8),
	idmateria INT(3),
	calificacion INT(2) NOT NULL,
	fechaC datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	fechaM datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	estado int(1) DEFAULT '0'
);

CREATE TABLE materia
(
	idmateria INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nommateria varchar(30) NOT NULL,
	fechaC datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	fechaM datetime DEFAULT CURRENT_TIMESTAMP  NOT NULL,
	estado int(1) DEFAULT '0'
)AUTO_INCREMENT=101;

CREATE INDEX idmateria ON horario(idmateria);
CREATE INDEX idalumno ON horario(idalumno);
CREATE INDEX idcarrera ON alumno(idcarrera);
Alter TABLE horario ADD FOREIGN KEY(idmateria) references materia(idmateria);
Alter TABLE alumno ADD FOREIGN KEY(idcarrera) references carrera(idcarrera);
Alter TABLE horario ADD FOREIGN KEY(idalumno) references alumno(idalumno);

INSERT INTO materia(nommateria,fechaC,fechaM) VALUES ('Etica',NOW(),NOW());
INSERT INTO materia(nommateria,fechaM) VALUES ('Gestion de procesos','2023-02-06 19:59');
INSERT INTO carrera(nomcarrera) VALUES ('');
INSERT INTO carrera(nomcarrera) VALUES ('Ingeniera de Sistemas');
INSERT INTO alumno(idalumno,nombre,apelllidoP,apellidoM,email,telefono,idcarrera) VALUES (76268289,'gabriel', 'santos','florez','ed_94@outlook.com','985623569',102);