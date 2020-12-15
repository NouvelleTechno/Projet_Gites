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
                <a  href="../../require/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- Carroussel -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../../assets/img/img_slider_page_detail/lit_king_size_montagne.png" class="d-block w-100" alt="lit_king_size_montagne">
                </div>
                <div class="carousel-item">
                <img src="../../assets/img/img_slider_page_detail/salon_montagne_champagne.jpg" class="d-block w-100" alt="salon_montagne_champagne">
                </div>
                <div class="carousel-item">
                <img src="../../assets/img/img_slider_page_detail/salon_montagne_chemine.jpg" class="d-block w-100" alt="salon_montagne_chemine">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </a>
        </div>
        <!-- Fin Carroussel -->
        <!-- Détails du Gite -->
        <!-- Titre Du gite et adresse du gite -->
        <div class="titre">
            <h1>Nom Du Gite</h1>
            <h2 class="ligne_detail"><img  src="../../assets/img/icone/localisation_ico.png" alt="icone local" width="50px">4 square couperin champagne sur seine 77430</h2>
        </div>
        <!-- Fin Titre et adresse du gite -->
        <!-- Description Tarif -->
        <div class="detail">
            <div class="desc_tarif">
                <div class="desc">
                    <h3 class="titre_desc">Description</h3><br>
                    <p class="txt_desc">
                        Le gîte est une maison indépendante d’une superficie de 60 m2 sur 2 niveaux. 
                        Elle est située sur notre propriété, à une cinquantaine de mètres de notre maison.
                        Elle est équipée pour accueillir 4 personnes, plus un bébé (équipement gratuit sur demande).
                    </p>
                </div>
                <div class="tarif">
                    <h3 class="tar">69€/Nuit</h3>
                    <p>Couchages: 2</p>
                    <p>Salles de Bain: 2</p>
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
                    <p>Jardin</p>
                    <p>Piscine</p>
                    <p>Wifi</p>
                    <p>Lave-Linge</p>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>