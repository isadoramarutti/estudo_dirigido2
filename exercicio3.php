<?php

print "informe seu sexo: F ou M?:";
$sexo = fgetc (STDIN);

if ($sexo == "M" or $sexo == "m") {
    echo "MASCULINO";
}
elseif ($sexo == "F" or $sexo == "f") {
    echo "FEMININO";
}
else {
    echo "SEXO INVALIDO"; }