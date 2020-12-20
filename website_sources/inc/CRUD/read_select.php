<?php
// es que l'ID existe est n'est pas vide dans l'url
if(isset($_GET['id_gite']) && !empty($_GET['id_gite'])){
    // Connexion à la base, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('../../inc/db/connect.php');
    
    // On nettoie l'id envoyé
    $id_gite = strip_tags($_GET['id_gite']);

    $sql = 'SELECT * FROM `gite` WHERE `id_gite` = :id_gite;';
    
    // On prepare la requete
    $query = $db->prepare($sql);

    // On "accroche" les parametres (id)
    $query->bindValue(':id_gite', $id_gite, PDO::PARAM_INT);

    // On execute la requete
    $query->execute();

    // On récupère le gite
    $gite = $query->fetch();

    // On verifie si le produit existe
    if(!$gite){
        $_SESSION['erreur'] = "Cet ID n'existe pas";
        header('Location:index.php');
    }

    
}else{
        $_SESSION['erreur'] = "URL invalide";
        header('Location:index.php');
}
?>