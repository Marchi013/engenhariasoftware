-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Maio-2019 às 23:11
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `corret`
--

CREATE TABLE `corret` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `creci` varchar(20) DEFAULT NULL,
  `privilegio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `corret`
--

INSERT INTO `corret` (`id`, `email`, `senha`, `nome`, `telefone`, `cidade`, `creci`, `privilegio`) VALUES
(2, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Daniel', '345', '345', 'asd', 0),
(3, 'corretor@gmail.com', '202cb962ac59075b964b07152d234b70', 'Corretor', '54 9 99999999', 'Passo Fundo', '12345', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `idade` int(11) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `interesse` varchar(20) DEFAULT NULL,
  `obs` varchar(20) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `idade`, `telefone`, `interesse`, `obs`, `valor`, `cidade`, `cpf`) VALUES
(3, 'Daniel De Marchi', 24, '54996967294', 'Casa 3 dormitÃ³rios', 'Sem ObservaÃ§Ãµes', 500000, 'Passo Fundo', '838.959.140.53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corret`
--
ALTER TABLE `corret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corret`
--
ALTER TABLE `corret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
