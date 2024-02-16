-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Fev-2024 às 20:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `impar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `Data_nasc` date NOT NULL,
  `Nome_pai` varchar(50) NOT NULL,
  `Nome_mae` varchar(50) NOT NULL,
  `Naturalidade` varchar(20) NOT NULL,
  `Província` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Distrito` varchar(20) NOT NULL,
  `Residencia_act` varchar(50) NOT NULL,
  `Sexo` varchar(20) NOT NULL,
  `Nº_BI` varchar(20) NOT NULL,
  `Data_emiss` date NOT NULL,
  `Estado_civil` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Contacto_aluno` int(11) DEFAULT NULL,
  `Contacto_enca1` int(11) NOT NULL,
  `Contacto_enca2` int(11) NOT NULL,
  `Classe` varchar(10) NOT NULL,
  `Curso` varchar(20) NOT NULL,
  `Data_ins` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `Data_nasc`, `Nome_pai`, `Nome_mae`, `Naturalidade`, `Província`, `Municipio`, `Distrito`, `Residencia_act`, `Sexo`, `Nº_BI`, `Data_emiss`, `Estado_civil`, `email`, `Contacto_aluno`, `Contacto_enca1`, `Contacto_enca2`, `Classe`, `Curso`, `Data_ins`) VALUES
(20, 'Alice adriano', '2009-12-11', ' Jadilson Canzala', ' Dionísia Margaeth', 'Luanda', 'Luanda', ' viana', ' Estalagem', '6 Cajueiros', 'Femenino', '525518887LA785', '2024-02-13', 'Solteiro(a', 'esmadr111ano2023@gmail.com', 0, 999999999, 999999999, '1', ' 12', '2024-02-16 15:34:16'),
(21, 'Emanuel Adriano', '2009-12-11', ' Jadilson Canzala', ' Dionísia Margaeth', 'Luanda', 'Luanda', ' viana', ' Estalagem', '6 Cajueiros', 'Femenino', '525518887LA785', '2024-02-14', 'Solteiro(a', 'esrmadriando2023@gmail.com', 0, 999999999, 922914482, '3', ' 17', '2024-02-16 18:59:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

CREATE TABLE `classe` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classe`
--

INSERT INTO `classe` (`id`, `nome`) VALUES
(1, '10classe'),
(2, '11Classe'),
(3, '12ªclasse'),
(4, '13ªclasse');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`) VALUES
(16, 'Análises Clínica'),
(17, 'Electricidade'),
(11, 'Enfermagem'),
(12, 'Farmáncia'),
(10, 'Informática');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`) VALUES
(15, 'FAI'),
(27, 'I.Técnico'),
(21, 'L.Portuguesa'),
(26, 'Matemática'),
(16, 'OGI'),
(18, 'PT'),
(23, 'SEAC'),
(20, 'TLP'),
(28, 'Trei');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_curso`
--

CREATE TABLE `disciplina_curso` (
  `id` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina_curso`
--

INSERT INTO `disciplina_curso` (`id`, `id_disciplina`, `id_curso`) VALUES
(1, 16, 10),
(3, 27, 10),
(7, 21, 11),
(8, 23, 10),
(9, 21, 16),
(10, 18, 11),
(11, 18, 10),
(13, 20, 10),
(14, 18, 11),
(15, 23, 10),
(16, 16, 12),
(17, 23, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_prof`
--

CREATE TABLE `disciplina_prof` (
  `id` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina_prof`
--

INSERT INTO `disciplina_prof` (`id`, `id_prof`, `id_disciplina`) VALUES
(1, 9, 15),
(2, 9, 26),
(3, 9, 27),
(4, 9, 28);

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_turma`
--

CREATE TABLE `disciplina_turma` (
  `id` int(11) NOT NULL,
  `id_disciplina` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina_turma`
--

INSERT INTO `disciplina_turma` (`id`, `id_disciplina`, `id_turma`) VALUES
(1, 15, 4),
(2, 26, 4),
(3, 27, 6),
(4, 28, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grau_prof`
--

CREATE TABLE `grau_prof` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `grau_prof`
--

INSERT INTO `grau_prof` (`id`, `nome`) VALUES
(1, 'Sénior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `data_matricula` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_turma` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `data_nasc` date NOT NULL DEFAULT current_timestamp(),
  `telefone` int(11) NOT NULL,
  `id_grau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`ID`, `Nome`, `Email`, `sexo`, `data_nasc`, `telefone`, `id_grau`) VALUES
(9, 'Francisco De Sousa', 'frac@gmail.com', 'Masculino', '2024-02-14', 923654789, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `id_curso`, `id_classe`, `id_turno`) VALUES
(1, 'F31', 11, 1, 1),
(4, 'D21 ', 11, 1, 1),
(5, 'A1 ', 11, 2, 1),
(6, 'B5 ', 12, 1, 2),
(7, 'F36', 10, 4, 1),
(10, 'A12', 16, 1, 1),
(12, 'ANgola ', 17, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `nome` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turno`
--

INSERT INTO `turno` (`id`, `nome`) VALUES
(1, 'Manhã'),
(2, 'Tarde');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `g` (`nome`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `f` (`nome`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a` (`nome`);

--
-- Índices para tabela `disciplina_curso`
--
ALTER TABLE `disciplina_curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_disciplina` (`id_disciplina`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `disciplina_prof`
--
ALTER TABLE `disciplina_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_disciplina` (`id_disciplina`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Índices para tabela `disciplina_turma`
--
ALTER TABLE `disciplina_turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_disciplina` (`id_disciplina`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Índices para tabela `grau_prof`
--
ALTER TABLE `grau_prof`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m` (`nome`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `id_grau` (`id_grau`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t` (`nome`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_classe` (`id_classe`),
  ADD KEY `id_turno` (`id_turno`);

--
-- Índices para tabela `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `d` (`nome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `disciplina_curso`
--
ALTER TABLE `disciplina_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `disciplina_prof`
--
ALTER TABLE `disciplina_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `disciplina_turma`
--
ALTER TABLE `disciplina_turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `grau_prof`
--
ALTER TABLE `grau_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `disciplina_curso`
--
ALTER TABLE `disciplina_curso`
  ADD CONSTRAINT `disciplina_curso_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `disciplina_curso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `disciplina_prof`
--
ALTER TABLE `disciplina_prof`
  ADD CONSTRAINT `disciplina_prof_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `disciplina_prof_ibfk_2` FOREIGN KEY (`id_prof`) REFERENCES `professores` (`ID`);

--
-- Limitadores para a tabela `disciplina_turma`
--
ALTER TABLE `disciplina_turma`
  ADD CONSTRAINT `disciplina_turma_ibfk_1` FOREIGN KEY (`id_disciplina`) REFERENCES `disciplina` (`id`),
  ADD CONSTRAINT `disciplina_turma_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `professores`
--
ALTER TABLE `professores`
  ADD CONSTRAINT `professores_ibfk_1` FOREIGN KEY (`id_grau`) REFERENCES `grau_prof` (`id`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id`),
  ADD CONSTRAINT `turma_ibfk_3` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
