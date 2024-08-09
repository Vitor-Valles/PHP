<?php
// Crie um arquivo dentro do servidor apacha
// Nome do arquivo: connect.php

// Cria o TimeZone para nossa região
date_default_timezone_set('America/Sao_Paulo');

// Criando as variaveis de controle de configuração par o servidor de dados
$_serverDB = "127.0.0.1:3306"; // ou "localhost:3336" ou "localhost"
$userNameDB = "root";
$passwordDB = "";
$nameDB = "db_contato";

// Criando a conexão MYSQL - mysqli

$conn = @new mysqli(
    //Host
    $serverDB,
    //User
    $userNameDB,
    //Password
    $passwordDB,
    //Name Data Base
    $nameDB
);

if($conn->connect_error){
    $resp = "Erro: ".$conn->connect_errno;
    $resp = $resp. "<br>";
    $resp = $resp. "Erro: ".$conn->connect_errno;
}else{
    $resp = "Sucesso conectado.<br>";
    $resp = $resp. "Host informado: ".$conn->host_info;
    $resp = $resp. "<br>";
    echo "Protocolo versão: ".$conn->protocol_version;
}
?>
<h3><?=$resp?></h3>