<?php
$est=1;
$prom=0;
while ($est<5)
{
	$nota1=rand(0,5);
	$nota2=rand(0,5);
	$nota3=rand(0,5);
	$nota4=rand(0,5);

	echo "estas son las notas de los estudiantes $est<br>";
	echo "la primera nota es $nota1 <br>";
	echo "la segunda nota es $nota2 <br>";
	echo "la tercera nota es $nota3 <br>";
	echo "la cuarta nota es $nota4 <br>";

	$prom = ($nota1+$nota2+$nota3+$nota4)/4;

	if ($prom == 3.5)
	{
		echo "usted ha ganado $prom <br>";
	} elseif ($prom<3.5)
	 {
		echo "usted perdio $prom <br>";
	} elseif ($prom > 3.4) {
	    echo "usted ha ganado $prom <br>";
	}
 $est++;
}

?>