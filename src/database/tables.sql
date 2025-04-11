CREATE TABLE pet (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    idade INTEGER CHECK(idade > 0 AND idade < 100) NOT NULL, 
    id_especie INTEGER NOT NULL,
    FOREIGN KEY(id_especie) REFERENCES especies(id) ON DELETE RESTRICT
);

CREATE TABLE especies(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL UNIQUE
);

INSERT INTO especies(nome)VALUES('Gato');
INSERT INTO especies(nome) VALUES('Cachorro');
INSERT INTO especies(nome) VALUES('Peixe');