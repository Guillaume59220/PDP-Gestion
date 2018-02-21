-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 21 fév. 2018 à 10:17
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
-- Base de données :  `domiciliation`
--

-- --------------------------------------------------------

--
-- Structure de la table `civilite`
--

CREATE TABLE `civilite` (
  `id_civilite` int(11) NOT NULL,
  `libelle_civilite` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `code_client` varchar(45) NOT NULL,
  `nom_client` varchar(145) NOT NULL,
  `siren` varchar(145) NOT NULL,
  `date_contract` date NOT NULL,
  `domination_sociale` varchar(145) NOT NULL,
  `capital` int(11) NOT NULL,
  `id_responsable` int(11) NOT NULL,
  `id_contract` int(11) NOT NULL,
  `id_forme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

CREATE TABLE `contract` (
  `id_contract` int(11) NOT NULL,
  `debut_contract` date NOT NULL,
  `fin_contract` date DEFAULT NULL,
  `motif_fin_contract` longtext,
  `addnotation` longtext,
  `id_justificatif` int(11) NOT NULL,
  `id_option` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `courrier`
--

CREATE TABLE `courrier` (
  `id_courrier` int(11) NOT NULL,
  `numero_courrier` int(11) NOT NULL,
  `date_entre` date DEFAULT NULL,
  `date_sortie` date DEFAULT NULL,
  `scan` varchar(45) NOT NULL,
  `fax` varchar(45) NOT NULL,
  `annotation` longtext,
  `id_client` int(11) NOT NULL,
  `id_reexpedition` int(11) NOT NULL,
  `id_type_courrier` int(11) NOT NULL,
  `id_lettre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `nom` varchar(145) NOT NULL,
  `numero_departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `libelle` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forme_juridique`
--

CREATE TABLE `forme_juridique` (
  `id_forme` int(11) NOT NULL,
  `nom` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

CREATE TABLE `incident` (
  `id_incident` int(11) NOT NULL,
  `date_incident` date NOT NULL,
  `type_incident` varchar(155) NOT NULL,
  `commentaire` longtext NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `justificatif`
--

CREATE TABLE `justificatif` (
  `id_justificatif` int(11) NOT NULL,
  `kibs` varchar(45) NOT NULL,
  `piece_identite` varchar(45) NOT NULL,
  `justificatif_domicile` varchar(45) NOT NULL,
  `procuration_postale` varchar(45) NOT NULL,
  `contract_signe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lettres_recommandees`
--

CREATE TABLE `lettres_recommandees` (
  `id_lettre` int(11) NOT NULL,
  `numero_envoie` varchar(55) NOT NULL,
  `expediteur` varchar(45) DEFAULT NULL,
  `destinateur` varchar(150) DEFAULT NULL,
  `id_tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `numero_boite`
--

CREATE TABLE `numero_boite` (
  `id_boite` int(11) NOT NULL,
  `numero_boite` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `option_contract`
--

CREATE TABLE `option_contract` (
  `id_option` int(11) NOT NULL,
  `libelle_option` varchar(145) DEFAULT NULL,
  `id_boite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `responsable_legale`
--

CREATE TABLE `responsable_legale` (
  `id_responsable` int(11) NOT NULL,
  `nom_complet` varchar(150) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(45) NOT NULL,
  `nationalite` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `id_fonction` int(11) NOT NULL,
  `id_civilite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `type_envoie` varchar(46) DEFAULT NULL,
  `tarif_envoie` decimal(4,2) DEFAULT NULL,
  `tarif_envelope` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_courrier`
--

CREATE TABLE `type_courrier` (
  `id_type_courrier` int(11) NOT NULL,
  `libelle_courrier` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mdp` varchar(150) NOT NULL,
  `role_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `view_courrier`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `view_courrier` (
`id_courrier` int(11)
,`id_client` int(11)
,`id_type_courrier` int(11)
,`libelle_courrier` varchar(45)
,`date_entre` date
,`annotation` longtext
,`scan` varchar(45)
,`date_sortie` date
,`id_lettre` int(11)
,`destinateur` varchar(150)
,`expediteur` varchar(45)
,`nom_client` varchar(145)
,`code_client` varchar(45)
,`libelle_reexpedition` varchar(145)
,`id_reexpedition` int(11)
,`tarif_envoie` decimal(4,2)
);

-- --------------------------------------------------------

--
-- Structure de la table `voie_reexpedition`
--

CREATE TABLE `voie_reexpedition` (
  `id_reexpedition` int(11) NOT NULL,
  `libelle_reexpedition` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la vue `view_courrier`
--
DROP TABLE IF EXISTS `view_courrier`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_courrier`  AS  select `courrier`.`id_courrier` AS `id_courrier`,`courrier`.`id_client` AS `id_client`,`courrier`.`id_type_courrier` AS `id_type_courrier`,`type_courrier`.`libelle_courrier` AS `libelle_courrier`,`courrier`.`date_entre` AS `date_entre`,`courrier`.`annotation` AS `annotation`,`courrier`.`scan` AS `scan`,`courrier`.`date_sortie` AS `date_sortie`,`courrier`.`id_lettre` AS `id_lettre`,`lettres_recommandees`.`destinateur` AS `destinateur`,`lettres_recommandees`.`expediteur` AS `expediteur`,`clients`.`nom_client` AS `nom_client`,`clients`.`code_client` AS `code_client`,`voie_reexpedition`.`libelle_reexpedition` AS `libelle_reexpedition`,`voie_reexpedition`.`id_reexpedition` AS `id_reexpedition`,`tarif`.`tarif_envoie` AS `tarif_envoie` from (((((`courrier` join `clients`) join `type_courrier`) join `lettres_recommandees`) join `voie_reexpedition`) join `tarif`) where ((`courrier`.`id_client` = `clients`.`id_client`) and (`courrier`.`id_type_courrier` = `type_courrier`.`id_type_courrier`) and (`courrier`.`id_lettre` = `lettres_recommandees`.`id_lettre`) and (`courrier`.`id_reexpedition` = `voie_reexpedition`.`id_reexpedition`) and (`lettres_recommandees`.`id_tarif` = `tarif`.`id_tarif`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `civilite`
--
ALTER TABLE `civilite`
  ADD PRIMARY KEY (`id_civilite`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`,`id_responsable`,`id_contract`),
  ADD UNIQUE KEY `codeclient_UNIQUE` (`code_client`),
  ADD KEY `fk_clients_responsablelegale1_idx` (`id_responsable`),
  ADD KEY `fk_clients_contract1_idx` (`id_contract`),
  ADD KEY `fk_clients_forme_juridique1_idx` (`id_forme`);

--
-- Index pour la table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id_contract`,`id_justificatif`),
  ADD KEY `fk_contract_justificatif1_idx` (`id_justificatif`),
  ADD KEY `fk_contract_option_contract1_idx` (`id_option`);

--
-- Index pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD PRIMARY KEY (`id_courrier`,`id_client`),
  ADD KEY `fk_courrier_clients1_idx` (`id_client`),
  ADD KEY `fk_courrier_voiereexpedition1_idx` (`id_reexpedition`),
  ADD KEY `fk_courrier_typecourrier1_idx` (`id_type_courrier`),
  ADD KEY `fk_courrier_lettres_recommandees1_idx` (`id_lettre`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Index pour la table `forme_juridique`
--
ALTER TABLE `forme_juridique`
  ADD PRIMARY KEY (`id_forme`);

--
-- Index pour la table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id_incident`,`id_client`),
  ADD KEY `fk_incident_clients1_idx` (`id_client`);

--
-- Index pour la table `justificatif`
--
ALTER TABLE `justificatif`
  ADD PRIMARY KEY (`id_justificatif`);

--
-- Index pour la table `lettres_recommandees`
--
ALTER TABLE `lettres_recommandees`
  ADD PRIMARY KEY (`id_lettre`),
  ADD KEY `fk_lettres_recommandees_tarif1_idx` (`id_tarif`);

--
-- Index pour la table `numero_boite`
--
ALTER TABLE `numero_boite`
  ADD PRIMARY KEY (`id_boite`);

--
-- Index pour la table `option_contract`
--
ALTER TABLE `option_contract`
  ADD PRIMARY KEY (`id_option`),
  ADD KEY `fk_option_contract_numero_boite1_idx` (`id_boite`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Index pour la table `responsable_legale`
--
ALTER TABLE `responsable_legale`
  ADD PRIMARY KEY (`id_responsable`),
  ADD KEY `fk_responsable_legale_departement1_idx` (`id_departement`),
  ADD KEY `fk_responsable_legale_pays1_idx` (`id_pays`),
  ADD KEY `fk_responsable_legale_fonction1_idx` (`id_fonction`),
  ADD KEY `fk_responsable_legale_civilite1_idx` (`id_civilite`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Index pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  ADD PRIMARY KEY (`id_type_courrier`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `voie_reexpedition`
--
ALTER TABLE `voie_reexpedition`
  ADD PRIMARY KEY (`id_reexpedition`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `civilite`
--
ALTER TABLE `civilite`
  MODIFY `id_civilite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contract`
--
ALTER TABLE `contract`
  MODIFY `id_contract` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `courrier`
--
ALTER TABLE `courrier`
  MODIFY `id_courrier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forme_juridique`
--
ALTER TABLE `forme_juridique`
  MODIFY `id_forme` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `incident`
--
ALTER TABLE `incident`
  MODIFY `id_incident` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `justificatif`
--
ALTER TABLE `justificatif`
  MODIFY `id_justificatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lettres_recommandees`
--
ALTER TABLE `lettres_recommandees`
  MODIFY `id_lettre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `numero_boite`
--
ALTER TABLE `numero_boite`
  MODIFY `id_boite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `option_contract`
--
ALTER TABLE `option_contract`
  MODIFY `id_option` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `responsable_legale`
--
ALTER TABLE `responsable_legale`
  MODIFY `id_responsable` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  MODIFY `id_type_courrier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voie_reexpedition`
--
ALTER TABLE `voie_reexpedition`
  MODIFY `id_reexpedition` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_clients_contract1` FOREIGN KEY (`id_contract`) REFERENCES `contract` (`id_contract`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clients_forme_juridique1` FOREIGN KEY (`id_forme`) REFERENCES `forme_juridique` (`id_forme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clients_responsablelegale1` FOREIGN KEY (`id_responsable`) REFERENCES `responsable_legale` (`id_responsable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `fk_contract_justificatif1` FOREIGN KEY (`id_justificatif`) REFERENCES `justificatif` (`id_justificatif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_contract_option_contract1` FOREIGN KEY (`id_option`) REFERENCES `option_contract` (`id_option`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD CONSTRAINT `fk_courrier_clients1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_lettres_recommandees1` FOREIGN KEY (`id_lettre`) REFERENCES `lettres_recommandees` (`id_lettre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_typecourrier1` FOREIGN KEY (`id_type_courrier`) REFERENCES `type_courrier` (`id_type_courrier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_voiereexpedition1` FOREIGN KEY (`id_reexpedition`) REFERENCES `voie_reexpedition` (`id_reexpedition`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_incident_clients1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `lettres_recommandees`
--
ALTER TABLE `lettres_recommandees`
  ADD CONSTRAINT `fk_lettres_recommandees_tarif1` FOREIGN KEY (`id_tarif`) REFERENCES `tarif` (`id_tarif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `option_contract`
--
ALTER TABLE `option_contract`
  ADD CONSTRAINT `fk_option_contract_numero_boite1` FOREIGN KEY (`id_boite`) REFERENCES `numero_boite` (`id_boite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `responsable_legale`
--
ALTER TABLE `responsable_legale`
  ADD CONSTRAINT `fk_responsable_legale_civilite1` FOREIGN KEY (`id_civilite`) REFERENCES `civilite` (`id_civilite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_responsable_legale_departement1` FOREIGN KEY (`id_departement`) REFERENCES `departement` (`id_departement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_responsable_legale_fonction1` FOREIGN KEY (`id_fonction`) REFERENCES `fonction` (`id_fonction`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_responsable_legale_pays1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
