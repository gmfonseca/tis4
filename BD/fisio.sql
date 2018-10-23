-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Out-2018 às 17:04
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--
CREATE DATABASE fisio;

USE fisio;

CREATE TABLE `pergunta` (
  `codigoPergunta` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `cod_Questionario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`codigoPergunta`, `descricao`, `cod_Questionario`) VALUES
(1, 'Como Ã© o jeito correto de respirar?', 0),
(2, 'Isso Ã© um teste?', 0),
(3, 'Vamo ver se deu?', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontuacao`
--

CREATE TABLE `pontuacao` (
  `cod_Questionario` int(10) UNSIGNED NOT NULL,
  `cod_Usuario` int(10) UNSIGNED NOT NULL,
  `pontos` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

CREATE TABLE `questionario` (
  `codigoQuestionario` int(10) UNSIGNED NOT NULL,
  `numPerguntas` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questionario`
--

INSERT INTO `questionario` (`codigoQuestionario`, `numPerguntas`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostacerta`
--

CREATE TABLE `respostacerta` (
  `codigoCerto` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `cod_pergunta` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostacerta`
--

INSERT INTO `respostacerta` (`codigoCerto`, `descricao`, `cod_pergunta`) VALUES
(1, 'Nariz', 1),
(2, 'Sim', 2),
(3, 'Sim', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostaerrada`
--

CREATE TABLE `respostaerrada` (
  `codigoErrado` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `cod_pergunta` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostaerrada`
--

INSERT INTO `respostaerrada` (`codigoErrado`, `descricao`, `cod_pergunta`) VALUES
(1, 'Perna', 1),
(2, 'Branquias', 1),
(3, 'BraÃ§o', 1),
(4, 'Talvez', 2),
(5, 'NÃ£o fudendo', 2),
(6, 'LÃ³gico que nÃ£o', 2),
(7, 'Talvez nÃ£o', 3),
(8, 'NÃ£o fudendo', 3),
(9, 'Nem pensar', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `numero` varchar(15) NOT NULL,
  `cod_usuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `tipo_usuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `email`, `senha`, `tipo_usuario`) VALUES
(1, 'Rafael', 'rafabadaro.15@hotmail.com', '1234', 1),
(2, 'Gabriel Magno', 'gmfonseca@gmail.com', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`codigoPergunta`),
  ADD KEY `cod_Questionario` (`cod_Questionario`);

--
-- Indexes for table `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD KEY `cod_Questionario` (`cod_Questionario`),
  ADD KEY `cod_Usuario` (`cod_Usuario`);

--
-- Indexes for table `questionario`
--
ALTER TABLE `questionario`
  ADD PRIMARY KEY (`codigoQuestionario`);

--
-- Indexes for table `respostacerta`
--
ALTER TABLE `respostacerta`
  ADD PRIMARY KEY (`codigoCerto`),
  ADD KEY `cod_pergunta` (`cod_pergunta`);

--
-- Indexes for table `respostaerrada`
--
ALTER TABLE `respostaerrada`
  ADD PRIMARY KEY (`codigoErrado`),
  ADD KEY `cod_pergunta` (`cod_pergunta`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `codigoPergunta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questionario`
--
ALTER TABLE `questionario`
  MODIFY `codigoQuestionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `respostacerta`
--
ALTER TABLE `respostacerta`
  MODIFY `codigoCerto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `respostaerrada`
--
ALTER TABLE `respostaerrada`
  MODIFY `codigoErrado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `pergunta_ibfk_1` FOREIGN KEY (`cod_Questionario`) REFERENCES `questionario` (`codigoQuestionario`);

--
-- Limitadores para a tabela `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD CONSTRAINT `pontuacao_ibfk_1` FOREIGN KEY (`cod_Questionario`) REFERENCES `questionario` (`codigoQuestionario`),
  ADD CONSTRAINT `pontuacao_ibfk_2` FOREIGN KEY (`cod_Usuario`) REFERENCES `usuario` (`codigo`);

--
-- Limitadores para a tabela `respostacerta`
--
ALTER TABLE `respostacerta`
  ADD CONSTRAINT `respostacerta_ibfk_1` FOREIGN KEY (`cod_pergunta`) REFERENCES `pergunta` (`codigoPergunta`);

--
-- Limitadores para a tabela `respostaerrada`
--
ALTER TABLE `respostaerrada`
  ADD CONSTRAINT `respostaerrada_ibfk_1` FOREIGN KEY (`cod_pergunta`) REFERENCES `pergunta` (`codigoPergunta`);

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
