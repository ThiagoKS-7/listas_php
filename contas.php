<?php
/*
* Exemplo de foreach, count e arrays associativos
*/
$contasCorrentes = [
    ['titular' => 'Vinicius', 'saldo' => 2000.67],
    ['titular' => 'Maria', 'saldo' => 20000.90],
    ['titular' => 'Roberto', 'saldo' => 500.21],
];
echo "COM FOR: \n";
//pra ver a length aqui tem q usar count(list)
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'];
    echo " - R$";
    echo $contasCorrentes[$i]['saldo'] . PHP_EOL;
}
echo "\nCOM FOREACH: \n";
//foreach(list as item)
foreach ($contasCorrentes as $cont) {
    echo $cont['titular'];
    echo " - R$";
    echo $cont['saldo'] . PHP_EOL;
}

/*
* Adição em arrays
*/
// se o array é numérico, ele adiciona normal, mas se tem key tem q especificar
$contasCorrentes[] = ['titular' => 'Novo titular', 'saldo' => 300.87];
echo "\nCOM FOREACH DPS DE ADICIONAR: \n";
//foreach(list as item)
foreach ($contasCorrentes as $cont) {
    echo $cont['titular'];
    echo " - R$";
    echo $cont['saldo'] . PHP_EOL;
}

$contasCorrentes[0]['saldo'] = $contasCorrentes[0]['saldo'] - 100;
echo "\nFOREACH DPS DE SACAR: \n";
//foreach(list as item)
foreach ($contasCorrentes as $cont) {
    echo $cont['titular'];
    echo " - R$";
    echo $cont['saldo'] . PHP_EOL;
}


// caso o array seja de key, mas tu tentar adicionar um indice numérico, ele guarda no 0
echo "\nBIZARRICES NOS TIPOS DE KEYS: \n";
$array = [
    1 => 'a',
    '1' => 'b', // converte pra 1
    1.5 => 'c', // converte pra 1
    true => 'd', // true vale 1
];
foreach ($array as $item) {
    echo $item . PHP_EOL;
}

