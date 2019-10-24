-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2019 a las 14:21:22
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_peleadores`
--

CREATE TABLE `categorias_peleadores` (
  `cat_peleadores_id` tinyint(4) NOT NULL,
  `cat_peleadores_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_peleadores`
--

INSERT INTO `categorias_peleadores` (`cat_peleadores_id`, `cat_peleadores_nombre`) VALUES
(1, 'Pesado'),
(2, 'semipesado'),
(3, 'mediano'),
(4, 'welter'),
(5, 'ligero'),
(6, 'pluma'),
(7, 'mosca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidades`
--

CREATE TABLE `nacionalidades` (
  `nac_id` smallint(6) NOT NULL,
  `nac_nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nacionalidades`
--

INSERT INTO `nacionalidades` (`nac_id`, `nac_nombre`) VALUES
(1, 'venezuela'),
(2, 'argentina'),
(3, 'chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peleadores`
--

CREATE TABLE `peleadores` (
  `usuario_id` int(11) NOT NULL,
  `peleadores_nombre` varchar(50) NOT NULL,
  `peleadores_apellido` varchar(50) NOT NULL,
  `peleadores_edad` int(3) NOT NULL,
  `cat_peleador_id` tinyint(4) NOT NULL,
  `nac_id` smallint(6) NOT NULL,
  `peleadores_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peleadores`
--

INSERT INTO `peleadores` (`usuario_id`, `peleadores_nombre`, `peleadores_apellido`, `peleadores_edad`, `cat_peleador_id`, `nac_id`, `peleadores_imagen`) VALUES
(1, 'Sergio', 'Acosta', 23, 1, 2, 'foto6.jpg'),
(2, 'Pedro', 'acosta', 24, 1, 1, 'foto5.jpg'),
(11, 'Ramon', 'perez', 40, 1, 2, 'foto4.jpg'),
(12, 'Fernando', 'ospina', 40, 1, 2, 'foto3.jpg'),
(18, 'Aldo', 'perez', 22, 6, 1, 'foto2.jpg'),
(36, 'Manny', 'Pacquiao', 40, 5, 1, 'foto1.jpg'),
(37, 'Samuel', 'Acosta', 19, 3, 1, 'fotosamuel.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `email`, `clave`, `nombre`) VALUES
(1, 'sergiox1228@gmail.com', '123456', ''),
(2, 'sabrialex20000@gmail.com', '12345678', ''),
(3, 'samuel-ah@hotmail.com', '33333333', ''),
(4, 'otromail@gmail.com', '1234', ''),
(11, 'laurav96@hotmail.com', '3434343434343', ''),
(12, 'correo@gmail.com', '123456', ''),
(14, 'otrocorreo@gmail.com', '123456', ''),
(15, 'peleador@gmail.com', '123', ''),
(16, 'prueba1@gmail.com', '123', ''),
(18, 'prueba2@gmail.com', '123', ''),
(22, 'pureba3@gmail.com', '0987654321', ''),
(25, 'prueba3@gmail.com', '0987654321', ''),
(27, 'usuario@gmail.com', '33333', ''),
(31, 'prueba4@gmail.com', '2222222', ''),
(32, 'pruebafinal@gmail.com', '123', ''),
(33, 'pruebafinal2@gmail.com', '123', ''),
(34, 'pruebafinal3@gmail.com', '123', 'samuel'),
(36, 'peleadornuevo@gmail.com', '123', 'pacquiao'),
(37, 'mensaje@gmail.com', '123', 'pedro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_peleadores`
--
ALTER TABLE `categorias_peleadores`
  ADD PRIMARY KEY (`cat_peleadores_id`);

--
-- Indices de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  ADD PRIMARY KEY (`nac_id`);

--
-- Indices de la tabla `peleadores`
--
ALTER TABLE `peleadores`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `id_cat` (`cat_peleador_id`),
  ADD KEY `nac_id` (`nac_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_peleadores`
--
ALTER TABLE `categorias_peleadores`
  MODIFY `cat_peleadores_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `nacionalidades`
--
ALTER TABLE `nacionalidades`
  MODIFY `nac_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `peleadores`
--
ALTER TABLE `peleadores`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peleadores`
--
ALTER TABLE `peleadores`
  ADD CONSTRAINT `peleadores_ibfk_1` FOREIGN KEY (`cat_peleador_id`) REFERENCES `categorias_peleadores` (`cat_peleadores_id`),
  ADD CONSTRAINT `peleadores_ibfk_2` FOREIGN KEY (`nac_id`) REFERENCES `nacionalidades` (`nac_id`),
  ADD CONSTRAINT `peleadores_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
