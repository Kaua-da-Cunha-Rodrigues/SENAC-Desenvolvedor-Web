mysql -u root

create database projeto3;
use projeto3;

create table aluno(
    idaluno int primary key auto_increment,
    nome varchar(50) not null,
    nascimento char(10) not null,
    sexo varchar(14) not null,
    telefone varchar(11) not null,
    endereco varchar(50) not null,
    curso varchar(50) not null
);

select * from aluno;

