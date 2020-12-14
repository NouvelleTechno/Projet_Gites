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
                <a  href="#"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- Mon tableau -->
        <table class="tableau table table-striped">
            <!-- Mes Titre de Tableau -->
            <thead class="colonne">
                <th></th>
                <th>ID</th>
                <th>Nom</th>
                <th>Disponibilité</th>
                <th>Adresse</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>NB Couchages</th>
                <th>NB Sdb</th>
                <th>NB Pièce</th>
                <th>Equipements</th>
                <th>Description</th>
                <th>Photo présentation</th>
                <th>Photo Carrou</th>
                
            </thead>
            <tbody>
                <!-- Mes insersion de Tableau -->
                <!-- Affiche se que l'admin ajoute -->
                <tr>
                    <!-- //<?=$produit['id']?> -->
                    <td class="ico"><a href="details.php?id=<?= $produit['id']?>"><img class="rubberBand" src="../../assets/img/icone/voir.png" alt="Inspecter" width="25px" height="25px"></a><a href="modif.php?id=<?= $produit['id'] ?>"><img class="rubberBand" src="../../assets/img/icone/modif_ico.png" alt="Modif" width="25px" height="25px"></a><a href="assets/require/supp.php?id=<?= $produit['id'] ?>"><img class="rubberBand" src="../../assets/img/icone/sup_ico.png" alt="Modif" width="25px" height="25px"></a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <!-- Fin de Mon Tableau -->
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>