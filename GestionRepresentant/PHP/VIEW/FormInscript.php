<?php

if (isset($_GET['mode'])) {

    $idUser = $_GET['id'];
    $user = UserManager::findById($idUser);
    echo '
    <form action="Index.php?p=ActionConnect&mode=update" method="POST">
        <div><label for="nomUser">Nom</label></div>
    <div>

        <input type="text"  name="nomUser" value="'. $user->getNomUser() .'"  required />
    </div>
    <div>    <label for="prenomUser">Prénom</label>
    </div>
    <div>
        <input type="text" name="prenomUser" value="'. $user->getPrenomUser() .'" required />
    </div>
    <div>    <label for="pseudoUser">Pseudo</label>
    </div>
    <div>
        <input type="text" name="pseudoUser" value="'. $user->getPseudoUser() .'"  required />
    </div>
    <div>    <label for="mdpUser">Mot de passe</label>
    </div>
    <div>
        <input type="password" name="mdpUser" value="'. $user->getMdpUser() .'"  required />
    </div>
    <div>    <label for="confirmation">Confirmation du mot de passe</label>
    </div>
    <div>
        <input type="password" name="confirmation" value="'. $user->getMdpUser() .'"  required />
    </div>
    <div>    <label for="emailUser">Adresse e-mail</label>
    </div>
    <div>
        <input type="text" name="emailUser" value="'. $user->getEmailUser() .'"  required />
    </div>
    <div>    <label for="telUser">telephone</label>
    </div>
    <div>
        <input type="text" name="telUser" value="'. $user->getTelUser() .'"  required />
    </div>
    <div>
        <select name="idRole">
        <option value="2">User</option>
        <option value="1">Administrateur</option>

    </div>
    <input name="idUser" value="'.$user->getIdUser().'" type="hidden">

    <div class="buttonForm">
        <div></div>
        <button><a href="index.php">Accueil</a></button>
        <div></div>
        <button type="submit">Sauvegarder</button>
        <div></div>
      </div>

    </form>';

} else {

    echo '<form action="Index.php?p=ActionConnect&mode=new" method="POST">
        <div><label for="nomUser">Nom</label></div>
    <div>

        <input type="text"  name="nomUser" required />
    </div>
    <div>    <label for="prenomUser">Prénom</label>
    </div>
    <div>
        <input type="text" name="prenomUser" required />
    </div>
    <div>    <label for="pseudoUser">Pseudo</label>
    </div>
    <div>
        <input type="text" name="pseudoUser" required />
    </div>
    <div>    <label for="mdpUser">Mot de passe</label>
    </div>
    <div>
        <input type="password" name="mdpUser" required />
    </div>
    <div>    <label for="confirmation">Confirmation du mot de passe</label>
    </div>
    <div>
        <input type="password" name="confirmation" required />
    </div>
    <div>    <label for="telUser">telephone</label>
    </div>
    <div>
        <input type="text" name="telUser" required />
    </div>
    <input name="roleUser" value="2" type="hidden">

    <div class="buttonForm">
        <div></div>
        <button><a href="index.php">Accueil</a></button>
        <div></div>
        <button type="submit">Inscription</button>
        <div></div>
      </div>
      <div >
          Vous avez deja un compte ? <a href="index.php?p=FormConnect">Connecter vous ici</a>
      </div>
    </form>';
}
