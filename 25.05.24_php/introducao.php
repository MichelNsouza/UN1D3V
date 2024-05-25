<?php

$exibirNome = true;
function dizerNomeCompleto($nome, $sobrenome)
{
    return "$nome $sobrenome";
}
function deveExibirNome($nome, $sobrenome)
{
    
    $nomeCompleto = dizerNomeCompleto($nome, $sobrenome);

    return Strlen($nomeCompleto)>5;

}

$nome = "Michel";
$sobrenome = "Souza";

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>
    <body>
        <?php if(deveExibirNome($nome, $sobrenome)): ?>
            <h1>
                bem vindo ao site de <?php echo dizerNomeCompleto($nome, $sobrenome); ?>
            </h1>
        <?php endif ?>
    </body>
</html>
