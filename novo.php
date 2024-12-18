<!DOCTYPE html>
<html>
<head>
    <title>Criar Novo Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Criar Novo Produto</h1>
        <form action="cria.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição do Produto</label>
                <input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor do Produto</label>
                <input type="text" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">URL da Imagem</label>
                <input type="text" class="form-control" id="imagem" name="imagem" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar Produto</button>
        </form>
    </div>
</body>
</html>
