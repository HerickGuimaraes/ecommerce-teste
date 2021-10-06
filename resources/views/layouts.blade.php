<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>MyShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light px-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">MyShop</a>
        <div class="collapse navbar-collapse justify-content-end">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categoria</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
            </div>
            <a href="{{ route('ver_carrinho')}}" class="btn btn-sm"><i class="bi bi-cart-fill"></i></a>
        </div>
    </nav>
<div class="container">
    <div class="row">
        <!-- Area de update nas demais paginas-->
        @yield("conteudo")
    </div>
</div>
</body>
</html>