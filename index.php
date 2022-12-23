<?php

require 'ConnexionDB.php';

$connexion = ConnexionDB::getInsatnce();
$pdo = $connexion->getPdo();



$connexion2 = clone($connexion);
$pdo = $connexion2->getPdo();

var_dump($connexion);

var_dump($connexion2);