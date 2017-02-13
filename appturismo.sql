-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2017 a las 00:22:59
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appturismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitud` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitud` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `addresses`
--

INSERT INTO `addresses` (`id`, `direccion`, `latitud`, `longitud`, `created_at`, `updated_at`) VALUES
(1, 'UNIVESIDAD FEREDICO HENRIQUEZ Y CARVAJAL, Avenida Máximo Gómez, Santo Domingo, Distrito Nacional, República Dominicana', '18.4692707', '-69.9116317', '2017-02-11 12:53:46', '2017-02-11 12:53:46'),
(2, 'Reparto Rosa, C-20, La Rosa, Santo Domingo, República Dominicana', '18.4682476', '-69.98918119999999', '2017-02-11 13:07:59', '2017-02-11 13:07:59'),
(3, 'Joaquín Balaguer, Avenida Máximo Gómez, Santo Domingo, Distrito Nacional, República Dominicana', '18.4642483', '-69.9095786', '2017-02-11 17:16:47', '2017-02-11 17:16:47'),
(4, 'Avenida Winston Churchill, Santo Domingo, Distrito Nacional, República Dominicana', '18.4738877', '-69.9425268', '2017-02-11 18:03:48', '2017-02-11 18:03:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tiempo_orden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dishes`
--

INSERT INTO `dishes` (`id`, `nombre`, `precio`, `tiempo_orden`, `created_at`, `updated_at`) VALUES
(1, 'Domplin', '220', '15', '2017-02-01 04:22:06', '2017-02-01 04:22:06'),
(2, 'Baiconeitor', '395', '10 min', '2017-02-11 17:18:07', '2017-02-11 17:18:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dish_restaurant`
--

CREATE TABLE `dish_restaurant` (
  `dish_id` int(10) UNSIGNED NOT NULL,
  `restaurant_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_01_18_204239_tabla_restarurantes_platos', 2),
(8, '2017_01_18_205420_tabla_direcciones', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adderly.p.m@gmail.com', '5890b1cf6d3a26d390c34cce1775161d2a19f4c07bde158d97b3d9934ca95e21', '2017-01-19 00:21:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_restaurante` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `especialidad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad_municipio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valoracion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`id`, `nombre`, `tipo_restaurante`, `especialidad`, `direccion`, `ciudad_municipio`, `telefono`, `valoracion`, `created_at`, `updated_at`) VALUES
(10, 'Al Sazón Merenguero', 'Ninguno', NULL, 'Reparto Rosa, C-20, La Rosa, Santo Domingo, República Dominicana', '', '8095550000', NULL, '2017-02-11 13:07:59', '2017-02-11 13:07:59'),
(11, 'Wendy''s', 'Ninguno', NULL, 'Joaquín Balaguer, Avenida Máximo Gómez, Santo Domingo, Distrito Nacional, República Dominicana', '', '8092396324', NULL, '2017-02-11 17:16:47', '2017-02-11 17:16:47'),
(12, 'JJ Comedor', 'Comida Rapida', NULL, 'Avenida Winston Churchill, Santo Domingo, Distrito Nacional, República Dominicana', 'Santo Domingo', '8299224884', NULL, '2017-02-11 18:03:48', '2017-02-11 18:03:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adderly Medina', 'adderly.p.m@gmail.com', '$2y$10$tiyuWy7wUI.3l6CZQCBz6ekRpXJkpnq0lWMQgqTCqH8xQF21r25OK', 'IPx1ypYXQx55Wspn9BUu44WFOommgcmdMczR6iM5A0Cb4ghnO6J14hjZNxWv', '2017-01-19 00:20:35', '2017-02-11 17:58:31'),
(2, 'Rossy Rosario', 'rrrosario0221@gmail.com', '$2y$10$jLAdICgSKfn.ETHQTNsvieKttQyTVm4kXftzl.sQxAxq/cNmmHPnC', 'XQh4C0OWgwv4eJ5qMbKAgVTCsegwf28iIvr2sYcPgitMbICUhiEGKCVb0ZQM', '2017-02-11 17:12:26', '2017-02-11 17:21:46'),
(3, 'Jhordanny Hernandez', 'j.jhordanny18@gmail.com', '$2y$10$03W6qFzcqtDwIJOVNUeCiOKpQSroLAg/CeQq4kKHG5zWDusumWZpG', NULL, '2017-02-11 18:00:36', '2017-02-11 18:00:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `addresses_direccion_unique` (`direccion`);

--
-- Indices de la tabla `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dish_restaurant`
--
ALTER TABLE `dish_restaurant`
  ADD PRIMARY KEY (`dish_id`,`restaurant_id`),
  ADD KEY `dish_restaurant_restaurant_id_foreign` (`restaurant_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurants_nombre_unique` (`nombre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dish_restaurant`
--
ALTER TABLE `dish_restaurant`
  ADD CONSTRAINT `dish_restaurant_dish_id_foreign` FOREIGN KEY (`dish_id`) REFERENCES `dishes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dish_restaurant_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
