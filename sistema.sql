-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 04:02:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nomcategoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nomcategoria`) VALUES
(1, 'tenor'),
(2, 'bajo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas`
--

CREATE TABLE `cuotas` (
  `id` int(11) NOT NULL,
  `cuota` text NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuotas`
--

INSERT INTO `cuotas` (`id`, `cuota`, `precio`, `descripcion`) VALUES
(2, 'cuota malena', 2000, '-'),
(3, 'cuota male2', 2000, '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `idfactura` int(11) NOT NULL,
  `factura` text NOT NULL,
  `usuario` text NOT NULL,
  `registrante` text NOT NULL,
  `total` int(11) NOT NULL,
  `fechafac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`idfactura`, `factura`, `usuario`, `registrante`, `total`, `fechafac`) VALUES
(1, '0', 'leonardo vides', 'lujan daghero', 3000, '2021-11-30'),
(12, '1000', '', '', 0, '0000-00-00'),
(0, '000320', '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `midis`
--

CREATE TABLE `midis` (
  `idmidi` int(11) NOT NULL,
  `nommidi` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idcategoria` varchar(200) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `archivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `midis`
--

INSERT INTO `midis` (`idmidi`, `nommidi`, `descripcion`, `idcategoria`, `pdf`, `archivo`) VALUES
(1, 'exultate justi', 'cancion de exultate', 'tenor', 'Rheinberger - Abendlied.pdf', 'Exultate Justi Tenor 2.mpeg'),
(9, 'exultate', 'exultate', 'tenor', 'Margarita.pdf', 'Igni veni - Tenor.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idcuota` int(11) NOT NULL,
  `descripcion` varchar(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`idcuota`, `descripcion`, `precio`, `cantidad`, `subtotal`) VALUES
(12, '-', 3000, 1, 3000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL,
  `edad` int(3) NOT NULL,
  `fechanac` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `tel_cel` varchar(13) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `sexo` int(1) NOT NULL,
  `privilegio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`, `apellido`, `nombre`, `dni`, `edad`, `fechanac`, `direccion`, `localidad`, `provincia`, `nacionalidad`, `tel_cel`, `tel`, `email`, `sexo`, `privilegio`) VALUES
(1, 'admin', 'admin', 'Barrionuevo', 'Sergio', 31458258, 34, '1987-11-09', 'Av. Alem 835', 'san miguel de tucumán', 'tucumán', 'argentino', '3813089765', '3814363742', 'sergiobarrionuevo@gmail.com', 1, 1),
(2, '31751169', 'abcdef', 'vides', 'leonardo', 31751169, 36, '1985-08-17', 'malabia 2137', 'san miguel de tucuman', 'tucuman', 'argentina', '3813028569', '4363742', 'leonardo-vides@hotmail.com', 1, 2),
(4, 'ceci', 'ceci', 'Vides', 'Cecilia', 33751169, 28, '1993-07-26', 'Malabia 2137', 'San Miguel de Tucumán', 'Tucumán ', 'Argentina', '3813028751', '4363742', 'cecialececi@gmail.com', 0, 2),
(5, 'male', 'male', 'corrales', 'malena', 33125478, 35, '1987-12-01', 'lavalle 1478', 'San miguel de Tucuman', 'Tucuman', 'Argentina', '3815741258', '-', 'male@male.com.ar', 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `cuotas`
--
ALTER TABLE `cuotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `midis`
--
ALTER TABLE `midis`
  ADD PRIMARY KEY (`idmidi`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idcuota`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `midis`
--
ALTER TABLE `midis`
  MODIFY `idmidi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idcuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
