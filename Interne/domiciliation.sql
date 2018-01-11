-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 11 jan. 2018 à 10:42
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
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `idclient` int(11) NOT NULL,
  `codeclient` varchar(45) NOT NULL,
  `nomclient` varchar(45) NOT NULL,
  `siren` varchar(45) NOT NULL,
  `datecontract` date NOT NULL,
  `dominationsociale` varchar(45) NOT NULL,
  `formejuridique` varchar(45) NOT NULL,
  `capital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

CREATE TABLE `contract` (
  `idcontract` int(11) NOT NULL,
  `debutcontract` date NOT NULL,
  `fincontract` date DEFAULT NULL,
  `motiffincontract` longtext,
  `addnotation` longtext,
  `optioncontract` enum('sur place',' poste','email','fax') NOT NULL,
  `clients_idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `courrier`
--

CREATE TABLE `courrier` (
  `idcourrier` int(11) NOT NULL,
  `numerocourrier` int(11) NOT NULL,
  `nature` enum('Entrent','Sortent') NOT NULL,
  `dateentre` date DEFAULT NULL,
  `datesortie` date DEFAULT NULL,
  `adressereexpedition` varchar(45) NOT NULL,
  `scan` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fax` varchar(45) NOT NULL,
  `addnotation` longtext,
  `clients_idclient` int(11) NOT NULL,
  `voiereexpedition_idvoiereexpedition` int(11) NOT NULL,
  `typecourrier_idtypecourrier` int(11) NOT NULL,
  `tarif_idtarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

CREATE TABLE `incident` (
  `idincident` int(11) NOT NULL,
  `dateincident` date NOT NULL,
  `typeicident` varchar(155) NOT NULL,
  `commentaire` longtext NOT NULL,
  `clients_idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `justificatif`
--

CREATE TABLE `justificatif` (
  `idjustificatif` int(11) NOT NULL,
  `kibs` varchar(45) NOT NULL,
  `pieceidentite` varchar(45) NOT NULL,
  `justificatifdomicile` varchar(45) NOT NULL,
  `procurationpostale` varchar(45) NOT NULL,
  `contractsigne` varchar(45) NOT NULL,
  `contract_idcontract` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lettresrecommandees`
--

CREATE TABLE `lettresrecommandees` (
  `idlettrerecommande` int(11) NOT NULL,
  `numerodenvoie` varchar(55) NOT NULL,
  `expediteur` varchar(45) DEFAULT NULL,
  `destinateur` varchar(150) DEFAULT NULL,
  `typelettre` enum('entrent','sortent') NOT NULL,
  `courrier_idcourrier` int(11) NOT NULL,
  `courrier_clients_idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `responsablelegale`
--

CREATE TABLE `responsablelegale` (
  `idresponsablelegale` int(11) NOT NULL,
  `civilite` enum('Monsieur','Madame','Mademoiselle') NOT NULL,
  `nomcomplet` varchar(150) NOT NULL,
  `datenaissance` date NOT NULL,
  `lieunaissance` varchar(45) NOT NULL,
  `departementnaissance` varchar(45) NOT NULL,
  `nationalite` varchar(45) NOT NULL,
  `pays` varchar(45) NOT NULL,
  `function` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `clients_idclient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE `tarif` (
  `idtarif` int(11) NOT NULL,
  `typedenvoie` varchar(46) DEFAULT NULL,
  `tarifenvoie` decimal(4,2) DEFAULT NULL,
  `tarifenvelope` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tarif`
--

INSERT INTO `tarif` (`idtarif`, `typedenvoie`, `tarifenvoie`, `tarifenvelope`) VALUES
(1, 'Courrier Normal', '0.95', '0.10'),
(2, 'Courrier de 20 g à 100g', '1.90', '0.10'),
(3, 'Courrier de 100 g à 250g', '3.80', '0.15'),
(4, 'Courrier de 250 g à 500g', '5.70', '0.15'),
(5, 'Courrier de 500 g à 3kg', '7.60', '0.15'),
(6, 'Courriers autres poids', '3.40', '0.15'),
(7, 'Courrier vers la Belgique jusque 20g', '0.83', '0.10'),
(8, 'Courrier vers la Belgique de 20g jusque 50g', '1.35', '0.10'),
(9, 'Courrier vers la Belgique de 50g jusque 100g', '1.80', '0.15'),
(10, 'Courriers vers la Belgique autres poids', '0.00', '0.00'),
(11, 'RAR', '4.75', '0.10'),
(12, 'Recommandé Jusqu\'à 20 g R1', '4.05', '0.10'),
(13, 'Recommandé  R2', '4.75', '0.10'),
(14, 'Recommandé  R3', '5.85', '0.10'),
(15, 'Recommandé 20 à 50 g R1', '4.55', '0.10'),
(16, 'Recommandé  R2', '5.30', '0.10'),
(17, 'Recommandé  R3', '6.30', '0.10'),
(18, 'Recommandé 50 à 100 g R1', '5.20', '0.10'),
(19, 'Recommandé  R2', '5.85', '0.10'),
(20, 'Recommandé  R3', '6.90', '0.10'),
(21, 'Recommandé 100 à 250 g R1', '6.30', '0.15'),
(22, 'Recommandé  R2', '7.05', '0.15'),
(23, 'Recommandé  R3', '8.10', '0.15'),
(24, 'Recommandé 250 à 500 g R1', '7.40', '0.15'),
(25, 'Recommandé  R2', '8.05', '0.15'),
(26, 'Recommandé  R3', '9.10', '0.15'),
(27, 'Recommandé 500 g à 1kg R1', '8.50', '0.15'),
(28, 'Recommandé  R2', '9.20', '0.15'),
(29, 'Recommandé  R3', '10.25', '0.15'),
(30, 'Recommandé 1kg à 2kg R1', '10.10', '0.15'),
(31, 'Recommandé  R2', '10.80', '0.15'),
(32, 'Recommandé  R3', '11.90', '0.15'),
(33, 'Recommandé 2kg à 3kg R1', '11.25', '0.15'),
(34, 'Recommandé  R2', '11.95', '0.15'),
(35, 'Recommandé  R3', '13.00', '0.15'),
(36, 'Recommandé Contre-remboursement ', '9.00', '0.15'),
(37, 'Recommandé Avis de réception ', '1.15', '0.15'),
(38, 'FAX', '1.00', '0.00'),
(39, 'Courrier recommandé vers Sénégal avec AR', '5.60', '0.10'),
(40, 'Courrier Royaume UNI', '0.80', '0.10');

-- --------------------------------------------------------

--
-- Structure de la table `typecourrier`
--

CREATE TABLE `typecourrier` (
  `idtypecourrier` int(11) NOT NULL,
  `libellecourrier` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typecourrier`
--

INSERT INTO `typecourrier` (`idtypecourrier`, `libellecourrier`) VALUES
(1, 'Colis'),
(2, 'Lettre'),
(3, 'Lettre recommande');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `viewclient`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `viewclient` (
`idclient` int(11)
,`codeclient` varchar(45)
,`nomclient` varchar(45)
,`siren` varchar(45)
,`datecontract` date
,`capital` int(11)
,`formejuridique` varchar(45)
,`nomcomplet` varchar(150)
,`datenaissance` date
,`lieunaissance` varchar(45)
,`nationalite` varchar(45)
,`function` varchar(45)
,`telephone` varchar(45)
,`email` varchar(45)
,`adresse` varchar(45)
,`idcontract` int(11)
,`debutcontract` date
,`fincontract` date
,`optioncontract` enum('sur place',' poste','email','fax')
,`addnotation` longtext
,`pieceidentite` varchar(45)
,`justificatifdomicile` varchar(45)
,`procurationpostale` varchar(45)
,`contractsigne` varchar(45)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `viewcourrier`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `viewcourrier` (
`idcourrier` int(11)
,`numerocourrier` int(11)
,`dateentre` date
,`datesortie` date
,`adressereexpedition` varchar(45)
,`email` varchar(45)
,`addnotation` longtext
,`idclient` int(11)
,`nomclient` varchar(45)
,`codeclient` varchar(45)
,`idtypecourrier` int(11)
,`libellecourrier` varchar(45)
,`idvoiereexpedition` int(11)
,`libellereexpedition` varchar(45)
,`idtarif` int(11)
,`typedenvoie` varchar(46)
,`tarifenvoie` decimal(4,2)
,`tarifenvelope` decimal(4,2)
,`optioncontract` enum('sur place',' poste','email','fax')
,`numerodenvoie` varchar(55)
,`typelettre` enum('entrent','sortent')
,`expediteur` varchar(45)
,`idlettrerecommande` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `voiereexpedition`
--

CREATE TABLE `voiereexpedition` (
  `idvoiereexpedition` int(11) NOT NULL,
  `libellereexpedition` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiereexpedition`
--

INSERT INTO `voiereexpedition` (`idvoiereexpedition`, `libellereexpedition`) VALUES
(1, 'Sur place'),
(2, 'Par email'),
(3, 'Fax'),
(4, 'Poste quotidienne'),
(5, 'Poste hebdomadaire'),
(6, 'Poste mensuelle');

-- --------------------------------------------------------

--
-- Structure de la vue `viewclient`
--
DROP TABLE IF EXISTS `viewclient`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewclient`  AS  select `clients`.`idclient` AS `idclient`,`clients`.`codeclient` AS `codeclient`,`clients`.`nomclient` AS `nomclient`,`clients`.`siren` AS `siren`,`clients`.`datecontract` AS `datecontract`,`clients`.`capital` AS `capital`,`clients`.`formejuridique` AS `formejuridique`,`responsablelegale`.`nomcomplet` AS `nomcomplet`,`responsablelegale`.`datenaissance` AS `datenaissance`,`responsablelegale`.`lieunaissance` AS `lieunaissance`,`responsablelegale`.`nationalite` AS `nationalite`,`responsablelegale`.`function` AS `function`,`responsablelegale`.`telephone` AS `telephone`,`responsablelegale`.`email` AS `email`,`responsablelegale`.`adresse` AS `adresse`,`contract`.`idcontract` AS `idcontract`,`contract`.`debutcontract` AS `debutcontract`,`contract`.`fincontract` AS `fincontract`,`contract`.`optioncontract` AS `optioncontract`,`contract`.`addnotation` AS `addnotation`,`justificatif`.`pieceidentite` AS `pieceidentite`,`justificatif`.`justificatifdomicile` AS `justificatifdomicile`,`justificatif`.`procurationpostale` AS `procurationpostale`,`justificatif`.`contractsigne` AS `contractsigne` from (((`clients` join `responsablelegale`) join `contract`) join `justificatif`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `viewcourrier`
--
DROP TABLE IF EXISTS `viewcourrier`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewcourrier`  AS  select `courrier`.`idcourrier` AS `idcourrier`,`courrier`.`numerocourrier` AS `numerocourrier`,`courrier`.`dateentre` AS `dateentre`,`courrier`.`datesortie` AS `datesortie`,`courrier`.`adressereexpedition` AS `adressereexpedition`,`courrier`.`email` AS `email`,`courrier`.`addnotation` AS `addnotation`,`clients`.`idclient` AS `idclient`,`clients`.`nomclient` AS `nomclient`,`clients`.`codeclient` AS `codeclient`,`typecourrier`.`idtypecourrier` AS `idtypecourrier`,`typecourrier`.`libellecourrier` AS `libellecourrier`,`voiereexpedition`.`idvoiereexpedition` AS `idvoiereexpedition`,`voiereexpedition`.`libellereexpedition` AS `libellereexpedition`,`tarif`.`idtarif` AS `idtarif`,`tarif`.`typedenvoie` AS `typedenvoie`,`tarif`.`tarifenvoie` AS `tarifenvoie`,`tarif`.`tarifenvelope` AS `tarifenvelope`,`contract`.`optioncontract` AS `optioncontract`,`lettresrecommandees`.`numerodenvoie` AS `numerodenvoie`,`lettresrecommandees`.`typelettre` AS `typelettre`,`lettresrecommandees`.`expediteur` AS `expediteur`,`lettresrecommandees`.`idlettrerecommande` AS `idlettrerecommande` from ((((((`courrier` join `clients`) join `typecourrier`) join `voiereexpedition`) join `tarif`) join `contract`) join `lettresrecommandees`) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`idclient`),
  ADD UNIQUE KEY `codeclient_UNIQUE` (`codeclient`);

--
-- Index pour la table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`idcontract`,`clients_idclient`),
  ADD KEY `fk_contract_clients1_idx` (`clients_idclient`);

--
-- Index pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD PRIMARY KEY (`idcourrier`,`clients_idclient`),
  ADD KEY `fk_courrier_clients1_idx` (`clients_idclient`),
  ADD KEY `fk_courrier_voiereexpedition1_idx` (`voiereexpedition_idvoiereexpedition`),
  ADD KEY `fk_courrier_typecourrier1_idx` (`typecourrier_idtypecourrier`),
  ADD KEY `fk_courrier_tarif1_idx` (`tarif_idtarif`);

--
-- Index pour la table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`idincident`,`clients_idclient`),
  ADD KEY `fk_incident_clients1_idx` (`clients_idclient`);

--
-- Index pour la table `justificatif`
--
ALTER TABLE `justificatif`
  ADD PRIMARY KEY (`idjustificatif`,`contract_idcontract`),
  ADD KEY `fk_justificatif_contract_idx` (`contract_idcontract`);

--
-- Index pour la table `lettresrecommandees`
--
ALTER TABLE `lettresrecommandees`
  ADD PRIMARY KEY (`idlettrerecommande`),
  ADD KEY `fk_lettresrecommandees_courrier1_idx` (`courrier_idcourrier`,`courrier_clients_idclient`);

--
-- Index pour la table `responsablelegale`
--
ALTER TABLE `responsablelegale`
  ADD PRIMARY KEY (`idresponsablelegale`,`clients_idclient`),
  ADD KEY `fk_responsablelegale_clients1_idx` (`clients_idclient`);

--
-- Index pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`idtarif`);

--
-- Index pour la table `typecourrier`
--
ALTER TABLE `typecourrier`
  ADD PRIMARY KEY (`idtypecourrier`);

--
-- Index pour la table `voiereexpedition`
--
ALTER TABLE `voiereexpedition`
  ADD PRIMARY KEY (`idvoiereexpedition`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contract`
--
ALTER TABLE `contract`
  MODIFY `idcontract` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `courrier`
--
ALTER TABLE `courrier`
  MODIFY `idcourrier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `incident`
--
ALTER TABLE `incident`
  MODIFY `idincident` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `justificatif`
--
ALTER TABLE `justificatif`
  MODIFY `idjustificatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lettresrecommandees`
--
ALTER TABLE `lettresrecommandees`
  MODIFY `idlettrerecommande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `responsablelegale`
--
ALTER TABLE `responsablelegale`
  MODIFY `idresponsablelegale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `idtarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `typecourrier`
--
ALTER TABLE `typecourrier`
  MODIFY `idtypecourrier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `voiereexpedition`
--
ALTER TABLE `voiereexpedition`
  MODIFY `idvoiereexpedition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `fk_contract_clients1` FOREIGN KEY (`clients_idclient`) REFERENCES `clients` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `courrier`
--
ALTER TABLE `courrier`
  ADD CONSTRAINT `fk_courrier_clients1` FOREIGN KEY (`clients_idclient`) REFERENCES `clients` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_tarif1` FOREIGN KEY (`tarif_idtarif`) REFERENCES `tarif` (`idtarif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_typecourrier1` FOREIGN KEY (`typecourrier_idtypecourrier`) REFERENCES `typecourrier` (`idtypecourrier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_courrier_voiereexpedition1` FOREIGN KEY (`voiereexpedition_idvoiereexpedition`) REFERENCES `voiereexpedition` (`idvoiereexpedition`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_incident_clients1` FOREIGN KEY (`clients_idclient`) REFERENCES `clients` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `justificatif`
--
ALTER TABLE `justificatif`
  ADD CONSTRAINT `fk_justificatif_contract` FOREIGN KEY (`contract_idcontract`) REFERENCES `contract` (`idcontract`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `lettresrecommandees`
--
ALTER TABLE `lettresrecommandees`
  ADD CONSTRAINT `fk_lettresrecommandees_courrier1` FOREIGN KEY (`courrier_idcourrier`,`courrier_clients_idclient`) REFERENCES `courrier` (`idcourrier`, `clients_idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `responsablelegale`
--
ALTER TABLE `responsablelegale`
  ADD CONSTRAINT `fk_responsablelegale_clients1` FOREIGN KEY (`clients_idclient`) REFERENCES `clients` (`idclient`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
