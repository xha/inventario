-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-09-2020 a las 15:08:52
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `detalle` varchar(2000) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` bigint(20) NOT NULL,
  `razonSocial` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonoLocal` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonoCelular` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `observacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoPersona` int(11) NOT NULL,
  `documento` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoSeniat` int(11) NOT NULL,
  `esCredito` bit(1) NOT NULL,
  `limiteCredito` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `esTolerancia` bit(1) NOT NULL,
  `diasTolerancia` int(11) NOT NULL,
  `esDescuento` bit(1) NOT NULL,
  `esPorcentaje` bit(1) NOT NULL,
  `descuento` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `esAgenteRetencion` bit(1) NOT NULL,
  `idTipoRetencion` int(11) DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(11) NOT NULL,
  `rif` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `razonSocial` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `representante` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(400) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `fechaLicencia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` bit(1) NOT NULL DEFAULT b'1',
  `concatenado` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `rif`, `razonSocial`, `representante`, `direccion`, `correo`, `fechaLicencia`, `fechaCreacion`, `activo`, `concatenado`) VALUES
(1, 'V165091422', 'Hilger Leon', 'Hilger Leon', 'Cabudare', 'sirit20@gmail.com', '2020-10-19 00:57:58', '2020-07-19 00:57:58', b'1', '436b92bed2a073881dbe9bd5901ba628');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_transaccion`
--

CREATE TABLE `estatus_transaccion` (
  `idEstatusTransaccion` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `color` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuesto`
--

