<?php
class Aluno {
    public $curso;
    public $nome;
    public $idade;
    private $cpf;
 
    // Construtor com validação
    public function __construct($nome, $idade, $cpf,$curso) {
        if (empty($nome)) {
            throw new Exception("O campo Nome é obrigatório.");
        }
        if (!filter_var($idade, FILTER_VALIDATE_INT) || $idade < 0) {
            throw new Exception("A Idade deve ser um número inteiro positivo.");
        }
        if (empty($cpf)) {
            throw new Exception("O campo CPF é obrigatório.");
        }
        if (!preg_match("/^\d{3}\.\d{3}\.\d{3}-\d{2}$/", $cpf)) {
            throw new Exception("O CPF deve estar no formato XXX.XXX.XXX-XX.");
        }
        if (empty($curso)) {
            throw new Exception("O campo Curso é obrigatório.");
        }
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->curso = $curso;
    }
 
    // Getter do CPF (encapsulamento)
    public function getCpf() {
        return $this->cpf;
    }
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Nome: <strong>$this->nome</strong><br>";
        echo "Idade: <strong>$this->idade</strong> anos<br>";
        echo "CPF: <strong>" . $this->getCpf() . "</strong></p>";
        echo "<p>Curso: <strong>$this->curso</strong></p>";
    }
}


