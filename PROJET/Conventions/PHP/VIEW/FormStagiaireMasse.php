<!-- <form action="Index.php?page=ActionStagiaireMasse" method="POST">
<div class="info">       
    <label for="file">Ajouter fichier</label>
    <div class="mini"></div>
    <input type="file" name="file">
    <button class="bouton">Envoyer</button>
</div> -->

<form enctype="multipart/form-data" action="Index.php?page=ActionStagiaireMasse" method="POST">
<div class="info">       
    <label for="file">Ajouter fichier</label>
    <div class="mini"></div>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <input type="file" name="xls-stagiaires"/>
    <button class="bouton">Envoyer</button>
</div>