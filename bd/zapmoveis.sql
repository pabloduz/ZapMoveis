-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Nov-2016 às 13:06
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zapmoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `estilo` int(11) NOT NULL,
  `quarto` int(11) NOT NULL,
  `patio` int(11) NOT NULL,
  `piscina` int(11) NOT NULL,
  `garagem` int(11) NOT NULL,
  `academia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `modelo`, `valor`, `estilo`, `quarto`, `patio`, `piscina`, `garagem`, `academia`) VALUES
(1, 1, 1, 1, 0, 0, 1, 1, 0),
(2, 1, 1, 1, 0, 0, 1, 2, 0),
(3, 1, 1, 1, 0, 0, 2, 1, 0),
(4, 1, 1, 1, 0, 0, 2, 2, 0),
(5, 1, 2, 1, 0, 0, 1, 1, 0),
(6, 1, 2, 1, 0, 0, 2, 2, 0),
(7, 1, 2, 1, 0, 0, 1, 2, 0),
(8, 1, 2, 1, 0, 0, 2, 1, 0),
(9, 1, 1, 2, 0, 0, 1, 1, 0),
(10, 1, 1, 2, 0, 0, 1, 2, 0),
(11, 1, 1, 2, 0, 0, 2, 1, 0),
(12, 1, 1, 2, 0, 0, 2, 2, 0),
(13, 1, 2, 2, 0, 0, 1, 1, 0),
(14, 1, 2, 2, 0, 0, 2, 2, 0),
(15, 1, 2, 2, 0, 0, 1, 2, 0),
(16, 1, 2, 2, 0, 0, 2, 1, 0),
(17, 2, 1, 0, 0, 0, 0, 0, 1),
(18, 2, 1, 0, 0, 0, 0, 0, 2),
(19, 2, 2, 0, 0, 0, 0, 0, 1),
(20, 2, 2, 0, 0, 0, 0, 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
