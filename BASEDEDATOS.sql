-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_2024_proyecto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_2024_proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_2024_proyecto` DEFAULT CHARACTER SET utf8 ;
USE `db_2024_proyecto` ;

-- -----------------------------------------------------
-- Table `db_2024_proyecto`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_2024_proyecto`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `usrname` VARCHAR(45) NOT NULL,
  `correo_usuario` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_2024_proyecto`.`sesión`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_2024_proyecto`.`sesión` (
  `idsesión` INT NOT NULL AUTO_INCREMENT,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idsesión`, `usuario_idusuario`),
  INDEX `fk_sesión_usuario_idx` (`usuario_idusuario` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_2024_proyecto`.`recojo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_2024_proyecto`.`recojo` (
  `idrecojo` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `cantidad` DOUBLE NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idrecojo`, `usuario_idusuario`),
  INDEX `fk_recojo_usuario1_idx` (`usuario_idusuario` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_2024_proyecto`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_2024_proyecto`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `img_producto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_2024_proyecto`.`intercambio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_2024_proyecto`.`intercambio` (
  `usuario_idusuario` INT NOT NULL,
  `feha` DATE NOT NULL,
  `cantidad` INT NOT NULL,
  `producto_idproducto` INT NOT NULL,
  PRIMARY KEY (`usuario_idusuario`, `producto_idproducto`),
  INDEX `fk_usuario_has_producto_producto1_idx` (`producto_idproducto` ASC) ,
  INDEX `fk_usuario_has_producto_usuario1_idx` (`usuario_idusuario` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_2024_proyecto`.`info_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_2024_proyecto`.`info_usuario` (
  `usuario_idusuario` INT NOT NULL AUTO_INCREMENT,
  `ci` INT NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `ap_p` VARCHAR(45) NULL,
  `ap_m` VARCHAR(45) NULL,
  `telefono` INT NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `Hukkoins` INT NULL,
  `fecha_n` DATE NULL,
  `rol` INT NULL,
  `estado` TINYTEXT NULL,
  PRIMARY KEY (`usuario_idusuario`, `ci`),
  INDEX `fk_info_usuario_usuario1_idx` (`usuario_idusuario` ASC) )
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
