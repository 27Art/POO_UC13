<?php
session_start();
$page = isset($_GET['pages']) ? $_GET['pages'] : 'home';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>UC 13 - Técnico em Informática.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
<?php if ($page != 'login') : ?>
        <!-- Menu de Navegação -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">UC 13 - Compreedendo POO com PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=aluno">Cadastro de Aluno</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=curso">Cadastro de Curso</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?pages=escola">Cadastro de Escola</a></li>
                        <li class="nav-item"><a class="nav-link btn" href="index.php?pages=login">Sair</a></li>
                    </ul>                 
                </div>
            </div>
        </nav>
     <!-- Título -->
     
    <header class="bg-primary text-white text-center py-4">
        <h1>Sistema de Cadastro – UC 13 | POO com PHP</h1>
    </header>
    <?php endif; ?>

    <main class="container my-5">