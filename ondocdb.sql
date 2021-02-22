-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2018 at 08:21 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ondocdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

DROP TABLE IF EXISTS `disease`;
CREATE TABLE IF NOT EXISTS `disease` (
  `medicine` varchar(30) NOT NULL,
  `symptom` varchar(30) NOT NULL,
  `dose` int(2) NOT NULL,
  `duration` int(2) NOT NULL,
  PRIMARY KEY (`symptom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`medicine`, `symptom`, `dose`, `duration`) VALUES
('naproxen 30', 'fever', 2, 7),
('oxymetazoline', 'cold', 2, 7),
('loperamide', 'loose motion', 2, 7),
('benzonatate', 'cough', 2, 4),
('aspirin', 'swelling', 2, 4),
('acetaminophen', 'headache', 2, 1),
('ibuprofen', 'joint pain', 1, 7),
('ampicillin', 'abdominal pain', 2, 2),
('diclofenac', 'inflammation', 3, 3),
('meclizine', 'dizziness', 3, 2),
('pantoprazole', 'acidity', 2, 7),
('polyethylene glycol', 'constipation', 2, 7),
('trazodone (desyrel)', 'insomnia', 1, 7),
('aspirin', 'muscle pain', 2, 4),
('naproxen sodium', 'cramp', 2, 3),
('dimenhydrinate', 'vomiting', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('deepakshende', 'deepakonds@gmail.com', 'deepak');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
