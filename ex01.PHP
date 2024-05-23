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
        
    </p>
<?php
        $inss1 = "R$1.412,00 - 7,5%";
        $inss2 = "R$2.666,68 - 9%";
        $inss3 = "R$4.000,00 - 12%";
        $inss4 = "R$7.786,02 - 14%";

        echo "<br   >$inss1";
        echo "<br>$inss2";
        echo "<br>$inss3";
        echo "<br>$inss4<hr>";
        
        
        $nome = "Vitor Andrade";
        $rg = "00 000 000-X";
        $cpf = "000-000-000-00";
        $dn = "10/12/2005";
        $dp = "Programação";
        $salb = 300.000;
        $tipoS = "AB-";
        
        echo "<br>Nome:$nome<br> RG:$rg<br> CPF:$cpf<br>  Data de Nascimento:$dn<br> Departamento:$dp<br> Salario Bruto:$salb Tipo Sanguinio:$tipos$frh<br>";

        $horaE = "07:54";
        $horaS = "18:15";

        $horaEc = substr($horaE, 0,2);
        $minEc = (substr($horaE, 3))/60;
        $horaSc = substr($horaS, 0,2);
        $minSc = (substr($horaS , 3))/60;

        $permHe = ($horaSc + $minSc);
        $permHs = ($horaEc + $minEc);

        $perm = ($permHe - $permHs) - 1.00;
        
        echo $perm;

        $minTc = (substr($perm,2));
        $minTc = "0.$minTc";
        $minTc = $minTc*60;

        $horaTc = (substr($perm, 0,1));

        $horaP = $horaTc. ":". $minTc;

        echo "<br>hora de entrada:$permHs <br> hora saida:$permHe<br>horas trabalhadas:$horaP ";


        
?>
    
</body>
</html>