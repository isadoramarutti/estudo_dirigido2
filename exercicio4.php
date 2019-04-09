<?php

print "Digite uma letra: ";
$letra = (string) fgetc (STDIN);

if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u"){
    echo "sua letra é uma vogal";
}
else { 
    echo "sua letra é uma consoante";}