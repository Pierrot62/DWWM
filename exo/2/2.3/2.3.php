<?php 

$prix = readline("prit ht :");
$quantite = readline("quantité :");
$tva = 0.2;

$ht = $prix * $quantite;

$prixtva = $ht * $tva;

$ttc = $prixtva + $ht;

echo $ttc;

