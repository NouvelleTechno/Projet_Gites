<?php
// es que l'ID existe est n'est pas vide dans l'url
if(isset($_GET['dispo'])){
    // && isset($_GET['categorie'])
    // Connexion à la base, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('../../inc/db/connect.php');
    
    // On nettoie l'id envoyé
    $dispo = strip_tags($_GET['dispo']);
    // $categorie = strip_tags($_GET['categorie']);

    $sql = 'SELECT * FROM `gite` WHERE `dispo` = :dispo;';
    
    // On prepare la requete
    $query = $db->prepare($sql);

    // On "accroche" les parametres (id)
    $query->bindValue(':dispo', $dispo, PDO::PARAM_STR);
    // $query->bindValue(':categorie', $categorie, PDO::PARAM_STR);

    // On execute la requete
    $query->execute();

    // On récupère le gite
    $result = $query->fetch(PDO::FETCH_ASSOC);


    // On verifie si le produit existe
    // if(!$result){
    //     $_SESSION['erreur'] = "Cet ID n'existe pas";
    //     // header('Location:index.php');
    // }

}else{
        $_SESSION['erreur'] = "URL invalide";
        // header('Location:index.php');
}
?>