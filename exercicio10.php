<?php

print "qual o valor de a?: ";
$a = fgets (STDIN);

if ($a == 0){
print "Essa não é uma função de segundo grau!";
}

else {

print "qual o valor de b?: ";
$b = fgets (STDIN);

print "qual o valor de c?: ";
$c = fgets (STDIN);

$delta = pow($b,2)- (4*$a*$c); 

if ($delta < 0) {
	print "O delta possui valor negativo, sua operação não tem raizes!";}

elseif ($delta == 0) {

	$x1delta0 =  (-$b) + sqrt($delta)/(2*$a);

	print "O delta calculado possui paneas uma raiz real, $x1delta0 ";}

elseif ($delta > 0) {
$x1 =  (-$b) + sqrt($delta)/(2*$a);
$x2 =  (-$b) - sqrt($delta)/(2*$a);

print "o valor de a é $a, o valor de b é $b, o valor de c é $c, o valor do delta é $delta, o valor de x1 é $x1 e o valor de x2 é $x2";}
}