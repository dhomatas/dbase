-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: db5000128127.hosting-data.io
-- Tiempo de generación: 18-07-2019 a las 16:50:19
-- Versión del servidor: 5.7.25-log
-- Versión de PHP: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs122647`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESPtable2`
--

CREATE TABLE `ESPtable2` (
  `VOLT` int(5) NOT NULL,
  `AMBER` int(5) NOT NULL,
  `FREQUENCY` int(5) NOT NULL,
  `KILOW` int(5) NOT NULL,
  `KILOVA` int(5) NOT NULL,  
  `SA1` tinyint(1) NOT NULL,
  `SA2` tinyint(1) NOT NULL,
  `SA3` tinyint(1) NOT NULL,
  `SA4` tinyint(1) NOT NULL,
  `SA5` tinyint(1) NOT NULL,
  `SA6` tinyint(1) NOT NULL,
  `SA7` tinyint(1) NOT NULL,
  `SA8` tinyint(1) NOT NULL,
  `RA1` tinyint(1) NOT NULL,
  `RA2` tinyint(1) NOT NULL,
  `RA3` tinyint(1) NOT NULL,
  `RA4` tinyint(1) NOT NULL,
  `RA5` tinyint(1) NOT NULL,
  `RA6` tinyint(1) NOT NULL,
  `RA7` tinyint(1) NOT NULL,
  `RA8` tinyint(1) NOT NULL,
  `SB1` tinyint(1) NOT NULL,
  `SB2` tinyint(1) NOT NULL,
  `SB3` tinyint(1) NOT NULL,
  `SB4` tinyint(1) NOT NULL,
  `SB5` tinyint(1) NOT NULL,
  `SB6` tinyint(1) NOT NULL,
  `SB7` tinyint(1) NOT NULL,
  `SB8` tinyint(1) NOT NULL,
  `RB1` tinyint(1) NOT NULL,
  `RB2` tinyint(1) NOT NULL,
  `RB3` tinyint(1) NOT NULL,
  `RB4` tinyint(1) NOT NULL,
  `RB5` tinyint(1) NOT NULL,
  `RB6` tinyint(1) NOT NULL,
  `RB7` tinyint(1) NOT NULL,
  `RB8` tinyint(1) NOT NULL,
  `SC1` tinyint(1) NOT NULL,
  `SC2` tinyint(1) NOT NULL,
  `SC3` tinyint(1) NOT NULL,
  `SC4` tinyint(1) NOT NULL,
  `SD1` tinyint(1) NOT NULL,
  `SD2` tinyint(1) NOT NULL,
  `SD3` tinyint(1) NOT NULL,
  `SD4` tinyint(1) NOT NULL,
  `RC1` tinyint(1) NOT NULL,
  `RC2` tinyint(1) NOT NULL,
  `RC3` tinyint(1) NOT NULL,
  `RC4` tinyint(1) NOT NULL,
  `RD1` tinyint(1) NOT NULL,
  `RD2` tinyint(1) NOT NULL,
  `RD3` tinyint(1) NOT NULL,
  `RD4` tinyint(1) NOT NULL,
  `TEXT_1` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ESPtable2`
--

INSERT INTO `ESPtable2` ( `VOLT` ,  `AMBER`,  `FREQUENCY`,  `KILOW`,  `KILOVA`, 
                          `SA1`, `SA2`, `SA3`, `SA4`, `SA5`, `SA6`, `SA7`, `SA8`,
                          `SB1`, `SB2`, `SB3`, `SB4`, `SB5`, `SB6`, `SB7`, `SB8`,
                          `SC1`, `SC2`, `SC3`, `SC4`, `SD1`, `SD2`, `SD3`, `SD4`,
						  `RA1`, `RA2`, `RA3`, `RA4`, `RA5`, `RA6`, `RA7`, `RA8`,
                          `RB1`, `RB2`, `RB3`, `RB4`, `RB5`, `RB6`, `RB7`, `RB8`,
						  `RC1`, `RC2`, `RC3`, `RC4`, `RD1`, `RD2`, `RD3`, `RD4`,TEXT_1 )
 						   VALUES( 230 , 20, 50, 120,155,
 						          0, 0, 0, 0, 1, 1, 1, 0, 
                                                0, 0, 0, 0, 0, 0, 0, 0,
												0, 0, 0, 0, 1, 1, 1, 0, 
                                                0, 0, 0, 0, 0, 0, 0, 0,
												0, 0, 0, 0, 1, 1, 1, 0, 
                                                0, 0, 0, 0, 0, 0, 0, 0 ,"paparies");

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ESPtable2`
--


--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ESPtable2`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
