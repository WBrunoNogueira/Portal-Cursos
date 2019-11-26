-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2019 às 15:35
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cursos_web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `idcursos` int(11) NOT NULL,
  `titulo_video` varchar(45) DEFAULT NULL,
  `descricao_video` varchar(45) DEFAULT NULL,
  `login_usuario_id` int(11) NOT NULL,
  `videos_idvideos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`idcursos`, `titulo_video`, `descricao_video`, `login_usuario_id`, `videos_idvideos`) VALUES
(1, 'testando titulo', 'testando descricao', 1, 1),
(2, 'Macaco Loko', 'testando a descricao testando a descricao tes', 1, 1),
(3, 'test1', 'Agora sim Ã© um macaco mesmo hein', 1, 1),
(4, 'test1', 'Agora sim Ã© um macaco mesmo hein', 1, 1),
(5, 'a', 'st', 1, 1),
(6, 'Testando o titulo', 'Agora sim Ã© um macaco mesmo hein', 1, 1),
(7, 'Testando o titulo', 'testando a descricao testando a descricao tes', 1, 1),
(8, 'Testando o titulo', 'testando a descricao testando a descricao tes', 1, 1),
(9, 'd', 'd', 1, 1),
(10, 'test', 'Agora sim Ã© um macaco mesmo hein', 1, 1),
(11, 'Testando o titulo', 'Agora sim Ã© um macaco mesmo hein', 1, 1),
(12, 'a', 'Macaco Muito Loko', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_usuario`
--

CREATE TABLE `login_usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `nivel` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login_usuario`
--

INSERT INTO `login_usuario` (`usuario_id`, `usuario`, `senha`, `nivel`) VALUES
(1, 'wesleyk', '202cb962ac59075b964b07152d234b70', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `idvideos` int(11) NOT NULL,
  `titulo_video` varchar(45) DEFAULT NULL,
  `descricao_video` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`idvideos`, `titulo_video`, `descricao_video`) VALUES
(1, 'nenhum', 'nenhum'),
(2, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(3, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(4, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(5, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(6, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(7, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(8, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(9, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(10, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(11, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(12, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(13, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(14, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(15, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(16, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(17, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(18, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(19, 'VID-20171122-WA0000[1].mp4', 'videos/VID-20171122-WA0000[1].mp4'),
(20, 'Testando o titulo', 'videos/VID-20171122-WA0000[1].mp4'),
(21, 'Macaco Loko', 'videos/y2mate.com - os_trapalhoes_mussum_no_r'),
(22, 'Testando o titulo', 'videos/y2mate.com - os_trapalhoes_mussum_no_r'),
(23, 'a', 'videos/y2mate.com - os_trapalhoes_mussum_no_r'),
(24, 'Macaco Jogador', 'videos/y2mate.com - videos_curtos_e_engraados'),
(25, 'Macaco Loko', 'videos/VID-20171122-WA0000[1].mp4'),
(26, 'Testando o titulo', 'videos/y2mate.com - videos_curtos_e_engraados'),
(27, 'Testando o video', 'videos/y2mate.com - videos_curtos_e_engraados'),
(28, 'mudado', 'videos/y2mate.com - videos_curtos_e_engraados'),
(29, 'Macaco Loko', 'videos/y2mate.com - videos_curtos_e_engraados_18_hsZVlDQEwnI_360p.mp4.mp4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcursos`,`login_usuario_id`,`videos_idvideos`),
  ADD KEY `fk_cursos_login1_idx` (`login_usuario_id`),
  ADD KEY `fk_cursos_videos1_idx` (`videos_idvideos`);

--
-- Índices para tabela `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`idvideos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `idvideos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_cursos_login1` FOREIGN KEY (`login_usuario_id`) REFERENCES `login_usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cursos_videos1` FOREIGN KEY (`videos_idvideos`) REFERENCES `videos` (`idvideos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
