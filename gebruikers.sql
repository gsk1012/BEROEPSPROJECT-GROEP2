-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Nov 03, 2023 at 02:59 PM
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
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
