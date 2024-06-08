<?php

function factorial($n)
{
    if ($n == 1) {
        echo $n . PHP_EOL;
        echo "<br>";
        return 1;
    } else {
        echo "$n *";
        return $n*factorial($n - 1);
        echo "<br>";
    }
}


echo "Factorial of 5= <br> " . factorial(5);
?>