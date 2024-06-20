CREATE DATABASE projeto1;

USE projeto1;

CREATE TABLE fisica (
nome VARCHAR(200),
sobrenome VARCHAR(200),
cpf VARCHAR(15) PRIMARY KEY,
rg BIGINT,
email VARCHAR(200),
telefone BIGINT,
rua VARCHAR(200),
bairro VARCHAR(200),
numero INT,
cep BIGINT,
pais VARCHAR(200),
nacionalidade VARCHAR(200)
);

CREATE TABLE juridica (
empresa VARCHAR(400),
cnpj VARCHAR(15) PRIMARY KEY,
email VARCHAR(200),
telefone BIGINT,
rua VARCHAR(200),
bairro VARCHAR(200),
numero INT,
cep BIGINT,
pais VARCHAR(200)
);

CREATE TABLE hospede (
cpf VARCHAR(15) REFERENCES fisica,
cnpj VARCHAR(15) REFERENCES juridica,
id_hospede BIGINT AUTO_INCREMENT PRIMARY KEY,
CONSTRAINT fk_cpf FOREIGN KEY (cpf) REFERENCES fisica (cpf),
CONSTRAINT fk_cnpj FOREIGN KEY (cnpj) REFERENCES juridica (cnpj)
);

CREATE TABLE reserva (
named VARCHAR(200),
dia VARCHAR(150),
mes VARCHAR(150),
ano VARCHAR(150),
hora VARCHAR(100),
apartamento BIGINT,
pessoas BIGINT,
valor BIGINT,
id_reserva BIGINT AUTO_INCREMENT PRIMARY KEY,
id_hospede BIGINT REFERENCES hospede,
CONSTRAINT fk_id_hospede FOREIGN KEY (id_hospede) REFERENCES hospede (id_hospede)
);
