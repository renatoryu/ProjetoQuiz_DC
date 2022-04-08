-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para quiz
CREATE DATABASE IF NOT EXISTS `quiz` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `quiz`;

-- Copiando estrutura para tabela quiz.prova
CREATE TABLE IF NOT EXISTS `prova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `dt` varchar(50) DEFAULT NULL,
  `nota` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela quiz.prova: 1 rows
/*!40000 ALTER TABLE `prova` DISABLE KEYS */;
INSERT INTO `prova` (`id`, `nome`, `dt`, `nota`) VALUES
	(6, 'Rafaela Pimenta', '27/11/2020', 7);
/*!40000 ALTER TABLE `prova` ENABLE KEYS */;

-- Copiando estrutura para tabela quiz.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela quiz.usuarios: 3 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
	(1, 'qwqeqweqwe', 'u@u.com', 'u@u.com', '$2y$10$hbtHS65Tr2AgCwNm5Ti7cuJkabSHU2zp/H/nno4sjAnrk4i.Xo6d6'),
	(2, 'Renato Cruz', 'renatoryuu@hotmail.com', 'renatoryu', '$2y$10$skDSXKcyiru3lWBxh6C1EezIc84SbnfA30M6S2T9Vaiz6Zkz82Iuy'),
	(3, 'Rafaela Pimenta', 'rafaela@hotmail.com', 'rafa', '$2y$10$CLbjQv6KZvCflZk.WMCtxudIvJq4WXKJaK1.iqvOCKAOM4Ue5A44W');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
