/*
Navicat MySQL Data Transfer

Source Server         : web2
Source Server Version : 100413
Source Host           : localhost:3306
Source Database       : id17432575_web2

Target Server Type    : MYSQL
Target Server Version : 100413
File Encoding         : 65001

Date: 2021-10-31 11:13:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_alumno
-- ----------------------------
DROP TABLE IF EXISTS `tbl_alumno`;
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
  `alumno_estado` varchar(10) DEFAULT '',
  PRIMARY KEY (`alumno_identidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_alumno
-- ----------------------------
INSERT INTO `tbl_alumno` VALUES ('0801199420538', 'Esteban', 'Ariel', 'Cerrato', 'Pavon', 'masculino', '1994-10-13', 'Hondureño', 'Col. La Trinidad', 'Francisco Morazan', 'Distrito Central', '22463734', '33061707', 'Si', '2021-10-05', 'grado2', 'activo');

-- ----------------------------
-- Table structure for tbl_alumno_examen
-- ----------------------------
DROP TABLE IF EXISTS `tbl_alumno_examen`;
CREATE TABLE `tbl_alumno_examen` (
  `alumno_codigo` int(45) NOT NULL,
  `alumno_nombres` varchar(45) DEFAULT '',
  `alumno_apellidos` varchar(45) DEFAULT '',
  `alumno_fecha_nacimiento` date DEFAULT NULL,
  `alumno_grado` varchar(45) DEFAULT '',
  `alumno_fecha_matricula` date DEFAULT NULL,
  `alumno_telefono` varchar(45) DEFAULT '',
  `alumno_direccion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`alumno_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_alumno_examen
-- ----------------------------
INSERT INTO `tbl_alumno_examen` VALUES ('1', 'Esteban Ariel', 'Cerrato Pavon', '1994-10-13', 'Undecimo', '2021-10-13', '22463734', 'col. los pinos		    ');
INSERT INTO `tbl_alumno_examen` VALUES ('2', 'Victoria Alejandra', 'Caceres Lopez', '1992-10-13', 'Septimo', '2021-10-13', '22463234', 'Aldea las casitas	    ');
INSERT INTO `tbl_alumno_examen` VALUES ('3', 'Esteban', 'Cerrato', '2021-10-06', 'Septimo', '2021-10-13', '+50422222222', 'Col. La Trinidad');
INSERT INTO `tbl_alumno_examen` VALUES ('4', 'Alejandro', 'Vaquedano', '2021-09-28', 'Undecimo', '2021-10-13', '33061707', 'San Pedro Sula, Calle 11, Avenida 7');
INSERT INTO `tbl_alumno_examen` VALUES ('5', 'Esteban', 'Cerrato', '2021-10-04', 'Undecimo', '2021-10-13', '+50422222222', 'Col. La Trinidad');
INSERT INTO `tbl_alumno_examen` VALUES ('1102', '1', '1', '2000-11-11', 'Septimo', '2021-01-18', '1', '1');

-- ----------------------------
-- Table structure for tbl_empleado
-- ----------------------------
DROP TABLE IF EXISTS `tbl_empleado`;
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
  `empleado_observaciones` varchar(150) DEFAULT '',
  PRIMARY KEY (`empleado_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_empleado
-- ----------------------------
INSERT INTO `tbl_empleado` VALUES ('ESTEBAN', 'CERRATO', 'PAVON', '0801199420538', '2021-10-26', '2021-10-13', 'soltero', 'TAMARA', 'estebancerrato@hotmail.com', 'administrativo', 'GRADO 1', 'masculino', 'activo', '22463322', '33061252', '25100', 'NINGUNA');
INSERT INTO `tbl_empleado` VALUES ('Evelyn', 'Cruz', 'Alvarez', '12133', '2021-10-26', '2021-10-19', 'soltero', 'TAMARA', 'estebancerrato@hotmail.com', 'administrativo', 'GRADO 1', 'masculino', 'activo', '656 56 61 61', '656 56 61 61', '232323233', 'sdasdad');
INSERT INTO `tbl_empleado` VALUES ('Luis', 'Galeano', 'Lopez', '12313123123', '2021-10-30', '2021-09-29', 'soltero', 'Col. La Trinidad', 'estebancerrato@hotmail.com', 'administrativo', 'grado 1', 'masculino', 'activo', '+50422222222', '+50422222222', '100000', 'sdasdasd');
INSERT INTO `tbl_empleado` VALUES ('Isaias Lorenzo', 'Salinas', 'Wood', '123456', '2021-10-31', '1980-06-18', 'soltero', 'La Ceiba', 'isaias.salinas@uth.com', 'docente', 'Ingenierio en Comput', 'masculino', 'activo', '22448302', '33665588', '125', 'Excelente Catedrático');

-- ----------------------------
-- Table structure for tbl_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE `tbl_usuario` (
  `usuario_codigo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_clave` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario_estado` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empleado_cedula` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`usuario_codigo`),
  KEY `empleado_cedula` (`empleado_cedula`),
  CONSTRAINT `usuarioEmpleado` FOREIGN KEY (`empleado_cedula`) REFERENCES `tbl_empleado` (`empleado_cedula`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_usuario
-- ----------------------------
INSERT INTO `tbl_usuario` VALUES ('asdasdasdasd', 'asdasdasd', 'ACTIVO', '12313123123');
INSERT INTO `tbl_usuario` VALUES ('estebancerrato', '54680655', 'ACTIVO', '0801199420538');
INSERT INTO `tbl_usuario` VALUES ('evelyncruz', 'aasdasdasd', 'INACTIVO', '12133');
INSERT INTO `tbl_usuario` VALUES ('ilsw', 'olimpia', 'ACTIVO', '123456');
