-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 01 déc. 2023 à 10:38
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rue` varchar(50) NOT NULL,
  `cp` varchar(6) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `N°telephone` varchar(13) NOT NULL,
  `Mdp` varchar(50) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `ref_film` int(11) NOT NULL,
  `ref_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Numero film` varchar(50) NOT NULL,
  `Temps` varchar(50) NOT NULL,
  `Auteur` varchar(50) NOT NULL,
  `synopsie` varchar(255) NOT NULL,
  `Affiche` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservartion` int(11) NOT NULL,
  `NbPlaceReserve` varchar(50) NOT NULL,
  `code_reduction` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `ref_client` int(11) NOT NULL,
  `ref_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sallecinema`
--

CREATE TABLE `sallecinema` (
  `id_salle` int(11) NOT NULL,
  `N°Salle` varchar(50) NOT NULL,
  `TypeSalle` varchar(50) NOT NULL,
  `NombrePlace` varchar(50) NOT NULL,
  `ref_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `fk_commentaire_film` (`ref_film`),
  ADD KEY `fk_commentaire_client` (`ref_client`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservartion`),
  ADD KEY `fk_reservation_salle` (`ref_salle`),
  ADD KEY `fk_reservation_client` (`ref_client`);

--
-- Index pour la table `sallecinema`
--
ALTER TABLE `sallecinema`
  ADD PRIMARY KEY (`id_salle`),
  ADD KEY `fk_sallecinema_film` (`ref_film`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservartion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sallecinema`
--
ALTER TABLE `sallecinema`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT;

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
