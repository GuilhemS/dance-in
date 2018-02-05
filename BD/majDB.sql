-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 05 fév. 2018 à 14:30
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

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE `administrateur` (
  `logAdmin` varchar(3) NOT NULL,
  `mdpAdmin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `idArticle` int(3) NOT NULL,
  `catArticle` varchar(20) NOT NULL,
  `titreArticle` varchar(20) NOT NULL,
  `dateArticle` date DEFAULT NULL,
  `contenu` varchar(30000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `catArticle`, `titreArticle`, `dateArticle`, `contenu`) VALUES
(1, '', 'Acceuil', '2018-01-21', '<h1>Bienvenue sur notre site !</h1>\r\n</br>\r\nCréée en 1995, l’école de Danse de Rodez propose aujourd’hui la pratique de la danse classique, du modern’jazz, des claquettes et du hip-hop.\r\n</br>\r\nTous les cours sont dispensés par des professeurs diplômé d’état, vous pouvez voir leur description ci-dessous.\r\n</br>\r\nLe planning de nos cours est également disponible sur le site.\r\n\r\nN\'hésitez pas à nous contacter pour plus d\'informations.'),
(2, '', 'Acceuil', '2018-01-22', 'Allez voir notre galerie photo !!');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `idPhoto` int(3) NOT NULL,
  `nomPhoto` varchar(20) DEFAULT NULL,
  `descPhoto` varchar(50) DEFAULT NULL,
  `adrPhoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`idPhoto`, `nomPhoto`, `descPhoto`, `adrPhoto`) VALUES
(1, 'Salle', 'Voici notre salle de danse', '/Vue/images/salle.jpg'),
(2, '2016', 'Photo du spectacle de 2016', '/Vue/images/spectacle.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`logAdmin`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`idPhoto`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `idPhoto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
