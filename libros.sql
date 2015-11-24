-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2015 a las 20:48:45
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
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libro` int(9) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(20) NOT NULL,
  `dewey` varchar(30) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `ejemplares` int(4) NOT NULL,
  `imagen_libro` varchar(100) NOT NULL,
  PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `isbn`, `dewey`, `titulo`, `autor`, `editorial`, `ejemplares`, `imagen_libro`) VALUES
(2, '0-123-14587-1', '123 a123b', 'titulo de prueba', 'autor de prueba', 'editorial de prueba', 1, 'images/libros/oveja.jpg'),
(3, '978-0-123-14521-1', 'abc z987i', 'titulo de prueba', 'autor de prueba', 'editorial de prueba', 88, 'images/libros/tortuga.jpg'),
(4, '0-789-54125-0', '812 S832s', 'El principito', 'antoin saint-exupiery', 'planeta', 1, 'images/libros/imagen1.jpg'),
(5, '979-1-123-42315-7', '635 E837p', 'un libro para renacer cada dia', 'oprah', 'loto blanco', 2, 'images/libros/imagen2.jpg'),
(6, '0-753-12547-1', '748 v200p', 'veinte petalos', 'rosa flores', 'lorca', 5, 'images/libros/imagen3.jpg'),
(7, '978-1-785-12358-8', '374 k876e', 'bioshock', 'walter white', 'submarino', 9, 'images/libros/imagen4.jpg'),
(8, '0-321-74125-3', '123 o245a', 'a clockwork orange', 'anthony gurgess', 'farol', 3, 'images/libros/imagen5.jpg'),
(9, '979-2-147-12354-8', '888 c453z', 'the cat in the hat', 'dr seuss', 'gato blanco', 2, 'images/libros/imagen6.jpg'),
(10, '0-852-98452-1', '199 g451o', '1984', 'george orwell', 'vistazo', 1, 'images/libros/imagen7.jpg'),
(11, '979-1-852-12547-1', '345 c948g', 'caracol y gusanito', 'armando quintero', 'arbol verde', 2, 'images/libros/imagen8.jpg'),
(12, '0-458-21458-1', '666 b324j', 'bajo la misma estrella', 'john green', 'cielo azul', 1, 'images/libros/imagen9.jpg'),
(13, '978-0-954-12364-1', '475 c455e', 'como escribir en espaÃ±ol', 'graciela reyes', 'buenas letras', 1, 'images/libros/imagen10.jpg'),
(14, '978-8-475-65441-8', '437 a384i', 'castle to castle', 'louis fernindand', 'castillo negro', 3, 'images/libros/imagen11.jpg'),
(15, '979-0-521-41230-2', '741 a123y', 'la quinta ola', 'rick yancey', 'rba', 8, 'images/libros/imagen12.jpg'),
(16, '0-654-12365-5', '654 n452z', 'la banca que escribia torcido', 'marc weingraten', 'flecha recta', 4, 'images/libros/imagen13.jpg'),
(17, '0-236-65412-2', '325 i412a', 'el joc de ripper', 'isabel allende', 'capucha negra', 3, 'images/libros/imagen14.jpg'),
(18, '979-5-123-42325-8', '885 y421p', 'la vida de pi', 'yann martel', 'tigre bravo', 4, 'images/libros/imagen15.jpg'),
(19, '0-214-32548-9', '901 g451m', 'a game of thrones', 'george r. r. martin', 'poca lucha', 1, 'images/libros/imagen16.jpg'),
(20, '978-2-745-32154-8', '555 s458d', 'soÃ±ar despierto', 'robert moss', 'infinito', 4, 'images/libros/imagen17.jpg'),
(21, '0-954-65254-8', '432 j854a', 'animales fantasticos y donde encontrarlos', 'j.k. rowling', 'SALAMANDRA', 2, 'images/libros/imagen18.jpg'),
(22, '979-4-123-74214-5', '753 p547c', 'la piel del camaleon', 'yolanda regidor', 'diablo negro', 3, 'images/libros/imagen19.jpg'),
(23, '978-4-453-98742-3', '876 t125m', 'don quijote de la mancha', 'miguel de servantes saavedra', 'caballo rapido', 2, 'images/libros/imagen20.jpg'),
(24, '979-6-321-75412-3', '134 c452d', 'notas de america', 'charles dickens', 'tren veloz', 1, 'images/libros/imagen21.jpg'),
(25, '978-0-123-14521-1', '123 a123a', 'titulo uno', 'autor uno', 'editorial uno', 1, 'images/libros/imagen16.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
