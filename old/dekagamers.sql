-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-03-2013 a las 12:29:44
-- Versión del servidor: 5.1.66
-- Versión de PHP: 5.3.3-7+squeeze14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dekagamers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `codigo` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codigo`) VALUES
('CP3'),
('moeager');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `codigo_videojuego_U` varchar(20) NOT NULL DEFAULT '',
  `codigo_U` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`codigo_videojuego_U`,`codigo_U`),
  KEY `codigo_U` (`codigo_U`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `compra`
--

INSERT INTO `compra` (`codigo_videojuego_U`, `codigo_U`) VALUES
('420', 'CP3'),
('420', 'moeager');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concurso`
--

CREATE TABLE IF NOT EXISTS `concurso` (
  `codigo_concurso` varchar(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `fotos` varchar(30) DEFAULT NULL,
  `fecha_hora_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ganador` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo_concurso`),
  KEY `ganador` (`ganador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `concurso`
--

INSERT INTO `concurso` (`codigo_concurso`, `nombre`, `fotos`, `fecha_hora_publicacion`, `ganador`) VALUES
('1001', 'Concurso videojuego peluche su', 'peluchemario', '2013-02-22 00:00:00', 'CP3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `codigo_noticia` varchar(20) NOT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `contenido` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora_publicacion` time DEFAULT NULL,
  `codigo_redactor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo_noticia`),
  KEY `codigo_redactor` (`codigo_redactor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`codigo_noticia`, `titulo`, `contenido`, `fecha`, `hora_publicacion`, `codigo_redactor`) VALUES
('235', 'Primeras noticia PS4', 'contenido de prueba', '2013-02-10', '23:45:34', 'CP3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participa`
--

CREATE TABLE IF NOT EXISTS `participa` (
  `codigo_concurso_C` varchar(20) NOT NULL DEFAULT '',
  `codigo_C` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`codigo_concurso_C`,`codigo_C`),
  KEY `codigo_C` (`codigo_C`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `participa`
--

INSERT INTO `participa` (`codigo_concurso_C`, `codigo_C`) VALUES
('1001', 'CP3'),
('1001', 'moeager');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_concurso`
--

CREATE TABLE IF NOT EXISTS `preguntas_concurso` (
  `codigo_concurso` varchar(20) NOT NULL DEFAULT '',
  `pregunta` varchar(100) NOT NULL DEFAULT '',
  `respuesta1` varchar(20) DEFAULT NULL,
  `respuesta2` varchar(20) DEFAULT NULL,
  `respuesta3` varchar(20) DEFAULT NULL,
  `respuesta4` varchar(20) DEFAULT NULL,
  `respuesta5` varchar(20) DEFAULT NULL,
  `respuesta6` varchar(20) DEFAULT NULL,
  `respuesta7` varchar(20) DEFAULT NULL,
  `respuesta8` varchar(20) DEFAULT NULL,
  `respuesta9` varchar(20) DEFAULT NULL,
  `respuesta10` varchar(20) DEFAULT NULL,
  `respuesta_correcta` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo_concurso`,`pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `preguntas_concurso`
--

INSERT INTO `preguntas_concurso` (`codigo_concurso`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta5`, `respuesta6`, `respuesta7`, `respuesta8`, `respuesta9`, `respuesta10`, `respuesta_correcta`) VALUES
('1001', '¿Que utilizaba Super Mario para convertirse en mapache en Super Mario World 3?', 'Flor', 'Trozo de Rama', 'Estrella', 'Seta', 'Seta Venenosa', 'Hoja', 'Seta Verde', 'Pluma', 'Nabo', 'Moneda', 'Hoja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntua`
--

CREATE TABLE IF NOT EXISTS `puntua` (
  `codigo_P` varchar(20) NOT NULL DEFAULT '',
  `codigo_videojuego_P` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`codigo_P`,`codigo_videojuego_P`),
  KEY `codigo_videojuego_P` (`codigo_videojuego_P`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `puntua`
--

INSERT INTO `puntua` (`codigo_P`, `codigo_videojuego_P`) VALUES
('CP3', '420'),
('moeager', '420');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redactor`
--

CREATE TABLE IF NOT EXISTS `redactor` (
  `codigo` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `redactor`
--

INSERT INTO `redactor` (`codigo`) VALUES
('CP3'),
('KingJames');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `rol` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `rol`, `password`) VALUES
('CP3', 'cliente', 'clipper'),
('CP3', 'redactor', 'clipper'),
('CP3', 'vendedor', 'clipper'),
('KingJames', 'redactor', 'leeebron'),
('moeager', 'cliente', 'mourinho'),
('moeager', 'vendedor', 'mourinho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` varchar(20) NOT NULL,
  `nif` varchar(20) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefono` char(9) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nif`, `nombre`, `apellido`, `email`, `telefono`, `direccion`) VALUES
('biofrutas', '47865423P', 'Pascual', 'Denero', 'kb24@gmail.com', '631158712', 'Av. Jaume I, 2'),
('CP3', '45347281K', 'Chris', 'Martinez', 'cp3paul@gmail.com', '689843567', 'Rue Salpetrière, 24'),
('dantoniod', '47875452D ', 'Antonio', 'Davis', 'lbj6@gmail.com', '674554223', 'c/ Volta, 1'),
('kevin23', '47775423F', 'Kevin', 'Martin', 'K5G@gmail.com', '666896888', 'Av Jaquar, 77'),
('kevinlopez', '42047181F', 'Kevin', 'Lopez', 'K5G@gmail.com', '666777888', 'Av. Barcelona, 8'),
('KingJames', '45604781J', 'LeBron', 'Reyes', 'lbj6@gmail.com', '677754234', 'c/ Schwarzenegger, 38'),
('kobeexposito', '43487568L', 'Kobe', 'Exposito', 'kb24@gmail.com', '631258769', 'Av. Pierce PP, 56'),
('MickaelPietrus', '47885441Q ', 'Mickael', 'Pietrus', 'cp3paul@gmail.com', '677848167', 'Av. Mayo, 36'),
('moeager', '45687563H', 'Alejandro', 'Huertas', 'ahuertas@gmail.com', '664654765', 'c/ MartinL, 3'),
('sagana7', 'X1234748Z', 'DeSagana', 'Diop', 'ahuertas@gmail.com', '663645765', 'c/ San Honorato, 31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valora`
--

CREATE TABLE IF NOT EXISTS `valora` (
  `codigo_videojuego_R` varchar(20) NOT NULL DEFAULT '',
  `codigo_R` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`codigo_videojuego_R`,`codigo_R`),
  KEY `codigo_R` (`codigo_R`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `valora`
--

INSERT INTO `valora` (`codigo_videojuego_R`, `codigo_R`) VALUES
('420', 'CP3'),
('420', 'KingJames');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vende`
--

CREATE TABLE IF NOT EXISTS `vende` (
  `codigo_videojuego_V` varchar(20) NOT NULL DEFAULT '',
  `codigo_V` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`codigo_videojuego_V`,`codigo_V`),
  KEY `codigo_V` (`codigo_V`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `vende`
--

INSERT INTO `vende` (`codigo_videojuego_V`, `codigo_V`) VALUES
('420', 'CP3'),
('420', 'moeager');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `codigo` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`codigo`) VALUES
('CP3'),
('moeager');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE IF NOT EXISTS `videojuego` (
  `codigo_videojuego` varchar(20) NOT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `compañia` varchar(30) DEFAULT NULL,
  `plataforma` varchar(20) DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  `precio` varchar(30) DEFAULT NULL,
  `caracteristica` varchar(30) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo_videojuego`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`codigo_videojuego`, `titulo`, `compañia`, `plataforma`, `fecha_venta`, `precio`, `caracteristica`, `genero`) VALUES
('420', 'NBA 2K14', '2K', 'PS3', '2013-10-08', '69.99', 'Control PS MOVE', 'Deportes');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`codigo_videojuego_U`) REFERENCES `videojuego` (`codigo_videojuego`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`codigo_U`) REFERENCES `cliente` (`codigo`);

--
-- Filtros para la tabla `concurso`
--
ALTER TABLE `concurso`
  ADD CONSTRAINT `concurso_ibfk_1` FOREIGN KEY (`ganador`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`codigo_redactor`) REFERENCES `redactor` (`codigo`);

--
-- Filtros para la tabla `participa`
--
ALTER TABLE `participa`
  ADD CONSTRAINT `participa_ibfk_1` FOREIGN KEY (`codigo_concurso_C`) REFERENCES `concurso` (`codigo_concurso`),
  ADD CONSTRAINT `participa_ibfk_2` FOREIGN KEY (`codigo_C`) REFERENCES `cliente` (`codigo`);

--
-- Filtros para la tabla `preguntas_concurso`
--
ALTER TABLE `preguntas_concurso`
  ADD CONSTRAINT `preguntas_concurso_ibfk_1` FOREIGN KEY (`codigo_concurso`) REFERENCES `concurso` (`codigo_concurso`);

--
-- Filtros para la tabla `puntua`
--
ALTER TABLE `puntua`
  ADD CONSTRAINT `puntua_ibfk_1` FOREIGN KEY (`codigo_videojuego_P`) REFERENCES `videojuego` (`codigo_videojuego`),
  ADD CONSTRAINT `puntua_ibfk_2` FOREIGN KEY (`codigo_P`) REFERENCES `cliente` (`codigo`);

--
-- Filtros para la tabla `redactor`
--
ALTER TABLE `redactor`
  ADD CONSTRAINT `redactor_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `valora`
--
ALTER TABLE `valora`
  ADD CONSTRAINT `valora_ibfk_1` FOREIGN KEY (`codigo_videojuego_R`) REFERENCES `videojuego` (`codigo_videojuego`),
  ADD CONSTRAINT `valora_ibfk_2` FOREIGN KEY (`codigo_R`) REFERENCES `redactor` (`codigo`);

--
-- Filtros para la tabla `vende`
--
ALTER TABLE `vende`
  ADD CONSTRAINT `vende_ibfk_1` FOREIGN KEY (`codigo_videojuego_V`) REFERENCES `videojuego` (`codigo_videojuego`),
  ADD CONSTRAINT `vende_ibfk_2` FOREIGN KEY (`codigo_V`) REFERENCES `vendedor` (`codigo`);

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `usuario` (`id`);
