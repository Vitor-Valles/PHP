<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    $nome=$_POST['nome'];
    $materia=$_POST['materia'];
    $bim1=$_POST['bim1'];
    $bim2=$_POST['bim2'];
    $bim3=$_POST['bim3'];
    $bim4=$_POST['bim4'];

    $notaF=($bim1+$bim2+$bim3+$bim4)/4;

    if($notaF >=7){
        $RS = "Aprovado";
    }else if($notaF >=5){
        $RS = "Em recuperação";
    }else if($notaF <5){
        $RS = "Reporvado";
    }

    echo "<br>Nome do aluno:$nome <br> Meteria:$materia<br>Nota final:$notaF<br>Resultado:$RS";


?>
</body>
</html>