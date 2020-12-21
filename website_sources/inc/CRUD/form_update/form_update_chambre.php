 <!-- Formulaire de modif d'un Gîte -->
 <form class="form_ajout" method="post">
            <div class="form_contain">
                <!-- Nom Dispo -->
                <div class="nom_dispo">
                    <div class="input_nom form-group">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" value="<?=$gite['nom']?>" class="form-control">
                    </div>
                    <?php
                        if ($gite['dispo'] == 0){
                            require_once('inc/CRUD/update_dispo/update_indispo.php');
                        
                        }else{
                            require_once('inc/CRUD/update_dispo/update_dispo.php');
                        }
                    ?>
                </div>
                <!-- Fin Nom Dispo -->
                <!-- Adresse Prix -->
                <div class="adresse_prix">
                    <div class="input_adresse form-group">
                        <label for='adresse'>Adresse</label>
                        <input type="text" id='adresse' name='adresse' value="<?=$gite['adresse']?>" class="form-control">
                    </div>
                    <div class="input_prix form-group">
                        <label for="prix">Prix</label>
                        <input type="text" id="prix" name="prix" value="<?=$gite['prix']?>" class="form-control">
                    </div>
                </div>
                <!-- Fin Adresse Prix -->
                <!-- NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <div class="nb">
                    <div class="form-group">
                        <label for="nbr_couchage">NB de Couchages</label><br>
                        <input name="nbr_couchage" type="number" min="1" max="5" value="<?=$gite['nbr_couchage']?>">
                    </div>
                    <div class="form-group">
                        <label for="nbr_sdb">NB de Sdb</label><br>
                        <input name="nbr_sdb" type="number" min="1" max="5" value="<?=$gite['nbr_sdb']?>">
                    </div>
                </div>
                <!-- Fin NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <!-- Equipements -->
                <div class="input_equip form-group">
                    <label for="Equipements">Equipements:</label><br>
                    <div class="equip_space form-check">
                        <?php
                            if ($gite['equipement_1'] == "Wifi"){
                                require_once('inc/CRUD/equipement/equipement_1_check.php');
                            }else{
                                require_once('inc/CRUD/equipement/equipement_1_ncheck.php');
                            }
                        ?>
                    </div>
                </div>
                <!-- Fin Equipements -->
                <!-- Fin Description -->
                <div class="div_bu_form">
                    <button class="rubberBand bu_form  btn btn-secondary btn-lg">Enregistrer</button>
                </div>
            </div>
        </form>
        <!-- Fin Formulaire -->