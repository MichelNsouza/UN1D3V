<?php

$nome = 'unidev';

$participantes = [
    "michel",
    "tifani",
    "henrique",
    "pablo",
    "elder",
    "isabela"
];

function filtrarNome($listaNome, $tamanho = 5)
{
    $novaLista = [];
    foreach($listaNome as $nome){
        if(strlen($nome) <= $tamanho){
            $novaLista[] = $nome;
        }

    }
    return $novaLista;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>
    <body>
            <h1>
                bem vindo ao site de <?php echo $nome;?>
            </h1>

            <h2>
                Participantes
            </h2>

            <ul>
                <?php foreach(filtrarNome($participantes) as $participante):?>
                <li><?php echo $participante ?></li>
                <?php endforeach?>
            </ul>

    </body>
</html>
