-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2021 a las 08:13:45
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mapa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arreglos`
--

CREATE TABLE `arreglos` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `observacion` varchar(255) NOT NULL,
  `lugar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `poste` varchar(250) NOT NULL,
  `lat` varchar(150) NOT NULL,
  `lng` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `codigo` varchar(200) DEFAULT NULL,
  `potencia` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `poste`, `lat`, `lng`, `fecha`, `codigo`, `potencia`, `tipo`, `user_id`) VALUES
(1, 'CURSO HTML', '-19.066011797810056', '-67.37777709960939', '2021-06-10 23:42:34', NULL, '', '', 0),
(2, 'semeterio de quillacas', '-19.23206673568465', '-66.95205688476564', '2021-06-10 23:43:35', NULL, '', '', 0),
(3, '3', '-17.967425638613026', '-67.11440026760103', '2021-10-08 18:03:31', 'a', '1', '2', 0),
(6, '', '-17.97396731523016', '-67.10826873779298', '2021-10-13 14:44:32', '1', '', '', 0),
(8, '5', '-17.97538583395698', '-67.11521323409649', '2021-10-29 12:08:36', '123', '15w', 'led', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poligonopuntos`
--

CREATE TABLE `poligonopuntos` (
  `id` int(11) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `poligono_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poligonos`
--

CREATE TABLE `poligonos` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `descripcion` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(255) NOT NULL,
  `distancia` double NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `nombre`, `fecha`, `tipo`, `distancia`, `user_id`) VALUES
(1, 'RUTA PARINUYO-oRINOCA', '2021-06-10 23:50:30', '', 0, 0),
(3, 'CURSO HTML', '2021-06-10 23:51:13', '', 0, 0),
(4, '', '2021-10-13 14:43:00', '', 0, 0),
(5, '', '2021-10-13 14:43:09', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutaspuntos`
--

CREATE TABLE `rutaspuntos` (
  `id` int(11) NOT NULL,
  `lat` varchar(150) NOT NULL,
  `lng` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `ruta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutaspuntos`
--

INSERT INTO `rutaspuntos` (`id`, `lat`, `lng`, `fecha`, `ruta_id`) VALUES
(1, '-19.086777795662', '-67.633895874023', '2021-06-10 23:50:30', 1),
(2, '-19.101052908834', '-67.607116699219', '2021-06-10 23:50:30', 1),
(3, '-19.07315040313', '-67.570724487305', '2021-06-10 23:50:30', 1),
(4, '-19.056276840617', '-67.530899047852', '2021-06-10 23:50:30', 1),
(5, '-19.060170892074', '-67.492446899414', '2021-06-10 23:50:30', 1),
(6, '-19.067958720661', '-67.447128295898', '2021-06-10 23:50:30', 1),
(7, '-19.084831093943', '-67.332458496094', '2021-06-10 23:50:30', 1),
(8, '-19.017331300499', '-67.254867553711', '2021-06-10 23:50:30', 1),
(9, '-18.96474034774', '-67.250747680664', '2021-06-10 23:50:30', 1),
(14, '-19.218451339985', '-67.279586791992', '2021-06-10 23:51:13', 3),
(15, '-19.235956641468', '-67.25212097168', '2021-06-10 23:51:13', 3),
(16, '-19.168518577122', '-67.250061035156', '2021-06-10 23:51:13', 3),
(17, '-19.158789653506', '-67.089385986328', '2021-06-10 23:51:13', 3),
(18, '-19.047839415523', '-67.090072631836', '2021-06-10 23:51:13', 3),
(19, '-17.964527220834', '-67.106359004974', '2021-10-13 14:43:00', 4),
(20, '-17.966650010346', '-67.112045288086', '2021-10-13 14:43:00', 4),
(21, '-17.968262496872', '-67.105822563171', '2021-10-13 14:43:09', 5),
(22, '-17.96564985308', '-67.104170322418', '2021-10-13 14:43:09', 5),
(23, '-17.96822167461', '-67.111122608185', '2021-10-13 14:43:09', 5),
(24, '-17.969650448173', '-67.107367515564', '2021-10-13 14:43:09', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `ci` varchar(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `unidad` varchar(255) NOT NULL,
  `cuenta` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `ci`, `nombre`, `unidad`, `cuenta`, `clave`) VALUES
(1, '5769706', 'ALEJANDRO', 'SISTEMAS', 'ALE', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arreglos`
--
ALTER TABLE `arreglos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lugar_id` (`lugar_id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Indices de la tabla `poligonopuntos`
--
ALTER TABLE `poligonopuntos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `poligonos`
--
ALTER TABLE `poligonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutaspuntos`
--
ALTER TABLE `rutaspuntos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruta_id` (`ruta_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`),
  ADD UNIQUE KEY `cuenta` (`cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arreglos`
--
ALTER TABLE `arreglos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `poligonopuntos`
--
ALTER TABLE `poligonopuntos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `poligonos`
--
ALTER TABLE `poligonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rutaspuntos`
--
ALTER TABLE `rutaspuntos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arreglos`
--
ALTER TABLE `arreglos`
  ADD CONSTRAINT `arreglos_ibfk_1` FOREIGN KEY (`lugar_id`) REFERENCES `lugares` (`id`);

--
-- Filtros para la tabla `rutaspuntos`
--
ALTER TABLE `rutaspuntos`
  ADD CONSTRAINT `rutaspuntos_ibfk_1` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
