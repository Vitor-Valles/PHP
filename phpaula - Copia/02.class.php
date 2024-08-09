<?php 
    // Crie um arquivo com o nome: 02.class.php

    // Metodos Privado | Protegido | Publico
    class Pai{
        // Criando metodo Privado
        private function MetodoPrivado(){
            print "Pai: Metodo Privado <br> 
                    Chamada<br>
                    Pai: MetodoPrivado();";
        }
    
        //Criando metodo Protegido
        protected function MetodoProtegido(){
            print "Pai: Metodo Protegido <br> 
                    Chamada<br>
                    Pai: MetodoProtegido();";
        }

        //Criando metodo Publico
        protected function MetodoPublico(){
            print "Pai: Metodo Publico <br> 
                    Chamada<br>
                    Pai: MetodoPublico();";
        }

        //Criando metodo para saida privada sem violar o encapsulamento da regra de segurança
        protected function MetodoPrivadoExit(){
            $this->MetodoPrivado();
        }
        
    }
    

    class Filho extends Pai {
        public function Vandinha(){
            $this->MetodoProtegido();
            $this->MetodoPublico();
            $this->MetodoPrivadoExit();
            // $this->MetodoPrivado();
        }
    }

    $OBJFILHO = new Filho();

?>
<h3>Filho herda todos os metodos do pai - desta forma ok :D!!</h3>
<p><?=$OBJFILHO->Vandinha();?></p>