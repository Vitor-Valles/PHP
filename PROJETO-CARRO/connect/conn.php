<?php

$_serverDB = "127.0.0.1:3306";
$userNameDB = "root";
$passwordDB = "";
$nameDB = "dbcarro";

$connec = @new mysqli(
    
    $serverDB,
    $userNameDB,
    $passwordDB,
    $nameDB
);

if($connec->connect_error){
    $resp = "Erro: ".$connec->connect_errno;
    $resp = $resp. "<br>";
    $resp = $resp. "Erro: ".$connec->connect_errno;
}else{
    $resp = "Sucesso conectado.<br>";
    $resp = $resp. "Host informado: ".$connec->host_info;
    $resp = $resp. "<br>";
    echo "Protocolo versão: ".$connec->protocol_version;
}
?>
<h3><?=$resp?></h3>