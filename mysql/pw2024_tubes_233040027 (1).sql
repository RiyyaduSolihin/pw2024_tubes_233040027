-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 04:43 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040027`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `judul`, `isi`) VALUES
(3, '6666d3d77f323.jpeg', 'gelar pertama liga inggris liverpool', 'liverpool akhirnya juara liga inggirs setelah penantian lama juara juga'),
(4, '665ec9c63e542.jpg', 'fakta menarik di balik keajaiban istanbul tahun 2005', 'liverpool berhasil meraih gelar dengan sepaktakuler dengan comeback yang awalnya 3-0 berhasil comeback ke 3-3 dan menang adu pinalti'),
(23, '666138742e9fd.jpg', 'Welcome arne slot', 'Arne slot  pelatih asal belanda menjadi pelatih baru liverpool  Mantap'),
(24, '6666637dcdfdd.jpg', 'Trio firmansah', 'trio yang jago'),
(25, '6666639e662fa.jpg', 'Terimakasih Jurgen', 'jurgen kloop resmi berpisah dari liverpool'),
(26, '6666cbf198b52.jpg', 'liverpool juara liga champions', 'liverpool juara liga cham'),
(27, '6666cc2d07262.jpg', 'liverpool juara ', 'liverpool juara liga champions lagi'),
(28, '6666ce82b00e8.png', 'logo', 'logo liverpool'),
(29, '6666d10acba5d.jpg', 'logo ', 'logo liverpjajlja'),
(30, '6666d41653a2f.jpg', 'liverpool juara ', 'liverpool juara liga lagi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `email`, `password`, `role`) VALUES
('Riki rikandi', 'riki', 'riki1234@gmail.com', '2214', 0),
('Riyyadu', 'iyad', 'riyyadu12@gmail.com', '1234', 0),
('riyyadu solihin', 'yadu', 'riyyadu1234@gmail.com', '110104', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`fullname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
