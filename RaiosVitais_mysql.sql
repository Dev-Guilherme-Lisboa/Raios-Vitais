-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2025 at 08:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raiosvitais`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Senha` varchar(30) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `RG` varchar(15) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `DataNascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nome`, `Senha`, `CPF`, `RG`, `Telefone`, `DataNascimento`) VALUES
(1, 'Debora Santos', '', '330.023.488-30', '42.084.550-1', '11 94898-0112', '1983-02-10'),
(2, 'Fulza da Silva Sule', '', '373.101.998-12', '30.503.711-0', '11 28654-237', '1979-11-01'),
(3, 'Luciana dos Anjos Moura Futamata', '', '370.100.838-86', '42.113.889-0', '11 97693-7135', '1987-12-16'),
(4, 'Cleusa André Pulgaci', '', '763.862.958-20', '50.678.68', '11 99177-0423', '1949-05-29'),
(5, 'Valéria Cardoso da Silva', '', '246.037.828-96', '25.868.027-1', '11 2079-6508', '1976-09-07'),
(6, 'Ivanice Silva de M. Avelandre', '', '338.551.018-09', '46.735.419', '11 2286-1960', '1983-12-12'),
(7, 'Genilma Batista Ferreira', '', '256.338.306-69', '30.471.264', '11 98071-5715', '1976-01-16'),
(8, 'T', '', '0', '0', '0', '0000-00-00'),
(11, 'test', '1243', '30705073', '786576481', '0', '0000-00-00'),
(12, 'ewfwf', '123123', '467830925', '150711130', '0', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `CPF` (`CPF`),
  ADD UNIQUE KEY `RG` (`RG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
