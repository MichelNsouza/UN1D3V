<?php

$r = "";

function baianificador($p){

    $termosLaele = [
        "caruru" => "carurivis",
        "umbu" => "umbivis",
        "cupuacu" => "cupuacivis",
    ];

    if(!in_array(strtolower($p), array_flip($termosLaele))){
        return $p;
    }
    return $termosLaele[strtolower($p)];
}

if(count($_GET)>0){

$nome = $_GET['nome'];
$email = $_GET['email'];
$prato = $_GET['prato'];

$nome = str_replace("aulo", "aula", $nome);
$email = str_replace(".com", ".com.br", $email);
$prato = baianificador($prato);

    $r.= "nome: {$nome}\n";
    $r.= "email: {$email}\n";
    $r.= "prato: {$prato}";
}

$r = file_put_contents('bd.txt',$r);

echo nl2br($r);