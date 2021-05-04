CREATE TABLE Pessoa (
	codigo BIGINT PRIMARY KEY auto_increment,
	nome VARCHAR(150),
	sexo VARCHAR(100),
	email VARCHAR(150), 
	telefone VARCHAR(150), 
	cep VARCHAR(150),
	logradouro VARCHAR(150), 
	cidade VARCHAR(150),
	estado VARCHAR(150)
)
ENGINE=InnoDB
;

CREATE TABLE Paciente (
	codigo BIGINT,
	peso FLOAT,
	altura FLOAT,
	tipo_sanguineo VARCHAR(10),
	PRIMARY KEY (codigo),
	CONSTRAINT FK_Paciente_Pessoa FOREIGN KEY (codigo) REFERENCES Pessoa (codigo) ON UPDATE NO ACTION ON DELETE NO ACTION
)
ENGINE=InnoDB
;