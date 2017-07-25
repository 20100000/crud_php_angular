-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jul-2017 às 04:00
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_teste_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_msg`
--

CREATE TABLE `cadastro_msg` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `data_envio` date NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_msg`
--

INSERT INTO `cadastro_msg` (`id`, `msg`, `data_envio`, `id_usuario`) VALUES
(1, 'teste msg', '2017-07-22', 2),
(2, 'msg 2 teste', '2017-07-22', 1),
(3, 'vai ccccccc', '2017-07-25', 7),
(4, 'ttttt', '2017-07-25', 4),
(5, 'ttttt', '2017-07-25', 4),
(6, 'ttttt', '2017-07-25', 4),
(7, 'ttttt', '2017-07-25', 4),
(8, 'jessssssssssssssssssssss', '2017-07-25', 2),
(9, 'bbbbbbbbbbbbbbb', '2017-07-25', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$1$Dtqyvz7/$wZSaZbfHgn0UbLlVi1HHp0', 'Admin', '2015-12-27 11:30:55', '2015-12-25 10:35:16', '2015-12-25 10:35:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(254) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `data_cad` date NOT NULL,
  `biografia` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `uf` varchar(10) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `data_nasc`, `data_cad`, `biografia`, `status`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `telefone`) VALUES
(1, 'Tiago Honorio', '1986-11-26', '2017-07-22', 'obs', 0, '', '', '', '', '', '', ''),
(2, 'Jessica nayara', '1991-01-15', '2017-07-22', 'bio obs tesssss', 1, '', '', '', '', '', '', ''),
(3, 'sdfdsfsdffsfgfdg', NULL, '2017-07-24', '', 1, '', '', '', '', '', '', ''),
(4, 'teste 2', NULL, '2017-07-24', 'dcnsdjcnsdjnsj', 1, 'lagradouro', '', '', '', '', '13188190', ''),
(5, 'ttttttttttttttttttttttttttttttttttttttttttttttttttttttt', NULL, '2017-07-24', '', 0, '', '', '', '', '', '', ''),
(6, 'gggggggggggggggggggggggggggggggg', NULL, '2017-07-24', '', 0, '', '', '', '', '', '', ''),
(7, 'cccccccccccccccccccc', NULL, '2017-07-24', '', 0, '', '', '', '', '', '', ''),
(8, 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyyy', NULL, '2017-07-24', '', 0, '', '', '', '', '', '', ''),
(9, 'vai meu amigooo', NULL, '2017-07-24', '', 1, 'xsasdf', '', 'fdds', '', '', '131855', ''),
(10, 'teste novo controlle', NULL, '2017-07-24', 'teste ccccccccccccccccc', 1, 'Rua Brás Cubas', '', 'Jardim Amanda II', 'Hortolândia', 'SP', '13188-190', '99999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_msg`
--
ALTER TABLE `cadastro_msg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_msg`
--
ALTER TABLE `cadastro_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro_msg`
--
ALTER TABLE `cadastro_msg`
  ADD CONSTRAINT `cadastro_msg_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
