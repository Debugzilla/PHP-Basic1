<html>
<head>
    <title>Exercicis de PHP</title>
</head>
<body>

<?php


 // exercici 1 defineix una variable de cada tipus: integer,double,string,boolean
//imprimeixles per pantalla.
//despres crea una constant que inclogui el teu nom i mostraho en format titol per pantalla

$ValorNumerico = 30; //variable integer
$ValorDouble = 3.14; //variable Double
$ValorString = "Hola"; //Variable string
$ValorBool = True; //Variable boolean

define("Nom", "Arnau");

echo "<u>Exercici 1</u>" ."<br/>";
echo "Variable integer = " .$ValorNumerico . "<br/>";
echo "Variable Double = " .$ValorDouble . "<br/>";
echo "Variable String = " .$ValorString . "<br/>";
echo "Variable Boolean = " .$ValorBool . "<br/>";
echo "<h1>".Nom ."</h1>"; //visualitza la constant en format titol



//Exercici 2
//Imprimeix per pantall "Hello World" utilitzant una variable. en acabat:

echo "<u>Exercici 2</u>" ."<br/>";
$V_Hola = "Hello, World!";

echo $V_Hola . "<br/>";

//transforma tots els caracters de l'string a majuscules i imprimeix en pantalla

$V_Hola = strtoupper($V_Hola);
echo $V_Hola . "<br/>";

//Imprimeix per pantalla la mida (longitud) de la variable.

$Long = strlen($V_Hola);
echo "Longitud del string : ". $Long . "<br/>";

//Imprimeix per pantalla l'string en ordre invers de caràcters.
$O_Invers = strrev($V_Hola);
echo "Orden inverso del string = " .$O_Invers ."<br/>";


//Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.
$Content = " Aquest és el curs de PHP";
echo $V_Hola  . $Content  ."<br/><br/>";


//Exercici 3
//Declara dues variables X i Y de tipus INT
//dues variables de tipus double de tipu double i assigna a cadascuna un valor. 

$X = 10;
$Y = 30;
$N = 3.14;
$M = 12.99;
$sumaXY = $X + $Y;
$restaXY = $X - $Y;
$MultiXY = $X * $Y;
$DivXY =  $Y  % $X;
$sumaMN = $M + $N;
$restaMN = $M - $N;
$MultiMN = $M * $N;
$DivMN =  fmod($M,$N);




//Per a X i Y 
//Valor de cada variable
echo "<u>Exercici 3a</u>" ."<br/>";
echo "Valor de X = ". $X . "<br/>";
echo "Valor de Y = ". $Y . "<br/>";

//La suma

echo "La suma de  X  +  Y  = ". $sumaXY . "<br/>";
//La resta
echo "La resta de  Y  -  X  = ". $restaXY . "<br/>";
//El producte
echo "El producte de  X  *  Y  = ". $MultiXY . "<br/>";
//El modul
echo "El modul de  X  %  Y  = ". $DivXY . "<br/>";


//Per N i M realitzaràs el mateix.
//valor de cada variable
echo "Valor de M = ". $M . "<br/>";
echo "Valor de N = ". $N . "<br/>";
//La suma
echo "La suma de  M  +  N  = ". $sumaMN . "<br/>";
//La resta
echo "La resta de  M  -  N  = ". $restaMN . "<br/>";
//El producte
echo "El producte de  M  *  N  = ". $MultiMN . "<br/>";
//El modul amb flotants no funciona, es necesita el fmod
echo "El modul de  M  %  N  = ". $DivMN . "<br/>";

//Per a totes les variables (X, Y, N, M):

//El doble de cada variable.
$DobleX = $X * 2;
$DobleY = $Y * 2;
$DobleM = $M * 2;
$DobleN = $N * 2;
echo "El doble de X = " . $DobleX . "<br/>";
echo "El doble de X = " . $DobleY . "<br/>";
echo "El doble de M = " . $DobleM . "<br/>";
echo "El doble de N = " . $DobleN . "<br/>";


//La suma de totes les variables.
$SumaTotal = $X + $Y + $M + $N;
echo "La suma total de las variables (30 + 10 + 12.99 + 3.14) = " .$SumaTotal . "<br/>";
//El producte de totes les variables.
$ProducteTotal = $X * $Y * $M * $N;
echo "El producto total de las variables (30 * 10 * 12.99 * 3.14) = " .$ProducteTotal . "<br/><br/>";


//Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.

