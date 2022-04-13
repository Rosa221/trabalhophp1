create database avaliacao;
use avaliacao;

create table produto(
    idproduto int auto_increment primary key,
    bebida varchar(20),
    tipo varchar(20),
    valor double,
    pais varchar(20),
    comentario varchar(20),
    nota int
);

desc produto;

insert into produto values(null,'Brahma','Cerveja',6.,'Brasil','Ótima Cerveja',4);

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);

#inserir dado na tabela
insert into usuario values(null,'Manuela','manuandrade',md5('08072003'),'adm');
insert into usuario values(null,'Isabelle','isarodrigues',md5('070619'),'user');
insert into usuario values(null,'Ariane','arianeliberato',md5('liberato'),'user');
insert into usuario values(null,'Maria Isabel','mabelbiscoitinho',md5('biscoitinho'),'user');

select * from usuario;