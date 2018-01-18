-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 18 jan. 2018 à 14:26
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_courrier`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom_client`) VALUES
(1, 'A.A POUR TRACABILITE'),
(2, 'ATAVIK'),
(3, 'ALTER AVENIR'),
(4, 'Artisan Cassagrandre');

-- --------------------------------------------------------

--
-- Structure de la table `courrier`
--

CREATE TABLE `courrier` (
  `id_courrier` int(11) NOT NULL,
  `date_entre` date NOT NULL,
  `addnotation` longtext,
  `id_client_fk` int(11) NOT NULL,
  `id_type_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `id_droit` int(11) NOT NULL,
  `droit` varchar(145) NOT NULL,
  `commantaire` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `droit`
--

INSERT INTO `droit` (`id_droit`, `droit`, `commantaire`) VALUES
(1, 'admin', NULL),
(2, 'moderateur', NULL),
(3, 'user', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_courrier`
--

CREATE TABLE `type_courrier` (
  `id_type` int(11) NOT NULL,
  `libelle_courrier` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_courrier`
--

INSERT INTO `type_courrier` (`id_type`, `libelle_courrier`) VALUES
(1, 'Colis'),
(2, 'Lettre'),
(3, 'Lettre recommandée');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(145) NOT NULL,
  `mdp` varchar(145) NOT NULL,
  `id_droit_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `login`, `mdp`, `id_droit_fk`) VALUES
(1, 'toto', 'kot', 1),
(2, 'kot', 'toto', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD PRIMARY KEY (`id_courrier`,`id_client_fk`,`id_type_fk`),
  ADD KEY `fk_courrier_clients1_idx` (`id_client_fk`),
  ADD KEY `fk_courrier_type_courrier1_idx` (`id_type_fk`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`,`id_droit_fk`),
  ADD KEY `fk_users_droit_idx` (`id_droit_fk`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `courrier`
--
ALTER TABLE `courrier`
  MODIFY `id_courrier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `id_droit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD CONSTRAINT `fk_courrier_clients1` FOREIGN KEY (`id_client_fk`) REFERENCES `clients` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_type_courrier1` FOREIGN KEY (`id_type_fk`) REFERENCES `type_courrier` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_droit` FOREIGN KEY (`id_droit_fk`) REFERENCES `droit` (`id_droit`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
