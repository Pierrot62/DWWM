<?php

$a = 10;

$b = 20;

$c = 30;

$d = $a;

$e = $b;

$f = $c;

$b = $d; 

$c = $e;

$a = $f;

echo $a;

echo $b;

echo $c;