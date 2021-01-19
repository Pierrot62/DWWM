<?php
$id=$_POST["idRegion"];
echo json_encode(VillesManager::getListByDepartement($id,true));