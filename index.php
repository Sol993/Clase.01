<html>
<head>
	<title></title>
</head>
<body  text="green" >
<h1> Hola Mundo</h1><br>
<?php 
	$Nombre="Yanina";
	echo "<h2>PHP</h2>";
	echo "<h1>$Nombre</h1>"; 
	echo 'Hola php soy '.$Nombre;
	echo "<br>";
	echo "<br>";
	echo(mt_rand(1,100) . "<br>");//Genera un numero random mt_rand(min,max)
	
	$Veces=10;
	$aux=0;
	$con0=0;
	$con1=0;
	$con2=0;
	$con3=0;
	$con4=0;
	$con5=0;
	$con6=0;
	$con7=0;
	$con8=0;
	$con9=0;
for ($i=0; $i < $Veces ; $i++) { $Ran=mt_rand(0,100);
	switch ($Ran) {
			case '0':
			 $con0=$con0+1;
			break;
			case '1':
			$con1=$con1+1;
			break;
			case '2':
			$con2=$con2+1;
			break;
			case '3':
			$con3=$con3+1;
			break;
			case '4':
			$con4=$con4+1;
			break;
			case '5':
			# code...
			$con5=$con5+1;
			break;
			case '6':
			# code...
			$con6=$con6+1;
			break;
			case '7':
			# code...
			$con7=$con7+1;
			break;
			case '8':
			# code...
			$con8=$con8+1;
			break;
			case '9':
			# code...
			$con9=$con9+1;
			break;
		
		default:
			# code...
			break;
	}
	echo "<br>";
	$aux=$i+1;
	echo "$aux )";
	echo "$Ran";

}
echo "<br>";
$aux=0;$aux=($con0*100)/10;
echo 'El numero 0 salio %'.$aux;
echo "<br>";
$aux=0;$aux=($con1*100)/10;
echo 'El numero 1 salio %'.$aux;
echo "<br>";
$aux=0;$aux=($con2*100)/10;
echo 'El numero 2 salio %'.$aux;
echo "<br>";
$aux=0;$aux=($con3*100)/10;
echo 'El numero 3 salio %'.$aux;
echo "<br>";
$aux=0;$aux=($con4*100)/10;
echo 'El numero 4 salio %'.$aux;
echo "<br>";
$aux=0;$aux=($con5*100)/10;
echo 'El numero 5 salio %'.$aux;echo "<br>";
$aux=0;$aux=($con6*100)/10;
echo 'El numero 6 salio %'.$aux;echo "<br>";
$aux=0;$aux=($con7*100)/10;
echo 'El numero 7 salio %'.$aux;echo "<br>";
$aux=0;$aux=($con8*100)/10;
echo 'El numero 8 salio %'.$aux;echo "<br>";
$aux=0;$aux=($con9*100)/10;
echo 'El numero 9 salio %'.$aux;echo "<br>";
	

?>
</body>
</html>
<!--Se compenta con esto-->