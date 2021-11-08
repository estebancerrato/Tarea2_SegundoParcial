-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-11-2021 a las 01:19:43
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id17432575_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `alumno_identidad` varchar(50) NOT NULL,
  `alumno_primer_nombre` varchar(20) DEFAULT '',
  `alumno_segundo_nombre` varchar(20) DEFAULT '',
  `alumno_primer_apellido` varchar(20) DEFAULT '',
  `alumno_segundo_apellido` varchar(20) DEFAULT '',
  `alumno_genero` varchar(20) DEFAULT '',
  `alumno_fecha_nacimiento` date DEFAULT NULL,
  `alumno_nacionalidad` varchar(20) DEFAULT '',
  `alumno_direccion` varchar(150) DEFAULT '',
  `alumno_departamento` varchar(20) DEFAULT '',
  `alumno_municipio` varchar(20) DEFAULT '',
  `alumno_tel_fijo` varchar(20) DEFAULT '',
  `alumno_tel_celular` varchar(20) DEFAULT '',
  `alumno_becado` varchar(10) DEFAULT '',
  `alumno_fecha_matricula` date DEFAULT NULL,
  `alumno_grado` varchar(10) DEFAULT '',
  `alumno_estado` varchar(10) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`alumno_identidad`, `alumno_primer_nombre`, `alumno_segundo_nombre`, `alumno_primer_apellido`, `alumno_segundo_apellido`, `alumno_genero`, `alumno_fecha_nacimiento`, `alumno_nacionalidad`, `alumno_direccion`, `alumno_departamento`, `alumno_municipio`, `alumno_tel_fijo`, `alumno_tel_celular`, `alumno_becado`, `alumno_fecha_matricula`, `alumno_grado`, `alumno_estado`) VALUES
