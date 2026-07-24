-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/07/2026 às 23:21
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
-- Banco de dados: `shop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `DataEntrada` datetime NOT NULL,
  `OrdemServico` int(8) NOT NULL,
  `Nome` varchar(80) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Telefone` varchar(100) NOT NULL,
  `Aparelho` varchar(100) NOT NULL,
  `Modelo` varchar(40) NOT NULL,
  `NumSerie` varchar(50) NOT NULL,
  `Condicoes` varchar(100) NOT NULL,
  `Defeito` varchar(100) NOT NULL,
  `Acessorios` varchar(100) NOT NULL,
  `DataOrcamento` date NOT NULL,
  `DataFazerDireto` date NOT NULL,
  `Orcamento` text NOT NULL,
  `Valor` decimal(10,2) NOT NULL,
  `Observacoes` text NOT NULL,
  `DataEntregue` date NOT NULL,
  `MaterialAplicado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `assunto` varchar(60) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'teste simples', '', '', ''),
(2, 'Osvaldo', '', '', 'Testando sistema de envio de dados para banco usando php orientado a objeto PDO'),
(3, '', '', '', ''),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'Computador', 2000.00),
(2, 'Notebook', 1800.00),
(3, 'Fonte 300W', 235.80),
(4, 'Monitor SVGA/HDMI 21Pol', 382.60),
(5, 'Mouse sem fio', 85.40),
(6, 'Teclado ASCII sem fio', 38.60),
(7, 'HD SSD 500GB', 285.70),
(8, 'Cabo CAT-5 2 Metros', 42.70),
(9, 'cabo AC Chanfrado', 18.30),
(10, 'Cabo AC Oitinho Triangulo', 21.60);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
