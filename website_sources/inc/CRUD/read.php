<?php
//On fait la connection à la base, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
require_once('../../inc/db/connect.php');

$sql = 'SELECT * FROM `gite`';
// On prepare la requete
$query = $db->prepare($sql);
// on execute la requete
$query->execute();

// on stock le result dans un tableau assoc
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Ferme la base de donnée, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
require_once('../../inc/db/close.php');
?>