('0801199420538', 'Esteban', 'Ariel', 'Cerrato', 'Pavon', 'masculino', '1994-10-13', 'Hondureño', 'Col. La Trinidad', 'Francisco Morazan', 'Distrito Central', '22463734', '33061707', 'Si', '2021-10-05', 'grado2', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno_examen`
--

CREATE TABLE `tbl_alumno_examen` (
  `alumno_codigo` int(45) NOT NULL,
  `alumno_nombres` varchar(45) DEFAULT '',
  `alumno_apellidos` varchar(45) DEFAULT '',
  `alumno_fecha_nacimiento` date DEFAULT NULL,
  `alumno_grado` varchar(45) DEFAULT '',
  `alumno_fecha_matricula` date DEFAULT NULL,
  `alumno_telefono` varchar(45) DEFAULT '',
  `alumno_direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alumno_examen`
--

INSERT INTO `tbl_alumno_examen` (`alumno_codigo`, `alumno_nombres`, `alumno_apellidos`, `alumno_fecha_nacimiento`, `alumno_grado`, `alumno_fecha_matricula`, `alumno_telefono`, `alumno_direccion`) VALUES
(1, 'Esteban Ariel', 'Cerrato Pavon', '1994-10-13', 'Undecimo', '2021-10-13', '22463734', 'col. los pinos		    '),
(2, 'Victoria Alejandra', 'Caceres Lopez', '1992-10-13', 'Septimo', '2021-10-13', '22463234', 'Aldea las casitas	    '),
(3, 'Esteban', 'Cerrato', '2021-10-06', 'Septimo', '2021-10-13', '+50422222222', 'Col. La Trinidad'),
(4, 'Alejandro', 'Vaquedano', '2021-09-28', 'Undecimo', '2021-10-13', '33061707', 'San Pedro Sula, Calle 11, Avenida 7'),
(5, 'Esteban', 'Cerrato', '2021-10-04', 'Undecimo', '2021-10-13', '+50422222222', 'Col. La Trinidad'),
(1102, '1', '1', '2000-11-11', 'Septimo', '2021-01-18', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleado`
--

CREATE TABLE `tbl_empleado` (
  `empleado_nombres` varchar(50) DEFAULT '',
  `empleado_primero_apellido` varchar(50) DEFAULT '',
  `empleado_segundo_apellido` varchar(50) DEFAULT '',
  `empleado_cedula` varchar(45) NOT NULL,
  `empleado_fecha_ingreso` date DEFAULT NULL,
  `empleado_fecha_nacimiento` date DEFAULT NULL,
  `empleado_estado_civil` varchar(20) DEFAULT '',
  `empleado_direccion` varchar(150) DEFAULT '',
  `empleado_correo_elecronico` varchar(255) DEFAULT NULL,
  `empleado_tipo` varchar(50) DEFAULT '',
  `empleado_grado_academico` varchar(20) DEFAULT '',
  `empleado_genero` varchar(20) DEFAULT '',
  `empleado_estado` varchar(20) DEFAULT '',
  `empleado_telefono_fijo` varchar(20) DEFAULT '',
  `empleado_telefono_celular` varchar(20) DEFAULT '',
  `empleado_salario` decimal(65,0) DEFAULT NULL,
  `empleado_observaciones` varchar(150) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_empleado`
--

INSERT INTO `tbl_empleado` (`empleado_nombres`, `empleado_primero_apellido`, `empleado_segundo_apellido`, `empleado_cedula`, `empleado_fecha_ingreso`, `empleado_fecha_nacimiento`, `empleado_estado_civil`, `empleado_direccion`, `empleado_correo_elecronico`, `empleado_tipo`, `empleado_grado_academico`, `empleado_genero`, `empleado_estado`, `empleado_telefono_fijo`, `empleado_telefono_celular`, `empleado_salario`, `empleado_observaciones`) VALUES
('Carlos', 'Ramirez', 'Gutierrez', '0801199220533', '2021-10-31', '2008-01-31', 'soltero', 'Col. La Trinidad', 'estebancerrato@hotmail.com', 'administrativo', 'grado 2', 'masculino', 'activo', '22365520', '33002522', 1500, 'Ninguna'),
('ESTEBAN', 'CERRATO', 'PAVON', '0801199420538', '2021-10-26', '2021-10-13', 'soltero', 'TAMARA', 'estebancerrato@hotmail.com', 'administrativo', 'GRADO 1', 'masculino', 'activo', '22463322', '33061252', 25100, 'NINGUNA'),
('Evelyn', 'Cruz', 'Alvarez', '12133', '2021-10-26', '2021-10-19', 'soltero', 'TAMARA', 'estebancerrato@hotmail.com', 'administrativo', 'GRADO 1', 'masculino', 'activo', '656 56 61 61', '656 56 61 61', 232323233, 'sdasdad'),
('Luis', 'Galeano', 'Lopez', '12313123123', '2021-10-30', '2021-09-29', 'soltero', 'Col. La Trinidad', 'estebancerrato@hotmail.com', 'administrativo', 'grado 1', 'masculino', 'activo', '+50422222222', '+50422222222', 100000, 'sdasdasd'),
('Isaias Lorenzo', 'Salinas', 'Wood', '123456', '2021-10-31', '1980-06-18', 'soltero', 'La Ceiba', 'isaias.salinas@uth.com', 'docente', 'Ingenierio en Comput', 'masculino', 'activo', '22448302', '33665588', 125, 'Excelente Catedrático');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usuario_codigo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_clave` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_estado` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empleado_cedula` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usuario_codigo`, `usuario_clave`, `usuario_estado`, `empleado_cedula`) VALUES
('asdasdasdasd', 'asdasdasd', 'ACTIVO', '12313123123'),
('estebancerrato', '54680655', 'ACTIVO', '0801199420538'),
('evelyncruz', 'aasdasdasd', 'INACTIVO', '12133'),
('ilsw', 'olimpia', 'ACTIVO', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario2`
--

CREATE TABLE `tbl_usuario2` (
  `usuario_codigo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_clave` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_estado` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empleado_cedula` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `usuario_clave_temporal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_claveTemp_activa` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario2`
--

INSERT INTO `tbl_usuario2` (`usuario_codigo`, `usuario_clave`, `usuario_estado`, `empleado_cedula`, `usuario_clave_temporal`, `usuario_claveTemp_activa`) VALUES
('cramirez', '', 'ACTIVO', '0801199220533', '#@M[HR`A:O&&m6]', b'1'),
('ecerrato', '54680655', 'ACTIVO', '0801199420538', '', b'0'),
('ecruz', '', 'ACTIVO', '12133', '+v@GV7>uNGU^`g>', b'1'),
('ilsw', 'olimpia', 'ACTIVO', '123456', NULL, b'0'),
('lgaleano', '', 'ACTIVO', '12313123123', ':gA?y;[.2<^#g,P', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`alumno_identidad`);

--
-- Indices de la tabla `tbl_alumno_examen`
--
ALTER TABLE `tbl_alumno_examen`
  ADD PRIMARY KEY (`alumno_codigo`);

--
-- Indices de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD PRIMARY KEY (`empleado_cedula`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usuario_codigo`),
  ADD KEY `empleado_cedula` (`empleado_cedula`);

--
-- Indices de la tabla `tbl_usuario2`
--
ALTER TABLE `tbl_usuario2`
  ADD PRIMARY KEY (`usuario_codigo`),
  ADD KEY `empleado_cedula` (`empleado_cedula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `usuarioEmpleado` FOREIGN KEY (`empleado_cedula`) REFERENCES `tbl_empleado` (`empleado_cedula`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuario2`
--
ALTER TABLE `tbl_usuario2`
  ADD CONSTRAINT `tbl_usuario2_ibfk_1` FOREIGN KEY (`empleado_cedula`) REFERENCES `tbl_empleado` (`empleado_cedula`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
