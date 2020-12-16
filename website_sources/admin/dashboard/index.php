<?php
// on demarre la session
session_start();
// Si le mail et le mdp ne sont pas stocker dans la global session alors redirection pas login
if(!isset($_SESSION['mail_admin']) && !isset($_SESSION['pass_admin'])){
    $_SESSION['nolog'] = "Veuillez vous identifiez";
    header('location:../index.php');
}
//On fait la connection à la base, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
require_once('../../require/connect.php');

$sql = 'SELECT * FROM `gite`';
// On prepare la requete
$query = $db->prepare($sql);
// on execute la requete
$query->execute();

// on stock le result dans un tableau assoc
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Ferme la base de donnée, require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
require_once('../../require/close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo Chatel -->
    <link rel="icon" href="../../assets/img/Logo/chatel_logo.png">
    <!-- Titre de la page -->
    <title>Dashboard</title>
    <!-- Link vers les styles -->
    <!-- Style Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Mon Style -->
    <link rel="stylesheet" href="../../assets/css/style_dashboard.css">
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
            <div class="bu_ajout">
                <a class="rubberBand bu btn btn-lg" href="ajout_gite.php" role="button">Ajouter</a>
            </div>
            <div class="deco">
                <a  href="../../require/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- Mon erreur si l'user se trompe d'id dans l'url -->
        <?php
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreur'].'
                    </div>';
                    $_SESSION['erreur'] = "";
            }
        ?>
        <!-- Mon message quand le produit à été Modifié -->
        <?php
            if(!empty($_SESSION['message'])){
                echo '<div class="alert alert-success" role="alert">
                '. $_SESSION ['message'].'
                </div>';
                $_SESSION['message'] = "";
            }
        ?>
        <!-- Mon Inventaire des Gîtes -->
            <!-- PHP -->
            <?php
            // on boucle la var result
            foreach($result as $gite){
            ?>
            <!-- fin PHP -->
                <ul class="card_gr">
                    <li>
                        <div class="card" style="width: 16.5rem;">
                            <img src="<?=$gite['img_pre'] ?>" class="card-img-top" alt="img présentation gîte">
                            <div class="contenu_card card-body">
                                <h4 class="title_gite card-title"><?=$gite['nom']?></h4>
                                <div>
                                    <p class="card-text"><?=$gite['id_gite'] ?></p>
                                    <p class="card-text"><?=$gite['adresse'] ?></p>
                                    <p class="card-text"><?=$gite['categorie'] ?></p>
                                    <p class="card-text"><?=$gite['dispo'] ?></p>
                                </div>
                                <div class="ico">
                                    <a href="details_gite.php?id=<?= $gite['id_gite']?>"><img class="rubberBand" src="../../assets/img/icone/voir.png" alt="Inspecter" width="25px" height="25px"></a>
                                    <a href="modification_gite.php?id=<?= $gite['id_gite']?>"><img class="rubberBand" src="../../assets/img/icone/modif_ico.png" alt="Modif" width="25px" height="25px"></a>
                                    <a href="../../require/supp.php?id=<?= $gite['id_gite']?>"><img class="rubberBand" src="../../assets/img/icone/sup_ico.png" alt="supp" width="25px" height="25px"></a>
                                </div>
                            </div>   
                        </div>
                    </li>
                </ul>

                <?php
                }
                ?>

                    <!-- <td class="id_gite"><?=$gite['id_gite'] ?></td>
                    <td><?=$gite['nom'] ?></td>
                    <td><?=$gite['dispo'] ?></td>
                    <td><?=$gite['adresse'] ?></td>
                    <td><?=$gite['prix'] ?></td>
                    <td><?=$gite['categorie'] ?></td>
                    <td><?=$gite['nbr_couchage'] ?></td>
                    <td><?=$gite['nbr_sdb'] ?></td>
                    <td><?=$gite['nbr_piece'] ?></td>
                    <td><?=$gite['equipement'] ?></td>
                    <td><?=$gite['descrip'] ?></td>
                    <td><?=$gite['img_pre'] ?></td>
                    <td><?=$gite['img_carrou_1'] ?></td>
                    <td><?=$gite['img_carrou_2'] ?></td>
                    <td><?=$gite['img_carrou_3'] ?></td> -->

        <!-- Fin de Mon Inventaire des Gîtes -->
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>