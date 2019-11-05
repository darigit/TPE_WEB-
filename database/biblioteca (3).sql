-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2018 a las 14:42:26
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `puntaje` int(11) NOT NULL,
  `fk_libro` int(11) NOT NULL,
  `nombre_post` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `descripcion`, `puntaje`, `fk_libro`, `nombre_post`) VALUES
(1, 'No me gusto el comentario', 2, 2, 'roberto'),
(2, 'Exelente Pagina', 8, 10, 'Jorge');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `id_editorial` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`nombre`, `id_editorial`) VALUES
('PINOCHO', 1),
('LA EDITORIAL S.A', 2),
('La ESPERANZA SRL', 3),
('LA PRIMAVERA', 4),
('PANADERIA DERO', 5),
('EL CHANCHO', 6),
('CACO', 7),
('IGNACIO', 8),
('federico', 9),
('EL TERO', 10),
('EL ATENEO', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `num_pagina` int(11) NOT NULL,
  `ISBN` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tema` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `id_editorial`, `nombre`, `num_pagina`, `ISBN`, `autor`, `tema`) VALUES
(76, 15, 'PEPE', 300, '123-56569-8988', 'DARI JORGE', 'EL SACRIFICIO'),
(101, 12, 'RAFAELA', 2323, '123-5659-2656', 'EL PORVENIR', 'EL SUSPENSO'),
(105, 1, 'RAFAELA', 12, '123-56569-8988', 'DARI JORGE', 'EL SACRIFICIO'),
(106, 10, 'ROBERTO GARCIA ', 333, '33333-33333', 'DARI JORGE', 'PROGRAMANDO WE3'),
(108, 7, 'ISAVEL AMALIA', 123, '123-5659-2656', 'DARI JORGE', 'EL SUEÑO'),
(109, 6, 'EL PORTE', 23232, '2222222222', 'EL CACHITO', 'EL CUETE'),
(110, 10, 'LA CHINA', 1220, '123-5659-2656', 'EL CACHO', 'ME QUEDA POCO TIEMPO PARA TERM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `user`, `e_mail`, `password`) VALUES
(1, 'jorge', 'jorgedari71@gmail.com', '$2y$12$WyELvf4/jglkeTiB5.cp3.G/PDv8KyO00mlKtYO/RRQJ8Dcd45s9e'),
(2, 'admin', 'admin@gmail.com', '118402');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
