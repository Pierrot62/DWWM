<section>
    <form enctype="multipart/form-data" action="Index.php?page=ActionStagiaireMasse" method="POST">
        <div class="info">
            <label for="file">Ajouter fichier</label>
            <div class="mini"></div>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="xls-stagiaires" />
        </div>
        <div class="info  center">
            <button class="bouton" type="submit"><i class="fas fa-paper-plane"></i>&nbsp Envoyer</button>
            <div class="mini">
            </div> <a href="index.php?page=FormFRStagiaire" class="bouton"><i class="far fa-arrow-alt-circle-left"></i> &nbsp Retour</a>
        </div>
</section>