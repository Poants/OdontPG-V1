-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2016 a las 06:28:38
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `Ci_Codigo` int(11) NOT NULL,
  `Ci_Fecha` date NOT NULL,
  `Ci_Valor` varchar(20) NOT NULL,
  `Pac_Codigo` int(11) NOT NULL,
  `Med_Codigo` varchar(25) NOT NULL,
  `Ci_Turno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '123456', 1),
(2, 'Joseph', '12345', 'josephg059@gmail.com', '123456', 2),
(3, 'paul', '123', 'paul@gmail.com', '', 2),
(4, 'Carlos Perez', '654321', 'carlos@gmail.com', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `Med_Codigo` int(11) NOT NULL,
  `Med_Nombre` varchar(20) NOT NULL,
  `Med_Apellido` varchar(20) NOT NULL,
  `Med_Documento` varchar(20) NOT NULL,
  `Med_Tipo_Docu` varchar(20) NOT NULL,
  `Med_Telefono` varchar(11) NOT NULL,
  `Med_Direccion` varchar(20) NOT NULL,
  `Med_Genero` varchar(15) NOT NULL,
  `Med_Eps` varchar(15) NOT NULL,
  `Med_localidad` varchar(15) NOT NULL,
  `Med_coment` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `Pac_Codigo` int(11) NOT NULL,
  `Pac_nombre` int(11) NOT NULL,
  `Pac_apellidos` int(11) NOT NULL,
  `Pac_edad` int(11) NOT NULL,
  `Pac_telefono` int(11) NOT NULL,
  `Pac_eps` int(11) NOT NULL,
  `Pac_direccion` int(11) NOT NULL,
  `Pac_localidad` int(11) NOT NULL,
  `Pac_doc` int(11) NOT NULL,
  `Pac_Tipodoc` varchar(20) NOT NULL,
  `Pac_Genero` varchar(12) NOT NULL,
  `Pac_coment` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`Med_Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
