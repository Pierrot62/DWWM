<?php

//Affichage des erreurs
ini_set('display_errors',1);

use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

//On initialise un tableau contenant tous les typs possibles de feuilles

$files_mimes= array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['xls-stagiaires']['name]']) && in_array($_FILES['xls-stagiaires']['type'], $files_mimes)){

    //On récupère le nom du fichier et son extension
    $arr_file = explode('.',$_FILES['xls-stagiaires']['name']);
    $extension =end($arr_file);

    //On vérifie le format
    if($extension=='csv')
    {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();   //format csv
    }
    else
    {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();  //format xlsx
    }

    //Lecture  du fichier
    $spreadsheet= $reader->load($_FILES['xls-stagiaires']['tmp_name']);

    //On crée un tableau contenant toutes les valeurs du fichier
    $sheetData= $spreadsheet->getActiveSheet()->toArray();
    var_dump($sheetData);
}

