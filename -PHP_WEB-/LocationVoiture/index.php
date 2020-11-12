<?php

/*********    VARIABLE    *********/



/*********    INCLUDE    *********/

if (file_exists("./PHP/VIEW/head.php")) {
    include("./PHP/VIEW/head.php");
} else {
    echo "Head introuvable";
}

if (file_exists("./PHP/VIEW/header.php")) {
    include("./PHP/VIEW/header.php");
} else {
    echo "Header introuvable";
}

if (file_exists("./PHP/VIEW/section.php")) {
    include("./PHP/VIEW/section.php");
} else {
    echo "Article introuvable";
}

if (file_exists("./PHP/VIEW/footer.php")) {
    include("./PHP/VIEW/footer.php");
} else {
    echo "footer introuvable";
}
