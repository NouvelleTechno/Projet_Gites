<?php
// Include Pour la Session
require_once('../../inc/session.php');
// Include Pour le Read avec select ID
require_once('../../inc/read_select.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Détails du Gîte</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- Mon Style -->
    <link rel="stylesheet" href="../../assets/css/style_details.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="top navbar-expand-lg nav_me">
            <div class="nav_dash">
                <div class="chatel">
                    <img class="ligne" src="../../assets/img/Logo/chatel_logo.png" alt="Chatel Logo">
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
                <a class="rubberBand bu btn btn-lg" href="index.php" role="button">Retour</a>
            </div>
            <div class="deco">
                <a  href="../../inc/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- Carroussel -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?=$gite['img_carrou_1']?>" class="d-block w-100" alt="carrou_1">
                </div>
                <div class="carousel-item">
                    <img src="<?=$gite['img_carrou_2']?>" class="d-block w-100" alt="carrou_2">
                </div>
                <div class="carousel-item">
                    <img src="<?=$gite['img_carrou_3']?>" class="d-block w-100" alt="carrou_3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </a>
        </div>
        <!-- Fin Carroussel -->
        <!-- Détails du Gite -->
        <!-- Titre Du gite et adresse du gite -->
        <div class="titre">
            <h1><?=$gite['nom'] ?></h1>
            <h2 class="ligne_detail"><img  src="../../assets/img/icone/localisation_ico.png" alt="icone local" width="50px"><?=$gite['adresse'] ?></h2>
        </div>
        <!-- Fin Titre et adresse du gite -->
        <!-- Description Tarif -->
        <div class="detail">
            <div class="desc_tarif">
                <div class="desc">
                    <h3 class="titre_desc">Description</h3><br>
                    <p class="txt_desc">
                        <?=$gite['descrip'] ?>
                    </p>
                </div>
                <div class="tarif">
                    <h3 class="tar"><?=$gite['prix'] ?>€/Nuit</h3>
                    <p>Couchages: <?=$gite['nbr_couchage'] ?></p>
                    <p>Salles de Bain: <?=$gite['nbr_sdb'] ?></p>
                    <p>Nombre de Pièce: <?=$gite['nbr_piece'] ?></p>
                </div>
            </div>
        <!-- Fin Description Tarif -->
        <!-- Reservation Equipement -->
            <div class="reserv_equip">
                <div class="reserv">
                    <h3 class="titre_reserv">Réservation</h3><br>
                    <p class="txt_reserv">
                        Indisponible
                    </p>
                </div>
                <div class="equipe">
                    <h3 class="titre_equip">Equipements</h3>
                    <p><?=$gite['equipement_1'] ?></p>
                    <p><?=$gite['equipement_2'] ?></p>
                    <p><?=$gite['equipement_3'] ?></p>
                    <p><?=$gite['equipement_4'] ?></p>
                </div>
            </div>
        <!-- Fin Reservation Equipement -->
        </div>
        <!-- Fin Des Détails du Gite -->
    </main>
    <!-- Fin main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>