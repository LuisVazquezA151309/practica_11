
<html>
<head>
<title>Practica_11 php</title>
</head>
<body>



<?php
//nombre del alumno
//usando variables en PHP
echo "<h1>variables</h1>";
$nombre='luis angel';
$apellido='vazquez delgado';
$edad=20;
$salario=49764.97;
$fechaNacimiento='30/08/96';
$estatus=true;
echo $nombre.'<br/>';
echo $apellido.'<br/>';
echo 'NOMBRE COMPLETO:'.$nombre.' '.$apellido .'<br/>';
echo 'TU EDAD ES:'.$edad .'<br/>';
echo 'TU SALARIO ES:' .$salario .'<br/>';

?>
<h1>OPERADORES ARITMETICOS</h1>
<?php
     $a=5;
	 $b=3;
	 $suma=$a+$b;
	  $resta=$a-$b; 
	   $multiplicacion=$a*$b; 
	    $divide=$a/$b .'<br/>';
		echo 'LA SUMA ES:'.$a. '+'.$b.'='.$suma.'<br/>';
		echo 'LA RESTA ES:'.$a. '-'.$b.'='.$resta.'<br/>';
		echo 'LA MULTIPLICACION ES:'.$a.'*'.$b.'='.$multiplicacion.'<br/>';
		echo 'LA DIVISION ES:'.$a. '/'.$b.'='.$divide.'<br/>';
		
?>




</body>
</html>




















