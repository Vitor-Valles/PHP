<?php
    /* Grava os dados do formulario no banco de dados */

    include("connect.php");

    $nome = $_POST['nome'];
    $tel = $_POST['telefone'];
    $email = $_POST['email'];   
    $assunto = $_POST['assunto'];
    $descricao = $_POST['descricao'];

    $data = date('y-m-d');
    $hora = date('H:i');

    $querySQL = "INSERT INTO tb_contato (idContato, nome, telefone, email, assunto, descricao, data, hora)
    VALUES(NULL, '$nome', '$tel', '$email', '$assunto', '$descricao', '2024-08-08', '10:03:00')";


    //if(mysqli_query($conn,$querySQL)){
    if(mysqli_query($querySQL)){
        $resp = "Dados gravado com sucesso";
    }else{
        $resp = "ERRO ao gravar dados: " . mysqli_error($conn);
    }

    $conn->close();
?>

<?=$resp?>