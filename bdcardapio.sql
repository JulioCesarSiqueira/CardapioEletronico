-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jul 24, 2014 as 12:43 AM
-- Versão do Servidor: 5.5.10
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bdcardapio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prato_id` int(10) unsigned NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `pd_session_id` char(32) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prato_id` (`prato_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `prato_id`, `qty`, `pd_session_id`, `created`) VALUES
(1, 1, 1, 'XXX', '0000-00-00 00:00:00'),
(2, 2, 1, 'XXX', '0000-00-00 00:00:00'),
(10, 4, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:49:16'),
(11, 8, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:50:35'),
(12, 7, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:50:45'),
(13, 7, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:52:36'),
(14, 7, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:52:39'),
(15, 2, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:52:46'),
(16, 9, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:53:26'),
(17, 10, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 16:53:33'),
(18, 1, 1, 'e175bc7ace526e4a1699b3d501978406', '2014-07-08 20:22:21'),
(19, 2, 1, 'p4bkpi3ec4oue2jk7grmvrrq45', '2014-07-08 21:10:38'),
(20, 7, 1, 'p4bkpi3ec4oue2jk7grmvrrq45', '2014-07-08 21:10:42'),
(21, 4, 1, 'p4bkpi3ec4oue2jk7grmvrrq45', '2014-07-08 21:10:48'),
(22, 1, 1, 'p4bkpi3ec4oue2jk7grmvrrq45', '2014-07-08 21:31:17'),
(32, 1, 1, 'gbmfqnih0v2muf6kfg0rfmm040', '2014-07-09 14:57:08'),
(33, 1, 1, 'gbmfqnih0v2muf6kfg0rfmm040', '2014-07-09 14:57:13'),
(34, 1, 1, 'gbmfqnih0v2muf6kfg0rfmm040', '2014-07-09 14:57:14'),
(35, 10, 1, 'dtboeckdv37if4fk7vdt207qf3', '2014-07-11 17:40:52'),
(36, 9, 1, 'dtboeckdv37if4fk7vdt207qf3', '2014-07-11 17:41:01'),
(37, 5, 1, 'dtboeckdv37if4fk7vdt207qf3', '2014-07-11 17:41:23'),
(38, 4, 1, 'e0htn8rs1jcuiseuq55j1hjft1', '2014-07-11 21:44:31'),
(60, 9, 1, 'rvh87hb23nj2pqdhii6dol5pj6', '2014-07-14 18:57:43'),
(61, 4, 1, 'rvh87hb23nj2pqdhii6dol5pj6', '2014-07-14 19:14:29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE IF NOT EXISTS `pratos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_id` int(10) unsigned NOT NULL,
  `subtipo_id` int(10) unsigned NOT NULL,
  `nome` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_general_cs,
  `preco` decimal(9,2) DEFAULT NULL,
  `imagem` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `thumbnail` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_id` (`tipo_id`),
  KEY `subtipo_id` (`subtipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`id`, `tipo_id`, `subtipo_id`, `nome`, `descricao`, `preco`, `imagem`, `thumbnail`, `created`, `modified`) VALUES
(1, 1, 2, 'Strogonoff de Carne', 'Estrogonofe é um prato originário da culinária da Rússia composto de cubos de carne bovina servidos num molho de creme de leite', '20.00', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(2, 1, 3, 'Bisteca', 'A bistecca alla Fiorentina é um prato de carne típico da cozinha italiana muito tradicional na região da Toscana. Consiste em um corte do filé bovino, geralmente de um animal da raça Chianina da faixa de 10 a 15 meses de idade.', '10.29', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(3, 1, 3, 'Bacon', 'O bacon nos EUA é feito a partir da barriga do porco e contém bastante gordura. Dependendo de como você gosta de comê-lo, existem várias maneiras de prepará-lo.\r\nEste bacon é feito a partir do lombo do porco. É magro, carnudo e bom para fazer rolinhos de bacon e sanduíches.', '9.90', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(4, 2, 4, 'Frango a passarinho', 'Prove esta receita de frango à passarinho rústico. Em vez de frito, o frango é assado, e ganha temperosos saboroso', '7.99', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(5, 4, 10, 'Laranja', 'Suco de laranja natural', '9.99', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(6, 4, 12, 'Pepsi', 'Só tem PEPSI, pode ser ?', '4.50', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(7, 4, 12, 'Coca cola', 'O mais famoso refrigerante do mundo.', '4.50', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(8, 5, 15, 'Lasagna da Jaci', 'Receita Secreta, passada por diversas gerações.', '15.40', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(9, 5, 15, 'Nhoque Vegetariano', 'Nhoque feito com proteína de soja', '29.39', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(10, 3, 6, 'File de peixe a milanesa', 'O filé de peixe à milanesa já é uma tradição na cozinha brasileira e as crianças simplesmente adoram. Um prato delicioso, que casa bem com qualquer ocasião.', '16.29', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL),
(11, 3, 8, 'Lagosta', 'Uma carne suculenta e deliciosa', '55.00', '/img/noimage.png', '/img/noimagethumb.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subtipos`
--

CREATE TABLE IF NOT EXISTS `subtipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_id` int(10) unsigned NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`),
  KEY `tipo_id` (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `subtipos`
--

INSERT INTO `subtipos` (`id`, `tipo_id`, `nome`, `descricao`) VALUES
(1, 1, 'Carneiro', NULL),
(2, 1, 'Bovina', NULL),
(3, 1, 'Suina', NULL),
(4, 2, 'Frango', NULL),
(5, 2, 'Peru', NULL),
(6, 3, 'Peixes', NULL),
(7, 3, 'Camarões', NULL),
(8, 3, 'Lagostas', NULL),
(9, 3, 'Ostras', NULL),
(10, 4, 'Sucos Naturais', NULL),
(11, 4, 'Alcólicas e Drinks', NULL),
(12, 4, 'Refrigerantes', NULL),
(13, 5, 'Pizzas, empanados e Calzones', NULL),
(14, 5, 'Macarrão', NULL),
(15, 5, 'Lasanha, nhoque e cia', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` text,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `nome`, `descricao`, `image`) VALUES
(1, 'Carnes', 'Carnes Vermelhas bovinas, suinas e carneiro', '/img/noimagecategoria.png'),
(2, 'Aves', 'Frangos, peru, chester e outras aves exoticas', '/img/noimagecategoria.png'),
(3, 'Peixes e Frutos do mar', 'Algumas iguarias deliciosas do mar', '/img/noimagecategoria.png'),
(4, 'Bebidas', 'De vários tipos, alcoólicas e não alcoólicas, refrescos', '/img/noimagecategoria.png'),
(5, 'Massas', 'Para quem adora comida italiana e poderoso chefão !', '/img/noimagecategoria.png');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`prato_id`) REFERENCES `pratos` (`id`);

--
-- Restrições para a tabela `pratos`
--
ALTER TABLE `pratos`
  ADD CONSTRAINT `pratos_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`),
  ADD CONSTRAINT `pratos_ibfk_2` FOREIGN KEY (`subtipo_id`) REFERENCES `subtipos` (`id`);

--
-- Restrições para a tabela `subtipos`
--
ALTER TABLE `subtipos`
  ADD CONSTRAINT `subtipos_ibfk_1` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`);
