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
for ($i=0; $i < $Veces ; $i++) { $Ran=mt_rand(0,9);
	switch ($Ran) {
			case '0':
			# code...
			break;
			case '1':
			# code...
			break;
			case '2':
			# code...
			break;
			case '3':
			# code...
			break;
			case '4':
			# code...
			break;
			case '5':
			# code...
			break;
			case '6':
			# code...
			break;
			case '7':
			# code...
			break;
			case '8':
			# code...
			break;
			case '9':
			# code...
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
	

?>
</body>
</html>
<!--Se compenta con esto-->