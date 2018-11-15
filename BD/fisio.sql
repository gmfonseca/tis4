-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2018 às 22:51
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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

CREATE DATABASE fisio;

USE fisio;
-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `codigoExercicio` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`codigoExercicio`, `imagem`, `descricao`) VALUES
(1, NULL, 'Se vocÃª respira pelo nariz, feche uma narina e veja como o ar faz mais barulho para entrar. Se vocÃª respira pela boca, fecha a boca e perceba a entrada de ar pelo nariz. O som deve ser alto e contÃ­nuo e bem lento para que vocÃª perceba este caminho novo que o ar estÃ¡ fazendo. A boca deve ficar fechada.'),
(2, NULL, 'Repita o somâ€HUM, HUM, HUMâ€com a boca fechada e com a boca aberta. Perceba a sensaÃ§Ã£o de alternar o fluxo pelo nariz e pela boca.'),
(3, NULL, 'Cante uma mÃºsica inteira que vocÃª conhece  com a boca fechada, pensando na melodia, apenas fazendo um som qualquer, mantendo por um perÃ­odo maior os lÃ¡bios selados. Perceba a vibraÃ§Ã£o gerada.'),
(4, NULL, 'Puxe o ar pelo nariz e solte o ar pela boca. Preste atenÃ§Ã£o o que acontece com seus ombros enquanto vocÃª respira.'),
(5, NULL, 'Agora perceba como a sua cabeÃ§a  estÃ¡ em relaÃ§Ã£o ao seu corpo. Procure colar o queixo no pescoÃ§o. Se conseguiu, mantenha nesta posiÃ§Ã£o por mais 20 segundos.'),
(6, NULL, 'Abra os seus braÃ§os, quando respirar e perceba como Ã© fÃ¡cil o ar entrar nos pulmÃµes! Quando facilitamos com os movimentos de braÃ§os, o ar entra mais rÃ¡pido. '),
(7, NULL, 'DÃª 10 pulinhos bem alto com a boca fechada e depois mais 10 com a boca aberta e veja qual te deixou mais cansado.'),
(8, '61ccc907-1afa-4c5e-bd1c-00b5aaa26e6f.jpg', 'Deitado de barriga para baixo , no chÃ£o. Apoiar as mÃ£os na direÃ§Ã£o do peito, encostando o queixo no chÃ£o. Levantar metade do corpo ao esticar os braÃ§os, tentar jogar a cabeÃ§a para trÃ¡s e contar atÃ© 10  em voz alta, soprando o ar. Relaxar colocando o queixo de novo no chÃ£o. Repetir 10 vezes este exercÃ­cio.'),
(9, '0545b48c-422d-42f4-818c-3188dd2b2cc4.jpg', 'Brincar de carrinho de mÃ£o. Pedir ao papai ou a mamÃ£e para segurar as pernas e sair direcionando a crianÃ§a . Prestar atenÃ§Ã£o nas mÃ£os que devem ser posicionadas mais abertas, nÃ£o deixando que os braÃ§os fiquem dobrados e na barriguinha, que deve ficar bem contraÃ­da , longe  do chÃ£o. Cuidado para nÃ£o bater o queixo no chÃ£o!'),
(10, '4f66754a-2ce6-4c0f-bf40-b1702aea1f08.jpg', 'Deitado de barriga para cima dobrar as pernas e segurar uma bola. Levantar o corpo entregando a bola para sua mÃ£e,  pai, irmÃ£o ou qualquer amigo que possa te ajudar nesta tarefa. Ao levantar, solte ar e preste atenÃ§Ã£o como a barriga estÃ¡ movimentando, ela deve ser sugada, ficar bem apertadinha. Repetir 10 vezes este exercÃ­cio.'),
(11, NULL, 'De pÃ©, levantar um bastÃ£o ou um cabo de vassoura atÃ© altura acima da cabeÃ§a. Repetir este exercÃ­cio 10 vezes. Dar continuidade a este exercÃ­cio, levando o braÃ§o atrÃ¡s da orelha, abaixando o cotovelo e mantendo-o bem prÃ³ximo da cintura. Manter esta posiÃ§Ã£o contando atÃ©  20, pensando em direcionar o cotovelo para frente. '),
(12, '534d88b5-2cc2-4a99-9be3-fc56958b0705.jpg', 'Deitado de barriga para cima. Manter a cabeÃ§a e as costas bem encostadas no chÃ£o. Prestar atenÃ§Ã£o na posiÃ§Ã£o da cabeÃ§a, o queixo deve ficar encaixado. Nesta posiÃ§Ã£o, rodar as pernas imaginando um cÃ­rculo e pensando em todas as letras do alfabeto. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `codigoPergunta` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `respostaCerta` varchar(300) NOT NULL,
  `tipo_pergunta` int(10) UNSIGNED NOT NULL,
  `cod_Questionario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`codigoPergunta`, `descricao`, `tipo_pergunta`, `cod_Questionario`) VALUES
(4, 'A Fisioterapia atua nas alteraÃ§Ãµes posturais e nas disfunÃ§Ãµes respiratÃ³rias das crianÃ§as respiradoras orais?', 0, 0),
(6, 'A crianÃ§a nasce respiradora oral?', 0, 0),
(7, 'O maior tempo de amamentaÃ§Ã£o favorecerÃ¡ o crescimento adequado dos ossos da face?', 0, 0),
(8, 'Ã‰ causa da respiraÃ§Ã£o oral a presenÃ§a da rinite alÃ©rgica?', 0, 0),
(9, 'A obstruÃ§Ã£o mecÃ¢nica pela presenÃ§a da adenoides e tonsilas paliativas Ã© causa da respiraÃ§Ã£o oral?', 0, 0),
(10, 'O tratamento adequado da rinite alÃ©rgica considerando a retirada dos fatores ambientais associado a medicamentos  controla os fatores de risco para desenvolvimento da respiraÃ§Ã£o oral?', 0, 0),
(11, 'SÃ£o caracterÃ­sticas de face de crianÃ§as respiradoras orais a presenÃ§a de olheiras?', 0, 0),
(12, 'As crianÃ§as respiradoras orais nÃ£o babam no travesseiro?', 0, 0),
(13, 'As crianÃ§as respiradoras orais tem dificuldade de comer alimentos mais moles?', 0, 0),
(14, 'As crianÃ§as respiradoras orais nÃ£o apresentam mau hÃ¡lito?', 0, 0),
(15, 'As crianÃ§as respiradoras orais apresentam o lÃ¡bio superior mais grosso do que o inferior?', 0, 0),
(16, 'A respiraÃ§Ã£o oral, entre diversos problemas, pode ocasionar alteraÃ§Ã£o da fala?', 0, 0),
(17, 'A mÃ¡-oclusÃ£o, uma das principais caracterÃ­sticas do respirador oral pode acarretar dificuldades ou desvios de produÃ§Ã£o fonÃ©tico/articulatÃ³rio?', 0, 0),
(18, 'A apresentaÃ§Ã£o de sintomas isolados pode mascarar a respiraÃ§Ã£o oral, impondo-se, portanto, um desafio diagnÃ³stico. Ã‰ importante questionar os hÃ¡bitos das crianÃ§as, como uso de chupetas e mamadeiras ou hÃ¡bito de chupar o dedo â€“ hÃ¡bitos que podem desencadear o aparecimento da respiraÃ§Ã£o ', 0, 0),
(19, 'A apresentaÃ§Ã£o de sintomas isolados pode mascarar a respiraÃ§Ã£o oral, impondo-se, portanto, um desafio diagnÃ³stico. Ã‰ importante questionar os hÃ¡bitos das crianÃ§as, como uso de chupetas e mamadeiras ou hÃ¡bito de chupar o dedo â€“ hÃ¡bitos que podem desencadear o aparecimento da respiraÃ§Ã£o ', 0, 0),
(20, 'A crianÃ§a respiradora oral nÃ£o apresenta muita tosse?', 0, 0),
(21, 'Os pacientes com respiraÃ§Ã£o oral podem apresentar hipersonolÃªncia diurna, sono dessincronizado (alteraÃ§Ã£o da fase REM do sono), depressÃ£o da capacidade de despertar, sono agitado e enurese noturna ( xixi na cama a noite)?', 0, 0),
(22, 'A crianÃ§a respiradora oral nÃ£o apresenta ronco?', 0, 0),
(23, 'Aerofagia ou engolir ar Ã© um sintoma frequente no respirador oral?', 0, 0),
(24, 'CrianÃ§as respiradoras orais apresentam projeÃ§Ã£o da cabeÃ§a para frente e hiperlordose cervical, que se acentuam com a idade?', 0, 0),
(25, 'A obstruÃ§Ã£o nasal pode cursar com alteraÃ§Ã£o na audiÃ§Ã£o temporÃ¡ria?', 0, 0),
(26, 'A obstruÃ§Ã£o nasal predispÃµe a estase das secreÃ§Ãµes nasossinusais, facilitando a infecÃ§Ã£o?', 0, 0),
(27, 'CrianÃ§a respiradora oral nÃ£o tem alteraÃ§Ã£o  de voz?', 0, 0),
(28, 'A utilizaÃ§Ã£o de mamadeiras, mesmo em associaÃ§Ã£o com aleitamento materno, leva a alteraÃ§Ãµes no desenvolvimento orofacial?', 0, 0),
(29, 'A rinite pode levar ao quadro de respiraÃ§Ã£o oral?', 0, 0),
(30, 'O papel do mÃ©dico Ã© importante neste processo?', 0, 0),
(31, 'A respiraÃ§Ã£o oral nÃ£o interfere na qualidade de vida das crianÃ§as?', 0, 0),
(32, 'O Tratamento da respiraÃ§Ã£o oral deve ser  multidisciplinar?', 0, 0);

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
  `descricao` varchar(300) NOT NULL,
  `cod_pergunta` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostacerta`
--

INSERT INTO `respostacerta` (`codigoCerto`, `descricao`, `cod_pergunta`) VALUES
(4, 'Sim', 4),
(6, 'NÃ£o', 6),
(7, 'Sim', 7),
(8, 'Sim', 8),
(9, 'Sim', 9),
(10, 'Sim', 10),
(11, 'Sim', 11),
(12, 'NÃ£o', 12),
(13, 'NÃ£o', 13),
(14, 'NÃ£o', 14),
(15, 'NÃ£o', 15),
(16, 'NÃ£o', 16),
(17, 'Sim', 17),
(20, 'NÃ£o', 20),
(21, 'NÃ£o', 21),
(22, 'NÃ£o', 22),
(23, 'Sim', 23),
(24, 'Sim', 24),
(25, 'Sim', 25),
(26, 'Sim', 26),
(27, 'NÃ£o', 27),
(28, 'Sim', 28),
(29, 'Sim', 29),
(30, 'Sim', 30),
(31, 'NÃ£o', 31),
(32, 'Sim', 32);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostaerrada`
--

CREATE TABLE `respostaerrada` (
  `codigoErrado` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `cod_pergunta` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostaerrada`
--

INSERT INTO `respostaerrada` (`codigoErrado`, `descricao`, `cod_pergunta`) VALUES
(10, 'NÃ£o', 4),
(11, '', 4),
(12, '', 4),
(16, 'Sim', 6),
(17, '', 6),
(18, '', 6),
(19, 'NÃ£o', 7),
(20, '', 7),
(21, '', 7),
(22, 'NÃ£o', 8),
(23, '', 8),
(24, '', 8),
(25, 'NÃ£o', 9),
(26, '', 9),
(27, '', 9),
(28, 'NÃ£o', 10),
(29, '', 10),
(30, '', 10),
(31, 'NÃ£o', 11),
(32, '', 11),
(33, '', 11),
(34, 'Sim', 12),
(35, '', 12),
(36, '', 12),
(37, 'Sim', 13),
(38, '', 13),
(39, '', 13),
(40, 'Sim', 14),
(41, '', 14),
(42, '', 14),
(43, 'Sim', 15),
(44, '', 15),
(45, '', 15),
(46, 'Sim', 16),
(47, '', 16),
(48, '', 16),
(49, 'NÃ£o', 17),
(50, '', 17),
(51, '', 17),
(58, 'Sim', 20),
(59, '', 20),
(60, '', 20),
(61, 'Sim', 21),
(62, '', 21),
(63, '', 21),
(64, 'Sim', 22),
(65, '', 22),
(66, '', 22),
(67, 'NÃ£o', 23),
(68, '', 23),
(69, '', 23),
(70, 'NÃ£o', 24),
(71, '', 24),
(72, '', 24),
(73, 'NÃ£o', 25),
(74, '', 25),
(75, '', 25),
(76, 'NÃ£o', 26),
(77, '', 26),
(78, '', 26),
(79, 'Sim', 27),
(80, '', 27),
(81, '', 27),
(82, 'NÃ£o', 28),
(83, '', 28),
(84, '', 28),
(85, 'NÃ£o', 29),
(86, '', 29),
(87, '', 29),
(88, 'NÃ£o', 30),
(89, '', 30),
(90, '', 30),
(91, 'Sim', 31),
(92, '', 31),
(93, '', 31),
(94, 'NÃ£o', 32),
(95, '', 32),
(96, '', 32);

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
  `genero` char(1) NOT NULL,
  `tipo_usuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `email`, `senha`, `genero`, `tipo_usuario`) VALUES
(1, 'Rafael', 'rafabadaro.15@hotmail.com', '1234', '', 1),
(2, 'Gabriel Magno', 'gmfonseca@gmail.com', '123456', '', 0),
(3, 'JoÃ£o Henrique', 'kid1@gmail.com', '123456', 'M', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`codigoExercicio`);

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
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `codigoExercicio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `codigoPergunta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `questionario`
--
ALTER TABLE `questionario`
  MODIFY `codigoQuestionario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `respostacerta`
--
ALTER TABLE `respostacerta`
  MODIFY `codigoCerto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `respostaerrada`
--
ALTER TABLE `respostaerrada`
  MODIFY `codigoErrado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
