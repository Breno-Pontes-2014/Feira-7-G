-- Criação do banco de dados
CREATE DATABASE RegistroUsuarios;

-- Seleciona o banco
USE RegistroUsuarios;

-- Criação da tabela
CREATE TABLE InputsUsuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    mensagem TEXT,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);