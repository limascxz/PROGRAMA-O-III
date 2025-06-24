<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <?php

class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "Livro '{$this->titulo}' emprestado com sucesso.<br>";
        } else {
            echo "Livro '{$this->titulo}' não está disponível.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "Livro '{$this->titulo}' devolvido com sucesso.<br>";
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function getTitulo() {
        return $this->titulo;
    }
}

class Aluno {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function pegarLivro(Livro $livro) {
        echo "Aluno {$this->nome} tentou pegar o livro '{$livro->getTitulo()}'.<br>";
        if ($livro->isDisponivel()) {
            $livro->emprestar();
        } else {
            echo "O livro '{$livro->getTitulo()}' já está emprestado.<br>";
        }
    }
}

// Criando objetos (3 exemplos)
$livro1 = new Livro("Dom Casmurro", "Machado de Assis");
$livro2 = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry");

$aluno1 = new Aluno("João Silva", "2025001");

// Ações
$aluno1->pegarLivro($livro1); // Deve emprestar
$aluno1->pegarLivro($livro1); // Já emprestado

$livro1->devolver(); // Devolve
$aluno1->pegarLivro($livro1); // Deve emprestar novamente
?>

</body>
</html>