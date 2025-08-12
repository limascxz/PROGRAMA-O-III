<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public function ligarLimpador() {
        echo "Limpador ligado";
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!";
    }
}

// Exemplo de uso
$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->andar();
echo "<br>";
$carro->ligarLimpador();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->parar();
echo "<br>";
$moto->darGrau();
?>
</body>
</html>