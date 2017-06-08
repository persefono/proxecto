-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2017 a las 09:53:45
-- Versión del servidor: 5.7.18-log
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `daw2017_10`
--
CREATE DATABASE IF NOT EXISTS `daw2017_10` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `daw2017_10`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoes`
--

CREATE TABLE `catalogoes` (
  `idCatalogo` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalogoes`
--

INSERT INTO `catalogoes` (`idCatalogo`, `nombre`) VALUES
(1, 'Suelos'),
(2, 'Puertas'),
(3, 'Armarios'),
(4, 'Muebles de cocina'),
(5, 'Escaleras'),
(6, 'Falsos techos'),
(7, 'Pasamanos'),
(8, 'Frisos'),
(9, 'Ventanas'),
(10, 'Estructuras'),
(11, 'Armazones de tejados'),
(12, 'Casas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogogal`
--

CREATE TABLE `catalogogal` (
  `idCatalogo` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catalogogal`
--

INSERT INTO `catalogogal` (`idCatalogo`, `nombre`) VALUES
(1, 'Chans'),
(2, 'Portas'),
(3, 'Armarios'),
(4, 'Mobles de cociña'),
(5, 'Escaleiras'),
(6, 'Falsos teitos'),
(7, 'Pasamáns'),
(8, 'Frisos'),
(9, 'Ventás'),
(10, 'Estruturas'),
(11, 'Armazóns de tellados'),
(12, 'Casas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maderases`
--

CREATE TABLE `maderases` (
  `idMadera` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maderases`
--

INSERT INTO `maderases` (`idMadera`, `nombre`) VALUES
(1, 'Pináceas'),
(2, 'Roble'),
(3, 'Castaño'),
(4, 'Fresno'),
(5, 'Cedro'),
(6, 'Tropicales'),
(7, 'Eucalipto'),
(8, 'Aglomerado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maderasgal`
--

CREATE TABLE `maderasgal` (
  `idMadera` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maderasgal`
--

INSERT INTO `maderasgal` (`idMadera`, `nombre`) VALUES
(1, 'Pináceas'),
(2, 'Carballo'),
(3, 'Castiñeiro'),
(4, 'Freixo'),
(5, 'Cedro'),
(6, 'Tropicais'),
(7, 'Eucalipto'),
(8, 'Aglomerado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcatalogoes`
--

CREATE TABLE `subcatalogoes` (
  `idSub` int(10) UNSIGNED NOT NULL,
  `idCatalogo` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcatalogoes`
--

INSERT INTO `subcatalogoes` (`idSub`, `idCatalogo`, `nombre`) VALUES
(1, 1, 'Tarima flotante'),
(2, 1, 'Tarima clavada'),
(3, 1, 'Tarima pegada'),
(4, 2, 'Exteriores'),
(5, 2, 'Interiores en batiente'),
(6, 2, 'Interiores correderas'),
(7, 5, 'De caracol'),
(8, 5, 'Compensadas'),
(9, 10, 'Porches'),
(10, 10, 'Cenadores'),
(11, 10, 'Cobertizos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcatalogogal`
--

CREATE TABLE `subcatalogogal` (
  `idSub` int(10) UNSIGNED NOT NULL,
  `idCatalogo` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcatalogogal`
--

INSERT INTO `subcatalogogal` (`idSub`, `idCatalogo`, `nombre`) VALUES
(1, 1, 'Tarima flotante'),
(2, 1, 'Tarima cravada'),
(3, 1, 'Tarima pegada'),
(4, 2, 'Exteriores'),
(5, 2, 'Interiores en batente'),
(6, 2, 'Interiores corredeiras'),
(7, 5, 'De caracol'),
(8, 5, 'Compensadas'),
(9, 10, 'Porches'),
(10, 10, 'Ceadores'),
(11, 10, 'Alpendres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmaderases`
--

CREATE TABLE `tmaderases` (
  `idTipo` int(10) UNSIGNED NOT NULL,
  `idMadera` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tmaderases`
--

INSERT INTO `tmaderases` (`idTipo`, `idMadera`, `nombre`) VALUES
(1, 1, 'Pino'),
(2, 1, 'Abeto'),
(3, 1, 'Abedul'),
(4, 2, 'Americano'),
(5, 2, 'Francés'),
(6, 6, 'Ukola'),
(7, 6, 'Jatoba'),
(8, 6, 'Elondo'),
(9, 6, 'Iroko'),
(10, 6, 'Sucupira'),
(11, 6, 'Teca'),
(12, 8, 'De fibras orientadas'),
(13, 8, 'Decorativo'),
(14, 8, 'De tres capas'),
(15, 8, 'De una capa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmaderasgal`
--

CREATE TABLE `tmaderasgal` (
  `idTipo` int(10) UNSIGNED NOT NULL,
  `idMadera` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tmaderasgal`
--

INSERT INTO `tmaderasgal` (`idTipo`, `idMadera`, `nombre`) VALUES
(1, 1, 'Piñeiro'),
(2, 1, 'Abeto'),
(3, 1, 'Bidueiro'),
(4, 2, 'Americano'),
(5, 2, 'Francés'),
(6, 6, 'Ukola'),
(7, 6, 'Jatoba'),
(8, 6, 'Elondo'),
(9, 6, 'Iroko'),
(10, 6, 'Sucupira'),
(11, 6, 'Teca'),
(12, 8, 'De fibras orientadas'),
(13, 8, 'Decorativo'),
(14, 8, 'De tres capas'),
(15, 8, 'De unha capa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogoes`
--
ALTER TABLE `catalogoes`
  ADD PRIMARY KEY (`idCatalogo`);

--
-- Indices de la tabla `catalogogal`
--
ALTER TABLE `catalogogal`
  ADD PRIMARY KEY (`idCatalogo`);

--
-- Indices de la tabla `maderases`
--
ALTER TABLE `maderases`
  ADD PRIMARY KEY (`idMadera`);

--
-- Indices de la tabla `maderasgal`
--
ALTER TABLE `maderasgal`
  ADD PRIMARY KEY (`idMadera`);

--
-- Indices de la tabla `subcatalogoes`
--
ALTER TABLE `subcatalogoes`
  ADD PRIMARY KEY (`idSub`,`idCatalogo`),
  ADD KEY `idCatalogo` (`idCatalogo`);

--
-- Indices de la tabla `subcatalogogal`
--
ALTER TABLE `subcatalogogal`
  ADD PRIMARY KEY (`idSub`,`idCatalogo`),
  ADD KEY `idCatalogo` (`idCatalogo`);

--
-- Indices de la tabla `tmaderases`
--
ALTER TABLE `tmaderases`
  ADD PRIMARY KEY (`idTipo`,`idMadera`),
  ADD KEY `idMadera` (`idMadera`);

--
-- Indices de la tabla `tmaderasgal`
--
ALTER TABLE `tmaderasgal`
  ADD PRIMARY KEY (`idTipo`,`idMadera`),
  ADD KEY `idMadera` (`idMadera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogoes`
--
ALTER TABLE `catalogoes`
  MODIFY `idCatalogo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `catalogogal`
--
ALTER TABLE `catalogogal`
  MODIFY `idCatalogo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `maderases`
--
ALTER TABLE `maderases`
  MODIFY `idMadera` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `maderasgal`
--
ALTER TABLE `maderasgal`
  MODIFY `idMadera` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `subcatalogoes`
--
ALTER TABLE `subcatalogoes`
  MODIFY `idSub` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `subcatalogogal`
--
ALTER TABLE `subcatalogogal`
  MODIFY `idSub` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tmaderases`
--
ALTER TABLE `tmaderases`
  MODIFY `idTipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tmaderasgal`
--
ALTER TABLE `tmaderasgal`
  MODIFY `idTipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `subcatalogogal`
--
ALTER TABLE `subcatalogogal`
  ADD CONSTRAINT `idCatalogo` FOREIGN KEY (`idCatalogo`) REFERENCES `catalogogal` (`idCatalogo`);

--
-- Filtros para la tabla `tmaderasgal`
--
ALTER TABLE `tmaderasgal`
  ADD CONSTRAINT `idMadera` FOREIGN KEY (`idMadera`) REFERENCES `maderasgal` (`idMadera`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
