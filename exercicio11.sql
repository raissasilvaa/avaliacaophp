CREATE DATABASE sistema_alunos;

USE sistema_alunos;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    matricula VARCHAR(50) UNIQUE,
    curso VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(20),
    endereco VARCHAR(150),
    cep VARCHAR(10),
    cidade VARCHAR(50),
    uf VARCHAR(2),
    curso_horas VARCHAR(100),
    carga_horaria INT DEFAULT 0
);
