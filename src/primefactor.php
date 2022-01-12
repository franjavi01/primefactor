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
    }else{
        echo "<h1>El número " . $primeNumber . " no es primo</h1><br>";
    }
    
$num = floatval($_POST['primos']);

function factor($n)
{
    $factorList = [];
    $limit = sqrt($n) * 10;
    for ($i = 2; $i <= $limit && $n > 1; $i++) {
        while ($n > 1 && $n % $i === 0) {
            $factorList[] = $i;
            $n = $n / $i;
        }
    }
    echo "<h1>Los factores son:</h1><br>";

    foreach($factorList as $num){
    echo "<h1>";
    echo $num;
    
    }
    
    
}
factor($num);

echo "<br>";
echo "<br>";
echo "<a href='./index.php'><< Atrás</a>";
    


