-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2015 a las 20:35:28
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `progra_apli`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `20040901241_usuario`
--

CREATE TABLE IF NOT EXISTS `20040901241_usuario` (
`id` int(11) NOT NULL,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene los usuarios con acceso al sistema';

--
-- Volcado de datos para la tabla `20040901241_usuario`
--

INSERT INTO `20040901241_usuario` (`id`, `perfil`, `username`, `password`, `estatus`) VALUES
(1, 'administrador', 'juanesgg84', 'juanesgg84', 0),
(2, 'consulta', 'consulta', 'invitado', 0),
(3, 'invitado', 'invitado', 'invitado', 99),
(4, '0', '0', '0', 99),
(5, '0', '0', '0', 99),
(6, 'ejemplo', 'ejemplo', 'ejemplo', 99),
(7, 'nuevo', 'nuevo', 'nuevo', 99),
(8, 'ejemplo', 'ejemplo', 'ejemplo', 99),
(9, 'ejemplo', 'ejemplo', 'ejemplo', 99),
(10, 'sdfkjh', 'kjshdfkj', 'sdkjf', 99),
(11, 'sjdkh', 'kjhkj', 'kjh', 99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `20040901241_usuario`
--
ALTER TABLE `20040901241_usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `20040901241_usuario`
--
ALTER TABLE `20040901241_usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
