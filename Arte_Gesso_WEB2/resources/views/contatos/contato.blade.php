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

        <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/contato.css') }}" rel="stylesheet">

    </head>

    <body>

        <header>
            <div>
                <nav class=" navbar light navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <a class="navbar-brand" href="{{route('home')}}">

                                <img src="{{ asset('img/logoGesso.jpg') }}" alt="Avatar Logo" style="width:150px;" class="rounded-pill">
                            </a>
                        </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarText" >
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="{{route('sobre.index')}}">Sobre Nos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('contatos.index')}}">Contato</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('obras.index')}}">Obras</a>
                                        </li>
                                    </ul>
                                </div>

                        @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                    </div>
                </nav>
            </div>
        </header>

    <main class="bg-light">



        <div id="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="main-title">Entre em Contato Conosco Que Responderemos o Mais Breve Possivel</h3>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2138.9122408285352!2d-48.43130806086145!3d-25.631245468248533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94db955be6d72eef%3A0x8f5dabadf937a4f5!2sAssados%20do%20Ga%C3%BAcho!5e0!3m2!1sen!2sbr!4v1688584957229!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Wrapper container -->
                    <div class="col-md-6">

                        <form id="contactForm" action="{{ route('contatos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="nome">Name</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome"/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="email">Email </label>
                                <input class="form-control" name="email" type="email" placeholder="Email" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="mensagem">Mensagem</label>
                                <textarea class="form-control" name="mensagem" type="text" placeholder="Mensagem" style="height: 10rem;"></textarea>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                            </div>

                        </form>

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
                        <li><a href="{{route('home')}}">Página Inicial</a></li>
                        <li><a href="{{route('sobre.index')}}">Sobre Nós</a></li>
                        <li><a href="{{route('obras.index')}}">Serviços</a></li>
                        <li><a href="{{route('contatos.index')}}">Contato</a></li>
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
                    <p>&copy; 2023 Arte Gesso. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
