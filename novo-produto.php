<h1 class="text-center mt-4">Cadastrar Novo Produto</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="?page=salvar" method="POST" class="p-4 shadow-lg rounded bg-light">
                <input type="hidden" name="acao" value="cadastrar"> 

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome do Produto</label>
                    <input type="text" name="nome" class="form-control rounded-3" placeholder="Digite o nome do produto" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Descrição</label>
                    <textarea name="descricao" class="form-control rounded-3" rows="3" placeholder="Descreva o produto" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Preço</label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" name="preco" class="form-control rounded-end-3" step="0.01" min="0" placeholder="Digite o preço" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Quantidade</label>
                    <input type="number" name="quantidade" class="form-control rounded-3" min="1" placeholder="Informe a quantidade" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg rounded-3">Cadastrar Produto</button>
                </div>
            </form>
        </div>
    </div>
</div>
