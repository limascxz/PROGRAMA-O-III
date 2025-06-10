<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe3</title>
</head>
<body>
    <?php

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

// Scenario:
$leitor = new Leitor("João Silva", "joao.silva@email.com", "123-456-7890");
$leitor->exibirLeitor();

$leitor->setEmail("novo.email@example.com");
echo "Novo email: " . $leitor->getEmail() . "\n";
?>

</body>
</html>