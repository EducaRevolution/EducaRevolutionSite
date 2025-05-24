-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/05/2025 às 21:18
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
  `inicio_sessao` datetime NOT NULL,
  `fim_sessao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_sessoes`
--

INSERT INTO `tb_sessoes` (`id_sessao`, `id_usuario`, `inicio_sessao`, `fim_sessao`) VALUES
(16, 40, '0000-00-00 00:00:00', NULL),
(24, 45, '0000-00-00 00:00:00', NULL),
(25, 45, '2025-05-16 10:58:51', '2025-05-16 10:58:57'),
(26, 45, '2025-05-16 10:59:13', '2025-05-16 11:06:55'),
(27, 46, '2025-05-16 11:06:50', NULL),
(28, 46, '2025-05-16 11:07:02', '2025-05-16 11:08:05'),
(29, 47, '2025-05-16 11:08:17', NULL),
(30, 47, '2025-05-16 11:08:41', '2025-05-16 11:08:49'),
(31, 47, '2025-05-16 11:09:02', NULL),
(32, 48, '2025-05-23 16:14:47', NULL),
(33, 48, '2025-05-23 16:15:36', '2025-05-23 16:15:52'),
(34, 48, '2025-05-23 16:15:59', '2025-05-23 16:16:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(45) NOT NULL,
  `nm_email` varchar(60) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_plano` int(11) DEFAULT NULL,
  `tempo_logado` bigint(20) DEFAULT 0,
  `total_videos_assistidos` int(11) DEFAULT 0,
  `total_downloads` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nm_usuario`, `nm_email`, `senha`, `id_plano`, `tempo_logado`, `total_videos_assistidos`, `total_downloads`) VALUES
(1, 'educarevolution', 'educa@gmail.com', 'educa123', NULL, 0, 0, 0),
(2, 'thiago', 'titicolucero@gmai.com', '$2y$10$TiN3MjKfoK0FsH/dAI6zQ.06muk00YWHNN9.wJAGkS6OqFKY82.Xq', NULL, 0, 0, 0),
(5, 'João Silva', 'joaozinho@gmail.com', 'senha', NULL, 0, 0, 0),
(44, 'Teste', 'teste@gmail.com', '$2y$10$nE7pPZW6K.NhV5COKqmdSuhfjPgfWme81.DWGuN308FZKC7i0p5ny', NULL, 0, 0, 0),
(45, 'Tasta', 'tasta@gmail.com', '$2y$10$k87pWbbabBQEgv/8gP.HruIG5QQtbQt1XdMaufzzPRrr5u3nTAjie', NULL, 0, 0, 0),
(46, 'Kfc', 'kfc@gmail.com', '$2y$10$CLydGsNnWzAKK0sJo5f3T.8Lnsz/Mykqj.1KhvyWCeQsamqXpZIai', NULL, 0, 0, 0),
(47, 'Aba', 'aba@gmail.com', '$2y$10$38ytZiMbsgAU26QMsCsi6.CedaDZaDaXH7WkNonlOT801PuRgD8We', NULL, 0, 0, 0),
(48, 'Rafael', 'rafael@gmail.com', '$2y$10$udlYjCMkGE2LDBGAMUH/s.eW3vYo/QviHmKHRqq37MmH9ejYwFmku', NULL, 0, 0, 0),
(49, 'FRB', 'frb@gmail.com', '$2y$10$zrFyk7RkXGVhyxV2JQq0cO8ENonsppo5evB5DlxxnDMCLGChVfk0i', NULL, 0, 0, 0);

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
  ADD PRIMARY KEY (`id_sessao`);

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
  MODIFY `id_sessao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
