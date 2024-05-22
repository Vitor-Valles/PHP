<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Crie um program que após receber os dados de um funcionario:
        Nome, RG , CPF , Data de nascimento, Tipo sanguinio e fator RH,
        Cargo, Departamento, Salário Bruto, Horário de entrada, Horário de saida (levando
        e,m consideração que ele tem uma hora de almoço enre as 12h e as 13h);

        calcule:
        Tempo de pemanencia na mepresa em relação ao tempo de sua entrada e saida
        descontando 1h e almoço;
        Armazena as varivaeis staticas com a table do INSS:
            até R$1.412,00 - 7,5%
            até R$2.666,68 - 9% 
            até R$4.000,00 - 12%
            até R$7.786,02 - 14%
    </p>
    <?php
        $nome = "Vitor Andrade";
        $rg = "00 000 000-0";
        $cpf = "000-000-000-00";
        $dn = "10/12/2005";
        $he = "10:00";
        $hs = "4:00";

        echo "<br>Nome:$nome<br> RG:$rg<br> CPF:$cpf<br> Data de Nascimento:$dn<br> Horario de saida:$he<br> Horario de entrada:$hs<br>";

        echo "
            até R$1.412,00 - 7,5%
            até R$2.666,68 - 9% 
            até R$4.000,00 - 12%
            até R$7.786,02 - 14%
        ";

    ?>
    
</body>
</html>