<?php
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
        require_once('connect.php');
            
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
        $equipement_1 = strip_tags($_POST['equipement_1']);
        $equipement_2 = strip_tags($_POST['equipement_2']);
        $equipement_3 = strip_tags($_POST['equipement_3']);
        $equipement_4 = strip_tags($_POST['equipement_4']);
        $descrip = strip_tags($_POST['descrip']);
        $img_pre = strip_tags($_POST['img_pre']);
        $img_carrou_1 = strip_tags($_POST['img_carrou_1']);
        $img_carrou_2 = strip_tags($_POST['img_carrou_2']);
        $img_carrou_3 = strip_tags($_POST['img_carrou_3']);
        
        //met dans la var le chemin ou je veux que les images soit save 
        $uploadcheminpre = "../../assets/img_gite/img_pre/card_$nom";
        $uploadchemincarrou = "../../assets/img_gite/img_carrou/carrou_$nom";
        // On insert dans la var $uploadfile le chemin plus nom du fichier envoyer dans la $_FILES
        // photo présentation
        $uploadfichier1 = $uploadcheminpre . basename($_FILES['img_pre']['name']);
        // Photo Carroussel
        $uploadfichier2 = $uploadchemincarrou . basename($_FILES['img_carrou_1']['name']);
        $uploadfichier3 = $uploadchemincarrou . basename($_FILES['img_carrou_2']['name']);
        $uploadfichier4 = $uploadchemincarrou . basename($_FILES['img_carrou_3']['name']);

        // Si le fichier télécharger n'est pas déplacé à l'endroit indiqué alors message d'erreur
        if (!move_uploaded_file ($_FILES['img_pre']['tmp_name'], $uploadfichier1)){
            $_SESSION['erreurphoto'] = "Il y'a eu un problème avec l'importation de la photo de présentation";
        }
        if (!move_uploaded_file ($_FILES['img_carrou_1']['tmp_name'], $uploadfichier2)){
            $_SESSION['erreurphoto'] = "Il y'a eu un problème avec l'importation de la 1ere photos pour le carroussel";
        }
        if (!move_uploaded_file ($_FILES['img_carrou_2']['tmp_name'], $uploadfichier3)){
            $_SESSION['erreurphoto'] = "Il y'a eu un problème avec l'importation de la 2eme photos pour le carroussel";
        }
        if (!move_uploaded_file ($_FILES['img_carrou_3']['tmp_name'], $uploadfichier4)){
            $_SESSION['erreurphoto'] = "Il y'a eu un problème avec l'importation de la 3eme photos pour le carroussel";
        }
        // Insert dans la GITE produit, les champs remplie correspondant à la ligne correspondant
        $sql = 'INSERT INTO `gite` (`nom`, `dispo`, `adresse`, `prix`, `categorie`, `nbr_couchage`, `nbr_sdb`, `nbr_piece`, `equipement_1`, `equipement_2`, `equipement_3`, `equipement_4`, `descrip`, `img_pre`, `img_carrou_1`, `img_carrou_2`, `img_carrou_3`) 
                VALUES (:nom, :dispo, :adresse, :prix, :categorie, :nbr_couchage, :nbr_sdb, :nbr_piece, :equipement_1, :equipement_2, :equipement_3, :equipement_4, :descrip, :img_pre, :img_carrou_1, :img_carrou_2, :img_carrou_3)';
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
        $query->bindValue(':equipement_1', $equipement_1, PDO::PARAM_STR);
        $query->bindValue(':equipement_2', $equipement_2, PDO::PARAM_STR);
        $query->bindValue(':equipement_3', $equipement_3, PDO::PARAM_STR);
        $query->bindValue(':equipement_4', $equipement_4, PDO::PARAM_STR);
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
        require_once('close.php');
        // On fait la redirection vers la dashboard ou sera affiché le message 
        header('Location:index.php');

    }else{
        // On parametre le message d'erreur si les champs ne sont pas complet
        $_SESSION['erreur'] = "Il vous reste des champs à Remplir";
       
    }
}
?>