mysql -u root

create database projeto5;

use projeto 5;

create table artigo(
    idartigo int primary key auto_increment,
    titulo varchar(50) not null,
    autor varchar(50) not null,
    artigo text,
    foto varchar(30) not null
);