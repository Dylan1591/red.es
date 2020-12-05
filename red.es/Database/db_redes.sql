-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2020 a las 21:16:27
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `acti_nombre` varchar(65) NOT NULL,
  `acti_descripcion` text NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `acti_nombre`, `acti_descripcion`, `id_estado`) VALUES
(1, 'Reciclaje', 'Se receiclara las botellas plasticas',1),
(2, 'Reutilizar', 'Se reutilizaran las botellas plasticas',1),
(3, 'Tour', 'Se realizara un tour por el paramos X',1),
(4, 'Introducción a la Educación Ambiental', 'La Educación Ambiental tiene como objetivo fomentar la conciencia ambiental',1),
(5, 'Energía', 'Descubre cómo mostrar a los niños su importancia, construyendo juntos un invernadero, un molinillo de agua',1),
(6, 'Paisaje', '¿Qué factores naturales intervienen en la formación de un paisaje?',1),
(7, 'Aire y medio ambiente', '¿Qué es y de qué está formada la atmósfera? ¿Y el viento?',1),
(8, 'Agua', 'Ayuda a concienciar a los más pequeños de su importancia con diversos juegos y actividades',1),
(9, 'Animales', '¿Sabes la importancia que tiene cada uno de los seres vivos de la tierra?',1),
(10, 'Acción positiva', 'responsabilizarse sobre el consumo que hacen de los recursos',1),
(11, 'El cristal con que se mira', 'un enigma en tres fases, que plantea cómo las perspectivas que tenemos sobre los hechos y acontecimientos condicionan nuestras acciones y decisiones.',1),
(12, 'Rincones vivos', '¿Tenemos que resignarnos a que, poco a poco, nuestro entorno se vaya convirtiendo en un desierto para la vida?',1),
(13, 'Plantar un seto vivo', 'Elegir un lugar apropiado, Estudiar otros setos de la zona, Elegir las especies que se plantarán, plantar',1),
(14, 'Estilo de vida y CO2', 'Toma de conciencia de la importancia del comportamiento individual en la contribución al problema de la contaminación',1),
(15, 'Grandes diferencias', 'introducir los conceptos de desarrollo sostenible y establecer discusiones sobre las diferencias en el grado de desarrollo de los distintos países y en la contaminación.',1),
(16, 'Siguiendo el rastro', 'Se propone hacer un seguimiento (o, en su caso, revisión de hemeroteca) de 1 a 3 meses de duración de dos tipos de informaciones',1),
(17, '¡Mójate!', 'Unas consecuencias parecen inmediatas: el racionamiento del agua, la imposibilidad de emplearla para beber y la necesidad de elevar considerablemente su precio.',1),
(18, 'Actividades de campo', 'Las actividades interpretativas de campo ayudan a sedimentar una serie de nociones, ideas y conceptos sobre fenómenos y procesos ligados a la naturaleza',1),
(19, 'La ciudad vivida', 'Estas actividades pretenden que reflexiones sobre el municipio donde vives o en el que pasas más tiempo trabajando...',1),
(20, 'Programa educativo en torno a un espacio natural protegido', 'Un programa formal de educación ambiental sobre un espacio protegido',1);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegio`
--

CREATE TABLE `colegio` (
  `id_colegio` int(11) NOT NULL,
  `cole_nombre` varchar(50) NOT NULL,
  `cole_celular` int(12) NOT NULL,
  `cole_direccion` varchar(100) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colegio`
--

