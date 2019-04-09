<?php

print ("informe o primeiro número: ");
$n1  = fgets(STDIN);

print ("informe o segundo número: ");
$n2  = fgets(STDIN);

print ("informe o terceiro número: ");
$n3  = fgets(STDIN);

if ($n1 < $n2 and $n2>$n3) {
print ("o maior número é $n2");}

elseif ($n2 < $n1 and $n1>$n3) {
print ("o maior número é $n1");}

elseif ($n1 < $n3 and $n3>$n2) {
print ("o maior número é $n3");}

if ($n1 > $n2 and $n2<$n3) {
print ("o menor número é $n2");}

elseif ($n2 > $n1 and $n1<$n3) {
print ("o menor número é $n1");}

elseif ($n1 > $n3 and $n3<$n2) {
print ("o menor número é $n3");}
