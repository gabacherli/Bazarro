drop table if exists usuario;

create table usuario (
    email varchar(100),
    senha varchar(255),
    sexo char,
    cpf varchar(15),
    rg varchar(15),
    endereco varchar(100),
    cep varchar(10),
    cidade varchar(50),
    estado varchar(50),
    nome varchar(20),
    datanasc Date,
    celular varchar(10),
    telefone varchar(10),
    
);
