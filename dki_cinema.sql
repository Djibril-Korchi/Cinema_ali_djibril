-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 15 déc. 2023 à 09:20
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dki_cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rue` varchar(50) NOT NULL,
  `cp` varchar(6) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Ntelephone` varchar(13) NOT NULL,
  `Mdp` varchar(50) NOT NULL,
  `Admine` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `email`, `rue`, `cp`, `Ville`, `Ntelephone`, `Mdp`, `Admine`) VALUES
(1, 'Korchi', 'Djibril', 'd.korchi@lprs.fr', '60 avenue ambroise croizat', '95140', 'Garge-Lès-Gonnesse', '0781753918', 'azerty', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(255) NOT NULL,
  `ref_film` int(11) NOT NULL,
  `ref_client` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `fk_commentaire_film` (`ref_film`),
  KEY `fk_commentaire_client` (`ref_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) NOT NULL,
  `Temps` varchar(50) NOT NULL,
  `Auteur` varchar(50) NOT NULL,
  `synopsie` varchar(255) NOT NULL,
  `Affiche` varchar(50) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservartion` int(11) NOT NULL AUTO_INCREMENT,
  `NbPlaceReserve` varchar(50) NOT NULL,
  `code_reduction` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `ref_client` int(11) NOT NULL,
  `ref_salle` int(11) NOT NULL,
  PRIMARY KEY (`id_reservartion`),
  KEY `fk_reservation_salle` (`ref_salle`),
  KEY `fk_reservation_client` (`ref_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sallecinema`
--

DROP TABLE IF EXISTS `sallecinema`;
CREATE TABLE IF NOT EXISTS `sallecinema` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `TypeSalle` varchar(50) NOT NULL,
  `NombrePlace` varchar(50) NOT NULL,
  `ref_film` int(11) NOT NULL,
  PRIMARY KEY (`id_salle`),
  KEY `fk_sallecinema_film` (`ref_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_commentaire_client` FOREIGN KEY (`ref_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk_commentaire_film` FOREIGN KEY (`ref_film`) REFERENCES `film` (`id_film`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_client` FOREIGN KEY (`ref_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk_reservation_salle` FOREIGN KEY (`ref_salle`) REFERENCES `sallecinema` (`id_salle`);

--
-- Contraintes pour la table `sallecinema`
--
ALTER TABLE `sallecinema`
  ADD CONSTRAINT `fk_sallecinema_film` FOREIGN KEY (`ref_film`) REFERENCES `film` (`id_film`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
