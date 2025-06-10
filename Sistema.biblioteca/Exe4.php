<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe4</title>
</head>
<body>
    <?php

class Livro {
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private bool $disponivel;
    protected ?string $leitorAtual = null; // Can be null if no one has borrowed

    public function __construct(string $titulo, string $autor, int $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true; // Initially available
    }

    // Getters and Setters
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function getAnoPublicacao(): int {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao(int $anoPublicacao): void {
        $this->anoPublicacao = $anoPublicacao;
    }

    public function isDisponivel(): bool {
        return $this->disponivel;
    }

    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }

    public function exibirInformacoes(): void {
        echo "Título: " . $this->titulo . "\n";
        echo "Autor: " . $this->autor . "\n";
        echo "Ano de Publicação: " . $this->anoPublicacao . "\n";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n";
    }

    public function emprestar(string $nomeLeitor): void {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro '" . $this->titulo . "' emprestado para " . $nomeLeitor . "\n";
        } else {
            echo "Livro '" . $this->titulo . "' não está disponível para empréstimo.\n";
        }
    }

    public function devolver(): void {
        if (!$this->disponivel) {
            $this->disponivel = true;
            $this->leitorAtual = null;
            echo "Livro '" . $this->titulo . "' devolvido.\n";
        } else {
            echo "Livro '" . $this->titulo . "' já está disponível.\n";
        }
    }

    public function estaDisponivel(): string {
        return $this->disponivel ? "O livro '" . $this->titulo . "' está disponível para empréstimo." : "O livro '" . $this->titulo . "' não está disponível.";
    }

    public function quemPegou(): ?string {
        return $this->leitorAtual;
    }
}

// Scenario:
$livro = new Livro("Dom Casmurro", "Machado de Assis", 1899);

echo $livro->estaDisponivel() . "\n";
$livro->emprestar("João Silva");
echo $livro->estaDisponivel() . "\n";
echo "Quem pegou: " . $livro->quemPegou() . "\n";
$livro->devolver();
echo $livro->estaDisponivel() . "\n";
echo "Quem pegou: " . ($livro->quemPegou() ?? "Ninguém") . "\n"; // Using null coalescing operator
?>

</body>
</html>