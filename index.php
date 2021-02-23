<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicios de php:</h1>
<?php

echo 'inicio...<br>';

//----------NIVEL 1
//----------Nivel 1: Ejercicio 1: funcion resta 2 num

function resta ($num1, $num2){
    $resta = $num1 - $num2;
    return $resta;
}

//----------Nivel 1: Ejercicio 2: imprimir si par o impar
function par_impar ($num1){
    $modulo = $num1 /2;
    if ($modulo == 0 ){
        $salida = 'par';
    }else{
        $salida = 'impar';
    }
    return $salida;
}

//----------Nivel 1: Ejercicio 3: imprimir si par o impar
function parell_o_imparell ($num1){
    $modulo = $num1 /2;
    if ($modulo == 0 ){
        $salida = 'parell';
    }else{
        $salida = 'imparell';
    }
    return $salida;
}

//----------Nivel 1: Ejercicio 4: contar hasta 10
function contarhasta10 (){
    echo '<h3>Numeros del 1 al 10:</h3><br>';
    for ($i = 1; $i <11; $i++){
        echo 'Num: ' . $i . '<br>';
        }
}

//----------NIVEL 2
//----------Nivel 2: Ejercicio 1: contar hasta 10 de 2 en 2
function contarhasta10_2 (){
    echo '<h3>Numeros del 1 al 10:</h3><br>';
    for ($i = 1; $i < 11; $i=$i + 2){
        echo 'Num: ' . $i . ', ';
        }
    echo '<br>';
}

//----------Nivel 2: Ejercicio 2: contar hasta 10, de 2 en 2, pasando max param
function contarhasta10_2_max ( $numMax ){
    echo '<h3>Numeros del 1 al '. $numMax . ':</h3><br>';
    echo 'Numeros: ';
    for ($i = 1; $i <$numMax ; $i=$i+ 2){
        echo $i . ', ';
    }
    echo '<br>';
}

//----------Nivel 2: Ejercicio 2: contar hasta 10, de 2 en 2, pasando param max, y valor por defecto
function contarhasta10_2_max_xdefecto ( $numMax = 10){
    echo '<h3>Numeros del 1 al '. $numMax . ':</h3><br>';
    for ($i = 1; $i <$numMax ; $i=$i+ 2){
        echo $i . ', ';
    }
    echo '<br>';
}


//----------NIVEL 3
//----------Nivel 3: Ejercicio 1: contar hasta 10 de 2 en 2
function años_olimpicos (){
    echo '<h3>Años olimpicos:</h3><br>';
    echo 'Desde Roma 1960 hasta Rio 2016: <br>';
    $anoIni = 1960;
    $anoFin = 2016;
    for ($i = $anoIni; $i < $anoFin = 2016; $i++){
        $modulo = intval($i % 4);
        //echo 'año ini:' . $i. '-modulo:' . $modulo . '<br>';
        if ($modulo == 0){
            echo 'El año: ' . $i . ' fue año olimpico <br>';
        }
    }
}

//----------Nivel 3: Ejercicio 2: Tienda de caramelos
function calcPrecioParcial($producto, $cantidad){
    $SubTotal = 0.0;
    switch  ($producto){
        case 'Chocolate' : 
            $SubTotal = $cantidad * 1;
            break;
        case 'Chiclet' : 
            $SubTotal = $cantidad * 0.5;
            break;
        case 'Caramelo' : 
            $SubTotal = $cantidad * 1.5;
            break;
    }
    return $SubTotal;
}

function ImpresionTicket (){
    echo '2 Chocolates: ' . calcPrecioParcial('Chocolate', 2) .'<br>';
    echo '1 chicle: '. calcPrecioParcial ('Chiclet', 1) .' <br>';
    echo '1 caramelo: ' . calcPrecioParcial ('Caramelo',1) . '<br>';

    echo 'Total: ' . (
        calcPrecioParcial('Chocolate', 2) +
        calcPrecioParcial ('Chiclet', 1) + 
        calcPrecioParcial ('Caramelo',1)
    );
} 

/* */
//----------Nivel 3: Ejercicio 3: Criba de eratostenes
function criba_de_eratostenes($numMax){
    //echo 'Num max: ' . $numMax. '<br>';
    $numeros = [];

    //carga de array con true
    for ($i =1; $i<$numMax; $i++){
        array_push($numeros, TRUE);
    }
    $numeros[1]=FALSE;

    //echo 'num pos array: '.count($numeros). '...<br>';

    //descarte de numeros
    $i = 2;

    while ($i**2 < $numMax ){

        for ($a = 2; $a <= $numMax/2; $a++){
            //echo 'parte entera nummax entre a => '. $numMax . ":" . $a ."=".  intval($numMax/$a) . '...<br>';
            $res = $i * $a;
            //echo 'i x a => '. $i . " x " . $a ."=".  ($i*$a) . '...<br>';
            $numeros[$res]=FALSE;
        }

        $i = $i + 1;
    }

    //impresion de resultados
    $cnt = 0;
    echo '<h3>Numeros primos entre 2 y '.  $numMax .'</h3><br>';
    for ($i =1; $i<$numMax; $i++){
        if($numeros[$i]==TRUE){
            echo $i . ', ';
            $cnt ++;
        };
    }
    echo '<br>';
    echo 'Total de numeros primos: '. $cnt . '<br>';

}

echo '<h2>Inicio llamadas a funciones:<h2><br>';

echo '<hr>';
//----------------------NIVEL 1
echo '<h1>Nivel 1</h1><br>';

echo '<h3>Nivel 1: Ejercicio 1: funcion resta 2 num.</h3> <br>';
echo 'Resta 25-18 = '. resta(25, 18) . '<br>';

echo '<h3>Nivel 1: Ejercicio 2: imprimir si par o impar.</h3> <br>';
echo 'Edad 25: ' . par_impar(25) . '<br>';

echo '<h3>Nivel 1: Ejercicio 3:</h3> <br>';
echo 'Numero pasado 27: ' . parell_o_imparell(27) . '<br>';

echo '<h3>Nivel 1: Ejercicio 4: Contar hasta 10.</h3> <br>';
echo contarhasta10() . '<br>';

echo '<hr>';
//----------------------NIVEL 2
echo '<h1>Nivel 2</h1><br>';
echo '<h3>Nivel 2: Ejercicio 1: contar hasta 10 de 2 en 2.</h3> <br>';
contarhasta10_2();

echo '<h3>Nivel 2: Ejercicio 2: contar hasta 10 de 2 en 2 con parametros.</h3> <br>';
contarhasta10_2_max(200);

echo '<h3>Nivel 2: Ejercicio 3: contar hasta 10, de 2 en 2 con parametro por defecto.</h3> <br>';
contarhasta10_2_max_xdefecto();

echo '<hr>';
//----------------------NIVEL 3
echo '<h1>Nivel 3<h1><br>';
echo '<h3>Nivel 3: Ejercicio 1: años olimpicos desde 1960 - 2016.</h3> <br>';
años_olimpicos();

echo '<h3>Nivel 3: Ejercicio 2: Tienda de caramelos.</h3> <br>';
ImpresionTicket();

echo '<h3>Nivel 3: Ejercicio 3: Criba de Eratostenes</h3> <br>';
criba_de_eratostenes (5000);

echo 'fin ejercicio ...<br>';
?>
</body>
</html>