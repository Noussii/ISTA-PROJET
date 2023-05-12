-- MySQL Script generated by MySQL Workbench
-- Wed May  3 19:03:46 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ista_website_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ista_website_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ista_website_db` DEFAULT CHARACTER SET utf8 ;
USE `ista_website_db` ;

-- -----------------------------------------------------
-- Table `ista_website_db`.`keywords`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`keywords` (
  `keyword` VARCHAR(100) NOT NULL,
  `type` VARCHAR(45) NULL,
  PRIMARY KEY (`keyword`),
  UNIQUE INDEX `keyword_UNIQUE` (`keyword` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`article` (
  `article_id` INT NOT NULL AUTO_INCREMENT,
  `publisher_id` INT NOT NULL,
  `title` VARCHAR(200) NOT NULL,
  `body` VARCHAR(10000) NULL,
  `date_time` DATETIME NOT NULL,
  `keywords` VARCHAR(200) NOT NULL,
  `resources` INT NULL,
  `is_super` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`article_id`),
  UNIQUE INDEX `title_UNIQUE` (`title` ASC) VISIBLE,
  INDEX `fk_article_keywords_idx` (`keywords` ASC) VISIBLE,
  CONSTRAINT `fk_article_keywords`
    FOREIGN KEY (`keywords`)
    REFERENCES `ista_website_db`.`keywords` (`keyword`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`article_resources`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`article_resources` (
  `resource_id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL DEFAULT 'image',
  `path` VARCHAR(500) NOT NULL DEFAULT 0,
  `article_id` INT NULL,
  PRIMARY KEY (`resource_id`),
  UNIQUE INDEX `path_UNIQUE` (`path` ASC) VISIBLE,
  UNIQUE INDEX `resource_id_UNIQUE` (`resource_id` ASC) VISIBLE,
  INDEX `fk_resources_article_idx` (`article_id` ASC) VISIBLE,
  CONSTRAINT `fk_resources_article`
    FOREIGN KEY (`article_id`)
    REFERENCES `ista_website_db`.`article` (`article_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`student` (
  `student_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(300) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `national_student_id` VARCHAR(45) NULL,
  `numberInClass` INT NULL,
  `is_publisher` INT NOT NULL DEFAULT 0,
  `is_responsable` INT NOT NULL DEFAULT 0,
  `photo_path` VARCHAR(500) NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `phone_number` VARCHAR(15) NULL,
  `contact_email` VARCHAR(100) NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE INDEX `user_id_UNIQUE` (`student_id` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `numberInClass_UNIQUE` (`numberInClass` ASC) VISIBLE,
  UNIQUE INDEX `national_student_id_UNIQUE` (`national_student_id` ASC) VISIBLE,
  UNIQUE INDEX `photo_path_UNIQUE` (`photo_path` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`super_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`super_user` (
  `super_user_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(300) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `super_user_privelage` VARCHAR(45) NOT NULL,
  `super_user_legacy` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`super_user_id`),
  UNIQUE INDEX `super_user_id_UNIQUE` (`super_user_id` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `super_user_legacy_UNIQUE` (`super_user_legacy` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`teacher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`teacher` (
  `teacher_id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `photo_path` VARCHAR(500) NULL,
  `phone_number` VARCHAR(15) NULL,
  `contact_email` VARCHAR(100) NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  UNIQUE INDEX `photo_path_UNIQUE` (`photo_path` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `contact_email_UNIQUE` (`contact_email` ASC) VISIBLE,
  UNIQUE INDEX `phone_number_UNIQUE` (`phone_number` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`article_pool`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`article_pool` (
  `article_id` INT NOT NULL,
  `publisher_id` INT NULL,
  `publisher_type` VARCHAR(45) NOT NULL,
  INDEX `fk_article_pool_article_idx` (`article_id` ASC) VISIBLE,
  CONSTRAINT `fk_article_pool_article`
    FOREIGN KEY (`article_id`)
    REFERENCES `ista_website_db`.`article` (`article_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`class` (
  `class_id` INT NOT NULL AUTO_INCREMENT,
  `emploi` JSON NULL,
  `class_year` DATE NOT NULL,
  `name` VARCHAR(45) NULL,
  `is_current` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`class_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`subject`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`subject` (
  `subject_id` INT NOT NULL,
  `subject_name` VARCHAR(100) NOT NULL,
  `class_id` INT NOT NULL,
  `teacher_id` INT NOT NULL,
  INDEX `fk_subject_teacher_idx` (`teacher_id` ASC) VISIBLE,
  PRIMARY KEY (`subject_id`),
  CONSTRAINT `fk_subject_class`
    FOREIGN KEY (`class_id`)
    REFERENCES `ista_website_db`.`class` (`class_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subject_teacher`
    FOREIGN KEY (`teacher_id`)
    REFERENCES `ista_website_db`.`teacher` (`teacher_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`class_student_pool`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`class_student_pool` (
  `class_id` INT NOT NULL,
  `student_id` INT NOT NULL,
  INDEX `fk_class_student_pool_student_idx` (`student_id` ASC) VISIBLE,
  INDEX `fk_class_student_pool_class_idx` (`class_id` ASC) VISIBLE,
  UNIQUE INDEX `student_id_UNIQUE` (`student_id` ASC) VISIBLE,
  CONSTRAINT `fk_class_student_pool_student`
    FOREIGN KEY (`student_id`)
    REFERENCES `ista_website_db`.`student` (`student_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_class_student_pool_class`
    FOREIGN KEY (`class_id`)
    REFERENCES `ista_website_db`.`class` (`class_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`student_resources`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`student_resources` (
  `resource_id` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NULL,
  `title` VARCHAR(45) NOT NULL,
  `path` VARCHAR(45) NOT NULL,
  `student_id` INT NULL,
  `notifications` INT NULL,
  PRIMARY KEY (`resource_id`),
  UNIQUE INDEX `resource_id_UNIQUE` (`resource_id` ASC) VISIBLE,
  INDEX `student_resources_student_idx` (`student_id` ASC) VISIBLE,
  CONSTRAINT `student_resources_student`
    FOREIGN KEY (`student_id`)
    REFERENCES `ista_website_db`.`student` (`student_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`note`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`note` (
  `subject_id` INT NOT NULL,
  `student_id` INT NOT NULL,
  `note_value` INT NULL,
  INDEX `note_subject_idx` (`subject_id` ASC) VISIBLE,
  INDEX `note_student_idx` (`student_id` ASC) VISIBLE,
  CONSTRAINT `note_subject`
    FOREIGN KEY (`subject_id`)
    REFERENCES `ista_website_db`.`subject` (`subject_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `note_student`
    FOREIGN KEY (`student_id`)
    REFERENCES `ista_website_db`.`student` (`student_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`notification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`notification` (
  `notification_id` INT NOT NULL,
  `recepient` INT NOT NULL,
  `message` TEXT NULL,
  `checked` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`notification_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`conversation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`conversation` (
  `conversation_id` INT NOT NULL,
  `first_user_id` INT NULL,
  `second_user_id` INT NULL,
  `first_user_type` VARCHAR(45) NULL,
  `second_user_type` VARCHAR(45) NULL,
  PRIMARY KEY (`conversation_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`message`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`message` (
  `message_id` INT NOT NULL,
  `sender_id` INT NOT NULL,
  `recepient_id` INT NOT NULL,
  `message` TEXT NOT NULL,
  `time` DATETIME NULL,
  `seen` TINYINT NOT NULL DEFAULT 0,
  `conversation_id` INT NOT NULL,
  PRIMARY KEY (`message_id`),
  INDEX `fk_message_conversation_idx` (`conversation_id` ASC) VISIBLE,
  CONSTRAINT `fk_message_conversation`
    FOREIGN KEY (`conversation_id`)
    REFERENCES `ista_website_db`.`conversation` (`conversation_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`session`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`session` (
  `session_id` VARCHAR(100) NOT NULL,
  `user_id` INT NOT NULL,
  `user_type` VARCHAR(45) NOT NULL,
  `created_at` DATETIME NULL,
  `data` JSON NOT NULL,
  PRIMARY KEY (`session_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ista_website_db`.`administration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ista_website_db`.`administration` (
  `administration_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `contact_email` VARCHAR(100) NULL,
  PRIMARY KEY (`administration_id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
