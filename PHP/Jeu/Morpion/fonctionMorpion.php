<?php


/**
 * 
 * Methodes pour tester si un joueur a terminer la partie
 * 
 * @param array $plateau plateur de jeu dans lequelle ce trouve les symbole des joueurs
 * @param int $alignPourGagner Nombre de symbole a aligner pour gagner la partie
 * @param array $position Position dans lesquelles se trouve le dernier symbole 
 * @param array $symbole Symbole choisit par le joueur pour remplir une case vide
 * @return int
 * 
 */

function compteAlignes (){
       

}

 

 function testerGagner($plateau,$alignPourGagner,$position,$symbole)
 {
      $positions = 0;
    $sommeLigne = compteAlignes($plateau,$positions,1,0,$symbole)+compteAlignes($plateau,$positions,-1,0,$symbole)+1;
    $sommeColone = compteAlignes($plateau,$positions,0,1,$symbole)+compteAlignes($plateau,$positions,0,-1,$symbole)+1;
    $sommeDiagonaleMontant = compteAlignes($plateau,$positions,-1,-1,$symbole)+compteAlignes($plateau,$positions,1,1,$symbole)+1;
    $sommeDiagonaleDescendante = compteAlignes($plateau,$positions,1,-1,$symbole)+compteAlignes($plateau,$positions,-1,1,$symbole)+1;

    if (($sommeLigne < $alignPourGagner) || ($sommeColone < $alignPourGagner) || ($sommeDiagonaleDroite < $alignPourGagner) || ($sommeDiagonaleGauche < $alignPourGagner)){
        
    }

 }