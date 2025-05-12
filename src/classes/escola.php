<?php
class Escola {
    public $endereco;
    public $nome;
    public $cidade;
    private $cnpj;
 
    // Construtor com validação
    public function __construct($nome, $cidade, $cnpj,$endereco) {
        if (empty($nome)) {
            throw new Exception("O campo Nome é obrigatório.");
        }
        if (empty($cidade)) {
            throw new Exception("O campo Cidade é obrigatório.");
        }
        if (empty($cnpj)) {
            throw new Exception("O campo CNPJ é obrigatório.");
        }
        
        if (empty($endereco)) {
            throw new Exception("O campo Endereço é obrigatório.");
        }
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
    }
 
    // Getter do CPF (encapsulamento)
    public function getCnpj() {
        return $this->cnpj;
    }
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Nome da escola: <strong>$this->nome</strong><br>";
        echo "Cidade: <strong>$this->cidade</strong><br>";
        echo "CNPJ: <strong>" . $this->getCnpj() . "</strong></p>";
        echo "<p>Endereço: <strong>$this->endereco</strong></p>";
    }
}


