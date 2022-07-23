-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 27-Jun-2022 às 22:59
-- Versão do servidor: 5.5.68-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conecta`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `valor` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `configs`
--

INSERT INTO `configs` (`id`, `nome`, `valor`) VALUES
(1, 'versao', '2.0.1'),
(2, 'notas', 'Nova atualização !'),
(3, 'sms', 'http://painel.ddsdy.xyz/sms.php'),
(4, 'update', 'http://painel.ddsdy.xyz/update.php'),
(5, 'email', 'dltunnel@gmail.com'),
(6, 'contato', 'https://t.me/davidsdy'),
(7, 'termos', '...'),
(8, 'checkuser', 'false'),
(9, 'msg', 'Bem vindo ao DLTunnel !');

-- --------------------------------------------------------

--
-- Estrutura da tabela `payloads`
--

CREATE TABLE IF NOT EXISTS `payloads` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FLAG` varchar(100) NOT NULL,
  `Payload` varchar(200) NOT NULL,
  `SNI` varchar(100) NOT NULL,
  `TlsIP` varchar(100) NOT NULL,
  `ProxyIP` varchar(100) NOT NULL,
  `ProxyPort` varchar(10) NOT NULL,
  `Info` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `payloads`
--

INSERT INTO `payloads` (`id`, `Name`, `FLAG`, `Payload`, `SNI`, `TlsIP`, `ProxyIP`, `ProxyPort`, `Info`) VALUES
(1, 'VIVO', 'vivo', 'vivo', 'vivo', '104.24.10.16', '', '443', 'tlsws');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portas`
--

CREATE TABLE IF NOT EXISTS `portas` (
  `id` int(11) NOT NULL,
  `Porta` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `portas`
--

INSERT INTO `portas` (`id`, `Porta`) VALUES
(3, '7300'),
(5, '7100'),
(6, '7200');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidores`
--

CREATE TABLE IF NOT EXISTS `servidores` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `TYPE` varchar(20) NOT NULL DEFAULT 'premium',
  `FLAG` varchar(20) NOT NULL DEFAULT 'br.png',
  `ServerIP` varchar(100) NOT NULL,
  `CheckUser` varchar(200) NOT NULL,
  `ServerPort` int(11) NOT NULL DEFAULT '22',
  `SSLPort` int(11) NOT NULL,
  `USER` varchar(20) NOT NULL,
  `PASS` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servidores`
--

INSERT INTO `servidores` (`id`, `Name`, `TYPE`, `FLAG`, `ServerIP`, `CheckUser`, `ServerPort`, `SSLPort`, `USER`, `PASS`) VALUES
(3, 'Servidor 1', 'premium', 'br.png', 'dominio.xyz', 'http://dominio.xyz:8989/CheckUser', 22, 0, '', ''),
(4, 'Servidor 2', 'premium', 'br.png', 'dominio.xyz', 'http://dominio.xyz:8989/CheckUser', 22, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(25) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Davidsdy', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payloads`
--
ALTER TABLE `payloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portas`
--
ALTER TABLE `portas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servidores`
--
ALTER TABLE `servidores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `payloads`
--
ALTER TABLE `payloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `portas`
--
ALTER TABLE `portas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `servidores`
--
ALTER TABLE `servidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
