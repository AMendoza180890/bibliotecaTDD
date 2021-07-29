-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2021 a las 00:05:59
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
-- Estructura de tabla para la tabla `unionetiquetacatrecursovideo`
--

CREATE TABLE `unionetiquetacatrecursovideo` (
  `id` int(11) NOT NULL,
  `recursovideoid` int(11) NOT NULL,
  `etiquetaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='union Recursos Videos y etiquetas';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recursovideoid` (`recursovideoid`),
  ADD KEY `etiquetaid` (`etiquetaid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `unionetiquetacatrecursovideo`
--
ALTER TABLE `unionetiquetacatrecursovideo`
  ADD CONSTRAINT `unionetiquetacatrecursovideo_ibfk_1` FOREIGN KEY (`etiquetaid`) REFERENCES `catetiquetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
