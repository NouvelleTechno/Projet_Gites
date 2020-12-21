<?php
require_once('inc/header.php');
// Include Pour le Read
require_once('inc/CRUD/read.php')
?>
<!-- Formulaire d'ajout d'un Gîte -->
<form class="form_ajout" style="width:72.5%" method="POST" action="" enctype="multipart/form-data" >
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
                    <!-- Fin Description -->
                    <div class="div_bu_form">
                        <button type="submit" class="rubberBand bu_form  btn btn-secondary btn-lg">Valider</button>
                    </div> 
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
                                    <p class="card-text"><?=$adresse?></p>
                                    <p class="card-text"><?=$categorie?></p>
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