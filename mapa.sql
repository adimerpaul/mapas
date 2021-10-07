-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 01:54:03
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

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
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `lat` varchar(150) NOT NULL,
  `lng` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `name`, `lat`, `lng`, `fecha`) VALUES
(1, 'CURSO HTML', '-19.066011797810056', '-67.37777709960939', '2021-06-10 23:42:34'),
(2, 'semeterio de quillacas', '-19.23206673568465', '-66.95205688476564', '2021-06-10 23:43:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `nombre`, `fecha`) VALUES
(1, 'RUTA PARINUYO-oRINOCA', '2021-06-10 23:50:30'),
(3, 'CURSO HTML', '2021-06-10 23:51:13');

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
(18, '-19.047839415523', '-67.090072631836', '2021-06-10 23:51:13', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rutaspuntos`
--
ALTER TABLE `rutaspuntos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rutaspuntos`
--
ALTER TABLE `rutaspuntos`
  ADD CONSTRAINT `rutaspuntos_ibfk_1` FOREIGN KEY (`ruta_id`) REFERENCES `rutas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
