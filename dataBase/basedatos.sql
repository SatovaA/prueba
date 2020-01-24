-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2020 a las 07:45:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignar_ruta`
--

CREATE TABLE `asignar_ruta` (
  `id` int(11) NOT NULL,
  `lugar_destino` varchar(120) DEFAULT NULL,
  `numero_kilometros` int(11) DEFAULT NULL,
  `vehiculo_id` int(11) DEFAULT NULL,
  `costo_transporte` varchar(60) DEFAULT NULL,
  `conductor_id` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignar_ruta`
--

INSERT INTO `asignar_ruta` (`id`, `lugar_destino`, `numero_kilometros`, `vehiculo_id`, `costo_transporte`, `conductor_id`, `estado`) VALUES
(10, 'Girardot', 8, 4, '1280000', 16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_material`
--

CREATE TABLE `carga_material` (
  `id` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `peso_carga` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_vehiculo`
--

CREATE TABLE `documentos_vehiculo` (
  `id` int(11) NOT NULL,
  `tipo_documento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documentos_vehiculo`
--

INSERT INTO `documentos_vehiculo` (`id`, `tipo_documento`) VALUES
(1, 'Soat'),
(2, 'Tecnomecanica'),
(3, 'Matrícula vehicular'),
(4, 'Licencia de conducir');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`) VALUES
(1, 'Vigas de acero'),
(2, 'Arena'),
(3, 'Cemento'),
(4, 'Ladrillo'),
(5, 'Yeso'),
(6, 'Bloque'),
(8, 'Picas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `apellidos` varchar(120) DEFAULT NULL,
  `id_documento` int(11) DEFAULT NULL,
  `numero_identificacion` varchar(120) DEFAULT NULL,
  `numero_licencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellidos`, `id_documento`, `numero_identificacion`, `numero_licencia`) VALUES
(16, 'Andrea', 'Atova', 1, '123456', 3123123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_materiales`
--

CREATE TABLE `ruta_materiales` (
  `id` int(11) NOT NULL,
  `ruta_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `peso_carga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ruta_materiales`
--

INSERT INTO `ruta_materiales` (`id`, `ruta_id`, `material_id`, `peso_carga`) VALUES
(1, 8, 2, 10),
(2, 8, 3, 10),
(3, 9, 2, 10),
(4, 9, 3, 10),
(5, 10, 2, 10),
(6, 10, 4, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `tipo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `tipo`) VALUES
(1, 'Cedula ciudadanía'),
(2, 'Cedula extranjera'),
(3, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(11) NOT NULL,
  `no_tarjeta_propiedad` varchar(120) NOT NULL,
  `placa` varchar(60) NOT NULL,
  `numero_motor` varchar(120) NOT NULL,
  `numero_serie` varchar(120) NOT NULL,
  `numero_chasis` varchar(120) NOT NULL,
  `capacidad_carga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `no_tarjeta_propiedad`, `placa`, `numero_motor`, `numero_serie`, `numero_chasis`, `capacidad_carga`) VALUES
(4, '13123123', 'AMD345', '213123', '12312', '123123', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_documentos`
--

CREATE TABLE `vehiculo_documentos` (
  `id` int(11) NOT NULL,
  `vehiculo_id` int(11) NOT NULL,
  `documento_id` int(11) NOT NULL,
  `fecha_expedicion` date NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculo_documentos`
--

INSERT INTO `vehiculo_documentos` (`id`, `vehiculo_id`, `documento_id`, `fecha_expedicion`, `fecha_vencimiento`) VALUES
(7, 4, 2, '2020-01-24', '2020-01-25'),
(8, 4, 1, '2020-01-30', '2020-01-30'),
(9, 4, 3, '2020-01-24', '2020-01-30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignar_ruta`
--
ALTER TABLE `asignar_ruta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asignar_ruta_conductor_id_foreign` (`conductor_id`);

--
-- Indices de la tabla `carga_material`
--
ALTER TABLE `carga_material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos_vehiculo`
--
ALTER TABLE `documentos_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registr_id_documento_foreign` (`id_documento`);

--
-- Indices de la tabla `ruta_materiales`
--
ALTER TABLE `ruta_materiales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruta_materiales_ruta_id_foreign` (`ruta_id`),
  ADD KEY `ruta_materiales_materiales_foreign` (`material_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo_documentos`
--
ALTER TABLE `vehiculo_documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehiculo_documento_id_foreing` (`documento_id`),
  ADD KEY `vehiculo_vehiculo_id_foreign` (`vehiculo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignar_ruta`
--
ALTER TABLE `asignar_ruta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `carga_material`
--
ALTER TABLE `carga_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documentos_vehiculo`
--
ALTER TABLE `documentos_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ruta_materiales`
--
ALTER TABLE `ruta_materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vehiculo_documentos`
--
ALTER TABLE `vehiculo_documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignar_ruta`
--
ALTER TABLE `asignar_ruta`
  ADD CONSTRAINT `asignar_ruta_conductor_id_foreign` FOREIGN KEY (`conductor_id`) REFERENCES `registro` (`id`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registr_id_documento_foreign` FOREIGN KEY (`id_documento`) REFERENCES `tipo_documento` (`id`);

--
-- Filtros para la tabla `ruta_materiales`
--
ALTER TABLE `ruta_materiales`
  ADD CONSTRAINT `ruta_materiales_materiales_foreign` FOREIGN KEY (`material_id`) REFERENCES `materiales` (`id`),
  ADD CONSTRAINT `ruta_materiales_ruta_id_foreign` FOREIGN KEY (`ruta_id`) REFERENCES `asignar_ruta` (`id`);

--
-- Filtros para la tabla `vehiculo_documentos`
--
ALTER TABLE `vehiculo_documentos`
  ADD CONSTRAINT `vehiculo_documento_id_foreing` FOREIGN KEY (`documento_id`) REFERENCES `documentos_vehiculo` (`id`),
  ADD CONSTRAINT `vehiculo_vehiculo_id_foreign` FOREIGN KEY (`vehiculo_id`) REFERENCES `vehiculo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
