<?php
    // Crie um arquivo com o nome: 06.class.php

    // Crie uma classe chamada Pai

    // Crie uma classe chamada Filho e herde Pai
    class Pai{
        // Construtor
        /*
            O método '__cosntructor()' é um conjunto especial chamado construtor.
            Ele é automaticamente chamado quando um novo objeto de classe é criado.

            Neste caso, o construtor da classe 'Pai' imprime a mensagem
        */
        function __cosntructor(){
            print "Este é um construtor de classe. <br>";
        }

    }

    // Crie uma classe chamada Filho e herde pai
    class Filho extends Pai{
        /*
            A classe 'Filho' define seu próprio construtor, que também é um
            método '__constructor()'
        */
        function __cosntructor(){
            /*
                O construtor de classe 'Filho' chama o construtor da classe 'Pai' usando 'parent: __contructor();'
                Isso garante que o construtor da classe base ('Pai'), seja execultado antes de qualquer código adicional
                no construtor da subclassse ('Filho')
            */
        parent:: __cosntructor();
        print "Este é o construtor da subclasse<br>";
        }

    }

    $OBJPAI = new Pai();
    $OBJFILHO = new Filho();

    

?>