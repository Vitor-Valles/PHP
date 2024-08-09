<?php
    /* Configurando uma estrutura de dados via php estruturado 
    realizado pelo docente Nerildo Viana 
    data do dia 08/08/20024 as 8:41
    versão: 0.1
    */

    //Variaveis para socket de conexão mySQL com PHP
    $servRoot = "127.0.0.1:3306";
    $loginRoot = "root";
    $passRoot = "";
    $dbNameRoot = "db_contato";

    $conn = mysqli_connect(
        $servRoot,$loginRoot,$passRoot,$dbNameRoot
    )or die("Não foi possivel se conectar ao banco de dados");

    //mysqli_set_charset($conn,'utf-8'); -- Utulizando no php 5.6 ou 7
    $conn -> set_charset('utf8');

    
?>