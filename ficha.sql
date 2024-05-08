-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_ficha
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_ficha
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_ficha` DEFAULT CHARACTER SET utf8mb3 ;
USE `db_ficha` ;

-- -----------------------------------------------------
-- Table `db_ficha`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ficha`.`tb_usuario` (
  `usuario_email` VARCHAR(255) NOT NULL,
  `usuario_nome` VARCHAR(255) NOT NULL,
  `usuario_senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`usuario_email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_ficha`.`tb_ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ficha`.`tb_ficha` (
  `id_ficha` INT NOT NULL AUTO_INCREMENT,
  `tb_usuario_usuario_email` VARCHAR(255) NOT NULL,
  `nome_ficha` VARCHAR(255) NOT NULL,
  `idade_ficha` INT NOT NULL,
  `nivel_ficha` INT NULL DEFAULT NULL,
  `afinidade_ficha` VARCHAR(255) NULL DEFAULT NULL,
  `classe_ficha` VARCHAR(255) NULL DEFAULT NULL,
  `trilha_ficha` VARCHAR(255) NULL DEFAULT NULL,
  `vida_ficha` INT NULL DEFAULT NULL,
  `sanidade_ficha` INT NULL DEFAULT NULL,
  `pp_ficha` INT NULL DEFAULT NULL,
  `forca_ficha` INT NULL DEFAULT NULL,
  `destreza_ficha` INT NULL DEFAULT NULL,
  `constituicao_ficha` INT NULL DEFAULT NULL,
  `sabedoria_ficha` INT NULL DEFAULT NULL,
  `inteligencia_ficha` INT NULL DEFAULT NULL,
  `carisma_ficha` INT NULL DEFAULT NULL,
  `poder_ficha` INT NULL DEFAULT NULL,
  `arm_passiva_ficha` INT NULL DEFAULT NULL,
  `bloqueio_ficha` INT NULL DEFAULT NULL,
  `esquiva_ficha` INT NULL DEFAULT NULL,
  `red_fisica_ficha` INT NULL DEFAULT NULL,
  `red_paranormal_ficha` INT NULL DEFAULT NULL,
  `red_mental_ficha` INT NULL DEFAULT NULL,
  `movimento_ficha` INT NULL DEFAULT NULL,
  `acrobacia_ficha` TINYTEXT NULL DEFAULT NULL,
  `atletismo_ficha` TINYINT NULL DEFAULT NULL,
  `atualizacoes_ficha` TINYINT NULL DEFAULT NULL,
  `ciencias_ficha` TINYINT NULL DEFAULT NULL,
  `enganacao_ficha` TINYINT NULL DEFAULT NULL,
  `fortitude_ficha` TINYINT NULL DEFAULT NULL,
  `furtividade_ficha` TINYINT NULL DEFAULT NULL,
  `iniciativa_ficha` TINYINT NULL DEFAULT NULL,
  `luta_ficha` TINYINT NULL DEFAULT NULL,
  `ocultismo_ficha` TINYINT NULL DEFAULT NULL,
  `percepcao_ficha` TINYINT NULL DEFAULT NULL,
  `pilotagem_ficha` TINYINT NULL DEFAULT NULL,
  `pontaria_ficha` TINYINT NULL DEFAULT NULL,
  `psicologia_ficha` TINYINT NULL DEFAULT NULL,
  `reflexos_ficha` TINYINT NULL DEFAULT NULL,
  `tecnologia_ficha` TINYINT NULL DEFAULT NULL,
  `vontade_ficha` TINYINT NULL DEFAULT NULL,
  `bonus_pericia_ficha` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ficha`),
  INDEX `fk_tb_ficha_tb_usuario_idx` (`tb_usuario_usuario_email` ASC) VISIBLE,
  CONSTRAINT `fk_tb_ficha_tb_usuario`
    FOREIGN KEY (`tb_usuario_usuario_email`)
    REFERENCES `db_ficha`.`tb_usuario` (`usuario_email`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
