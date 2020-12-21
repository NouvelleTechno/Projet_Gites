<?php
// Include Pour la Session
require_once('inc/connect_admin/session.php');
// Include Pour Create
require_once('inc/CRUD/create.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Ajout d'un Gîte</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mon Style -->
    <link rel="stylesheet" href="assets/css/style_ajout_modif.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="top navbar-expand-lg nav_me">
            <div class="nav_dash">
                <div class="chatel">
                    <img class="ligne" src="assets/img/Logo/chatel_logo.png" alt="Chatel Logo">
                </div>
            </div>
        </nav>
        <!-- Fin Navbar -->
    </header>
    <!-- Fin Header -->
    <!-- Main -->
    <main>
        <!-- Menu -->
        <div class="menu">
            <div class="bu_retour">
                <a class="rubberBand bu btn btn-lg" href="admin_dashboard.php" role="button">Retour</a>
            </div>
                <h1>Ajout d'un Gîte</h1>
            <div class="deco">
                <a href="inc/connect_admin/deconnection.php"><img class="rubberBand" src="assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- PHP Code Erreur -->
        <?php
            // Affiche l'erreur si le formulaire n'est pas complet
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreur'].'
                    </div>';
                     $_SESSION['erreur'] = '';
            }
            // Erreur d'importation Photo
            if(!empty($_SESSION['erreurphoto'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreurphoto'].'
                    </div>';
                    $_SESSION['erreurphoto'] = '';
            }
        ?>
        <!-- Fin PHP Code Erreur -->
        <!-- Formulaire d'ajout d'un Gîte -->
        <?php
        if($_GET['id']=="chambre"){
            require_once('inc/CRUD/form_ajout/form_ajout_chambre.php');
        }elseif($_GET['id']=="appartement"){
            require_once('inc/CRUD/form_ajout/form_ajout_appartement.php');
        }elseif($_GET['id']=="maison"){
            require_once('inc/CRUD/form_ajout/form_ajout_maison.php');
        }else{
            $_SESSION['erreur'] = "Ce type de Logement n'éxiste pas";
            header('Location:admin_dashboard.php');
        }
        ?>
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>