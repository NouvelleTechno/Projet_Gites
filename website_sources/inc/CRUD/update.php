<?php
//Si la var $_POST, $_FILES sont déclaré
if($_POST){
    //Vérifie Si les champs ne sont pas vide
    if(isset($_POST['nom'])
    && isset($_POST['dispo'])
    && isset($_POST['adresse'])
    && isset($_POST['prix'])
    && isset($_POST['nbr_couchage'])
    && isset($_POST['nbr_sdb'])
    && isset($_POST['nbr_piece'])){
            
        // On se connect à la base de donnée,  require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
        require_once('../../inc/db/connect.php');
            
        // On nettoie les données envoyées
        // Supprime les balises HTML et PHP d'une chaîne
        $id_gite = strip_tags($_GET['id_gite']);
        $nom = strip_tags($_POST['nom']);
        $dispo = strip_tags($_POST['dispo']);
        $adresse = strip_tags($_POST['adresse']);
        $prix = strip_tags($_POST['prix']);
        $nbr_couchage = strip_tags($_POST['nbr_couchage']);
        $nbr_sdb = strip_tags($_POST['nbr_sdb']);
        $nbr_piece = strip_tags($_POST['nbr_piece']);
        $equipement_1 = strip_tags($_POST['equipement_1']);
        $equipement_2 = strip_tags($_POST['equipement_2']);
        $equipement_3 = strip_tags($_POST['equipement_3']);
        $equipement_4 = strip_tags($_POST['equipement_4']);

        // Modifie dans la Table GITE, les champs remplie correspondant à la ligne correspondant
        $sql = 'UPDATE `gite` SET `nom`=:nom, `dispo`=:dispo, `adresse`=:adresse, `prix`=:prix, `nbr_couchage`=:nbr_couchage, `nbr_sdb`=:nbr_sdb, `nbr_piece`=:nbr_piece, `equipement_1`=:equipement_1, `equipement_2`=:equipement_2, `equipement_3`=:equipement_3, `equipement_4`=:equipement_4 WHERE `id_gite`=:id_gite;';
        // On prepare la requête
        $query = $db->prepare($sql);
        // On param notre  requete query avec le param adéquat à chaque champ(associe une valeur à un param)(param varchar text)
        $query->bindValue(':id_gite', $id_gite, PDO::PARAM_INT);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':dispo', $dispo, PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $query->bindValue(':prix', $prix, PDO::PARAM_STR);
        $query->bindValue(':nbr_couchage', $nbr_couchage, PDO::PARAM_INT);
        $query->bindValue(':nbr_sdb', $nbr_sdb, PDO::PARAM_INT);
        $query->bindValue(':nbr_piece', $nbr_piece, PDO::PARAM_INT);
        $query->bindValue(':equipement_1', $equipement_1, PDO::PARAM_STR);
        $query->bindValue(':equipement_2', $equipement_2, PDO::PARAM_STR);
        $query->bindValue(':equipement_3', $equipement_3, PDO::PARAM_STR);
        $query->bindValue(':equipement_4', $equipement_4, PDO::PARAM_STR);

        // excute tt les param rentrer 
        $query->execute();
        // On parametre le message si tout à fonctionner
        $_SESSION['message'] = "Success Votre Gîte à été Modifié avec succès";
        // On ferme la base de donnée,  require stop le script si y'a une erreur comparer à include et once sert à la vérification de si le code à déjà été excécuter 
        require_once('../../inc/db/close.php');
        // On fait la redirection vers la dashboard ou sera affiché le message 
        header('Location:index.php');

    }else{
        // On parametre le message d'erreur si les champs ne sont pas complet
        $_SESSION['erreur'] = "Il vous reste des champs à Remplir";
       
    }
}
?>