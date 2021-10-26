-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 00:42:26
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
-- Base de datos: `proyecto_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_1` varchar(20) NOT NULL,
  `apellido_2` varchar(20) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `numero_documento`, `nombre`, `apellido_1`, `apellido_2`, `comuna`, `telefono`, `direccion`, `correo`, `contraseña`, `tipo_documento`, `tipo_usuario`) VALUES
(0, '1005940393', 'Carlos', 'Gutierrez', 'Perez', 'Compartir', '3950495093', 'Carrera 15', 'carlos@gmail.com', '99999', 'cedula_ciudadania', 'administrador'),
(0, '29489284972', 'erika', 'murcia', 'halo', 'Centro', '2575', 'carrera 39', 'erika2@gmail.com', '8394', 'cedula_ciudadania', 'administrador'),
(0, '3173452534', 'Darcy', 'Cumbe', 'Gualtero', 'Centro', '3194893849', 'Calle 29', 'darcy@gmail.com', '22222', 'cedula_extranjera', 'administrador'),
(0, '32645768575', 'Juancho', 'Pepillo', 'Coca', 'Centro', '3333', 'Avenida 100', 'juancho@gmail.com', '22222', 'cedula_extranjera', 'administrador'),
(0, '4930394923', 'Oscar', 'Rincon', 'Florez', 'San_Mateo', '4990292393', 'Avenida 100', 'oscaar@gmail.com', '666666', 'cedula_extranjera', 'administrador'),
(345374, '2147483647', 'FABIAN', 'CAÑON', 'ORTIZ', 'San_Mateo', '3194748383', 'KRA 5 #20-34', ' fabian@gmail.com', '5675644', 'cedula_ciudadania', 'administrador'),
(354632, '134567890', 'MARCOS', 'LOAIZA', 'LOPEZ', 'Compartir', '3456457574', 'KRA 5 #1-50', 'marcos@gmail.com', '5645356', 'cedula_extranjera', 'administrador'),
(393494, '1000654470', 'JUAN', 'MURRILLO', 'QUIROGA', 'San_Mateo', '3132251759', 'TRV 10 #5-25', 'juanM@gmail.com\r\n', '7665343', 'cedula_ciudadania', 'administrador'),
(546795, '1230654390', 'LUIS', 'LOPEZ', 'JIMENEZ', 'Centro', '3061456729', 'TRV 23 #88-8', 'Lluis@gmail.com', '7653324', 'cedula_extranjera', 'administrador'),
(958365, '2147483647', 'ANDRES', 'ROJAS', 'MORA', 'Compartir', '3133130576', 'CALLE 100  #23-2', ' Randres@gmail.com', '7756345', 'cedula_ciudadania', 'administrador');

