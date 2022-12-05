create table pais(
	id int AUTO_INCREMENT PRIMARY KEY NOT null,
    nome varchar(40),
    imagem_inicio text,
    descricao text,

    nome_oficial varchar(80),
    gentilico varchar(40),
    governo varchar(40),
    estados varchar(40),
    populacao int,
    localizacao varchar(40),
    capital varchar(40),
    idioma varchar(40),
    area float(8,3),
    pib float(4,3),
    idh float(4,3),
    moeda varchar(40),

    text_historia text,
    imagem_historia text,

    text_bandeira text,
    imagem_bandeira text,

    text_economia text,
    imagem_economia text,

    text_cultura text,
    imagem_cultura text,

    text_clima text,
    text_vegetacao text,
    text_relevo text
) DEFAULT charset = utf8;

create table regiao(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    id_pais int,
    nome varchar(40),
    imagem_inicio text,
    descricao text,

    estados text,
    populacao int,
    localizacao varchar(40),
    area float(8,3),
    pib float(4,3),
    idh float(4,3),

    text_historia text,
    imagem_historia text,

    text_economia text,
    imagem_economia text,

    text_cultura text,
    imagem_cultura text,

    text_clima text,
    text_vegetacao text,
    text_relevo text
) DEFAULT charset = utf8;

create table estado(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    id_pais int,
    id_regiao int,
    nome varchar(40),
    imagem_inicio text,
    descricao text,

    gentilico varchar(40),
    populacao int,
    localizacao varchar(40),
    capital varchar(40),
    area float(8,3),
    pib float(4,3),
    idh float(4,3),

    text_historia text,
    imagem_historia text,

    text_bandeira text,
    imagem_bandeira text,

    text_economia text,
    imagem_economia text,

    text_cultura text,
    imagem_cultura text,

    text_clima text,
    text_vegetacao text,
    text_relevo text
) DEFAULT charset = utf8;

create table cidade(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    id_pais int,
    id_estado int,
    nome varchar(40),
    imagem_inicio text,
    descricao text,

    gentilico varchar(40),
    populacao int,
    localizacao varchar(40),
    area float(8,3),
    pib float(4,3),
    idh float(4,3),

    text_historia text,
    imagem_historia text,

    text_bandeira text,
    imagem_bandeira text,

    text_economia text,
    imagem_economia text,

    text_cultura text,
    imagem_cultura text,

    text_clima text,
    text_vegetacao text,
    text_relevo text
) DEFAULT charset = utf8;

create table distrito(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    id_pais int,
    id_cidade int,
    nome varchar(40),
    imagem_inicio text,
    descricao text,
    
    populacao int,
    localizacao varchar(40),
    area float(8,3),
    pib float(4,3),
    idh float(4,3),

    text_historia text,
    imagem_historia text,

    text_economia text,
    imagem_economia text,

    text_cultura text,
    imagem_cultura text,

    text_clima text,
    text_vegetacao text,
    text_relevo text
) DEFAULT charset = utf8;

create table pturistico(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    id_pais int,
    id_regiao int,
    id_estado int,
    id_cidade int,
    id_distrito int,
    nome varchar(40),
    imagem_inicio text,

    localizacao varchar(40),
    area float(8,3),
    data_construcao date,
    tipo int,
    responsavel varchar(40),

    text_historia text,
    imagem_historia text,

    text_curiosidades text,
    imagem_curiosidades text
) DEFAULT charset = utf8;

create table adm(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    nome varchar(40),
    email text,
    nascimento date,
    senha varchar(40)
) DEFAULT charset = utf8;