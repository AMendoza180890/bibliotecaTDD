-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 10:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdbibliotecatdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `catetiquetas`
--

CREATE TABLE `catetiquetas` (
  `id` int(11) NOT NULL,
  `etiquetaDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene todas las ubicaciones del menu';

--
-- Dumping data for table `catetiquetas`
--

INSERT INTO `catetiquetas` (`id`, `etiquetaDescripcion`) VALUES
(1, 'Académico'),
(2, 'Autismo'),
(3, 'Conducta'),
(4, 'Curriculum Tesoros 2018'),
(5, 'Curso Dra. VanTol IOWA'),
(6, 'En Ingles'),
(7, 'Estimulacion Temprana'),
(8, 'Fisioterapia'),
(9, 'Historias Sociales'),
(10, 'Iglesias'),
(11, 'Lenguaje'),
(12, 'Plan Individualizado de Educación');

-- --------------------------------------------------------

--
-- Table structure for table `catrecursos`
--

CREATE TABLE `catrecursos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `autor` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para registrar los recursos';

--
-- Dumping data for table `catrecursos`
--

INSERT INTO `catrecursos` (`id`, `nombre`, `ruta`, `titulo`, `descripcion`, `autor`) VALUES
(1, 'Acceso al Aprendizaje para TODOS los alumnos (1).pptx', 'vista/recurso/Acceso al Aprendizaje para TODOS los alumnos (1).pptx', 'Recurso de Alumnos', 'Presentacion de powerpoint, recurso para alumnos', 'Michelle'),
(2, 'Acceso al Aprendizaje para TODOS W,ByA.pptx', 'vista/recurso/Acceso al Aprendizaje para TODOS W,ByA.pptx', 'Acceso al aprendizaje', 'recurso para Alumnos', 'Michelle'),
(3, 'Actividades de Desarrollo de Matemática.docx', 'vista/recurso/Actividades de Desarrollo de Matemática.docx', 'Actividades Matematica', 'Recurso para Alumnos', 'Michelle'),
(4, 'Como enseñar patrones a nivel de Preescolar.docx', 'vista/recurso/Como enseñar patrones a nivel de Preescolar.docx', 'Patrones a nivel de preescolar', 'Recurso para maestros de preescolar', 'Michelle'),
(5, 'Ejemplos de objetivos modificados.docx', 'vista/recurso/Ejemplos de objetivos modificados.docx', 'Objetos Modificados', 'Recursos para maestros de preescolar', 'Michelle'),
(6, 'Guia para Adecuaciones.docx', 'vista/recurso/Guia para Adecuaciones.docx', 'Guia para Adecuaciones', 'Recurso para maestros para planificacion', 'Michelle');

-- --------------------------------------------------------

--
-- Table structure for table `catroles`
--

CREATE TABLE `catroles` (
  `rolid` int(11) NOT NULL,
  `catRolesDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `catroles`
--

INSERT INTO `catroles` (`rolid`, `catRolesDescripcion`) VALUES
(1, 'Administrador'),
(2, 'Invitado'),
(3, 'Desactivado');

-- --------------------------------------------------------

--
-- Table structure for table `unionetiquetascatrecurso`
--

CREATE TABLE `unionetiquetascatrecurso` (
  `id` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Enlace etiqueta con el recurso para existir +1 lugar';

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `rolid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='estructura de tabla de usuario';

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `rolid`) VALUES
(1, 'admin', 'tesoros', '', 1),
(2, 'guess', 'tesoros', '', 3),
(3, 'MAdams', '123456', 'vista/img/usuario/U33.png', 2),
(4, 'Michelle', 'tesoros', 'vista/img/usuario/U525.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catetiquetas`
--
ALTER TABLE `catetiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catrecursos`
--
ALTER TABLE `catrecursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catroles`
--
ALTER TABLE `catroles`
  ADD PRIMARY KEY (`rolid`);

--
-- Indexes for table `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRecursoBiblioteca` (`idRecurso`),
  ADD KEY `idEtiquetaBiblioteca` (`idEtiqueta`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolid` (`rolid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catetiquetas`
--
ALTER TABLE `catetiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `catrecursos`
--
ALTER TABLE `catrecursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catroles`
--
ALTER TABLE `catroles`
  MODIFY `rolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_1` FOREIGN KEY (`idRecurso`) REFERENCES `catrecursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_2` FOREIGN KEY (`idEtiqueta`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `catroles` (`rolid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
