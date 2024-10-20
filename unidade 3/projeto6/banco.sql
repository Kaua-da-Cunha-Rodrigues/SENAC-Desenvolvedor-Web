mysql -u root

create database projeto6;

create table produtos(
    idproduto int primary key auto_increment,
    nome varchar(40) not null,
    descricao varchar(60) not null,
    quantidade int not null,
    valor real not null,
    foto varchar(40) not null,
    dtcadastro date
);
