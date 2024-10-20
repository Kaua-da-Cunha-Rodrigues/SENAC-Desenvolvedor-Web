mysql -u root

create database projeto7;

use projeto7;

create table cargo(
    idcargo int auto_increment primary key,
    nomecargo varchar(30)
);

create table funcionario(
    idfuncionario int auto_increment primary key,
    nome varchar(40) not null,
    email varchar(40) unique,
    admissao date,
    idcargo int,
    foreign key(idcargo) REFERENCES cargo(idcargo) 
);

#foreign key faz referência ao cargo

create table endereco(
    idendereco int auto_increment primary key,
    cidade varchar(50),
    estado char(2),
    idfuncionario int,
    foreign key(idfuncionario) REFERENCES funcionario(idfuncionario) on delete cascade
);

insert into cargo values(null, "TI Desenvolvedor");
insert into cargo values(null, "Analista");
insert into cargo values(null, "Vendedor");
insert into cargo values(null, "Suporte");
insert into cargo values(null, "Gerente");
insert into cargo values(null, "Adm de Banco de Dados");

select * from cargo;