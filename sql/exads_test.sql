-- -----------------------------------------------------
-- Schema blog
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS testUnit
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci;
USE testUnit;

-- -----------------------------------------------------
-- Table 'testUnit'.'test'
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS test (
  id        INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name      VARCHAR(255) NULL,
  age       INT          NOT NULL,
  job_title VARCHAR(255) NULL
)
  ENGINE = MyISAM;

INSERT INTO test (id, name, age, job_title) VALUE (1, 'Neemias Santos', 27, 'FullStack Exads');
INSERT INTO test (id, name, age, job_title) VALUE (2, 'Neemias Santos', 27, 'Senior Develop Exads');