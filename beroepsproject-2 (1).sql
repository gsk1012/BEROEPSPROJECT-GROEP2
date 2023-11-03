-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Nov 03, 2023 at 03:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beroepsproject-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `autos`
--

CREATE TABLE `autos` (
  `id` int(11) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `brandstof` enum('Benzine','Diesel','Elektrisch','Hybride') NOT NULL,
  `bouwjaar` int(11) NOT NULL,
  `kilometerstand` int(11) NOT NULL,
  `prijs` decimal(10,2) NOT NULL,
  `vermogen` varchar(8) NOT NULL,
  `transmissie` varchar(255) NOT NULL,
  `omschrijving` text NOT NULL,
  `imagePad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autos`
--

INSERT INTO `autos` (`id`, `merk`, `model`, `brandstof`, `bouwjaar`, `kilometerstand`, `prijs`, `vermogen`, `transmissie`, `omschrijving`, `imagePad`) VALUES
(1, 'Toyota', 'Corolla', 'Benzine', 2019, 9000, 22000.00, '110pk', 'Schakel', 'Betrouwbare compacte sedan met een krachtige benzinemotor.', '../beroeps-project2/imagesV2/2019-Toyota-Corolla-LE-123118-copy.png'),
(2, 'Ford', 'Fiesta', 'Benzine', 2020, 25000, 14800.00, '100pk', 'Handmatig', 'Compacte hatchback met zuinige benzinemotor, perfect voor stadsritten, met een handmatige transmissie voor meer controle.', '../beroeps-project2/imagesV2/ford-fiesta.png'),
(3, 'BMW', '5-serie', 'Diesel', 2018, 40000, 28000.00, '190pk', 'Automatisch', 'Luxueuze sedan met een efficiënte dieselkrachtbron, premium interieur en geavanceerde technologie.', '../beroeps-project2/imagesV2/5-series-sedan-silver.png'),
(4, 'Volkswagen', 'Golf', 'Elektrisch', 2022, 15000, 34500.00, '204pk', 'Automatisch', 'Elektrische hatchback met een moderne uitstraling, indrukwekkende actieradius en automatische transmissie.', '../beroeps-project2/imagesV2/golf-elek.png'),
(5, 'Mercedes-Benz', 'A-Klasse', 'Benzine', 2021, 8000, 35500.00, '163pk', 'Automatisch', 'Stijlvolle compacte auto met een krachtige benzinemotor, een comfortabel interieur en geavanceerde infotainment.', '../beroeps-project2/imagesV2/Mercedes-Benz-A-klasse.png'),
(6, 'Audi', 'Q5', 'Diesel', 2017, 60000, 26000.00, '190pk', 'Automatisch', 'Robuuste SUV met een efficiënte dieselmotor, ruim interieur en geavanceerde veiligheidsfuncties.', '../beroeps-project2/imagesV2/audi-q5.png.crdownload'),
(7, 'Hyundai', 'Tucson', 'Hybride', 2023, 5000, 38000.00, '230pk', 'Automatisch', 'Moderne hybride SUV met geavanceerde technologie, krachtige motor en automatische transmissie.', '../beroeps-project2/imagesV2/hyundai-tucson.png'),
(8, 'Nissan', 'Rogue', 'Benzine', 2020, 20000, 22500.00, '170pk', 'Automatisch', 'Veelzijdige SUV met een efficiënte benzinemotor, comfortabele cabine en geavanceerde infotainment.', '../beroeps-project2/imagesV2/2020-Nissan-Rogue-Sport-MLP-Hero.png');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`) VALUES
(7, '123', '$2y$10$bPVAClHUCrNxe5gHtvb5AuVMhRbohOA.76Mg35PFBPtSufMBDIehm'),
(8, '1234', '$2y$10$KfFZKdTMd0is1n.jRUELS.7Kv4CgQ0Qxh6v5AjX6Jfx5RJkuEa6Im'),
(9, '12345', '$2y$10$4d2UnldcXnIBV3paY174MeskOovTDuFhgbtXdYNkHbKQgvCvasLIu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
