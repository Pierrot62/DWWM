<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fomulaire</title>
</head>

<body>


    <div id="fomulaire">
        <h1>Formulaire</h1>
        <form action="" method="POST">
            <div class="elmForm">
                <label for="nom">Nom :</label>
                <input id="nom" name="nom" type="text" required>
                <span></span>
                <span id="spanNom"></span>
            </div>
            <div class="elmForm">
                <label for="ddn">Date de naissance :</label>
                <input id="ddn" name="ddn" type="text" required>
                <span></span>
                <div>
                    <span id="spanNom"></span>
                </div>


            </div>
            <div class="elmForm">
                <label for="codePostal">Code postal :</label>
                <input id="cp" name="codePostal" type="text" required>
                <span></span>
                <span id="spanCp"></span>

            </div>
            <div class="elmForm">
                <input type="button" value="Envoyer">
            </div>
        </form>
    </div>


    <script src="script.js"></script>
</body>

</html>
