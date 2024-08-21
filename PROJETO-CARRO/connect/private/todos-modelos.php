<?php
include ("../connect/conn.php");

$marca = $_GET['marca'];

$sql = "SELECT idMarca FROM tbmarca WHERE marca='$marca'";

$exc = $connec->query($sql);

// Para exibir o >>""id""<< da marca;
if($exc->num_rows > 0){
    while($row = $exc->fetch_assoc()){
        $idMarca = $row['idMarca'];
    }
}


// SAIDA:
// echo $idmarca;

// Reutilizando a mesma Variavel  
$sql = "SELECT * FROM tbmodelo WHERE idMarca=$idMarca";
$exc = $connec->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$marca?> conheça os modelos da marca</title>
</head>
<body>
    <h1>Conheça todos os Modelos da Marca:  <?=$marca?></h1>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Modelo</td>
        </tr>
        <?php
        if($exc->num_rows > 0){
            while($row = $exc->fetch_assoc()){
                $idModelo = $row ["idModelo"];
                $modelo = $row ["Modelo"];
                echo "<tr>";
                echo "<td><a href='todas-versoes.php?modelo=$modelo'>".$idModelo."</a></td>";
                echo "<td><a href='todas-versoes.php?modelo=$modelo'>".$modelo."</a></td>";
                echo "</tr>";
            }
        }else{
            echo "<tr>";
            echo "<td colspan = '2'>"."Modelo não Encontrado !!"."</td>";
            echo "</tr>";
           
        }

        ?>
    </table>

     <!-- Abaixo Criando um >>""FORMULARIO para inserir novos dados dentro do banco de Dados""<<.; -->
     <hr>
    <form method="post" action="grava-modelo.php" >
        <input type="hidden" name="idMarca" value="<?=$idMarca?>">
        <input type="hidden" name="marca" value="<?=$marca?>">

        <label>Modelo do Veiculo</label><br>
        <input type="text" name="modelo" id="modelo"><br>
        <input type="submit" value="gravar">
    </form>
    <a href="todas-marcas.php" value="gravar">Voltar</a>
</body>
<?php $connec->close();// <= para fechar o acesso ao banco de dados ?>
</html>
