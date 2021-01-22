
<?php

$role = $_SESSION['utilisateur']->getIdRole();

if ($role == 1) {
    header("location:index.php?page=FormAdmin");
}
else if ($role == 2){
    header("location:index.php?page=FormConnexion");
}
else if ($role == 3) {
    header("location:index.php?page=FormFREntreprise");
}
else if ($role == 4){
    header("location:index.php?page=FormFRStagiaire");
}