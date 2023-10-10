<?php

class Animal {
    protected $nome;
    protected $especie;

    public function __construct($nome, $especie) {
        $this->nome = $nome;
        $this->especie = $especie;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function emitirSom() {
    }
}

// Classes derivadas de Animal
class Cachorro extends Animal {
   
}

class Gato extends Animal {
   
}

class Pássaro extends Animal {
    
}

class Peixe extends Animal {
   
}

interface PetshopInterface {
    public function calcularBanhoTosaImposto($animal);
    public function calcularProdutoImposto($produto);
}

class Procedimento {

    public $tosa;
    public $banho;
    public $exame; 




}

class Produtos {


    protected $preco;
    protected $peso;

}

class PessoaPET0 {
    protected $nome;
    protected $cargo;

    protected $horario;



    public function __construct($nome, $cargo, $horario ) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horario = $horario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getHorario() {
        return $this->horario;
    }
}

// Classes derivadas de Pessoa
class Gerente extends PessoaPET0 {
}

class Banhista extends PessoaPET0 {
}

class Veterinario extends PessoaPET0 {
}

class Tosador extends PessoaPET0 {
}

class Caixa extends PessoaPET0 {
}

class Cliente002 extends PessoaPET0 {
}


// Exemplo de uso:
$rex = new Cachorro("Rex", "Cachorro");
$garfield = new Gato("Garfield", "Gato");

$gerente = new Gerente("João", "Gerente", "15:20");
$banhista = new Banhista("Maria", "Banhista", "15:20");
$cliente2 = new Cliente002("Jorge", "Pagamento", "15:20");


echo $cliente2->getNome() . " Veio as " . $cliente2->getHorario() . " com a " . $banhista->getNome() . " que cuidou do " . $rex->getNome() .  "<br";


?>
