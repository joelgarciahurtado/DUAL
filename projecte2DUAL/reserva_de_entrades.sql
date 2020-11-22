-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 13-11-2020 a las 11:13:32
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserva_de_entrades`
--

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS reserva_de_entrades;
	USE reserva_de_entrades;


--
-- Estructura de tabla para la tabla `Espectacles`
--

CREATE TABLE `Espectacles` (
  `ID_Espectacle` int(11) NOT NULL,
  `Nom_Espectacle` varchar(255) NOT NULL,
  `Data` text NOT NULL,
  `Hora` text NOT NULL,
  `descripcio` text NOT NULL,
  `Preu` int(11) NOT NULL,
  `FK_ID_Recinte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Recinte`
--

CREATE TABLE `Recinte` (
  `ID_Recinte` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adreca` text NOT NULL,
  `Num_Places` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reserves`
--

CREATE TABLE `Reserves` (
  `FK_ID_Espectacle` int(11) NOT NULL,
  `FK_ID_Usuari` int(11) NOT NULL,
  `entrades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuaris`
--

CREATE TABLE `Usuaris` (
  `ID_Usuari` int(11) NOT NULL,
  `Nom_Usuari` varchar(255) NOT NULL,
  `Cognom1` varchar(255) NOT NULL,
  `Cognom2` varchar(255) NOT NULL,
  `Direccio` text NOT NULL,
  `CP` varchar(11) NOT NULL,
  `Telefon` varchar(11) NOT NULL,
  `Mobil` varchar(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Poblacio` varchar(255) NOT NULL,
  `Data_Naixement` date NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuaris`
--

INSERT INTO `Usuaris` (`ID_Usuari`, `Nom_Usuari`, `Cognom1`, `Cognom2`, `Direccio`, `CP`, `Telefon`, `Mobil`, `Password`, `Poblacio`, `Data_Naixement`, `Email`) VALUES
(1, 'Joel', 'martinez', 'lopez', '08917', '8917', '616098276', '5645645456', 'de8544d74f25e7e45fc5507c037174bb', 'Santa Coloma', '2020-11-17', 'joelgarciabdn@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Espectacles`
--
ALTER TABLE `Espectacles`
  ADD PRIMARY KEY (`ID_Espectacle`),
  ADD KEY `FK_ID_Recinte` (`FK_ID_Recinte`);

--
-- Indices de la tabla `Recinte`
--
ALTER TABLE `Recinte`
  ADD PRIMARY KEY (`ID_Recinte`);

--
-- Indices de la tabla `Reserves`
--
ALTER TABLE `Reserves`
  ADD PRIMARY KEY (`FK_ID_Espectacle`),
  ADD KEY `FK_ID_Usuari` (`FK_ID_Usuari`) USING BTREE;

--
-- Indices de la tabla `Usuaris`
--
ALTER TABLE `Usuaris`
  ADD PRIMARY KEY (`ID_Usuari`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Espectacles`
--
ALTER TABLE `Espectacles`
  MODIFY `ID_Espectacle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Recinte`
--
ALTER TABLE `Recinte`
  MODIFY `ID_Recinte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Reserves`
--
ALTER TABLE `Reserves`
  MODIFY `FK_ID_Espectacle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuaris`
--
ALTER TABLE `Usuaris`
  MODIFY `ID_Usuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Espectacles`
--
ALTER TABLE `Espectacles`
  ADD CONSTRAINT `FK_ID_Recinte` FOREIGN KEY (`FK_ID_Recinte`) REFERENCES `Recinte` (`ID_Recinte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Reserves`
--
ALTER TABLE `Reserves`
  ADD CONSTRAINT `FK_ID_Espectacle` FOREIGN KEY (`FK_ID_Espectacle`) REFERENCES `Espectacles` (`ID_Espectacle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ID_Usuari` FOREIGN KEY (`FK_ID_Usuari`) REFERENCES `Usuaris` (`ID_Usuari`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
