-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2020 a las 03:35:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectopersonal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `id_capitulo` int(11) NOT NULL,
  `c_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `c_fk_Servidor` int(11) NOT NULL,
  `c_url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `c_urlEncriptada` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_fk_id_temporada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`id_capitulo`, `c_nombre`, `c_fk_Servidor`, `c_url`, `c_urlEncriptada`, `c_fk_id_temporada`) VALUES
(8, 'Capitulos 02 - 02 ', 1, 'https://mega.nz/folder/MZ4VAbiB#qdpT7tUPp17zA4Vqstv8Mg', 'https://ouo.io/0Jgylf', 12),
(9, 'Capitulo 1 - 6', 2, 'http://www.mediafire.com/folder/24my9xglxfd9l/Ahiru%20no%20sora%201%20-%206', 'https://ouo.io/xpFZI1', 14),
(10, 'Capitulo 7 - 10', 2, 'http://www.mediafire.com/folder/k9lu0vbd3qnl3/cap7-10', 'https://ouo.io/9Xg2R7', 14),
(11, 'Capitulo 11 - 20', 2, 'http://www.mediafire.com/folder/7b7ts9n28zvr6/cap%2011-20', 'https://ouo.io/0q07xU', 14),
(12, 'Capitulo 21', 2, 'http://www.mediafire.com/folder/c4uwqojh416ka/Ahiru%20no%20sora%2021', 'https://ouo.io/SPnR4S', 14),
(13, 'Capitulo 22 - 24', 2, 'http://www.mediafire.com/folder/l4vi6y1lbfytu/Capitulo%2022%20-%2024', 'https://ouo.io/fxlXfyC', 14),
(14, 'Capitulo 25 - 47', 1, 'https://mega.nz/folder/HYhx2IaT#SqQFW8BtbzuNpYVkfbltLw', 'https://ouo.io/chtvXg', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `ce_nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `ce_nombre`) VALUES
(1, 'Anime H'),
(4, 'Shonen'),
(5, 'Escolar H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `e_nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`id_estatus`, `e_nombre`) VALUES
(1, 'Emision'),
(2, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id_serie` int(11) NOT NULL,
  `s_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `s_imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_pathimagen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `s_fk_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id_serie`, `s_nombre`, `s_descripcion`, `s_imagen`, `s_pathimagen`, `s_fk_id_categoria`) VALUES
(15, 'Temporada 32', 'fvfdvbfd asdasd', 'Meikoku Gakuen Jutai Hen.jpg', 'Asset/imagenes/Meikoku Gakuen Jutai Hen.jpg', 4),
(16, 'Temporada 2', 'asdasd', 'Miboujin Nikki Akogare no Ano Hito to Hitotsu Yane no Shita.jpg', 'Asset/imagenes/Miboujin Nikki Akogare no Ano Hito to Hitotsu Yane no Shita.jpg', 1),
(17, 'Ahiru no sora', 'Ahiru no Sora es una serie de manga escrita e ilustrada por Takeshi Hinata, serializada en la revista semanal Shōnen Magazine desde diciembre de 2003. El primer tomo recopilatorio fue lanzado el 17 de mayo de 2004, y hasta septiembre de 2019, Kōdansha ha publicado cincuenta volúmenes en Japón.', 'ahiru.jpg', 'Asset/imagenes/ahiru.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servidor`
--

CREATE TABLE `servidor` (
  `id_servidor` int(11) NOT NULL,
  `se_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `se_imagen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `se_dir_imagen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `servidor`
--

INSERT INTO `servidor` (`id_servidor`, `se_nombre`, `se_imagen`, `se_dir_imagen`) VALUES
(1, 'Mega', 'mega.png', 'Asset/imagenes/mega.png'),
(2, 'Mediafire', 'Mediafire_Logo.png', 'Asset/imagenes/Mediafire_Logo.png'),
(6, 'Temporada 1a', 'banner.jpg', 'Asset/imagenes/banner.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

CREATE TABLE `temporadas` (
  `id_temporada` int(11) NOT NULL,
  `t_nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `t_fk_id_serie` int(11) NOT NULL,
  `t_fk_id_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `temporadas`
--

INSERT INTO `temporadas` (`id_temporada`, `t_nombre`, `t_fk_id_serie`, `t_fk_id_estatus`) VALUES
(12, 'Temporada 1', 16, 2),
(13, 'Temporada 2', 16, 2),
(14, 'Temporada 1', 17, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`id_capitulo`),
  ADD KEY `c_fk_id_temporada` (`c_fk_id_temporada`),
  ADD KEY `c_fk_Servidor` (`c_fk_Servidor`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id_serie`),
  ADD KEY `s_fk_id_categoria` (`s_fk_id_categoria`);

--
-- Indices de la tabla `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`id_servidor`);

--
-- Indices de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD PRIMARY KEY (`id_temporada`),
  ADD KEY `t_fk_id_serie` (`t_fk_id_serie`),
  ADD KEY `t_fk_id_estatus` (`t_fk_id_estatus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `id_capitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `servidor`
--
ALTER TABLE `servidor`
  MODIFY `id_servidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `temporadas`
--
ALTER TABLE `temporadas`
  MODIFY `id_temporada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD CONSTRAINT `capitulos_ibfk_1` FOREIGN KEY (`c_fk_id_temporada`) REFERENCES `temporadas` (`id_temporada`),
  ADD CONSTRAINT `capitulos_ibfk_2` FOREIGN KEY (`c_fk_Servidor`) REFERENCES `servidor` (`id_servidor`);

--
-- Filtros para la tabla `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_ibfk_1` FOREIGN KEY (`s_fk_id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD CONSTRAINT `temporadas_ibfk_1` FOREIGN KEY (`t_fk_id_serie`) REFERENCES `series` (`id_serie`),
  ADD CONSTRAINT `temporadas_ibfk_2` FOREIGN KEY (`t_fk_id_estatus`) REFERENCES `estatus` (`id_estatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
