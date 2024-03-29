CREATE TABLE autores (
	id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	nome  VARCHAR(50) NULL,
	email VARCHAR(50) NULL,
	telefone VARCHAR(20) NULL,
	PRIMARY KEY(id)
);

CREATE TABLE livros (
	id_livro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,[
	id_autor INTEGER UNSIGNED NOT NULL,
	titulo  VARCHAR(10) NULL,
	categoria VARCHAR(50) NULL,
	paginas INTEGER NULL,
	PRIMARY KEY(id_livro),
	INDEX livro_FKINDEX(autores_id)
);


