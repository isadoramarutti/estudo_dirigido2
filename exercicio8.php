<?php

print ("informe o preço primeiro produto: ");
$n1  = fgets (STDIN);

print ("informe o preço segundo produto: ");
$n2  = fgets (STDIN);

print ("informe o preço terceiro produto: ");
$n3  = fgets (STDIN);

If ($n1 > $n2 and $n2< $n3) {
print ("o produto mais barato é o de $n2 reais ");}

elseif ($n2 > $n1 and$n1< $n3) {
print ("o produto mais barato é o de $n1 reais ");}

elseif ($n1 > $n3 and $n3< $n2) {
print ("o produto mais barato é o de $n3 reais ");}