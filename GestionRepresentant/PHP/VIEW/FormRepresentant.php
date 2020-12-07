<form action="Index.php?page=ActionRepresentant&mode=add" method="POST">
        <div><label for="NomRepres">Nom du representant</label></div>
        <div>
          <input
            type="text"
            name="NomRepres"
            placeholder="Nom du representant"
            required
          />
        </div>
        <div><label for="ville">Ville du representant</label></div>
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