<?php//TAG de inicio do PHP

/*
Comentario de Bloco
*/
//Aula 01

$nomeCompleto="Vitor Andrade Valles";

$saudacao="Bem vindo!!!";
a
//Said

print $nomeCompleto;
echo $saudacao;
echo $saudacao. "" . $nomeCompleto;

//Aula02

//Converter todos os caracteres em maiusculos

$nomeMaisculo=strtoupper($nomeCompleto);

//converte todos os caractres em minusculos
$nomeMinusculo=strtolower($nomeCompleto);
//TAG de fim do PHP

$parte=substr($nomeCompleto, 6)

$parte = substr($nomeCompleto,0,6)

//Manipulando cpf para aparecer apenas alguns caracteres
$cpf="000.000.000.00";

$cpfI=substr($cpf,0,3);
$cpfF=substr($cpf,12,2);

$cpfSaida=$cpfI.".XXX.XXX-".$cpfF;

$parte=substr($nomeCompleto,6, -7);

$teste="PHP";
$parte=str_pad($teste, 5, "*", STR_PAD_LEFT);
$parte=str_pad($teste, 5, "*", STR_PAD_BOTH);
$parte=str_pad($teste, 5, "*", STR_PAD_RIGHT);
//TAG de Fim do PHP
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            echo $saudacao . "" . $nomeCompleto;
        ?>
    </p>
    <hr>
    <p> <?=$saudacao?> <?=$nomeCompleto?></p>

    <hr>
    <p><?=$nomeMaisculo?></p>
    <hr>
    <p><?=$nomeMinusculo?></p>

    <p><?=$parte?></p>

    <p><?=$cpfI?>.XXX.XXX-<?=cpfF?></p>
    
</body>
</html>