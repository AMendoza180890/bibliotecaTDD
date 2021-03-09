-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2021 a las 03:24:46
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
(1, 'Ninguno'),
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
(12, 'Plan Individualizado de Educación'),
(13, 'Academico'),
(14, 'Todos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catrecursos`
--

CREATE TABLE `catrecursos` (
  `id` int(11) NOT NULL,
  `ruta` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `autor` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para registrar los recursos';

--
-- Volcado de datos para la tabla `catrecursos`
--

INSERT INTO `catrecursos` (`id`, `ruta`, `titulo`, `descripcion`, `autor`) VALUES
(1, 'vista/recurso/505 Heredado.pdf', '505Technology', 'ejemplo', 'Equipo Web-Nica');

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
-- Estructura de tabla para la tabla `unionetiquetascatrecurso`
--

CREATE TABLE `unionetiquetascatrecurso` (
  `id` int(11) NOT NULL,
  `idRecurso` int(11) NOT NULL,
  `idEtiqueta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Enlace etiqueta con el recurso para existir +1 lugar';

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
(2, 'guess', 'tesoros', '', 2),
(3, 'Michelle', 'tesoros', 'vista/img/usuario/U732.jpg', 1);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRecurso` (`idRecurso`,`idEtiqueta`),
  ADD KEY `idEtiqueta` (`idEtiqueta`);

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
-- AUTO_INCREMENT de la tabla `catetiquetas`
--
ALTER TABLE `catetiquetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `catrecursos`
--
ALTER TABLE `catrecursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `catroles`
--
ALTER TABLE `catroles`
  MODIFY `rolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unionetiquetascatrecurso`
--
ALTER TABLE `unionetiquetascatrecurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
