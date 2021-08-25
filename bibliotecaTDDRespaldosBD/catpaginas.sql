-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 07:51 PM
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
-- Table structure for table `catpaginas`
--

CREATE TABLE `catpaginas` (
  `id` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL,
  `nombrePagina` text NOT NULL,
  `paginaTitulo` text NOT NULL,
  `paginaSubtitulo` text NOT NULL,
  `nombrePaginaTipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Catalogo para crear una pagina';

--
-- Dumping data for table `catpaginas`
--

INSERT INTO `catpaginas` (`id`, `idEtiqueta`, `nombrePagina`, `paginaTitulo`, `paginaSubtitulo`, `nombrePaginaTipo`) VALUES
(1, 0, 'login', '', '', 'login'),
(2, 13, 'buscar', 'Todos los recursos', ' Buscar', 'plantillaPagina'),
(3, 0, 'academico', '', '', 'academico'),
(4, 0, 'home', '', '', 'home'),
(5, 0, 'salir', '', '', 'salir'),
(6, 7, 'autismo', 'Recurso Sobre discapacidades', 'Autismo', 'plantillaPagina'),
(7, 0, 'conducta', '', '', 'conducta'),
(8, 0, 'curriculum', '', '', 'curriculum'),
(9, 0, 'curso', '', '', 'curso'),
(10, 0, 'estimulacion', '', '', 'estimulacion'),
(11, 43, 'fisioterapia', 'Recursos de Terapia', 'Fisioterapia', 'plantillaPagina'),
(12, 20, 'historia', 'Recurso de Historias Sociales', 'Historias Sociales', 'plantillaPagina'),
(13, 0, 'iglesias', '', '', 'iglesias'),
(14, 45, 'ingles', 'Recurso Ingles', 'Todos los recursos en Ingles', 'plantillaPagina'),
(15, 10, 'lenguaje', 'Recurso Sobre discapacidades', 'Trastorno de Lenguaje/Comunicación', 'lenguaje'),
(16, 0, 'piedu', '', '', 'piedu'),
(17, 1, 'catlectura', 'Recursos Académicos', 'Lectoescritura', 'plantillaPagina'),
(18, 0, 'discapacidades', '', '', 'discapacidades'),
(19, 39, 'espiritual', 'Recurso Espiritual', 'Todos los recursos Espiritual', 'plantillaPagina'),
(20, 0, 'habilidad', '', '', 'habilidad'),
(21, 4, 'apoyoFamiliar', 'Recurso de Apoyo Familiar', 'Apoyo Familiar', 'plantillaPagina'),
(22, 2, 'catmat', 'Recursos Académicos', 'Matematica', 'plantillaPagina'),
(23, 3, 'catadecuaciones', 'Recursos Académicos', 'Adecuaciones/Modificaciones', 'plantillaPagina'),
(24, 14, 'aprendizaje', 'Recurso Sobre discapacidades', 'Trastorno Del Aprendizaje', 'plantillaPagina'),
(25, 11, 'motor', 'Recurso Sobre discapacidades', 'Discapacidad Motor', 'plantillaPagina'),
(26, 9, 'intelectual', 'Recurso Sobre discapacidades', 'Discapacidad Intelectual', 'plantillaPagina'),
(27, 8, 'emocional', 'Recurso Sobre discapacidades', 'Trastorno Emocional', 'plantillaPagina'),
(28, 0, 'independencia', '', '', 'plantillaPagina'),
(29, 25, 'vocacional', 'Recursos de Independencia', 'Vocacional', 'plantillaPagina'),
(30, 24, 'habilidadesVidaDiaria', 'Recursos de Independencia', 'Habilidades de la Vida Diaria', 'plantillaPagina'),
(31, 5, 'manejoClases', 'Recursos de Conducta', 'Manejo de Clase', 'plantillaPagina'),
(32, 6, 'intervencionConducta', 'Recursos de Conducta', 'Intervención de Conducta', 'plantillaPagina'),
(33, 15, 'autoCuido', 'Recursos de Estimulación Temprana', 'Habilidades de Auto-Cuido', 'plantillaPagina'),
(34, 16, 'Cognitiva', 'Recursos de Estimulación Temprana', 'Habilidades Cognitivas', 'plantillaPagina'),
(35, 17, 'Comunicacion', 'Recursos de Estimulación Temprana', 'Habilidades de Comunicación', 'plantillaPagina'),
(36, 18, 'FisicoSensorial', 'Recursos de Estimulación Temprana', 'Habilidades Fisicas y Sensoriales', 'plantillaPagina'),
(37, 19, 'SocioEmocional', 'Recursos de Estimulación Temprana', 'Habilidades Socio-Emocionales', 'plantillaPagina'),
(38, 21, 'capacitacionesIglesias', 'Recursos de Iglesias', 'Capacitaciones de Iglesias', 'plantillaPagina'),
(39, 22, 'predicas', 'Recursos para las Iglesias', 'Predicas', 'plantillaPagina'),
(40, 23, 'recursosIglesias', 'Recursos para las Iglesias', 'Recursos Adicionales para las Iglesias', 'plantillaPagina'),
(41, 26, 'alimentacion', 'Recursos de Logopedia', 'Alimentación', 'plantillaPagina'),
(42, 27, 'audicion', 'Recursos de Logopedia', 'Audición', 'plantillaPagina'),
(43, 28, 'encuesta', 'Recursos de Logopedia', 'Encuesta', 'plantillaPagina'),
(44, 29, 'lengua', 'Recursos de Logopedia', 'Lenguaje', 'plantillaPagina'),
(45, 30, 'lenguajeSenas', 'Recursos de Logopedia', 'Lenguaje de Señas', 'plantillaPagina'),
(46, 31, 'sistemasAumentativoAlternativos', 'Recursos de Logopedia', 'Sistemas Aumetativos & Alternativos', 'plantillaPagina'),
(47, 0, 'sonidosHabla', '', '', 'plantillaPagina'),
(48, 33, 'protocolos', 'Recursos de Logopedia', 'Protocolos', 'plantillaPagina'),
(49, 34, 'talleres', 'Recursos de Logopedia', 'Talleres', 'plantillaPagina'),
(50, 35, 'tartamudez', 'Recursos de Logopedia', 'Tartamudez', 'plantillaPagina'),
(51, 0, 'logopedia', '', '', 'plantillaPagina'),
(52, 36, 'curriculoTdd', 'Recursos de Planes Individualizados', 'Curriculo de Tesoros de Dios', 'plantillaPagina'),
(53, 37, 'evalua', 'Recursos de Planes Individualizados', 'Guias de Evaluaciones', 'plantillaPagina'),
(54, 38, 'individual', 'Recursos de Planes Individualizados', 'Plan Individualizado', 'plantillaPagina'),
(55, 0, 'terapia', '', '', 'plantillaPagina'),
(56, 40, 'capacitacionesTerapia', 'Recursos de Terapia', 'Capacitaciones de Terapia', 'plantillaPagina'),
(57, 41, 'equinoterapia', 'Recursos de Terapia', 'Equinoterapia', 'plantillaPagina'),
(58, 44, 'terapiaOcupacional', 'Recursos de Terapia', 'Terapia Ocupacional', 'plantillaPagina'),
(59, 49, 'articulacion', 'Recursos Logopedia', 'Articulación', 'plantillaPagina'),
(60, 48, 'apraxia', 'Recursos Logopedia', 'Apraxia', 'plantillaPagina'),
(61, 50, 'fonologico', 'Recursos Logopedia', 'Fonológico', 'plantillaPagina'),
(62, 51, 'particulacion', 'Recursos Logopedia', 'Practica de Articulación', 'plantillaPagina'),
(63, 52, 'velofaringea', 'Recursos Logopedia', 'Velofaringea', 'plantillaPagina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catpaginas`
--
ALTER TABLE `catpaginas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catpaginas`
--
ALTER TABLE `catpaginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
