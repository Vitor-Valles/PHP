<?php
    $idMarca = $_POST['idMarca'];
    $marca = $_POST['marca'];

    $sql = "UPDATE tbmarca SET Marca = '$marca' WHERE idMarca = $idMarca";

    include("../connect/conn.php");

    $exc = $connec->query($sql);

    if($exc){
        $resp = "A marca $marca, foi alterada com sucesso!";
    }else{
        $resp = "ERRO - ao alterar a marca $marca!";
    }
    $connec->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Marca</title>
</head>
<body>
    <h1>Marca <?=$marca?></h1>
    <p><?=$resp?></P>
    <hr>
    <a href="todas-marcas.php">Voltar</a>    
</body>
</html>