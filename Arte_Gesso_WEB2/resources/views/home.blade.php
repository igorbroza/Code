<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arte Gesso</title>
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

    <main class="bg-light">

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
                <span class="sr-only"></span>
            </a>
            <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
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
                            <li>Uma das principais vantagens do Drywall</li>
                            <li>Uma das principais vantagens do Drywall</li>
                            <li>Uma das principais vantagens do Drywall</li>
                            <li>Uma das principais vantagens do Drywall</li>
                            <li>Uma das principais vantagens do Drywall</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">Nossas Especialidades Especialidades:</h3>
                    </div>
                    <div class="col-md-4 service-box">
                        <img  src="{{ asset('img/gesso2.jpeg') }}" class="d-block w-100">
                        <h4>Forros Decorado</h4>
                        <p>Forro feito de drywal como otimo acabamento</p>
                    </div>
                    <div class="col-md-4 service-box">
                        <img  src="{{ asset('img/gesso4.jpeg') }}" class="d-block w-100">
                        <h4>Divisorias</h4>
                        <p>Paredes feotas de drywall</p>
                    </div>
                    <div class="col-md-4 service-box">
                        <img  src="{{ asset('img/gesso5.jpeg') }}" class="d-block w-100">
                        <h4>Closets</h4>
                        <p>Moveis resistentes e Bonitos</p>
                    </div>
                    <div class="col-md-4 service-box">
                        <img  src="{{ asset('img/gesso2.jpeg') }}" class="d-block w-100">
                        <h4>Nichos Decorados</h4>
                        <p>Forro feito de drywal como otimo acabamento</p>
                    </div>
                    <div class="col-md-4 service-box">
                        <img  src="{{ asset('img/gesso2.jpeg') }}" class="d-block w-100">
                        <h4>Forro Mineral</h4>
                        <p>Forro feito de drywal como otimo acabamento</p>
                    </div>
                    <div class="col-md-4 service-box">
                        <img  src="{{ asset('img/gesso2.jpeg') }}" class="d-block w-100">
                        <h4>Viga Falsa</h4>
                        <p>Forro feito de drywal como otimo acabamento</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
