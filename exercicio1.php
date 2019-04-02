<?php

print "digite o valor do primeiro número: ";
$n1 = fgets (STDIN);

print "digite o valor do segundo número: ";
$n2 = fgets (STDIN);

if ( $n1 > $n2) {
    print "o maior valor é $n1 ";
}
else 
    print "o maior valor é $n2 ";
