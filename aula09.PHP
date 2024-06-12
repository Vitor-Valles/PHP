<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Trabalhando com Matrizes</h1>
    <?php 
    
    //As virgulas separam as colunas
        $matriz = array(
            ["0,1","0,2","0,3","0,4"],
            ["1,1","1,2","1,3","1,4"]
        );
        
        //Matriz tridimensional
        echo $matriz[0][1];
        echo "<hr>";
    
        $agenda = [
                'Vitor' =>[
                        'telefone' => ['11 - 00000-0000', '11 - 00000-0000'],
                        'email' => ['vitor.avalles@senacsp.edu.br","vitorvalles25@gmail.com'],
                        'data-nascimento ' => ['00/00/0000']
                ],
                'fulano' =>[
                        'telefone' => ['11 - 00000-0000", "11 - 00000-0000'],
                        'email' => ['fulano.fulano@senacsp.edu.br","fulano25@gmail.com'],
                        'data-nascimento' => ['00/00/0000']
                ],
                'ciclano' =>[
                    'telefone' => ['11 - 00000-0000", "11 - 00000-0000'],
                    'email' => ['ciclano.ciclano@senacsp.edu.br','ciclano25@gmail.com'],
                    'data-nascimento' => ['00/00/0000']
            ]
            ];

            //linha coluna profundidade
            echo $agenda['fulano']['data-nascimento'][0];
            echo "<hr>";
            echo $agenda['ciclano']['email'][0];
            echo "<hr>";

        //Se tirar os colchetes volta a ser bidimencional
        //Agenda bidimensional

            $agenda2 =[
                'Vitor' =>[
                    'telefone' => '11 - 00000-0000',
                    'email' => 'vitor.avalles@senacsp.edu.br',
                    'data-nascimento' => '00/00/0000'       
            ],
        ];

        echo $agenda2['Vitor']['email'];
        echo "<hr>";

        //Agenda multidimensional

        $agenda2 =[
                'Vitor' =>[
                    'telefone' => [
                        'whatsapp' => ['11 - 00000-0000'],
                        'fixo' => '11 - 00000-0000'
            ],   
            'email' => 'vitor.avalles@senacsp.edu.br',
            'data-nascimento' => '00/00/0000'
            ],
        ];

        echo $agenda2['Vitor']['telefone']['whatsapp'][1];
        echo "<hr>";
        echo $agenda2['Vitor']['telefone']['fixo'];
        echo "<hr>";

        //outra forma de criar
        //as linhas tem que ter nome unico ja as linhas podem ter nomes iguais
        $matriz2 = array(
            array("a0","b1","c2"),
            array("d0","e1","f2")
        );
        echo $matriz2[1][2];
        echo "<hr>";

        //matriz tridimensional
        $matriz3 =[
            [
                [
                    ["0","1"],
                    12
                ],//coluna0
                [2],//coluna1
                [3,4],//coluna2
            ]//linha 0
        ];

        echo $matriz3[0][0][0][1];
        echo "<br>";
        echo $matriz[0][0][1];//imprime o numero 12
    
    ?>
    
</body>
</html>