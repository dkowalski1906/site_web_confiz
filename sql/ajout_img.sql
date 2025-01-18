/*maj boutiques*/

DROP TABLE boutiques;

CREATE TABLE `boutiques` (
  `boutique_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nom` VARCHAR(50) UNIQUE NOT NULL,
  `img` VARCHAR(50) NOT NULL,
  `alt` VARCHAR(50) NOT NULL,
  `adresse_id` INTEGER NOT NULL,
  `utilisateur_id` INT NOT NULL
);

ALTER TABLE `stocks` ADD FOREIGN KEY (`boutique_id`) REFERENCES `boutiques` (`boutique_id`);


INSERT INTO boutiques(boutique_id, nom, img, alt, adresse_id, utilisateur_id)
VALUES (1, 'La mika-line','mikaline.png', 'Boutique Mikaline',  1, 1);
INSERT INTO boutiques(boutique_id, nom, img, alt, adresse_id, utilisateur_id)
VALUES (2, 'OK Bonbons', 'okbonbons.png', 'Boutique Ok Bonbons', 2, 2);

/*maj confiseries*/

DROP TABLE confiseries;

CREATE TABLE `confiseries` (
  `confiserie_id` INT PRIMARY KEY AUTO_INCREMENT,
  `nom` VARCHAR(50) NOT NULL,
  `type` VARCHAR(20) NOT NULL,
  `prix` FLOAT NOT NULL,
  `img` VARCHAR(50) NOT NULL,
  `alt` VARCHAR(50) NOT NULL
);

ALTER TABLE `stocks` ADD FOREIGN KEY (`confiserie_id`) REFERENCES `confiseries` (`confiserie_id`);

INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (1, 'Bergamote (de Nancy) 250g', 'Bergamote', 3.7, 'bergamote.png', 'Confiserie Bergamote (de Nancy) 250g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (2, 'Nougatine casse 220g', 'Nougat', 3.9, 'nougatine.png', 'Confiserie Nougatine casse 220g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (3, 'Papillote nougat vanille 250g', 'Nougat', 4.5, 'nougat_vanille.png', 'Confiserie Papillote nougat vanille 250g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (4, 'Ceinture citrique framboise (boite de 200)', 'Acidule', 15.90, 'ceinture_citrique.png', 'Confiserie Ceinture citrique framboise (boite de 200)');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (5, 'Bouteille cola cerise citrique 100g', 'Acidule', 1.8, 'bouteille_coca.png', 'Confiserie Bouteille cola cerise citrique 100g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (6, 'Dragibus 100g', 'Haribo', 1.8, 'dragibus.png', 'Confiserie Dragibus 100g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (7, 'Fraises Tagada 100g', 'Haribo', 1.5, 'fraise_tagada.png', 'Confiserie Fraises Tagada 100g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (8, 'Crocodiles 100g', 'Haribo', 1.55, 'crocodiles.png', 'Confiserie Crocodiles 100g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (9, 'Ourson guimauve chocolat lait 100g', 'Chocolat', 1.9, 'guimauve_choco.png', 'Confiserie Ourson guimauve chocolat lait 100g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (10, 'Filet de pièces chocolat 100g', 'Chocolat', 1.95, 'pieces.png', 'Confiserie Filet de pièces chocolat 100g');
INSERT INTO confiseries(confiserie_id, nom, type, prix, img, alt)
VALUES (11, 'Toblerone 35g', 'Chocolat', 1.20, 'toblerone.png', 'Confiserie Toblerone 35g');