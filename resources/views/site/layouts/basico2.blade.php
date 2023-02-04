<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container" style="margin-top:25px;">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar produto</h5>
                        <p class="card-text">Adicione novos produtos em seu estoque.</p>
                        <a href="adicionar_produto.php" class="btn btn-sm btn-primary">Cadastrar produto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-clipboard-list"></i>&nbsp;Lista de produtos</h5>
                        <p class="card-text">Edite, liste e adicione exclua seus produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-sm btn-primary">Listar produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar categorias</h5>
                        <p class="card-text">Adicione novas categorias para seus produtos.</p>
                        <a href="adicionar_categoria.php" class="btn btn-sm btn-primary">Adicionar categoria</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="far fa-id-card"></i>&nbspAdicionar Fornecedores</h5>
                        <p class="card-text">Adicione novos fornecedores de seus produtos.</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-sm btn-primary">Adicionar fornecedor</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-pencil-alt"></i>&nbsp Listar categorias</h5>
                        <p class="card-text">Edite, liste e adicione exclua suas categorias cadastradas.</p>
                        <a href="listar_categorias.php" class="btn btn-sm btn-primary">Listar categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-edit"></i>&nbsp Listar fornecedores</h5>
                        <p class="card-text">Edite, liste e adicione exclua seus fornecedores ja cadastrados.</p>
                        <a href="#" class="btn btn-sm btn-secondary disabled" aria-disabled="true">Em breve</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check"></i>&nbsp Cadastrar usuários</h5>
                        <p class="card-text">Cadastre novos usuários no sistema.</p>
                        <a href="cadastro_usuario.php" class="btn btn-sm btn-primary">Cadastrar novo</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check"></i>&nbsp Aprovar usuários</h5>
                        <p class="card-text">Aprove os usuários que se cadastraram no sistema por meio externo.</p>
                        <a href="aprovar_usuario.php" class="btn btn-sm btn-primary">Exibir lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    @yield('navbar_basico')

</body>

</html>
