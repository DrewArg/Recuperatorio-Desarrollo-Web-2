-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 18:42:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recuperatorios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `alimentos` int(11) NOT NULL,
  `dano` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `efecto` text NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id`, `tipo`, `nombre`, `alimentos`, `dano`, `imagen`, `efecto`, `precio`) VALUES
(1, 'Animal', 'Lobo Gris', 3, 3, 'lobo-gris.jpg', 'Gana +1 de daño por cada Lobo Gris además de este en tu tablero.', 600),
(2, 'Animal', 'Camaleón', 3, 2, 'camaleon.jpg', 'Puede tomar el ataque de un enemigo en reposo y sumarlo al suyo hasta el final del turno.', 500),
(3, 'Animal', 'Tortuga Marina', 3, 2, 'tortuga-marina.jpg', 'Puede sacrificarse para evitar que el enemigo siga atacando este turno.', 500),
(4, 'Animal', 'Pez Payaso', 1, 1, 'pez-payaso.jpg', '', 150),
(5, 'Habilidad', 'Coraza', 2, 0, 'coraza.png', 'Un animal pasa a ser indestructible por este turno.', 300),
(6, 'Habilidad', 'Captura', 3, 0, 'captura.jpg', 'Evita que un enemigo pueda pasar a la línea de batalla por 2 turnos.', 350),
(7, 'Habilidad', 'Aullido', 2, 0, 'aullido.jpg', 'Si tienes un Lobo Gris en juego, puedes jugar a otro desde tu mazo o tu cementerio sin pagar su coste.', 250),
(8, 'Habitat', 'Alcantarilla', 3, 0, 'alcantarilla.jpg', 'Puedes revivir una rata por turno pagando su coste y ponerla en tu línea de reposo.', 250),
(9, 'Habitat', 'Costa', 6, 0, 'costa.jpg', 'Si tienes un Tiburón Blanco en juego, puedes consumir 5 alimentos para activar su efecto una segunda vez este turno.', 800),
(10, 'Alimento', 'Alimento', 0, 0, 'alimento.jpg', '', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cartas` text NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `copias` text DEFAULT NULL,
  `preguntas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`nombre`, `email`, `cartas`, `id`, `copias`, `preguntas`) VALUES
('adsa', 'asxc@mail.com', 'Tortuga Marina,Pez Payaso', 1, '', ''),
('ABC', 'abc@mail.com', 'Pez Payaso,Aullido,Costa,Alimento', 2, '', ''),
('DEF', 'def@mail.com', 'Alcantarilla,Costa,Alimento', 3, 'alimentos quiero 2', 'la verdad que no'),
('GHI', 'ghi@mail.com', 'Lobo Gris,Camaleón,Tortuga Marina,Pez Payaso,Coraza,Captura,Aullido,Alcantarilla,Costa,Alimento', 4, 'quiero todo x 5', 'si, cuánto demoran a china?'),
('ABC', 'asxc@mail.com', 'Tortuga Marina,Pez Payaso,Coraza,Alimento', 5, '123', '123456'),
('ABC', 'abc@mail.com', 'Lobo Gris,Tortuga Marina', 6, '', ''),
('Andres', 'andresfabbiano5@gmail.com', 'Lobo Gris,Camaleón', 7, 'no', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
