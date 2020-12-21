<?php
include_once('inc/header.php');

require_once('inc/CRUD/read.php');
?>
<!-- carrousel des grandes images -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/slider_page_presentation/img_fond_chalet_montagne.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider_page_presentation/img_fond_chalet_montagne_suisse.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/slider_page_presentation/img_fond_ranger_de_chalet.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<!-- formulaire -->

<div class="form_acc">
  <form class="formContact form_ajout form_acc" method="POST">

    <div class=" form_contain">

      <div class="nom_dispo">

        <label for="date">Date d'arrivée</label>
        <input type="date" name="date-d-arrivee" class="form-control">
      </div>
      <div class="nom_dispo">

        <label for="date">Date de départ</label>
        <input type="date" name="date_de_depart" class="form-control">
      </div>
      <div class="div_bu_form">
        <a href="recherche_du_gite.php" class="rubberBand bu_form  btn btn-secondary btn-lg">GO</a>
      </div>
    </div>
  </form>
</div>
<h1>Bons Plans</h1>

<!-- les cards -->
<div class="card_ac">
  <?php 
  $tmp = 0;
  foreach($result as $gite): extract($gite); 
  if($tmp++ < 3){ 
  ?>
  <div class="card card_accueil" style="width: 25rem;">
  <img src="<?=$img_pre?>" class="card-img-top" alt="img présentation gîte">
    <div class="card-body">
      <h5 class="card-title"><?=$nom?></h5>
      <p class="card-text"><?=$prix?></p>
      <div class="div_bu_form">
        <a href="detail_du_gite.php?id_gite=<?=$id_gite?>" class="rubberBand bu_form  btn btn-secondary btn-lg">voir</a>
      </div>
    </div>
  </div>
  <?php } endforeach?>
</div>

<?php
include_once('inc/footer.php')
?>

</html>