drop database enahweb;

use pruebas;

create database enahweb;

use enahweb;

create table datos(
idpm int auto_increment primary key not null,
apellido1 varchar(35) not null, 
apellido2 varchar(35) null, 
nombre1 varchar(35) not null, 
nombre2 varchar(35) null, 
cedula varchar(20) null, 
edad int not null, 
correo varchar(50), 
celular varchar(20), 
sexo Varchar(15), 
departamento varchar(100),
estudia varchar(2),
lugar_estudio varchar(100) null, 
carrera varchar(100) not null,
turno varchar(20) not null,
tipo Varchar(20) not null,
documentos varchar(50),
fechainscrip datetime
)  CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';


select CARRERA, TURNO, COUNT(*) AS 'NUN' from datos GROUP BY CARRERA, TURNO;
select * from datos;
