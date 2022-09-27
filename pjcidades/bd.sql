create table pais(
	id int AUTO_INCREMENT PRIMARY KEY NOT null,
    nome varchar(40),
    imagem_inicio text,
    nome_oficial varchar(80),
    gentilico varchar(40),
    populacao int,
    localizacao varchar(40),
    capital varchar(40),
    idioma varchar(40),
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

create table regiao(
    id int AUTO_INCREMENT PRIMARY KEY NOT null,
    nome varchar(40),
    imagem_inicio text,
    nome_oficial varchar(80),
    gentilico varchar(40),
    populacao int,
    localizacao varchar(40),
    capital varchar(40),
    idioma varchar(40),
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