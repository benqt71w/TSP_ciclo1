-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2015 a las 05:05:50
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videojuegos`
--
CREATE DATABASE IF NOT EXISTS `videojuegos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `videojuegos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
`id_categoria` int(20) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'ACCION'),
(2, 'ARMAS'),
(3, 'FUTBOL'),
(4, 'AVENTURA'),
(5, 'CIENCIA FICCION'),
(6, 'PELEA'),
(7, 'FANTASIA'),
(8, 'MAFIA'),
(9, 'CARRERA'),
(10, 'GUERRA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` bigint(20) NOT NULL,
  `nombre` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Correo` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula`, `nombre`, `telefono`, `password`, `imagen`, `Correo`) VALUES
(123, 'sebastian mejia', 123, '123', 'galaxy_universe-normal.jpg', 'sebastianmejia'),
(40390667, 'amanda', 385141525, 'yerson', '', ''),
(90909090, 'Andres Felipe', 9090, 'pipe', '', ''),
(1234560987, 'golosa24', 556556, '0000', '', ''),
(987654321987654321, 'Ottorinolaringologo', 12312312345, 'yerferfull', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
`id_prestamo` bigint(20) unsigned NOT NULL,
  `id_videojuego` int(11) NOT NULL,
  `id_cliente` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `id_videojuego`, `id_cliente`) VALUES
(1, 1, 987654321987654321),
(4, 1, 987654321987654321),
(5, 1, 987654321987654321),
(3, 2, 90909090),
(6, 2, 987654321987654321),
(15, 3, 1234560987),
(13, 6, 40390667),
(7, 13, 40390667),
(8, 13, 40390667),
(9, 13, 40390667),
(10, 13, 40390667),
(11, 13, 40390667),
(14, 13, 40390667),
(16, 14, 1234560987),
(2, 16, 987654321987654321),
(12, 16, 40390667);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videogame`
--

DROP TABLE IF EXISTS `videogame`;
CREATE TABLE IF NOT EXISTS `videogame` (
  `id_vj` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `precio_dia` float NOT NULL,
  `consola` text NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` text NOT NULL,
  `video` text NOT NULL,
  `id_categoria` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videogame`
--

INSERT INTO `videogame` (`id_vj`, `nombre`, `descripcion`, `precio_dia`, `consola`, `stock`, `imagen`, `video`, `id_categoria`) VALUES
(1, 'Batman', 'Videojuego de accion', 6000, 'PS4', 17, 'Covers\\\\batman_ps4.jpg', 'L63rDlpJ3_o', 1),
(2, 'Crysis', 'videojuego de ciencia ficcion', 4000, 'PC', 18, 'Covers\\\\crysis_pc.jpg', 'IFz2evkDvxk', 2),
(3, 'Assassins Creed 2', 'videojuego de ciencia ficcion', 7500, 'X-BOX_360', 19, 'Covers\\\\assassinscreed2_360.jpg', 'LGC88YwrfkM', 1),
(4, 'Call of Duty: Black Ops 2', 'Video juego de guerra', 6500, 'X-Box_360', 20, 'Covers\\\\callofdutybo2_360.jpg', 'kqOjoYRgnHs', 10),
(5, 'DBZ: Kinnect', 'Video juego de pelea', 10000, 'X-Box_360', 20, 'Covers\\\\dbzkinnect_360.jpg', 'b-bmimZ-0ss', 6),
(6, 'Fallout 3', 'Video juego de ciencia ficcion', 8000, 'PC', 19, 'Covers\\\\fallout3_pc.jpg', 'FUhCzMZO1Vk', 2),
(7, 'FIFA 15', 'Video juego de futbol soccer', 10000, 'PS4', 20, 'Covers\\\\fifa15_ps4.jpg', 'atKOMiyUQ4g', 3),
(8, 'Final Fantasy XIII', 'Video Juego de Fantasia y aventura', 12000, 'X-Box_360', 20, 'Covers\\\\finalfantasy13_360.jpg', 'iponuRPeEgs', 4),
(9, 'GTA: 4', 'Video Juego de misiones y mafias', 4000, 'PC', 20, 'Covers\\\\gta4_pc.jpg', '4FzvBhslH7w', 8),
(10, 'Halo 4', 'Video Juego shooter', 8000, 'X-Box_360', 20, 'Covers\\\\halo4_360.jpg', 'Jn_UaWmOoyE', 2),
(11, 'Mario Galaxy II', 'Video Juego de aventura', 7000, 'WII', 20, 'Covers\\\\mariogalaxy2_wii.jpg', '-WY-WzXuylc', 4),
(12, 'Mario Kart', 'Video Juego de misiones y carreras', 8600, 'WII', 20, 'Covers\\\\mariokart_wii.jpg', 'nWybPOrwzdY', 9),
(13, 'NFS: Rivals', 'Video Juego carreras', 12000, 'PS4', 14, 'Covers\\\\needforspeedrivals_ps4.jpg', 'NoTu4Zx3Lhg', 9),
(14, 'Call of Duty: Ghosts', 'Video Juego de guerra', 11000, 'PS4', 19, 'Covers\\\\callofdutyghost_ps4.png', 'FAcvGByZNHs', 10),
(15, 'El Chavo', 'Video Juego de misiones y aventuras', 6000, 'WII', 20, 'Covers\\\\elchavo_wii.png', 'mduzkFawrdI', 4),
(16, 'God of War 2', 'Video Juego misiones y combates', 7000, 'PC', 18, 'Covers\\\\godofwar2_pc.png', 'exzXh-RRheU', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id_categoria`), ADD UNIQUE KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`cedula`), ADD FULLTEXT KEY `password` (`password`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
 ADD PRIMARY KEY (`id_prestamo`,`id_videojuego`,`id_cliente`), ADD UNIQUE KEY `id_prestamo` (`id_prestamo`), ADD KEY `id_videojuego` (`id_videojuego`), ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `videogame`
--
ALTER TABLE `videogame`
 ADD PRIMARY KEY (`id_vj`), ADD KEY `id_categoria` (`id_categoria`), ADD KEY `id_categoria_2` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `id_categoria` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
MODIFY `id_prestamo` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_videojuego`) REFERENCES `videogame` (`id_vj`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `videogame`
--
ALTER TABLE `videogame`
ADD CONSTRAINT `videogame_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
