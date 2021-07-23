-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jul-2021 às 22:42
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_mm_tecnologia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `observation` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cars`
--

INSERT INTO `cars` (`id`, `model`, `brand`, `version`, `observation`, `created_at`) VALUES
(12, 'Supra', 'Toyota', '2023', '325hp', '2021-07-22 00:41:32'),
(20, 'CITROËN C3', 'Audi', '2017', 'Carro com 4 anos de uso.', '2021-07-23 00:09:15'),
(21, 'FIAT STRADA', 'Fiat', 'picape', 'carro novo.', '2021-07-23 00:15:18'),
(22, 'SANDERO', 'Renault', 'Subcompacto', 'carro novo.', '2021-07-23 00:17:45'),
(23, 'CAMARO', 'Chevrolet', 'Carro esportivo', 'camaro versão 2010', '2021-07-23 00:22:39'),
(24, 'Tucson', 'Hyundai ', 'SUV', 'Ano 2016', '2021-07-23 00:28:35'),
(25, 'Renegade', 'Jeep', '2015', 'SUV', '2021-07-23 00:30:27'),
(26, 'Civic', 'Honda', 'Carro compacto', 'Ano 2019', '2021-07-23 00:31:47'),
(27, '350Z', 'Nissan', 'Carro esportivo', 'Ano 2009', '2021-07-23 00:36:52'),
(28, 'mustang', 'ford', 'Carro esportivo', 'Ford Mustang 64', '2021-07-23 00:40:09'),
(29, 'X1', 'BMW ', '2018', 'carro usado', '2021-07-23 00:43:43'),
(30, 'Panamera', 'Porsche', 'Carro de luxo', 'Ano 2012', '2021-07-23 00:45:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
