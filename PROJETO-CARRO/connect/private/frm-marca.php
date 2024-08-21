<?php
    
    $idMarca = $_GET['idMarca'];

    $sql = "SELECT Marca FROM tbmarca WHERE idMarca = $idMarca";

    include("../connect/conn.php");

    $exc = $connec->query($sql);

    $result = $exc->fetch_assoc();

    $marca = $result ['Marca'];// vetor

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
    <h1>Alterar a Marca: <?=$marca?></h1>
    
    <form action="update-marca.php" method="post">
        <label>Marca: </label><br>
        <input type="text" name="marca" value="<?=$marca?>">
        <input type="hidden" name="idMarca" value="<?=$idMarca?>">

        <input type="submit" value="alterar">
    </form>

    <hr>
    <a henf="todas-marcas.php">Voltar</a>
</body>
</html>