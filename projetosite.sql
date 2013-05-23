-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.6.11
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projetosite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assosiado`
--

CREATE TABLE IF NOT EXISTS `assosiado` (
  `idassosiado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `datanasc` varchar(10) NOT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `complemento` varchar(200) NOT NULL,
  `ativo` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 bloqueado | 1 desbloqueado',
  PRIMARY KEY (`idassosiado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `assosiado`
--

INSERT INTO `assosiado` (`idassosiado`, `nome`, `endereco`, `bairro`, `numero`, `cep`, `cidade`, `estado`, `email`, `telefone`, `celular`, `senha`, `cpf`, `datanasc`, `arquivo`, `complemento`, `ativo`) VALUES
(1, 'khgkhfjhgkg', 'khgkhfjhgkg', 'khgkhfjhgkg', 'gkhglhlghk', '52154-151', 'kfkjgfkj', 'khgkhfjhgkg', 'fdhdhd@kjfkg.com', '(53) 1541-3541', '(31) 5415-4151', 'fbf373a1', '058.173.554-42', '1245431531', NULL, 'khgkhfjhgkg', '1'),
(2, 'teste', 'teste', 'teste', '123123', '11231-231', 'teste', 'teste', 'teste@teste.com', '(12) 3123-1231', '(12) 3123-1231', '202cb962', '058.173.554-42', '1231231231', NULL, 'teste', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `assosiado_has_os`
--

CREATE TABLE IF NOT EXISTS `assosiado_has_os` (
  `assosiado_idassosiado` int(10) unsigned NOT NULL,
  `OS_idOS` int(10) unsigned NOT NULL,
  PRIMARY KEY (`assosiado_idassosiado`,`OS_idOS`),
  KEY `assosiado_has_OS_FKIndex1` (`assosiado_idassosiado`),
  KEY `assosiado_has_OS_FKIndex2` (`OS_idOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `endereco`, `bairro`, `numero`, `cep`, `cidade`, `estado`, `email`, `telefone`, `celular`, `senha`, `complemento`) VALUES
(1, 'eliakim ramos', 'teste', 'teste', '122', '34124-123', 'recife', 'pe', 'eliakim@eliakim.ramos.com', '(42) 3423-4234', '(12) 1231-2312', '22046667', 'casa'),
(2, 'ewrwerwe', 'asdas', 'asdasd', '23123', '23123-123', 'qweqwe', 'asdasda', 'wqeqweqw@asdasd.com.br', '(12) 3123-1231', '(21) 3123-1231', '0b49939d', 'qweqwe1'),
(3, 'Fabio Torres', 'rua jose mariano filho', 'pina', '123', '51010-660', 'recife', 'pe', 'fabiofht@hotmail.com', '(81) 3466-6615', '(81) 9873-1960', '1ae86cea', 'pe'),
(4, 'asdasd', 'asdasd', 'sadasd', '2e12e1', '12312-312', 'asdas', 'asdasd', 'sddasdasd@kasdkasd.com', '(12) 3123-1231', '(12) 3123-1231', 'c96a0979', 'asdasd'),
(5, 'Iris Maria da Silva', 'Rua José Mariano Filho', 'Pina', '196', '51010-660', 'Recife', 'PE', 'silva_irismaria@hotmail.com', '', '(81) 9874-4352', '8352d1f0', 'casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_has_comentario`
--

CREATE TABLE IF NOT EXISTS `cliente_has_comentario` (
  `cliente_idcliente` int(10) unsigned NOT NULL,
  `comentario_idcomentario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cliente_idcliente`,`comentario_idcomentario`),
  KEY `cliente_has_comentario_FKIndex1` (`cliente_idcliente`),
  KEY `cliente_has_comentario_FKIndex2` (`comentario_idcomentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comentario` text NOT NULL,
  `dtcomentario` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_2` int(11) NOT NULL COMMENT '0 publicado | 1 não publicado',
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE IF NOT EXISTS `os` (
  `idOS` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dtpedido` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dtfinalizado` date DEFAULT NULL,
  `descricao` text NOT NULL,
  `modelo` text NOT NULL,
  `dtagendamento` date DEFAULT NULL,
  `tipoequipamento` text NOT NULL,
  PRIMARY KEY (`idOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `os_has_cliente`
--

CREATE TABLE IF NOT EXISTS `os_has_cliente` (
  `OS_idOS` int(10) unsigned NOT NULL,
  `cliente_idcliente` int(10) unsigned NOT NULL,
  PRIMARY KEY (`OS_idOS`,`cliente_idcliente`),
  KEY `OS_has_cliente_FKIndex1` (`OS_idOS`),
  KEY `OS_has_cliente_FKIndex2` (`cliente_idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `assosiado_has_os`
--
ALTER TABLE `assosiado_has_os`
  ADD CONSTRAINT `assosiado_has_os_ibfk_1` FOREIGN KEY (`assosiado_idassosiado`) REFERENCES `assosiado` (`idassosiado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `assosiado_has_os_ibfk_2` FOREIGN KEY (`OS_idOS`) REFERENCES `os` (`idOS`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `cliente_has_comentario`
--
ALTER TABLE `cliente_has_comentario`
  ADD CONSTRAINT `cliente_has_comentario_ibfk_1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cliente_has_comentario_ibfk_2` FOREIGN KEY (`comentario_idcomentario`) REFERENCES `comentario` (`idcomentario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `os_has_cliente`
--
ALTER TABLE `os_has_cliente`
  ADD CONSTRAINT `os_has_cliente_ibfk_1` FOREIGN KEY (`OS_idOS`) REFERENCES `os` (`idOS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `os_has_cliente_ibfk_2` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
