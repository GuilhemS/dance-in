-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2018 at 12:30 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `logAdmin` varchar(3) NOT NULL,
  `mdpAdmin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`logAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

DROP TABLE IF EXISTS `Articles`;
CREATE TABLE IF NOT EXISTS `Articles` (
  `idArticle` int(3) NOT NULL AUTO_INCREMENT,
  `catArticle` varchar(20) NOT NULL,
  `titreArticle` varchar(20) NOT NULL,
  `dateArticle` varchar(10) DEFAULT NULL,
  `contenu` varchar(30000) DEFAULT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Articles`
--

INSERT INTO `Articles` (`idArticle`, `catArticle`, `titreArticle`, `dateArticle`, `contenu`) VALUES
(1, 'Accueil', 'Msg bienvenue', '2018-01-21', '<h1>Bienvenue sur notre site !</h1>\r\n</br>\r\nCréée en 1995, l’école de Danse de Rodez propose aujourd’hui la pratique de la danse classique, du modern’jazz, des claquettes et du hip-hop.\r\n</br>\r\nTous les cours sont dispensés par des professeurs diplômé d’état, vous pouvez voir leur description ci-dessous.\r\n</br>\r\nLe planning de nos cours est également disponible sur le site.\r\n\r\nN\'hésitez pas à nous contacter pour plus d\'informations.'),
(2, 'Accueil', 'env vers galerie', '2018-01-22', 'Allez voir notre galerie photo !!'),
(3, 'Evenement', 'lancement', '2018-02-19', 'Premier stage de l\'année pour l\'ouverture de notre école !\r\n</br>\r\nVenez découvrir tous les styles de danse enseignés dans notre école.'),
(4, 'Evenement', 'rentrée', '2018-02-22', 'Début des cours de danse classique. \r\nVenez vous inscrire directement à l\'école.');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `idPhoto` int(3) NOT NULL AUTO_INCREMENT,
  `nomPhoto` varchar(20) DEFAULT NULL,
  `descPhoto` varchar(50) DEFAULT NULL,
  `adrPhoto` varchar(50) NOT NULL,
  PRIMARY KEY (`idPhoto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`idPhoto`, `nomPhoto`, `descPhoto`, `adrPhoto`) VALUES
(1, 'Salle', 'Voici notre salle de danse', '/Vue/images/salle.jpg'),
(2, '2016', 'Photo du spectacle de 2016', '/Vue/images/spectacle.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
