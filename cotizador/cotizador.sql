-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2015 a las 18:10:03
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cotizador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calle`
--

CREATE TABLE IF NOT EXISTS `calle` (
  `idCalle` int(11) NOT NULL DEFAULT '0',
  `nombreCalle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calle`
--

INSERT INTO `calle` (`idCalle`, `nombreCalle`) VALUES
(1, 'Zaragoza'),
(2, 'colon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_perfil`
--

CREATE TABLE IF NOT EXISTS `cat_perfil` (
`idperfil` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_perfil`
--

INSERT INTO `cat_perfil` (`idperfil`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Consulta'),
(3, 'Invitado'),
(4, 'Dios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_unidad`
--

CREATE TABLE IF NOT EXISTS `cat_unidad` (
`idunidad` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_unidad`
--

INSERT INTO `cat_unidad` (`idunidad`, `descripcion`) VALUES
(1, 'Pieza'),
(2, 'Paquete 500 hojas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`idCliente` int(11) NOT NULL,
  `escuela` varchar(50) NOT NULL,
  `cct` varchar(50) NOT NULL,
  `idModalidad` int(11) NOT NULL,
  `Profesor` varchar(50) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `idColonia` int(11) NOT NULL,
  `idCalle` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `escuela`, `cct`, `idModalidad`, `Profesor`, `idMunicipio`, `idColonia`, `idCalle`, `numero`) VALUES
(1, 'Miguel Hidalgo', '17', 1, 'Enrique ', 1, 1, 1, 23),
(2, 'Igancio Zaragoza', '135', 1, 'Ricardo', 1, 2, 1, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonia`
--

CREATE TABLE IF NOT EXISTS `colonia` (
  `idColonia` int(11) NOT NULL DEFAULT '0',
  `colonia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colonia`
--

INSERT INTO `colonia` (`idColonia`, `colonia`) VALUES
(1, 'Centro'),
(2, 'Santuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE IF NOT EXISTS `compania` (
`idCompania` int(11) NOT NULL,
  `nombreCompania` varchar(50) NOT NULL,
  `idMunicipio` int(11) NOT NULL,
  `idColonia` int(11) NOT NULL,
  `idCalle` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`idCompania`, `nombreCompania`, `idMunicipio`, `idColonia`, `idCalle`, `numero`) VALUES
(1, 'Tony', 2, 1, 1, 405);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
`folio` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subTotal` float NOT NULL,
  `total` float NOT NULL,
  `iva` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

CREATE TABLE IF NOT EXISTS `escuela` (
  `idEscuela` int(11) NOT NULL DEFAULT '0',
  `nombreEscuela` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escuela`
--

INSERT INTO `escuela` (`idEscuela`, `nombreEscuela`) VALUES
(1, 'Ignacio Zaragoza'),
(2, 'Miguel Hidalgo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE IF NOT EXISTS `modalidad` (
  `idModalidad` int(11) NOT NULL DEFAULT '0',
  `modalidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`idModalidad`, `modalidad`) VALUES
(1, 'Primaria'),
(2, 'Preescolar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `NomMunicipio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `NomMunicipio`) VALUES
(1, 'San Felipe'),
(2, 'Dolores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE IF NOT EXISTS `ordenes` (
`folio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`folio`, `fecha`, `idCliente`, `idproducto`, `cantidad`, `precio`, `iva`, `subTotal`, `total`) VALUES
(1, '2015-11-07', 1, 3, 2, 3, 2, 0, 0),
(2, '2015-11-21', 1, 4, 23, 3, 2, 0, 0),
(3, '2015-11-21', 2, 3, 4, 3, 2, 0, 0),
(4, '2015-11-19', 2, 3, 7, 4, 1, 0, 0),
(5, '2015-11-19', 2, 3, 6, 4, 8, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`idproducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `idunidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `iva` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `nombre`, `idunidad`, `precio`, `iva`) VALUES
(3, 'Lapiz No. 2', 1, 10, 12),
(4, 'Lapiz No.5', 1, 5, 16),
(5, 'Hojas de maquina scribe', 2, 100, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
`idProveedor` int(11) NOT NULL,
  `nomProveedor` varchar(50) NOT NULL,
  `idCompania` int(11) NOT NULL,
  `numTelefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nomProveedor`, `idCompania`, `numTelefono`, `email`) VALUES
(1, 'Patito', 1, 2535, 'tony@gmail.com'),
(2, 'Juan', 1, 676678, 'tony@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `idperfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Contiene los usuarios con acceso al sistema';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `idperfil`, `username`, `password`, `estatus`) VALUES
(1, '1', 'juanesgg84', 'X9B0sLWI4YEmBCaY7Tix/3wE9ehED4707tkHiNXTHuS/nZXnt7qAP/SrixLpVLqo2JdF6vCr0JYWjsR/RDRZoA==', 0),
(2, '2', 'consulta', 'Od+c1BSBTXqVWlPO/79Ogo0aeJB7asa95DwZ0p+S/OzlUip9kRON85lfke2bdXxw2/DkTq0gCAsmUJcUfBeY7w==', 0),
(14, '3', 'Invitado', 'OTBvypaqsAMa+5U+uodglLnnyBCQyF/xJamFooQPpttSgbrjd3J+s94d5qych9g8hl1NuGr1UENlKWLGDDyi3A==', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calle`
--
ALTER TABLE `calle`
 ADD PRIMARY KEY (`idCalle`);

--
-- Indices de la tabla `cat_perfil`
--
ALTER TABLE `cat_perfil`
 ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `cat_unidad`
--
ALTER TABLE `cat_unidad`
 ADD PRIMARY KEY (`idunidad`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `colonia`
--
ALTER TABLE `colonia`
 ADD PRIMARY KEY (`idColonia`);

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
 ADD PRIMARY KEY (`idCompania`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
 ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `escuela`
--
ALTER TABLE `escuela`
 ADD PRIMARY KEY (`idEscuela`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
 ADD PRIMARY KEY (`idModalidad`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`idMunicipio`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
 ADD PRIMARY KEY (`folio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_perfil`
--
ALTER TABLE `cat_perfil`
MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cat_unidad`
--
ALTER TABLE `cat_unidad`
MODIFY `idunidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `compania`
--
ALTER TABLE `compania`
MODIFY `idCompania` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
