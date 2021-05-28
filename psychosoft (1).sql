-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2021 a las 19:23:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psychosoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textColor` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `eventIdGoogle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`, `eventIdGoogle`, `created_at`, `updated_at`) VALUES
(1619406494680, 'fsdfsdcxvy', 'cxvzxccz', '#000000', '#FFFFFF', '2021-04-21 21:08:00', '2021-04-21 22:08:00', 'sp38di130fkpluvffnodovmle8', NULL, NULL),
(1619456418041, '777777', '555555555555', '#000000', '#FFFFFF', '2021-04-27 10:25:00', '2021-04-27 12:03:00', 'smvtnjha0q67tkpu72f2rbbpho', NULL, NULL),
(1620673667107, 'bgfvd', 'vdfvdf', '#000000', '#FFFFFF', '2021-05-10 14:08:00', '2021-05-11 15:08:00', '0i7b3u45lfb3bjl1kbj2v7ad9g', NULL, NULL),
(1620752293569, 'yhg', 'gfdf', '#000000', '#FFFFFF', '2021-05-06 11:58:00', '2021-05-12 11:00:00', '1g27qgv3dnu2pltrs0ab09gcbs', NULL, NULL),
(1620779373369, 'gtgt', 'gtt', '#000000', '#FFFFFF', '2021-05-13 19:29:00', '2021-05-14 20:29:00', '4j3u0s1ds01s2imrig4kvbs1gc', NULL, NULL),
(1620781843475, 'evento actualizado', 'prueba 1', '#000000', '#FFFFFF', '2021-06-20 20:10:00', '2021-06-20 21:11:00', 'seis3593c6cgqj8fmkvlmjhsmc', NULL, '2021-05-13 00:21:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes_medicos`
--

CREATE TABLE `expedientes_medicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `motivo_consulta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problema_actual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `crono_sintomatologia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trata_previos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnostico` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_economica` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_recreativa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_personal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hist_familiar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hist_laboral` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rela_senti_sexual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rela_interpersonales` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rela_intrapersonales` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoestima` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autosatisfacciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idealizaciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs_generales` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `expedientes_medicos`
--

