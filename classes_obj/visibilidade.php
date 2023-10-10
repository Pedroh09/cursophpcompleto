<div class="titulo">Visibilidade</div>


<?php 

    class VisibilidadeA {

        public $publico = "publico";
        protected $protegido = "protegido";
        private $privado = "privado";

        
        public function MostrarVisibilidade(){

            echo "Classe Visibilidade Public = {$this->publico}<br>";
            echo "Classe Visibilidade Protegido = {$this->protegido}<br>";
            echo "Classe Visibilidade privado = {$this->privado}<br>";
        }

        public function vaiPorHeranca(){

            echo "Irei ser transmitido por herança <br>";

        }


    }

    $visi = new VisibilidadeA();
    echo $visi->publico . "<br>";
    $visi ->MostrarVisibilidade();



    class VisibilidadeB extends VisibilidadeA {

      

        
        public function MostrarVisibilidadeB(){

            echo "Classe VisibilidadeB+ Public = {$this->publico}<br>";
            echo "Classe VisibilidadeB Protegido = {$this->protegido}<br>";
            echo "Classe VisibilidadeB privado = {$this->privado}<br>";

            parent::vaiPorHeranca();
        }

      


    }

        echo "<br>";
        $visiB = new VisibilidadeB();
        $visiB->MostrarVisibilidadeB();
        $visiB->MostrarVisibilidade();
        $visiB->vaiPorHeranca();

?>