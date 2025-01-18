DROP TABLE IF EXISTS cb;
DROP TABLE IF EXISTS utilisateurs;
DROP TABLE IF EXISTS livraisons;
DROP TABLE IF EXISTS confiseries;
DROP TABLE IF EXISTS stocks;
DROP TABLE IF EXISTS boutiques;

CREATE TABLE cb(
    cb_id INTEGER NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    date_exp DATE NOT NULL,
    numero VARCHAR(255),
    utilisateur_id INTEGER NOT NULL,
    /*UNIQUE (numero),   testé sur phpmyadmin mais ne fonctionne pas*/
    PRIMARY KEY (cb_id)
);

CREATE TABLE utilisateurs(
    utilisateur_id INTEGER NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    ddn DATE NOT NULL,
    tel VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    code_postal VARCHAR(255) NOT NULL,
    grade VARCHAR(255) NOT NULL,
    pref VARCHAR(255) NOT NULL,
    /*UNIQUE (mail),*/
    PRIMARY KEY (utilisateur_id)
);

CREATE TABLE livraisons(
    livraison_id INTEGER NOT NULL AUTO_INCREMENT,
    utilisateur_id INTEGER NOT NULL,
    stock_id INTEGER NOT NULL,
    PRIMARY KEY (livraison_id)
);

CREATE TABLE stocks(
    stock_id INTEGER NOT NULL AUTO_INCREMENT,
    confiserie_id INTEGER NOT NULL,
    boutique_id INTEGER NOT NULL,
    quantite INTEGER NOT NULL,
    PRIMARY KEY (stock_id)
);

CREATE TABLE confiseries(
    confiserie_id INTEGER NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    categorie VARCHAR(255) NOT NULL,
    prix_uni VARCHAR(255) NOT NULL,
    prix_poids VARCHAR(255) NOT NULL,
    favoris VARCHAR(255) NOT NULL,
    /*UNIQUE(nom),*/
    PRIMARY KEY (confiserie_id)
);

CREATE TABLE boutiques(
    boutique_id INTEGER NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    ville VARCHAR(255) NOT NULL,
    code_postal VARCHAR(255) NOT NULL,
    /*UNIQUE (code_postal)*/
    PRIMARY KEY (boutique_id)
);


ALTER TABLE cb ADD CONSTRAINT fk_utilisateur
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(utilisateur_id)
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE livraisons ADD CONSTRAINT fk_utilisateur
FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(utilisateur_id)
ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE livraisons ADD CONSTRAINT fk_stock
FOREIGN KEY (stock_id) REFERENCES stocks(stock_id)
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE stocks ADD CONSTRAINT fk_confiserie
FOREIGN KEY (confiserie_id) REFERENCES confiseries(confiserie_id)
ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE stocks ADD CONSTRAINT fk_boutique
FOREIGN KEY (boutique_id) REFERENCES boutiques(boutique_id)
ON UPDATE CASCADE ON DELETE CASCADE;
