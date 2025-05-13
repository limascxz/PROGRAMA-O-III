<?php

class Carro {
    public string $modelo;
    public string $cor;
    public int $ano;

    public function __construct(string $modelo, string $cor, int $ano) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    
    public function getModelo(): string {
        return $this->modelo;
    }

    public function getCor(): string {
        return $this->cor;
    }

    public function getAno(): int {
        return $this->ano;
    }

    
    public function setModelo(string $novoModelo): void {
        $this->modelo = $novoModelo;
    }

    public function setCor(string $novaCor): void {
        $this->cor = $novaCor;
    }

    public function setAno(int $novoAno): void {
        if ($this->validarAno($novoAno)) { 
            $this->ano = $novoAno;
        } else {
            echo "Ano inválido.\n";
        }
    }


    private function validarAno(int $ano): bool {
        return is_int($ano) && $ano > 0;
    }
}

$meuCarro = new Carro("SUV", "Verde", 2024);

echo "Modelo: " . $meuCarro->getModelo() . "\n";
echo "Cor: " . $meuCarro->getCor() . "\n";
echo "Ano: " . $meuCarro->getAno() . "\n";

$meuCarro->setCor("Preto");
$meuCarro->setAno(2026);

echo "Nova cor: " . $meuCarro->getCor() . "\n";
echo "Novo ano: " . $meuCarro->getAno() . "\n";

?>		