echo "<u>Exercici 3b</u>" ."<br/>";
function Calcular(int $param1, int $param2, string $opt) {

    echo "Bienvenidos a la calculadora virtual"  ."<br/>";

    switch ($opt) {
        case "sumar":
            echo "Habéis seleccionado la opción de sumar." ."<br/>";
            $Sumar = $param1 + $param2;  
            echo  "El resultado de la suma es : " .$Sumar;
            break;
        
        case "restar":
            echo "Habéis seleccionado la opción de restar" . "<br/>";
            $Restar = $param1 - $param2;
            echo "El resultado de la resta es : ". $Restar;
            break;

        case "multiplicar":
            echo "Habéis seleccionado la opción de multiplicar" . "<br/>";
            $Multiplicar = $param1 * $param2;
            echo "El resultado de la multiplicación es : ". $Multiplicar;
            break;

        case "dividir":
            echo "Habéis seleccionado la opción de dividir" . "<br/>";
            $Dividir = $param1 / $param2;
            echo "El resultado de la división es : ". $Dividir . "<br/>";
            break;

    }
    
 
}

Calcular(20, 15, "dividir");



//exercici4
//fes un programa que implementi una funció on es compti fins un determinat nombre
//Si no s'inclou un nombre determinat, el nombre haura de tenir un valor per defecte igual a 10
//A mes aquesta funció ha de tenir un segon parametre que indiqui de quant a quant es compta(de 1en 1, d 2 en 2..)
//El compte s'ha de mostrar per pantalla pas a pas
echo "<br/><br/>";
echo "<u>Exercici 4</u>" ."<br/>";
echo "Contador de numeros" . "<br/>";
function contar($num = 10, $increment = 1) {

   
    for ($i = 0; $i <= $num; $i += $increment) {
        echo $i . "<br/>";
      
    }

    switch ($increment) {
        case 1:
            echo "Esta contando de " . $increment . " en " .$increment;
            break;
        
        case 2:
            echo "Esta contando de ". $increment. " en " .$increment;
            break;
        
        case 3:
            echo "Esta contando de ". $increment." en ".$increment;
            break;
            
        
        case 4:
            echo "Esta contando de ". $increment." en ".$increment;
            break;
        
        case 5:
            echo "Esta contando de ". $increment." en ".$increment;
            break;

    }



}


//Ejemplo contando de 5 en 5
contar(19,5);
echo "<br/>";
//Ejemplo contando de 4 en 4
contar(19,4);
echo "<br/>";
//Valor de defecto
contar();
echo "<br/>";





echo "<br/><br/>";

echo "<u>Exercici 5</u>" ."<br/><br/>";
function avaluar($nota) {
    if ($nota >= 60 ) {
        echo "Es de primera división" . "<br/>";
    } else if ($nota >= 45) {
        echo "Es de segunda división" ."<br/>";
    } else if ($nota >=33) {
        echo "Es de tercera división" ."<br/>";
    } else  {
        echo "Esta suspendido" . "<br/>";
    }

    

}


avaluar(44) . "<br/>";
avaluar(32) . "<br/>";
avaluar(12) . "<br/>";
avaluar(45) . "<br/>";


//Charlie em va mossegar el dit Charlie et mossegara el dit exactament el 50% del temps
// escriu una funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari
echo "<u>Exercici 6</u>" ."<br/>";
echo "Devolver TRUE o FALSE con un 50% de probabilidad" ."<br/>";
function isBitten() {
    return rand(0,1);

}


if(isBitten()){
    echo " Resultado = true";
} else {
    echo "Resultado = false";
}


isBitten();

echo "<br/><br/><br/>";

//exercici1 -Nivell2
//Funcio que determini la quantitat a pagar per una trucada
//Tota trucada que duri menys de 3 minuts te un cost de 10 centims
//Cada minut addicional a partir dels 3 primers es un pas de comptador i costa 5 centims



function PrecioLLamada($minuts) {
    $costBase = 0.10; 
    $costMinAdicional = 0.05; 
    $total = $costBase; 


    if ($minuts > 3) {
        
        $minAd = $minuts - 3;
   
        $total += $minAd * $costMinAdicional;
    }

    echo "La llamada tiene un coste de: " . number_format($total, 2);
}

// Ejemplo de uso
PrecioLLamada(10);

echo "<br/><br/>";


//Exercici2 
//Imagina que som a una botiga on es ven:
//xocolata: 1 euro
//xiclets: 0.50 
//caramels: 1.50

//Implementa un programa que permeti afegir calculs a un total de compres d'aquest tipus.
//Per exemple
//Si comprem 2 xoco, 1 xicle i 1 caramel, que afegeixi el subtotal al total


function botiga($xoco, $xicle, $caramel){

    $PreuXoco = 1;
    $PreuXicle = 0.5;
    $PreuCaramel = 1.5;
    

    $subtotalXoco = $xoco * $PreuXoco;
    $subtotalXicle = $xicle * $PreuXicle;
    $subtotalCaramel = $caramel * $PreuCaramel;

    $total = $subtotalXoco + $subtotalXicle + $subtotalCaramel;

    echo "Subtotal de xocolata: " . $subtotalXoco . " <br/>";
    echo "Subtotal de xiclet: " . $subtotalXicle . " <br/>";
    echo "Subtotal de caramel: " . $subtotalCaramel . " <br/>";
    echo "Total a pagar: " . $total . " <br/>";


}

botiga(2,1,1);























?>






</body>
</html>


