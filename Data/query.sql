- -----------------------------------------------------
-- Schema poemario
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `poemario` DEFAULT CHARACTER SET utf8mb4 ;
USE `poemario` ;

-- -----------------------------------------------------
-- Table `poemario`.`poema`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poemario`.`poema` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `autor` VARCHAR(256) NULL DEFAULT NULL,
  `titulo` VARCHAR(256) NULL DEFAULT NULL,
  `contenido` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `poemario`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poemario`.`rol` (
  `idRol` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idRol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `poemario`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poemario`.`usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `idRol` INT(11) NOT NULL,
  `nombre` VARCHAR(256) NOT NULL,
  `apellido` VARCHAR(256) NOT NULL,
  `contrasena` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  FOREIGN KEY (`idRol`) REFERENCES `poemario`.`rol` (`idRol`)
  )
ENGINE = InnoDB;



-- Datos de pruebas
INSERT INTO poema(autor, titulo, contenido) VALUES ("Autor del poema", "EL titulo...", "El mejor poema del mundo...");
INSERT INTO rol(nombre) VALUES("ADMIN");
INSERT INTO rol(nombre) VALUES("USER");
INSERT INTO usuario(idRol, nombre, apellido, contrasena) VALUES(1, "nombre de usuario", "apelldo del usuario", "admin123");
