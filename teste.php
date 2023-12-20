<?php

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return $num;
}

$count = 0;

for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        $count++;
        echo "$i\n";
    }
}

echo "Quantidade de números primos entre 1 e 1000 = {$count}";
