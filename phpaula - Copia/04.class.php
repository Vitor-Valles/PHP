<?php
    // Crie um arquivo com o nome: 04.class.php

    //Interface
    /* Uma interface em PHP é uma estrutura que define um conjunto de métodos que uma classe deve implementar
    diferente de uma classe abstrata, uma interface não pode conter implementações de métodos, ela apenas define
    suas assinaturas
    */
    interface MinhaInterface{
        // O método BomDia(); - diz que qualquer classe que
        // Implemente esta interface deve definir.
        public function Bomdia(); 
    }

    class Uso implements MinhaInterface{
        public function BomDia(){
            echo "Bom Dia :D!!!<br>
            USO da interface";
        }
    }

    $OBJ = new Uso();
?>
<p><?=$OBJ->BomDia();?></p>