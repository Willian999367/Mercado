Desafio PHP - Softexpert

Segue os passos abaixo para rodar o projeto: 

- Instalar o XAMPP 
- Instalar o Postgres

- Configuração Postgres: 

Abre o arquivo c:/xampp/php/php.ini e descomente as linhas abaixo:
extension=pdo_pgsql
extension=pgsql

Reinicie o Apache pela ferramenta XAMPP


- Baixar o arquivo do GitHub na pasta htdocs. 

- Start no Apache pelo XAMPP 

Pronto! 

Abaixo criação do Banco: 

Create Table Produto
(
 Nome_produto varchar(50) not null,
 Nome_tipo_produto varchar(50) not null,
 Preco integer not null,
 Descricao varchar(50),
 Imagem varchar(2000),	
 Constraint FK_Nome_tipo_produto Foreign Key (Nome_tipo_produto) References Tipo_produto     (Nome_tipo_produto),
 Constraint PK_Produto Primary key (Nome_produto)
 
);


Create Table Tipo_produto
(
 Nome_tipo_produto varchar(50) not null,
 Imposto integer not null,
 Constraint PK_Tipo_produto Primary key (Nome_tipo_produto)
 );

