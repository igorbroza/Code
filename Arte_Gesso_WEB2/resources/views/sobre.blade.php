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



    <div class="container">
        <div class="col-12">
            <h3 class="main-title">Saiba Mais Sobre a Historia, Valores e Principios da Empresa</h3>
        </div>
        <div class="col-12">
            <h3>Arte Gesso: Transformando Ambientes com Qualidade e Criatividade em Drywall</h3>
            <p>A Arte Gesso é uma empresa renomada no ramo da construção civil, especializada em soluções de Drywall. Com anos de experiência e excelência em seus serviços, a empresa se destaca pela sua capacidade de transformar ambientes com qualidade, criatividade e comprometimento com a satisfação dos clientes.</p>
            <p>No mercado altamente competitivo da construção, a Arte Gesso se estabeleceu como referência quando se trata de trabalhar com Drywall. Esse sistema construtivo versátil e inovador permite a criação de espaços funcionais e esteticamente atraentes em residências, comércios, escritórios e outros ambientes.</p>
            <p>A equipe de profissionais especializados da Arte Gesso está preparada para atender às necessidades únicas de cada projeto, desde a instalação de paredes, forros e divisórias até o acabamento final. Utilizando técnicas avançadas e materiais de alta qualidade, a empresa garante resultados duradouros e de alto padrão estético.</p>
            <p>Uma das principais vantagens do Drywall é a rapidez na execução das obras. Em comparação aos métodos tradicionais de construção, o Drywall reduz consideravelmente o tempo necessário para finalizar um projeto. A equipe ágil da Arte Gesso é capaz de entregar resultados dentro dos prazos estabelecidos, sem comprometer a qualidade do trabalho.</p>
            <p>Além disso, o Drywall oferece flexibilidade no design dos espaços. Com a Arte Gesso, os clientes têm a liberdade de personalizar cada detalhe, seja criando divisões internas, integrando nichos, aplicando texturas diferenciadas ou explorando outras possibilidades. A empresa valoriza a criatividade e está sempre pronta para abraçar desafios únicos e transformar ideias em realidade.</p>
            <p>Na Arte Gesso, a qualidade é um pilar fundamental em todos os projetos. A empresa trabalha com os melhores fornecedores de materiais e produtos do mercado, assegurando a durabilidade e a resistência das estruturas em Drywall. Além disso, a equipe técnica é constantemente treinada e atualizada, acompanhando as mais recentes técnicas e inovações no setor.</p>
            <p>A satisfação do cliente está no centro de todas as atividades da Arte Gesso. A empresa valoriza o relacionamento próximo com seus clientes, compreendendo suas necessidades, desejos e expectativas. Através de um atendimento personalizado e eficiente, a equipe da Arte Gesso busca superar as expectativas, oferecendo soluções sob medida e resultados finais que encantam.</p>
            <p>A empresa também se destaca pelo seu compromisso com a sustentabilidade. O Drywall é um sistema construtivo que permite a redução do desperdício de materiais e tem menor impacto ambiental em comparação a outros métodos. A Arte Gesso se empenha em utilizar práticas sustentáveis em todos os aspectos do seu negócio, contribuindo para um futuro mais consciente e responsável.</p>
            <h3>Se você está procurando uma empresa confiável e especializada em Drywall, a Arte Gesso é a escolha certa. Com sua experiência, compromisso com a qualidade e criatividade, a Arte Gesso tem a capacidade de transformar qualquer espaço em uma obra de arte.</h3>
        <div>
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
