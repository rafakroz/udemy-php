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



-- 297. Selecionando dados
-- SELECT * FROM tabela

SELECT * FROM itens

SELECT nome FROM itens



-- 298. Utilizando WHERE
/*
SELECT colunas
FROM tabela
WHERE condição
*/

SELECT * from  itens
where nome = 'Sofá';

select nome from itens
where id_item > 3

select id_item, nome from itens
where id_item > 3



-- 299. Utilizando condicionais
-- AND, OR, NOT
-- where condicao1 and condicao2

select * from itens 
where id_item = 2 or id_item = 5;

INSERT INTO itens (nome, descricao) VALUES ('Abajur', 'Modelo da linha retrô.');

select * from itens
where nome = 'Abajur'

update itens set nome = 'Abajur' where id_item = 1

select * from itens
where nome = 'Abajur' AND id_item = 8

select * from itens
where nome = 'Abajur' OR id_item > 5



-- 300. Ordenando resultados
-- ORDER BY email asc

select * from itens order by id_item desc

SELECT * from itens where id_item > 2 order by nome;

SELECT * from itens where id_item > 2 order by nome desc;



-- 301. Atualizando dados
/*
UPDATE tabela
SET coluna = valor1
WHERE condicao
*/

select * from mailmarketing

insert into mailmarketing (email, nome) values ('fred@teste.com', 'Fred');
insert into mailmarketing (email, nome) values ('suzy@teste.com', 'Suzy');
insert into mailmarketing (email, nome) values ('nina@teste.com', 'Nina');

select * from itens

update itens
set nome = 'Abajur Retrô'
where id_item = 8



-- 302. Deletando dados
/* DELETE FROM tabela
Where condicao */

-- Sem Where, deleta a tabela toda

select * from mailmarketing

insert into mailmarketing (email, nome) values ('teste@teste.com', 'Teste');

delete from mailmarketing
where nome = 'Teste'








































































































































































































































































































