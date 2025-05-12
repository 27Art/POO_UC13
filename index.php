<?php include "src/views/header.php";

// Roteamento
$page = isset($_GET['pages']) ? $_GET['pages'] : 'home';
switch ($page) {
    case 'aluno':
        include "src/pages/cad_aluno.php";
        break;
    case 'curso':
        include "src/pages/cad_curso.php";
        break;
    case 'escola':
        include "src/pages/cad_escola.php";
        break;
    case 'login':
        include "src/pages/login.php";
        break;
    default:
        include "src/pages/home.php"; 
        break;
}

include "src/views/footer.php"
?>

