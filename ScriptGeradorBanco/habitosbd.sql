create table Usuario(
	login VARCHAR(50) NOT NULL,
	nome VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	senha VARCHAR(20) NOT NULL,
	PRIMARY KEY(login)
);

create table Habito(
	codHabito INTEGER NOT NULL AUTO_INCREMENT,
	nomeHabito VARCHAR(50) NOT NULL,
	categoriaHabito VARCHAR(50) NOT NULL,
	dificuldadeHabito VARCHAR(50) NOT NULL,
	contCicloHabito INTEGER NOT NULL,
	codUsuario VARCHAR(50) NOT NULL,
	lembrete DATE NULL,
	PRIMARY KEY(codHabito),
	FOREIGN KEY(codUsuario) REFERENCES Usuario(login)
);

create table ciclo(
	codCiclo INT NOT NULL AUTO_INCREMENT,
	dia1 INTEGER,
	dia2 INTEGER,
	dia3 INTEGER,
	dia4 INTEGER,
	dia5 INTEGER,
	dia6 INTEGER,
	dia7 INTEGER,
	dia8 INTEGER,
	dia9 INTEGER,
	dia10 INTEGER,
	dia11 INTEGER,
	dia12 INTEGER,
	dia13 INTEGER,
	dia14 INTEGER,
	dia15 INTEGER,
	dia16 INTEGER,
	dia17 INTEGER,
	dia18 INTEGER,
	dia19 INTEGER,
	dia20 INTEGER,
	dia21 INTEGER,
	PRIMARY KEY(codCiclo),
	FOREIGN KEY(codCiclo) REFERENCES Habito(codHabito)
);