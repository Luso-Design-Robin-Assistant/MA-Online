<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <title>MA Online</title>

        <style>

            body {
                font-family: 'Roboto';
            }

        </style>

    </head>
    <body>

        <!-- Navbar -->
        <div class="ld-navbar fixed ld-transparent text-white w-full z-50">
            <div class="container mx-auto p-8">
                <nav class="flex uppercase">
                    <div class="flex align-middle justify-center h-12">
                        <a class="self-center text-3xl" href="#">
                            <img class="ls-logo w-20" src="{{ url('/images/logo.png') }}" alt="logo-placeholder">
                        </a>
                    </div>
                    <ul class="flex-1 flex self-center flex-row ml-10 text-xl">
                        <li><a class="pr-10" href="#">Mediacollege</a></li>
                        <li><a class="pr-10" href="#">Ma online</a></li>
                        <li><a class="pr-10" href="#">Geen acount?</a></li>
                        <li><a class="pr-10" href="#">Proeflessen</a></li>
                    </ul>
                    <div class="flex">
                        <a class="text-xl text-color self-center py-2 px-4" href="{{ route('login') }}">Inloggen</a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Hero image -->
        <div class="w-full h-screen bg-hero-image bg-no-repeat bg-center bg-cover">
            <div class="w-full h-full opacity-50 bg-gradient-to-b from-black via-gray-300 to-gray-400"></div>
        </div>

        <!-- Content -->
        <div class="w-full bg-gray-800">
            <div class="w-full">
                <div class="container mx-auto flex flex-col md:flex-row justify-between content-center py-32">
                    <div class="ld-content flex flex-col w-full place-content-center relative md:w-2/4">
                        <span class="text-4xl sm:text-5xl uppercase text-pink font-bold absolute -top-10 pb-20 px-4 md:px-0">Informatie</span>
                        <div class="bg-white p-14 z-10 overflow-visible" style="width: 110%;">
                            <span class="text-3xl sm:text-4xl font-bold px-4 md:px-0">Mediacollege</span>
                            <p class="mb-8 md:mb-0 px-4 md:px-0" >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                    </div>
                    <div class="w-full md:w-2/4 flex">
                        <img class="place-self-center self-center flex-shrink-0" src="{{ url('/images/About_IMG_Mediacollege.jpg') }}"  alt="semi">
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="container mx-auto flex flex-col md:flex-row justify-between content-center py-32">
                    <div class="w-full md:w-2/4 flex">
                        <img class="place-self-center self-center flex-shrink-0" src="{{ url('/images/About_IMG_MA_online.jpg') }}"  alt="semi">
                    </div>
                    <div class="ld-content flex flex-col w-full place-content-center md:w-2/4" style="direction: rtl;">
                        <div class="bg-white p-14 border-green border-solid border-10 overflow-visible float-right" style="width: 110%; direction: ltr;">
                            <span class="text-3xl sm:text-4xl font-bold mb-8 px-4 md:px-0">MA Online</span>
                            <p class="px-4 md:px-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-section-image bg-no-repeat bg-center bg-cover">
                <div class="container mx-auto flex flex-col place-items-center content-center py-32 md:py-52">
                    <span class="text-4xl sm:text-5xl text-center text-white font-bold mb-12">NOG GEEN ACCOUNT?</span>
                    <a class="text-2xl sm:text-3xl text-center text-green font-bold transition-colors border-green border-solid border-8 rounded-full py-8 px-16" href="{{ route('register') }}">MELD JE AAN</a>
                </div>
            </div>
            <div>
                <div class="container mx-auto flex flex-col  py-32">
                    <span class="text-4xl sm:text-5xl font-bold text-pink pb-32 px-4 md:px-0">PROEFLESSEN</span>
                    <p class="w-full bg-white p-14 px-4 md:px-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                </div>
                <div class="w-full">

                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="w-full bg-gray-800">
            <div class="container mx-auto" >
                <footer class="flex w-full flex-col md:flex-row py-8 uppercase text-white">
                    <div class="flex flex-1 place-content-center items-center" >
                        <a class="p-4" href="#">Mediacollege</a>
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <a class="p-4" href="#">Ma Online</a>
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <img src="{{ url('/images/logo.png') }}" alt="logo-placeholder">
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <a class="p-4" href="#">Geen Account?</a>
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <a class="p-4" href="#">Proeflessen</a>
                    </div>
                </footer>
            </div>
        </div>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
