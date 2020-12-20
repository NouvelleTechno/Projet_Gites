<?php
// Include Pour la Session
require_once('../../inc/connect_admin/session.php');
// Include Pour le Read avec select ID
require_once('../../inc/CRUD/read_select.php');
// Include Pour update
require_once('../../inc/CRUD/update.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Modification d'un Gîte</title>
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
                <h1>Modification d'un Gîte</h1>
            <div class="deco">
                <a  href="../../inc/connect_admin/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <?php
            // Affiche l'erreur si le formulaire n'est pas complet
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreur'].'
                    </div>';
                     $_SESSION['erreur'] = '';
            }
            if(!empty($_SESSION['erreurphoto'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreurphoto'].'
                    </div>';
                    $_SESSION['erreurphoto'] = '';
            }
        ?>
        <!-- Formulaire de modif d'un Gîte -->
        <form class="form_ajout" method="post">
            <div class="form_contain">
                <!-- Nom Dispo -->
                <div class="nom_dispo">
                    <div class="input_nom form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" value="<?=$gite['nom']?>" class="form-control">
                    </div>
                    <?php
                        if ($gite['dispo'] == 0){
                            require_once('../../inc/CRUD/update_dispo/update_indispo.php');
                        
                        }else{
                            require_once('../../inc/CRUD/update_dispo/update_dispo.php');
                        }
                    ?>
                </div>
                <!-- Fin Nom Dispo -->
                <!-- Adresse Prix -->
                <div class="adresse_prix">
                    <div class="input_adresse form-group">
                        <label for='adresse'>Adresse</label>
                        <input type="text" id='adresse' name='adresse' value="<?=$gite['adresse']?>" class="form-control">
                    </div>
                    <div class="input_prix form-group">
                        <label for="prix">Prix</label>
                        <input type="text" id="prix" name="prix" value="<?=$gite['prix']?>" class="form-control">
                    </div>
                </div>
                <!-- Fin Adresse Prix -->
                <!-- NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <div class="nb">
                    <div class="form-group">
                        <label for="nbr_couchage">NB de Couchages</label><br>
                        <input name="nbr_couchage" type="number" min="0" max="15" value="<?=$gite['nbr_couchage']?>">
                    </div>
                    <div class="form-group">
                        <label for="nbr_sdb">NB de Sdb</label><br>
                        <input name="nbr_sdb" type="number" min="0" max="15" value="<?=$gite['nbr_sdb']?>">
                    </div>
                    <div class="form-group">
                        <label for="nbr_piece">NB de Pièce</label><br>
                        <input name="nbr_piece" type="number" min="0" max="15" value="<?=$gite['nbr_piece']?>">
                    </div>
                </div>
                <!-- Fin NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <!-- Equipements -->
                <div class="input_equip form-group">
                    <label for="Equipements">Equipements:</label><br>
                    <div class="equip_space form-check">
                        <?php
                            if ($gite['equipement_1'] == "Wifi"){
                                require_once('../../inc/CRUD/equipement/equipement_1_check.php');
                            }else{
                                require_once('../../inc/CRUD/equipement/equipement_1_ncheck.php');
                            }
                        ?>
                    </div>
                    <div class="equip_space form-check">
                        <?php
                            if ($gite['equipement_2'] == "Lave-Linge"){
                                require_once('../../inc/CRUD/equipement/equipement_2_check.php');
                            }else{
                                require_once('../../inc/CRUD/equipement/equipement_2_ncheck.php');
                            }
                        ?>
                    </div>
                    <div class="equip_space form-check">
                        <?php
                            if ($gite['equipement_3'] == "Jardin"){
                                require_once('../../inc/CRUD/equipement/equipement_3_check.php');
                            }else{
                                require_once('../../inc/CRUD/equipement/equipement_3_ncheck.php');
                            }
                        ?>   
                    </div> 
                    <div class="equip_space form-check">
                        <?php
                            if ($gite['equipement_4'] == "Piscine"){
                                require_once('../../inc/CRUD/equipement/equipement_4_check.php');
                            }else{
                                require_once('../../inc/CRUD/equipement/equipement_4_ncheck.php');
                            }
                        ?>
                    </div> 
                </div>
                <!-- Fin Equipements -->
                <!-- Fin Description -->
                <div class="div_bu_form">
                    <button class="rubberBand bu_form  btn btn-secondary btn-lg">Enregistrer</button>
                </div>
            </div>
        </form>
        <!-- Fin Formulaire -->
    </main>
    <!-- Fin Main -->
    <footer class="fixed-bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>