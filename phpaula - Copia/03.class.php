<?php 
    // Crie um arqivo om o nome: 03.class.php

    // Classe abstrada

    abstract class PaiAbstrato{
        abstract public function Ola();

    }

    class Filho extends PaiAbstrato{
        public function Ola(){
            print "Olá todos conseguiram os objetivos! :D<br>
            Do metodo abstrato Ola();<br>";
        }
    }

    $OBJ = new Filho();

?>
<h3>Usando metodo abstrato</h3>
<p><?=$OBJ->Ola();?></p>