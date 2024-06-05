<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento dos valores</title>
</head>
<body>
    <p>
        Crie um program que após receber 3 valores inteiros, valida se os valores fornecidos formam quaç tipo de 
        triângulo. Ap[os. imprima qual triângulo foi formado:
        3 lados iguais (equilátero)
        2 lados iguais e um diferente (isósceles)
        3 lados diferentes (escaleno)
    </p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>numero 1</label><br>
        <input type="text" name="lad1" required><br>
        <label>numero 2</label><br>
        <input type="text" name="lad2" required><br>
        <label>numero 3</label><br>
        <input type="text" name="lad3" required><br>
        <input type="submit">


    </form>
    
</body>
</html>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if($lad1 = $_POST['lad1'];)
            
        
            $lad2 = $_POST['lad2'];
            $lad3 = $_POST['lad3'];
            

            if($lad1 == $lad2 && $lad2 == $lad3){
                $resp = "e tiangulo e equilatero";
            }elseif($lad1 == $lad2 && $lad2 != $lad3){
                $resp = "e triangulo e isosceles";
            }else{
                $resp = "e triangulo e escaleno";
            }        
            echo "$resp";
        }
        

        
    
    
    ?>