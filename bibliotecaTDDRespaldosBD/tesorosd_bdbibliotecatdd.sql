-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2021 a las 14:13:38
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbibliotecatdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artayuda`
--

CREATE TABLE `artayuda` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Se guardara informacion del modulo de ayuda';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catetiquetas`
--

CREATE TABLE `catetiquetas` (
  `id` int(11) NOT NULL,
  `etiquetaDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene todas las ubicaciones del menu';

--
-- Volcado de datos para la tabla `catetiquetas`
--

INSERT INTO `catetiquetas` (`id`, `etiquetaDescripcion`) VALUES
(1, 'Lectoescritura'),
(2, 'Matemática'),
(3, 'Adecuaciones/Modificaciones'),
(4, 'Apoyo Familiar'),
(5, 'Manejo de Clases'),
(6, 'Intervención de conducta'),
(7, 'Autismo'),
(8, 'Emocional'),
(9, 'Intelectual'),
(10, 'Lenguaje/Comunicación'),
(11, 'Motor'),
(13, 'Todos'),
(14, 'Trastorno de Aprendizaje'),
(15, 'Habilidades de Auto-cuido'),
(16, 'Habilidades Cognitivas'),
(17, 'Habilidades de Comunicación'),
(18, 'Habilidades Fisicas y Sensoriales'),
(19, 'Habilidades Socio-Emocionales'),
(20, 'Historias Sociales'),
(21, 'Capacitaciones para Iglesias'),
(22, 'Predicas'),
(23, 'Recursos para Iglesias'),
(24, 'Habilidades de la vida diaria'),
(25, 'Vocacional'),
(26, 'Alimentación'),
(27, 'Audición'),
(28, 'Encuesta'),
(29, 'Lenguaje'),
(30, 'Lenguaje de Señas'),
(31, 'Los Sistemas Aumentativos y Alternativos'),
(32, 'Producción de sonidos del habla'),
(33, 'Protocolos'),
(34, 'Talleres'),
(35, 'Tartamudez'),
(36, 'Curriculo de Tesoros de Dios'),
(37, 'Guias de Evaluaciones'),
(38, 'Plan individualizado'),
(39, 'Recursos Espirituales'),
(40, 'Capacitacion de Terapia'),
(41, 'Equinoterapia'),
(42, 'Estimulación Temprana Motriz'),
(43, 'Fisioterapia'),
(44, 'Terapia Ocupacional'),
(45, 'Resources in English');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catrecursos`
--

CREATE TABLE `catrecursos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `autor` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `resumen` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para registrar los recursos';

--
-- Volcado de datos para la tabla `catrecursos`
--

INSERT INTO `catrecursos` (`id`, `nombre`, `ruta`, `titulo`, `descripcion`, `autor`, `tipo`, `resumen`) VALUES
(1, 'Acceso al Aprendizaje para TODOS los alumnos (1).pptx', 'vista/recurso/Acceso al Aprendizaje para TODOS los alumnos (1).pptx', 'Recurso de Alumnos', 'Powerpoint - Diseno Universal de Aprendizaje', 'Tesoros de Dios', 'Power Point', 'Powerpoint - Diseño Universal de Aprendizaje'),
(2, 'Acceso al Aprendizaje para TODOS W,ByA.pptx', 'vista/recurso/Acceso al Aprendizaje para TODOS W,ByA.pptx', 'Acceso al aprendizaje', 'recurso para Alumnos', 'Tesoros de Dios', 'Power Point', NULL),
(5, 'Ejemplos de objetivos modificados.docx', 'vista/recurso/Ejemplos de objetivos modificados.docx', 'Objetos Modificados', 'Recursos para maestros de preescolar', 'Tesoros de Dios', 'Word', NULL),
(6, 'Guia para Adecuaciones.docx', 'vista/recurso/Guia para Adecuaciones.docx', 'Guia para Adecuaciones', 'Recurso para maestros para planificacion', 'Tesoros de Dios', 'Word', 'Es una guia sencilla de estrategias de como hacer adecuaciones para un estudiante.'),
(7, 'Actividades de Desarrollo de Matematica.docx', 'vista/recurso/Actividades de Desarrollo de Matematica.docx', 'Actividades del Desarrollo de Matematica', 'Actividades para estudiantes', 'Tesoros de Dios', 'Word', 'Son actividades para ayudar a los estudiantes desarrollar sus habilidades en el area de Matematica.'),
(8, 'Como ensenar patrones a nivel de Preescolar.docx', 'vista/recurso/Como ensenar patrones a nivel de Preescolar.docx', 'Patrones Preescolar', 'Material para maestros', 'Tesoros de Dios', 'Word', NULL),
(9, 'El Espectro del Autismo - NICHCY.pdf', 'vista/recurso/El Espectro del Autismo - NICHCY.pdf', 'El Espectro del Autismo - NICHCY', 'Recurso Autismo', 'NICHCY', 'Pdf', NULL),
(10, 'Exp-STAFFDiapositiva de autismo.pptx', 'vista/recurso/Exp-STAFFDiapositiva de autismo.pptx', 'Exp-STAFFDiapositiva de autismo', 'Recurso Autismo', 'Tesoros de Dios', 'Power Point', NULL),
(11, 'LA FAMILIA y EL AUTISMO-DnaAngela.pptx', 'vista/recurso/LA FAMILIA y EL AUTISMO-DnaAngela.pptx', 'LA FAMILIA y EL AUTISMO', 'Recurso Autismo', 'Angela Herrera', 'Power Point', 'Este recurso trata de las principales funciones de las familias con niños con autismo. '),
(12, 'Manual 100 Dias - Autism Speaks.pdf', 'vista/recurso/Manual 100 Dias - Autism Speaks.pdf', 'Manual 100 Dias - Autism Speaks', 'Recurso Autismo', 'Autism Speaks', 'Pdf', NULL),
(13, 'TRASTORNO DEL ESPECTRO AUTISTA - Bren Dna Angela.pptx', 'vista/recurso/TRASTORNO DEL ESPECTRO AUTISTA - Bren Dna Angela.pptx', 'TRASTORNO DEL ESPECTRO AUTISTA - Bren Dña Angela', 'Recurso Autismo', 'Angela Herrera y Brenda Villalobos', 'Power Point', NULL),
(14, 'Tengo amigos en la escuela [Ana Jarquin].docx.pdf', 'vista/recurso/Tengo amigos en la escuela [Ana Jarquin].docx.pdf', 'Tengo Amigos en la Escuela', 'Historia Social', 'Ana Jarquin', 'Pdf', NULL),
(15, 'Mis lugares privados [Ana Jarquin].docx.pdf', 'vista/recurso/Mis lugares privados [Ana Jarquin].docx.pdf', 'Mis Lugares Privados', 'Historia Social', 'Ana Jarquin', 'Pdf', NULL),
(16, 'Historia Social-Levantar las manos - Dr VanTol.pdf', 'vista/recurso/Historia Social-Levantar las manos - Dr VanTol.pdf', 'Levantar las Manos', 'Historia Social', 'Dr. Kathleen VanTol', 'Pdf', NULL),
(17, 'Historia Social-Miedo a Dormir - Paul Blas.pdf', 'vista/recurso/Historia Social-Miedo a Dormir - Paul Blas.pdf', 'Miedo a Dormir', 'Historia Social', 'Paul Blas', 'Pdf', NULL),
(18, '00056_python20para20todos.pdf', 'vista/recurso/00056_python20para20todos.pdf', 'tutorial de python', 'tutorial de python para jugar', 'Allan Mendoza', 'PDF', 'Un recuros para probar si no hay problema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catroles`
--

CREATE TABLE `catroles` (
  `rolid` int(11) NOT NULL,
  `catRolesDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `catroles`
--

INSERT INTO `catroles` (`rolid`, `catRolesDescripcion`) VALUES
(1, 'Administrador'),
(2, 'Invitado'),
(3, 'Desactivado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cattipoarchivo`
--

CREATE TABLE `cattipoarchivo` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Normalizacion de tipo de archivo en cat recursos';

--
-- Volcado de datos para la tabla `cattipoarchivo`
--

INSERT INTO `cattipoarchivo` (`id`, `descripcion`) VALUES
(1, 'Word'),
(2, 'PowerPoint'),
(3, 'Excel'),
(4, 'Publisher'),
(5, 'Pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unionetiquetascatrecurso`
--

CREATE TABLE `unionetiquetascatrecurso` (
  `id` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Enlace etiqueta con el recurso para existir +1 lugar';

--
-- Volcado de datos para la tabla `unionetiquetascatrecurso`
--

INSERT INTO `unionetiquetascatrecurso` (`id`, `idRecurso`, `idEtiqueta`) VALUES
(70, 14, 13),
(72, 15, 13),
(73, 8, 2),
(75, 8, 13),
(76, 8, 13),
(77, 9, 7),
(78, 9, 13),
(79, 9, 13),
(80, 9, 13),
(81, 10, 7),
(82, 10, 13),
(83, 10, 13),
(84, 10, 13),
(85, 12, 7),
(86, 12, 13),
(87, 12, 13),
(88, 12, 13),
(89, 13, 7),
(90, 13, 13),
(91, 13, 13),
(92, 13, 13),
(93, 5, 3),
(95, 5, 13),
(96, 5, 13),
(109, 2, 13),
(111, 16, 13),
(113, 17, 13),
(121, 1, 1),
(122, 1, 3),
(123, 1, 14),
(124, 1, 13),
(125, 1, 13),
(126, 1, 13),
(127, 1, 13),
(128, 1, 13),
(133, 11, 4),
(134, 11, 7),
(135, 11, 13),
(136, 11, 13),
(137, 11, 13),
(138, 7, 2),
(139, 7, 13),
(140, 7, 13),
(141, 7, 13),
(142, 6, 3),
(143, 6, 13),
(144, 6, 13),
(145, 6, 13),
(146, 18, 1),
(147, 18, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `clave` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `rolid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='estructura de tabla de usuario';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`, `foto`, `rolid`) VALUES
(1, 'admin', 'tesoros', '', 1),
(2, 'guest', 'tesoros', '', 2),
(3, 'MAdams', '123456', 'vista/img/usuario/U33.png', 3),
(4, 'Michelle', 'tesoros', 'vista/img/usuario/U525.jpg', 1),
(5, 'Vantol', 'Tesoros', 'vista/img/usuario/U728.jpg', 2),
(6, 'AIppel', 'Tesoros', 'vista/img/usuario/U367.png', 2),
(7, 'BVillalobos', 'Tesoros', '', 2),
(8, 'ESanchez', 'Tesoros', '', 2),
(9, 'Alexandra', 'Tesoros', '', 2),
(10, 'pamador', 'tesoros', '', 2),
(11, 'Wendy', 'tesoros', '', 2),
(12, 'Ajarquin', 'Tesoros123', '', 1),
(13, 'Mrosales', 'Tesoros456', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artayuda`
--
ALTER TABLE `artayuda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catetiquetas`
--
ALTER TABLE `catetiquetas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catrecursos`
--
ALTER TABLE `catrecursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catroles`
--
ALTER TABLE `catroles`
  ADD PRIMARY KEY (`rolid`);

--
-- Indices de la tabla `cattipoarchivo`
--
ALTER TABLE `cattipoarchivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRecursoBiblioteca` (`idRecurso`),
  ADD KEY `idEtiquetaBiblioteca` (`idEtiqueta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolid` (`rolid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artayuda`
--
ALTER TABLE `artayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catetiquetas`
--
ALTER TABLE `catetiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `catrecursos`
--
ALTER TABLE `catrecursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `catroles`
--
ALTER TABLE `catroles`
  MODIFY `rolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cattipoarchivo`
--
ALTER TABLE `cattipoarchivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_1` FOREIGN KEY (`idRecurso`) REFERENCES `catrecursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unionetiquetascatrecurso_ibfk_2` FOREIGN KEY (`idEtiqueta`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `catroles` (`rolid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
