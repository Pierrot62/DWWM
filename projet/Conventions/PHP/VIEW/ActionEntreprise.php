<?php

$entreprise = EntreprisesManager::getByNumSiret($_POST["numSiretENT"],false);
if($entreprise == null) // si l'entreprise n'est pas créée alors on l'a créee
{
    $entreprise = new Entreprises($_POST);
    EntreprisesManager::add($entreprise);
    $entreprise = EntreprisesManager::getByNumSiret($_POST["numSiretENT"],false);
}
else{ // si elle est créée alors on la modifie si il y a à modifier
    $idEntreprise = $entreprise->getIdEntreprise();
    $entreprise = new Entreprises($_POST);
    $entreprise->setIdEntreprise($idEntreprise);
    EntreprisesManager::update($entreprise);
}

$tuteur = TuteursManager::getByEmail($_POST["emailTuteur"]);
if($tuteur == null) // si le tuteur n'est pas créé alors on le crée
{
    $tuteur = new Tuteurs($_POST);
    $tuteur->setIdEntreprise($entreprise->getIdEntreprise());
    TuteursManager::add($tuteur);
    // Mettre à jour la date de peremption
}
else{ // si il est créé alors on le modifie si il y a à modifier
    $test = new Tuteurs($_POST);
    $test->setIdTuteur($tuteur->getIdTuteur());
    $test->setIdEntreprise($entreprise->getIdEntreprise());
    TuteursManager::update($test);
}
    





    
