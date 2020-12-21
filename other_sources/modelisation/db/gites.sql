-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 déc. 2020 à 23:56
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
(122, 'Chambre Patate', '1', '47 rue Pomme de Terre', '77', 'Chambre', 1, 1, 0, 'Wifi', '', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Chambre de la Patateimg_chalet_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Chambre de la Patatelit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Chambre de la Patatesalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Chambre de la Patatesalon_montagne_chemine.jpg'),
(124, 'L\'Original', '1', '123 avenue du N\'importe quoi', '89', 'Appartement', 1, 1, 2, 'Wifi', 'Lave-Linge', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_L\'Originalimg_chalet_montagne.jpg', 'assets/img_gite/img_carrou/carrou_L\'Originallit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_L\'Originalsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_L\'Originalsalon_montagne_chemine.jpg'),
(126, 'Maison Hufflepuff', '1', '1 rue de Hogwarts', '150', 'Maison', 3, 2, 5, 'Wifi', 'Lave-Linge', '', 'Piscine', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Maison Hufflepuffimg_chambre_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Hufflepufflit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Maison Hufflepuffsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Hufflepuffsalon_montagne_chemine.jpg'),
(127, 'Maison Gryffindor ', '1', '2 rue de Hogwarts', '120', 'Maison', 3, 1, 4, 'Wifi', 'Lave-Linge', 'Jardin', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Maison Gryffindor img_salon_tele_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Gryffindor lit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Maison Gryffindor salon_montagne_chemine.jpg', 'assets/img_gite/img_carrou/carrou_Maison Gryffindor salon_montagne_champagne.jpg'),
(128, 'Maison Ravenclaw', '1', '3 rue de Hogwarts', '146', 'Maison', 2, 2, 4, 'Wifi', 'Lave-Linge', 'Jardin', 'Piscine', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Maison Ravenclawimg_chambre_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Ravenclawlit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Maison Ravenclawsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Ravenclawsalon_montagne_chemine.jpg'),
(129, 'Maison Slytherin', '1', '4 rue de Hogwarts', '201', 'Maison', 4, 3, 6, 'Wifi', 'Lave-Linge', 'Jardin', 'Piscine', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Maison Slytherinimg_chalet_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Slytherinlit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Maison Slytherinsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison Slytherinsalon_montagne_chemine.jpg'),
(130, 'Un Poste Bleu', '1', 'Partout et Nul part à la fois', '26849', 'Chambre', 5, 5, 0, 'Wifi', '', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Un Poste Bleuimg_chambre_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Un Poste Bleulit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Un Poste Bleusalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Un Poste Bleusalon_montagne_chemine.jpg'),
(131, 'App.2048', '1', '20 avenue de la boustifaille', '59', 'Appartement', 1, 1, 2, 'Wifi', 'Lave-Linge', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_App.2048img_salon_tele_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_App.2048lit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_App.2048salon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_App.2048salon_montagne_chemine.jpg'),
(132, 'Chambre au Loup', '0', 'Sur la montagne de gauche après le gros Rocher', '12', 'Chambre', 1, 1, 0, '', '', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Chambre au Loupimg_chambre_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Chambre au Loupsalon_montagne_chemine.jpg', 'assets/img_gite/img_carrou/carrou_Chambre au Loupsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Chambre au Louplit_king_size_montagne.png'),
(133, 'App.Ourscorpion', '0', 'mi-ours mi-scorpion et re mi-ours derrière. ', '45', 'Appartement', 2, 1, 3, '', 'Lave-Linge', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_App.Ourscorpionimg_salon_tele_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_App.Ourscorpionlit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_App.Ourscorpionsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_App.Ourscorpionsalon_montagne_chemine.jpg'),
(134, 'Maison tip-top', '0', '89 avenue de la Gare', '36', 'Maison', 1, 1, 2, 'Wifi', 'Lave-Linge', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Maison tip-topimg_chalet_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison tip-topsalon_montagne_chemine.jpg', 'assets/img_gite/img_carrou/carrou_Maison tip-toplit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Maison tip-topsalon_montagne_champagne.jpg'),
(135, 'Arrrrrthur', '1', '36bis avenue de la cuuillère', '25', 'Appartement', 1, 1, 2, 'Wifi', 'Lave-Linge', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Arrrrrthurimg_chambre_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Arrrrrthursalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Arrrrrthurlit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Arrrrrthursalon_montagne_chemine.jpg'),
(137, 'Grosse Chambre', '1', '02 rue de On en a Gros', '10', 'Chambre', 1, 1, 0, 'Wifi', '', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Grosse Chambreimg_chalet_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Grosse Chambrelit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Grosse Chambresalon_montagne_chemine.jpg', 'assets/img_gite/img_carrou/carrou_Grosse Chambresalon_montagne_champagne.jpg'),
(138, 'App.SWEET', '1', '48 rue Albert pâté', '5351', 'Appartement', 3, 3, 6, 'Wifi', 'Lave-Linge', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_App.SWEETimg_salon_tele_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_App.SWEETlit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_App.SWEETsalon_montagne_chemine.jpg', 'assets/img_gite/img_carrou/carrou_App.SWEETsalon_montagne_champagne.jpg'),
(140, 'Maison de la Gratuité', '0', '666 rue de vendtonâme.com', '000', 'Maison', 15, 15, 15, 'Wifi', 'Lave-Linge', 'Jardin', 'Piscine', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Maison de la Gratuitéimg_chalet_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison de la Gratuitélit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Maison de la Gratuitésalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Maison de la Gratuitésalon_montagne_chemine.jpg'),
(141, 'Chambre de Bohort', '0', '4 avenue du poltron', '65', 'Chambre', 1, 1, 0, 'Wifi', '', '', '', 'Notre chalet présente une façade en pierres apparentes sur sa partie basse et est orné de bois sur sa partie haute. En ouvrant la porte, vous vous laisserez immédiatement séduire par son intérieur chaleureux à la décoration soignée. Vous profiterez d\'une grande pièce à vivre avec une cuisine américaine très fonctionnelle. Vous pourrez manger sur la terrasse équipée d\'une table de pique-nique et de transats. ', 'assets/img_gite/img_pre/card_Chambre de Bohortimg_salon_tele_chemine_montagne.jpg', 'assets/img_gite/img_carrou/carrou_Chambre de Bohortlit_king_size_montagne.png', 'assets/img_gite/img_carrou/carrou_Chambre de Bohortsalon_montagne_champagne.jpg', 'assets/img_gite/img_carrou/carrou_Chambre de Bohortsalon_montagne_chemine.jpg');

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
  MODIFY `id_gite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

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
