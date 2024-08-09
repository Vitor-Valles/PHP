<?php
    //Crie um arquivo com o nome: 05.class.php
    //Crie uma interface
    interface Pai{
        public function Fim();
    }

    //Class filho
    class Filho implements Pai{
        // Metodo Final
        /*
          o uso da palavra 'final' no método Fim(), gerante que o comportamento
          desse método é "final". E por sua vez não podera ser alterada por subclasses
        */
        final public function fim(){
            print "imprime o método final sem mudar seus valores em Fim();
            !<br>";
        }
    }

    $OBJ = new Filho();
?>
<p><?=$OBJ->Fim();?></p>