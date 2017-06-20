-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Juin 2017 à 10:59
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `applivialtic`
--
CREATE DATABASE IF NOT EXISTS `applivialtic` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `applivialtic`;

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `km` float NOT NULL,
  `vitesseMoyenne` float NOT NULL,
  `consommation` float NOT NULL,
  `vehicule` int(11) NOT NULL,
  `parcours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entretien`
--

CREATE TABLE `entretien` (
  `id` int(11) NOT NULL,
  `killometrage` int(11) NOT NULL,
  `remarques` varchar(5000) NOT NULL,
  `titre` varchar(512) NOT NULL,
  `vehicule` int(11) NOT NULL,
  `utilisateur` int(11) NOT NULL,
  `dateEntretien` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `parcour`
--

CREATE TABLE `parcour` (
  `id` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `adresse` varchar(512) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `vehicule` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `vehicule`) VALUES
(41, 'Workman', 'aurelien', '1313 Egestas Rd.', '(301) 444-6767', NULL),
(42, 'Frazier', 'barthélémy', 'P.O. Box 501, 8231 Orci Road', '(552) 195-8077', NULL),
(43, 'Garrison', 'baptiste', '9848 Ridiculus Road', '(848) 740-0248', NULL),
(44, 'Raymond', 'benjamin', 'Ap #686-6239 Iaculis ,Rd.', '(380) 983-1939', NULL),
(45, 'Fitzgerald', 'constantin', '104-9683 Amet, Rd.', '(488) 427-8301', NULL),
(46, 'Glenn', 'aurelien', 'Ap 545-674 Dictum. St.', '(325) 251-2246', NULL),
(47, 'Hicks', 'denis', 'P.O. Box 339, 5883 Libero Av.', '(304) 952-5793', NULL),
(48, 'Workman', 'césar', '674-4488 Nunc Ave', '(290) 196-0261', NULL),
(49, 'Marquez', 'baptiste', '674-4488 Nunc Ave', '(290) 196-0261', NULL),
(50, 'Simpson', 'constantin', 'Ap #875-8702 Nam St', '(460) 556-7812', NULL),
(51, 'Chandler', 'barthélémy', '9213 Mollis Road', '(411) 367-8489', NULL),
(52, 'Preston', 'régis', 'Ap #947-8211 Nullam Street', '(836) 636-8589', NULL),
(53, 'Harrell', 'constantin', 'P.O. Box 244, 9422 Proin St.', '(438) 592-4962', NULL),
(54, 'Kennedy', 'sylvestre', '674-4488 Nunc Ave', '(711) 289-6194', NULL),
(55, 'Mason', 'denis', 'Ap #947-8211 Nullam Street', '(587) 427-9010', NULL),
(56, 'Wooten', 'axel', '566 Eget St.', '(210) 573-4714', NULL),
(57, 'Hester', 'axel', '9213 Mollis Road', '(342) 129-0007', NULL),
(58, 'Hendrix', 'geoffroi', '805-4058 Molestie Ave', '(,53) 650-9929', NULL),
(59, 'Chase', 'baptiste', 'P.O. Box ,141, 2708 Placerat Street', '(460) 556-7812', NULL),
(60, 'Farmer', 'rémi', '104-9683 Amet, Rd.', '(139) 622-6518', NULL),
(61, 'Cabrera', 'benoit', 'Ap #274-8828 Diam Road', '(,53) 650-9929', NULL),
(62, 'Kemp', 'aurelien', '1456 Enim. Street', '(604) 512-3606', NULL),
(63, 'Fitzpatrick', 'michel', 'P.O. Box 501, 8231 Orci Road', '(696) 146-7475', NULL),
(64, 'Jarvis', 'basile', '805-4058 Molestie Ave', '(979) 513-,222', NULL),
(65, 'Cabrera', 'michel', 'Ap #643-4085 Tempor St.', '(909) 160-0481', NULL),
(66, 'Hall', 'denis', 'P.O. Box 810, 4564 Eleifend. Rd.', '(,53) 650-9929', NULL),
(67, 'Whitaker', 'baptiste', 'P.O. Box 815, 7279 Tincidunt. Av.', '(595) 290-3860', NULL),
(68, 'Preston', 'césar', 'P.O. Box ,141, 2708 Placerat Street', '(438) 592-4962', NULL),
(69, 'Berger', 'michel', '566 Eget St.', '(696) 146-7475', NULL),
(70, 'Harrell', 'aurelien', 'P.O. Box 501, 8231 Orci Road', '(,53) 650-9929', NULL),
(71, 'Vega', 'basile', '1456 Enim. Street', '(401) 686-5591', NULL),
(72, 'Whitaker', 'denis', 'Ap #875-8702 Nam St', '(587) 822-1555', NULL),
(73, 'Workman', 'benoit', '973-5497 Vel St.', '(980) 204-1438', NULL),
(74, 'Shepard', 'benjamin', '9213 Mollis Road', '(685) 656-7289', NULL),
(75, 'Marquez', 'aurelien', 'Ap #240-4550 Feugiat St.', '(935) 105-3161', NULL),
(76, 'Cabrera', 'barnabé', '884-9038 Morbi Rd.', '(511) 951-7750', NULL),
(77, 'Hall', 'constantin', 'P.O. Box 225, 2111 Adipiscing Av.', '(460) 556-7812', NULL),
(78, 'Herman', 'denis', '9848 Ridiculus Road', '(961) 810-4567', NULL),
(79, 'Marshall', 'sylvain', '566 Eget St.', '(290) 196-0261', NULL),
(80, 'Hendrix', 'rémi', 'P.O. Box 501, 8231 Orci Road', '(239) 815-2067', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `immatriculation` varchar(64) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `description` varchar(1024) NOT NULL,
  `entretient` int(11) DEFAULT NULL,
  `courses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `immatriculation`, `latitude`, `longitude`, `description`, `entretient`, `courses`) VALUES
(43, '3625', 46.1821, -0.752332, 'ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum', NULL, NULL),
(44, '17-315', 46.4137, -0.927781, 'nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare.', NULL, NULL),
(45, '6698', 46.1261, -0.413603, 'nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit,', NULL, NULL),
(46, '60614', 46.4407, -0.864811, 'urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi', NULL, NULL),
(47, '94457', 46.088, -0.133148, 'vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt', NULL, NULL),
(48, '1789', 45.9911, -0.424376, 'placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet,', NULL, NULL),
(49, '25337', 46.2111, -0.81902, 'magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales', NULL, NULL),
(50, '502321', 46.3476, -0.40303, 'enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus.', NULL, NULL),
(51, 'C2M 1W6', 46.4246, -0.908428, 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus', NULL, NULL),
(52, '2484AC', 46.2939, -0.671164, 'mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo.', NULL, NULL),
(53, '29741', 46.0567, -0.869216, 'nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit,', NULL, NULL),
(54, '60614', 46.1104, -0.607262, 'erat nonummy ultricies ornare, elit,elit fermentum risus, at fringilla purus mauris', NULL, NULL),
(55, '8505', 46.2552, -0.174135, 'vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt', NULL, NULL),
(56, '8505', 46.0255, -0.970204, 'ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie', NULL, NULL),
(57, '2364', 46.378, -0.767748, 'urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi', NULL, NULL),
(58, '22314', 46.4171, -0.168144, 'In at pede. Cras vulputate velit eu sem. Pellentesque ut', NULL, NULL),
(59, '94457', 46.1529, -0.97356, 'ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie', NULL, NULL),
(60, '75532', 46.1386, -0.103089, 'scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue,', NULL, NULL),
(61, '19842', 46.2442, -0.381777, 'erat nonummy ultricies ornare, elit,elit fermentum risus, at fringilla purus mauris', NULL, NULL),
(62, '22314', 46.4897, -0.151522, 'quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus', NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicule` (`vehicule`),
  ADD KEY `parcours` (`parcours`);

--
-- Index pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicule` (`vehicule`),
  ADD KEY `utilisateur` (`utilisateur`),
  ADD KEY `utilisateur_2` (`utilisateur`);

--
-- Index pour la table `parcour`
--
ALTER TABLE `parcour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`course`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicule` (`vehicule`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `entretien`
--
ALTER TABLE `entretien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `parcour`
--
ALTER TABLE `parcour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `courseVehicule` FOREIGN KEY (`vehicule`) REFERENCES `vehicule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `entretien`
--
ALTER TABLE `entretien`
  ADD CONSTRAINT `EntretienUtilisateur` FOREIGN KEY (`utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `EntretienVehicule` FOREIGN KEY (`vehicule`) REFERENCES `vehicule` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `parcour`
--
ALTER TABLE `parcour`
  ADD CONSTRAINT `ParcourCourse` FOREIGN KEY (`course`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
