-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 06:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knjiznica`
--

-- --------------------------------------------------------

--
-- Table structure for table `posudba`
--

CREATE TABLE `posudba` (
  `ID` int(11) NOT NULL,
  `datum_posudbe` datetime DEFAULT NULL,
  `datum_povratka` datetime DEFAULT NULL,
  `id_knjige` int(11) DEFAULT NULL,
  `id_studenta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posudba`
--

INSERT INTO `posudba` (`ID`, `datum_posudbe`, `datum_povratka`, `id_knjige`, `id_studenta`) VALUES
(1, '2017-01-03 00:00:00', '2017-03-13 00:00:00', 1, 1),
(2, '2017-02-07 00:00:00', '2017-04-02 00:00:00', 1, 3),
(3, '2017-03-13 00:00:00', '2017-04-11 00:00:00', 2, 2),
(4, '2017-03-27 00:00:00', NULL, 3, 4),
(5, '2017-04-16 00:00:00', NULL, 4, 5),
(6, '2017-03-27 00:00:00', '2017-04-16 00:00:00', 4, 6),
(9, '2017-03-13 00:00:00', '2017-04-06 00:00:00', 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posudba`
--
ALTER TABLE `posudba`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_posudba_knjiga` (`id_knjige`),
  ADD KEY `FK_posudba_student` (`id_studenta`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posudba`
--
ALTER TABLE `posudba`
  ADD CONSTRAINT `FK_posudba_knjiga` FOREIGN KEY (`id_knjige`) REFERENCES `knjiga` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_posudba_student` FOREIGN KEY (`id_studenta`) REFERENCES `student` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
