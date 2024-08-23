CREATE DATABASE wsregistro;

USE wsregistro;

CREATE TABLE hospede (
nome VARCHAR(200),
sobrenome VARCHAR(200),
cpf VARCHAR(15) PRIMARY KEY,
rg VARCHAR(15),
data_nascimento DATE,
genero VARCHAR(50),
etnia VARCHAR(50),
pais_natal VARCHAR(200),
pais_atual VARCHAR(200),
email VARCHAR(200),
telefone BIGINT
);

CREATE TABLE empresa (
nome VARCHAR(200),
cnpj VARCHAR(15) PRIMARY KEY,
registro_ebt BIGINT,
categoria VARCHAR(200),
pais_cede VARCHAR(200),
email VARCHAR(200),
telefone BIGINT
);

CREATE TABLE endereco (
cep BIGINT,
estado VARCHAR(150),
cidade VARCHAR(200),
bairro VARCHAR(200),
rua VARCHAR(200),
numero_lote INT,
id_endereco BIGINT AUTO_INCREMENT PRIMARY KEY,
cpf VARCHAR(15) REFERENCES hospede,
cnpj VARCHAR(15) REFERENCES empresa,
CONSTRAINT fk_cpf FOREIGN KEY (cpf) REFERENCES hospede (cpf),
CONSTRAINT fk_cnpj FOREIGN KEY (cnpj) REFERENCES empresa (cnpj)
);

SELECT * FROM endereco;

DELETE FROM hospede WHERE nome = 'wesley samuel';

SELECT * FROM endereco INNER JOIN hospede ON endereco.cpf = '15461309429';

INSERT INTO endereco (cpf) SELECT hospede.cpf FROM hospede RIGHT JOIN hospede ON endereco.cpf = endereco.cpf;