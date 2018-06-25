-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Jun-2018 às 17:36
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

DROP TABLE IF EXISTS `carro`;
CREATE TABLE IF NOT EXISTS `carro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nomeseg` varchar(220) NOT NULL,
  `placa` varchar(12) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `nmotor` varchar(60) NOT NULL,
  `chassi` varchar(80) NOT NULL,
  `model` varchar(100) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `renav` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`ID`, `nomeseg`, `placa`, `uf`, `marca`, `ano`, `nmotor`, `chassi`, `model`, `cor`, `renav`) VALUES
(10, 'FABIO OLIVEIRA SOUZA', 'HJS 43213', 'MG', 'fiat', '2015', '45454', '31120', '546', 'preto', '1212'),
(9, 'FABIO OLIVEIRA SOUZA', 'HJS 43213', 'MG', 'fiat', '2015', '45454', '31120', '546', 'preto', '1212'),
(8, '', '', '', '', '', '', '', '', '', ''),
(7, 'Vinicius', 'HJK 54545 54', 'mg', 'fiat', '1995', '45454', '545464', 'uno', '#ff0080', '1212'),
(11, 'das', 'das', 'da', 'dsa', 'das', 'das', 'fa', 'dsad', 'preto', 'das'),
(12, 'dsadsa', 'dsadas', 'da', 'dsadsadsa', 'das', 'asdasdad', 'dasd', 'dadd', 'saddsa', 'sad'),
(13, 'joao nubao', 'gay 1414', 'SC', 'hyundai', '2018', '1', '05', 'hb20', 'preto fosco', '1010'),
(14, 'teste', 'teste', 'te', 'te', 'te', 'te', 'te', 'te', 'te', 'te'),
(15, '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
