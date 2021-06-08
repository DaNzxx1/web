-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2021 às 23:40
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celular`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `celular`
--

CREATE TABLE `celular` (
  `ID_CEL` int(11) NOT NULL,
  `NUMERO_SERIE_CEL` varchar(20) NOT NULL,
  `MARCA_CEL` varchar(20) NOT NULL,
  `NOME_CEL` varchar(20) NOT NULL,
  `PROCESSADOR_CEL` varchar(20) NOT NULL,
  `MEMORIA_CEL` varchar(10) NOT NULL,
  `ARMAZENAMENTO_CEL` varchar(10) NOT NULL,
  `CAMERA_FRONTAL_CEL` varchar(10) NOT NULL,
  `CAMERA_TRASEIRA_CEL` varchar(10) NOT NULL,
  `SO_CEL` varchar(20) NOT NULL,
  `BATERIA_CEL` varchar(10) NOT NULL,
  `PRECO_CEL` varchar(15) NOT NULL,
  `FILA_COMPRA_CEL` char(1) NOT NULL,
  `VENDAS_ID_VEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `ID_FUN` int(11) NOT NULL,
  `NOME_FUN` varchar(50) NOT NULL,
  `CPF_FUN` varchar(14) NOT NULL,
  `RG_FUN` varchar(12) NOT NULL,
  `EMAIL_FUN` varchar(35) NOT NULL,
  `DATA_NASCIMENTO_FUN` date NOT NULL,
  `CELULAR_FUN` varchar(15) NOT NULL,
  `LOGIN_FUN` varchar(45) NOT NULL,
  `SENHA_FUN` varchar(45) NOT NULL,
  `STATUS_FUN` varchar(10) NOT NULL DEFAULT 'ativo',
  `FUNCAO_FUN` varchar(45) NOT NULL,
  `CEP_FUN` varchar(12) NOT NULL,
  `BAIRRO_FUN` varchar(45) NOT NULL,
  `QUADRA_FUN` varchar(45) NOT NULL,
  `CONJUNTO_BLOCOS_FUN` varchar(45) NOT NULL,
  `NUMERO_FUN` varchar(20) NOT NULL,
  `UF_FUN` varchar(2) NOT NULL,
  `CARTEIRA_DE_TRABALHO_FUN` varchar(45) NOT NULL,
  `DATE_ADMISSÃO_FUN` date NOT NULL,
  `DATA_DEMISSAO_FUN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`ID_FUN`, `NOME_FUN`, `CPF_FUN`, `RG_FUN`, `EMAIL_FUN`, `DATA_NASCIMENTO_FUN`, `CELULAR_FUN`, `LOGIN_FUN`, `SENHA_FUN`, `STATUS_FUN`, `FUNCAO_FUN`, `CEP_FUN`, `BAIRRO_FUN`, `QUADRA_FUN`, `CONJUNTO_BLOCOS_FUN`, `NUMERO_FUN`, `UF_FUN`, `CARTEIRA_DE_TRABALHO_FUN`, `DATE_ADMISSÃO_FUN`, `DATA_DEMISSAO_FUN`) VALUES
(1, 'Administrador do Sistema', '', '', '', '0000-00-00', '', 'admin', '2', 'ativo', 'administrador', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `ID_VEN` int(11) NOT NULL,
  `DATA_VEN` varchar(15) NOT NULL,
  `FUNCIONARIO_ID_FUN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`ID_CEL`),
  ADD KEY `fk_CELULAR_VENDAS1_idx` (`VENDAS_ID_VEN`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID_FUN`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`ID_VEN`),
  ADD KEY `fk_VENDAS_FUNCIONARIO1_idx` (`FUNCIONARIO_ID_FUN`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `celular`
--
ALTER TABLE `celular`
  MODIFY `ID_CEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID_FUN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `celular`
--
ALTER TABLE `celular`
  ADD CONSTRAINT `fk_CELULAR_VENDAS1` FOREIGN KEY (`VENDAS_ID_VEN`) REFERENCES `vendas` (`ID_VEN`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_VENDAS_FUNCIONARIO1` FOREIGN KEY (`FUNCIONARIO_ID_FUN`) REFERENCES `funcionario` (`ID_FUN`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
