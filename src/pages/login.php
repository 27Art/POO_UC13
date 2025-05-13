<?php
 
include 'src/classes/usuario.php';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
 
    $usuarioObj = new usuario();
    $usuario = $usuarioObj->autenticar($email, $senha);
 
    if ($usuario) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['email'];
        header("Location: /poo");
        exit();
    } else {
        echo "Login inválido!";
    }
}
?>

<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h3 class="text-center mb-4">Acesso ao Sistema</h3>
 
                <form method="post">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário (e-mail):</label>
                        <input type="email" name="usuario" id="usuario" class="form-control" required>
                    </div>
 
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" required>
                    </div>
 
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form> 


                
            </div>
        </div>
    </div>
</div>