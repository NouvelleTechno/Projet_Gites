<?php
require_once('inc/header.php');
// Include Pour le Read
// require_once('inc/CRUD/read.php');
require_once('inc/CRUD/form_critere/form_critere.php');
?>
        <div class="div_bu">
            <a href="index.php" class="rubberBand bu_form  btn btn-secondary btn-lg">Accueil</a>
        </div>
        <!-- Formulaire d'ajout d'un Gîte -->
            <form class="form_ajout form_crit" action="">
                <div class="form_contain">
                        <!-- cate Dispo -->
                        <div class="dispo_cate">
                            <div>
                                <label for="dispo">Disponibilité:</label>
                                <select name="dispo" class="select_dispo sel form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option value="all">All</option>
                                        <option value="1">Disponible</option>
                                        <option value="0">Indisponible</option>
                                </select>
                            </div>
                            <div>
                                <label for="categorie">Catégorie:</label>
                                <select name="categorie" class=" select_dispo sel form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option value="all">All</option>
                                        <option value="Chambre">Chambre</option>
                                        <option value="Appartement">Appartement</option>
                                        <option value="Maison">Maison</option>
                                </select>
                            </div>
                        <div class="div_bu_form">
                            <button type="submit" class="rubberBand bu_form  btn btn-secondary btn-lg">Valider</button>
                        </div> 
                    </div>
                    <!-- Fin categorie Dispo -->
                    
                 </div>
            </form>
        <!-- Yoann -->
               <!-- Mon Inventaire des Gîtes -->
            <!-- PHP -->
            <div class="card_acc"> 
            <!-- on boucle la var result -->
                <?php foreach($result as $gite): extract($gite)?>
            <!-- fin PHP -->
                    <div class="div_card">
                        <div class="card card_re" style="width: 20rem;">
                            <img src="<?=$img_pre?>" class="card-img-top" alt="img présentation gîte">
                            <div class="contenu_card card-body">
                                <h4 class="title_gite card-title titre_card"><?=$nom?></h4>
                                <div>
                                    <p class="card-text"><?= $categorie ?></p>
                                    <p class="card-text"><?= $prix?>€/Nuit</p>
                                </div>
                                <div class="ico">
                                    <a href="detail_du_gite.php?id_gite=<?= $id_gite?>"><img class="rubberBand" src="assets/img/icone/voir.png" alt="Inspecter" width="25px" height="25px"></a>
                            </div>   
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
                <!-- Fin Yoann -->
        <!-- Fin Formulaire -->
        
<?php
require_once('inc/footer.php');
?>