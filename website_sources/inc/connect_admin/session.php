<?php
session_start();
// Si le mail et le mdp ne sont pas stocker dans la global session alors redirection pas login
if(!isset($_SESSION['mail_admin']) && !isset($_SESSION['pass_admin'])){
    $_SESSION['nolog'] = "Veuillez vous identifiez";
    header('location:../index.php');
}
?>