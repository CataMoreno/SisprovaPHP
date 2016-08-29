-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2016 a las 23:58:41
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisprova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE IF NOT EXISTS `centro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `abreviatura` varchar(10) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `idcomplejo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id`, `nombre`, `abreviatura`, `descripcion`, `idcomplejo`) VALUES
(1, 'Centro De Electricidad Y Automatización Industrial ', '(C.E.A.I)', 'El Centro de Electricidad y Automatización Industrial - CEAI, se especializa en impartir formación técnica y tecnológica de los siguientes programas de formación: Técnicos,Tecnológicos,especialización y auxiliar.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complejo`
--

CREATE TABLE IF NOT EXISTS `complejo` (
  `id` int(11) NOT NULL,
  `resolucion` varchar(150) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `director` varchar(250) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `complejo`
--

INSERT INTO `complejo` (`id`, `resolucion`, `nombre`, `director`, `direccion`, `telefono`, `logo`) VALUES
(1, '000530 ', 'Salomia', 'Elidier Gómez Sánchez', 'Calle 52 # 2bis -15 Complejo Salomia ', 'Cali Tel: 4315800 Ex', NULL),
(2, '000530 ', 'Salomia', 'Elidier Gómez Sánchez', 'Calle 52 # 2bis -15 Complejo Salomia ', 'Cali Tel: 4315800 Ext. 22646', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE IF NOT EXISTS `equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `serial` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `idtipo_equipo` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `descripcion`, `serial`, `color`, `idtipo_equipo`, `idusuario`, `idestado`) VALUES
(1, 'Asus', 'x54c', 'x54cd4567', 'Negro', 1, 1, 1),
(2, 'Vtyt', 'jb', 'kl56', 'blanco', 1, 1, 1),
(3, 'km,m', 'kmnk', 'kmn65', 'mm', 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE IF NOT EXISTS `ingreso` (
  `id` int(11) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `hora_ingreso` time DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idequipo` int(11) DEFAULT NULL,
  `idvehiculo` int(11) DEFAULT NULL,
  `idoperadoringreso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operario`
--

CREATE TABLE IF NOT EXISTS `operario` (
  `id` int(11) NOT NULL,
  `numero_identidad` varchar(30) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `idtipo_usuario` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idtipo_documento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE IF NOT EXISTS `salida` (
  `id` int(11) NOT NULL,
  `fecha_salida` date DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idequipo` int(11) DEFAULT NULL,
  `idvehiculo` int(11) DEFAULT NULL,
  `idoperadorsalida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE IF NOT EXISTS `tipodocumento` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `abreviatura` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id`, `descripcion`, `abreviatura`) VALUES
(1, 'Tarjeta de Identidad', 'T.I'),
(2, 'Cédula de Ciudadania', 'C.C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoequipo`
--

CREATE TABLE IF NOT EXISTS `tipoequipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoequipo`
--

INSERT INTO `tipoequipo` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Electronico', 'Equipos de computo'),
(2, 'Aturas', 'Equipo de Alturas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Aprendiz', 'Utiliza los servicios del SENA como Aprendiz'),
(2, 'Instructor', 'Brinda sus servicios al SENA como Instructor'),
(3, 'Funcionario', 'Brinda sus servicios al SENA como Funcionario'),
(4, 'Visitante', 'Visita las instalaciones del SENA esporadicamente ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarioxprivilegios`
--

CREATE TABLE IF NOT EXISTS `tipousuarioxprivilegios` (
  `idtipo_usuario` int(11) NOT NULL,
  `idprivilegios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovehiculo`
--

CREATE TABLE IF NOT EXISTS `tipovehiculo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `numero_identidad` varchar(30) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `huella` int(11) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `idcentro` int(11) DEFAULT NULL,
  `idtipousuario` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idtipodocumento` int(11) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `numero_identidad`, `foto`, `huella`, `usuario`, `contrasena`, `idcentro`, `idtipousuario`, `idestado`, `idtipodocumento`, `edad`, `fecha_nacimiento`, `telefono`, `direccion`) VALUES
(1, 'Catalina ', 'Camacho Moreno', '1143981506', NULL, NULL, 'Cata_Moreno', '123', 1, 1, 1, 2, 20, '1996-06-23', '3234427733', 'clll 77 # 27-29'),
(2, 'Mauricio', 'Viveros Sinesterra', '1143986757', 'No Tiene', 123, 'DieguitoAmor', '123Mau', 1, 2, 1, 2, 22, '1993-12-22', '3128245159', 'cll 74 # 29-78'),
(5, 'Pepito', 'Gomez', '1142354678', 'No tiene', 0, NULL, NULL, 1, 1, 1, 2, 45, '2016-08-18', '4567', 'no tiene');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `id` int(11) NOT NULL,
  `matricula` varchar(8) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `idtipo_vehiculo` int(11) DEFAULT NULL,
  `idestado` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcomplejo` (`idcomplejo`);

--
-- Indices de la tabla `complejo`
--
ALTER TABLE `complejo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtipo_equipo` (`idtipo_equipo`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idestado` (`idestado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idoperadoringreso` (`idoperadoringreso`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idequipo` (`idequipo`),
  ADD KEY `idvehiculo` (`idvehiculo`);

--
-- Indices de la tabla `operario`
--
ALTER TABLE `operario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtipo_usuario` (`idtipo_usuario`),
  ADD KEY `idtipo_documento` (`idtipo_documento`),
  ADD KEY `idestado` (`idestado`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idoperadorsalida` (`idoperadorsalida`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idequipo` (`idequipo`),
  ADD KEY `idvehiculo` (`idvehiculo`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoequipo`
--
ALTER TABLE `tipoequipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipousuarioxprivilegios`
--
ALTER TABLE `tipousuarioxprivilegios`
  ADD PRIMARY KEY (`idtipo_usuario`,`idprivilegios`),
  ADD KEY `idprivilegios` (`idprivilegios`);

--
-- Indices de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcentro` (`idcentro`),
  ADD KEY `idtipo_usuario` (`idtipousuario`),
  ADD KEY `idtipo_documento` (`idtipodocumento`),
  ADD KEY `idestado` (`idestado`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtipo_vehiculo` (`idtipo_vehiculo`),
  ADD KEY `idestado` (`idestado`),
  ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `complejo`
--
ALTER TABLE `complejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `operario`
--
ALTER TABLE `operario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipoequipo`
--
ALTER TABLE `tipoequipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `centro`
--
ALTER TABLE `centro`
  ADD CONSTRAINT `centro_ibfk_1` FOREIGN KEY (`idcomplejo`) REFERENCES `complejo` (`id`);

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`idtipo_equipo`) REFERENCES `tipoequipo` (`id`),
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`idestado`) REFERENCES `estado` (`id`);

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`idoperadoringreso`) REFERENCES `operario` (`id`),
  ADD CONSTRAINT `ingreso_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `ingreso_ibfk_3` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`id`),
  ADD CONSTRAINT `ingreso_ibfk_4` FOREIGN KEY (`idvehiculo`) REFERENCES `vehiculo` (`id`);

--
-- Filtros para la tabla `operario`
--
ALTER TABLE `operario`
  ADD CONSTRAINT `operario_ibfk_1` FOREIGN KEY (`idtipo_usuario`) REFERENCES `tipousuario` (`id`),
  ADD CONSTRAINT `operario_ibfk_2` FOREIGN KEY (`idtipo_documento`) REFERENCES `tipodocumento` (`id`),
  ADD CONSTRAINT `operario_ibfk_3` FOREIGN KEY (`idestado`) REFERENCES `estado` (`id`);

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`idoperadorsalida`) REFERENCES `operario` (`id`),
  ADD CONSTRAINT `salida_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `salida_ibfk_3` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`id`),
  ADD CONSTRAINT `salida_ibfk_4` FOREIGN KEY (`idvehiculo`) REFERENCES `vehiculo` (`id`);

--
-- Filtros para la tabla `tipousuarioxprivilegios`
--
ALTER TABLE `tipousuarioxprivilegios`
  ADD CONSTRAINT `tipousuarioxprivilegios_ibfk_1` FOREIGN KEY (`idtipo_usuario`) REFERENCES `tipousuario` (`id`),
  ADD CONSTRAINT `tipousuarioxprivilegios_ibfk_2` FOREIGN KEY (`idprivilegios`) REFERENCES `privilegios` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idcentro`) REFERENCES `centro` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idtipousuario`) REFERENCES `tipousuario` (`id`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idtipodocumento`) REFERENCES `tipodocumento` (`id`),
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`idestado`) REFERENCES `estado` (`id`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`idtipo_vehiculo`) REFERENCES `tipovehiculo` (`id`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`idestado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `vehiculo_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
