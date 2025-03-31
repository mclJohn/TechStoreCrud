<h1 class="mt-4">Editar Produto</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id; ?>">

    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <h5>Informações do Produto</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" id="nome" name="nome" value="<?php echo $row->nome; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" id="descricao" name="descricao" value="<?php echo $row->descricao; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" id="preco" name="preco" value="<?php echo $row->preco; ?>" class="form-control" step="0.01" min="0" placeholder="Digite o preço" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="text" id="quantidade" name="quantidade" value="<?php echo $row->quantidade; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-lg w-100">Atualizar Produto</button>
            </div>
        </div>
    </div>
</form>
