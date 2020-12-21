<?php
<<<<<<< HEAD
// on demarre la session
session_start();
// Si le mail et le mdp ne sont pas stocker dans la global session alors redirection pas login
if(!isset($_SESSION['mail_admin']) && !isset($_SESSION['pass_admin'])){
    $_SESSION['nolog'] = "Veuillez vous identifiez";
    header('location:../index.php');
}
//Si la var $_POST, $_FILES sont déclaré
if($_POST && $_FILES){
    //Vérifie Si les champs ne sont pas vide
    if(isset($_POST['nom'])
    && isset($_POST['dispo'])
    && isset($_POST['adresse'])
    && isset($_POST['prix'])
    && isset($_POST['categorie'])
    && isset($_POST['nbr_couchage'])
    && isset($_POST['nbr_sdb'])
    && isset($_POST['nbr_piece'])
    && isset($_POST['descrip'])
    && isset($_FILES['img_pre'])
    && isset($_FILES['img_carrou_1'])
    && isset($_FILES['img_carrou_2'])
    && isset($_FILES['img_carrou_3'])){
            
        // On se connect à la base de donnée,  require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
        require_once('../../require/connect.php');
            
        // On nettoie les données envoyées
        // Supprime les balises HTML et PHP d'une chaîne
        $nom = strip_tags($_POST['nom']);
        $dispo = strip_tags($_POST['dispo']);
        $adresse = strip_tags($_POST['adresse']);
        $prix = strip_tags($_POST['prix']);
        $categorie = strip_tags($_POST['categorie']);
        $nbr_couchage = strip_tags($_POST['nbr_couchage']);
        $nbr_sdb = strip_tags($_POST['nbr_sdb']);
        $nbr_piece = strip_tags($_POST['nbr_piece']);
        $equipement = strip_tags($_POST['equipement']);
        $descrip = strip_tags($_POST['descrip']);
        $img_pre = strip_tags($_POST['img_pre']);
        $img_carrou_1 = strip_tags($_POST['img_carrou_1']);
        $img_carrou_2 = strip_tags($_POST['img_carrou_2']);
        $img_carrou_3 = strip_tags($_POST['img_carrou_3']);
        
        //met dans la var le chemin ou je veux que le ticket soit save 
        $uploadchemin = '../../assets/img_gite_cree/';
        // On insert dans la var $uploadfile le chemin plus nom du fichier envoyer dans la $_FILES
        // photo présentation
        $uploadfichier1 = $uploadchemin . basename($_FILES['img_pre']['name']);
        // Photo Carroussel
        $uploadfichier2 = $uploadchemin . basename($_FILES['img_carrou_1']['name']);
        $uploadfichier3 = $uploadchemin . basename($_FILES['img_carrou_2']['name']);
        $uploadfichier4 = $uploadchemin . basename($_FILES['img_carrou_3']['name']);
        // Si le fichier télécharger n'est pas déplacé à l'endroit indiqué alors il sera déplacé
        if (!move_uploaded_file ($_FILES['img_pre']['tmp_name'], $uploadfichier1
                            && $_FILES['img_carrou_1']['tmp_name'], $uploadfichier2
                            && $_FILES['img_carrou_2']['tmp_name'], $uploadfichier3
                            && $_FILES['img_carrou_3']['tmp_name'], $uploadfichier4)){
           $_SESSION['erreurticket'] = "Il y'a eu un problème avec l'importation des photos";
        }
        // Insert dans la Table produit, les champs remplie correspondant à la ligne correspondant
        $sql = 'INSERT INTO `gite` (`nom`, `dispo`, `adresse`, `prix`, `categorie`, `nbr_couchage`, `nbr_sdb`, `nbr_piece`, `equipement`, `descrip`, `img_pre`, `img_carrou_1`, `img_carrou_2`, `img_carrou_3`) 
                VALUES (:nom, :dispo, :adresse, :prix, :categorie, :nbr_couchage, :nbr_sdb, :nbr_piece, :equipement, :descrip, :img_pre, :img_carrou_1, :img_carrou_2, :img_carrou_3)';
        // On prepare la requête
        $query = $db->prepare($sql);
        // On param notre  requete query avec le param adéquat à chaque champ(associe une valeur à un param)(param varchar text)
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':dispo', $dispo, PDO::PARAM_BOOL);
        $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $query->bindValue(':nbr_couchage', $nbr_couchage, PDO::PARAM_INT);
        $query->bindValue(':nbr_sdb', $nbr_sdb, PDO::PARAM_INT);
        $query->bindValue(':nbr_piece', $nbr_piece, PDO::PARAM_INT);
        $query->bindValue(':equipement', $equipement, PDO::PARAM_STR);
        $query->bindValue(':descrip', $descrip, PDO::PARAM_STR); 
        $query->bindValue(':img_pre', $uploadfichier1, PDO::PARAM_STR); 
        $query->bindValue(':img_carrou_1', $uploadfichier2, PDO::PARAM_STR); 
        $query->bindValue(':img_carrou_2', $uploadfichier3, PDO::PARAM_STR); 
        $query->bindValue(':img_carrou_3', $uploadfichier4, PDO::PARAM_STR); 
        // excute tt les param rentrer 
        $query->execute();
        // On parametre le message si tout à fonctionner
        $_SESSION['message'] = "Success Votre Gîte à été Ajouter avec succès";
        // On ferme la base de donnée,  require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
        require_once('../../require/close.php');
        // On fait la redirection vers la dashboard ou sera affiché le message 
        header('Location:index.php');

    }else{
        // On parametre le message d'erreur si les champs ne sont pas complet
        $_SESSION['erreur'] = "Il vous reste des champs à Remplir";
       
    }
}
=======
// Include Pour la Session
require_once('../../inc/connect_admin/session.php');
// Include Pour Create
require_once('../../inc/CRUD/create.php');
>>>>>>> master
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
<<<<<<< HEAD
            <h1>Ajout d'un Gîte</h1>
            <div class="deco">
                <a  href="../../require/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
