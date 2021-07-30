-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2021 a las 00:06:17
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
-- Estructura de tabla para la tabla `catrecursosvideos`
--

CREATE TABLE `catrecursosvideos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `link` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `autor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Guardar recursos audiovisual';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catrecursosvideos`
--
ALTER TABLE `catrecursosvideos`
  ADD CONSTRAINT `catrecursosvideos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `unionetiquetacatrecursovideo` (`recursovideoid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
