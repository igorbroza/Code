<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arte Gesso</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/about.css') }}" rel="stylesheet">

    </head>

    <body>

    <header class="mb-7">
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/gesso1.jpeg') }}" class="d-block w-100" alt="Projetos">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Teste 1</h2>
                        <p>Teste 2</p>

                    </div>
                </div>

                <div class="carousel-item  ">
                    <img src="{{ asset('img/gesso2.jpeg') }}" class="d-block w-100" alt="Engenharia de Software">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Teste 1</h2>
                        <p>Teste 2</p>

                    </div>
                </div>

                <div class="carousel-item  ">
                    <img src="{{ asset('img/gesso3.jpeg') }}" class="d-block w-100" alt="Manutenção de Software">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Teste 1</h2>
                        <p>Teste 2</p>

                    </div>
                </div>
            </div>
        


            <a href="#mainSlider" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">Arte Gesso: Transformando Ambientes com Qualidade e Criatividade em Drywall</h3>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{ asset('img/gesso4.jpeg') }}" alt="Arte Gesso">
                    </div>
                    <div class="col-md-6">
                        <h3 class="about-title">Uma Empresa De Drywaal</h3>
                        <p>A Arte Gesso é uma empresa renomada no ramo da construção civil</p>
                        <p>No mercado altamente competitivo da construção, a Arte Gesso se estabeleceu como referência quando se trata de trabalhar com Drywall.</p>
                        <p>A equipe de profissionais especializados da Arte Gesso está preparada para atender às necessidades únicas de cada projeto</p>
                        <p>Uma das principais vantagens do Drywall é a rapidez na execução das obras. Em comparação aos métodos tradicionais de construção</p>
                        <ul id="about-list">
                            <li><i class="fas fa-check"></i>Uma das principais vantagens do Drywall</li>
                            <li><i class="fas fa-check"></i>Uma das principais vantagens do Drywall</li>
                            <li><i class="fas fa-check"></i>Uma das principais vantagens do Drywall</li>
                            <li><i class="fas fa-check"></i>Uma das principais vantagens do Drywall</li>
                            <li><i class="fas fa-check"></i>Uma das principais vantagens do Drywall</li>
                    </div>
                </div>
            </div>
        </div>

    </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
