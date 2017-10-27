-- phpMyAdmin SQL Dump
-- version 4.7.4
-- 
https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 
Generation Time: 27-Out-2017 às 20:39
-- 
Versão do servidor: 10.1.28-MariaDB
-- 
PHP Version: 7.1.10



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;
START TRANSACTION;

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;



--
-- Database: `habitosbd`
--

-- --------------------------------------------------------

--
-- 
Estrutura da tabela `habito`

--

CREATE TABLE `habito` (
  `codHabito` int(11) NOT NULL,
  
`nome` varchar(40) NOT NULL,
 
`categoria` varchar(40) NOT NULL,
 
`dificuldade` varchar(1) NOT NULL,
  
`contCiclo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`

--

CREATE TABLE `usuario` (
  `login` varchar(50) NOT NULL,
  
`nome` varchar(50) NOT NULL,
  
`sobrenome` varchar(50) NOT NULL,
  
`email` varchar(50) NOT NULL,
  
`senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Indexes for dumped tables


--
-- Indexes for table `habito`
--


ALTER TABLE `habito`
  
ADD PRIMARY KEY (`codHabito`);


--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);


--
-- AUTO_INCREMENT for dumped tables

--

--
-- AUTO_INCREMENT for table `habito`

--
ALTER TABLE `habito`
  MODIFY `codHabito` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
