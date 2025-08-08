-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS RegistroUsuarios;
USE RegistroUsuarios;

-- Criação da tabela
CREATE TABLE IF NOT EXISTS InputsUsuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensagem TEXT NOT NULL,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);