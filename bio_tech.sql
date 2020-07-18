-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2020 a las 18:35:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bio_tech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_log`
--

CREATE TABLE `bio_log` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bio_log`
--

INSERT INTO `bio_log` (`id`, `correo`, `contraseña`, `nombre`, `usuario`) VALUES
(1, 'Fake1@falso.com', '123', 'Fake1', 'F1'),
(2, 'Fake2@falso.com', '123', 'Fake2', 'F2'),
(3, 'Prueba01@ayuda.com', '202cb962ac59075b964b07152d234b70', 'Prueba01', 'P1'),
(4, 'mateo@mateo.com', '4297f44b13955235245b2497399d7a93', 'Mateo', 'M'),
(5, 'Prueba02@ayuda.com', '202cb962ac59075b964b07152d234b70', 'Prueba02', 'P2'),
(6, 'Prueba03@ayuda.com', '202cb962ac59075b964b07152d234b70', 'Prueba03', 'P3'),
(7, 'dani@dani.com', '4297f44b13955235245b2497399d7a93', 'Dani', 'AZ'),
(8, 'sebitas@ayuda.com', '5b4c6f05e39f90fcebd51be99338c42e', 'Sebitas', 'Shiba'),
(9, 'udenae@udenar.com', '4297f44b13955235245b2497399d7a93', 'Franklin', 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_plant`
--

CREATE TABLE `bio_plant` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `especie` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `familia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `habitat` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `parte` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bio_plant`
--

INSERT INTO `bio_plant` (`id`, `nombre`, `especie`, `genero`, `familia`, `fecha`, `habitat`, `parte`, `foto`, `usuario`) VALUES
(1, 'Helecho', 'Athyrium filix-femina', 'Pteridium', 'Pteridium aquilinum', '2020-07-09', 'Bosque tropical', 'Hojas', '../img/plantasup/helecho.jpg', 'M'),
(2, 'Hiedra', 'Hiedra común', 'Hedera', 'Araliaceae', '2020-07-09', 'bosque húmedo', 'hojas', '../img/trash/plantasup/hiedra.jpg', 'M'),
(3, 'Carica', 'Carica', 'Carica', 'Caricaceae', '2020-07-09', 'Ambiente tropical', 'fruto', '../img/trash/plantasup/papaya.jpg', 'M'),
(4, 'Roble Chileno', 'N. obliqua', 'Nothofagus', 'Nothofagaceae', '2020-07-09', 'bosque tropical', 'hojas', '../img/trash/plantasup/roble.jpg', 'M'),
(5, 'Manzano', 'Malus domestica', 'Malus', 'Rosaceae', '2020-07-09', 'Silvestre Asia Occidental', 'Planta adulta', '../img/trash/plantasup/manzano.jpg', 'M'),
(6, 'Menta', 'Mentha arvensis', 'Mentha', 'Lamiaceae', '2020-07-09', 'Huerto', 'Tallo', '../img/trash/plantasup/menta.jpg', 'M'),
(18, 'Helecho', 'Nephrolepis exaltata', 'Nephrolepis', 'Lomariopsidaceae', '2020-07-18', 'Pantano', 'Completa', '../img/plantasup/pic18155013.jpg', 'M'),
(19, 'Helecho', 'Asplenium nidus', 'Asplenium ', 'Aspleniaceae', '2020-07-18', 'Región polar', 'Fruto', '../img/plantasup/pic18175707.jpg', 'F');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bio_log`
--
ALTER TABLE `bio_log`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `bio_plant`
--
ALTER TABLE `bio_plant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bio_log`
--
ALTER TABLE `bio_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `bio_plant`
--
ALTER TABLE `bio_plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
