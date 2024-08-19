<?php
    include("../connect/conn.php");

    $sql = "SELECT * FROM tbmarca";

    /* Consultando a Informação dentro do Banco de Dados pelo >>""id 'idmarca' só a dá Linha = 4""<< 
    $sql = "SELECT * FROM tbmarca WHERE idmarca = 4";

    // Consultando a Informação dentro do Banco de Dados da >>""Coluna 'marca' com o nome = 'AUIDI' ""<< //
    $sql = "SELECT * FROM tbmarca WHERE marca = 'AUDI";

    // $exc = mysqli_query($conn,$sql);

    */

    //$exc = mysqli_querry($conn,$sqli);
    $exc = $connec->query($sql);

    if($exc->num_rows > 0){
        while($row = $exc->fetch_assoc()){
            echo "idMarca: ".$row["idMarca"]."| Marca: ".$row["Marca"] ."<br>";
        }
    }else{
        echo "Marca não encontrada"
    }

    /* PASSO-A-PASSO:

    *if() <= Loop paraler o contéudo da Tabela >>"tbmarca"<<.
    
    *if($exc->) <= Variavel que vai receber Tudo da TABELA >>""tbmarca""<<. 
    
    *if($exc->num_rows) <= 'num_rows' = Comando para buscar a Linha.
    
    *if($exc->num_rows > 0) <= Loop para comecar a buscar os Contéudo da tabela 'tbmarca' 
    */


?>