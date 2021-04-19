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

        <div class="ld-navbar fixed ld-transparent w-full">
            <div class="container mx-auto p-10">
                <nav class="flex uppercase" style="color:white">
                    <div class="flex align-middle justify-center h-16">
                        <a class="self-center text-3xl" href="#">
                            <img class="ls-logo w-24" src="{{ url('/images/logo.png') }}" alt="logo-placeholder">
                        </a>
                    </div>
                    <ul class="flex-1 flex self-center flex-row ml-10 text-xl">
                        <li><a class="pr-10" href="#">Mediacollege</a></li>
                        <li><a class="pr-10" href="#">Ma online</a></li>
                        <li><a class="pr-10" href="#">Geen acount?</a></li>
                        <li><a class="pr-10" href="#">Proeflessen</a></li>
                    </ul>
                    <div class="flex">
                        <a class="text-xl self-center text-lg py-2 px-4" href="{{ route('login') }}">Inloggen</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="w-full h-screen bg-hero-image bg-no-repeat bg-center bg-cover" style="padding-top: 104px;">
            <img src="" alt="">
        </div>

        <div class="w-full" style="background:#211F20">
            <div class="w-full ">
                <div class="container mx-auto flex flex-col md:flex-row justify-between content-center">
                    <div class="ld-content flex flex-col w-full md:w-2/4 pr-0 md:pr-20 py-32">
                        <span class="text-4xl  sm:text-5xl uppercase font-bold pb-20 px-4 md:px-0" style="color: #EC148C">Informatie</span>
                        <div class="bg-white p-14">
                            <span class="text-3xl sm:text-4xl font-bold mb-8 px-4 md:px-0">Mediacollege</span>
                            <p class="mb-8 md:mb-0 px-4 md:px-0" >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                    </div>
                    <div class="w-full md:w-2/4 flex sm:pb-32">
                        <img class="place-self-center self-center flex-shrink-0" src="{{ url('/images/About_IMG_Mediacollege.jpg') }}"  alt="semi">
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="container mx-auto flex flex-col md:flex-row justify-between content-center">
                    <div class="w-full md:w-2/4 flex sm:pt-32">
                        <img class="place-self-center self-center flex-shrink-0" src="{{ url('/images/About_IMG_MA_online.jpg') }}"  alt="semi">
                    </div>
                    <div class="ld-content flex flex-col w-full md:w-2/4 py-32 pl-0 md:pl-20">
                        <div class="bg-white p-5 " style="border: #6AC39B solid 12px">
                            <span class="text-3xl sm:text-4xl font-bold mb-8 px-4 md:px-0">MA Online</span>
                            <p class="px-4 md:px-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-section-image bg-no-repeat bg-center bg-cover">
                <div class="container mx-auto flex flex-col place-items-center content-center py-32 md:py-52">
                    <span class="text-4xl sm:text-5xl text-center font-bold mb-12" style="color: white">NOG GEEN ACCOUNT?</span>
                    <a class="text-2xl sm:text-3xl text-center font-bold  transition-colors rounded-full py-8 px-16" style="border: #6AC39B solid 8px; color:#6AC39B" href="{{ route('register') }}">MELD JE AAN</a>
                </div>
            </div>
            <div>
                <div class="container mx-auto flex flex-col  py-32">
                    <span class="text-4xl sm:text-5xl font-bold pb-32 px-4 md:px-0" style="color: #EC148C">PROEFLESSEN</span>
                    <p class="w-full w-2/3 bg-white p-14 px-4 md:px-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                </div>
                <div class="w-full">

                </div>
            </div>
        </div>

        <div class="container mx-auto w-full" >
            <footer class="flex w-full flex-col md:flex-row py-8 uppercase" style="background:#211F20; color:white">
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

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