INSERT INTO `colegio` (`id_colegio`, `cole_nombre`, `cole_celular`, `cole_direccion`, `id_estado`) VALUES
(1, 'INTITUTO TECTNICO INDUSTRIAL PILOTO', 35465165, 'Calle 68 No. 45-61', 1),
(2, 'GERARDO PAREDES ', 23547654, 'Calle 68 No. 45-61', 2),
(3, 'SAN JORGE DE INGLATERRA', 7386002891, 'Cl 147 No. 16A-83, C.P 11001', 1),
(4, 'LA COLINA', 8693725382,'Cl 6 No. 65-10, C.P 11001',1),
(5, 'GIMNASIO COLOMBO BRITANICO', 8291179510,'Cr 73 No. 61-14, C.P 11001',1),
(6, 'JOSE MAX LEON', 7968759569,'Tr 21 No. 60-94, C.P 11001',1),
(7, 'HELVETIA', 8808268719,'Cl 52 No. 46-16 L 117',2),
(8, 'REYES CATOLICOS', 6209323576,'Cr 17 No. 3A-09, C.P 11001',1),
(9, 'CAMPOALEGRE', 6863302740,'Cl 146A No. 40A-60, C.P 11001',1),
(10, 'CALASANZ', 6908102432,'Cl 5 No. 57-04 LC B3, C.P 76001',1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallerollusuario`
--

CREATE TABLE `detallerollusuario` (
  `id_DetalleRollUsuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_roll` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `esta_Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `esta_Nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(4, 'Certificado'),
(5, 'No certificado');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `estu_nombre` varchar(50) NOT NULL,
  `estu_apellido` varchar(50) NOT NULL,
  `estu_identificacion` bigint(12) NOT NULL,
  `estu_nacimiento` date NOT NULL,
  `estu_celular` bigint(12) NOT NULL,
  `estu_nombreAcudiente` varchar(50) NOT NULL,
  `estu_celularAcudiente` bigint(12) NOT NULL,
  `estu_correo` varchar(50) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (1, 'Avrit', 'Burgill', 3528552655, '2008/12/22', 7539963787, 'Avrit Burgill', 6226725817, 'aburgill0@liveinternet.ru', 4, 1, 1);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (2, 'Rory', 'Dunkerly', 5025234112, '2014/09/14', 2396253484, 'Rory Dunkerly', 9024561803, 'rdunkerly1@japanpost.jp', 4, 2, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (3, 'Trevor', 'Plumptre', 3373938451, '2014/05/18', 2888285326, 'Trevor Plumptre', 9536545039, 'tplumptre2@blinklist.com', 4, 3, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (4, 'Ddene', 'D''Alesco', 2158289479, '2013/12/15', 1627859767, 'Ddene D''Alesco', 1159455426, 'ddalesco3@wisc.edu', 4, 4, 1);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (5, 'Liva', 'D''Hooge', 9115866349, '2014/02/11', 4636055006, 'Liva D''Hooge', 8324202662, 'ldhooge4@smugmug.com', 4, 5, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (6, 'Claudian', 'Leamy', 7596016661, '2012/09/19', 3268345353, 'Claudian Leamy', 8632744616, 'cleamy5@elpais.com', 4, 6, 1);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (7, 'Alis', 'Croot', 5610762732, '2013/06/25', 3083814860, 'Alis Croot', 9449230371, 'acroot6@usgs.gov', 4, 7, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (8, 'Millicent', 'Stiffkins', 9424718877, '2011/10/03', 4049572712, 'Millicent Stiffkins', 7651260283, 'mstiffkins7@reddit.com', 4, 8, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (9, 'Raddie', 'Camies', 3272218779, '2010/05/19', 1926611146, 'Raddie Camies', 6891552285, 'rcamies8@cbslocal.com', 4, 9, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (10, 'Padraig', 'Mathon', 2540878489, '2012/04/29', 4913653189, 'Padraig Mathon', 8735557870, 'pmathon9@cocolog-nifty.com', 4, 10, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (11, 'Cobb', 'Sall', 6458770432, '2008/12/11', 3406056814, 'Cobb Sall', 5724224377, 'csalla@friendfeed.com', 4, 11, 2);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (12, 'Missie', 'Cosford', 8511694994, '2012/01/29', 4085898343, 'Missie Cosford', 8743745734, 'mcosfordb@sphinn.com', 4, 12, 2);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (13, 'Annice', 'Georgievski', 8448505801, '2013/11/09', 8654344967, 'Annice Georgievski', 2219635680, 'ageorgievskic@163.com', 5, 13, 1);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (14, 'Gawen', 'Chipperfield', 3223558455, '2010/06/11', 7539872102, 'Gawen Chipperfield', 5104597482, 'gchipperfieldd@hao123.com', 5, 14, 1);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (15, 'Nickolaus', 'McCaskell', 5995779504, '2009/09/19', 9640209114, 'Nickolaus McCaskell', 1690055418, 'nmccaskelle@github.com', 5, 15, 2);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (16, 'Bentley', 'Sibyllina', 4146721400, '2014/11/17', 1215501928, 'Bentley Sibyllina', 1698898728, 'bsibyllinaf@omniture.com', 5, 16, 1);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (17, 'Daryn', 'Tregidga', 3698942227, '2012/01/09', 6266404684, 'Daryn Tregidga', 8327852872, 'dtregidgag@thetimes.co.uk', 5, 17, 2);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (18, 'Byron', 'Jagoe', 6369216757, '2014/04/09', 7856029194, 'Byron Jagoe', 2181203332, 'bjagoeh@google.com.hk', 5, 18, 3);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (19, 'Marcel', 'Guirard', 1133394308, '2013/02/21', 6188170513, 'Marcel Guirard', 6320694611, 'mguirardi@ow.ly', 5, 19, 2);
insert into estudiante (id_estudiante, estu_nombre, estu_apellido, estu_identificacion, estu_nacimiento, estu_celular, estu_nombreAcudiente, estu_celularAcudiente, estu_correo, id_estado, id_usuario, id_grado) values (20, 'Kimmy', 'Luckings', 5926786388, '2009/04/27', 4148288588, 'Kimmy Luckings', 4755662173, 'kluckingsj@mac.com', 5, 20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL,
  `grad_nombre` varchar(20) NOT NULL,
  `grad_horasTotales` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `grad_nombre`, `grad_horasTotales`) VALUES
(1, 'Noveno', 120),
(2, 'Decimo', 120),
(3, 'Once', 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `id_hora` int(11) NOT NULL,
  `hora_fecha` date NOT NULL,
  `hora` int(3) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (1, '2019/4/26/', 1, 1, 1, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (2, '2020/9/17/', 5, 2, 2, 23);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (3, '2018/1/12/', 2, 3, 3, 24);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (4, '2018/2/4/', 3, 4, 4, 30);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (5, '2017/10/17/', 5, 5, 5, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (6, '2018/12/31', 1, 4, 2, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (7, '2015/10/12', 4, 4, 5, 34);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (8, '2017/06/11', 4, 15, 2, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (9, '2019/07/21', 2, 19, 9, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (10, '2015/05/25', 2, 2, 3, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (11, '2016/04/02', 5, 15, 9, 39);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (12, '2018/05/06', 3, 8, 2, 23);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (13, '2019/11/03', 1, 5, 8, 33);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (14, '2016/06/06', 1, 18, 9, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (15, '2016/02/29', 2, 1, 9, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (16, '2016/09/27', 4, 2, 10, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (17, '2018/12/04', 5, 4, 9, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (18, '2020/07/27', 5, 5, 4, 37);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (19, '2018/04/07', 5, 17, 9, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (20, '2019/03/19', 4, 5, 3, 32);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (21, '2020/02/28', 1, 7, 1, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (22, '2018/03/20', 3, 9, 6, 28);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (23, '2018/10/15', 1, 12, 2, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (24, '2017/12/30', 3, 17, 18, 38);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (25, '2018/09/15', 1, 5, 10, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (26, '2019/06/18', 1, 15, 10, 39);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (27, '2019/04/19', 3, 6, 7, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (28, '2018/01/26', 4, 5, 6, 22);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (29, '2020/03/08', 1, 7, 3, 28);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (30, '2020/02/10', 1, 14, 14, 36);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (31, '2015/10/11', 3, 19, 1, 31);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (32, '2019/06/17', 1, 17, 10, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (33, '2018/10/21', 2, 10, 10, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (34, '2017/03/15', 3, 10, 15, 22);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (35, '2018/09/23', 4, 7, 4, 26);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (36, '2016/03/08', 5, 3, 6, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (37, '2020/09/10', 1, 14, 2, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (38, '2019/03/31', 4, 18, 6, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (39, '2018/02/16', 1, 16, 16, 36);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (40, '2020/05/27', 1, 15, 3, 26);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (41, '2019/07/09', 3, 18, 9, 36);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (42, '2017/09/02', 5, 11, 6, 38);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (43, '2015/07/27', 5, 18, 6, 28);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (44, '2016/05/16', 1, 15, 14, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (45, '2019/10/15', 3, 17, 3, 34);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (46, '2015/10/06', 1, 15, 10, 30);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (47, '2016/11/25', 4, 8, 6, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (48, '2016/07/01', 2, 17, 3, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (49, '2015/12/24', 2, 5, 9, 30);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (50, '2018/11/07', 1, 12, 13, 26);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (51, '2019/01/15', 5, 4, 6, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (52, '2019/12/26', 2, 13, 1, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (53, '2020/01/30', 4, 1, 3, 39);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (54, '2019/05/13', 1, 15, 18, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (55, '2020/03/19', 3, 15, 20, 24);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (56, '2018/05/28', 1, 13, 9, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (57, '2016/06/04', 2, 12, 12, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (58, '2018/08/31', 2, 8, 3, 32);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (59, '2016/11/09', 5, 2, 4, 22);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (60, '2015/05/28', 4, 20, 19, 32);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (61, '2016/03/08', 4, 14, 9, 23);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (62, '2018/02/16', 3, 15, 3, 39);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (63, '2020/04/21', 1, 18, 13, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (64, '2019/06/24', 3, 2, 3, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (65, '2016/09/22', 1, 2, 12, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (66, '09/03/2019', 1, 5, 11, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (67, '2018/02/23', 1, 13, 15, 32);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (68, '2018/11/24', 3, 11, 15, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (69, '2019/10/10', 2, 18, 4, 32);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (70, '2018/05/15', 4, 2, 9, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (71, '2016/01/17', 1, 19, 4, 39);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (72, '2016/07/27', 5, 11, 15, 37);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (73, '2019/03/03', 4, 13, 5, 38);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (74, '2017/06/01', 2, 16, 15, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (75, '2017/08/03', 5, 15, 6, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (76, '2020/02/22', 1, 16, 15, 36);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (77, '2018/02/08', 4, 15, 18, 23);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (78, '2020/09/05', 3, 15, 4, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (79, '2020/03/03', 5, 12, 10, 24);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (80, '2016/05/31', 3, 16, 3, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (81, '2018/01/29', 2, 9, 6, 33);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (82, '2017/10/07', 2, 12, 8, 37);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (83, '2017/03/03', 4, 5, 15, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (84, '2015/05/02', 3, 11, 11, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (85, '2019/02/25', 1, 9, 15, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (86, '2018/12/27', 4, 8, 6, 38);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (87, '2018/04/10', 2, 1, 8, 33);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (88, '2019/06/10', 1, 15, 3, 38);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (89, '2019/10/24', 3, 15, 3, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (90, '2016/03/16', 4, 10, 19, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (91, '2015/07/12', 1, 3, 2, 26);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (92, '2015/09/04', 1, 19, 6, 33);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (93, '2018/09/07', 4, 14, 15, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (94, '2020/10/04', 1, 16, 12, 36);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (95, '2016/02/16', 1, 20, 19, 26);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (96, '2015/08/16', 4, 16, 5, 23);



insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (97, '2019/4/26/', 5, 2, 1, 21);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (98, '2020/9/17/', 5, 2, 2, 23);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (99, '2018/1/12/', 5, 2, 3, 24);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (100, '2018/2/4/', 5, 2, 4, 30);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (101, '2017/10/17/', 5, 2, 5, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (102, '2018/12/31', 5, 2, 2, 35);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (103, '2015/10/12', 5, 2, 5, 34);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (104, '2017/06/11', 5, 2, 2, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (105, '2019/07/21', 5, 2, 9, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (106, '2015/05/25', 5, 2, 3, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (107, '2016/04/02', 5, 2, 9, 39);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (108, '2018/05/06', 5, 2, 2, 23);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (109, '2019/11/03', 5, 2, 8, 33);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (110, '2016/06/06', 5, 2, 9, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (111, '2016/02/29', 5, 2, 9, 27);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (112, '2016/09/27', 5, 2, 10, 25);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (113, '2018/12/04', 5, 2, 9, 29);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (114, '2020/07/27', 5, 2, 4, 37);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (115, '2018/04/07', 5, 2, 9, 40);
insert into hora (id_hora, hora_fecha, hora, id_estudiante, id_actividad, id_usuario) values (116, '2018/04/07', 1, 2, 9, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lider`
--

CREATE TABLE `lider` (
  `id_lider` int(11) NOT NULL,
  `lide_nombre` varchar(50) NOT NULL,
  `lide_apellido` varchar(50) NOT NULL,
  `lide_identificacion` int(12) NOT NULL,
  `lide_celular` int(12) NOT NULL,
  `lide_correo` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (1, 'Lars', 'Viney', 853673092, 727326576, 'lviney0@zimbio.com', 21);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (2, 'Carmita', 'MacLese', 152795841, 289250786, 'cmaclese1@etsy.com', 22);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (3, 'Hyacinthie', 'Stobbie', 737427735, 798897778, 'hstobbie2@ebay.co.uk', 23);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (4, 'Hephzibah', 'Heninghem', 434098381, 027113003, 'hheninghem3@networkadvertising.org', 24);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (5, 'Nicola', 'Heaseman', 663473100, 427251361, 'nheaseman4@ask.com', 25);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (6, 'Kiley', 'Pirouet', 907198248, 931566271, 'kpirouet5@sbwire.com', 26);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (7, 'Bruis', 'McGlynn', 336832539, 930183536, 'bmcglynn6@google.co.jp', 27);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (8, 'Archambault', 'Lammerich', 416186766, 797069607, 'alammerich7@pagesperso-orange.fr', 28);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (9, 'Margarethe', 'Heaford', 846467658, 180369121, 'mheaford8@vimeo.com', 29);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (10, 'Yule', 'Edgehill', 255601699, 417794248, 'yedgehill9@typepad.com', 30);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (11, 'Talbot', 'Kramer', 230557089, 810013054, 'tkramera@ftc.gov', 31);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (12, 'Quentin', 'Cromly', 779555542, 750695408, 'qcromlyb@redcross.org', 32);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (13, 'Daveen', 'Spensly', 384829237, 641058581, 'dspenslyc@360.cn', 33);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (14, 'Robb', 'Wardhaugh', 660660476, 778517829, 'rwardhaughd@merriam-webster.com', 34);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (15, 'Guillema', 'Scott', 176308353, 958044614, 'gscotte@topsy.com', 35);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (16, 'Marin', 'Banbrick', 360555310, 295172945, 'mbanbrickf@google.it', 36);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (17, 'Nanice', 'Catling', 883875569, 690900476, 'ncatlingg@tumblr.com', 40);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (18, 'Carline', 'Sheivels', 330639476, 783735343, 'csheivelsh@imgur.com', 32);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (19, 'Ric', 'Lepoidevin', 176276781, 440275714, 'rlepoidevini@miitbeian.gov.cn', 24);
insert into lider (id_lider, lide_nombre, lide_apellido, lide_identificacion, lide_celular, lide_correo, id_usuario) values (20, 'Lynda', 'Capey', 838481531, 916458169, 'lcapeyj@nhs.uk', 25);

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `id_programacion` int(11) NOT NULL,
  `prog_fecha` date NOT NULL,
  `prog_horaInicio` time NOT NULL,
  `prog_horaFinal` time NOT NULL,
  `id_actividad` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_lider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programacion`
--

insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (1, '2020-01-08', '6:23:40', '10:45:03', 1, 1, 1);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (2, '2019-02-17', '10:52:06', '11:18:11', 2, 2, 2);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (3, '2020-06-07', '9:24:57', '7:28:02', 3, 1, 3);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (4, '2018-11-08', '11:59:04', '11:49:35', 4, 1, 5);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (5, '2017-08-16', '10:10:07', '9:15:21', 9, 2, 4);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (6, '2019-04-13', '7:29:57', '6:32:31', 2, 2, 6);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (7, '2014-12-08', '9:42:56', '6:31:28', 6, 2, 7);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (8, '2018-02-09', '6:47:12', '7:04:58', 7, 1, 8);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (9, '2015-03-01', '11:11:55', '11:44:28', 2, 1, 9);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (10, '2014-09-07', '11:37:32', '10:20:57', 1, 2, 10);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (11, '2018-06-21', '8:57:58', '11:56:41', 9, 2, 11);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (12, '2016-07-24', '7:08:29', '6:16:17', 10, 1, 12);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (13, '2019-02-22', '11:19:41', '6:14:41', 4, 2, 13);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (14, '2015-10-23', '8:54:07', '11:19:24', 4, 1, 14);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (15, '2017-02-02', '11:12:34', '10:57:02', 7, 1, 15);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (16, '2020-10-06', '8:37:30', '10:23:52', 1, 2, 16);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (17, '2016-01-01', '6:28:03', '9:14:26', 9, 2, 17);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (18, '2019-04-05', '10:42:26', '9:40:30', 6, 1, 18);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (19, '2019-11-01', '10:16:21', '9:18:19', 7, 1, 19);
insert into programacion (id_programacion, prog_fecha, prog_horaInicio, prog_horaFinal, id_actividad, id_estado, id_lider) values (20, '2016-03-19', '9:40:32', '6:44:50', 9, 1, 20);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roll`
--

CREATE TABLE `roll` (
  `id_roll` int(11) NOT NULL,
  `roll_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roll`
--

INSERT INTO `roll` (`id_roll`, `roll_nombre`) VALUES
(1, 'Estudiante'),
(2, 'Lider'),
(3, 'Instructor'),
(4, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usua_correo` varchar(50) NOT NULL,
  `usua_clave` varchar(30) NOT NULL,
  `id_roll` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (1, 'usmewings0@ucoz.ru', 'f6zGKSFm', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (2, 'ridwalevans1@nih.gov', 'HKZgD1', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (3, 'cthompson2@netlog.com', '3qHhUQ', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (4, 'cguilliatt3@gizmodo.com', 'grfrkp', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (5, 'ctesche4@ca.gov', 'Z9wOYVoA3GG', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (6, 'jmaker5@ebay.com', 'vM3FqvN', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (7, 'kmclevie6@prweb.com', 'enIkFp2i6MFw', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (8, 'unaismith7@yahoo.co.jp', 'ck4JFbG', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (9, 'sfergusson8@hibu.com', 'IhIJjIhW', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (10, 'owildber9@technorati.com', '9ZwcxtCjjP', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (11, 'rtellenbroka@g.co', 'EPsrnFA7paU', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (12, 'scraydonb@state.tx.us', '06RU5P', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (13, 'opolackc@icio.us', 'l2mksOB', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (14, 'ctremathackd@comsenz.com', '8rF7BO', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (15, 'nnannizzie@webnode.com', 'a46w60CC1M1B', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (16, 'mkentishf@free.fr', 'DS3AScop8VbP', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (17, 'bposselg@cbsnews.com', 'rhIbpcly6', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (18, 'pharralh@ycombinator.com', 'l9cq9v', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (19, 'ibennincki@wp.com', 'vMqcR4Thrir', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (20, 'bwolferj@nba.com', '6WuOZ05ZpsI3', 1, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (21, 'smattocks0@parallels.com', '9kSiUaL3', 2, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (22, 'cgarvan1@indiegogo.com', 'kHsP9jD', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (23, 'tkuzemka2@woothemes.com', 'k0UKfIuhxsHU', 3, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (24, 'ctidgewell3@wordpress.com', '67OPovz8pf', 3, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (25, 'vdigance4@pcworld.com', 'Qtn9RJXdHXF', 2, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (26, 'lraund5@cbsnews.com', '3gexfHhQ', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (27, 'smithun6@nbcnews.com', 'Eu7NxH', 2, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (28, 'gmiddell7@indiatimes.com', 'wnWuSmZh', 3, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (29, 'dchattoe8@about.com', '26ss4M0IY', 3, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (30, 'dpaolino9@dmoz.org', 'gvaMqN0en18', 2, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (31, 'msummerleya@oakley.com', 'dITWWeTGJ9a', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (32, 'mtrumperb@twitter.com', 'xspo1FaK86H', 3, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (33, 'gpoulglaisc@drupal.org', 'nFcArvRIQxG', 3, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (34, 'rperotd@mayoclinic.com', 'NjSP9L5YNx', 3, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (35, 'duvedalee@mediafire.com', 'vPUfGv8G', 2, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (36, 'temigf@cnet.com', 'IkTeOZ', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (37, 'eautong@networksolutions.com', '28iRCA3IDp6', 3, 2);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (38, 'afarnyh@upenn.edu', 'JQmRqQiwCR', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (39, 'jresuni@trellian.com', 'yFuSSU5Q52SF', 3, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (40, 'obyrdej@diigo.com', 'f0doEn0GtW', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (41, 'estu@gmail.com', '28iRCA3IDp6', 1, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (42, 'lider@gmail.com', 'JQmRqQiwCR', 2, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (43, 'instru@gmail.com', 'yFuSSU5Q52SF', 3, 1);
insert into usuario (id_usuario, usua_correo, usua_clave, id_roll, id_estado) values (44, 'admin@gmail.com', '12345', 4, 1);



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `fk_actividad_estado` (`id_estado`) USING BTREE;
--
-- Indices de la tabla `colegio`
--
ALTER TABLE `colegio`
  ADD PRIMARY KEY (`id_colegio`),
  ADD UNIQUE KEY `cole_nombre` (`cole_nombre`),
  ADD KEY `fk_colegio_estado` (`id_estado`) USING BTREE;

--
-- Indices de la tabla `detallerollusuario`
--
ALTER TABLE `detallerollusuario`
  ADD PRIMARY KEY (`id_DetalleRollUsuario`),
  ADD KEY `id_usuariofk` (`id_usuario`),
  ADD KEY `id_rollfk` (`id_roll`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);



--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD UNIQUE KEY `estu_identificacion` (`estu_identificacion`),
  ADD KEY `fk_estudiante_usuario` (`id_usuario`),
  ADD KEY `fk_estudiante_estado` (`id_estado`),
  ADD KEY `fk_estudiante_grado` (`id_grado`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`id_hora`),
  ADD KEY `fk_hora_estudiante` (`id_estudiante`),
  ADD KEY `fk_hora_actividad` (`id_actividad`),
  ADD KEY `fk_hora_usuario` (`id_usuario`);

--
-- Indices de la tabla `lider`
--
ALTER TABLE `lider`
  ADD PRIMARY KEY (`id_lider`),
  ADD UNIQUE KEY `lide_identificacion` (`lide_identificacion`),
  ADD KEY `fk_lider_usuario` (`id_usuario`);


--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id_programacion`),
  ADD KEY `fk_programacion_actividad` (`id_actividad`),
  ADD KEY `id_estado` (`id_estado`) USING BTREE,
  ADD KEY `fk_programacion_lider` (`id_lider`);


--
-- Indices de la tabla `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`id_roll`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usua_correo` (`usua_correo`),
  ADD KEY `id_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `colegio`
--
ALTER TABLE `colegio`
  MODIFY `id_colegio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hora`
--
ALTER TABLE `hora`
  MODIFY `id_hora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lider`
--
ALTER TABLE `lider`
  MODIFY `id_lider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id_programacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roll`
--
ALTER TABLE `roll`
  MODIFY `id_roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `colegio`
--
ALTER TABLE `colegio`
  ADD CONSTRAINT `colegio_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `detallerollusuario`
--
ALTER TABLE `detallerollusuario`
  ADD CONSTRAINT `id_rollfk` FOREIGN KEY (`id_roll`) REFERENCES `roll` (`id_roll`),
  ADD CONSTRAINT `id_usuariofk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_grado` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`),
  ADD CONSTRAINT `fk_estudiante_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fk_estudiante_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `hora`
--
ALTER TABLE `hora`
  ADD CONSTRAINT `fk_hora_actividad` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`),
  ADD CONSTRAINT `fk_hora_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  ADD CONSTRAINT `fk_hora_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `lider`
--
ALTER TABLE `lider`
  ADD CONSTRAINT `fk_lider_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD CONSTRAINT `fk_programacion_actividad` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`),
  ADD CONSTRAINT `programacion_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fk_programacion_lider` FOREIGN KEY (`id_lider`) REFERENCES `lider` (`id_lider`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);
COMMIT;
--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `fk_actividad_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
