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
          <input type="text" name="nom" id="nom" required placeholder="Votre nom"/>
          <span id="spanNom"><i title="Entrez votre nom : minimun 3 lettres, pas de chiffres" class="question fas fa-question"></i></span>
        </div>


        <div class="elmForm">
          <label for="ddn">Date de naissance :</label> 
          <input type="date" name="ddn" id="ddn" required placeholder="Date de naissance" />
          <span id="spanDdn"><i title="Entrez votre date de naissance" class="question fas fa-question"></i></span>
        </div>


        <div class="elmForm">
          <label for="cp">Code postal :</label> 
          <input title="5 Chiffres attendus" type="text" name="cp" id="cp" required placeholder="XXXXX"/>
          <span id="spanCp"><i title="Entrez votre code postal : 5 chiffres" class="question fas fa-question"></i></span>
        </div>

      <p class="info">* : Informations obligatoire</p>
      <p class="info" id="info"></p>
        <div class="center">
          <input id="button" type="submit" disabled value="Envoyer"/>
        </div>


      </form>
    </fieldset>
    </div>

    <script src="https://kit.fontawesome.com/ce4feb7268.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
