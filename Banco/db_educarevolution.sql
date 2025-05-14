-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/04/2025 às 01:40
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
-- Banco de dados: `db_educarevolution`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_plano`
--

CREATE TABLE `tb_plano` (
  `id_plano` int(11) NOT NULL,
  `nm_plano` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_sessoes`
--

CREATE TABLE `tb_sessoes` (
  `id_sessao` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `inicio_sessao` timestamp NOT NULL DEFAULT current_timestamp(),
  `fim_sessao` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(45) NOT NULL,
  `nm_email` varchar(60) NOT NULL,
  `id_plano` int(11) DEFAULT NULL,
  `tempo_logado` bigint(20) DEFAULT 0,
  `total_videos_assistidos` int(11) DEFAULT 0,
  `total_downloads` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_videos`
--

CREATE TABLE `tb_videos` (
  `id_video` int(11) NOT NULL,
  `nm_titulo` varchar(100) NOT NULL,
  `ds_descricao` text DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `tm_duracao` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_visualizacoes`
--

CREATE TABLE `tb_visualizacoes` (
  `id_visualizacao` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `dt_visualizacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_plano`
--
ALTER TABLE `tb_plano`
  ADD PRIMARY KEY (`id_plano`);

--
-- Índices de tabela `tb_sessoes`
--
ALTER TABLE `tb_sessoes`
  ADD PRIMARY KEY (`id_sessao`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nm_email` (`nm_email`),
  ADD KEY `id_plano` (`id_plano`);

--
-- Índices de tabela `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD PRIMARY KEY (`id_video`);

--
-- Índices de tabela `tb_visualizacoes`
--
ALTER TABLE `tb_visualizacoes`
  ADD PRIMARY KEY (`id_visualizacao`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_video` (`id_video`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_plano`
--
ALTER TABLE `tb_plano`
  MODIFY `id_plano` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_sessoes`
--
ALTER TABLE `tb_sessoes`
  MODIFY `id_sessao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_videos`
--
ALTER TABLE `tb_videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_visualizacoes`
--
ALTER TABLE `tb_visualizacoes`
  MODIFY `id_visualizacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_sessoes`
--
ALTER TABLE `tb_sessoes`
  ADD CONSTRAINT `tb_sessoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE CASCADE;

--
-- Restrições para tabelas `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_plano`) REFERENCES `tb_plano` (`id_plano`) ON DELETE SET NULL;

--
-- Restrições para tabelas `tb_visualizacoes`
--
ALTER TABLE `tb_visualizacoes`
  ADD CONSTRAINT `tb_visualizacoes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_visualizacoes_ibfk_2` FOREIGN KEY (`id_video`) REFERENCES `tb_videos` (`id_video`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
