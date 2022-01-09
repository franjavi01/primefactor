<?php

declare(strict_types=1);

function factors(int $number): array
{
    throw new \BadFunctionCallException("Implement the factors function");
}

function getPrimo($num) {
 $contador = 1;
 for ($primeNumber=2; $primeNumber<=$num; $primeNumber++) {
     if ($num%$primeNumber==0) {
         $contador = $contador + 1;
     }
 }

if ($contador==2) {
 return true;
    
} else {
    return false;
}

}

$primeNumber = $_POST['primos'];

    if (getPrimo($primeNumber)) {
       echo "<h1>El número " . $primeNumber . " es primo</h1><br>";
       echo "<a href='./index.php'><< Atrás</a>";  
    }else{
        echo "<h1>El número " . $primeNumber . " no es primo</h1><br>";
        echo "<a href='./index.php'><< Atrás</a>"; 
    } 
    


