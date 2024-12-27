create database concessionaria;

use concessionaria;

create table users (
    id integer auto_increment primary key,
    name varchar(32),
    email varchar(128),
    phone varchar(16),
    password varchar(256)
);

create table produtos (
    id integer auto_increment primary key,
    rotulo varchar(32),
    marca varchar(32),
    preco float,
    estoque integer
);

create table clientes (
    id integer auto_increment primary key,
    nome varchar(64),
    rg integer
);

create table pedidos (
    id integer auto_increment primary key,
    clientes_id integer,
    produto_id integer,
    quantidade integer,
    foreign key (clientes_id) references clientes(id),
    foreign key (produto_id) references produtos(id)
);

create table relatorios (
    id integer auto_increment primary key,
    nome varchar(64),
    setor varchar(64),
    data date
);