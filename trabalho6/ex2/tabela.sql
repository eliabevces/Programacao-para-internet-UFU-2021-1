CREATE TABLE endereco
(
   id int PRIMARY KEY auto_increment,
   cep char(14) UNIQUE,
   logradouro varchar(50),
   bairro varchar(50),
   cidade varchar(50),
   estado varchar(50)
) ENGINE=InnoDB;