-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 06:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `despesas`
--
CREATE DATABASE IF NOT EXISTS `despesas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `despesas`;

-- --------------------------------------------------------

--
-- Table structure for table `itens_nf`
--

CREATE TABLE IF NOT EXISTS `itens_nf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) NOT NULL,
  `num_nf` int(11) NOT NULL,
  `qtde` int(11) NOT NULL,
  `subtotal` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itens_nf`
--

INSERT INTO `itens_nf` (`id`, `cod_produto`, `num_nf`, `qtde`, `subtotal`) VALUES
(1, 1, 1, 2, '22.50'),
(2, 2, 1, 3, '26.94'),
(3, 4, 1, 5, '31.45'),
(4, 10, 1, 1, '26.10'),
(5, 9, 1, 2, '26.20'),
(6, 15, 1, 3, '4.56'),
(7, 16, 1, 15, '33.75'),
(8, 14, 1, 4, '10.80'),
(9, 7, 1, 12, '30.72'),
(10, 8, 1, 1, '6.68'),
(11, 6, 1, 3, '24.45'),
(12, 13, 1, 7, '9.45'),
(13, 20, 1, 8, '7.12'),
(14, 21, 1, 6, '7.50');

-- --------------------------------------------------------

--
-- Table structure for table `nota_fiscal`
--

CREATE TABLE IF NOT EXISTS `nota_fiscal` (
  `nf` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `valor_total` decimal(7,2) NOT NULL,
  PRIMARY KEY (`nf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(1, '2020-09-20', '268.22');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `preco` decimal(7,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'arroz', '11.25'),
(2, 'feijão carioca', '8.98'),
(3, 'feijão preto', '7.68'),
(4, 'macarrão', '6.29'),
(5, 'farinha de trigo', '2.81'),
(6, 'café', '8.15'),
(7, 'leite', '2.56'),
(8, 'achocolatado', '6.68'),
(9, 'linguiça calabresa', '13.10'),
(10, 'contra filé', '26.10'),
(11, 'filé de peito de frango', '10.90'),
(12, 'maçã', '5.56'),
(13, 'biscoito recheado', '1.35'),
(14, 'açúcar', '2.70'),
(15, 'sal', '1.52'),
(16, 'limão', '2.25'),
(17, 'laranja', '1.50'),
(18, 'batata', '2.49'),
(19, 'abóbora', '2.87'),
(20, 'suco em pó', '0.89'),
(21, 'banana', '1.25'),
(22, 'maracujá', '5.99'),
(23, 'gelatina', '2.10'),
(24, 'gelatina incolor', '1.59'),
(25, 'pão de forma', '4.25'),
(26, 'bacon em peça', '32.50'),
(27, 'requeijão', '8.30'),
(28, 'queijo', '8.05'),
(29, 'presunto', '9.49'),
(30, 'mortadela', '5.69'),
(31, 'pão de queijo', '4.70'),
(32, 'manteiga', '8.50'),
(33, 'margarina', '4.79'),
(34, 'salame fatiado', '16.10'),
(35, 'iogurte', '3.99');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Bianca Silva', 'bianca.silva@gmail.com', '0102e9826d6e14ee5e167f18159aa728', 1),
(2, 'Anna Carolina ', 'anita@gmail.com', '5b7eeb0f73d615ce8889977b480ab674', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
