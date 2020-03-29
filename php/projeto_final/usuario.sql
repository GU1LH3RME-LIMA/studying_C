create database if not exists usuario;
use usuario;

CREATE TABLE if not exists`pessoa`  (
  `nome` varchar(50) DEFAULT NULL,
  `ano_nasc` varchar(12) DEFAULT NULL,
  `email` varchar(40) NOT NULL DEFAULT '',
  `senha` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`email`)
);
ALTER DATABASE `sua_base` CHARSET = UTF8 COLLATE = utf8_general_ci;