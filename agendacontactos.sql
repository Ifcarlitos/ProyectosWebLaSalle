-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2021 a las 02:09:57
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendacontactos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoagenda`
--

CREATE TABLE `contactoagenda` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactoagenda`
--

INSERT INTO `contactoagenda` (`id`, `nombre`, `apellidos`, `telefono`, `email`, `comentario`) VALUES
(1, 'Carlos', 'romero matarin', 654824987, 'cromeromatarin@gmail.com', ''),
(2, 'Carlos', 'romero matarin', 654824987, 'cromeromatarin@gmail.com', ''),
(3, 'pepe', 'matarin', 603226936, 'pepe@pepe.com', 'pepe es pepe'),
(4, 'maria', 'comba', 639254789, 'maria@mari.com', 'maria es maria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactoagenda`
--
ALTER TABLE `contactoagenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactoagenda`
--
ALTER TABLE `contactoagenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
