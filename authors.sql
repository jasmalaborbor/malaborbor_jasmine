-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2025 at 04:27 AM
-- Server version: 11.8.2-MariaDB-1 from Debian
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavalust`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `email`, `birthdate`, `added`) VALUES
(1, 'Nelson', 'Ullrich', 'candelario62@example.org', '2013-07-21', '2015-09-04 17:53:44'),
(2, 'Albina', 'Fahey', 'kschumm@example.net', '2013-03-10', '1993-12-01 11:41:14'),
(3, 'Carleton', 'Bechtelar', 'jarvis.walker@example.org', '1987-06-17', '1986-02-23 17:02:41'),
(4, 'Jamie', 'Marks', 'briana.kiehn@example.net', '1978-07-02', '1984-05-02 03:39:44'),
(5, 'Chaim', 'Deckow', 'ffisher@example.com', '2010-04-10', '1986-01-27 22:40:04'),
(6, 'Nicolette', 'Cruickshank', 'zella.streich@example.net', '1977-06-13', '1982-02-16 15:31:56'),
(7, 'Mikel', 'Cormier', 'hills.kiley@example.org', '1987-11-25', '1994-05-25 03:30:44'),
(8, 'Nora', 'O\'Hara', 'eblock@example.com', '1981-12-30', '2018-08-26 10:39:52'),
(9, 'Hyman', 'Crist', 'xmccullough@example.net', '2013-04-21', '2014-11-06 11:59:13'),
(10, 'Shaina', 'Romaguera', 'lavon.graham@example.com', '1976-12-21', '1972-11-11 23:24:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
