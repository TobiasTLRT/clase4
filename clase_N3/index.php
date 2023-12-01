<?php
//resolucion de la actividad 1
/*echo "Hola mundo";
echo"<br>"; 
//resolucion de la actividad 2
$string="hola mundo";
echo $string;

//resolucion de la actividad 3
$variable1="14";
$variable2=7;
echo"<br>";
echo $variable1 + $variable2;
echo"<br>";
echo $variable1 - $variable2;
echo"<br>";
echo $variable1 * $variable2;
echo"<br>";
echo $variable1 / $variable2;
echo"<br>";
echo $variable1 % $variable2;

//resolucion de la actividad 4
echo"<br>";
$celsius = 20;
    echo $fahrenheit = ($celsius * 9/5) + 32;
    echo "<br>";

    //variables del punto 5
    $baseRectangulo = 18;
    $alturaRectangulo = 12;
    
    // Área del rectángulo
    $areaRectangulo = $baseRectangulo * $alturaRectangulo;
    
    // Perímetro del rectángulo 

    $perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
    echo "<br>";
    echo $areaRectangulo;
    echo "<br>";
    echo $perimetroRectangulo;
    echo "<br>";
    echo "hola mundo"."<br>".$variable1+4 ."<br>"."destruccion" */

$n1 = 7; 
if($n1 > 0){
echo "El número ingresado es un número positivo"."<br>";
}

$n2 = -3;
if($n2 > 1 && $n2 < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10"."<br>";
}

$n3 = 4;
if($n3 >= 10 || $n3<2 ){
    echo "El número ingresado es mayor o igual a 10 o menor a 2"."<br>";
}
else {echo "El número ingresado no pudo ser validado"."<br>";
}
 

$numero1 = 32;
$numero2 = 32;

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;

    echo "La suma es: " . $suma . "<br>";
    echo "La resta es: " . $resta . "<br>";
} 

elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
        $dividido = $numero1 / $numero2;
        $resto = $numero2 % $numero1;

        echo "La multiplicación es: " . $multiplicacion . "<br>";
        echo "La división entera es: " . $dividido . "<br>";
        echo "El resto es: " . $resto . "<br>";}
    else {
    echo "Los números ingresados son iguales" . "<br>";
}


?>

