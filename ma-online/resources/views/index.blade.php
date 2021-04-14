<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>MA Online</title>
        
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
                        <a class="self-center bg-green-400 hover:bg-green-300 transition-colors rounded text-lg text-white py-2 px-4" href="{{ route('login') }}">Inloggen</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="w-full bg-gray-400" style="padding-top: 104px; height: 100vh;"> 

        </div>

        <div class="container mx-auto bg-gray-500" style="height: 5000px;">
            
        </div>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>