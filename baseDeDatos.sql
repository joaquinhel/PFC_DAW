-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2017 a las 13:46:15
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(3, 'Comunes'),
(5, 'Personales'),
(89, 'Cristales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`idCliente` int(11) NOT NULL,
  `nombreCliente` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `direccion` varchar(90) DEFAULT NULL,
  `telefono` varchar(14) DEFAULT NULL,
  `nif` varchar(9) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `apellidos`, `direccion`, `telefono`, `nif`, `email`) VALUES
(3, 'Joaquín1', 'Sánchez', 'Juandd', '678017350', '53146809L', 'joaquin_1919@hotmail.com'),
(12, 'Maria', 'Sanchez', 'Avenida Ancha', '875478964', '53146809L', 'maria@hotmail.com'),
(30, 'joaquin', 'sanchez', 'No tengo', '678017350', '75058508D', 'joaquin_1919@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
`idEmpleado` int(3) NOT NULL,
  `nombreEmpleado` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fechaContratacion` varchar(45) DEFAULT NULL,
  `sueldo` varchar(45) DEFAULT NULL,
  `nif` varchar(9) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombreEmpleado`, `apellidos`, `direccion`, `telefono`, `email`, `fechaContratacion`, `sueldo`, `nif`, `estado`) VALUES
(51, 'Joaquin', 'Sánchez', 'Juan Carlos I', '678017350', 'joaquin_1919@hotmail.com', '2017-11-23', '4785', '53146809L', 'B'),
(52, 'Joaquin', 'Sanchez', 'Gran Vía', '678394059', 'joaquin_1919@hotmail.com', '2017-11-08', '321', '53146809L', 'B'),
(54, 'Jorge', 'Fernandez', 'Calle Rambla', '678155896', 'fdsfe@hotmail.com', '2017-12-13', '123', '53146809L', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriaimagenes`
--

CREATE TABLE IF NOT EXISTS `galeriaimagenes` (
`id` int(3) NOT NULL,
  `archivo` varchar(20) NOT NULL,
  `directorio` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `galeriaimagenes`
--

INSERT INTO `galeriaimagenes` (`id`, `archivo`, `directorio`) VALUES
(1, '1.jpg', 'galeria'),
(3, '2.jpg', 'galeria'),
(4, '3.jpg', 'galeria'),
(5, '4.jpg', 'galeria'),
(6, '5.jpg', 'galeria'),
(7, '6.jpg', 'galeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `marca` varchar(60) DEFAULT NULL,
  `precio` varchar(15) DEFAULT NULL,
  `categoria_idCategoria` int(11) NOT NULL,
  `proveedor_idProveedor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcion`, `marca`, `precio`, `categoria_idCategoria`, `proveedor_idProveedor`) VALUES
(16, 'Gafas', 'Gafas graduadas completas', 'Maestro de gafas', '10', 3, 2),
(17, 'Cordones', 'Cordones de fabricación propia.', 'Propia', '12', 3, 2),
(19, 'Lentillas', 'New Lentillas', 'AguaLen', '12', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
`idProveedor` int(11) NOT NULL,
  `nombreEmpresa` varchar(45) DEFAULT NULL,
  `personaContacto` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `cif` varchar(12) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombreEmpresa`, `personaContacto`, `direccion`, `cif`, `email`, `telefono`) VALUES
(2, 'Gafas baratas', 'Maria', 'Avenida de la Consitutución', 'A58818', 'gafasbaratas@gafas.com', '678017352'),
(14, 'lentillasCaidad', 'joaquin', 'Polígono de Madrid', 'A41256325', 'jorgejimenez@lentillas.com', '621478521');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
`idPrueba` int(11) NOT NULL,
  `nombrePrueba` varchar(45) DEFAULT NULL,
  `aparatosNecesarios` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`idPrueba`, `nombrePrueba`, `aparatosNecesarios`, `descripcion`) VALUES
(1, 'Graduación', 'Refractometro', 'Prueba a realizar a los nuevos clientes.'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebacliente`
--

CREATE TABLE IF NOT EXISTS `pruebacliente` (
  `prueba_idprueba` int(11) NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  `diagnostico` varchar(45) DEFAULT NULL,
  `fechaPrueba` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pruebacliente`
--

INSERT INTO `pruebacliente` (`prueba_idprueba`, `cliente_idCliente`, `diagnostico`, `fechaPrueba`) VALUES
(1, 12, 'vefw', '2017-11-29'),
(1, 3, 'vefw', '2017-11-29'),
(1, 3, 'No ves nada', '2017-12-26'),
(1, 3, 'eeeeeee', '2017-12-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `fecha_alta` varchar(45) DEFAULT NULL,
  `nombre` varchar(60) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `login`, `pass`, `fecha_alta`, `nombre`, `estado`) VALUES
(1, ' joaquin', 'acitpo', '01-01-2016', 'Perico', ''),
(3, 'admin', 'admin', '12-11-2017', 'Administrador', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`idProducto`), ADD KEY `fk_producto_categoria1_idx` (`categoria_idCategoria`), ADD KEY `fk_producto_proveedor1_idx` (`proveedor_idProveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
 ADD PRIMARY KEY (`idPrueba`);

--
-- Indices de la tabla `pruebacliente`
--
ALTER TABLE `pruebacliente`
 ADD KEY `fk_prueba-cliente_pruebas1_idx` (`prueba_idprueba`), ADD KEY `fk_prueba-cliente_cliente1_idx` (`cliente_idCliente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `idEmpleado` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `galeriaimagenes`
--
ALTER TABLE `galeriaimagenes`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
MODIFY `idPrueba` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `fk_producto_categoria1` FOREIGN KEY (`categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_producto_proveedor1` FOREIGN KEY (`proveedor_idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pruebacliente`
--
ALTER TABLE `pruebacliente`
ADD CONSTRAINT `fk_prueba-cliente_cliente1` FOREIGN KEY (`cliente_idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_prueba-cliente_prueba1` FOREIGN KEY (`prueba_idprueba`) REFERENCES `prueba` (`idPrueba`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
