<?php
// Include Pour la Session
require_once('../../inc/connect_admin/session.php');
// Include Pour Create
require_once('../../inc/CRUD/create.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Ajout d'un Gîte</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mon Style -->
    <link rel="stylesheet" href="../../assets/css/style_ajout_modif.css">
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
                <h1>Ajout d'un Gîte</h1>
            <div class="deco">
                <a href="../../inc/connect_admin/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
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
        <form class="form_ajout" method="POST" action="" enctype="multipart/form-data" >
            <div class=" form_contain">
                <!-- Nom Dispo -->
                <div class="nom_dispo">
                    <div class="input_nom form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control">
                    </div>
                    <div class="input_dispo form-group">
                        <label for="dispo">Disponibilité</label><br>
                        <select name="dispo" class="select_dispo form-select form-select-lg" aria-label="dispo">
                            <option value="1" selected>Disponible</option>
                            <option value="0">Indisponible</option>
                        </select>
                    </div>
                </div>
                <!-- Fin Nom Dispo -->
                <!-- Adresse Prix -->
                <div class="adresse_prix">
                    <div class="input_adresse form-group">
                        <label for='adresse'>Adresse</label>
                        <input type="text" id='adresse' name='adresse' class="form-control">
                    </div>
                    <div class="input_prix form-group">
                        <label for="prix">Prix</label>
                        <input type="text" id="prix" name="prix" class="form-control">
                    </div>
                </div>
                <!-- Fin Adresse Prix -->
                <!-- Début du choix de catégorie en input type radio Catégorie -->
                <div class="input_cate form-group">
                    <label for="categorie">Catégorie:</label><br>
                    <div class="cate_gr">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="categorie" id="inlineRadio1" value="Chambre" checked>
                            <label class="form-check-label" for="inlineRadio1">Chambre</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="categorie" id="inlineRadio2" value="Appartement">
                            <label class="form-check-label" for="inlineRadio2">Appartement</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="categorie" id="inlineRadio3" value="Maison">
                            <label class="form-check-label" for="inlineRadio3">Maison</label>
                        </div>
                    </div>
                </div>
                <!-- Fin du choix de catégorie en input type radio Catégorie -->
                <!-- NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <div class="nb">
                    <div class="form-group">
                        <label for="nbr_couchage">NB de Couchages</label><br>
                        <input name="nbr_couchage" type="number" min="0" max="15">
                    </div>
                    <div class="form-group">
                        <label for="nbr_sdb">NB de Sdb</label><br>
                        <input name="nbr_sdb" type="number" min="0" max="15">
                    </div>
                    <div class="form-group">
                        <label for="nbr_piece">NB de Pièce</label><br>
                        <input name="nbr_piece" type="number" min="0" max="15">
                    </div>
                </div>
                <!-- Fin NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <!-- Equipements -->
                <div class="input_equip form-group">
                    <label for="equipement">Equipements:</label><br>
                    <div class="equip_space form-check">
                        <input name="equipement_1" class="form-check-input" type="checkbox" value="Wifi" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Wifi</label>
                    </div>
                    <div class="equip_space form-check">
                        <input name="equipement_2" class="form-check-input" type="checkbox" value="Lave-Linge" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Lave-Linge</label>
                    </div>
                    <div class="equip_space form-check">
                        <input name="equipement_3" class="form-check-input" type="checkbox" value="Jardin" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Jardin</label>
                    </div> 
                    <div class="equip_space form-check">
                        <input name="equipement_4" class="form-check-input" type="checkbox" value="Piscine" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Piscine</label>
                    </div>
                </div>
                <!-- Fin Equipements -->
                <!-- Photo de présentation card -->
                <div class="form-group">
                    <label for="img_pre">Photo de présentation:</label>
                    <input type="file" id="img_pre" name="img_pre" class="input_pre">
                </div>
                <!-- Fin Photo de présentation card -->
                <!-- Photo pour slider page détail -->
                <div class="form-group">
                    <label for="img_carrou">Photo Carroussel:</label><br>
                    <input type="file" id="img_carrou_1" name="img_carrou_1" class="input_sli">
                    <input type="file" id="img_carrou_2" name="img_carrou_2" class="input_sli">
                    <input type="file" id="img_carrou_3" name="img_carrou_3" class="input_sli">
                </div>
                <!-- Fin Photo pour slider page détail -->
                <!-- Description -->
                <div class="form-group">
                    <label for="descrip">Description</label>
                    <textarea type="text" id="descrip" name="descrip" class="form-control" row="6"></textarea>
                </div>
                <!-- Fin Description -->
                <div class="div_bu_form">
                    <button type="submit" class="rubberBand bu_form  btn btn-secondary btn-lg">Enregistrer</button>
                </div>
            </div>
        </form>
        <!-- Fin Formulaire -->
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>