-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 déc. 2020 à 10:04
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
  `dispo` varchar(100) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `prix` varchar(50) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `nbr_couchage` int(11) DEFAULT NULL,
  `nbr_sdb` int(11) DEFAULT NULL,
  `nbr_piece` int(11) DEFAULT NULL,
  `equipement_1` varchar(100) DEFAULT NULL,
  `equipement_2` varchar(100) DEFAULT NULL,
  `equipement_3` varchar(100) DEFAULT NULL,
  `equipement_4` varchar(100) DEFAULT NULL,
  `descrip` longtext DEFAULT NULL,
  `img_pre` varchar(255) DEFAULT NULL,
  `img_carrou_1` varchar(255) DEFAULT NULL,
  `img_carrou_2` varchar(255) DEFAULT NULL,
  `img_carrou_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gite`
--

INSERT INTO `gite` (`id_gite`, `nom`, `dispo`, `adresse`, `prix`, `categorie`, `nbr_couchage`, `nbr_sdb`, `nbr_piece`, `equipement_1`, `equipement_2`, `equipement_3`, `equipement_4`, `descrip`, `img_pre`, `img_carrou_1`, `img_carrou_2`, `img_carrou_3`) VALUES
(92, 'Gite des trois coyotte', '1', '149 avenue du prado', '5351', 'Appartement', 2, 1, 3, 'Wifi', 'Lave-Linge', 'Jardin', 'Piscine', 'Alllo', '../../assets/img_gite/img_pre/card_Gite des trois coyotteimg_chalet_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Gite des trois coyottelit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Gite des trois coyottesalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Gite des trois coyottesalon_montagne_chemine.jpg'),
(94, 'gite aluiles', '1', '149 avenue du prado', '77', 'Maison', 1, 2, 1, '', 'Lave-Linge', 'Jardin', 'Piscine', 'LOPPPPP', '../../assets/img_gite/img_pre/card_gite aluileimg_salon_tele_chemine_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_gite aluilelit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_gite aluilesalon_montagne_chemine.jpg', '../../assets/img_gite/img_carrou/carrou_gite aluilesalon_montagne_champagne.jpg'),
(99, 'Yoann Génique', '1', '149 avenue du prado', '77', 'Appartement', 4, 2, 3, 'Wifi', 'Lave-Linge', '', '', 'ok', '../../assets/img_gite/img_pre/card_Yoann Géniqueimg_chambre_chemine_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquelit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_chemine.jpg'),
(100, 'Yoann Géniquenini', '0', '149 avenue du prado', '77', 'Appartement', 1, 2, 3, 'Wifi', 'Lave-Linge', '', '', 'cc', '../../assets/img_gite/img_pre/card_Yoann Géniqueimg_salon_tele_chemine_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_chemine.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquelit_king_size_montagne.png'),
(102, 'Yoann Géniqueaa', '1', '149 avenue du prado', '77', 'Appartement', 2, 2, 2, 'Wifi', 'Lave-Linge', 'Jardin', 'Piscine', 'adios pelo', '../../assets/img_gite/img_pre/card_Yoann Géniqueimg_chalet_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquelit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_chemine.jpg'),
(103, 'Les Gites Trop sympas', '1', '8 rue de la balade', '77', 'Appartement', 1, 1, 1, 'Wifi', 'Lave-Linge', '', '', 'aller salut', '../../assets/img_gite/img_pre/card_Les Gites Trop sympasimg_salon_tele_chemine_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Les Gites Trop sympassalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Les Gites Trop sympaslit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Les Gites Trop sympassalon_montagne_chemine.jpg'),
(104, 'Gites des 4 patates', '1', '89 avenue de la Gare', '88', 'Maison', 2, 1, 3, 'Wifi', '', '', 'Piscine', 'Pourquoi pas.', '../../assets/img_gite/img_pre/card_Gites des 4 patatesimg_chambre_chemine_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Gites des 4 patatessalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Gites des 4 patateslit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Gites des 4 patatessalon_montagne_chemine.jpg'),
(105, 'Yoann Génique', '1', '149 avenue du prado', '77', 'Chambre', 1, 2, 3, 'Wifi', '', '', 'Piscine', 'Aller on y vas', '../../assets/img_gite/img_pre/card_Yoann Géniqueimg_chalet_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_chemine.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquelit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_champagne.jpg'),
(106, 'Yoann Génique', '0', '149 avenue du prado', '77798', 'Chambre', 1, 1, 2, 'Wifi', '', '', '', 'Yo', '../../assets/img_gite/img_pre/card_Yoann Géniqueimg_salon_tele_chemine_montagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquelit_king_size_montagne.png', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_champagne.jpg', '../../assets/img_gite/img_carrou/carrou_Yoann Géniquesalon_montagne_chemine.jpg');

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
  MODIFY `id_gite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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
