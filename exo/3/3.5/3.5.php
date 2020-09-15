<?php

$a = readline("Entrer 1 nombre");
$b = readline("Entrer 1 nombre");

if ($a < 0 xor $b < 0)
{
    echo ("Negatif");
}
else if ($a > 0 && $b > 0)
{
    echo ("Positif");
}
else
{
    echo ("nul");
}
