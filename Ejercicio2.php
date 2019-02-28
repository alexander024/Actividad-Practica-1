<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 1</title>
</head>

<body>
<form action="ejercicio2.php" method="post">
<center>
  <p><h2>Conversor números decimales a romanos.</p>
  </h2>
  <hr />
  <p>INTRODUCE EN NUMERO </p>
</center>
  <center><input type="number" required="required" min="1" name="txtNumero" autofocus="autofocus" /></center>

</form>
<br />
<br />

<?php
$numero=0;
if(isset($_POST['txtNumero'])){
	$numero=$_POST['txtNumero'];
	echo "Resultado: ".$numero." equivalente a ".romanNumber($numero)." en romanos";
	

	}
	
	
	
function romanNumber($numero){ 
    $miles = array("","M","MM","MMM");
    $centenas = array("","C","CC","CCC","CD","D","DC","DCC","DCCC","CM");
    $decenas = array("","X","XX","XXX","XL","L","LX","LXX","LXXX","XC");
    $unidades = array("","I","II","III","IV","V","VI","VII","VIII","IX");
    $numero = str_split($numero);
    switch(count($numero)){
        case 1: 
            return $unidades[$numero[0]];
        break;
        case 2: 
            return $decenas[$numero[0]].$unidades[$numero[1]];          
        break;
        case 3:                         
            return $centenas[$numero[0]].$decenas[$numero[1]].$unidades[$numero[2]];
        break;
        case 4:                                         
            return $miles[$numero[0]].$centenas[$numero[1]].$decenas[$numero[2]]. $unidades[$numero[3]];
        break;
    }       
}
?></body>
</html>