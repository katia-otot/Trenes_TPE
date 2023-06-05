-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trenes`
--

-- --------------------------------------------------------

--
-- Table structure for table `locomotora`
--

CREATE TABLE `locomotora` (
  `id_locomotora` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `anio_fabricacion` int(4) NOT NULL,
  `lugar_fabricacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locomotora`
--

INSERT INTO `locomotora` (`id_locomotora`, `modelo`, `anio_fabricacion`, `lugar_fabricacion`) VALUES
(1, 'GE 46-Ton switcher \"Drop Cab\"', 1955, 'Alemania'),
(2, '47-ton \"Drop Cab\"', 1943, 'Alemania'),
(3, 'UM20B', 1954, 'Inglaterra'),
(4, 'UM12C', 1964, 'Inglaterra'),
(5, 'U9', 1957, 'Alemania'),
(6, '6rtty', 1965, 'Inglaterra');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `clave`) VALUES
(1, 'Admin', '$2y$10$uo2zJEcpilfHUBGIiyZ8FewUH9cMtwUdG6jP819dTeoxjWvicL7By');

-- --------------------------------------------------------

--
-- Table structure for table `vagon`
--

CREATE TABLE `vagon` (
  `id_vagon` int(11) NOT NULL,
  `nro_vagon` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `capacidad_max` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `descripcion` int(150) NOT NULL,
  `locomotora_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vagon`
--

INSERT INTO `vagon` (`id_vagon`, `nro_vagon`, `tipo`, `capacidad_max`, `modelo`, `descripcion`, `locomotora_id`) VALUES
(1, 123, 'Cubierto', 50000, 'ct-19', 0, 1),
(2, 2, 'Granero', 52400, 'ct-75', 0, 1),
(3, 3, 'Granero', 52000, 'ct-75', 0, 1),
(4, 4, 'Portabobinas', 48000, 'ct-60-61', 0, 2),
(5, 5, 'Portabobinas', 42000, 'ct-60-61', 0, 2),
(6, 567, 'Cerrado', 22, '8fdfg', 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locomotora`
--
ALTER TABLE `locomotora`
  ADD PRIMARY KEY (`id_locomotora`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `vagon`
--
ALTER TABLE `vagon`
  ADD PRIMARY KEY (`id_vagon`),
  ADD KEY `vagon_ibfk_1` (`locomotora_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locomotora`
--
ALTER TABLE `locomotora`
  MODIFY `id_locomotora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vagon`
--
ALTER TABLE `vagon`
  MODIFY `id_vagon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vagon`
--
ALTER TABLE `vagon`
  ADD CONSTRAINT `vagon_ibfk_1` FOREIGN KEY (`locomotora_id`) REFERENCES `locomotora` (`id_locomotora`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
