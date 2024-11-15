-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 05:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pss_facil`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificados_cursos`
--

CREATE TABLE `certificados_cursos` (
  `id` int(11) NOT NULL,
  `url_certificado` varchar(80) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tipo_curso` varchar(50) NOT NULL,
  `graduacao` varchar(50) NOT NULL,
  `curso` varchar(80) NOT NULL,
  `orgao_emissor` varchar(80) NOT NULL,
  `data_emissao` date NOT NULL,
  `nome_arquivo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificados_cursos`
--

INSERT INTO `certificados_cursos` (`id`, `url_certificado`, `id_usuario`, `tipo_curso`, `graduacao`, `curso`, `orgao_emissor`, `data_emissao`, `nome_arquivo`) VALUES
(54, 'upload_certificados_cursos/PI GANT.pdf', 17, '2', '1', 'Curso b', 'Orgao c', '0000-00-00', 'Meu arquivo');

-- --------------------------------------------------------

--
-- Table structure for table `mensagens_usuario`
--

CREATE TABLE `mensagens_usuario` (
  `id` int(11) NOT NULL,
  `mensagem_usuario` varchar(300) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mensagens_usuario`
--

INSERT INTO `mensagens_usuario` (`id`, `mensagem_usuario`, `assunto`, `id_usuario`) VALUES
(1, 'Teste mensagem', 'Teste', 16),
(2, 'Outra mensagem', 'Teste 2', 16),
(3, 'Mais uma mensagem', 'Teste 3', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_completo` varchar(80) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` int(20) NOT NULL,
  `estado_rg` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `canhoto` varchar(20) NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `nome_mae` varchar(80) NOT NULL,
  `nome_pai` varchar(80) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `cep` int(20) NOT NULL,
  `rua` varchar(80) NOT NULL,
  `numero_casa` int(20) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(20) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` int(20) NOT NULL,
  `celular` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome_completo`, `data_nascimento`, `cpf`, `rg`, `estado_rg`, `email`, `sexo`, `canhoto`, `estado_civil`, `nome_mae`, `nome_pai`, `nacionalidade`, `naturalidade`, `cep`, `rua`, `numero_casa`, `complemento`, `bairro`, `cidade`, `uf`, `senha`, `telefone`, `celular`) VALUES
(11, 'Teste', '0000-00-00', '10020030044', 123456789, '5', 'email@email.com', '1', '2', '4', 'Nome mãe', 'Nome pai', 'Jordânia', '5', 234234, 'ruaDoLadoDaOutraRua', 888, 'Do lado da outra rua', 'Bairro Tal', 'Cidade logo alí', 'BB', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(12, 'Teste 2', '1999-03-12', '55544433322', 1221122112, '5', 'OutroEmail@gmail.com', '1', '1', '2', 'Ciclana', 'Ciclano', 'Índia', '5', 66223, 'Aquela Rua', 345, 'Perto da outra rua', 'O bairro lá longe', 'A cidade logo ali', 'HH', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(16, 'Teste 3', '1978-03-04', '12345678910', 123456789, '5', 'vitu@gmail.com', '1', '2', '3', 'Fulana', 'Fulano', 'Noruega', '5', 3423667, 'ruaDoLadoDaOutraRua', 888, 'Do lado da outra rua', 'Bairro Tal', 'Cidade logo alí', 'PV', 'e10adc3949ba59abbe56e057f20f883e', 123456789, 123456789),
(17, 'Vitor Gonçalves de Castro', '1932-07-04', '10733496823', 612332100, '5', 'vitu@gmail.com', '1', '2', '1', 'Fulana', 'Fulano', 'Brasil', '5', 0, 'ruaDoLadoDaOutraRua', 888, 'Do lado da outra rua', 'Bairro Tal', 'Cidade logo alí', 'PR', 'e10adc3949ba59abbe56e057f20f883e', 0, 999998888);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificados_cursos`
--
ALTER TABLE `certificados_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens_usuario`
--
ALTER TABLE `mensagens_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificados_cursos`
--
ALTER TABLE `certificados_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `mensagens_usuario`
--
ALTER TABLE `mensagens_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
