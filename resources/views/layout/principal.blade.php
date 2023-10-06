<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de Estoque</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-beader">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ action('ProdutoController@lista')}}">Listagem</a></li>
                    <li><a href="{{ action('ProdutoController@novo')}}">Novo</a></li>
                </ul>
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>@ Livro de Laravel da Casa do Código.</p>
        </footer>
    </div>
</body>

</html>