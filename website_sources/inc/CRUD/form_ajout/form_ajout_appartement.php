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
                            <option value="1" selected>Disponible</option>
                            <option value="0">Indisponible</option>
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
                            <input class="form-check-input" type="radio" name="categorie" id="inlineRadio2" value="Appartement" checked>
                            <label class="form-check-label" for="inlineRadio2">Appartement</label>
                        </div>
                    </div>
                </div>
                <!-- Fin du choix de catégorie en input type radio Catégorie -->
                <!-- NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <div class="nb">
                    <div class="form-group">
                        <label for="nbr_couchage">NB de Couchages</label><br>
                        <input name="nbr_couchage" type="number" min="1" max="8">
                    </div>
                    <div class="form-group">
                        <label for="nbr_sdb">NB de Sdb</label><br>
                        <input name="nbr_sdb" type="number" min="1" max="8">
                    </div>
                    <div class="form-group">
                        <label for="nbr_piece">NB de Pièce</label><br>
                        <input name="nbr_piece" type="number" min="1" max="10">
                    </div>
                </div>
                <!-- Fin NB de Couchage, Sdb, Pièce(si cocher maison ou appart) -->
                <!-- Equipements -->
                <div class="input_equip form-group">
                    <label for="equipement">Equipements:</label><br>
                    <div class="equip_space form-check">
                        <input name="equipement_1" class="form-check-input" type="checkbox" value="Wifi" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Wifi</label>
                    </div>
                    <div class="equip_space form-check">
                        <input name="equipement_2" class="form-check-input" type="checkbox" value="Lave-Linge" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">Lave-Linge</label>
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