INSERT INTO `expedientes_medicos` (`id`, `motivo_consulta`, `problema_actual`, `crono_sintomatologia`, `trata_previos`, `diagnostico`, `org_economica`, `org_recreativa`, `org_personal`, `hist_familiar`, `hist_laboral`, `rela_senti_sexual`, `rela_interpersonales`, `rela_intrapersonales`, `autoestima`, `autosatisfacciones`, `idealizaciones`, `obs_generales`, `paciente_id`, `created_at`, `updated_at`) VALUES
(1, 'cdscds', 'cdscds', 'cdsc', 'cdsc', 'cdsc', 'cdsc', 'cdscds', 'cds', 'cdscds', 'cdscdscds', 'cdscds', 'cdscds', 'cdsc', 'scdscds', 'cds', 'cdscdscds', 'cdscdscds', 6, NULL, NULL),
(3, 'BVBVNVBN', 'VBNVBNVBN', 'DCDSCDSCDS', 'CDSCDSCDCD', 'CDCDSCDSC', 'CDSCDSCDSCD', 'CDSCDSCDSCDS', 'CDCDSCSDC', 'CDCDSCSC', 'CDSCDCDSC', 'CDSCDSCDC', 'CDSCDCDSCDS', 'VGFBFB', 'BFBFGBGB', 'BGFBGBGF', 'BGFBGFBGF', 'BFBGFBGFB', 6, '2021-04-13 19:29:58', '2021-04-13 19:29:58'),
(4, 'ghfhgfhgfhgfhgf', '765756756756', 'gtgtgtgt', 'hnnnhnh', 'nhnhgnhnhg', 'nhnh', 'nhnghnh', 'nhgnhnhgnhg', 'nhgnghnh', 'nhnhnhgnh', 'kkkj', 'yjyjyj', 'jyjyjy', 'jyyjyjyj', 'mymymym', 'mymymymymymhn', 'hnhfvdfdv', 6, '2021-04-13 20:53:52', '2021-04-15 18:14:54'),
(5, 'mjhmjhm', 'mjhmjhmjhm', 'mjhmjhmjh', 'mjhmjhm', 'mjhmjhmjh', 'mjhmjhmjhm', 'mjhmjhmhjmjh', 'jmjhmjhmjhm', 'mjhmjhmjhm', 'mjhmjhmjhmjh', 'mjhmjhmjhmjh', 'mjhmjhmjhm', 'mjmjhmjhmh', 'mjhmjhmjhm', 'mjhmhjmjhm', 'mjmjhmjhm', 'mjhmjhmhjmjhmhjmjhmjh', 1, '2021-04-13 22:15:37', NULL),
(6, 'vcxvcx', 'vcxvcxv', 'cxvcxvcx', 'vcxvxcvc', 'vcxvcxv', 'vcxvcx', 'xvcxvcx', 'cvcxvcxv', 'cxvcxv', 'cxvcxvcxv', 'cxvcxvcx', 'cxvcxvcxv', 'vcxvxcvcx', 'vcxvcxvcx', 'vcxvcxv', 'xvcvcxvxcv', 'vxcvcxvcxvcxvcxv', 7, '2021-05-24 02:16:24', NULL),
(7, 'Edit from Android', 'bvcvbvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvdkdkdkdkdjdjjdjddjdjjdjd', 'qss', 'cxvvcv', 'edit 2', 'cxv edit 3', 'vcv', 'cvcvcv', 'vcxvcx', 'cvcxvxv', 'cvcv', 'vcxvcxv', 'vcxvcv', 'vcvcx', 'vcvcx', 'vxvcxv', 'cxvcxv', 3, '2021-05-24 03:50:12', '2021-05-25 00:48:52'),
(10, 'mj,kjmhnbgf', 'hnjmk,jhmnbgfhj', 'mkmhnbfv', 'fbnbfvd', 'bhnjmnbvfdcv', 'gbnhjmnbgfv', 'hnjmnbgfvhjm', 'hmngfhgbf', 'vdfnhbgfvd', 'gfdgbnbgfd', 'cdscd', 'ghgf', 'vfbnhjmnbfv', 'cvbnbvc', 'vbnnh', 'bhnbfvdc', 'bfvdcvbnbvf', 2, '2021-05-25 15:08:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `escolaridad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ocupacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adicciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vive_con` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paciente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ficha_medica`
--

INSERT INTO `ficha_medica` (`id`, `escolaridad`, `ocupacion`, `estado_civil`, `religion`, `adicciones`, `vive_con`, `paciente_id`, `created_at`, `updated_at`) VALUES
(1, 'Preparatoria', 'Estudiante', 'Soltero(a)', 'Catolica', 'N/A', 'Padres', 1, NULL, NULL),
(2, 'Secundaria', 'tt', 'Divociado(a)', 'gtgtgt', 'na', 'nhggnhnh', 2, NULL, NULL),
(3, 'Primaria', '676765mjm', 'Divociado(a)', 'mjhjhm', 'mjhmjhm', 'mjhmhjmjh', 3, NULL, NULL),
(4, 'Primaria', 'gfhgfh', 'Divociado(a)', 'hgfh', 'hfg', 'hfghfg', 4, NULL, NULL),
(5, 'Primaria', 'gfhgfh', 'Divociado(a)', 'hgfh', 'hfg', 'hfghfg', 5, NULL, NULL),
(6, 'Preescolar', 'cdsc', 'Viudo(a)', 'cdscds', 'cdsc', 'cdsc', 6, NULL, NULL),
(7, 'Preparatoria', 'Ingeniero', 'Casado(a)', 'N/A', 'N/A', 'Esposa', 7, '2021-05-24 00:55:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_02_211446_create_sessions_table', 1),
(7, '2021_04_02_212716_add_new_fields_to_user_table', 1),
(8, '2021_04_02_212855_create_eventos_table', 1),
(9, '2021_04_07_003559_create_pacientes_table', 2),
(12, '2021_04_07_003833_create_expediente_medicos_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `apellidos`, `edad`, `domicilio`, `fecha_nacimiento`, `telefono_correo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Juanfgv', 'Sandoval', 28, 'nhnhnhnhn', '19/08/1999', '3461023003', 'A', NULL, '2021-05-21 23:48:54'),
(2, 'Horacio', 'Perez', 36, 'Morelos #21', '20/04/1995', '3461074689', 'A', NULL, '2021-05-21 19:20:50'),
(3, 'Juane', 'cdscdsdsc', 34, 'cdscdcdscds', '23/09/2004', '3461023763', 'A', NULL, '2021-05-25 02:29:22'),
(4, 'FernandoV1', 'V1', 23, 'V1', '16/07/2005', '3461023078', 'I', NULL, '2021-04-13 00:57:02'),
(5, 'Pedro', 'nhgnghnhg', 23, 'ngnghn', '16/07/2005', '3461568903', 'I', NULL, NULL),
(6, 'Alvaro', 'Donoso', 34, 'bgfbgf', '12/06/1998', '3467823003', 'A', NULL, NULL),
(7, 'Sergio', 'Donoso Ramirez', 26, 'Morelos #111', '02/03/1995', '4921684595', 'A', '2021-05-24 00:55:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('varo.donoso.ramirez@gmail.com', '$2y$10$b.qi7DbCPTRj.ai3M1qF5OdnbSVuYNwNIIE/xGJjDMmBqbw22ocv2', '2021-05-11 15:03:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Android_Development', 'c8584dd2034adc7e6596ac4be6a74ce2d42e6728431469a279e5fbb5bd3c2ba4', '[\"*\"]', '2021-05-25 00:46:46', '2021-05-19 01:20:51', '2021-05-25 00:46:46'),
(2, 'App\\Models\\User', 1, 'Android_Development', '43721dd3c760ec91c36b1170ea19229fbaf794b433d82e26e657f0bbaf1e8329', '[\"*\"]', '2021-05-19 01:29:03', '2021-05-19 01:29:02', '2021-05-19 01:29:03'),
(4, 'App\\Models\\User', 1, 'Android_Development', '6ece848760a7e86bd18c79d6b3ecc43d9c00ee00e686ff29a348263a7ecdcd5b', '[\"*\"]', '2021-05-19 01:35:15', '2021-05-19 01:35:14', '2021-05-19 01:35:15'),
(5, 'App\\Models\\User', 1, 'Android_Development', '12a794f523c5486ed7043c77e60c5cb78bf79d74fcf0187fc5596017625dd18b', '[\"*\"]', '2021-05-19 01:36:33', '2021-05-19 01:36:32', '2021-05-19 01:36:33'),
(6, 'App\\Models\\User', 1, 'Android_Development', 'a8af4ab7edfec8fbf56a6fb13af77efe8e11414daa252ac1c1026e81def85e7a', '[\"*\"]', '2021-05-19 01:44:08', '2021-05-19 01:43:54', '2021-05-19 01:44:08'),
(7, 'App\\Models\\User', 1, 'Android_Development', 'f1957cf9b4dbeadc6727bf52f5963b3b2734e8f0fef5ac6224398b0bfdb7c2a3', '[\"*\"]', '2021-05-25 00:33:36', '2021-05-19 22:05:50', '2021-05-25 00:33:36'),
(8, 'App\\Models\\User', 1, 'Android_Development', 'cb95783131e247d5090021400b7fa47d2af56c85b4a7588a3df4b383d575e7e0', '[\"*\"]', '2021-05-19 23:13:44', '2021-05-19 23:12:58', '2021-05-19 23:13:44'),
(9, 'App\\Models\\User', 1, 'Android_Development', 'a68072f0b33efe2bb32bc1de78f802df88c8fbda81ac04829734c0b802f69e3d', '[\"*\"]', '2021-05-19 23:27:31', '2021-05-19 23:27:25', '2021-05-19 23:27:31'),
(10, 'App\\Models\\User', 1, 'Android_Development', 'cb4bfd063bfa504c139a75708a425b197371551261cfa302ed85233e87e41de5', '[\"*\"]', '2021-05-19 23:29:47', '2021-05-19 23:29:46', '2021-05-19 23:29:47'),
(11, 'App\\Models\\User', 1, 'Android_Development', 'ff797dcaf9e8a8339936e23745e91d895b1c6ee41eb4175051ab4ad47ff1d444', '[\"*\"]', '2021-05-19 23:32:29', '2021-05-19 23:32:21', '2021-05-19 23:32:29'),
(12, 'App\\Models\\User', 1, 'Android_Development', 'a5a8ea182a70b3eee1c933af31795eb1ebd87b420fbb4a9568d4eef375f13ea6', '[\"*\"]', '2021-05-19 23:34:28', '2021-05-19 23:34:21', '2021-05-19 23:34:28'),
(14, 'App\\Models\\User', 1, 'Android_Development', 'a58b00dc10fb4824d07a284423213206ea4823c507fccba8f95d03e445b71f53', '[\"*\"]', '2021-05-19 23:49:54', '2021-05-19 23:40:39', '2021-05-19 23:49:54'),
(15, 'App\\Models\\User', 1, 'Android_Development', 'd7904fa93d469bf9e25b00adf2de3233e01940a7d1d9ca46f7561a3f2f33d29e', '[\"*\"]', '2021-05-20 00:01:15', '2021-05-20 00:01:08', '2021-05-20 00:01:15'),
(18, 'App\\Models\\User', 1, 'Android_Development', '5f1d24a3e8c32f90ed4c83ef6a52e024e13827d1e007608d1fb39e572beab49b', '[\"*\"]', '2021-05-20 00:07:18', '2021-05-20 00:07:14', '2021-05-20 00:07:18'),
(19, 'App\\Models\\User', 1, 'Android_Development', 'cf2329a88b30e818e948f28648be68a4c29b901ce8057af62a6fe8ad96b70f95', '[\"*\"]', '2021-05-20 01:09:14', '2021-05-20 01:09:09', '2021-05-20 01:09:14'),
(20, 'App\\Models\\User', 1, 'Android_Development', 'b46bebe21b6b3dcbeb2d5f55e4c76911feddb175689133cb4c05a090d47ba20b', '[\"*\"]', '2021-05-20 01:12:58', '2021-05-20 01:12:53', '2021-05-20 01:12:58'),
(22, 'App\\Models\\User', 1, 'Android_Development', 'fd28b4756c563c8a18193e81aaa7f5841e050835e10d580b588267d209e8339c', '[\"*\"]', '2021-05-20 01:17:56', '2021-05-20 01:17:44', '2021-05-20 01:17:56'),
(23, 'App\\Models\\User', 1, 'Android_Development', '80752ee09fd7676d5ceae1013cebf44cbf506055605e9520ba4f9e86fc1ec82c', '[\"*\"]', '2021-05-20 01:39:53', '2021-05-20 01:28:22', '2021-05-20 01:39:53'),
(25, 'App\\Models\\User', 1, 'Android_Development', 'fd062d4cfd75fb313ebfbd1a2230956004c7ddd924a4baaae62f58ae8e5dfb42', '[\"*\"]', '2021-05-20 21:54:22', '2021-05-20 21:54:17', '2021-05-20 21:54:22'),
(26, 'App\\Models\\User', 1, 'Android_Development', 'ce787465bea9363d7815da9a9a4123bf7f4a7199a2d5f0edc133946d4c216ca5', '[\"*\"]', '2021-05-20 22:14:26', '2021-05-20 22:03:27', '2021-05-20 22:14:26'),
(27, 'App\\Models\\User', 1, 'Android_Development', 'f434f43338ea8bbbac377e38c30e5dbd854d4322dac3558b39fae4e94d6b5ea4', '[\"*\"]', '2021-05-20 22:28:20', '2021-05-20 22:21:48', '2021-05-20 22:28:20'),
(28, 'App\\Models\\User', 1, 'Android_Development', 'be5c752235cc145fb8963a428b41250a0fe0de48684796f38743169611af402f', '[\"*\"]', '2021-05-20 22:37:40', '2021-05-20 22:33:44', '2021-05-20 22:37:40'),
(29, 'App\\Models\\User', 1, 'Android_Development', '56c8e832b6b18de52a2ce65c16a9f0ea10e772153771d25293450fed5ee89321', '[\"*\"]', '2021-05-20 22:45:42', '2021-05-20 22:45:29', '2021-05-20 22:45:42'),
(30, 'App\\Models\\User', 1, 'Android_Development', '1615b85c153194fd406f2fe1575e94c0ef518071e868f507bc61fe46a0f6f136', '[\"*\"]', '2021-05-20 23:13:00', '2021-05-20 23:07:22', '2021-05-20 23:13:00'),
(31, 'App\\Models\\User', 1, 'Android_Development', 'e2bd9e8a8207e8ab847a0e9c704c0263c83f8fa90c40e8a9abf90644dbfe58d3', '[\"*\"]', '2021-05-20 23:15:09', '2021-05-20 23:14:10', '2021-05-20 23:15:09'),
(32, 'App\\Models\\User', 1, 'Android_Development', '3bb64f8927f1ed7d435a78265a268a7658bc2287474986e2bd66a1678bcb49dc', '[\"*\"]', '2021-05-20 23:25:18', '2021-05-20 23:20:39', '2021-05-20 23:25:18'),
(33, 'App\\Models\\User', 1, 'Android_Development', 'aa1d4156933ac32319974896ed823ad9a20108c7a9f3dc785f7cc1c9c6b91cca', '[\"*\"]', '2021-05-21 00:15:46', '2021-05-20 23:48:18', '2021-05-21 00:15:46'),
(34, 'App\\Models\\User', 1, 'Android_Development', '4a4ce9b9b4a62bf82ca6cc9e160296d5977aa61cbf956c645a52650eef4d7797', '[\"*\"]', '2021-05-21 00:28:40', '2021-05-21 00:28:34', '2021-05-21 00:28:40'),
(35, 'App\\Models\\User', 1, 'Android_Development', '3b5732c12c8c2bc48d9b63ef78b8c21c4bc0b2e9b2ff0bd2b591f52abd7e3ec7', '[\"*\"]', NULL, '2021-05-21 18:46:11', '2021-05-21 18:46:11'),
(36, 'App\\Models\\User', 1, 'Android_Development', 'd2af6b42e4888923444bcac7e50a0e7330680bd048c08f428d40ce7a25ff4cc5', '[\"*\"]', '2021-05-21 18:47:17', '2021-05-21 18:46:14', '2021-05-21 18:47:17'),
(37, 'App\\Models\\User', 1, 'Android_Development', '6d5b9263752bf4f5ce90798add844deee203b09ce97b30c944c2384367efba08', '[\"*\"]', '2021-05-21 19:00:45', '2021-05-21 18:52:57', '2021-05-21 19:00:45'),
(38, 'App\\Models\\User', 1, 'Android_Development', '8a62d50a883b197ecfe6b5caedd98e071b3a3c5097f74dceff7512342e3cdd1f', '[\"*\"]', '2021-05-21 19:09:21', '2021-05-21 19:04:38', '2021-05-21 19:09:21'),
(39, 'App\\Models\\User', 1, 'Android_Development', '3e3daf0f34419661606e51ffa5a149dd6863b875f30a87339a04fca3209f661e', '[\"*\"]', '2021-05-21 19:14:08', '2021-05-21 19:13:23', '2021-05-21 19:14:08'),
(40, 'App\\Models\\User', 1, 'Android_Development', 'd307b341cf43021b8dc097e95931005c703673ff6ec296d6233ff9b39da98aa6', '[\"*\"]', '2021-05-21 19:21:00', '2021-05-21 19:20:02', '2021-05-21 19:21:00'),
(41, 'App\\Models\\User', 1, 'Android_Development', 'bfe4279da13835e0a00a8309180ef479c1bfdb314f8952c27e8f6f17a751003f', '[\"*\"]', NULL, '2021-05-21 23:22:58', '2021-05-21 23:22:58'),
(42, 'App\\Models\\User', 1, 'Android_Development', 'f0eb350d87efdd432cddd17879152ec617dcfda9305516ae67786b2e95c5e577', '[\"*\"]', NULL, '2021-05-21 23:23:00', '2021-05-21 23:23:00'),
(43, 'App\\Models\\User', 1, 'Android_Development', 'f7ba7dcd0e22f35ee9a9dcec95f8be3d0ce7e6939bb11013122dd6ed5de5b787', '[\"*\"]', NULL, '2021-05-21 23:23:00', '2021-05-21 23:23:00'),
(44, 'App\\Models\\User', 1, 'Android_Development', '67d39a83633a59ccfb1c5d439cd367f48953744075f20fe39113aeaa1a8101ce', '[\"*\"]', NULL, '2021-05-21 23:23:01', '2021-05-21 23:23:01'),
(45, 'App\\Models\\User', 1, 'Android_Development', '2d0da30ac88e06a2befa10b390af1b815a8062e272495a1b26dfce7009e40cfe', '[\"*\"]', '2021-05-21 23:23:08', '2021-05-21 23:23:06', '2021-05-21 23:23:08'),
(46, 'App\\Models\\User', 1, 'Android_Development', '78f582e31d7a506e7a1b86b1c9c527860ed8867a67a4c40bbc6136689b52ff46', '[\"*\"]', '2021-05-21 23:24:31', '2021-05-21 23:24:30', '2021-05-21 23:24:31'),
(47, 'App\\Models\\User', 1, 'Android_Development', '34050d8bd837c84fcf59d764566c4b5081a944f41eaf3aa8da60e4449621d1ba', '[\"*\"]', '2021-05-21 23:25:52', '2021-05-21 23:25:51', '2021-05-21 23:25:52'),
(48, 'App\\Models\\User', 1, 'Android_Development', 'ca2f3eb93e62174eb41f269ef81e842b09016ca94faf742d678100d6386a78ae', '[\"*\"]', '2021-05-21 23:28:33', '2021-05-21 23:28:31', '2021-05-21 23:28:33'),
(49, 'App\\Models\\User', 1, 'Android_Development', 'cb81cc237fba3ef3e0e36f2a3ced428157b07e9ff77281d7637298eb5c0fb68d', '[\"*\"]', '2021-05-21 23:32:19', '2021-05-21 23:30:49', '2021-05-21 23:32:19'),
(50, 'App\\Models\\User', 1, 'Android_Development', '8cdd58b0b31270bdddbe1c3e758ddb837bfa531df2dda57c9695aa6d16283c90', '[\"*\"]', '2021-05-21 23:39:10', '2021-05-21 23:38:32', '2021-05-21 23:39:10'),
(51, 'App\\Models\\User', 1, 'Android_Development', 'de5dedc5299cea33beedca6618015283ab8b653f3e0e4a1fd983de9c9e79bda8', '[\"*\"]', '2021-05-21 23:41:16', '2021-05-21 23:40:58', '2021-05-21 23:41:16'),
(52, 'App\\Models\\User', 1, 'Android_Development', '3c57d3d659d1c82dc27e7b2c0e2e23d5543202d6c1ec74d207fdab068d62e1fc', '[\"*\"]', '2021-05-21 23:43:38', '2021-05-21 23:43:37', '2021-05-21 23:43:38'),
(53, 'App\\Models\\User', 1, 'Android_Development', 'c1403ab4859228f99fd2013256bf138986c26bc1525155b091c2d8e64361c21c', '[\"*\"]', '2021-05-21 23:58:22', '2021-05-21 23:47:50', '2021-05-21 23:58:22'),
(54, 'App\\Models\\User', 1, 'Android_Development', 'f5de569c21a130d8191f6825972f1232b75b2f7e0d0d3bd11c21d7069038fec4', '[\"*\"]', '2021-05-22 00:01:41', '2021-05-22 00:01:37', '2021-05-22 00:01:41'),
(55, 'App\\Models\\User', 1, 'Android_Development', '4a572f839095ab8adf21d239ccbef94147aa124b34fde39b9e8f505050d90696', '[\"*\"]', '2021-05-22 00:03:12', '2021-05-22 00:03:04', '2021-05-22 00:03:12'),
(56, 'App\\Models\\User', 1, 'Android_Development', '803c315732a390138aa1c4e15382fe8c9b34315a0df788d1cad5316caf5c3e50', '[\"*\"]', '2021-05-22 00:04:28', '2021-05-22 00:04:27', '2021-05-22 00:04:28'),
(57, 'App\\Models\\User', 1, 'Android_Development', '21a94ea1aac9134491689fadc1897fb0fad5e0d7069b369771009f824c2452b4', '[\"*\"]', '2021-05-22 00:06:23', '2021-05-22 00:06:22', '2021-05-22 00:06:23'),
(58, 'App\\Models\\User', 1, 'Android_Development', 'dc0fcd541e0c9d1e6a72395361595d5726b73540af50f4d3b5b6520a6551f345', '[\"*\"]', NULL, '2021-05-22 00:08:29', '2021-05-22 00:08:29'),
(59, 'App\\Models\\User', 1, 'Android_Development', '37f7b684bdacfcbdde454e51baf81e897a6152f5abd5329ac292216ee2b1b86a', '[\"*\"]', NULL, '2021-05-22 00:49:30', '2021-05-22 00:49:30'),
(60, 'App\\Models\\User', 1, 'Android_Development', '838038ba3c4467b580e548549a3dc8a183987c5a2ed4cacd95c5e7a3a70030b8', '[\"*\"]', '2021-05-22 00:50:02', '2021-05-22 00:50:01', '2021-05-22 00:50:02'),
(61, 'App\\Models\\User', 1, 'Android_Development', '090cf048414c72b737c869aaff1f20f991e9e98a9671a8de8f4928b4823eb590', '[\"*\"]', '2021-05-22 00:53:17', '2021-05-22 00:53:16', '2021-05-22 00:53:17'),
(62, 'App\\Models\\User', 1, 'Android_Development', '04647c84df0051acad258370a3d96ea434d5152089268aa10e96f8c1ca29d7a9', '[\"*\"]', '2021-05-22 01:18:39', '2021-05-22 01:14:14', '2021-05-22 01:18:39'),
(63, 'App\\Models\\User', 1, 'Android_Development', '06216e0c487de0af0180c5a8110213614775b4af8dcc29ecb4b5a7e73ce8b1a9', '[\"*\"]', '2021-05-22 01:33:38', '2021-05-22 01:33:37', '2021-05-22 01:33:38'),
(64, 'App\\Models\\User', 1, 'Android_Development', '87dc8dccb35071abd45134eca5154e69da6eecde5d89d012c5c4636c3e084850', '[\"*\"]', '2021-05-22 01:57:23', '2021-05-22 01:36:38', '2021-05-22 01:57:23'),
(65, 'App\\Models\\User', 1, 'Android_Development', 'e5a32bef45b763b17ba93682729f898818a0aee3905042307f68f3b5291b771e', '[\"*\"]', '2021-05-22 02:08:43', '2021-05-22 02:01:10', '2021-05-22 02:08:43'),
(66, 'App\\Models\\User', 1, 'Android_Development', 'e86ac676f806e6cde709891fffea00f5c7eddc9168dae3f9aed6006e74fc8a84', '[\"*\"]', '2021-05-22 02:50:13', '2021-05-22 02:46:08', '2021-05-22 02:50:13'),
(67, 'App\\Models\\User', 1, 'Android_Development', '65f7e7453aa46dd3db4b2abdbe168e7bbc792864bcc1cc5a9da4c2b16b76be69', '[\"*\"]', '2021-05-23 00:07:21', '2021-05-23 00:05:30', '2021-05-23 00:07:21'),
(68, 'App\\Models\\User', 1, 'Android_Development', 'efd595e89846d88903686904ba043ddcfe8883e285a043bcded4e644f1c7ba10', '[\"*\"]', '2021-05-23 00:12:23', '2021-05-23 00:12:19', '2021-05-23 00:12:23'),
(69, 'App\\Models\\User', 1, 'Android_Development', '1b41f4dce5b44622dcdfd26f6488fa4b6abd6de6b023b2d7dd070b6a258c83e2', '[\"*\"]', '2021-05-24 00:39:05', '2021-05-24 00:38:58', '2021-05-24 00:39:05'),
(70, 'App\\Models\\User', 1, 'Android_Development', '84cad8cb53c12b8133d174190da38d36ada3cb736cb4919be68e67c224051833', '[\"*\"]', NULL, '2021-05-24 19:04:30', '2021-05-24 19:04:30'),
(71, 'App\\Models\\User', 1, 'Android_Development', 'be7418751d98b7931fd0b18ad9dfc57ce67a63991a7560b2074c86d2fa72f698', '[\"*\"]', NULL, '2021-05-24 19:04:32', '2021-05-24 19:04:32'),
(72, 'App\\Models\\User', 1, 'Android_Development', '26457d9c1ac18bde8184dc5d1e3621149726201176ecc3dbea33ec3e95d2b11b', '[\"*\"]', '2021-05-24 19:06:09', '2021-05-24 19:04:34', '2021-05-24 19:06:09'),
(73, 'App\\Models\\User', 1, 'Android_Development', '3265d14e9b13abeb9c6363cacdbe33f41d6fee31e433a1504f1ff6e87b59d88f', '[\"*\"]', '2021-05-24 19:35:36', '2021-05-24 19:24:43', '2021-05-24 19:35:36'),
(74, 'App\\Models\\User', 1, 'Android_Development', '2897d96c6e4f28077c3fb23e3aa744062b76f3bbd3845ef0e9f0440704853b52', '[\"*\"]', '2021-05-24 19:50:03', '2021-05-24 19:42:56', '2021-05-24 19:50:03'),
(75, 'App\\Models\\User', 1, 'Android_Development', '2c33ee5503848a0b9c97feda897dfd73e0bcaa9175f49c59f9deb915964a0aa5', '[\"*\"]', '2021-05-24 20:05:00', '2021-05-24 20:02:27', '2021-05-24 20:05:00'),
(76, 'App\\Models\\User', 1, 'Android_Development', '0c77dcbf9ab68edc8b9341c45356e020fe9628b7e3633c15af1aa662aa7e72c8', '[\"*\"]', '2021-05-24 20:08:15', '2021-05-24 20:08:07', '2021-05-24 20:08:15'),
(77, 'App\\Models\\User', 1, 'Android_Development', '3c0d79de0fa13b1caaf0607fb0a93e349886600d6b24e89f21563e01d86676b3', '[\"*\"]', '2021-05-24 20:09:49', '2021-05-24 20:08:56', '2021-05-24 20:09:49'),
(78, 'App\\Models\\User', 1, 'Android_Development', 'd00ab5cc7ac230db57043656f68efc247874ad8752fab627324a595ae80a9283', '[\"*\"]', '2021-05-24 20:11:34', '2021-05-24 20:11:27', '2021-05-24 20:11:34'),
(79, 'App\\Models\\User', 1, 'Android_Development', 'c10a680ceb610e5eb08d3b49373229b5fd9ef4487f6f24f2c8c96922517e2365', '[\"*\"]', '2021-05-24 20:14:54', '2021-05-24 20:14:08', '2021-05-24 20:14:54'),
(80, 'App\\Models\\User', 1, 'Android_Development', 'feb03893af0c4286dff5cdb0006ee0b6d3b42c0a1153de177d1dae6f0353894b', '[\"*\"]', '2021-05-24 21:58:47', '2021-05-24 21:48:16', '2021-05-24 21:58:47'),
(81, 'App\\Models\\User', 1, 'Android_Development', '12889346b7b8707cc0d2105817b332b0b994ce739efe0ea660e26b61748635d5', '[\"*\"]', '2021-05-24 22:35:00', '2021-05-24 22:34:07', '2021-05-24 22:35:00'),
(82, 'App\\Models\\User', 1, 'Android_Development', '173fbe0ba43684434cb9e6e679e2b9f5337a6a85fd484f3ec999a66937832228', '[\"*\"]', '2021-05-24 22:47:12', '2021-05-24 22:35:09', '2021-05-24 22:47:12'),
(83, 'App\\Models\\User', 1, 'Android_Development', 'ecb4d5afe5736f5001bc1a2122aaa9ccfff60397160f3d3f52ba7eed928a1446', '[\"*\"]', '2021-05-24 23:11:58', '2021-05-24 23:05:50', '2021-05-24 23:11:58'),
(84, 'App\\Models\\User', 1, 'Android_Development', '77b6fd3241937ea52af4c83639f061e1ecb99bf868e5a9b36a1c371f38f12f7d', '[\"*\"]', '2021-05-24 23:24:50', '2021-05-24 23:24:46', '2021-05-24 23:24:50'),
(85, 'App\\Models\\User', 1, 'Android_Development', '27119a10f0429a7d0a92dc6677d59eb4db3a40f5c351095d90da84f6afdf5b65', '[\"*\"]', '2021-05-24 23:25:15', '2021-05-24 23:25:12', '2021-05-24 23:25:15'),
(86, 'App\\Models\\User', 1, 'Android_Development', '6fc8739499165f38cfce24b270149a02a7e2fda87fc62652992117ab6385ff98', '[\"*\"]', '2021-05-24 23:26:26', '2021-05-24 23:26:21', '2021-05-24 23:26:26'),
(87, 'App\\Models\\User', 1, 'Android_Development', '8d5d8b466e4c1a4a3496ede5e42a245d19fe4d60e79c38aac80c7c1d225eebe8', '[\"*\"]', '2021-05-24 23:30:26', '2021-05-24 23:30:22', '2021-05-24 23:30:26'),
(88, 'App\\Models\\User', 1, 'Android_Development', '671500cfa1f37861c928f4cc9631af1caa7f9b1ab5f41dec293688f8a2b10547', '[\"*\"]', '2021-05-24 23:33:37', '2021-05-24 23:32:07', '2021-05-24 23:33:37'),
(89, 'App\\Models\\User', 1, 'Android_Development', 'edd109ce29f78df515a0aed489c9badf4a07364086dcee9dc000ea92b6869608', '[\"*\"]', '2021-05-24 23:43:53', '2021-05-24 23:42:01', '2021-05-24 23:43:53'),
(90, 'App\\Models\\User', 1, 'Android_Development', '5f05c9c7a0b52254c144e8a5b4b295fab4c0ce9ec65cb35820a6f6c994327f8b', '[\"*\"]', '2021-05-24 23:51:01', '2021-05-24 23:44:59', '2021-05-24 23:51:01'),
(91, 'App\\Models\\User', 1, 'Android_Development', '95853c04cdd15a6f2702a3d95339ed9023379923898c9fe67e47ab7606793c37', '[\"*\"]', '2021-05-24 23:52:27', '2021-05-24 23:51:19', '2021-05-24 23:52:27'),
(92, 'App\\Models\\User', 1, 'Android_Development', '631f9ccbe84d935a4692021907381130b776c9b0c835d5962aed8d84591aa468', '[\"*\"]', '2021-05-24 23:59:31', '2021-05-24 23:59:29', '2021-05-24 23:59:31'),
(93, 'App\\Models\\User', 1, 'Android_Development', '2df7e61b7a6953f0774896bb288affcb68e4defdb82a23bfcd26b408956209c5', '[\"*\"]', '2021-05-25 00:01:52', '2021-05-25 00:00:29', '2021-05-25 00:01:52'),
(94, 'App\\Models\\User', 1, 'Android_Development', 'a11d73e4ac260d4f92d1c6536423fd9344764a7141ff41c76986d3ad5290d820', '[\"*\"]', '2021-05-25 00:27:48', '2021-05-25 00:23:44', '2021-05-25 00:27:48'),
(95, 'App\\Models\\User', 1, 'Android_Development', '01841d70075df99c75b2a1126b1864b19376554b654e9b650a01c7f1090e4de2', '[\"*\"]', '2021-05-25 00:34:10', '2021-05-25 00:31:45', '2021-05-25 00:34:10'),
(96, 'App\\Models\\User', 1, 'Android_Development', 'cb4f75b237095a055491478270428cf52b66671355e6f43f614288f0ec1bb593', '[\"*\"]', '2021-05-25 00:51:01', '2021-05-25 00:48:01', '2021-05-25 00:51:01'),
(97, 'App\\Models\\User', 1, 'Android_Development', '506bd7d2aedad55adf466a1e8fe2629848e30669c0821ac8ab6cb47b746d3078', '[\"*\"]', '2021-05-25 01:14:51', '2021-05-25 00:51:12', '2021-05-25 01:14:51'),
(98, 'App\\Models\\User', 1, 'Android_Development', '279c2fb56042ae211f65481323382a8c52193acdb275946720d6d1377a44d3bc', '[\"*\"]', NULL, '2021-05-25 02:18:03', '2021-05-25 02:18:03'),
(99, 'App\\Models\\User', 1, 'Android_Development', '1c36638d90cb4b5634bc6937f04c435c85159c30634c619458d0bc9a7b4b170f', '[\"*\"]', NULL, '2021-05-25 02:18:04', '2021-05-25 02:18:04'),
(100, 'App\\Models\\User', 1, 'Android_Development', 'b62dab22d33efd33b3329a81b6935dcbc3316c78f53b16bf39828dbe7c780392', '[\"*\"]', NULL, '2021-05-25 02:18:05', '2021-05-25 02:18:05'),
(101, 'App\\Models\\User', 1, 'Android_Development', 'd4e8e533265e3172bda0de497bc51fcd9318f1980a1d522d721ec77ea8ac0d63', '[\"*\"]', NULL, '2021-05-25 02:18:06', '2021-05-25 02:18:06'),
(102, 'App\\Models\\User', 1, 'Android_Development', '2dc4884a32301be57e87936b70f62056be80ff1b4df42500906c0c5929e1a71d', '[\"*\"]', NULL, '2021-05-25 02:18:06', '2021-05-25 02:18:06'),
(103, 'App\\Models\\User', 1, 'Android_Development', 'e166e09d3c2796efa328536f0eb2b659e6ab27be7a211d714eccbb4394f49c56', '[\"*\"]', NULL, '2021-05-25 02:18:07', '2021-05-25 02:18:07'),
(104, 'App\\Models\\User', 1, 'Android_Development', 'e09f1f82a4481d3659b1b64e96360a3f594dd035e72c3c3d66882f20347cf18e', '[\"*\"]', '2021-05-25 02:19:17', '2021-05-25 02:18:27', '2021-05-25 02:19:17'),
(105, 'App\\Models\\User', 1, 'Android_Development', '88f3f958c13ae64cab47210a9b56e39f6b95990e65ada16ce27c6d938c61e5b2', '[\"*\"]', '2021-05-25 02:34:57', '2021-05-25 02:24:09', '2021-05-25 02:34:57'),
(106, 'App\\Models\\User', 1, 'Android_Development', '1b3ae3602eaf05d816c023fb3257cc478fa57f960d7dda83a76bba69131343cd', '[\"*\"]', '2021-05-25 02:49:49', '2021-05-25 02:36:02', '2021-05-25 02:49:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PX4MNTFQI3CrMrEkhb3HuC5DgGxLSjXulit3ekpq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36 Edg/90.0.818.66', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWG05TEJFbXFwYXRCQU5iRnNaMTBCZE1LM3NZUjNtUXdhd25aUGU5QSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1621956474);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `email`, `email_verified_at`, `phone`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Juan', 'Donoso', 'varo.donoso.ramirez@gmail.com', NULL, '3461023003', '$2y$10$IWuRBDdKtpO.iaYYBlyIheZEDXIS4l7YCJgTnOAbl31eghZ7Rqoiq', NULL, NULL, 'pKHIarP5SZjbXt88npRSEGPPKxxgsuRaKBqCyAi2VgiHXMMlDgozxhuF9D1M', NULL, NULL, '2021-04-03 03:47:56', '2021-05-22 23:11:42'),
(2, 'Sergio', 'Donoso', 'sergio.donoso.ramirez95@gmail.com', NULL, '3467008546', '$2y$10$tbu9DW56X7TJuaUgLOOkhO7AIzojiLVisCw409AHLq9/1jT7HHov.', NULL, NULL, NULL, NULL, NULL, '2021-05-19 17:42:08', '2021-05-19 17:42:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expedientes_medicos`
--
ALTER TABLE `expedientes_medicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expedientes_medicos_paciente_id_foreign` (`paciente_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ficha_medica_paciente_id_unique` (`paciente_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pacientes_telefono_correo_unique` (`telefono_correo`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1620781843476;

--
-- AUTO_INCREMENT de la tabla `expedientes_medicos`
--
ALTER TABLE `expedientes_medicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `expedientes_medicos`
--
ALTER TABLE `expedientes_medicos`
  ADD CONSTRAINT `expedientes_medicos_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Filtros para la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD CONSTRAINT `ficha_medica_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
