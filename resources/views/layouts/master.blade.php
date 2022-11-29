<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="shortcut icon" href="img/icon.png">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/maincatar.css')}}">



</head>
<body>
    <div class="container-grid">
        <!-- Header -->
        <div class="header">
            <div class="navbar">
                <input type="checkbox" class="navbar__input" id="aside">
                <div class="navbar__boton">
                    <label for="aside">
                        <div class="navbar__btn-search">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </label>
                </div>
                <!-- sidebar -->
                <div class="aside">
                    <div class="navigation">
                        <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                            <ul>
                                <li class="list active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <a href="#">
                                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                                        <span class="text">Inicio</span>
                                    </a>
                                </li>
                                <li class="list" id="nav-apuesta-tab" data-bs-toggle="tab" data-bs-target="#nav-apuesta" type="button" role="tab" aria-controls="nav-apuesta" aria-selected="false">
                                    <a href="#">
                                        <span class="icon"><i class="fa-solid fa-dollar-sign"></i></span>
                                        <span class="text">Apuesta</span>
                                    </a>
                                </li>
                                <li class="list" id="nav-resultado-tab" data-bs-toggle="tab" data-bs-target="#nav-resultado" type="button" role="tab" aria-controls="nav-apuesta" aria-selected="false">
                                    <a href="#">
                                        <span class="icon"><i class="fa-solid fa-square-poll-vertical"></i></span>
                                        <span class="text">Resultados</span>
                                    </a>
                                </li>
                                <li class="list" id="nav-resultado-tab" data-bs-toggle="tab" data-bs-target="#nav-posicion" type="button" role="tab" aria-controls="nav-apuesta" aria-selected="false">
                                    <a href="#">
                                        <span class="icon"><i class="fa-solid fa-ranking-star"></i></span>
                                        <span class="text">Posicion</span>
                                    </a>
                                </li>



                                <div class="indicator"></div>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- logo -->
                <div class="navbar__logo">
                    <img src="https://i.ibb.co/q7ynBM3/Qatar2022-removebg-preview.png" alt="Qatar2022-removebg-preview" border="0">
                </div>
                <div class="logout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit(); ">
                            <i class="fa-solid fa-power-off"></i>
                        </x-dropdown-link>

                    </form>

                </div>
            </div>
        </div>
        <!-- Contenido -->
        <div class="contenido">

              @yield('content')
              @yield('apuestas')
              @yield('adminapuesta')


        </div>




    </div>
    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item)=>
        item.addEventListener('click', activeLink));
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js'></script>
    <script src="js/navbarfixed.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>
