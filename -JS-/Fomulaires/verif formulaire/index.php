<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fomulaire</title>
</head>

<body>

       <div class="content">
     <fieldset>
      <legend>Formulaire informatif</legend>
      <form>

        <div class="elmForm">
          <label for="Nom">Nom :</label>
          <input type="text" class="checkInput" name="nom" id="nom" required pattern="[a-zA-Z- ]{3,}" placeholder="Votre nom"/>
          <span id="spanNom"><i title="Entrez votre nom : minimun 3 lettres, pas de chiffres" class="question fas fa-question"></i></span>
        </div>


        <div class="elmForm">
          <label for="ddn">Date de naissance :</label>
          <input type="date" class="checkInput" name="ddn" id="ddn" required placeholder="Date de naissance" />
          <span id="spanDdn"><i title="Entrez votre date de naissance" class="question fas fa-question"></i></span>
        </div>


        <div class="elmForm">
          <label for="cp">Code postal :</label>
          <input title="5 Chiffres attendus" type="text" class="checkInput" name="cp" id="cp" required pattern="\d{5}" placeholder="XXXXX"/>
          <span id="spanCp"><i title="Entrez votre code postal : 5 chiffres" class="question fas fa-question"></i></span>
        </div>

        <div class="elmForm">
          <label for="email">Email :</label>
          <input title="5 Chiffres attendus" type="text" class="checkInput" name="email" id="email" required pattern="^[a-z]+[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" placeholder="Votre email"/>
          <span id="spanEmail"><i title="Entrez votre email" class="question fas fa-question"></i></span>
        </div>

        <div class="elmForm">
          <label for="mdp">Mot de passe : </label>
          <input title="5 Chiffres attendus" type="password" class="checkInput" name="mdp" id="mdp" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]{8,}" placeholder="Votre mot de passe"/>
          <div class="oeil">
            <i class="viewMdp fas fa-eye"></i>
          </div>
          <div class="info picto">
                <div class="texteInfoBulle"></div>
                <div class="aideMdp">
                    <div>Liste des critères à respecter</div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div class="gauche">8 caractères minimum</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div class="gauche">majuscule(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div class="gauche">minuscule(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div class="gauche">nombre(s)</div>
                    </div>
                    <div>
                        <div class="mini"><i class="far fa-times-circle rouge"></i>
                        </div>
                        <div class="gauche">caractères spéciaux</div>
                    </div>
                </div>
            </div>
          <span id="spanMdp"><i title="Entrez votre mot de passe" class="question fas fa-question"></i></span>
        </div>

        <div class="elmForm">
          <label for="confirmMdp">Confirmation de mot de passe : </label>
          <input title="5 Chiffres attendus" type="password" class="checkInput" name="confirmMdp" id="confirmMdp" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*+])[a-zA-Z\d!@#\$%\^&\*+]{8,}" placeholder="Confirmation de mot de passe"/>
          <span id="spanConfirmMdp"><i title="Entrez votre mot de passe" class="question fas fa-question"></i></span>
        </div>

      <p class="info">* : Informations obligatoire</p>
      <p class="info" id="info"></p>
        <div class="center">
          <input id="button" type="submit" value="Envoyer"/>
        </div>


      </form>
    </fieldset>
    </div>

    <script src="https://kit.fontawesome.com/ce4feb7268.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>