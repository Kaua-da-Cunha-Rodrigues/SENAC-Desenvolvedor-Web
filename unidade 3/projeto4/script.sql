mysql -u root

create database projeto4;

use database projeto4;

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50) not null,
    usuario_login varchar(20) not null,
    usuario_senha varchar(50) not null,
    perfil enum("adm","user")
);

insert into usuario values(null,"Kauã","cunhakaua",md5("123"),"adm");
insert into usuario values(null,"Maria","mariazinha",md5("333"),"user");
insert into usuario values(null,"João","jhon",md5("joao123"),"user");

#esse md5 é um tipo de criptografia para proteger as senhas, porém é um método meio batido

select * from usuario;