--
-- Disparadores `administrador`
--
DELIMITER $$
CREATE TRIGGER `actualizacion_administradores_dr` BEFORE UPDATE ON `administrador` FOR EACH ROW Insert into actualizacion_administradores (ant_id_admin, ant_numero_documento, ant_nombre, ant_apellido_1, ant_apellido_2, ant_telefono, ant_direccion, ant_correo, ant_contraseña,act_id_admin, act_numero_documento, act_nombre, act_apellido_1, act_apellido_2, act_telefono, act_direccion, act_correo, act_contraseña, administrador, f_actualizacion) 
Values(old.id_admin, old.numero_documento, old.nombre, old.apellido_1, old.apellido_2, old.telefono, old.direccion, old.correo, old.contraseña, new.id_admin, new.numero_documento, new.nombre, new.apellido_1, new.apellido_2, new.telefono, new.direccion, new.correo, new.contraseña, current_user(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inhabilitar_administradores` AFTER DELETE ON `administrador` FOR EACH ROW INSERT INTO administradores_inhabilitados (h_id_admin, h_numero_documento, h_nombre, h_apellido_1, h_apellido_2, h_telefono, h_direccion, h_correo, h_contraseña, administrador, f_inhabilitado) 
VALUES (old.id_admin, old.numero_documento, old.nombre, old.apellido_1, old.apellido_2, old.telefono, old.direccion, old.correo, old.contraseña, CURRENT_USER, now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `registros_administradores_dr` AFTER INSERT ON `administrador` FOR EACH ROW INSERT INTO registros_administradores (r_id_admin, r_numero_documento, r_nombre, r_apellido_1, r_apellido_2, r_telefono, r_direccion, r_correo, r_contraseña, administrador, f_registro)
VALUES (new.id_admin, new.numero_documento, new.nombre, new.apellido_1, new.apellido_2, new.telefono, new.direccion, new.correo, new.contraseña, CURRENT_USER(), now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_compra`
--

CREATE TABLE `carrito_compra` (
  `id_carro_compra` int(11) NOT NULL,
  `cod_plato` int(11) NOT NULL,
  `nombre_plato` varchar(50) NOT NULL,
  `valor_unitario` decimal(20,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito_compra`
--

INSERT INTO `carrito_compra` (`id_carro_compra`, `cod_plato`, `nombre_plato`, `valor_unitario`, `cantidad`, `id_usuario`) VALUES
(33849292, 10103, 'COMBO PARA DOS', '25900.00', 2, 34535646),
(48394829, 10123, 'MALTEADA CHEESECAKE DE FRAMBUESA', '12000.00', 2, 43949413),
(48395866, 10112, 'PERRO CALIENTE ESPECIAL', '10000.00', 5, 49020424),
(50904945, 10148, 'PIZZA DE CARNES MEDIANA', '22900.00', 2, 59028452),
(58739838, 10132, 'SALCHIPAPA MEGA', '11000.00', 3, 38948323);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domiciliarios`
--

CREATE TABLE `domiciliarios` (
  `id_domiciliario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `lic_conduccion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domiciliarios`
--

INSERT INTO `domiciliarios` (`id_domiciliario`, `nombre`, `lic_conduccion`) VALUES
(13423, 'ZAYN', 'SI'),
(38582, 'MAURICIO', 'NO'),
(58493, 'MARTIN', 'NO'),
(68693, 'LUISA', 'SI'),
(84959, 'JOHAN', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `cod_factura` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cod_metodo_pago` varchar(5) NOT NULL,
  `id_carro_compra` int(11) NOT NULL,
  `fecha_factura` date NOT NULL,
  `valor_total` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`cod_factura`, `id_usuario`, `cod_metodo_pago`, `id_carro_compra`, `fecha_factura`, `valor_total`) VALUES
(100, 34535646, '10001', 33849292, '2021-05-23', '27000.00'),
(200, 38948323, '10002', 58739838, '2021-05-20', '13000.00'),
(300, 43949413, '10003', 48394829, '2021-06-23', '12000.00'),
(400, 49020424, '10004', 48395866, '2021-06-11', '14000.00'),
(500, 59028452, '10005', 50904945, '2021-06-09', '25000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_pago`
--

CREATE TABLE `metodos_pago` (
  `cod_metodo_pago` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metodos_pago`
--

INSERT INTO `metodos_pago` (`cod_metodo_pago`, `nombre`, `descripcion`) VALUES
('10001', 'DAVIPLATA', 'PAGO CON CARGO A UN DEPOSITO DISPUESTO POR LA ENTIDAD DAVIVIENDA'),
('10002', 'NEQUI', 'PAGO CON CARGO A UN DEPOSITO DISPUESTO POR LA ENTIDAD BANCOLOMBIA'),
('10003', 'TARJETA DEBITO', 'PAGO CON CARGO A UN DEPOSITO BANCARIO'),
('10004', 'TARJETA CREDITO', 'PAGO CON CARGO A UN CREDITO BANCARIO, DESDE 1 A 36 CUOTAS'),
('10005', 'EFECTY', 'PAGO CON DEPOSITO EN LA FIRMA EFECTY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `cod_factura` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_domiciliario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`cod_factura`, `id_usuario`, `id_domiciliario`) VALUES
(100, 34535646, 13423),
(200, 38948323, 58493),
(300, 43949413, 38582),
(400, 49020424, 68693),
(500, 59028452, 84959);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `cod_plato` int(11) NOT NULL,
  `nombe_plato` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `valor_unitario` decimal(20,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `cod_restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`cod_plato`, `nombe_plato`, `descripcion`, `valor_unitario`, `stock`, `cod_restaurante`) VALUES
(10103, 'COMBO PARA DOS', '6 Presas de Pollo + 2 Papas Pequeñas + 2 Gaseosas PET 400ml.', '20000.00', 10, 4859438),
(10112, 'PERRO CALIENTE ESPECIAL', 'Pan, salchicha americana, queso, papa cabello de ángel, queso, maíz tierno, tocineta y salsas a elección.', '10000.00', 30, 5839395),
(10123, 'MALTEADA CHEESECAKE DE FRAMBUESA', 'Malteada de helado a base de cheesecake con crocantes trozos de galletas y bañado con una exquisita salsa de frambuesa.', '12000.00', 20, 9584993),
(10132, 'SALCHIPAPA MEGA', 'Papa francesa salchicha, queso, huevo y salsas a elección.', '11000.00', 20, 9584993),
(10148, 'PIZZA DE CARNES MEDIANA', 'Carne de res, queso, salchicga, jamon.', '22900.00', 10, 9847394);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE `restaurante` (
  `cod_restaurante` int(11) NOT NULL,
  `nombre_restaurante` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurante`
--

INSERT INTO `restaurante` (`cod_restaurante`, `nombre_restaurante`, `descripcion`, `direccion`, `id_admin`) VALUES
(4829348, 'Mr Vikingos', 'Es un restaurante que ofrece a sus clientes la mejor calidad en comida rápida a un excelente precio. ', 'CALLE 30 Nº 4-35 Este San Mateo, Soacha, Cundinama', 958365),
(4859438, 'El Gato', 'Es un restaurante especializado en comidas rápidas y exquisitos platos.', 'Cra. 9 Este, Soacha, Cundinamarca', 354632),
(5839395, 'KFC', 'Es una cadena de restaurantes de comida rápida especializada en pollo frito.', 'Kfc, Centro comercial gran plaza, Soacha, Cundinam', 546795),
(9584993, 'Asadero Restaurante Lideres De', 'Es un restaurante que ofrece variedad de platos a la carta y pollo asado para todo el publico.', 'Cra. 9 Este #3090, Soacha, Cundinamarca', 393494),
(9847394, 'Fruteria y Heladeria Tio Rico', 'Disfruta de las más exquisitas ensaladas de frutas y mucho más.', 'Carrera 30 # 3 - 05 Soacha, Cundinamarca', 393494);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_1` varchar(20) NOT NULL,
  `apellido_2` varchar(20) NOT NULL,
  `comuna` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `numero_documento`, `nombre`, `apellido_1`, `apellido_2`, `comuna`, `telefono`, `direccion`, `correo`, `contraseña`, `tipo_documento`, `tipo_usuario`) VALUES
(0, '1000023345', 'natalia', 'rojas', 'perez', 'Compartir', '2423248932', 'avenida 13', 'natalia@gmail.com', '1346765', 'cedula_ciudadania', 'cliente'),
(0, '113424635744', 'JUANPIS', 'LOZANO', 'PEREZ', 'San_Mateo', '3456', 'CALLE 12', 'juanpis@gmail.com', '3333', 'cedula_ciudadania', 'cliente'),
(0, '1324657667', 'lara', 'lopez', 'gomez', 'Compartir', '2453744859', 'avenida 6', 'lara@gmail.com', 'S_1fgthujf', 'cedula_ciudadania', 'cliente'),
(0, '1349594033', 'Paolo', 'Guerrero', 'Tapia', 'Centro', '3153154515', 'Calle 12', 'paolo.peru@gmail.com', '44444', 'cedula_ciudadania', 'cliente'),
(0, '1604854842', 'Angie', 'Zapata', 'Gomez', 'San_Mateo', '3129690595', 'Calle 33', 'angie@gmail.com', '55555', 'cedula_ciudadania', 'cliente'),
(0, '29039949293', 'julian', 'ternero', 'lara', 'San_Humberto', '8976', 'calle 23', 'julian1@gmail.com', '2323', 'cedula_extranjera', 'cliente'),
(0, '38494839284', 'patricio', 'paez', 'rojas', 'Centro', '4392442', 'avenida 10', 'patricio@gmail.com', '11111', 'cedula_ciudadania', 'cliente'),
(0, '4493992384', 'Darcy', 'Cumbe', 'Gualtero', 'San_Mateo', '3194893849', 'Calle 29', 'darcy@gmail.com', '0000000000', 'cedula_ciudadnia', 'cliente'),
(0, '4765893056', 'chavela', 'solef', 'cacullo', 'San_Mateo', '6758936743', 'carrera 3', 'chavela@gmail.com', 'Jyuhgf64h86', 'cedula_ciudadania', 'cliente'),
(0, '575856579', 'darcy', 'cumbe', 'gualtero', 'San_Mateo', '3192292923', 'avenida 1o7', 'darcy2@gmail.com', '2352443', 'cedula_extranjera', 'cliente'),
(0, '7396743214', 'nathaly', 'carvajal', 'perez', 'San_Mateo', '7654396547', 'avenida 6', 'nathalie@gmail.com', 'Juyhrt564vd', 'cedula_extranjera', 'cliente'),
(34535646, '1000982993', 'PABLO', 'HERNANDEZ', 'RODRIGUEZ', 'CENTRO', '3134726948', 'KRA 11 este 89-62', 'pablo@gmail.com', '12345', 'cedula_extranjera', 'cliente'),
(38948323, '1209367760', 'JAIME', 'GONZALEZ', 'MURCIA', 'COMPARTIR', '3217543624', 'KRA 34 este 65-66', 'jaime@gmail.com', '24681', 'cedula_ciudadania', 'cliente'),
(43949413, '1299912230', 'NICOLAS', 'GOMEZ', 'BALLESTEROS', 'CAZUCA', '3144128970', 'KRA 66 este 66-89', 'nicolas@gmail.com', '36912', 'cedula_extranjera', 'cliente'),
(49020424, '1002877290', 'ANDREA', 'ROMERO', 'AMAZO', 'SAN MATEO', '3125735439', 'KRA 11 este 78-54', 'andrea@gmail.com', '54321', 'cedula_ciudadania', 'cliente'),
(59028452, '6849439494', 'CAMILO', 'LOPEZ', 'ZAPATA', 'LA DESPENSA', '3138595949', 'AV 4 norte 90-10', 'camilo@gmail.com', '48125', 'cedula_extranjera', 'cliente');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `actualizacion_usuarios_dr` BEFORE UPDATE ON `usuarios` FOR EACH ROW Insert into actualizacion_usuarios (ant_id_usuario,ant_numero_documento,ant_nombre,ant_apellido_1,ant_apellido_2,ant_comuna,ant_telefono,ant_direccion,ant_correo,ant_contraseña,act_id_usuario,act_numero_documento,act_nombre,act_apellido_1,act_apellido_2,act_comuna,act_telefono,act_direccion,act_correo,act_contraseña,usuario,f_actualizacion) 
Values(old.id_usuario, old.numero_documento, old.nombre, old.apellido_1, old.apellido_2, old.comuna, old.telefono, old.direccion, old.correo, old.contraseña, new.id_usuario, new.numero_documento, new.nombre, new.apellido_1,new.apellido_2, new.comuna, new.telefono, new.direccion,new.correo, new.contraseña, current_user(), now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `inhabilitar_usuarios` AFTER DELETE ON `usuarios` FOR EACH ROW INSERT INTO usuarios_inhabilitados (h_id_usuario,h_numero_documento,h_nombre,h_apellido_1,h_apellido_2,h_comuna,h_telefono,h_direccion,h_correo,h_contraseña,usuario,f_inhabilitado) VALUES (old.id_usuario, old.numero_documento, old.nombre, old.apellido_1, old.apellido_2, old.comuna, old.telefono, old.direccion, old.correo, old.contraseña, CURRENT_USER, now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `registro_usuarios` AFTER INSERT ON `usuarios` FOR EACH ROW Insert into registros_usuarios(r_id_usuario,r_numero_documento,r_nombre, r_apellido_1, r_apellido_2, r_comuna,r_telefono,r_direccion,r_correo,r_contraseña,usuario,f_registro)
Values(new.id_usuario, new.numero_documento, new.nombre, new.apellido_1, new.apellido_2, new.comuna, new.telefono, new.direccion, new.correo, new.contraseña, CURRENT_USER(), now())
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`,`numero_documento`);

--
-- Indices de la tabla `carrito_compra`
--
ALTER TABLE `carrito_compra`
  ADD PRIMARY KEY (`id_carro_compra`),
  ADD KEY `cod_plato` (`cod_plato`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `domiciliarios`
--
ALTER TABLE `domiciliarios`
  ADD PRIMARY KEY (`id_domiciliario`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`cod_factura`),
  ADD KEY `id_carro_compra` (`id_carro_compra`),
  ADD KEY `cod_metodo_pago` (`cod_metodo_pago`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `metodos_pago`
--
ALTER TABLE `metodos_pago`
  ADD PRIMARY KEY (`cod_metodo_pago`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD KEY `cod_factura` (`cod_factura`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_domiciliario` (`id_domiciliario`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`cod_plato`),
  ADD KEY `cod_restaurante` (`cod_restaurante`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`cod_restaurante`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`,`numero_documento`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_compra`
--
ALTER TABLE `carrito_compra`
  ADD CONSTRAINT `carrito_compra_ibfk_1` FOREIGN KEY (`cod_plato`) REFERENCES `platos` (`cod_plato`),
  ADD CONSTRAINT `carrito_compra_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_carro_compra`) REFERENCES `carrito_compra` (`id_carro_compra`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`cod_metodo_pago`) REFERENCES `metodos_pago` (`cod_metodo_pago`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`cod_factura`) REFERENCES `factura` (`cod_factura`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_domiciliario`) REFERENCES `domiciliarios` (`id_domiciliario`);

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `platos_ibfk_1` FOREIGN KEY (`cod_restaurante`) REFERENCES `restaurante` (`cod_restaurante`);

--
-- Filtros para la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD CONSTRAINT `restaurante_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
