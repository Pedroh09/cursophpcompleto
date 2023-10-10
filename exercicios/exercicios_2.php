<div class="titulo">Mamiferos Pai e filho herança</div>
<?php
class Mamiferos {
    
    public $nome;

    public $tipo;

    public $peso;

    public $mora;

    public $carac;

    
    function __construct($mora,$tipo,$peso,$carac,$nome) {
        $this -> nome = $nome;
        $this -> tipo = $tipo;
        $this -> peso = $peso;
        $this -> mora = $mora;
        $this -> carac = $carac;
    }
    public function mostrarInfo() {

        echo "<br> Bom dia vamos falar sobre o {$this -> nome} e sua raça é {$this -> tipo} ,este animal geralmente tem {$this -> peso} kilos,suas caracteristicas são 
        mamíferos são animais vertebrados, pertencentes à classe Mammalia, que se destacam pela presença de pelos e pela produção de leite.  e sua caracteristica principal é  {$this -> carac} junto
        com isso o seu Habitat natural é {$this -> mora}, isso influencia significativamente em sua alimentação e seu jeito de viver. <br>";

    }        
} 

        $animalNum1 = new Mamiferos ("Cachorro","Golden",34,"são cães de grande porte, amáveis e muito brincalhões
        Se bem treinada","areas abertas ou regiões montanhosas");
        $animalNum2 = new Mamiferos("Baleia","Baleia azul",130.000,"possui uma forte arcada dentária","alimentam-se quase que exclusivamente de krill, podendo ainda ingerir um pequeno número de copépodes",);

        $animalNum1 -> mostrarInfo();

        class Mamiferos_Principal
        
        
        extends Mamiferos {
            public $amamentar;
    
    
        function construct($nome, $respiracao, $comida, $grupo){
            parent::construct($nome, $respiracao, $comida, $grupo);
        }
    
        function __destruct(){
            echo "ELE MAMA";
    
        }
    
        public function ApresentarAnimal(){
            echo "amamentam";
            parent::ApresentarAnimal();
        }
    
    
    }
    
    $animal6 = new Mamifero("Bicho Preguiça", "Pulmonar", "Inseto", "Placeubio");
    
    $animal6->ApresentarAnimal();
    
    ?>








?>