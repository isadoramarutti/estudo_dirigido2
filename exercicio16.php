<?php

print ("informe o primeiro nota: ");
$n1  = fgets (STDIN);

print ("informe o segundo nota: ");
$n2  = fgets (STDIN);

print ("informe o terceiro nota: ");
$n3  = fgets (STDIN);

print ("informe o quarto nota: ");
$n4  = fgets (STDIN);

print ("informe o quinto nota: ");
$n5  = fgets (STDIN);

$soma = $n1 + $n2 + $n3 +$n4 + $n5;
$media = $soma/5; 

print "a media dos valores apresentados é de $media.";