-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2022 a las 02:45:21
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenu2`
--
CREATE DATABASE IF NOT EXISTS `examenu2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `examenu2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_activos`
--

CREATE TABLE `t_activos` (
  `id_activos` int(11) NOT NULL,
  `monto` float NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `t_activos`
--

INSERT INTO `t_activos` (`id_activos`, `monto`, `id_tipo`, `fecha`) VALUES
(1, 2000, 4, '2022-04-04'),
(2, 800, 2, '2022-02-09'),
(3, 2000, 5, '2022-03-17'),
(4, 600, 3, '2021-09-07'),
(5, 500, 4, '2021-05-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_activos`
--

CREATE TABLE `t_cat_activos` (
  `id_cat_activos` int(11) NOT NULL,
  `nombre_activo` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `t_cat_activos`
--

INSERT INTO `t_cat_activos` (`id_cat_activos`, `nombre_activo`) VALUES
(1, 'sueldo'),
(2, 'bono'),
(3, 'cheque'),
(4, 'horas extra'),
(5, 'aginaldo'),
(6, 'comision');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_pasivos`
--

CREATE TABLE `t_cat_pasivos` (
  `id_cat_pasivos` int(11) NOT NULL,
  `nombre_pasivos` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `t_cat_pasivos`
--

INSERT INTO `t_cat_pasivos` (`id_cat_pasivos`, `nombre_pasivos`) VALUES
(1, 'despensa'),
(2, 'agua'),
(3, 'luz'),
(4, 'gas'),
(5, 'renta'),
(6, 'verificacion'),
(7, 'medico'),
(8, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_pasivos`
--

CREATE TABLE `t_pasivos` (
  `id_pasivos` int(11) NOT NULL,
  `monto` float NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `t_pasivos`
--

INSERT INTO `t_pasivos` (`id_pasivos`, `monto`, `id_tipo`, `fecha`) VALUES
(4, 50, 1, '2022-04-05'),
(5, 900, 3, '2022-11-08'),
(6, 1200, 5, '0000-00-00'),
(7, 120, 2, '2021-06-08'),
(8, 80, 7, '2022-02-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_paterno` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_materno` varchar(245) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id_usuario`, `usuario`, `password`, `nombre`, `apellido_paterno`, `apellido_materno`) VALUES
(1, 'faty', '4dc62c58f0ff5d6d20ddd65995ba2099bb0bbb86', 'Faty A', 'B', 'P'),
(2, 'faty', '918a8f6e0fb6f7f6ba21fdf7ed81efe79407b643', 'faty', 'B', 'P');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_activos`
--
ALTER TABLE `t_activos`
  ADD PRIMARY KEY (`id_activos`),
  ADD KEY `ativos_idx` (`id_tipo`);

--
-- Indices de la tabla `t_cat_activos`
--
ALTER TABLE `t_cat_activos`
  ADD PRIMARY KEY (`id_cat_activos`);

--
-- Indices de la tabla `t_cat_pasivos`
--
ALTER TABLE `t_cat_pasivos`
  ADD PRIMARY KEY (`id_cat_pasivos`);

--
-- Indices de la tabla `t_pasivos`
--
ALTER TABLE `t_pasivos`
  ADD PRIMARY KEY (`id_pasivos`),
  ADD KEY `pasivo_idx` (`id_tipo`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_activos`
--
ALTER TABLE `t_activos`
  MODIFY `id_activos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_cat_activos`
--
ALTER TABLE `t_cat_activos`
  MODIFY `id_cat_activos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `t_cat_pasivos`
--
ALTER TABLE `t_cat_pasivos`
  MODIFY `id_cat_pasivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `t_pasivos`
--
ALTER TABLE `t_pasivos`
  MODIFY `id_pasivos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_activos`
--
ALTER TABLE `t_activos`
  ADD CONSTRAINT `ativos` FOREIGN KEY (`id_tipo`) REFERENCES `t_cat_activos` (`id_cat_activos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t_pasivos`
--
ALTER TABLE `t_pasivos`
  ADD CONSTRAINT `pasivo` FOREIGN KEY (`id_tipo`) REFERENCES `t_cat_pasivos` (`id_cat_pasivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
