<?php
    // Crie um arquivo com o nome: 01.class.php

    class Pai{
        /* Declaração de variaveis (propriedades)
            Private, Protected, Public
            Private (Privada) - Somente o pai tem acesso
            Proceted (Protegida) - É vista como publica porem protegida
            public (Publica) - Todasas demais classes tera acesso quando
            herdadas do pai 
        */
        // Privada
        private $var1 = "Olá eu sou uma variavel privada! 01.";

        // Protegida
        protected $var2 = "Olá eu sou uma variavel protegida! 02.";

        // Publica
        public $var3 = "Olá eu sou uma variável publica! 03";

        // Criando um metodo
        function bomDia(){
            print "Classe pai Privada: ".$this->var1."<br>";
            print "Classe pai Protegida: ".$this->var2."<br>";
            print "Classe pai Publica: ".$this->var3."<br>";

        }
    }
    /* Herança */
    class Filho extends Pai{
        function boaTarde(){
            Pai::bomDia();

            print "Classe pai Privada: ".$this->var1."<br>";
            print "Classe pai Protegida: ".$this->var2."<br>";
            print "Classe pai Publica: ".$this->var3."<br>";
        }
    }


    // Criar o Objeto

    $OBJPAI = new Pai();
    $OBJFILHO = new Filho();


?>

<h3>Objeto pai</h3>
<p><?=$OBJPAI->bomDia()?>
<h3>Objeto filho</h3>
<p><?=$OBJFILHO->boaTarde()?>