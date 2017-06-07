-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2017 a las 20:02:31
-- Versión del servidor: 5.6.17-log
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alcar`
--
CREATE DATABASE IF NOT EXISTS `daw2017_10` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `daw2017_10`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogogal`
--

CREATE TABLE IF NOT EXISTS `catalogogal` (
  `idCatalogo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idCatalogo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
-- Estructura de tabla para la tabla `maderasgal`
--

CREATE TABLE IF NOT EXISTS `maderasgal` (
  `idMadera` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idMadera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
-- Estructura de tabla para la tabla `subcatalogogal`
--

CREATE TABLE IF NOT EXISTS `subcatalogogal` (
  `idSub` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idCatalogo` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idSub`,`idCatalogo`),
  KEY `idCatalogo` (`idCatalogo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
-- Estructura de tabla para la tabla `tmaderasgal`
--

CREATE TABLE IF NOT EXISTS `tmaderasgal` (
  `idTipo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idMadera` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipo`,`idMadera`),
  KEY `idMadera` (`idMadera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
