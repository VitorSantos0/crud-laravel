<?php

/* foreach($_POST as $chave => $valor ){
    echo $chave."<br>";
}

$eventos = ['ssa'=> 1, 2 => 'sp',3 => 'mg'];

foreach($eventos as $chave => $valor){
    echo $chave."<br>";
}

foreach($_POST as $chave => $valor){
    $$chave = $valor;
}

echo $evento."<br>";
echo $preco."<br>";
echo $taxa."<br>"; */

$valoratual = 850; // registro
$upgrade = 500; // valor adiquido da compra
$limite = 1000; // registo

if($valoratual + $upgrade > $limite):
    $valoratual = $valoratual + ($limite - $valoatual);
else:
    $valoatual += $upgrade;
endif;