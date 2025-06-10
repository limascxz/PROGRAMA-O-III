<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe 1</title>
</head>
<body>
    <?php

class Livro {
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private bool $disponivel;

    public function __construct(string $titulo, string $autor, int $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true; // Initially available
    }

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
}

// Example Usage:
$livro = new Livro("Dom Casmurro", "Machado de Assis", 1899);
$livro->exibirInformacoes();

$livro->setDisponivel(false);
echo "Disponível agora: " . ($livro->isDisponivel() ? "Sim" : "Não") . "\n";

?>

</body>
</html>