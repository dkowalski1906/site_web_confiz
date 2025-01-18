INSERT INTO utilisateurs(utilisateur_id, username, password, role, prenom, nom, ddn)
VALUES (1, 'alice82', md5('1234'), 'admin', 'Alice', 'Dumoulin', '1982-11-26');
INSERT INTO utilisateurs(utilisateur_id, username, password, role, prenom, nom, ddn)
VALUES (2, 'chalie', md5('1234'), 'gerant', 'Charlie', 'Elachocoleterie', '1977-01-12');
INSERT INTO utilisateurs(utilisateur_id, username, password, role, prenom, nom, ddn)
VALUES (3, 'bobdu27', md5('1234'), 'client', 'Robert', 'Kinsey', '1982-10-12');
INSERT INTO utilisateurs(utilisateur_id, username, password, role, prenom, nom, ddn)
VALUES (4, 'tywin', md5('1234'), 'client', 'Charles', 'Dance', '1946-10-10');

INSERT INTO adresses(adresse_id, numero_rue, nom_adresse, code_postal, ville, pays)
VALUES (1, 343, 'rue guilty spark', '16807', 'Anneaux-les-bains', 'France');
INSERT INTO adresses(adresse_id, numero_rue, nom_adresse, code_postal, ville, pays)
VALUES (2, 1618, 'avenue delor', '54000', 'Nancy', 'France');
INSERT INTO adresses(adresse_id, numero_rue, nom_adresse, code_postal, ville, pays)
VALUES (3, 314, 'route du rayon', '22300', 'Lannion', 'France');

INSERT INTO boutiques(boutique_id, nom, adresse_id, utilisateur_id)
VALUES (1, 'La mika-line', 1, 1);
INSERT INTO boutiques(boutique_id, nom, adresse_id, utilisateur_id)
VALUES (2, 'OK Bonbons', 2, 2);

INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (1, 'Bergamote (de Nancy) 250g', 'Bergamote', 3.7);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (2, 'Nougatine casse 220g', 'Nougat', 3.9);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (3, 'Papillote nougat vanille 250g', 'Nougat', 4.5);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (4, 'Ceinture citrique framboise (boite de 200)', 'Acidule', 15.90);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (5, 'Bouteille cola cerise citrique 100g', 'Acidule', 1.8);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (6, 'Dragibus 100g', 'Haribo', 1.8);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (7, 'Fraises Tagada 100g', 'Haribo', 1.5);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (8, 'Crocodiles 100g', 'Haribo', 1.55);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (9, 'Ourson guimauve chocolat lait 100g', 'Chocolat', 1.9);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (10, 'Filet de pièces chocolat 100g', 'Chocolat', 1.95);
INSERT INTO confiseries(confiserie_id, nom, type, prix)
VALUES (11, 'Toblerone 35g', 'Chocolat', 1.20);

INSERT INTO stocks(quantite, date_de_modification, boutique_id, confiserie_id)
VALUES (24, NOW(), 1, 1);
INSERT INTO stocks(quantite, date_de_modification, boutique_id, confiserie_id)
VALUES (54, NOW(), 1, 4);
INSERT INTO stocks(quantite, date_de_modification, boutique_id, confiserie_id)
VALUES (17, NOW(), 2, 6);
INSERT INTO stocks(quantite, date_de_modification, boutique_id, confiserie_id)
VALUES (120, NOW(), 2, 7);
INSERT INTO stocks(quantite, date_de_modification, boutique_id, confiserie_id)
VALUES (8, NOW(), 2, 10);