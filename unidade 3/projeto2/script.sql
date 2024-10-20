mysql -u root

create database projeto2;

use projeto2;

create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(12) not null,
    dtcadastro date
);