<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arte Gesso </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/especialidades.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
<body>

<header>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/logoGesso.jpg') }}" alt="Avatar Logo" style="width:150px;" class="rounded-pill">
                    </a>

                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarText" >
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
            </div>
        </nav>
    </div>
</header>

<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5>Sobre:</h5>
                <p>Seu texto sobre a empresa ou site.</p>
            </div>
            <div class="col-lg-3">
                <h5>Links:</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>Contato:</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt-fill"></i> Endereço da empresa</li>
                    <li><i class="bi bi-envelope-fill"></i> exemplo@empresa.com</li>
                    <li><i class="bi bi-telephone-fill"></i> (11) 1234-5678</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>&copy; 2023 Nome da Empresa. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
