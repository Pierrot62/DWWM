<?php
$idForm=$_POST['idForm'];
echo json_encode(SessionsFormationsManager::getByFormation($idForm,true));
?>