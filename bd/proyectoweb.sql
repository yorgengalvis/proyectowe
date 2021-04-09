-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2021 a las 06:12:37
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `nombres` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`, `nombres`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'Administrador del Sistema', '2020-10-20 02:13:11', '2020-10-20 02:13:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL COMMENT 'Almacena la descripción del producto',
  `estado` varchar(1) DEFAULT NULL COMMENT 'Define si la categoria esta activa o no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena la información de las categorias de los productos de la empresa';

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Celular', 'm', '2020-10-23 02:49:47', '2020-10-23 02:49:47'),
(2, 'Informatica', NULL, '2020-10-23 02:49:47', '2020-10-23 02:49:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL COMMENT 'Almacena el nombre de la empresa',
  `quienessomos` varchar(800) DEFAULT NULL COMMENT 'Almacena la información de la empresa',
  `emailcontacto` varchar(50) DEFAULT NULL COMMENT 'Almacena el email al cual se enviaran los contactos',
  `direccion` varchar(200) DEFAULT NULL COMMENT 'Almacena la dirección de',
  `telefonocontacto` varchar(20) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena la información de la empresa.  Incluye todo lo referente a la configuración de la empresa.';

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `quienessomos`, `emailcontacto`, `direccion`, `telefonocontacto`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(0, 'MovilSec', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'admin@gemetech.co', 'Calle 22 #21-19', '3001400000', 'https://www.facebook.com/gemetech', 'gemetech', 'gemetech', '2020-10-21 15:11:55', '2021-04-09 11:11:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL COMMENT 'Registra el nombre de la empresa',
  `descripcion` varchar(500) DEFAULT NULL COMMENT 'Registra información de la descripción de la marca',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena la información de las marcas de los productos';

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'Apldfsafldsaf', '2020-10-23 02:50:09', '2020-10-23 02:50:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `referencia` varchar(20) DEFAULT NULL COMMENT 'Referencia de los productos',
  `nombre` varchar(100) DEFAULT NULL COMMENT 'Nombre del producto',
  `descripcioncorta` varchar(250) DEFAULT NULL COMMENT 'Una descripcion corta del producto',
  `detalle` text DEFAULT NULL COMMENT 'Detalle extenso de la información del producto',
  `valor` decimal(10,2) DEFAULT NULL COMMENT 'Precio del producto',
  `palabrasclave` varchar(100) DEFAULT NULL COMMENT 'Palabras claves del producto ',
  `foto` varchar(25) NOT NULL,
  `estado` varchar(1) DEFAULT NULL COMMENT 'Estado del producto',
  `categoria_id` int(11) DEFAULT NULL,
  `marca_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Almacena la información del producto';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `foto`, `titulo`, `descripcion`) VALUES
(1, 'la.jpg', '¡Siguenos en nuestras red', 'Siguenos en nuestras redes y mantente al tanto de '),
(2, 'la3.jpg', '¡Compralo ahora!', 'Compra ahora tu xiaomi mi 8 lite al mejor precio!'),
(3, 'la2.jpg', 'Medidas de proteccion', 'Ten en cuenta todas las medidas de precaucion en l');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IXFK_producto_categoria` (`categoria_id`),
  ADD KEY `IXFK_producto_marca` (`marca_id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
