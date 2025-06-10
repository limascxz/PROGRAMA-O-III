<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe5</title>
</head>
<body>
    <?php

class Livro {
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private bool $disponivel;
    protected ?string $leitorAtual = null;

    public function __construct(string $titulo, string $autor, int $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true;
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

class Leitor {
    private string $nome;
    private string $email;
    private string $telefone;

    public function __construct(string $nome, string $email, string $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getTelefone(): string {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void {
        $this->telefone = $telefone;
    }

    public function exibirLeitor(): void {
        echo "Nome: " . $this->nome . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Telefone: " . $this->telefone . "\n";
    }
}

class Biblioteca {
    public string $nomeBiblioteca;
    private array $livros = [];
    private array $leitores = [];

    public function __construct(string $nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function adicionarLivro(Livro $livro): void {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor): void {
        $this->leitores[] = $leitor;
    }

    public function listarLivros(): void {
        echo "Livros na Biblioteca " . $this->nomeBiblioteca . ":\n";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
            echo "\n";
        }
    }

    public function listarLeitores(): void {
        echo "Leitores da Biblioteca " . $this->nomeBiblioteca . ":\n";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
            echo "\n";
        }
    }
}

// Scenario:
$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 1899);
$livro2 = new Livro("O Cortiço", "Aluísio Azevedo", 1890);
$livro3 = new Livro("Vidas Secas", "Graciliano Ramos", 1938);

$leitor1 = new Leitor("João Silva", "joao.silva@email.com", "123-456-7890");
$leitor2 = new Leitor("Maria Souza", "maria.souza@email.com", "987-654-3210");

$biblioteca = new Biblioteca("Biblioteca Municipal");

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);
$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

$biblioteca->listarLivros();
$biblioteca->listarLeitores();
?>

</body>
</html>