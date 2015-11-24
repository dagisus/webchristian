-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2015 a las 20:48:50
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id_mensaje` int(9) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  PRIMARY KEY (`id_mensaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_mensaje`, `nombre`, `correo`, `tema`, `mensaje`) VALUES
(2, 'cristian', 'correo@mail.com', 'dudas', 'mensaje de prueba'),
(3, 'asjdask', 'hsadsabjd', 'hasjbdbsad', 'jhasjbdbsamdbmas'),
(4, 'hjsadjbsabhjd', 'jhbsadbsadbhj', 'hjbasbdasbhdhbahj', 'hbshbdabdbabsdlhbaslhbdlashbd'),
(8, 'Name', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(9, 'eyuragwesaygdgi', '87asgd87asgdas78', '87gas8dga8sdg87sagdas8', '78agsduyags78wagy3awgesaghjdghsagdl'),
(10, 'asdhsaghdugywye782783', 'asdyugasy89d78t2o3gasd', '9y8ugdgas98yqw8tgawsvjdhjb', '89pa78ewa398ya37'),
(11, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(12, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(13, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(14, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(15, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(16, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(17, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(18, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(19, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(20, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(21, 'ruth patricia', 'ruth@mail.com', 'saludo', 'kjasdasgdasdasdjasdhasdsad'),
(22, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(23, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(24, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(25, 'a1', 'Correo', 'Tema', 'as'),
(26, '2', '2', '2', 'Mensaje\r\n                        '),
(27, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        '),
(29, 'Nombre', 'Correo', 'Tema', 'Mensaje\r\n                        ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
