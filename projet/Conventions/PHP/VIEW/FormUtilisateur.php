<section>

    <!-- <input type="text" value="$_SESSION['utilisateur']->getPrenomStagiaire()"> -->
    <form action="" method="POST">

        <div class=" ">
            <div class="info colonne ">
                <label for="prenomUtilisateur">Prenom :</label>
                <input type="text" id="prenom" name="prenomUtilisateur" value="" required pattern="[a-zA-Z- ]{3,}">
            </div>
            <div class="info colonne ">
                <label for="nomUtilisateur">Nom :</label>
                <input type="text" id="nom" name="nomUtilisateur" value="" required pattern="[a-zA-Z- ]{3,}">
            </div>
        </div>
        <div>

            <div class="info colonne  grande">
                <label for="emailUtilisateur">Adresse E-mail :</label>
                <input type="text" id="email" name="emailUtilisateur" required
                    pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" value="">
            </div>
        </div>

        <div>
            <div class="info colonne center relat">
                <label for="mdpUtilisateur">Mot de passe :</label>
                <input type="password" id="mdp" name="mdpUtilisateur" value="" required
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]{8,}$">
                <div class="mini">
                    <div class="oeil">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="aideMdp absol">
                    <div>Liste des critères à respecter !! </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div> 8 caractères minimum</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>majuscule(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>minuscule(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>nombre(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div>caractères spéciaux</div>
                    </div>
                </div>
            </div>


            <div class="info colonne center">
                <label for="confirmation">Confirmation de mot de passe :</label>
                <input type="password" id="confirmation" name="confirmation" title="remettre le même mot de passe"
                    required>
            </div>
        </div>



        <div>
            <div class="info colonne center">
                <label for="datePeremption">Date de peremption :</label>
                <input type="date" id="datePeremtion" name="datePeremption" value="" required>
            </div>
            <div class="info colonne center">
                <label for="idRole">Role :</label>
                <select name="idRole" id="role">
                    <option value="defaut" selected>-------------------------------Choisissez un
                        Role-------------------------------</option>
                    <?php
$role = RolesManager::getList();
foreach ($role as $unRole) {
    echo '
                            <option value="' . $unRole->getIdRole() . '">' . $unRole->getLibelleRole() . '</option>';
    // var_dump($unRole->getIdRole());
    // var_dump($unRole->getLibelleRole());
}
?>
                </select>

            </div>
        </div>
        <div>
            <div class="info colonne center">
                <button id="submit" class="bouton" type="submit" disabled><i class="fas fa-paper-plane"></i> Envoyer</button>
            </div>
        </div>
        <div>
            <div class="info center">
                <div class="erreur"></div>
            </div>
        </div>

    </form>

</section>