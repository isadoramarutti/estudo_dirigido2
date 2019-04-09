<?php

print "Digite a base: ";
$base= (float) fgets(STDIN);

print "Digite o expoente: ";
$expoente= (float) fgets(STDIN);

$potencia= ($base**$expoente);
print "resultado é: $potencia";