-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2024 a las 01:15:39
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
CREATE DATABASE IF NOT EXISTS `sistemax` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistemax`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `dni` varchar(25) DEFAULT NULL,
  `condicion` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fechaIng` datetime NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `nombre`, `apellido`, `email`, `dni`, `condicion`, `password`, `fechaIng`, `activo`) VALUES
(1, 'Joaquin', 'test777', 'test', 'test5@gmail.com', '111111', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 11:24:58', 1),
(4, 'pepe', 'Pedro', 'Sanchez', 'test@gmail.com', '23023443', 'usuario', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-12-22 22:39:35', 1),
(9, 'elMauri02', 'elMauri02', 'Pablo', 'test@gmail.com', '13223212', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 00:28:03', 1),
(12, 'pepe', 'pepe', '123232', 'test@gmail.com', '23008923', 'Administrador', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 18:25:13', 1),
(30, 'admin', 'admin', 'west', 'test@gmail.com', '2622223', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 12:44:05', 1),
(31, 'test6', 'test6n', 'test6a', 'mauriciowest@gmail.com', '27852334', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:43:55', 1),
(32, 'test7', 'test7n', 'test7a', 'test@test.com', '123678', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:44:29', 1),
(34, 'test1', 'test1n', 'test1a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:48:04', 1),
(36, 'test2', 'test2n', 'test2a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:50:45', 1),
(37, 'test3', 'test3n', 'test3a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:51:04', 1),
(39, 'test4', 'test4n', 'test4a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:51:48', 1);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
