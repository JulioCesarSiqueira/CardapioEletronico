-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jul 14, 2014 as 07:15 PM
-- Versão do Servidor: 5.5.10
-- Versão do PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bdcake`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `qty` mediumint(8) unsigned NOT NULL DEFAULT '1',
  `ct_session_id` char(32) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `pd_id` (`product_id`),
  KEY `ct_session_id` (`ct_session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Extraindo dados da tabela `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `qty`, `ct_session_id`, `created`) VALUES
(51, 2, 3, '32cabb9d6fb31404a5b736830eac6aa3', '0000-00-00 00:00:00'),
(52, 1, 2, '32cabb9d6fb31404a5b736830eac6aa3', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_parent_id` (`parent_id`),
  KEY `cat_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `image`) VALUES
(12, 0, 'Classical', 'From Medieval to Contemporany', ''),
(13, 17, 'Dizzy Gillespie', 'The Trumpeter Master', ''),
(14, 12, 'Mozart', 'The Old Favourite', ''),
(17, 0, 'Jazz', 'Everything from 1890', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `departments`
--

INSERT INTO `departments` (`id`, `name`, `region`) VALUES
(1, 'Customer Services', 'uk'),
(2, 'Sales', 'UK'),
(3, 'Press Office', 'UK'),
(4, 'Investor Relations', 'US'),
(5, 'Human Resources', 'NG'),
(6, 'Parnership Opportunities', 'US'),
(7, 'Marketing', 'UK'),
(8, 'Online Marketing', 'US'),
(9, 'teste', 'teste'),
(10, 'brazil', 'um pais de tolos'),
(11, 'oi oi oi ', 'sdss orkut'),
(12, 'Macaco', 'Pelado'),
(13, 'Homem', 'Bomba'),
(14, 'teste', 'macaquinho'),
(15, 'teste', 'teste'),
(16, '', '');

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
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the post body.', '2014-06-03 21:29:48', '2014-06-07 19:17:20'),
(6, 'ola', 'senhorita', '2014-06-06 20:28:09', '2014-06-06 20:28:09'),
(7, 'ola', 'mundinho\r\nSem\r\nVergonha\r\n\r\nI''m the king lizzard', '2014-06-06 20:46:14', '2014-06-06 20:46:14'),
(8, '', '', '2014-06-07 18:32:05', '2014-06-07 18:32:05'),
(9, 'em branco', '', '2014-06-07 18:32:12', '2014-06-07 18:32:12'),
(11, 'digitar o tÃ­tulo', 'e digitar o corpo', '2014-06-07 18:46:37', '2014-06-07 18:46:37'),
(13, 'beethoven', 'nai nai nai nai', '2014-06-09 21:14:57', '2014-06-09 21:14:57'),
(14, 'acentuaÃ§Ã£o dÃ³ caralhiu', 'cÃ£o de guarda', '2014-07-05 11:04:51', '2014-07-05 11:04:51'),
(15, 'Ã¡rvores somos nozes ~~~', 'cÃ£o de Ã  crazeado', '2014-07-05 11:15:10', '2014-07-05 11:15:10'),
(16, 'mÃ´ngo', 'cÃ£o cÃ£o cÃ£o ^~~', '2014-07-05 11:16:12', '2014-07-05 11:16:12'),
(17, 'teste', 'teste', '2014-07-08 20:27:34', '2014-07-08 20:27:34');

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
-- Estrutura da tabela `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `qty` smallint(5) unsigned NOT NULL DEFAULT '0',
  `image` varchar(200) DEFAULT NULL,
  `thumbnail` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`category_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `qty`, `image`, `thumbnail`, `created`, `modified`) VALUES
(1, 13, 'Dizzy 1990s', 'Best of Dizzy', '12.00', 10, NULL, '1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 14, 'Mozart for lovers', 'relax with your loved ond whith this cd', '15.00', 5, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 13, 'Dizzy and Stan', 'Live with Dizzy Gillespie and Stan Getz', '13.00', 10, NULL, '1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'teste', 'eb7ba4421526862a56f076281f6e52ea7eb4ab56', 'admin', '2014-06-09 21:13:45', '2014-06-09 21:13:45'),
(2, 'bet', 'cc4607ac143aadd936088646d796731b3b00efaa', 'author', '2014-06-09 21:19:55', '2014-06-09 21:19:55'),
(3, 'bet', 'cc4607ac143aadd936088646d796731b3b00efaa', 'author', '2014-06-09 21:20:29', '2014-06-09 21:20:29'),
(4, 'bet', '6b8a40604db7df17f672f60071e79d9154236630', 'author', '2014-06-09 21:23:02', '2014-06-09 21:23:02'),
(5, 'fome', '1fbeb615e8901094dca1d7dd314d859768fd0b9b', 'admin', '2014-06-09 21:29:24', '2014-06-09 21:29:24'),
(6, 'teste', 'cefd9070a4773b1d68348ec05b1d70cfed37dbe8', 'admin', '2014-06-09 22:06:47', '2014-06-09 22:06:47'),
(7, 'teste', '016c84423b9eb31bbb7455a96ba534f663d03336', 'admin', '2014-06-09 22:07:10', '2014-06-09 22:07:10'),
(8, 'teste', 'c3a666a34a5b76a4d65e6b69d9909e881fb70512', 'admin', '2014-06-09 22:09:39', '2014-06-09 22:09:39'),
(9, 'teste', 'eb7ba4421526862a56f076281f6e52ea7eb4ab56', 'admin', '2014-06-09 22:10:30', '2014-06-09 22:10:30'),
(10, 'teste', '94bea0df52376a5ccd22ca339f38335d110386bb', 'admin', '2014-06-09 22:10:44', '2014-06-09 22:10:44'),
(11, 'teste', 'cf1f2b5e309e08fc953a8202f487e26fb21f80a5', 'admin', '2014-06-09 22:11:05', '2014-06-09 22:11:05'),
(12, 'teste', '4afb0a4fe0e776fc10dd62f320399d2e46c8d19c', 'admin', '2014-06-09 22:11:55', '2014-06-09 22:11:55'),
(13, 'teste', '8319cb85f67d670a6381ec8e037c96e3f13b07e5', 'admin', '2014-06-09 22:12:17', '2014-06-09 22:12:17'),
(14, 'teste', 'a10315f4d55a757da43dde0861747969ea1b606e', 'admin', '2014-06-09 22:15:12', '2014-06-09 22:15:12');

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
