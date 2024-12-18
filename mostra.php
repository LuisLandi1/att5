<?php
session_start();

require_once 'produto.php'; // Inclui a classe Produto

echo '<div class="container">';
echo '<h1>Produtos Cadastrados</h1>';

if (isset($_SESSION['produto'])) {
    $produto = $_SESSION['produto'];
    $produto->exibirInformacoes();
} else {
    echo '<p>Nenhum produto cadastrado.</p>';
}

echo '</div>';
?>
