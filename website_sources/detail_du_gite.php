<?php
require_once('inc/header.php');

require_once('inc/CRUD/read_select.php');
?>
<div class="liens">
  <div class="div_bu btn_re">
    <a href="index.php" class="rubberBand bu_form  btn btn-secondary btn-lg">Accueil</a>
  </div>
  <div class="div_bu btn_re">
    <a href="recherche_du_gite.php" class="rubberBand bu_form  btn btn-secondary btn-lg">Recherche</a>
  </div>
</div>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= $gite['img_carrou_1'] ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $gite['img_carrou_2'] ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= $gite['img_carrou_3'] ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </a>
</div>
<!-- Détails du Gite -->
<!-- Titre Du gite et adresse du gite -->
<div class="titre">
  <h1 class="h1_acc"><?= $gite['nom'] ?></h1>
  <!-- <h2 class="ligne_detail"><img  src="assets/img/icone/localisation_ico.png" alt="icone local" width="50px"><?= $gite['adresse'] ?></h2> -->
</div>
<!-- Fin Titre et adresse du gite -->
<!-- Description Tarif -->

  <div class="detail">
    <div class="desc_tarif">
      <div class="desc det">
        <h3 class="titre_desc">Description</h3><br>
        <p class="txt_desc">
          <?= $gite['descrip'] ?>
        </p>
      </div>

      
    </div>
    <!-- Fin Description Tarif -->
    <!-- Reservation Equipement -->

    
</div>
<div class="detail_use">
<div class="tarif">
        <h3 class="tar"><?= $gite['prix'] ?>€/Nuit</h3>
        <p>Couchages: <?= $gite['nbr_couchage'] ?></p>
        <p>Salles de Bain: <?= $gite['nbr_sdb'] ?></p>
        <?php
        if ($gite['nbr_piece'] > 0) {
          echo "<p>Nombre de Pièce: $gite[nbr_piece]</p>";
        }
        ?>
      </div>
      <div class="equipe">
      <h3 class="titre_equip">Equipements</h3>
      <p><?= $gite['equipement_1'] ?></p>
      <p><?= $gite['equipement_2'] ?></p>
      <p><?= $gite['equipement_3'] ?></p>
      <p><?= $gite['equipement_4'] ?></p>
    </div>
</div>

<!-- Fin Reservation Equipement -->
</div>

<!-- Fin Des Détails du Gite -->

    <form class="formContact form_ajout " method="POST">
      <div class="form_contain form_det">
    <div class="mar">
        <div class="nom_dispo">
          <label for="nom">Nom</label>
          <input type="text" name="nom" class="form-control">
        </div>

        <div class="nom_dispo">
          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" class="form-control">
        </div>
    </div>
    <div class="mar">
        <div class="nom_dispo">
          <label for="tel">Téléphone</label>
          <input type="text" name="tel" class="form-control">
        </div>  
        <div class="nom_dispo">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
    </div>
    <div class="mar">    
      <div class="nom_dispo">
          <label for="date">Date d'arrivée</label>
          <input type="date" name="date_d_arrivee" class="form-control">
        </div>
        
        <div class="nom_dispo">
          <label for="date">Date de départ</label>
          <input type="date" name="date_de_depart" class="form-control">
        </div>
      </div>
      <div>
      <div class="mar mess">
        <div class="mess nom_dispo">
          <label for="text">Message</label>
          <textarea name="message" class="form-control"> </textarea>
        </div>
      </div>

        <div class="div_bu">
          <button type="submit" class="rubberBand bu_form  btn btn-secondary btn-lg">Envoyer</button>
        </div>
    </div>

  </div>
</form>
<?php
require_once('inc/footer.php');
?>