#criando o banco.
CREATE DATABASE seguranca_01;

#usando o banco criado
USE seguranca_01;

#tabela usuario: colunas(nome, cpf, telefone) cahve primaria: cpf
CREATE TABLE usuario (
	nome VARCHAR(500),
	cpf VARCHAR(15) primary KEY,
	telefone VARCHAR (15)
);

#tabela nivel: colunas(id, descricao) chave priamria: id
CREATE TABLE nivel (
	id INT auto_increment primary KEY,
	descricao VARCHAR(100)
);

#tabela login: colunas(id, cpf, login, senha, nivel) chave primaria: id, chave estrangeira: cpf e nivel
CREATE TABLE login (
	id INT auto_increment primary KEY,
	cpf VARCHAR(15),
	login VARCHAR (15),
	senha VARCHAR (100),
	nivel INT,
	CONSTRAINT fk_usuario FOREIGN KEY (cpf) REFERENCES usuario (cpf),
	CONSTRAINT fk_nivel FOREIGN KEY (nivel) REFERENCES nivel (id)
);

#tabela log: colunas(id, cpf, cpf_alterado, data, novo_nivel) chave primaria: id, chave estrangeira: cpf, cpf_alterado, nivel
CREATE TABLE log (
id INT AUTO_INCREMENT PRIMARY KEY,
cpf VARCHAR(15),
cpf_alterado VARCHAR(15),
DATA TIMESTAMP,
novo_nivel INTEGER,
CONSTRAINT fk_cpf_log 
FOREIGN KEY (cpf)
REFERENCES usuario (cpf),
CONSTRAINT fk_cpf_alterado
FOREIGN KEY (cpf_alterado)
REFERENCES usuario (cpf),
CONSTRAINT fk_nivel_novo
FOREIGN KEY (novo_nivel)
REFERENCES nivel (id)
);

#inserindo dados na tabela usuario
INSERT INTO usuario (nome, cpf, telefone)
VALUES 
('Administrador', '12345678900', '83912345678');

#inserindo dados na tabela nivel
INSERT INTO nivel (descricao)
VALUES
('Administrador'),
('Gerente'),
('Usuário');

#inserindo dados na tabela login
INSERT INTO login (cpf, login, senha, nivel)
VALUES
('12345678900', 'admin', 'admin', 1);

#comando sql para visualizar dados da tabela 
SELECT * FROM usuario;login

#atualizando dados da tabela login, usando md5 para criptografar a senha	
UPDATE login SET senha = MD5(senha) WHERE login = 'admin';
