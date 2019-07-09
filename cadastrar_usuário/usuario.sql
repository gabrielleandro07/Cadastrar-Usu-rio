CREATE DATABASE usuario;
USE usuario;

CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(20),
    nome VARCHAR(100),
    data_nasc DATE,
    cpf VARCHAR(15),
    perfil VARCHAR(50)
);

SELECT * FROM usuario;