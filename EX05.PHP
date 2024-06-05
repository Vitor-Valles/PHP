<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Desenvolva um programa que recebe um número inteiro positivo fornecido pelo usuário e 
    verifica se esse número é primo ou não. Para isso, você pode criar uma função que recebe o número como entrada e retorna true se o número for primo e false caso contrário.
    Um número é considerado primo se for divisível apenas por 1 e por ele mesmo.
    Para implementar essa verificação, você podes inteiros de 2 até a raiz quadrada 
    do número. usar uma estrutura de repetição para iterar sobre os possíveis divisores do número, que são os número</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <label>Digite um numero para ver se ele e primo<BR><label>
    <input type="text" name="numero" placeholder="Digite um numero" required>
    <input type="submit" value="Enviar">
    </form>

    
</body>
</html>
<?php 
    if ($_SERVER ["REQUEST_METHOD"] == "POST"){

        $numero = $_POST ["numero"];

        $numero = trim($numero);

        if(filter_var($numero, FILTER_VALIDATE_INT) == true){
            echo "<BR>o número $numero é um numero invalido";
        }else{
            echo "<BR>o valor e invalido digite novamente!!!!";
        }

        function ehPrimo($num) {
            if ($num <= 1) {
                return false;
                echo "Numero invalido!!";
            }
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if(ehPrimo($numero)){
            echo "O número $numero é primo.";
        }else{
            echo "O número $numero não e primo.";
        }

    }



?>