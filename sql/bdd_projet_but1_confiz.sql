CREATE TABLE `boutiques` (
  `boutique_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nom` VARCHAR(50) UNIQUE NOT NULL,
  `adresse_id` INTEGER NOT NULL,
  `utilisateur_id` INT NOT NULL
);

CREATE TABLE `utilisateurs` (
  `utilisateur_id` INT PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(50) UNIQUE NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) UNIQUE,
  `num_tel` VARCHAR(20) UNIQUE,
  `role` VARCHAR(10) NOT NULL,
  `nom` VARCHAR(20) NOT NULL,
  `prenom` VARCHAR(20) NOT NULL,
  `ddn` DATE NOT NULL
);

CREATE TABLE `adresses` (
  `adresse_id` INT PRIMARY KEY AUTO_INCREMENT,
  `numero_rue` VARCHAR(10) NOT NULL,
  `nom_adresse` VARCHAR(100) NOT NULL,
  `code_postal` VARCHAR(10) NOT NULL,
  `ville` VARCHAR(20) NOT NULL,
  `pays` VARCHAR(20) NOT NULL
);

CREATE TABLE `stocks` (
  `stock_id` INT PRIMARY KEY AUTO_INCREMENT,
  `quantite` INT NOT NULL,
  `date_de_modification` DATE,
  `confiserie_id` INT NOT NULL,
  `boutique_id` INT NOT NULL
);

CREATE TABLE `confiseries` (
  `confiserie_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `type` VARCHAR(20) NOT NULL,
  `prix` FLOAT NOT NULL
);

ALTER TABLE `stocks` ADD FOREIGN KEY (`boutique_id`) REFERENCES `boutiques` (`boutique_id`);

ALTER TABLE `stocks` ADD FOREIGN KEY (`confiserie_id`) REFERENCES `confiseries` (`confiserie_id`);

ALTER TABLE `boutiques` ADD FOREIGN KEY (`adresse_id`) REFERENCES `adresses` (`adresse_id`);

ALTER TABLE `boutiques` ADD FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`utilisateur_id`);
