<?php


//Definir classe caneta
class Caneta{
    //Atributos
    public $cor;
    public $marca;
    public $ponta;
    public $tamanho;
    public $carga;
    
    //Definir metodos
    public function escrever(){
        echo"Escrevendo...<br>";
    }
    public function rabiscar(){
        echo "Rabiscando...<br>";
    }
    public function sublinhar(){
        echo "Sublinhando...<br>";
    }
    public function pintar(){ 
        echo "Pintando...<br>";  
    }

}

    // Estanciando a classe Caneta: criando um objeto
        $caneta1 = new Caneta();


    //como os atributos da classe Caneta são públicos,podemos acessa-los diretamente
        $caneta1->cor = "Azul";
        $caneta1->marca = "Bic";
        $caneta1->tamanho = "5";
        $caneta1->carga = "100";
        $caneta1->ponta = "0.5";

    //Exibindo os atributos da caneta
        echo "Cor: " . $caneta1->cor . "<br>";
        echo "Marca:" . $caneta1->marca . "<br>";
        echo "Tamanho". $caneta1->tamanho ."<br>";
        echo "Carga". $caneta1->carga ."<br>";
        echo "Ponta". $caneta1->ponta ."<br>";

    //Chamando os metodos da caneta
        $caneta1->escrever();
        $caneta1->rabiscar();
        $caneta1->sublinhar();
        $caneta1->pintar();



?>
