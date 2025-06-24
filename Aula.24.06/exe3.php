<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <?php

class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<br>";
        } else {
            echo "Saque inválido. Verifique o valor e o saldo disponível.<br>";
        }
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta = new ContaBancaria("Maria Oliveira", 1000);
echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "<br><br>";

$conta->depositar(500);  
$conta->sacar(200);       
$conta->sacar(2000);      

echo "<br>Saldo final: R$ " . number_format($conta->getSaldo(), 2, ',', '.');
?>
</body>
</html>