=======
                <h1>Ajout d'un Gîte</h1>
            <div class="deco">
                <a href="../../inc/connect_admin/deconnection.php"><img class="rubberBand" src="../../assets/img/icone/deco_ico.png" alt="Deconnexion" width="50px"></a>
            </div>
        </div>
        <!-- Fin Menu -->
        <!-- PHP Code Erreur -->
>>>>>>> master
        <?php
            // Affiche l'erreur si le formulaire n'est pas complet
            if(!empty($_SESSION['erreur'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreur'].'
                    </div>';
                     $_SESSION['erreur'] = '';
            }
<<<<<<< HEAD
            if(!empty($_SESSION['erreurticket'])){
                echo '<div class="alert alert-danger" role="alert">
                    '. $_SESSION ['erreurticket'].'
                    </div>';
                    $_SESSION['erreurticket'] = '';
            }
        ?>
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
                                <option value="disponible" selected>Disponible</option>
                                <option value="indisponible">Indisponible</option>
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
                                <select name="nbr_couchage" class="select_dispo form-select form-select-lg" aria-label="nbr_couchage">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="nbr_sdb">NB de Sdb</label><br>
                                <select name="nbr_sdb" class="select_dispo form-select form-select-lg" aria-label="nbr_sdb">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="nbr_piece">NB de Pièce</label><br>
                                <select name="nbr_piece" class="select_dispo form-select form-select-lg" aria-label="nbr_piece">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <!-- Fin NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                    <!-- Equipements -->
                    <div class="input_equip form-group">
                        <label for="equipement">Equipements:</label><br>
                        <div class="equip_space form-check">
                            <input name="equipement" class="form-check-input" type="checkbox" value="Wifi" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Wifi</label>
                        </div>
                        <div class="equip_space form-check">
                            <input name="equipement" class="form-check-input" type="checkbox" value="Lave-Linge" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Lave-Linge</label>
                        </div>
                        <div class="equip_space form-check">
                            <input name="equipement" class="form-check-input" type="checkbox" value="Jardin" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">Jardin</label>
                        </div> 
                        <div class="equip_space form-check">
                            <input name="equipement" class="form-check-input" type="checkbox" value="Piscine" id="flexCheckChecked">
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
=======
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
            require_once('../../inc/CRUD/form_ajout/form_ajout_chambre.php');
        }elseif($_GET['id']=="appartement"){
            require_once('../../inc/CRUD/form_ajout/form_ajout_appartement.php');
        }elseif($_GET['id']=="maison"){
            require_once('../../inc/CRUD/form_ajout/form_ajout_maison.php');
        }else{
            $_SESSION['erreur'] = "Ce type de Logement n'éxiste pas";
            header('Location:index.php');
        }
        ?>
>>>>>>> master
    </main>
    <!-- Fin Main -->
    <footer class="bottom">
        <img class="logo " src="../../assets/img/Logo/logo.png" alt="Logo YS" width="100px">
    </footer>
</body>
</html>