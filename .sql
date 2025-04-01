-- Criação do banco de dados 'usuarios'
CREATE DATABASE IF NOT EXISTS `usuarios`;


USE `usuarios`;

CREATE TABLE IF NOT EXISTS `clientes` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `clientes` (`nome`, `email`) VALUES
('João Silva', 'joao@email.com'),
('Maria Oliveira', 'maria@email.com');
