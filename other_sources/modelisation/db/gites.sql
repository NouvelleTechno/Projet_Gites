-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 déc. 2020 à 18:55
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gites`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `mail_admin` varchar(200) DEFAULT NULL,
  `pass_admin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `mail_admin`, `pass_admin`) VALUES
(1, 'admin@admin.fr', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `gite`
--

CREATE TABLE `gite` (
  `id_gite` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `dispo` tinyint(4) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `prix` varchar(50) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `nbr_couchage` int(11) DEFAULT NULL,
  `nbr_sdb` int(11) DEFAULT NULL,
  `nbr_piece` int(11) DEFAULT NULL,
  `equipement` varchar(255) DEFAULT NULL,
  `descrip` longtext DEFAULT NULL,
  `img_pre` varchar(255) DEFAULT NULL,
  `img_carrou_1` varchar(255) DEFAULT NULL,
  `img_carrou_2` varchar(255) DEFAULT NULL,
  `img_carrou_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gite`
--

INSERT INTO `gite` (`id_gite`, `nom`, `dispo`, `adresse`, `prix`, `categorie`, `nbr_couchage`, `nbr_sdb`, `nbr_piece`, `equipement`, `descrip`, `img_pre`, `img_carrou_1`, `img_carrou_2`, `img_carrou_3`) VALUES
(1, 'Patate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Patate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Patate', 1, '', '', NULL, 1, 0, 0, NULL, '', NULL, NULL, NULL, NULL),
(4, 'Patate', 1, '', '', 'Chambre', 1, 0, 0, NULL, '', NULL, NULL, NULL, NULL),
(5, 'Patate', 1, '', '', 'Chambre', 1, 0, 0, 'Wifi', '', NULL, NULL, NULL, NULL),
(6, 'Patate', 1, '', '', 'Chambre', 1, 0, 0, 'Wifi', '', '../../assets/img_gite_cree/lit_king_size_montagne.png', '../../assets/img_gite_cree/salon_montagne_champagne.jpg', '../../assets/img_gite_cree/salon_montagne_chemine.jpg', '../../assets/img_gite_cree/lit_king_size_montagne.png'),
(7, 'Patate', 1, '', '', 'Chambre', 1, 0, 0, '', '', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/'),
(8, 'Patate', 1, '', '', 'Chambre', 1, 0, 0, '', '', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/'),
(9, 'Patate', 1, '', '', 'Chambre', 1, 0, 0, '', '', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/', '../../assets/img_gite_cree/');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_arrivée` date DEFAULT NULL,
  `date_depart` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_gite`
--

CREATE TABLE `reservation_gite` (
  `reservation_id_reservation` int(11) NOT NULL,
  `gite_id_gite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `gite`
--
ALTER TABLE `gite`
  ADD PRIMARY KEY (`id_gite`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `reservation_gite`
--
ALTER TABLE `reservation_gite`
  ADD PRIMARY KEY (`reservation_id_reservation`,`gite_id_gite`),
  ADD KEY `fk_reservation_has_gite_gite1` (`gite_id_gite`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gite`
--
ALTER TABLE `gite`
  MODIFY `id_gite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation_gite`
--
ALTER TABLE `reservation_gite`
  ADD CONSTRAINT `fk_reservation_has_gite_gite1` FOREIGN KEY (`gite_id_gite`) REFERENCES `gite` (`id_gite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_has_gite_reservation1` FOREIGN KEY (`reservation_id_reservation`) REFERENCES `reservation` (`id_reservation`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
