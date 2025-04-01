-- Criação do banco de dados 'usuarios'
CREATE DATABASE IF NOT EXISTS `usuarios`;

-- Usando o banco de dados 'usuarios'
USE `usuarios`;

-- Criação de uma tabela exemplo 'clientes'
CREATE TABLE IF NOT EXISTS `clientes` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
);

-- Inserção de dados na tabela 'clientes'
INSERT INTO `clientes` (`nome`, `email`) VALUES
('João Silva', 'joao@email.com'),
('Maria Oliveira', 'maria@email.com');
