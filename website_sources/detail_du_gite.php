<?php
require_once('inc/header.php');

require_once('inc/CRUD/read_select.php');
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=$gite['img_carrou_1_user']?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=$gite['img_carrou_2_user']?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=$gite['img_carrou_3_user']?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<div>
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis sit sequi repellendus debitis. Debitis repudiandae animi blanditiis, id nam optio quidem necessitatibus voluptas reiciendis sed nisi eos, facere quam recusandae dolorum totam? Id, earum! Nisi sint, expedita voluptatibus aliquid blanditiis labore quis? Reprehenderit asperiores dicta vitae unde sit, adipisci id dolor corporis culpa magnam rerum eaque necessitatibus non sapiente expedita et iure quisquam ipsa soluta? Earum, consectetur quasi error aut blanditiis enim, placeat illo molestiae temporibus eum eos et, ipsam dicta sunt reiciendis quibusdam nostrum sed ad nisi. Est eveniet eaque, delectus suscipit quaerat harum, quis beatae, debitis fuga atque nemo temporibus ducimus corporis iusto quidem quam perferendis repellendus. Illum omnis laudantium praesentium eum dicta aspernatur quam corporis ex perferendis fuga obcaecati iste natus architecto ipsa quaerat magnam perspiciatis quibusdam consequatur eaque voluptas quas nisi excepturi, illo rem? Beatae itaque amet labore? Dolore illo qui blanditiis repellendus. Cumque, molestiae!</p> 

<!-- </div>
<div class="formContact">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div> 
</div> -->
<form class="formContact form_ajout" method="POST">
<div class=" form_contain">
                 
                    <div class="nom_dispo">

                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                    </div>
                    <div class="nom_dispo">

                            <label for="text">Message</label>
                            <input type="textarea" name="message" class="form-control">
                    </div>
                    <div class="div_bu_form">
                        <button type="submit" class="rubberBand bu_form  btn btn-secondary btn-lg">Envoyer</button>
                    </div> 
</div>                         
</form>                        
<?php
require_once('inc/footer.php');
?>