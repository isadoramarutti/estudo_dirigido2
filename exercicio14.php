<?php
$minimo  =  1 ;
$maximo  =  50 ;
$numero  =  $minimo  +  1 ;
 
while  (  $numero  <  $maximo )  {
    $numero ++;
	if ($numero % 2 ==0) {
		continue;}
		
	print  "$numero   \n " ;
}
?>