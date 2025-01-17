-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ad_soyad` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`ad_soyad`, `email`, `mesaj`) VALUES
('şeyma', 'kulaseyma19@gmail.com', ''),
('', 'kulaseyma19@gmail.com', ''),
('', 'kulaseyma19@gmail.com', ''),
('seyma kula', 'kulaseyma19@gmail.com', 'deneme'),
('seyma kula', 'kulaseyma19@gmail.com', 'deneme'),
('seyma kula', 'kulaseyma19@gmail.com', 'deneme'),
('seyma kula', 'kulaseyma19@gmail.com', 'deneme'),
('seyma kula', 'kulaseyma19@gmail.com', 'fbbnb'),
('gf', 'kulaseyma19@gmail.com', 'fd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
