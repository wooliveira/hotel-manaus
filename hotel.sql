-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01-Jul-2019 às 15:49
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acomodacoes`
--

DROP TABLE IF EXISTS `acomodacoes`;
CREATE TABLE IF NOT EXISTS `acomodacoes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `TipoQuarto` varchar(50) NOT NULL,
  `NumeroCama` varchar(50) NOT NULL,
  `TipoVentilacao` varchar(50) NOT NULL,
  `Valor` varchar(50) NOT NULL,
  `Foto` varchar(50) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `acomodacoes`
--

INSERT INTO `acomodacoes` (`Id`, `Nome`, `TipoQuarto`, `NumeroCama`, `TipoVentilacao`, `Valor`, `Foto`, `status`) VALUES
(1, 'Quarto 1', 'Solteiro', 'Solteiro', 'Ventilador', '150', 'solteiro2.jpg', 'ativo'),
(2, 'Quarto2', 'Misto', 'Casal', 'Ar condicionado', '80', 'misto2.jpg', 'ativo'),
(3, 'Quarto 3', 'Casal', 'Solteiro', 'Ventilador', '95', 'casal1.jpg', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_usuario` int(11) NOT NULL,
  `Id_acomodacao` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_usuario` (`Id_usuario`) USING BTREE,
  KEY `Id_acomodacao` (`Id_acomodacao`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`Id`, `Id_usuario`, `Id_acomodacao`, `data`) VALUES
(3, 2, 3, '2019-06-01'),
(4, 2, 1, '2019-06-04'),
(5, 2, 1, '2019-06-20'),
(6, 2, 1, '2019-06-30'),
(7, 2, 1, '2019-07-01'),
(8, 2, 1, '2019-05-30'),
(11, 5, 1, '2019-07-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `CPF` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `ADM` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `Nome`, `CPF`, `Email`, `Telefone`, `Senha`, `ADM`) VALUES
(1, 'Douglas Cruz', '87626572548', 'adm', '', 'adm', 1),
(2, 'Douglas', '1ad4s54', 'user', '123312', 'user', 0),
(3, 'getulio', '2s54ds5', 'getulio', '23232323', '123', 1),
(5, 'Getulio', '2s54ds5', 'getulioo', '342857895', '123', 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`Id_acomodacao`) REFERENCES `acomodacoes` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