CREATE TABLE `impuesto` (
  `idImpuesto` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `monto` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `esRetencion` bit(1) NOT NULL,
  `esCompra` bit(1) NOT NULL,
  `esVenta` bit(1) NOT NULL,
  `esPorcentaje` bit(1) NOT NULL,
  `esLibroImpuesto` bit(1) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instancia`
--

CREATE TABLE `instancia` (
  `idInstancia` int(11) NOT NULL,
  `idPadre` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `esServicio` bit(1) DEFAULT NULL,
  `esCompuesto` bit(1) DEFAULT NULL,
  `orden` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `instancia`
--

INSERT INTO `instancia` (`idInstancia`, `idPadre`, `descripcion`, `fechaCreacion`, `esServicio`, `esCompuesto`, `orden`, `idEmpresa`, `estado`, `activo`) VALUES
(1, 0, 'PRODUCTOS QUIMICOS INCLUYENDO LOS BIO-QUIMICOS Y GASES INDUSTRIALES', '2020-08-06 18:58:24', b'0', b'0', '1', 0, b'0', b'1'),
(2, 1, 'ADITIVOS', '2020-08-06 18:58:24', b'0', b'0', '1', 0, b'0', b'1'),
(3, 2, 'SURFACTANTES', '2020-08-06 18:58:25', b'0', b'0', '1', 0, b'0', b'1'),
(4, 3, 'Limpiadores con chorros de agua', '2020-08-06 18:58:25', b'0', b'0', '1', 0, b'0', b'1'),
(5, 3, 'Aditivos de inundacion de agua', '2020-08-06 18:58:25', b'0', b'0', '2', 0, b'0', b'1'),
(6, 2, 'AGENTES DE CURACION', '2020-08-06 18:58:25', b'0', b'0', '2', 0, b'0', b'1'),
(7, 6, 'Agentes de curacion que se da en el agua', '2020-08-06 18:58:25', b'0', b'0', '1', 0, b'0', b'1'),
(8, 0, 'MAQUINARIA, ACCESORIOS Y SUMINISTROS PARA MANEJO, ACONDICIONAMIENTO Y ALMACENAMIENTO DE MATERIALES', '2020-08-06 18:58:26', b'0', b'0', '2', 0, b'0', b'1'),
(9, 8, 'RECIPIENTES Y ALMACENAMIENTO', '2020-08-06 18:58:26', b'0', b'0', '1', 0, b'0', b'1'),
(10, 9, 'BOLSAS', '2020-08-06 18:58:26', b'0', b'0', '1', 0, b'0', b'1'),
(11, 10, 'Bolsas para agua', '2020-08-06 18:58:26', b'0', b'0', '1', 0, b'0', b'1'),
(12, 10, 'Envases para agua', '2020-08-06 18:58:26', b'0', b'0', '2', 0, b'0', b'1'),
(13, 10, 'Vasos', '2020-08-06 18:58:26', b'0', b'0', '3', 0, b'0', b'1'),
(14, 9, 'TANQUES Y CILINDROS Y SUS ACCESORIOS', '2020-08-06 18:58:26', b'0', b'0', '2', 0, b'0', b'1'),
(15, 14, 'Tanques, bidones de almacenamiento de agua', '2020-08-06 18:58:27', b'0', b'0', '1', 0, b'0', b'1'),
(16, 10, 'Ziplok', '2020-08-06 18:58:27', b'0', b'0', '4', 0, b'0', b'1'),
(17, 0, 'Test', '2020-08-06 18:58:27', b'0', b'0', '5', 0, b'0', b'1'),
(18, 0, 'Honorarios', '2020-08-06 18:58:27', b'1', b'0', '0', 0, b'0', b'1'),
(20, 17, 'Test 2', '2020-09-08 00:14:21', b'0', b'0', '1', 0, b'1', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idInventario` bigint(20) NOT NULL,
  `idUsuario` bigint(20) NOT NULL,
  `idTipoTransaccion` int(11) NOT NULL,
  `idMoneda` int(11) NOT NULL,
  `montoNeto` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `gravable` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `exento` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `impuesto` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `descuento` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `montoTotal` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `idUbicacion` int(11) NOT NULL,
  `idUbicacion2` int(11) NOT NULL DEFAULT '0',
  `observacion` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaInventario` datetime NOT NULL,
  `fechaOperacion` datetime NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_item`
--

CREATE TABLE `inventario_item` (
  `idInventarioItem` bigint(20) NOT NULL,
  `idInventario` bigint(20) NOT NULL,
  `idItem` bigint(20) NOT NULL,
  `numeroLinea` int(11) NOT NULL,
  `descripcionItem` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `costo` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `precio` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `impuesto` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `descuento` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `montoTotal` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `esExento` bit(1) NOT NULL DEFAULT b'0',
  `idSucursal` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `idItem` bigint(20) NOT NULL,
  `codigo` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `idInstancia` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `idUnidadMedida` int(11) NOT NULL,
  `costo` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `existencia` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `minimo` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `maximo` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `esExento` bit(1) NOT NULL,
  `esServicio` bit(1) DEFAULT NULL,
  `ruta` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_existencia`
--

CREATE TABLE `item_existencia` (
  `idItemExistencia` bigint(20) NOT NULL,
  `idUbicacion` bigint(20) NOT NULL,
  `idItem` bigint(20) NOT NULL,
  `existencia` decimal(20,4) DEFAULT NULL,
  `cantidadPendiente` decimal(20,4) DEFAULT NULL,
  `cantidadComprometida` decimal(20,4) DEFAULT NULL,
  `idSucursal` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_impuesto`
--

CREATE TABLE `item_impuesto` (
  `idItem` bigint(20) NOT NULL,
  `idImpuesto` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_precio`
--

CREATE TABLE `item_precio` (
  `idPrecio` bigint(20) NOT NULL,
  `idItem` bigint(20) NOT NULL,
  `precio` decimal(20,4) NOT NULL DEFAULT '0.0000',
  `idMoneda` int(11) DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `descripcion`, `fechaCreacion`, `idEmpresa`, `estado`, `activo`) VALUES
(4, 'Samsung', '2020-08-06 21:29:06', 0, b'1', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `ruta` varchar(200) DEFAULT NULL,
  `idPadre` int(11) NOT NULL DEFAULT '0',
  `controlador` varchar(50) DEFAULT NULL,
  `accion` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `visible` bit(1) DEFAULT NULL,
  `orden` varchar(10) DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `idMoneda` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `simbolo` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `principal` bit(1) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idPerfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_menu`
--

CREATE TABLE `perfil_menu` (
  `idMenu` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `esLector` bit(1) NOT NULL DEFAULT b'1',
  `esEscritor` bit(1) NOT NULL DEFAULT b'1',
  `esBorrador` bit(1) NOT NULL DEFAULT b'1',
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` bigint(20) NOT NULL,
  `razonSocial` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonoLocal` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonoCelular` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `observacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoPersona` int(11) NOT NULL,
  `documento` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoSeniat` int(11) NOT NULL,
  `representante` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idTipoRetencion` int(11) NOT NULL,
  `porcentajeRetencionIVA` decimal(5,2) DEFAULT NULL,
  `esRetencionIVA` bit(1) DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `idTipoPersona` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_retencion`
--

CREATE TABLE `tipo_retencion` (
  `idTipoRetencion` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_seniat`
--

CREATE TABLE `tipo_seniat` (
  `idTipoSeniat` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_transaccion`
--

CREATE TABLE `tipo_transaccion` (
  `idTipoTransaccion` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `esCompra` bit(1) DEFAULT NULL,
  `esVenta` bit(1) DEFAULT NULL,
  `esInventario` bit(1) DEFAULT NULL,
  `correlativo` int(11) DEFAULT NULL,
  `signo` bit(1) DEFAULT NULL,
  `prefijo` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idUbicacion` bigint(20) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `idUnidadMedida` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `abreviatura` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `idPreguntaSeguridad` int(11) NOT NULL,
  `respuestaSeguridad` varchar(50) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idVendedor` bigint(20) NOT NULL,
  `razonSocial` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonoLocal` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonoCelular` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `observacion` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `documento` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `esComisionVenta` bit(1) NOT NULL,
  `esComisionCobro` bit(1) NOT NULL,
  `esComisionTabuladorVenta` bit(1) NOT NULL,
  `esComisionTabuladorCobro` bit(1) NOT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idEmpresa` int(11) NOT NULL,
  `estado` bit(1) NOT NULL DEFAULT b'1',
  `activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `fk_cliente_tipo_seniat` (`idTipoSeniat`),
  ADD KEY `fk_tipo_retencion_cliente` (`idTipoRetencion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indices de la tabla `estatus_transaccion`
--
ALTER TABLE `estatus_transaccion`
  ADD PRIMARY KEY (`idEstatusTransaccion`);

--
-- Indices de la tabla `impuesto`
--
ALTER TABLE `impuesto`
  ADD PRIMARY KEY (`idImpuesto`);

--
-- Indices de la tabla `instancia`
--
ALTER TABLE `instancia`
  ADD PRIMARY KEY (`idInstancia`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idInventario`),
  ADD KEY `fk_Inventario_Moneda` (`idMoneda`),
  ADD KEY `fk_Inventario_tipo_transaccion` (`idTipoTransaccion`),
  ADD KEY `fk_Inventario_Ubicacion` (`idUbicacion`);

--
-- Indices de la tabla `inventario_item`
--
ALTER TABLE `inventario_item`
  ADD PRIMARY KEY (`idInventario`,`idItem`),
  ADD KEY `fk_inventario_item_Item` (`idItem`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `fk_item_instancia` (`idInstancia`),
  ADD KEY `fk_item_marca` (`idMarca`),
  ADD KEY `fk_item_unidad_medida` (`idUnidadMedida`);

--
-- Indices de la tabla `item_existencia`
--
ALTER TABLE `item_existencia`
  ADD PRIMARY KEY (`idItemExistencia`),
  ADD KEY `fk_item_existencia_idItem` (`idItem`),
  ADD KEY `fk_item_existencia_idUbicacion` (`idUbicacion`);

--
-- Indices de la tabla `item_impuesto`
--
ALTER TABLE `item_impuesto`
  ADD PRIMARY KEY (`idItem`,`idImpuesto`);

--
-- Indices de la tabla `item_precio`
--
ALTER TABLE `item_precio`
  ADD PRIMARY KEY (`idPrecio`),
  ADD KEY `fk_item_precio_item` (`idItem`),
  ADD KEY `fk_item_precio_moneda` (`idMoneda`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`idMoneda`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `perfil_menu`
--
ALTER TABLE `perfil_menu`
  ADD KEY `fk_perfil_menu_empresa` (`idEmpresa`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`),
  ADD KEY `fk_proveedor_tipo_retencion` (`idTipoRetencion`),
  ADD KEY `fk_proveedor_tipo_seniat` (`idTipoSeniat`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`idTipoPersona`);

--
-- Indices de la tabla `tipo_retencion`
--
ALTER TABLE `tipo_retencion`
  ADD PRIMARY KEY (`idTipoRetencion`);

--
-- Indices de la tabla `tipo_seniat`
--
ALTER TABLE `tipo_seniat`
  ADD PRIMARY KEY (`idTipoSeniat`);

--
-- Indices de la tabla `tipo_transaccion`
--
ALTER TABLE `tipo_transaccion`
  ADD PRIMARY KEY (`idTipoTransaccion`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`idUnidadMedida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Usuario_Perfil` (`idPerfil`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idVendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estatus_transaccion`
--
ALTER TABLE `estatus_transaccion`
  MODIFY `idEstatusTransaccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `impuesto`
--
ALTER TABLE `impuesto`
  MODIFY `idImpuesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instancia`
--
ALTER TABLE `instancia`
  MODIFY `idInstancia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idInventario` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item`
--
ALTER TABLE `item`
  MODIFY `idItem` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_existencia`
--
ALTER TABLE `item_existencia`
  MODIFY `idItemExistencia` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `item_precio`
--
ALTER TABLE `item_precio`
  MODIFY `idPrecio` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `idMoneda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `idTipoPersona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_retencion`
--
ALTER TABLE `tipo_retencion`
  MODIFY `idTipoRetencion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_seniat`
--
ALTER TABLE `tipo_seniat`
  MODIFY `idTipoSeniat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_transaccion`
--
ALTER TABLE `tipo_transaccion`
  MODIFY `idTipoTransaccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `idUbicacion` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `idUnidadMedida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idVendedor` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perfil_menu`
--
ALTER TABLE `perfil_menu`
  ADD CONSTRAINT `fk_perfil_menu_empresa` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`idEmpresa`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Perfil` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
