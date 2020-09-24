<?php

require "fonctionPendu.php";

// $t = array('B', 'O', 'N', 'J', 'O', 'U', 'R');
// echo "Cette méthode doit donner B O N J O U R et ca donne : " ; afficherTableau($t);


// $test = "bonjour";
// echo "Cette méthode doit donner _ _ _ _ _ _ _ et ca donne : " ; afficherTableau(coderMot($test));


// Echo "Cette méthode doit donner \n 1 \n 4 et ca donne \n" ;
// $t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R');
// $positions = testerLettre('O', $t,0);
// foreach ($positions as $pos)
// {
//     echo("position : ".$pos."\n");
// }


// Echo "Cette méthode doit donner B O N K O U R et ca donne";
// $t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
// afficherTableau( ajouterUneLettre('K', $t, 3));


// $motATrouver="BONJOUR";
// $tab = array( 'B', '_', 'N', 'J', '_', 'U', '_' );
// echo "Cette méthode doit donner B O N J O U _ et ca donne ";
// afficherTableau(ajouterLesLettres('O', $tab, testerLettre('O', str_split($motATrouver),0)));
// // en l’absence des autres methodes

// // Print_r(ajouterLesLettres('O', $tab,[1,4]));


// $liste = array('A','B','C') ;
// echo "Cette méthode doit donner :\n Les lettres non présentes sont A,B,C \n et ca donne \n" ;
// afficherMauvaisesLettres($liste);


$c = demanderLettre("COUCOU");
echo $c;
