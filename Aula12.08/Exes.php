<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <?php

// Classe base
class Veiculo {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function andar() {
        echo "Andou\n";
    }

    public function parar() {
        echo "Parou\n";
    }
}

// 1. Caminhao herdando de Veiculo
class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!\n";
    }
}

// 2. Moto herdando de Veiculo e sobrescrevendo andar()
class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento\n";
    }
}

// 3. Carro herdando de Veiculo e com atributo específico
class Carro extends Veiculo {
    public $tipoCombustivel;

    public function __construct($marca, $modelo, $tipoCombustivel) {
        parent::__construct($marca, $modelo);
        $this->tipoCombustivel = $tipoCombustivel;
    }

    public function mostrarCombustivel() {
        echo "Tipo de combustível: {$this->tipoCombustivel}\n";
    }
}

// 5. CarroEletrico herdando de Carro
class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada\n";
    }
}

// -------------------------------
// 4. Criando múltiplos objetos
$carro1 = new Carro("Toyota", "Corolla", "Gasolina");
$carro2 = new Carro("Volkswagen", "Golf", "Diesel");
echo "<br>";
$moto1 = new Moto("Honda", "CB500");
$moto2 = new Moto("Yamaha", "MT-07");
echo "<br>";
// Usando métodos
$carro1->andar();
$carro1->mostrarCombustivel();
echo "<br>";
$carro2->parar();
$carro2->mostrarCombustivel();
echo "<br>";
$moto1->andar();
$moto2->andar();
echo "<br>";
// Testando Caminhao
$caminhao = new Caminhao("Volvo", "FH16");
$caminhao->carregarCarga();
echo "<br>";
// Testando CarroEletrico
$carroE = new CarroEletrico("Tesla", "Model 3", "Elétrico");
$carroE->andar();              // herdado de Veiculo
$carroE->mostrarCombustivel(); // herdado de Carro
$carroE->carregarBateria();    // específico de CarroEletrico
echo "<br>";
?>
</body>
</html>