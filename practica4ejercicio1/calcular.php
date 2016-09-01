<?php
$a= $_REQUEST['valor1'];
$b=$_REQUEST['valor2'];
$c=$_REQUEST['valor3'];


if ($_REQUEST['expresion']=='Area'){
$r_area= Area ($a,$b);
echo "el area del rectangulo es: $r_area";

}else
if ($_REQUEST['expresion']=='Expresion') {
$r_expresion= Expresion($a,$b,$c);
echo "el resultado de la expresion es: $r_expresion";
}

function Area ($a,$b){
	$Area=$a*$b;
	return $Area;
}

function Expresion ($a,$b,$c){
	$Expresion= ($a+7*$c)/($b+2-$a)+2*$b;
	return $Expresion;
}


?>