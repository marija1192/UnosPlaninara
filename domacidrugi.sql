-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2016 at 02:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `domacidrugi`
--

-- --------------------------------------------------------

--
-- Table structure for table `grad`
--

CREATE TABLE IF NOT EXISTS `grad` (
  `gradid` int(10) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) NOT NULL,
  `skraceniNaziv` varchar(5) NOT NULL,
  PRIMARY KEY (`gradid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `grad`
--

INSERT INTO `grad` (`gradid`, `naziv`, `skraceniNaziv`) VALUES
(10, 'Beograd', 'BG'),
(11, 'Požega', 'PZ'),
(12, 'Sokobanja', 'SB'),
(13, 'Cacak', 'CA'),
(19, 'Sombor', 'SO'),
(20, 'Uzice', 'UZ'),
(25, 'Novi sad', 'NS'),
(28, 'Zrenjanin', 'ZR'),
(33, 'Niš', 'NI');

-- --------------------------------------------------------

--
-- Table structure for table `planinar`
--

CREATE TABLE IF NOT EXISTS `planinar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `datumRodjenja` date NOT NULL,
  `gradid` int(10) NOT NULL,
  `grad` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `planinar`
--

INSERT INTO `planinar` (`id`, `ime`, `prezime`, `datumRodjenja`, `gradid`, `grad`) VALUES
(1, 'Ljiljana', 'Simovic', '1993-10-21', 11, 'Požega'),
(2, 'Marija', 'Jankovic', '1992-10-11', 12, 'Sokobanja'),
(3, 'Stefan', 'Mitrovic', '1992-02-03', 10, 'Beograd'),
(4, 'Djordje', 'Radovanovic', '1994-02-24', 13, 'Cacak'),
(5, 'Milena', 'Milovanovic', '1990-02-04', 33, 'Niš'),
(6, 'Milos', 'Miletic', '1989-02-03', 25, 'Novi sad'),
(7, 'Nikola', 'Stefanovic', '1990-04-13', 28, 'Zrenjanin'),
(8, 'Marko', 'Markovic', '1992-06-16', 12, 'Sokobanja'),
(9, 'Milena', 'Stanic', '1991-11-18', 19, 'Sombor'),
(10, 'Nemanja', 'Nikolic', '1990-04-06', 33, 'Niš'),
(11, 'Nikola', 'Arsic', '1992-02-10', 11, 'Požega'),
(12, 'Nevena', 'Milosevic', '1990-06-16', 10, 'Beograd'),
(13, 'Milos', 'Miletic', '1993-06-16', 19, 'Sombor'),
(14, 'Nikola', 'Milovanovic', '1994-11-18', 20, 'Uzice'),
(15, 'Stevan', 'Stosic', '1994-07-01', 13, 'Cacak'),
(16, 'Filip', 'Filipovic', '1991-02-19', 28, 'Zrenjanin'),
(17, 'Nikola', 'Mitrovic', '1990-01-27', 10, 'Beograd'),
(18, 'Andrej', 'Savovic', '1992-02-17', 10, 'Beograd'),
(19, 'Milan', 'Arsic', '1990-02-03', 11, 'Požega'),
(20, 'Djordje', 'Milenkovic', '1992-09-16', 19, 'Sombor'),
(21, 'Marija', 'Markovic', '1991-06-10', 20, 'Uzice'),
(22, 'Ana', 'Markovic', '1990-10-20', 33, 'Niš'),
(23, 'Milan', 'Rasic', '1993-02-17', 13, 'Cacak'),
(24, 'Nikola', 'Manic', '1991-07-07', 11, 'Požega'),
(25, 'Ljiljana', 'Milovanovic', '1990-05-26', 12, 'Sokobanja');

-- --------------------------------------------------------

--
-- Table structure for table `uspon`
--

CREATE TABLE IF NOT EXISTS `uspon` (
  `usponid` int(10) NOT NULL AUTO_INCREMENT,
  `nazivUspona` varchar(30) NOT NULL,
  `gradid` int(10) NOT NULL,
  `grad` varchar(30) NOT NULL,
  PRIMARY KEY (`usponid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `uspon`
--

INSERT INTO `uspon` (`usponid`, `nazivUspona`, `gradid`, `grad`) VALUES
(1, 'Uspon na Zlatibor', 11, 'Požega'),
(2, 'Uspon na Rtanj', 12, 'Sokobanja'),
(3, 'Uspon na Frusku goru', 25, 'Novi sad'),
(4, 'Uspon na Kopaonik', 33, 'Niš'),
(5, 'Uspon na Zlatar', 13, 'Cacak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
