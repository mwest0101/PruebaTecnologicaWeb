-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 17:36:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `dni` varchar(25) DEFAULT NULL,
  `condicion` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fechaIng` datetime NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `nombre`, `apellido`, `dni`, `condicion`, `password`, `fechaIng`, `activo`) VALUES
(1, 'admin', 'test', 'test', '111111', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 11:24:58', 0),
(2, 'joa', 'Joaquin', 'Sabina', '23008923', 'usuario', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-12-23 01:12:11', 1),
(3, 'pabs', 'Pablo', 'Sanardi', '234567675', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-12-23 00:50:09', 1),
(4, 'pepe', 'Pedro', 'Sanchez', '23023443', 'usuario', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-12-22 22:39:35', 1),
(6, 'Mart', 'Martin', 'Perez', '20123123', 'usuario', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-12 19:32:58', 1),
(9, '9', 'elMauri02', 'Pablo', '13223212', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 00:28:03', 1),
(12, 'pepe', 'pepe', '123232', '', 'Administrador', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 18:25:13', 1),
(16, '16', 'pedro22', 'west', '123321', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 18:29:24', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
