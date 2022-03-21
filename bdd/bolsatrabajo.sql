-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2022 a las 21:38:09
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bolsatrabajo`
--
CREATE DATABASE IF NOT EXISTS `bolsatrabajo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bolsatrabajo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculums`
--

CREATE TABLE `curriculums` (
  `IdCurriculum` varchar(6) NOT NULL,
  `Profesion` varchar(50) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `IdDatosPersonales` varchar(6) NOT NULL,
  `Nombres` varchar(15) NOT NULL,
  `Apellidos` varchar(15) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Genero` tinyint(1) NOT NULL,
  `IdDireccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesoferta`
--

CREATE TABLE `detallesoferta` (
  `IdDetallesOferta` varchar(6) NOT NULL,
  `AreaEmpresa` varchar(15) NOT NULL,
  `CargoSolicitado` varchar(20) NOT NULL,
  `TipoContratacion` varchar(15) NOT NULL,
  `EducacionMinima` varchar(15) NOT NULL,
  `NivelExperencia` varchar(30) NOT NULL,
  `Edad` varchar(20) NOT NULL,
  `SalarioMin` decimal(10,0) NOT NULL,
  `SalarioMax` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `IdDireccion` int(11) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Calle` varchar(30) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccionesxempresa`
--

CREATE TABLE `direccionesxempresa` (
  `Id` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdDireccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `IdEmpresa` int(11) NOT NULL,
  `NombreEmpresa` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contra` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experencialaboral`
--

CREATE TABLE `experencialaboral` (
  `IdExperencia` varchar(6) NOT NULL,
  `NombreEmpresa` varchar(50) NOT NULL,
  `Puesto` varchar(20) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `IdCurriculum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacionacademica`
--

CREATE TABLE `formacionacademica` (
  `IdFormacionAcademica` int(11) NOT NULL,
  `NombreFormacion` varchar(30) NOT NULL,
  `Institucion` varchar(30) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `IdCurriculum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacionextraacad`
--

CREATE TABLE `formacionextraacad` (
  `IdFormacionExtraAcad` int(11) NOT NULL,
  `NombreCurso` varchar(50) NOT NULL,
  `Entidad` varchar(30) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacionextraxcurriculum`
--

CREATE TABLE `formacionextraxcurriculum` (
  `Id` int(11) NOT NULL,
  `IdFormacionExtraAcad` int(11) NOT NULL,
  `IdCurriculum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `IdHabilidad` int(11) NOT NULL,
  `NombreHabilidad` varchar(30) NOT NULL,
  `IdNivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidadesxcurriculums`
--

CREATE TABLE `habilidadesxcurriculums` (
  `Id` int(11) NOT NULL,
  `IdHabilidad` int(11) NOT NULL,
  `IdCurriculum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `IdIdioma` int(11) NOT NULL,
  `NombreIdioma` varchar(20) NOT NULL,
  `IdNivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomasxcurriculums`
--

CREATE TABLE `idiomasxcurriculums` (
  `Id` int(11) NOT NULL,
  `IdIdioma` int(11) NOT NULL,
  `IdCurriculum` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `IdNivel` int(11) NOT NULL,
  `Nombre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `IdOferta` varchar(6) NOT NULL,
  `NombreOferta` varchar(15) NOT NULL,
  `Descripcion` text NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdDetallesOferta` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertaxusuario`
--

CREATE TABLE `ofertaxusuario` (
  `Id` int(11) NOT NULL,
  `IdOferta` varchar(6) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contra` varchar(12) NOT NULL,
  `IdDatosPersonales` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`IdCurriculum`),
  ADD KEY `fk_cv_usuario` (`IdUsuario`);

--
-- Indices de la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD PRIMARY KEY (`IdDatosPersonales`),
  ADD KEY `fk_datos_direc` (`IdDireccion`);

--
-- Indices de la tabla `detallesoferta`
--
ALTER TABLE `detallesoferta`
  ADD PRIMARY KEY (`IdDetallesOferta`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`IdDireccion`);

--
-- Indices de la tabla `direccionesxempresa`
--
ALTER TABLE `direccionesxempresa`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_dire_empresa` (`IdEmpresa`),
  ADD KEY `fk_direc_empresa` (`IdDireccion`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`IdEmpresa`);

--
-- Indices de la tabla `experencialaboral`
--
ALTER TABLE `experencialaboral`
  ADD PRIMARY KEY (`IdExperencia`),
  ADD KEY `fk_cv_explab` (`IdCurriculum`);

--
-- Indices de la tabla `formacionacademica`
--
ALTER TABLE `formacionacademica`
  ADD PRIMARY KEY (`IdFormacionAcademica`),
  ADD KEY `fk_cv_facad` (`IdCurriculum`);

--
-- Indices de la tabla `formacionextraacad`
--
ALTER TABLE `formacionextraacad`
  ADD PRIMARY KEY (`IdFormacionExtraAcad`);

--
-- Indices de la tabla `formacionextraxcurriculum`
--
ALTER TABLE `formacionextraxcurriculum`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_fextra_cv` (`IdFormacionExtraAcad`),
  ADD KEY `fk_cv_fextra` (`IdCurriculum`);

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`IdHabilidad`),
  ADD KEY `fk_habilidad_nivel` (`IdNivel`);

--
-- Indices de la tabla `habilidadesxcurriculums`
--
ALTER TABLE `habilidadesxcurriculums`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_habilidad_cv` (`IdHabilidad`),
  ADD KEY `fk_cv_habilidad` (`IdCurriculum`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`IdIdioma`),
  ADD KEY `fk_idioma_nivel` (`IdNivel`);

--
-- Indices de la tabla `idiomasxcurriculums`
--
ALTER TABLE `idiomasxcurriculums`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_idioma_cv` (`IdIdioma`),
  ADD KEY `fk_cv_idioma` (`IdCurriculum`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`IdNivel`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`IdOferta`),
  ADD KEY `fk_oferta_empresa` (`IdEmpresa`),
  ADD KEY `fk_oferta_detalles` (`IdDetallesOferta`);

--
-- Indices de la tabla `ofertaxusuario`
--
ALTER TABLE `ofertaxusuario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_oferta_user` (`IdOferta`),
  ADD KEY `fk_oferta_usuario` (`IdUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `fk_usuario_datos` (`IdDatosPersonales`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `IdDireccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccionesxempresa`
--
ALTER TABLE `direccionesxempresa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formacionacademica`
--
ALTER TABLE `formacionacademica`
  MODIFY `IdFormacionAcademica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formacionextraacad`
--
ALTER TABLE `formacionextraacad`
  MODIFY `IdFormacionExtraAcad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formacionextraxcurriculum`
--
ALTER TABLE `formacionextraxcurriculum`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  MODIFY `IdHabilidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habilidadesxcurriculums`
--
ALTER TABLE `habilidadesxcurriculums`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `IdIdioma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idiomasxcurriculums`
--
ALTER TABLE `idiomasxcurriculums`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `IdNivel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertaxusuario`
--
ALTER TABLE `ofertaxusuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curriculums`
--
ALTER TABLE `curriculums`
  ADD CONSTRAINT `fk_cv_usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `datospersonales`
--
ALTER TABLE `datospersonales`
  ADD CONSTRAINT `fk_datos_direc` FOREIGN KEY (`IdDireccion`) REFERENCES `direcciones` (`IdDireccion`);

--
-- Filtros para la tabla `direccionesxempresa`
--
ALTER TABLE `direccionesxempresa`
  ADD CONSTRAINT `fk_dire_empresa` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresas` (`IdEmpresa`),
  ADD CONSTRAINT `fk_direc_empresa` FOREIGN KEY (`IdDireccion`) REFERENCES `direcciones` (`IdDireccion`);

--
-- Filtros para la tabla `experencialaboral`
--
ALTER TABLE `experencialaboral`
  ADD CONSTRAINT `fk_cv_explab` FOREIGN KEY (`IdCurriculum`) REFERENCES `curriculums` (`IdCurriculum`);

--
-- Filtros para la tabla `formacionacademica`
--
ALTER TABLE `formacionacademica`
  ADD CONSTRAINT `fk_cv_facad` FOREIGN KEY (`IdCurriculum`) REFERENCES `curriculums` (`IdCurriculum`);

--
-- Filtros para la tabla `formacionextraxcurriculum`
--
ALTER TABLE `formacionextraxcurriculum`
  ADD CONSTRAINT `fk_cv_fextra` FOREIGN KEY (`IdCurriculum`) REFERENCES `curriculums` (`IdCurriculum`),
  ADD CONSTRAINT `fk_fextra_cv` FOREIGN KEY (`IdFormacionExtraAcad`) REFERENCES `formacionextraacad` (`IdFormacionExtraAcad`);

--
-- Filtros para la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD CONSTRAINT `fk_habilidad_nivel` FOREIGN KEY (`IdNivel`) REFERENCES `nivel` (`IdNivel`);

--
-- Filtros para la tabla `habilidadesxcurriculums`
--
ALTER TABLE `habilidadesxcurriculums`
  ADD CONSTRAINT `fk_cv_habilidad` FOREIGN KEY (`IdCurriculum`) REFERENCES `curriculums` (`IdCurriculum`),
  ADD CONSTRAINT `fk_habilidad_cv` FOREIGN KEY (`IdHabilidad`) REFERENCES `habilidades` (`IdHabilidad`);

--
-- Filtros para la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD CONSTRAINT `fk_idioma_nivel` FOREIGN KEY (`IdNivel`) REFERENCES `nivel` (`IdNivel`);

--
-- Filtros para la tabla `idiomasxcurriculums`
--
ALTER TABLE `idiomasxcurriculums`
  ADD CONSTRAINT `fk_cv_idioma` FOREIGN KEY (`IdCurriculum`) REFERENCES `curriculums` (`IdCurriculum`),
  ADD CONSTRAINT `fk_idioma_cv` FOREIGN KEY (`IdIdioma`) REFERENCES `idiomas` (`IdIdioma`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `fk_oferta_detalles` FOREIGN KEY (`IdDetallesOferta`) REFERENCES `detallesoferta` (`IdDetallesOferta`),
  ADD CONSTRAINT `fk_oferta_empresa` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresas` (`IdEmpresa`);

--
-- Filtros para la tabla `ofertaxusuario`
--
ALTER TABLE `ofertaxusuario`
  ADD CONSTRAINT `fk_oferta_user` FOREIGN KEY (`IdOferta`) REFERENCES `ofertas` (`IdOferta`),
  ADD CONSTRAINT `fk_oferta_usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_datos` FOREIGN KEY (`IdDatosPersonales`) REFERENCES `datospersonales` (`IdDatosPersonales`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;