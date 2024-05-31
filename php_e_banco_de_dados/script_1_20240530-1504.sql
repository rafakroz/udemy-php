-- Curso UDEMY - PHP do Zero a Maestria + 4 Projetos incríveis

CREATE TABLE pessoas (
	nome character varying(200),
	idade INT
);

create table carros (
	marca character varying(100),
	descricao text,
	ano_fabricacao INT	
)

create table fornecedores (
	id_forncedor int,
	nome character varying(100)
)

	
	
-- 290
-- DROP TABLE nome : apagar tabela

DROP TABLE fornecedores


	
-- 291. Modificando tabelas
-- ALTER TABLE nome
-- ADD/DROP CLOUMN/MODIFY COLUMN nome

ALTER TABLE carros
ADD motor INT;

ALTER TABLE carros
DROP ano_fabricacao;

ALTER TABLE carros
ALTER COLUMN descricao TYPE CHARACTER Varying(500)



-- 292. Sobre as CONSTRAINTS

-- 293. CONSTRAINT NOT NULL
-- nome VARCHAR(100) NOT NULL

CREATE TABLE not_null (
	nome varchar(100) NOT NULL,
	idade INT
)

INSERT into not_null (nome, idade) VALUES ('Fred', 2)

select * from not_null

INSERT into not_null (nome, idade) values ('', 10)

insert into not_null (idade) values (15)

insert into not_null (nome) values ('Layla')



-- 294. CONSTRAINT UNIQUE
-- nome VARCHAR(100) UNIQUE
-- email VARCHAR(255) NOT NULL UNIQUE

create TABLE mailmarketing (
	email varchar(255) not null unique,
	nome varchar(255) 
)

select * from mailmarketing

INSERT into mailmarketing (email, nome) values ('rafael@teste.com', 'Rafael')

INSERT into mailmarketing (nome) values ('Rafael') -- necessita de email

INSERT into mailmarketing (email) values ('rafael@teste.com') -- email já existente
	
INSERT into mailmarketing (email, nome) values ('rafael@teste.com', 'Fred') -- email já existente



-- 295. CONSTRAINT: PRIMARY KEY

CREATE TABLE itens (
	id_item serial PRIMARY key,  -- Serial : auto incremento
	nome varchar(255),
	descricao text	
)

insert into itens (nome, descricao) values ('Abajar', 'Abajur da nova coleção.');
insert into itens (nome, descricao) values ('Penteadeira', 'Pendeteadeira estilo retrô.');
insert into itens (nome, descricao) values ('Mesa de Jantar', 'Mesa de Jantar para 10 pessoas.');

select * from itens;

delete from itens where id_item = 3

insert into itens (nome, descricao) values ('Sofá', 'Sofá 3 lugares.');

-- mesmo excluindo o id 3, o id da última inserção foi 4.


-- 296. Inserindo itens
-- INSERT INTO tabela (coluna, ...) VALUES (valor, ...)

select * from itens;

INSERT INTO itens (nome, descricao) values ('Lustre de Cristal','Luestre de Cristal translúcido');
INSERT INTO itens (nome, descricao) values ('Fogão 5 Bocas','Fogão branco com 5 Bocas.');
INSERT INTO itens (nome, descricao) values ('Rack de Madeira','Rack de Madeira, para TV de até 65 polegadas.');









































































































































































































































































































