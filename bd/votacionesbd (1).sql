-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2024 a las 22:18:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votacionesbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `idEstudiante` int(11) NOT NULL,
  `idEleccion` int(11) NOT NULL,
  `numEnTarjeton` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `lema` varchar(100) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`idEstudiante`, `idEleccion`, `numEnTarjeton`, `idCurso`, `foto`, `lema`, `idEstado`) VALUES
(1, 0, 1, 11, 'foto1.jpg', 'Por un mejor futuro', 1),
(2, 0, 2, 12, 'foto2.jpg', 'Unidos por el cambio', 1),
(3, 0, 3, 13, 'foto3.jpg', 'Educación para todos', 1),
(4, 0, 4, 14, 'foto4.jpg', 'Avancemos juntos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(2) NOT NULL,
  `idGrado` int(2) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idCurso`, `idGrado`, `nombre`) VALUES
(1, 1, 'Primero A'),
(2, 1, 'Primero B'),
(3, 2, 'Segundo A'),
(4, 2, 'Segundo B'),
(5, 3, 'Tercero A'),
(6, 3, 'Tercero B'),
(7, 4, 'Cuarto A'),
(8, 4, 'Cuarto B'),
(9, 5, 'Quinto A'),
(10, 5, 'Quinto B'),
(11, 11, 'Undécimo A'),
(12, 11, 'Undécimo B'),
(13, 11, 'Undécimo C'),
(14, 11, 'Undécimo D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `idDocente` int(11) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `idCursos` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`idDocente`, `cedula`, `nombre`, `apellidos`, `idCursos`, `edad`, `sexo`, `correo`) VALUES
(1, '123456789', 'Carlos', 'Pérez', 1, 35, 'Masculino', 'carlos.perez@example.com'),
(2, '987654321', 'Ana', 'Martínez', 2, 40, 'Femenino', 'ana.martinez@example.com'),
(3, '123123123', 'Luis', 'Rodríguez', 3, 45, 'Masculino', 'luis.rodriguez@example.com'),
(4, '321321321', 'María', 'García', 4, 50, 'Femenino', 'maria.garcia@example.com'),
(5, '456456456', 'Pedro', 'López', 5, 55, 'Masculino', 'pedro.lopez@example.com'),
(6, '654654654', 'Luisa', 'Fernández', 6, 38, 'Femenino', 'luisa.fernandez@example.com'),
(7, '789789789', 'Juan', 'Gómez', 7, 42, 'Masculino', 'juan.gomez@example.com'),
(8, '987987987', 'Elena', 'Díaz', 8, 36, 'Femenino', 'elena.diaz@example.com'),
(9, '741741741', 'Ricardo', 'Hernández', 9, 39, 'Masculino', 'ricardo.hernandez@example.com'),
(10, '852852852', 'Clara', 'Sánchez', 10, 34, 'Femenino', 'clara.sanchez@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eleccion`
--

CREATE TABLE `eleccion` (
  `idEleccion` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(2) NOT NULL,
  `nombreEstado` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `nombreEstado`, `descripcion`) VALUES
(1, 'Activo', 'Estado activo'),
(2, 'Inactivo', 'Estado inactivo'),
(3, 'Pendiente', 'Estado pendiente'),
(4, 'Suspendido', 'Estado suspendido'),
(5, 'Eliminado', 'Estado eliminado'),
(8, 'Finalizado', 'Estado finalizado'),
(9, 'Verificado', 'Estado verificado'),
(10, 'Anulado', 'Estado anulado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idEstudiante` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `idCurso` int(2) NOT NULL,
  `idEstado` int(2) NOT NULL,
  `idRol` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `idMesa` int(3) NOT NULL,
  `sNVoto` int(1) NOT NULL COMMENT '1 = sí votó y 0 = no votó'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idEstudiante`, `nombre`, `apellido`, `idCurso`, `idEstado`, `idRol`, `edad`, `sexo`, `correo`, `passw`, `idMesa`, `sNVoto`) VALUES
(2, 'Ana', 'López', 2, 2, 2, 19, 'Femenino', 'ana.lopez@example.com', 'password2', 2, 0),
(3, 'Carlos', 'García', 3, 3, 1, 20, 'Masculino', 'carlos.garcia@example.com', 'password3', 3, 0),
(4, 'María', 'Rodríguez', 4, 4, 2, 21, 'Femenino', 'maria.rodriguez@example.com', 'password4', 1, 0),
(5, 'Pedro', 'Martínez', 5, 5, 1, 22, 'Masculino', 'pedro.martinez@example.com', 'password5', 2, 0),
(6, 'Luisa', 'González', 6, 1, 2, 23, 'Femenino', 'luisa.gonzalez@example.com', 'password6', 4, 0),
(7, 'Ricardo', 'Hernández', 7, 2, 1, 24, 'Masculino', 'ricardo.hernandez@example.com', 'password7', 1, 0),
(8, 'Elena', 'Díaz', 8, 3, 2, 25, 'Femenino', 'elena.diaz@example.com', 'password8', 4, 0),
(9, 'Clara', 'Sánchez', 9, 4, 1, 26, 'Femenino', 'clara.sanchez@example.com', 'password9', 2, 0),
(10, 'Luis', 'Fernández', 10, 1, 2, 27, 'Masculino', 'luis.fernandez@example.com', 'password10', 2, 0),
(14, 'Admin', 'Admin', 8, 1, 0, 11, 'Masculino', 'admin@gmail.com', '123123', 2, 0),
(15, 'Jhoan', 'Robles', 8, 1, 0, 40, 'Masculino', 'jhoanrobles@gmail.com', '123123', 2, 0),
(16, 'Eduth', 'Mozo', 8, 1, 0, 20, 'Masculino', 'eduthmozo@gmail.com', '12121212', 2, 0),
(17, 'Pedro', 'Vergara', 8, 1, 0, 24, 'Masculino', 'pedrovergara@gmail.com', '321321', 2, 0),
(18, 'Pedro', 'Vergara', 8, 1, 0, 24, 'Masculino', 'pedrovergara@gmail.com', '123123123', 2, 0),
(19, 'Karen', 'Fonseca', 8, 1, 0, 33, 'Femenino', 'karenfonseca@gmail.com', '333333', 2, 0),
(20, 'Emely', 'Castillo', 8, 1, 0, 11, 'Femenino', 'emelycastillo@gmail.com', '221122', 2, 0),
(21, 'Dacvid', 'Castillo', 8, 1, 0, 33, 'Masculino', 'davidcastillo@gmail.com', '1234567', 2, 0),
(22, 'Marina', 'Carbono', 8, 1, 0, 79, 'Femenino', 'marina@gmail.com', '221112', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `idGrado` int(11) NOT NULL,
  `numGrado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idGrado`, `numGrado`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `idMesa` int(11) NOT NULL,
  `numMesa` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`idMesa`, `numMesa`, `idEstado`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idReporte` int(11) NOT NULL,
  `numReporte` int(11) NOT NULL,
  `idEleccion` int(11) NOT NULL,
  `idTestigo` int(11) NOT NULL,
  `observacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`idReporte`, `numReporte`, `idEleccion`, `idTestigo`, `observacion`) VALUES
(1, 1, 0, 1, 'Observación 1'),
(2, 2, 0, 2, 'Observación 2'),
(3, 3, 0, 3, 'Observación 3'),
(4, 4, 0, 4, 'Observación 4'),
(5, 5, 0, 5, 'Observación 5'),
(6, 6, 0, 6, 'Observación 6'),
(7, 7, 0, 7, 'Observación 7'),
(8, 8, 0, 8, 'Observación 8'),
(9, 9, 0, 9, 'Observación 9'),
(10, 10, 0, 10, 'Observación 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `numRrol` int(11) NOT NULL,
  `nombreRol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `numRrol`, `nombreRol`) VALUES
(0, 5, 'Estudiante'),
(1, 1, 'Votante'),
(2, 2, 'Testigo'),
(3, 3, 'Jurado'),
(4, 4, 'Contralor'),
(5, 5, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE `voto` (
  `idVoto` int(11) NOT NULL,
  `numVoto` int(11) DEFAULT NULL,
  `horaVoto` time DEFAULT NULL,
  `fechaVoto` date DEFAULT NULL,
  `idEstadoVoto` int(11) DEFAULT NULL,
  `idCandidatos` int(11) DEFAULT NULL,
  `idEleccion` int(11) NOT NULL,
  `idMesa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`idVoto`, `numVoto`, `horaVoto`, `fechaVoto`, `idEstadoVoto`, `idCandidatos`, `idEleccion`, `idMesa`) VALUES
(1, 1, '08:00:00', '2024-08-26', 1, 1, 0, 1),
(2, 2, '08:15:00', '2024-08-26', 2, 2, 0, 2),
(3, 3, '08:30:00', '2024-08-26', 3, 3, 0, 3),
(4, 4, '08:45:00', '2024-08-26', 4, 4, 0, 4),
(5, 5, '09:00:00', '2024-08-26', 5, 5, 0, 2),
(6, 6, '09:15:00', '2024-08-26', 6, 6, 0, 2),
(7, 7, '09:30:00', '2024-08-26', 7, 7, 0, 2),
(8, 8, '09:45:00', '2024-08-26', 8, 8, 0, 4),
(9, 9, '10:00:00', '2024-08-26', 9, 9, 0, 1),
(10, 10, '10:15:00', '2024-08-26', 10, 10, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`idEstudiante`),
  ADD KEY `id_curso` (`idCurso`),
  ADD KEY `idEstado` (`idEstado`),
  ADD KEY `idEleccion` (`idEleccion`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `id_grado` (`idGrado`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`idDocente`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `id_cursos` (`idCursos`);

--
-- Indices de la tabla `eleccion`
--
ALTER TABLE `eleccion`
  ADD PRIMARY KEY (`idEleccion`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idEstudiante`),
  ADD KEY `id_curso` (`idCurso`),
  ADD KEY `id_estado` (`idEstado`),
  ADD KEY `id_rol` (`idRol`),
  ADD KEY `idMEsa` (`idMesa`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`idGrado`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`idMesa`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idReporte`),
  ADD KEY `idTestigo` (`idTestigo`),
  ADD KEY `idEleccion` (`idEleccion`) USING BTREE;

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
  ADD PRIMARY KEY (`idVoto`),
  ADD KEY `idMesa` (`idMesa`),
  ADD KEY `idEleccion` (`idEleccion`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eleccion`
--
ALTER TABLE `eleccion`
  MODIFY `idEleccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idEstudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `candidato_ibfk_2` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`),
  ADD CONSTRAINT `candidato_ibfk_3` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idGrado`) REFERENCES `grado` (`idGrado`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`idCursos`) REFERENCES `curso` (`idCurso`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`),
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`),
  ADD CONSTRAINT `estudiante_ibfk_3` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `estudiante_ibfk_4` FOREIGN KEY (`idMesa`) REFERENCES `mesa` (`idMesa`);

--
-- Filtros para la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD CONSTRAINT `mesa_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `voto`
--
ALTER TABLE `voto`
  ADD CONSTRAINT `voto_ibfk_1` FOREIGN KEY (`idMesa`) REFERENCES `mesa` (`idMesa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
