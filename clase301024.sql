-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para proyecto1
CREATE DATABASE IF NOT EXISTS `proyecto1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyecto1`;

-- Volcando estructura para tabla proyecto1.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int DEFAULT NULL,
  `usuario` varchar(16) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `ip` varchar(16) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  KEY `Índice 1` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla proyecto1.usuarios: ~4 rows (aproximadamente)
INSERT INTO `usuarios` (`idUsuario`, `usuario`, `password`, `ip`) VALUES
	(1, 'admin', '1b3231655cebb7a1f783eddf27d254ca', NULL),
	(NULL, 'demo', '202cb962ac59075b964b07152d234b70', NULL),
	(NULL, 'enero', '202cb962ac59075b964b07152d234b70', NULL),
	(NULL, 'enero', '81dc9bdb52d04dc20036dbd8313ed055', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
