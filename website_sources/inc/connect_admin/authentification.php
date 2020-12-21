<?php
session_start();
// On parametre les entrer sur null
$email = null;
$password = null;
// Supprime les balises HTML et PHP d'une chaîne
$email = strip_tags($_POST['mail_admin']);
$password = strip_tags($_POST['pass_admin']);

// Si quelque chose est déclaré
if (isset($_POST['mail_admin']) && isset($_POST['pass_admin'])){

    // On se connect à la base de données, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
    require_once('../db/connect.php');

    // On prepare une demande de récuperer tout dans colonne email de la table users
    $query = $db->prepare('SELECT * FROM admin WHERE mail_admin = :mail_admin ;');

    // lie le param à ma var query
    $query->bindParam(':mail_admin', $email);

    // excute tt les param rentrer
    $query->execute();

    // recup l'entrée de tableau pour l'insérer dans résult
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Si L'email rentrer & le mdp correspond à celui trouver dans la db alors on accede à la connexion
    if($email === $result['mail_admin'] && $password === $result['pass_admin']){
        $_SESSION['mail_admin'] = $email;
        $_SESSION['pass_admin'] = $password;
        header('location:../../admin_dashboard.php');

    // Sinon On retourne à la page login avec un message d'erreur
    }else{

        $_SESSION['error'] = "Email ou Mot de passe Incorrect";
        header('location:admin.php');
    }
    
}