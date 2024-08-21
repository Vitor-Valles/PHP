<?php 
    $idMarca = $_GET['idMarca'];

    $sql = "DELETE FROM tbmarca WHERE idMarca = $idMarca";

    include("../connect/conn.php");

    $exc = $connec->query($sql);

    if($exc){
        $resp = "Marca do veiculo excluida com sucesso!";
    }else{
        $resp = "ERRO - ao excluir marca!";
    }
    $connec->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Marca</title>
</head>
<body>
    <h1>Excluir Marca</h1>
    <p><?=$resp?></p>
    <hr>
    <a href="todas-marcas.php">Voltar</a>    
</body>
</html>