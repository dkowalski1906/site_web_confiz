<?php

require_once("db.php");

const DB_DRIVER = 'mysql'; // pgsql pour les machines IUT, mysql si machine perso avec wamp, xamp, mamp
const DB_HOST = 'localhost'; // servbdd.iutlan.etu.univ-rennes1.fr pour les machines IUT, localhost si machine perso
const DB_PORT = 3306; // 5433 pour les machines IUT, 3306 pour machine perso, 8889 pour mac
const DB_USERNAME = 'root'; // votre login linux pour les machines IUT, root pour wamp, xamp, mamp
const DB_PASSWORD = ''; // votre mdp linux pour les machines IUT, rien pour wamp, xamp et root pour mamp
const DB_DATABASE = 'confiz'; // pg_VOTRELOGIN pour les machines IUT, le nom de votre base sinon
?>

