<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (RTL) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>TechStore</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand ms-auto" href="index.php">TechStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=novo">Cadastro de Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quantidade</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");    // Chamando banco de dados
                    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
                    switch($page){
                        case "novo":
                            include("novo-produto.php");
                        break;
                        case "listar":
                            include("listar-produto.php");
                        break;
                        case "salvar":
                            include("salvar-produto.php");
                        break;
                        case "editar":
                            include("editar-produto.php");
                        break;
                        default:
                ?>
                
                <!-- index, inicio da pagina -->
                <div class="jumbotron text-center bg-light p-5 mb-4">
                    <h1 class="display-4">Bem-vindo à TechStore!</h1>
                    <p class="lead">A sua loja virtual de tecnologia. Explore os nossos produtos e aproveite as ofertas exclusivas!</p>
                    <hr class="my-4">
                    <p>Gerencie seus produtos, cadastre novos itens e muito mais!</p>
                    
                    <div class="d-flex justify-content-center gap-3">
                        <a class="btn btn-primary btn-lg" href="?page=novo" role="button">Cadastrar Produto</a>
                        <a class="btn btn-secondary btn-lg" href="?page=listar" role="button">Ver Produtos</a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card text-white bg-success">
                            <div class="card-header">Total de Produtos</div>
                            <div class="card-body">
                                <h5 class="card-title">50 Produtos Cadastrados</h5>
                                <p class="card-text">Gerencie todos os produtos cadastrados na sua loja.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card text-white bg-warning">
                            <div class="card-header">Últimos Produtos</div>
                            <div class="card-body">
                                <h5 class="card-title">Confira os mais recentes produtos cadastrados.</h5>
                            </div>
                        </div>
                    </div>
                </div>


                <h2>Últimos Produtos Cadastrados</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // chamando os últimos produtos
                            $sql = "SELECT id, nome, preco, quantidade FROM usuarios ORDER BY id DESC LIMIT 5";
                            $res = $conn->query($sql);
                            while ($row = $res->fetch_object()) {
                                echo "<tr>
                                        <td>{$row->id}</td>
                                        <td>{$row->nome}</td>
                                        <td>R$ " . number_format($row->preco, 2, ',', '.') . "</td>
                                        <td>{$row->quantidade}</td>
                                    </tr>";
                            }
                        ?>
                    </tbody>
                </table>

                <div class="text-center mt-4">
                    <h2>O que você gostaria de fazer?</h2>
                    <div class="d-flex justify-content-center gap-3"> 
                        <a href="?page=novo" class="btn btn-primary">Cadastrar Novo Produto</a>
                        <a href="?page=listar" class="btn btn-info">Ver Produtos</a>
                    </div>
                </div>


                <?php
                        }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
