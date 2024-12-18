<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'produto.php'; // Inclui a classe Produto

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $imagem = $_POST['imagem'];

    // Cria um novo objeto Produto
    $produto = new Produto($nome, $descricao, $valor, $imagem);

    // Salva o produto na sessão
    $_SESSION['produto'] = $produto;

    // Redireciona para a página mostra.php
    header('Location: mostra.php');
    exit();
} else {
    // Redireciona para novo.php caso o formulário não tenha sido enviado via POST
    header('Location: novo.php');
    exit();
}
?>
