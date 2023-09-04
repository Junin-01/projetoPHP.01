<?php

$idade = 16;
$numeroDePessoas = 1;

echo "vc so pode entrar com 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "vc tem $idade anos. Pode entrar sozinho";
} else if($idade >= 16 && $numeroDePessoas > 1){
        echo "Voce tem $idade anos, está acompanhado(a), então pode entrar.";
    }else{
    echo "voce so tem $idade anos. Voce nao pode entrar";
}



echo PHP_EOL;
echo "Adeus!";