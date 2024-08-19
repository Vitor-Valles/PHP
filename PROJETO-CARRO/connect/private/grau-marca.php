<?php

    $marca = "VOLKSWAGEN";

    $sql = "INSERT INTO tbmarca(
        idMarca,Marca
    ) VALUES (
        NULL, '$marca'
    )";

    include("../connect/conn.php");

    $exc = mysqli_query($connec,$sql);

    if($exc){
        $resp = "Dados gravados com sucesso!!";
    }else{
        $resp = "ERRO - ao gravar dados!";
        $resp = $resp . mysqli_error($connec);
    }

    echo $resp;

?>