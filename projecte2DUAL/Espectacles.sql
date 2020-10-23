-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: db5001018120.hosting-data.io
-- Temps de generació: 08-10-2020 a les 11:20:38
-- Versió del servidor: 5.7.30-log
-- Versió de PHP: 7.0.33-0+deb9u10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `dbs880627`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `Espectacles`
--

CREATE TABLE `Espectacles` (

  `ID_Espectacle` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Nom_Espectacle` varchar(255) NOT NULL,
  `Data` text NOT NULL,
  `Hora` text NOT NULL,
  `descripcio` text NOT NULL,
  `Preu` int(11) NOT NULL,
  `FK_ID_Recinte` int(11) NOT NULL,
	FOREIGN KEY (FK_ID_Recinte) REFERENCES Recinte(ID_Recinte
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `Espectacles`
--
ALTER TABLE `Espectacles`
  ADD PRIMARY KEY (`ID_Espectacle`),
  ADD KEY `FK_ID_Recinte` (`FK_ID_Recinte`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `Espectacles`
--
ALTER TABLE `Espectacles`
  MODIFY `ID_Espectacle` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `Espectacles`
--
ALTER TABLE `Espectacles`
  ADD CONSTRAINT `FK_ID_Recinte` FOREIGN KEY (`FK_ID_Recinte`) REFERENCES `Recinte` (`ID_Recinte`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
