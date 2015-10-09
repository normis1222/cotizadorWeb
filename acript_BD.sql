-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2015 a las 19:05:25
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `cotizador`
--
CREATE DATABASE IF NOT EXISTS `cotizador` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cotizador`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene los usuarios con acceso al sistema';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `perfil`, `username`, `password`, `estatus`) VALUES
(1, 'administrador', 'juanesgg84', 'X9B0sLWI4YEmBCaY7Tix/3wE9ehED4707tkHiNXTHuS/nZXnt7qAP/SrixLpVLqo2JdF6vCr0JYWjsR/RDRZoA==', 0),
(2, 'consulta', 'consulta', 'X9B0sLWI4YEmBCaY7Tix/3wE9ehED4707tkHiNXTHuS/nZXnt7qAP/SrixLpVLqo2JdF6vCr0JYWjsR/RDRZoA==', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;