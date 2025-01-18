CREATE TABLE `quoi` (
  `quoi_id` INT PRIMARY KEY AUTO_INCREMENT,
  `quoicoubeh` VARCHAR(50) NOT NULL,
  `cramptés` VARCHAR(50) NOT NULL,
  `apagnant` VARCHAR(50) NOT NULL,
  `flop` VARCHAR(50) NOT NULL,
  `quoicouflop` VARCHAR(50) NOT NULL,
  `quoi feur` VARCHAR(50) NOT NULL
);

CREATE TABLE `sexe` (
  `sexe_id` INT PRIMARY KEY AUTO_INCREMENT,
  `zob` VARCHAR(50) NOT NULL,
  `chibre` VARCHAR(50) NOT NULL,
  `beuteu` VARCHAR(50) NOT NULL,
  `les fesses des garçons` VARCHAR(50) NOT NULL
);

CREATE TABLE `il_vit_pour` (
  `il vit pour_id` INT PRIMARY KEY AUTO_INCREMENT,
  `le zob` VARCHAR(50) NOT NULL,
  `les caméras` VARCHAR(50) NOT NULL,
  `les camerounais` VARCHAR(50) NOT NULL,
  `les nibards` VARCHAR(50) NOT NULL,
  `le flop` VARCHAR(50) NOT NULL
);

CREATE TABLE `chiante` (
  `chiante_id` INT PRIMARY KEY AUTO_INCREMENT,
  `ça doit être ça` VARCHAR(50) NOT NULL,
  `mmmmmm` VARCHAR(50) NOT NULL,
  `est-ce que j'ai demandé` VARCHAR(50) NOT NULL,
  `pas demandé` VARCHAR(50) NOT NULL,
  `regarde comment j'ai demandé` VARCHAR(50) NOT NULL,
  `tsais que vraiment` VARCHAR(50) NOT NULL
);

CREATE TABLE `bête` (
  `bête_id` INT PRIMARY KEY AUTO_INCREMENT,
  `weshhhhhh` VARCHAR(50) NOT NULL,
  `uhhhhhhhh` VARCHAR(50) NOT NULL,
  `giga` VARCHAR(50) NOT NULL,
  `supra` VARCHAR(50) NOT NULL
);

CREATE TABLE `PNJ` (
  `pnj_id` INT PRIMARY KEY AUTO_INCREMENT,
  `marche de pnj` VARCHAR(50) NOT NULL,
  `saut de pnj` VARCHAR(50) NOT NULL,
  `bug de pnj` VARCHAR(50) NOT NULL,
  `hochement de tête` VARCHAR(50) NOT NULL,
  `regarde comment j'ai demandé` VARCHAR(50) NOT NULL
);

CREATE TABLE `termes` (
  `terme_id` INT PRIMARY KEY AUTO_INCREMENT,
  `ça dit les termes` VARCHAR(50) NOT NULL
);