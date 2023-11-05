create database Kidde;
use Kidde;
#drop database Kidde;

create table administrador(
	id int primary key auto_increment not null,
    nome varchar(50) not null,
    cargo varchar(50) not null,
    matricula varchar(50) not null,
    senha varchar(20) not null
    
    
);
create table usuario(
	matricula varchar(20) primary key,
    nome varchar(50) not null,
    setor varchar(50) not null,
    senha varchar(20)
   
);
create table setor(
	id int primary key,
    lider varchar(50),
    nome varchar(50)
);
create table linha(
	id int primary key,
    responsavel varchar(50) not null,
	setor varchar(50)
);


create table item(
	id int primary key auto_increment not null,
    nome varchar(50),
    cod varchar(50),
    posicao varchar(50),
    quantidade int,
    status_cadastro datetime,
    id_usuario int,
    foreign key (id_usuario) references usuario(id)
);

create table reabastecimento(
	id int PRIMARY key AUTO_INCREMENT,
    responsavel varchar(50),
    id_linha int,
    foreign key (id_linha) references linha(id),
    id_item int, 
    foreign key (id_item) references item(id),
    quantidade int,
    prioridade varchar(50),
    observacoes varchar(200),
    status_pedido datetime
);

create table reabastecimento_concluido(
	id int PRIMARY key AUTO_INCREMENT,
    status_concluido datetime,
    status_reabastecimento datetime,
    id_reabastecimento int,
    id_usuario int,
    foreign key (status_reabastecimento) references reabastecimento(status_pedido),
    foreign key (id_reabastecimento) references reabastecimento(id),
    foreign key (id_usuario) references usuario(id)
    );


insert into usuario(matricula,nome,setor,senha)
values("712","Fabio","Expedicao","12345678");


select * from usuario;



insert into administrador(nome,cargo,matricula,senha)
values("Joao", "Adm","710" ,"12345678" );



#Trigger

DELIMITER !
CREATE TRIGGER concluido
AFTER INSERT ON  reabastecimento_concluido
FOR EACH ROW
BEGIN
  UPDATE produto SET quantidade = quantidade - NEW.quantidade where id = new.id_produto;
END !


#CREATE TRIGGER deletado
#AFTER DELETE ON produto
#FOR EACH ROW
#BEGIN
 #   INSERT INTO deletado (id_produto, id_usuario, nome_produto, data_delete)
  #  VALUES (OLD.id, OLD.id_usuario, OLD.nome, NOW());
#END!







