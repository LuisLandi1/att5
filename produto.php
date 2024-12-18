<?php
class Produto {
    public $nome;
    public $descricao;
    public $valor;
    public $imagem;

    // Construtor para inicializar os atributos
    public function __construct($nome, $descricao, $valor, $imagem) {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $valor = (float) $valor; // "5.3" -> 5.3
        $this->valor = $valor;
        $this->imagem = $imagem;
    }

    // Método para exibir as informações do produto
    public function exibirInformacoes() {
        echo '<div class="card" style="width: 18rem;">';
        echo '<img src="' . $this->imagem . '" class="card-img-top" alt="' . $this->nome . '" style="height: 200px;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $this->nome . '</h5>';
        echo '<p class="card-text">' . $this->descricao . '</p>';
        echo '<p class="card-text">Valor: R$' . number_format($this->valor, 2, ',', '.') . '</p>';
        echo '</div>';
        echo '</div>';
    }
}
?>
