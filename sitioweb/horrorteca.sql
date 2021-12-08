-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 04:09:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horrorteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID_COMEN` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `COMENTARIO` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID_COMEN`, `NOMBRE`, `EMAIL`, `COMENTARIO`) VALUES
(6, 'manolo', 'gabrielsilelog@gmail.com', 'Menuda mierda de pagina killo'),
(7, 'Anita', 'anita@gmail.com', 'pero esto k e loko xd'),
(8, 'Pedrolo', 'Pedrolo@gmail.com', 'Si si muy chula pero no tienes novia xdd'),
(9, 'Pedrolo', 'Pedrolo@gmail.com', 'Si si muy chula pero no tienes novia xdd'),
(10, 'Pedrolo', 'Pedrolo@gmail.com', 'Si si muy chula pero no tienes novia xdd'),
(11, 'ejercico', 'anita@gmail.com', 'ddddddddddd'),
(12, 'Luis', 'luis@gmail.com', 'Esta ok'),
(13, 'paquito', 'paquito@gmail.com', 'Cusha que te vamos a encontrar y te vamo a raja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(250) NOT NULL,
  `IMAGEN` varchar(1000) NOT NULL,
  `AUTOR` varchar(100) NOT NULL,
  `ARCHIVO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`ID`, `NOMBRE`, `IMAGEN`, `AUTOR`, `ARCHIVO`) VALUES
(66, 'La sombra sobre Innsmouth', '1638752267_innsmouth.jpg', 'Lovecraft', 'La Sombra Sobre Innsmouth.pdf'),
(67, 'La llamada de Cthulhu', '1638752320_cthulhu.jpg', 'Lovecraft', 'la-llamada-de-cthulhu.pdf'),
(68, 'El horror de Dunwich', '1638752366_horror_dunwich.jpg', 'Lovecraft', 'El_horror_de_Dunwich.pdf'),
(70, 'El misterio de Salem\'s lot', '1638753005_salems_lot.jpg', 'Stephen King', 'el-misterio-de-salems-lot-salems-lot.pdf'),
(71, 'It', '1638753055_it.jpeg', 'stephen king', 'it.pdf'),
(72, 'El resplandor', '1638926380_el_resplandor.jpg', 'Stephen King', 'el_resplandor.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_COMEN`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_COMEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
