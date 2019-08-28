-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-08-2019 a las 06:20:40
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spermata_pharma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(45) NOT NULL,
  `tipo_identificacion` varchar(45) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `invima` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `iva` double NOT NULL,
  `expiracion` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `nombre`, `codigo`, `tipo`, `invima`, `precio`, `iva`, `expiracion`, `foto`, `id_proveedor`) VALUES
(15, 'rivotril clonazepam', '1005838576', 'Anatiinflamatorio', '4456765dffd', 40000, 20, '2019-08-15', 'pharmaceutics/rJDARZDRE45T7yWjSQvYeYTtScHcqyMreTUjhPLf.jpeg', 1),
(16, 'ibuprofeno', '1005838571', 'Antialérgico', '4456765dffd', 300, 10, '2019-08-03', 'pharmaceutics/o8na8dUjuezCkBwaSr8rnz8GvMzL4iBHw2gkVx7B.jpeg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentosxclientes`
--

CREATE TABLE `medicamentosxclientes` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_medicamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2015_01_20_084450_create_roles_table', 1),
(36, '2015_01_20_084525_create_role_user_table', 1),
(37, '2015_01_24_080208_create_permissions_table', 1),
(38, '2015_01_24_080433_create_permission_role_table', 1),
(39, '2015_12_04_003040_add_special_role_column', 1),
(40, '2017_10_17_170735_create_permission_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Navega users', 'user.index', 'Lista los user', '2019-08-28 05:18:50', '2019-08-28 05:18:50'),
(2, 'Crea user', 'user.create', 'Registra los user', '2019-08-28 05:18:50', '2019-08-28 05:18:50'),
(3, 'Navega user', 'user.show', 'Visualizar los user', '2019-08-28 05:18:50', '2019-08-28 05:18:50'),
(4, 'edita user', 'user.edit', 'Edita los user', '2019-08-28 05:18:50', '2019-08-28 05:18:50'),
(5, 'elimina user', 'user.destroy', 'Elimina los user ', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(6, 'Navega Clientes', 'clientes.index', 'Lista los clientes', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(7, 'Crea Clientes', 'clientes.create', 'Registra los clientes', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(8, 'Navega Clientes', 'clientes.show', 'Visualizar los clientes', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(9, 'edita Clientes', 'clientes.edit', 'Edita los clientes', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(10, 'elimina Clientes', 'clientes.destroy', 'Elimina los clientes ', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(11, 'Navega roles', 'roles.index', 'Lista los roles', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(12, 'Crea roles', 'roles.create', 'Registra los roles', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(13, 'Navega roles', 'roles.show', 'Visualizar los roles', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(14, 'edita roles', 'roles.edit', 'Edita los roles', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(15, 'elimina roles', 'roles.destroy', 'Elimina los roles ', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(16, 'Navega proveedor', 'proveedores.index', 'Lista los proveedor', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(17, 'Crea proveedor', 'proveedores.create', 'Registra los proveedor', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(18, 'Navega proveedor', 'proveedores.show', 'Visualizar los proveedor', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(19, 'edita proveedor', 'proveedores.edit', 'Edita los proveedor', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(20, 'elimina proveedor', 'proveedores.destroy', 'Elimina los proveedor ', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(21, 'Navega medicamentos', 'medicamentos.index', 'Lista los medicamentos', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(22, 'Crea medicamentos', 'medicamentos.create', 'Registra los medicamentos', '2019-08-28 05:18:51', '2019-08-28 05:18:51'),
(23, 'Navega medicamentos', 'medicamentos.show', 'Visualizar los medicamentos', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(24, 'edita medicamentos', 'medicamentos.edit', 'Edita los medicamentos', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(25, 'elimina medicamentos', 'medicamentos.destroy', 'Elimina los medicamentos ', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(26, 'Navega medicamentosxclientes', 'medicamentosxclientes.index', 'Lista los medicamentosxclientes', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(27, 'Crea medicamentosxclientes', 'medicamentosxclientes.create', 'Registra los medicamentosxclientes', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(28, 'Navega medicamentosxclientes', 'medicamentosxclientes.show', 'Visualizar los medicamentosxclientes', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(29, 'edita medicamentosxclientes', 'medicamentosxclientes.edit', 'Edita los medicamentosxclientes', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(30, 'elimina medicamentosxclientes', 'medicamentosxclientes.destroy', 'Elimina los medicamentosxclientes ', '2019-08-28 05:18:52', '2019-08-28 05:18:52'),
(31, 'Visualizar roles de usuarios', 'rolescontroller.index', 'Visualiza los roles asignados a usuarios existentes ', '2019-08-28 05:18:52', '2019-08-28 05:18:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 21, 2, NULL, NULL),
(2, 27, 2, NULL, NULL),
(3, 23, 2, NULL, NULL),
(4, 26, 2, NULL, NULL),
(5, 27, 2, NULL, NULL),
(6, 6, 3, NULL, NULL),
(7, 22, 3, NULL, NULL),
(8, 21, 3, NULL, NULL),
(9, 23, 3, NULL, NULL),
(12, 7, 1, NULL, NULL),
(13, 6, 1, NULL, NULL),
(16, 9, 1, NULL, NULL),
(17, 10, 1, NULL, NULL),
(18, 8, 1, NULL, NULL),
(19, 2, 1, NULL, NULL),
(20, 4, 1, NULL, NULL),
(21, 5, 1, NULL, NULL),
(22, 24, 3, NULL, NULL),
(23, 25, 3, NULL, NULL),
(25, 21, 3, NULL, NULL),
(26, 23, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre_proveedor` varchar(45) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre_proveedor`, `direccion`, `telefono`, `pais`) VALUES
(1, 'roche', 'barrio praderas de santa rita etpa3 mz1 casa 1', '456456', 'alem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', NULL, '2019-08-28 05:18:54', '2019-08-28 05:18:54', 'all-access'),
(2, 'Cliente', 'cliente', NULL, '2019-08-28 05:18:54', '2019-08-28 05:18:54', NULL),
(3, 'Proveedor', 'proveedor', NULL, '2019-08-28 05:18:54', '2019-08-28 05:18:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 1, 21, '2019-08-28 01:45:06', '2019-08-28 01:45:06'),
(10, 2, 30, '2019-08-28 10:01:22', '2019-08-28 10:01:22'),
(12, 3, 34, '2019-08-28 07:42:43', '2019-08-28 07:42:43'),
(13, 3, 33, '2019-08-28 07:42:58', '2019-08-28 07:42:58'),
(14, 3, 31, '2019-08-28 08:19:32', '2019-08-28 08:19:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name_usuario`, `codigo`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Prof. Orville Bergnaum PhD', '', 'toberbrunner@example.net', '2019-08-27 12:12:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9xQW0sjs0W', '2019-08-27 12:12:29', '2019-08-27 12:12:29'),
(21, 'ivan', '1005838571', 'hefestos1@hotmail.com', NULL, '$2y$10$PRFO3vUlt9.wz21rwp6RC.cZI/V7OflmSfhXccjNX7QpLAtFtk4ya', 'uv8z1KEK7l3Ts0JZft96v5lBfKdnQpgKN5MC3BiOIeTyn9T6TKGrDQdhcNSY', '2019-08-27 12:17:21', '2019-08-27 12:17:21'),
(30, 'julian', '343423', 'julian1@sadadas.com', NULL, '$2y$10$3B238E30MZwn1wfBmd8KY.pdN9lE4QOQN5Q/0nIjAoJvuKkrJizwu', NULL, '2019-08-28 07:30:41', '2019-08-28 07:30:41'),
(31, 'nicolas', '1005838576', 'nicolas1@misena.edu.co', NULL, '$2y$10$qSlSpK00LCxRLTtUDqqA7eukniDM/h6sOtNpy8EN2F67iBJFS9jNu', NULL, '2019-08-28 08:03:59', '2019-08-28 08:03:59'),
(32, 'vicairo', '12345678', 'vicario@msiena.edu.co', NULL, '$2y$10$Up4tTZAV46bGrgmefaUy9eVIM7UpkZjMpO3unpK5cNhR5XJp0uHtq', NULL, '2019-08-28 09:55:11', '2019-08-28 09:55:11'),
(33, 'krishna', '100573822', 'krishna@hotmail.com', NULL, '$2y$10$fjBZjonzPN/HSfr3glSXvejpIp5n0asWb/ZVbMVr2Ky9CayB3wXhS', NULL, '2019-08-28 06:10:16', '2019-08-28 06:10:16'),
(34, 'heisinberg', '123123', 'asdasff@hotmail.com', NULL, '$2y$10$cuy64qQGJt1R1krDxvm12uAVFr08.6Wxy1v6oOvX/cR.fL6vTbXN6', NULL, '2019-08-28 06:11:22', '2019-08-28 06:11:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `medicamentosxclientes`
--
ALTER TABLE `medicamentosxclientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_cliente` (`id_cliente`),
  ADD UNIQUE KEY `id_medicamento` (`id_medicamento`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `medicamentosxclientes`
--
ALTER TABLE `medicamentosxclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `medicamentos_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medicamentosxclientes`
--
ALTER TABLE `medicamentosxclientes`
  ADD CONSTRAINT `medicamentosxclientes_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medicamentosxclientes_ibfk_2` FOREIGN KEY (`id_medicamento`) REFERENCES `medicamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
