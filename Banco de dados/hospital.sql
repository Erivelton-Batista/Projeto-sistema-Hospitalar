-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Mar-2021 às 22:48
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hospital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `data_nascimento` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `telefone_2` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tipo_sanguineo` varchar(3) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(40) NOT NULL,
  `Bairro` varchar(40) NOT NULL,
  `sus` varchar(40) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `usuario_fk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`nome`, `cpf`, `rg`, `data_nascimento`, `telefone`, `telefone_2`, `email`, `tipo_sanguineo`, `cidade`, `estado`, `rua`, `numero`, `complemento`, `Bairro`, `sus`, `sexo`, `usuario_fk`) VALUES
('erivelton', '12345', '54321', '1244556', '12345', '23213', 'erivelton@gmail.com', 'A+', 'fsdfsdfs', 'PE', 'rua de cima', 424, '323gtsfdfere', 'wefwfdsf', '45677890', 'on', 'admin@gmail.com'),
('julio rego da silva', '2213', '12331', '2133123', '21313', '312313', 'julio@gmail.com', 'A-', 'dadsd', 'PE', 'Rua Agamenon Magalhaes', 3231, 'dasdad', 'dasda', '23213123', 'on', 'admin@gmail.com'),
('Freitas Lira da Silma Morin', '234.566.778-89', '1234642187', '33/33/3322', '(23)01237-2139', '(23)12312-1312', 'freitas@gmail.com', 'AB+', 'xexeu', 'PE', 'freitas de lira', 34, 'ao lado do mercado', 'centro', '231 2312 3123 1231', 'on', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`) VALUES
('admin@gmail.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `usuario_fk` (`usuario_fk`) USING BTREE;

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
