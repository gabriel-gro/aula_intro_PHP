-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2017 às 17:04
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `15112017`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Nome` varchar(30) NOT NULL,
  `Nasc` date DEFAULT NULL,
  `Salario` decimal(8,2) DEFAULT NULL,
  `Msg` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Nome`, `Nasc`, `Salario`, `Msg`) VALUES
('Ribolive', '1997-07-18', '0.00', 'Diz a lenda que o ribola é lendario'),
('Silventino', '2017-11-04', '66.20', 'Da tay'),
('n1', '2017-11-10', '555.00', 'n1'),
('Ganp', '2006-01-31', '222.00', 'NONOO asdansidan asdnaiopndoiasndzca\r\n'),
('N2', '2017-11-10', '44.00', 'N2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
