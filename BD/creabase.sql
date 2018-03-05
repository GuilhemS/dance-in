-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  dim. 04 mars 2018 à 16:58
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dance-in`
--
CREATE DATABASE IF NOT EXISTS 'dance-in' DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE 'dance-in';

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `logAdmin` varchar(3) NOT NULL,
  `mdpAdmin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`logAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` int(3) NOT NULL AUTO_INCREMENT,
  `catArticle` varchar(20) NOT NULL,
  `titreArticle` varchar(20) NOT NULL,
  `dateArticle` date DEFAULT NULL,
  `contenu` varchar(30000) DEFAULT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `catArticle`, `titreArticle`, `dateArticle`, `contenu`) VALUES
(1, 'Accueil', 'Msg bienvenue', '2018-01-21', '<h1>Bienvenue sur notre site !</h1><p><br></p><p> Créée en 1995, l’école de Danse de Rodez propose aujourd’hui la pratique de la danse classique, du modern’jazz, des claquettes et du hip-hop !!</p><p> Tous les cours sont dispensés par des professeurs diplômé d’état, vous pouvez voir leur description ci-dessous. </p><p> Le planning de nos cours est également disponible sur le site. N\'hésitez pas à nous contacter pour plus d\'informations.</p>'),
(2, 'Accueil', 'env vers galerie', '2018-01-22', 'Allez voir notre galerie photo !!'),
(3, 'evenement', 'lancement', '2018-02-19', 'Premier stage de l\'année pour l\'ouverture de notre école !\r\n</br>\r\nVenez découvrir tous les styles de danse enseignés dans notre école.'),
(4, 'evenement', 'rentrée', '2018-02-22', 'Début des cours de danse classique.   \r\nVenez vous inscrire directement à l\'école.'),
(5, 'Evenement', 'Stage du 18/03', '0000-00-00', '<p>Nous vous invitons a découvrir ce <strong>18/03/2018</strong> le Hip-Hop.</p><p>Contactez nous via le formulaire de contact pour réserver votre place !</p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
