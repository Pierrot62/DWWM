<div class="formulaire">
    <form action="index.php?codePage=actionSession&mode=connection" method="post">
        <div>
            <label for="pseudo"><?php echo texte('nom utilisateur'); ?> </label>
            <input type="text" name="pseudo" required />
        </div>
        <div>
            <label for="motDePasse"><?php echo texte('mot de passe'); ?></label>
            <input type="password" name="motDePasse" required />
        </div>

        <button type="submit"><?php echo texte('valide'); ?></button>
    </form>
</div>
    <div><?php echo texte('nouveau utilisateur') ?><a href="index.php?codePage=inscription"><?php echo texte('cree un compte') ?></a></div>
