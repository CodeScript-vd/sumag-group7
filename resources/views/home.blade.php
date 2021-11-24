<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-200">
    {{-- <x-jet-banner /> --}}

    <div>
        @livewire('navigation-menu')
    </div>

    <div>
        <div class="container mx-auto">
            <div id="carouselExampleIndicators" class="carousel slide p-4" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('assets/img/banner1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/banner2.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('assets/img/banner3.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
            <div class="grid grid-cols-3 gap-4 px-4">
                <div class="shadow-2xl m-2 bg-cover" style="background-image: url({{asset('assets/img/delivery.jpg')}})"> 
                    <div class="items-center justify-content-center w-full p-8 flex flex-col">
                        <div class="items-center justify-center md:w-1/2 w-full p-5 h-auto flex flex-col col-span-12">
                            <h4 class="w-48 h-20"></h4>
                            <h4 class="text-4xl text-white font-semibold text-uppercase ">Delivery</h4>
                            {{-- <h2 class="text-gray-300   text-5xl text-center mt-2 mb-20" id="moka-cqg7a" style="font-family: &quot;Archivo Black&quot;;">Just sit down!</h2> --}}
                            {{-- <button value="button" class="text-white w-56 p-4 text-2xl font-bold" >Pedir</button> --}}
                        </div>

                        {{-- <div class="bg-gray-200 items-center justify-center p-5">
                        </div> --}}
                    </div>
                </div>
                <div class=" bg-white shadow-2xl m-2 hover:shadow-2x1 min-h-full"> 
                    <img src="{{asset('assets/img/contactanos.jpg')}}" alt="delivery.jpg">
                    <div class="p-8">
                        <h3 class="text-center">Contactanos</h3>
                    </div>
                </div>
                <div class=" bg-white shadow-2xl m-2 hover:shadow-2x1 min-h-full"> 
                    <img src="{{asset('assets/img/catering.jpg')}}" alt="delivery.jpg">
                    <div class="absolute justify-center">
                        <h3 class="text-center">Cautering</h3>
                    </div>
                </div>
            </div>
    
            
        </div>
    </div>
    
    <footer class="fixed w-full bg-green-900" style="bottom: 0; height: 10rem;">

        <div class="h-36 ">
            <div class="container mx-auto">
                <div class="grid grid-cols-3 px-4">
                    <div class="p-4">
                        <h2>Necesitas ayuda?</h2>
                        <ul>
                            <li>Contactanos</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Sobre Nosostros</h2>
                        <ul>
                            <li>Quienes somos</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Nuestra Empresa</h2>
                        <ul>
                            <li>Politicas de privacidad</li>
                            <li>Terminos y condiciones</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    
    
    </footer>
    
</body>
</html>