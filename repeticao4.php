<?php

$multiplicador = 3;

for($contador = 1; $contador <= 10; $contador++){
    $resultado = $multiplicador * $contador;
    echo "$multiplicador x $contador = $resultado" . PHP_EOL;
}