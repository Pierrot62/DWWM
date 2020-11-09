<?php

/*********    VARIABLE    *********/

$titrePage = 'Agence de Voyage';

/*********    INCLUDE    *********/

if (file_exists("./php/head.php")) {
    include("./php/head.php");
} else {
    echo "Head introuvable";
}

if (file_exists("./php/header.php")) {
    include("./php/header.php");
} else {
    echo "Header introuvable";
}

if (file_exists("./php/article.php")) {
    include("./php/article.php");
} else {
    echo "Article introuvable";
}

if (file_exists("./php/destination.php")) {
    include("./php/destination.php");
} else {
    echo "destination introuvable";
}

if (file_exists("./php/footer.php")) {
    include("./php/footer.php");
} else {
    echo "footer introuvable";
}



// include './php/head.php';
// include './php/header.php';
// include './php/article.php';
// include './php/destination.php';
// include './php/footer.php';