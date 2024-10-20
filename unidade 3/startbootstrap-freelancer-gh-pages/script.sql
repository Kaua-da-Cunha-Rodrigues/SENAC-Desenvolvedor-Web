mysql -u root

create database projeto1;

use projeto1;

create table contato(
    idcontato int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(15) not null,
    mensagem text
);

insert into contato values(null,"Kauã","kaua@gmail.com","222-333","Pizza de Frango");

select * from contato;

