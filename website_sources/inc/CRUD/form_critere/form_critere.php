<?php
//On fait la connection à la base, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
if(isset($_GET['dispo']) && isset($_GET['categorie'])
&& ($_GET['dispo']!=="all" && $_GET['categorie']!=="all")){
    
    require_once('inc/db/connect.php');

    $dispo = strip_tags($_GET['dispo']);
    $categorie = strip_tags($_GET['categorie']);

    $sql = 'SELECT * FROM `gite` WHERE `categorie`=:categorie && `dispo`=:dispo;';
    // On prepare la requete 
    $query = $db->prepare($sql);

    $query->bindValue(':dispo', $dispo, PDO::PARAM_STR);
    $query->bindValue(':categorie', $categorie, PDO::PARAM_STR);

    // on execute la requete
    $query->execute();

    // on stock le result dans un tableau assoc
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // Ferme la base de donnée, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('inc/db/close.php');

}elseif(!isset($_GET['dispo']) && !isset($_GET['categorie'])
||($_GET['dispo']=="all") && ($_GET['categorie']=="all")){

    //On fait la connection à la base, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('inc/db/connect.php');

    $sql = 'SELECT * FROM `gite`';
    // On prepare la requete
    $query = $db->prepare($sql);
    // on execute la requete
    $query->execute();

    // on stock le result dans un tableau assoc
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // Ferme la base de donnée, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('inc/db/close.php');

}elseif(isset($_GET['dispo']) && ($_GET['categorie']=="all")){

    require_once('inc/db/connect.php');

    $dispo = strip_tags($_GET['dispo']);

    $sql = 'SELECT * FROM `gite` WHERE `dispo`=:dispo;';
    // On prepare la requete 
    $query = $db->prepare($sql);

    $query->bindValue(':dispo', $dispo, PDO::PARAM_STR);

    // on execute la requete
    $query->execute();

    // on stock le result dans un tableau assoc
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // Ferme la base de donnée, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('inc/db/close.php');

}elseif(isset($_GET['categorie']) && ($_GET['dispo']=="all")){

    require_once('inc/db/connect.php');

    $categorie = strip_tags($_GET['categorie']);

    $sql = 'SELECT * FROM `gite` WHERE `categorie`=:categorie;';
    // On prepare la requete 
    $query = $db->prepare($sql);

    $query->bindValue(':categorie', $categorie, PDO::PARAM_STR);

    // on execute la requete
    $query->execute();

    // on stock le result dans un tableau assoc
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // Ferme la base de donnée, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('inc/db/close.php');
}
?>