<h1 class="mt-4">Lista de Produtos</h1>

<div class="card">
    <div class="card-body">
        <table id="tabela-produtos" class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT id, nome, descricao, preco, quantidade FROM USUARIOS"; 
                $res = $conn->query($sql);
                $qtd = $res->num_rows;

                if ($qtd > 0) {
                    while ($row = $res->fetch_object()) {
                        echo "<tr>
                        <td>{$row->id}</td>
                        <td>{$row->nome}</td>
                        <td>{$row->descricao}</td>
                        <td>R$ " . number_format($row->preco, 2, ',', '.') . "</td>
                        <td>{$row->quantidade}</td>
                        <td>
                            <button onclick=\"location.href='?page=editar&id={$row->id}';\" class='btn btn-success btn-sm'>
                                <i class='fas fa-edit'></i> Editar
                            </button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar&acao=excluir&id={$row->id}'; }\" class='btn btn-danger btn-sm'>
                                <i class='fas fa-trash'></i> Excluir
                            </button>
                        </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center text-danger'>Nenhum produto encontrado</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Importação do DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabela-produtos').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nenhum produto encontrado",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registro disponível",
            "search": "Buscar:",
            "paginate": {
                "previous": "Anterior",
                "next": "Próximo"
            }
        }
    });
});
</script>
