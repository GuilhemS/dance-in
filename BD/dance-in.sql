-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2018 at 10:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dance-in`
--
CREATE DATABASE IF NOT EXISTS `dance-in` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dance-in`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `logAdmin` varchar(3) NOT NULL,
  `mdpAdmin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE `administrateur` (
  `logAdmin` varchar(3) NOT NULL,
  `mdpAdmin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

DROP TABLE IF EXISTS `Articles`;
CREATE TABLE `Articles` (
  `idArticle` int(3) NOT NULL,
  `catArticle` varchar(20) NOT NULL,
  `titreArticle` varchar(20) NOT NULL,
  `dateArticle` date DEFAULT NULL,
  `contenu` varchar(30000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`idArticle`, `catArticle`, `titreArticle`, `dateArticle`, `contenu`) VALUES
(1, 'Accueil', 'Accueil', '2018-01-21', '<h1>Bienvenue sur notre site !</h1>\r\n</br>\r\nCréée en 1995, l’école de Danse de Rodez propose aujourd’hui la pratique de la danse classique, du modern’jazz, des claquettes et du hip-hop.\r\n</br>\r\nTous les cours sont dispensés par des professeurs diplômé d’état, vous pouvez voir leur description ci-dessous.\r\n</br>\r\nLe planning de nos cours est également disponible sur le site.\r\n\r\nN\'hésitez pas à nous contacter pour plus d\'informations.'),
(2, 'Accueil', 'Accueil', '2018-01-22', 'Allez voir notre galerie photo !!');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `idPhoto` int(3) NOT NULL,
  `nomPhoto` varchar(20) DEFAULT NULL,
  `descPhoto` varchar(50) DEFAULT NULL,
  `adrPhoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`idPhoto`, `nomPhoto`, `descPhoto`, `adrPhoto`) VALUES
(1, 'Salle', 'Voici notre salle de danse', '/Vue/images/salle.jpg'),
(2, '2016', 'Photo du spectacle de 2016', '/Vue/images/spectacle.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`logAdmin`);

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`logAdmin`);

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`idArticle`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`idPhoto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `idArticle` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `idPhoto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
