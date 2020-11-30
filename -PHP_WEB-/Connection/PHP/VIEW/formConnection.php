<form action="index.php?codePage=actionSession&mode=connection" method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" required />
    </div>
    <div>
        <label for="motDePasse">mot De Passe</label>
        <input type="password" name="motDePasse" required />
    </div>
    
    <button type="submit">Valider</button>
</form>

<div>Nouvelle utilisateur ? <a href="index.php?codePage=inscription">Crée un compte</a></div>