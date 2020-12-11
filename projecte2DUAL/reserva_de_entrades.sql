-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 11-12-2020 a las 21:37:23
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

--
-- Estructura de tabla para la tabla `Espectacles`
--

CREATE TABLE `Espectacles` (
  `ID_Espectacle` int(11) NOT NULL,
  `Nom_Espectacle` varchar(255) NOT NULL,
  `Data` date NOT NULL,
  `Hora` time NOT NULL,
  `descripcio` text NOT NULL,
  `Preu` int(11) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Asientos` int(11) NOT NULL,
  `FK_ID_Recinte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Espectacles`
--

INSERT INTO `Espectacles` (`ID_Espectacle`, `Nom_Espectacle`, `Data`, `Hora`, `descripcio`, `Preu`, `Foto`, `Asientos`, `FK_ID_Recinte`) VALUES
(1, 'Hamlet', '2021-01-11', '12:00:00', 'Hamlet, probablemente compuesta entre 1599 y 1601, transcurre en Dinamarca y relata cómo el príncipe Hamlet lleva a cabo su venganza sobre su tío Claudio quien asesinase al padre de Hamlet, el rey, y ostenta la corona usurpada así como nupcias con Gertrudis, la madre de Hamlet. La obra se traza vívidamente alrededor de la locura (tanto real como fingida) y el transcurso del profundo dolor a la desmesurada ira. Además explora los temas de la traición, la venganza, el incesto y la corrupción moral.', 5, 'img/hamlet.jpg', 200, 1),
(2, 'Recital Diego el Cigala', '2021-02-01', '20:00:00', 'El Cantaor Diego el Cigala nos deleita con un recital de sus mas aclamadas actuaciones, mezclando el flamenco puro con el jazz, la salsa y más estilos de influencia latina.', 10, 'img/cigala.jpg', 200, 1),
(3, 'Proyección Lost Highway', '2021-02-15', '00:00:00', 'Fred Madison (Bill Pullman), un músico de jazz que vive con su esposa Renee (Patricia Arquette), recibe unas misteriosas cintas de vídeo en las que aparece una grabación de él con su mujer dentro de su propia casa. Poco después, durante una fiesta, un misterioso hombre (Robert Blake) le dice que está precisamente en su casa en ese instante. Las sospechas de que algo raro está pasando se tornan terroríficas cuando ve la siguiente cinta de video...', 10, 'img/losthighway.png', 200, 1),
(4, 'Don Juan Tenorio', '2020-12-30', '11:00:00', 'Don Juan Tenorio realiza una vil apuesta con don Luís Mejía que consiste en conquistar en un tiempo record a una ingenua novicia y también a la novia de su enemigo José Mejía.', 5, 'img/juantenorio.jpg', 200, 1),
(5, 'TOOL en viu', '2021-07-21', '22:00:00', 'Concert en viu de la banda de rock progresiu TOOL. Presentant el seu últim disc, Fear Inoculum, TOOL ens ofereix un viatge per els nostres sentits, una actuació plena de capes de la que mai t\'oblidarás.', 15, 'img/tool.jpeg', 200, 1);

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

--
-- Volcado de datos para la tabla `Recinte`
--

INSERT INTO `Recinte` (`ID_Recinte`, `Nom`, `Adreca`, `Num_Places`) VALUES
(1, 'Teatre Zorrilla', 'Carrer del Canonge', 200);

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
(1, 'Joel', 'martinez', 'lopez', '08917', '8917', '616098276', '5645645456', 'de8544d74f25e7e45fc5507c037174bb', 'Santa Coloma', '2020-11-17', 'joelgarciabdn@gmail.com'),
(2, 'admin', 'admin', 'admin', '08917', '8917', '23243244', '11111111', '21232f297a57a5a743894a0e4a801fc3', 'Santa Coloma', '2020-11-18', 'underbest2012@gmail.com'),
(3, 'admin2', 'admin2', 'admin2', '08917', '8917', '616098276', '11111111', '21232f297a57a5a743894a0e4a801fc3', 'Santa Coloma', '2020-11-18', 'joelgarciabdn@gmail.com'),
(4, 'admin3', 'admin3', 'admin3', '08917', '8917', '616098276', '11111111', '1145cbf42070c6704b66d6ac75347726', 'Santa Coloma', '2020-11-18', 'joelgarciabdn@gmail.com');

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
  MODIFY `ID_Espectacle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Recinte`
--
ALTER TABLE `Recinte`
  MODIFY `ID_Recinte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Reserves`
--
ALTER TABLE `Reserves`
  MODIFY `FK_ID_Espectacle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuaris`
--
ALTER TABLE `Usuaris`
  MODIFY `ID_Usuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
