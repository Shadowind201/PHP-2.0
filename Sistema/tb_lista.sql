-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/05/2024 às 01:04
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `compras`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_lista`
--

CREATE TABLE `tb_lista` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `nota` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_lista`
--

INSERT INTO `tb_lista` (`id`, `nome`, `quantidade`, `nota`, `status`) VALUES
(7, 'sgewrG', 4, 'wrgWERG', 1),
(8, 'sdgG', 6, 'AERHAH', 1),
(9, 'GRHERH', 2, 'DFAHHRE', 1),
(10, 'aergharh', 536, 'ghaehaeh', 1),
(11, 'aehtha', 4, 'ahtaeh', 1),
(12, 'aergeag', 6, 'atheah', 1),
(13, 'eargaerg', 6, 'hstjhsrh', 1),
(14, 'sjsrjsj', 7, 'sryjstyj', 1),
(15, 'zrrgherh', 4, 'fdnzgnzaj', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_lista`
--
ALTER TABLE `tb_lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_lista`
--
ALTER TABLE `tb_lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
