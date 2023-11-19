-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Nov-2023 às 16:05
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `suploja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `creatinas`
--

DROP TABLE IF EXISTS `creatinas`;
CREATE TABLE IF NOT EXISTS `creatinas` (
  `IDProduto` int NOT NULL AUTO_INCREMENT,
  `NomeProduto` varchar(255) NOT NULL,
  `Preco` varchar(10) NOT NULL,
  `Peso` decimal(10,2) NOT NULL,
  `TipoPesoID` int DEFAULT NULL,
  `Quantidade` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDProduto`),
  KEY `TipoPesoID` (`TipoPesoID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `creatinas`
--

INSERT INTO `creatinas` (`IDProduto`, `NomeProduto`, `Preco`, `Peso`, `TipoPesoID`, `Quantidade`) VALUES
(3, 'CEASEA - PowerCrea', 'R$ 135,00', '300.00', 1, 50),
(4, 'CEASEA - MaxCharge', 'R$ 142,00', '300.00', 1, 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `suplementos`
--

DROP TABLE IF EXISTS `suplementos`;
CREATE TABLE IF NOT EXISTS `suplementos` (
  `IDProduto` int NOT NULL AUTO_INCREMENT,
  `NomeProduto` varchar(255) NOT NULL,
  `Preco` varchar(10) NOT NULL,
  `Peso` decimal(10,2) NOT NULL,
  `TipoPesoID` int DEFAULT NULL,
  `Quantidade` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDProduto`),
  KEY `TipoPesoID` (`TipoPesoID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `suplementos`
--

INSERT INTO `suplementos` (`IDProduto`, `NomeProduto`, `Preco`, `Peso`, `TipoPesoID`, `Quantidade`) VALUES
(1, 'CEASEA - FruitVitalize (Suplemento de frutas)', 'R$ 76,00', '30.00', 3, 40),
(2, 'CEASEA - HerbalBoost (Suplemento à base de ervas)', 'R$ 46,00', '15.00', 3, 25),
(3, 'CEASEA - PlantEssence (Suplemento à base de plantas)', 'R$ 65,00', '20.00', 3, 30),
(4, 'CEASEA - BerryBurst (Suplemento de frutas)', 'R$ 69,00', '30.00', 3, 45),
(5, 'CEASEA - GreenFusion (Suplemento à base de plantas)', 'R$ 80,00', '40.00', 3, 35),
(6, 'CEASEA - NutriFlora (Suplemento à base de plantas)', 'R$ 50,00', '25.00', 3, 20),
(7, 'CEASEA - CitrusVitality (Suplemento de frutas)', 'R$ 59,00', '35.00', 3, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wheyprotein`
--

DROP TABLE IF EXISTS `wheyprotein`;
CREATE TABLE IF NOT EXISTS `wheyprotein` (
  `IDProduto` int NOT NULL AUTO_INCREMENT,
  `NomeProduto` varchar(255) NOT NULL,
  `Preco` varchar(10) NOT NULL,
  `Peso` decimal(10,2) NOT NULL,
  `TipoPesoID` int DEFAULT NULL,
  `Quantidade` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDProduto`),
  KEY `TipoPesoID` (`TipoPesoID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `wheyprotein`
--

INSERT INTO `wheyprotein` (`IDProduto`, `NomeProduto`, `Preco`, `Peso`, `TipoPesoID`, `Quantidade`) VALUES
(1, 'CEASEA - PureProtein 100% pure', 'R$ 147,00', '1.00', 2, 25),
(2, 'CEASEA - UltraWhey Iso concentrado', 'R$ 165,00', '1.00', 2, 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
