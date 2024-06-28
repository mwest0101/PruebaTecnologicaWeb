-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para sistemax
CREATE DATABASE IF NOT EXISTS `sistemax` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `sistemax`;

-- Volcando estructura para tabla sistemax.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `dni` varchar(25) DEFAULT NULL,
  `condicion` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fechaIng` datetime NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla sistemax.users: ~19 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `usuario`, `nombre`, `apellido`, `email`, `dni`, `condicion`, `password`, `fechaIng`, `activo`) VALUES
	(1, 'admin', 'admin', 'test', 'test5@gmail.com', '111111', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 11:24:58', 1),
	(4, 'pepe', 'Pedro', 'Sanchez', 'test@gmail.com', '230234434', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-12-22 22:39:35', 1),
	(9, 'elMauri02', 'elMauri02', 'Pablo', 'test@gmail.com', '13223212', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 00:28:03', 1),
	(12, 'pepe6', 'pepe6', 'zanchez6', 'test2@gmail.com', '11111111111', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-05-26 18:25:13', 1),
	(30, 'admin', 'admin4', 'west4', 'test@gmail.com', '26222232', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 12:44:05', 1),
	(31, 'test6', 'test6n', 'test6a', 'mauriciowest@gmail.com', '27852334', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:43:55', 1),
	(32, 'test7', 'test7n', 'test7a', 'test@test.com', '123678', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:44:29', 1),
	(34, 'test1', 'test1n', 'test1a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:48:04', 1),
	(36, 'test2', 'test2n', 'test2a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:50:45', 1),
	(37, 'test3333', 'test33333', 'test33333', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:51:04', 1),
	(39, 'test4', 'test4n', 'test4a', 'test1@gmail.com', '123564', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 19:51:48', 1),
	(40, 'testprueba', 'testprueban', 'testpruebaa', 'testprueba@gmail.com', '555555557', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 22:14:58', 1),
	(41, 'testprueba', 'testprueban', 'testpruebaa', 'testprueba@gmail.com', '555555557', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 22:16:16', 1),
	(42, 'testprueba', 'testprueban', 'testpruebaa', 'testprueba@gmail.com', '555555557', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 22:16:27', 1),
	(43, 'testprueba', 'testprueban', 'testpruebaa', 'testprueba@gmail.com', '555555557', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 22:16:33', 1),
	(44, 'ttt2', 'ttt2', 'ttt2', 'ttt@gmail.com', '23', 'user', 'f989cad3687aef9cf1088d926968d7f823364d97', '2024-06-27 22:18:28', 1),
	(45, 'ttt2', 'ttt2', 'ttt2', 'ttt@gmail.com', '23', 'user', 'f989cad3687aef9cf1088d926968d7f823364d97', '2024-06-27 22:18:32', 1),
	(46, 'tttt8', 'tttt8', 'tttt8', 'asd@aasd.com', '12312365', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 22:54:05', 1),
	(47, '11111', '111111', 'asdasd', 'asd@asd.com', '123123213', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-06-27 22:54:43', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
