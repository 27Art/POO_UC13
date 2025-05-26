<?php
require_once "src/classes/escola.php";
 
// Inicializa as variáveis
$nome = $endereco = $cidade = $cnpj = "";
$escolaCriado = false;
 
//Cadastrando
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $cnpj = $_POST["cnpj"];
    $cidade = $_POST["cidade"];
   
    $escola = new Escola($nome, $endereco, $cidade, $cnpj);
    $escolaCriado = $escola->cadastrar();
 
    if ($escolaCriado) {
        echo "<div class='alert alert-success'>Cadastro efetuado com sucesso</div>";
    } else {
        echo "<div class='alert alert-danger'>Erro ao cadastrar a escola</div>";
    }
}
$escolas = Escola::listar();
?>
 
<h2>Cadastro de Escola</h2>
 
<form method="post" class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"
            value="<?= htmlspecialchars($nome) ?>">
    </div>
 
    <div class="col-md-2">
        <label for="cnpj" class="form-label">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj" class="form-control"
            value="<?= htmlspecialchars($cnpj) ?>">
    </div>
 
    <div class="col-md-4">
        <label for="endereco" class="form-label">Endereço:</label>
        <input type="text" name="endereco" id="endereco" class="form-control"
            value="<?= htmlspecialchars($endereco) ?>">
    </div>
 
    <div class="col-md-2">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control"
            value="<?= htmlspecialchars($cidade) ?>">
    </div>
 
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<h3>Lista de Escola</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Cidade</th>
        </tr>
    </thead>
    <tbody>
       <?php if ($escolas && count($escolas) > 0): ?>
            <?php foreach ($escolas as $escola): ?>
                <tr>
                    <td><?= htmlspecialchars($escola['nome']) ?></td>
                    <td><?= htmlspecialchars($escola['cnpj']) ?></td>
                    <td><?= htmlspecialchars($escola['endereco']) ?></td>
                    <td><?= htmlspecialchars($escola['Cidade']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">Nenhuma escola cadastrada.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>