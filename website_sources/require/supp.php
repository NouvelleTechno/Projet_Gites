<?php
// On démarre une session
session_start();

// Est-ce que l'id existe et n'est pas vide dans l'URL
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');

    // On nettoie l'id envoyé
    $id = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM `gite` WHERE `id_gite` = :id;';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On "accroche" les paramètre (id)
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    // On récupère le gite
    $gite = $query->fetch();

    // On vérifie si le produit existe
    if(!$gite){
        $_SESSION['erreur'] = "ID du Gîte n'éxiste pas";
        header('Location:../admin/dashboard/index.php');
        die();
    }

    $sql = 'DELETE FROM `gite` WHERE `id_gite` = :id;';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On "accroche" les paramètre (id)
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();
    $_SESSION['message'] = "Votre Produit à été supprimé";
    header('Location:../admin/dashboard/index.php');

}else{
    $_SESSION['erreur'] = "URL invalide";
    header('Location:../admin/dashboard/');
}