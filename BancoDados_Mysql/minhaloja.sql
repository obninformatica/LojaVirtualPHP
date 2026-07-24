-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/07/2026 às 23:23
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
-- Banco de dados: `minhaloja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(200) UNSIGNED NOT NULL,
  `barcode` int(15) UNSIGNED NOT NULL,
  `tipo` varchar(48) NOT NULL,
  `datacadastro` datetime NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `estoque` int(8) NOT NULL,
  `embalagem` varchar(100) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `barcode`, `tipo`, `datacadastro`, `descricao`, `peso`, `valor`, `estoque`, `embalagem`, `observacao`) VALUES
(1, 2147483647, 'Refrigerantew', '2026-06-04 22:14:35', '', '', 0.00, 0, '', ''),
(2, 2147483647, 'Refrigerante DOLLY limão', '2026-06-04 22:21:26', 'Refrigerante DOLLY limão', '350ml', 2.00, 10, 'garrafa pet 350ml', 'Até agora nenhuma');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
