<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>MA Online</title>
        
    </head>
    <body>
        
        <div class="fixed bg-white shadow w-full">
            <div class="container mx-auto p-5">
                <nav class="flex">
                    <div class="flex-none flex justify-center w-60 h-16">
                        <a class="self-center text-3xl" href="#">Logo</a>
                    </div>
                    <ul class="flex-1 flex self-center flex-row pl-10">
                        <li><a class="pr-10" href="#">Voorbeeld</a></li>
                        <li><a class="pr-10" href="#">Voorbeeld</a></li>
                        <li><a class="pr-10" href="#">Voorbeeld</a></li>
                    </ul>
                    <div class="flex-none flex">
                        <a class="self-center text-lg" href="#">Inloggen</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container mx-auto bg-purple-300" style="padding-top: 104px; height: 5000px;">
            
        </div>

    </body>
</html>