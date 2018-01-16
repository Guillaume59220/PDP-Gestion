-- MySQL Script generated by MySQL Workbench
-- Tue Jan 16 14:28:24 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema domiciliation
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema domiciliation
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `domiciliation` DEFAULT CHARACTER SET utf8 ;
USE `domiciliation` ;

-- -----------------------------------------------------
-- Table `domiciliation`.`departement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`departement` (
  `id_departement` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(145) NOT NULL,
  `numero_departement` INT NOT NULL,
  PRIMARY KEY (`id_departement`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`pays`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`pays` (
  `id_pays` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(145) NOT NULL,
  PRIMARY KEY (`id_pays`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`fonction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`fonction` (
  `id_fonction` INT NOT NULL AUTO_INCREMENT,
  `libelle` VARCHAR(145) NOT NULL,
  PRIMARY KEY (`id_fonction`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`civilite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`civilite` (
  `id_civilite` INT NOT NULL AUTO_INCREMENT,
  `libelle_civilite` VARCHAR(45) NULL,
  PRIMARY KEY (`id_civilite`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`responsable_legale`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`responsable_legale` (
  `id_responsable` INT NOT NULL AUTO_INCREMENT,
  `nom_complet` VARCHAR(150) NOT NULL,
  `date_naissance` DATE NOT NULL,
  `lieu_naissance` VARCHAR(45) NOT NULL,
  `nationalite` VARCHAR(45) NOT NULL,
  `telephone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NOT NULL,
  `id_departement_fk` INT NOT NULL,
  `id_pays_fk` INT NOT NULL,
  `id_fonction_fk` INT NOT NULL,
  `id_civilite_fk` INT NOT NULL,
  PRIMARY KEY (`id_responsable`),
  INDEX `fk_responsable_legale_departement1_idx` (`id_departement_fk` ASC),
  INDEX `fk_responsable_legale_pays1_idx` (`id_pays_fk` ASC),
  INDEX `fk_responsable_legale_fonction1_idx` (`id_fonction_fk` ASC),
  INDEX `fk_responsable_legale_civilite1_idx` (`id_civilite_fk` ASC),
  CONSTRAINT `fk_responsable_legale_departement1`
    FOREIGN KEY (`id_departement_fk`)
    REFERENCES `domiciliation`.`departement` (`id_departement`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_legale_pays1`
    FOREIGN KEY (`id_pays_fk`)
    REFERENCES `domiciliation`.`pays` (`id_pays`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_legale_fonction1`
    FOREIGN KEY (`id_fonction_fk`)
    REFERENCES `domiciliation`.`fonction` (`id_fonction`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_legale_civilite1`
    FOREIGN KEY (`id_civilite_fk`)
    REFERENCES `domiciliation`.`civilite` (`id_civilite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`justificatif`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`justificatif` (
  `id_justificatif` INT NOT NULL AUTO_INCREMENT,
  `kibs` VARCHAR(45) NOT NULL,
  `piece_identite` VARCHAR(45) NOT NULL,
  `justificatif_domicile` VARCHAR(45) NOT NULL,
  `procuration_postale` VARCHAR(45) NOT NULL,
  `contract_signe` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_justificatif`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`numero_boite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`numero_boite` (
  `id_boite` INT NOT NULL AUTO_INCREMENT,
  `numero_boite` VARCHAR(45) NULL,
  PRIMARY KEY (`id_boite`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`option_contract`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`option_contract` (
  `id_option` INT NOT NULL AUTO_INCREMENT,
  `libelle_option` VARCHAR(145) NULL,
  `id_boite_fk` INT NOT NULL,
  PRIMARY KEY (`id_option`),
  INDEX `fk_option_contract_numero_boite1_idx` (`id_boite_fk` ASC),
  CONSTRAINT `fk_option_contract_numero_boite1`
    FOREIGN KEY (`id_boite_fk`)
    REFERENCES `domiciliation`.`numero_boite` (`id_boite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`contract`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`contract` (
  `id_contract` INT NOT NULL AUTO_INCREMENT,
  `debut_contract` DATE NOT NULL,
  `fin_contract` DATE NULL,
  `motif_fin_contract` LONGTEXT NULL,
  `addnotation` LONGTEXT NULL,
  `id_justificatif_fk` INT NOT NULL,
  `id_option_fk` INT NOT NULL,
  PRIMARY KEY (`id_contract`, `id_justificatif_fk`),
  INDEX `fk_contract_justificatif1_idx` (`id_justificatif_fk` ASC),
  INDEX `fk_contract_option_contract1_idx` (`id_option_fk` ASC),
  CONSTRAINT `fk_contract_justificatif1`
    FOREIGN KEY (`id_justificatif_fk`)
    REFERENCES `domiciliation`.`justificatif` (`id_justificatif`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contract_option_contract1`
    FOREIGN KEY (`id_option_fk`)
    REFERENCES `domiciliation`.`option_contract` (`id_option`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`forme_juridique`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`forme_juridique` (
  `id_forme` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(145) NULL,
  PRIMARY KEY (`id_forme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`clients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`clients` (
  `id_client` INT NOT NULL AUTO_INCREMENT,
  `code_client` VARCHAR(45) NOT NULL,
  `nom_client` VARCHAR(145) NOT NULL,
  `siren` VARCHAR(145) NOT NULL,
  `date_contract` DATE NOT NULL,
  `domination_sociale` VARCHAR(145) NOT NULL,
  `capital` INT NOT NULL,
  `id_responsable_fk` INT NOT NULL,
  `id_contract_fk` INT NOT NULL,
  `id_forme_fk` INT NOT NULL,
  PRIMARY KEY (`id_client`, `id_responsable_fk`, `id_contract_fk`),
  UNIQUE INDEX `codeclient_UNIQUE` (`code_client` ASC),
  INDEX `fk_clients_responsablelegale1_idx` (`id_responsable_fk` ASC),
  INDEX `fk_clients_contract1_idx` (`id_contract_fk` ASC),
  INDEX `fk_clients_forme_juridique1_idx` (`id_forme_fk` ASC),
  CONSTRAINT `fk_clients_responsablelegale1`
    FOREIGN KEY (`id_responsable_fk`)
    REFERENCES `domiciliation`.`responsable_legale` (`id_responsable`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clients_contract1`
    FOREIGN KEY (`id_contract_fk`)
    REFERENCES `domiciliation`.`contract` (`id_contract`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clients_forme_juridique1`
    FOREIGN KEY (`id_forme_fk`)
    REFERENCES `domiciliation`.`forme_juridique` (`id_forme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`voie_reexpedition`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`voie_reexpedition` (
  `id_reexpedition` INT NOT NULL AUTO_INCREMENT,
  `libelle_reexpedition` VARCHAR(145) NOT NULL,
  PRIMARY KEY (`id_reexpedition`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`type_courrier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`type_courrier` (
  `id_type_courrier` INT NOT NULL AUTO_INCREMENT,
  `libelle_courrier` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_type_courrier`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`nature_courrier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`nature_courrier` (
  `id_nature` INT NOT NULL AUTO_INCREMENT,
  `entrent` TINYINT NULL,
  `sortent` TINYINT NULL,
  PRIMARY KEY (`id_nature`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`tarif`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`tarif` (
  `id_tarif` INT(11) NOT NULL AUTO_INCREMENT,
  `type_envoie` VARCHAR(46) NULL DEFAULT NULL,
  `tarif_envoie` DECIMAL(4,2) NULL DEFAULT NULL,
  `tarif_envelope` DECIMAL(4,2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tarif`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `domiciliation`.`lettres_recommandees`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`lettres_recommandees` (
  `id_lettre` INT NOT NULL AUTO_INCREMENT,
  `numero_envoie` VARCHAR(55) NOT NULL,
  `expediteur` VARCHAR(45) NULL,
  `destinateur` VARCHAR(150) NULL,
  `id_tarif_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_lettre`),
  INDEX `fk_lettres_recommandees_tarif1_idx` (`id_tarif_fk` ASC),
  CONSTRAINT `fk_lettres_recommandees_tarif1`
    FOREIGN KEY (`id_tarif_fk`)
    REFERENCES `domiciliation`.`tarif` (`id_tarif`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`courrier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`courrier` (
  `id_courrier` INT NOT NULL AUTO_INCREMENT,
  `numero_courrier` INT NOT NULL,
  `date_entre` DATE NULL,
  `date_sortie` DATE NULL,
  `scan` VARCHAR(45) NOT NULL,
  `fax` VARCHAR(45) NOT NULL,
  `addnotation` LONGTEXT NULL,
  `id_client_fk` INT NOT NULL,
  `id_reexpedition_fk` INT NOT NULL,
  `id_type_courrier_fk` INT NOT NULL,
  `id_nature_fk` INT NOT NULL,
  `id_lettre_fk` INT NOT NULL,
  PRIMARY KEY (`id_courrier`, `id_client_fk`),
  INDEX `fk_courrier_clients1_idx` (`id_client_fk` ASC),
  INDEX `fk_courrier_voiereexpedition1_idx` (`id_reexpedition_fk` ASC),
  INDEX `fk_courrier_typecourrier1_idx` (`id_type_courrier_fk` ASC),
  INDEX `fk_courrier_nature_courrier1_idx` (`id_nature_fk` ASC),
  INDEX `fk_courrier_lettres_recommandees1_idx` (`id_lettre_fk` ASC),
  CONSTRAINT `fk_courrier_clients1`
    FOREIGN KEY (`id_client_fk`)
    REFERENCES `domiciliation`.`clients` (`id_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courrier_voiereexpedition1`
    FOREIGN KEY (`id_reexpedition_fk`)
    REFERENCES `domiciliation`.`voie_reexpedition` (`id_reexpedition`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courrier_typecourrier1`
    FOREIGN KEY (`id_type_courrier_fk`)
    REFERENCES `domiciliation`.`type_courrier` (`id_type_courrier`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courrier_nature_courrier1`
    FOREIGN KEY (`id_nature_fk`)
    REFERENCES `domiciliation`.`nature_courrier` (`id_nature`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_courrier_lettres_recommandees1`
    FOREIGN KEY (`id_lettre_fk`)
    REFERENCES `domiciliation`.`lettres_recommandees` (`id_lettre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`incident`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`incident` (
  `id_incident` INT NOT NULL AUTO_INCREMENT,
  `date_incident` DATE NOT NULL,
  `type_incident` VARCHAR(155) NOT NULL,
  `commentaire` LONGTEXT NOT NULL,
  `id_client_fk` INT NOT NULL,
  PRIMARY KEY (`id_incident`, `id_client_fk`),
  INDEX `fk_incident_clients1_idx` (`id_client_fk` ASC),
  CONSTRAINT `fk_incident_clients1`
    FOREIGN KEY (`id_client_fk`)
    REFERENCES `domiciliation`.`clients` (`id_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`droit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`droit` (
  `id_droit` INT NOT NULL,
  `droit` VARCHAR(45) NOT NULL,
  `commentaire` LONGTEXT NULL,
  PRIMARY KEY (`id_droit`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `domiciliation`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `domiciliation`.`user` (
  `id_utilisateur` INT NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `mdp` VARCHAR(145) NOT NULL,
  `nom_user` VARCHAR(145) NULL,
  `id_droit_fk` INT NOT NULL,
  PRIMARY KEY (`id_utilisateur`, `id_droit_fk`),
  INDEX `fk_utilisateur_droit1_idx` (`id_droit_fk` ASC),
  CONSTRAINT `fk_utilisateur_droit1`
    FOREIGN KEY (`id_droit_fk`)
    REFERENCES `domiciliation`.`droit` (`id_droit`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
