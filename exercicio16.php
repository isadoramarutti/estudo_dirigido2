<?php

print ("informe o primeiro número: ");
$n1  = fgets (STDIN);

print ("informe o segundo número: ");
$n2  = fgets (STDIN);

print ("informe o terceiro número: ");
$n3  = fgets (STDIN);

print ("informe o quarto número: ");
$n4  = fgets (STDIN);

print ("informe o quinto número: ");
$n5  = fgets (STDIN);

$soma = $n1 + $n2 + $n3 +$n4 + $n5;
$media = $soma/5; 

print "a media dos valores apresentados é de $media.";