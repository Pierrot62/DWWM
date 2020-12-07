<form action="Index.php?page=ActionConnect&mode=connect" method="POST">
        <div><label for="emailUser">Adresse E-mail</label></div>
        <div>
          <input
            type="text"
            name="pseudoUser"
            placeholder="Adresse E-mail"
            required
          />
        </div>
        <div><label for="mdpUser">Mot de passe</label></div>
        <div>
          <input
            type="password"
            name="mdpUser"
            placeholder="Mot de passe"
            required
          />
        </div>

        <div class="buttonForm">
          <div></div>
          <button><a href="index.php?page=accueil">Accueil</a></button>
          <div></div>
          <button type="submit">Connection</button>
          <div></div>
        </div>
        <div >
            Nouvel utilisateur ? <a href="index.php?page=FormInscript">crée vous un compte ici</a>
        </div>
      </form>