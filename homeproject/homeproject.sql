-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 avr. 2019 à 14:42
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `homeproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `email`) VALUES
(1, 'tresormhg@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `images`, `descriptions`) VALUES
(1, 'images/img2.jpg', '\r\n150 m²\r\n6 pièces\r\n5 chambres\r\n\r\nCette propriété contemporaine de 200m² offre un vaste lieu de vie et intègre cinq chambres. Suivant un plan en T, elle se démarque par son toit en partie cintré et revêt de nombreux espaces conviviaux, que ce soit à l\'intérieur ou à l\'extérieur.'),
(2, 'image/img3', '\r\n150 m²\r\n4 pièces\r\n3 chambres\r\n\r\nUne maison de 3 chambres sera la taille parfaite qui vous permetta une grande variété d’aménagement intérieur.\r\nAvec 3 chambres, vous pouvez avoir une chambre séparée pour les enfants, faire une chambre d’amis, ou aménager un bureau qui servira pour les petites familles et les couples\r\n'),
(3, '????\0JFIF\0,,\0\0??\0?Exif\0\0MM\0*\0\0\0\0\0\0\0\0\0\0\0>\0\0\0\0\0\0\0P??\0\0\0\0\0\0\0[?i\0\0\0\0\0\0\0c\0\0\0\0NIKON CO', 'juste un test');

-- --------------------------------------------------------

--
-- Structure de la table `rencontrer`
--

CREATE TABLE `rencontrer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `localite` varchar(50) NOT NULL,
  `superficie` int(5) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rencontrer`
--
ALTER TABLE `rencontrer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `rencontrer`
--
ALTER TABLE `rencontrer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
