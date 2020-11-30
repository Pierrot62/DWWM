<form action="index.php?codePage=actionSession&mode=inscription" method="POST">
<div>
    <label for="nom">Nom</label>
    <input type="text"  name="nom" required />
</div>
<div>
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" required />
</div>
<div>
    <label for="motDePasse">mot De Passe</label>
    <input type="password" name="motDePasse" required />
</div>
<div>
    <label for="confirmation">Confirmation du mot de passe</label>
    <input type="password" name="confirmation" required />
</div>
<div>
    <label for="adresseMail">Adresse mail</label>
    <input type="text" name="adresseMail" required />
</div>
<div>
    <label for="role">Role (1 admin 2 user)</label>
    <select name="role" id="role">
    <option value="1">Admin</option>
    <option value="2" selected>User</option>
</select>
    
</div>
<div>
    <label for="pseudo">Pseudo</label>
    <input type="text" name="pseudo" required />
</div>
<button type="submit">Valider</button>
</form>
<div>Vous avez deja un compte ?<a href="index.php?codePage=connection">Connecter vous</a></div>