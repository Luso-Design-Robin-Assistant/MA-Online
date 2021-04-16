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
            <div class="container mx-auto p-5">
                <nav class="flex">
                    <div class="flex-none flex justify-center w-60 h-16">
                        <a class="self-center text-3xl" href="#">Logo</a>
                    </div>
                    <ul class="flex-1 flex self-center flex-row ml-10">
                        <li><a class="pr-10" href="#">Voorbeeld</a></li>
                        <li><a class="pr-10" href="#">Voorbeeld</a></li>
                        <li><a class="pr-10" href="#">Voorbeeld</a></li>
                    </ul>
                    <div class="flex-none flex">
                        <a class="self-center text-lg py-2 px-4" href="{{ route('login') }}">Inloggen</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="w-full h-screen bg-hero-image bg-no-repeat bg-center bg-cover" style="padding-top: 104px;"></div>

        <div class="w-full">
            <div class="bg-gray-100">
                <div class="container mx-auto flex flex-row justify-between content-center bg-gray-100 py-32">
                    <div class="ld-content flex flex-col w-2/4 pr-20">
                        <span class="text-5xl uppercase font-bold pb-20">Informatie</span>
                        <span class="text-4xl font-bold mb-8">Mediacollege</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                    </div>
                    <div class="w-2/4">
                        <img class="" src="{{url('/images/semi-img.png')}}"  alt="semi">
                    </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="container mx-auto flex flex-row justify-between content-center bg-white py-32">
                    <div class="w-2/4">
                        <img class="" src="{{url('/images/semi-img.png')}}"  alt="semi">
                    </div>
                    <div class="ld-content flex flex-col w-2/4 mt-20 pl-20">
                        <span class="text-4xl font-bold mb-8">MA Online</span>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                    </div>
                </div>
            </div>
            <div class="bg-section-image bg-no-repeat bg-center bg-cover">
                <div class="container mx-auto flex flex-col place-items-center content-center py-52">
                    <span class="text-5xl font-black mb-12">NOG GEEN ACCOUNT?</span>
                    <a class="text-3xl font-bold bg-white hover:bg-gray-200 transition-colors rounded-full py-8 px-16" href="{{ route('register') }}">MELD JE AAN</a>
                </div>
            </div>
        </div>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
