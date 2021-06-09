<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ url('/images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <title>MA Online</title>

        <style>

            body {
                font-family: 'Helvetica-Neue-Rom';
            }

        </style>

    </head>
    <body>

        <!-- Navbar -->
        <div class="ld-navbar fixed bg-white bg-opacity-75 font-helvetica-bld tracking-wider transition-colors w-full z-50">
            <div class="container mx-auto p-8">
                <nav class="flex uppercase">
                    <div class="ld-logo flex align-middle justify-center h-12">
                        <a class="self-center text-3xl" href="#top">
                            <img class="ls-logo w-20" src="{{ url('/images/Logo.png') }}" alt="logo-placeholder">
                        </a>
                    </div>
                    <ul class="ld-main-nav flex-1 hidden lg:flex self-center flex-row text-black ml-10 text-md md:text-lg lg:text-xl">
                        <li><a class="mr-10 whitespace-nowrap" href="#mediacollege">Mediacollege</a></li>
                        <li><a class="mr-10 whitespace-nowrap" href="#ma-online">Ma online</a></li>
                        <li><a class="mr-10 whitespace-nowrap" href="#geen-account">Geen acount?</a></li>
                        <li><a class="mr-10 whitespace-nowrap" href="#proeflessen">Proeflessen</a></li>
                    </ul>
                    <div class="ld-login flex text-black ml-auto lg:ml-0">
                        <a class="text-xl self-center py-2 px-4" href="{{ route('login') }}">Inloggen</a>
                    </div>
                    <div class="flex lg:hidden">
                        <input id="toggle1" class="hidden" type="checkbox" />
                        <label class="ld-hamburger1" for="toggle1">
                            <div class="ld-top bg-black relative mt-ham"></div>
                            <div class="ld-meat bg-black relative mt-ham"></div>
                            <div class="ld-bottom bg-black relative mt-ham"></div>
                        </label>
                        <nav class="ld-menu1 w-auto flex flex-col text-2xl text-center absolute top-28 right-0 z-50 overflow-hidden py-24 px-20">
                            <div class="w-full bold h-full bg-white text-black absolute top-0 left-0 z-0"></div>
                            <a class="ld-link1 py-8 z-10" href="#mediacollege">Mediacollege</a>
                            <a class="ld-link1 py-8 z-10" href="#ma-online">Ma online</a>
                            <a class="ld-link1 py-8 z-10" href="#geen-account">Geen account?</a>
                            <a class="ld-link1 py-8 z-10" href="#proeflessen">Proeflessen</a>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Hero image -->
        <div id="top" class="w-full h-screen bg-hero-image bg-no-repeat bg-center bg-cover">
            <!-- <div class="w-full h-full opacity-50 bg-gradient-to-b from-black via-gray-300 to-gray-400"></div> -->
        </div>

        <!-- Content -->
        <div class="w-full bg-gray-800">
            <div class="w-full">
                <div class="container mx-auto flex flex-col-reverse md:flex-row justify-between content-center relative pt-32 pb-20 md:py-32">
                    <span class="text-4xl sm:text-5xl uppercase text-pink font-helvetica-bld tracking-wider pl-6 sm:pl-4 md:pl-0 absolute top-10 xl:top-20">Informatie</span>
                    <div class="ld-content flex flex-col w-full place-content-center relative md:static md:w-2/4 px-6 sm:px-4 md:px-0">
                        <div class="w-90 md:w-110 mx-auto md:mx-auto bg-white relative -top-10 md:-top-0 md:static p-6 sm:p-14 z-10 overflow-visible">
                            <span id="mediacollege" class="text-3xl font-helvetica-bld tracking-wider sm:text-4xl font-bold px-4 md:px-0">Mediacollege</span>
                            <p class="font-helvetica-rom mb-8 md:mb-0 pt-8 px-4 md:px-0" >Ma is een vakschool voor de media. Je hebt de keus uit 14 praktijkgerichte opleidingen waarmee je straks aan de slag kunt in de entertainmentwereld, de game-industrie, een ontwerpbureau, reclamebureau of bijvoorbeeld een bureau voor standbouw. Welke opleiding je ook kiest, je wordt opgeleid tot een professional in het vak van jouw keus.
                                <br> <br>
                                Tijdens je opleiding doe je mee aan projecten, waarbij je samenwerkt met studenten van andere opleidingen. Professionals in de mediabranche moeten namelijk niet alleen goed zijn in hun eigen vak. Ze moeten ook kunnen samenwerken met mensen met een andere specialisatie.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-2/4 flex">
                        <img class="place-self-center self-center flex-shrink-0 px-6 sm:px-4 md:px-0" src="{{ url('/images/About_IMG_Mediacollege.jpg') }}"  alt="semi">
                    </div>
                </div>
            </div>
            <div id="ma-online" class="w-full">
                <div class="container mx-auto flex flex-col md:flex-row justify-between content-center py-20 md:py-32">
                    <div class="w-full md:w-2/4 flex">
                        <img class="place-self-center self-center flex-shrink-0 px-6 sm:px-4 md:px-0" src="{{ url('/images/About_IMG_Ma_online.jpg') }}"  alt="semi">
                    </div>
                    <div class="ld-content flex flex-col w-full place-content-center relative md:static md:w-2/4 px-6 sm:px-4 md:px-0" style="direction: rtl;">
                        <div class="w-90 md:w-110 mx-auto md:mx-auto bg-white relative -top-10 md:-top-0 md:static p-6 sm:p-14 border-green-200 border-solid border-10 overflow-visible float-right" style="direction: ltr;">
                            <span class="text-3xl font-helvetica-bld tracking-wider sm:text-4xl mb-8 px-4 md:px-0">MA Online</span>
                            <p class="font-helvetica-rom pt-8 px-4 md:px-0">Ma Online is dé online leeromgeving voor een leven lang ontwikkelen voor onze huidige en aspirant studenten, voor docenten en ondersteunende medewerkers, voor alumni en beroepsprofessionals.
                                <br> <br>
                                Het platform is de centrale leeromgeving waar kennis- en leermateriaal wordt aangeboden en uitgewisseld. Docenten kunnen het materiaal, ook van collega’s, inzetten in hun lespraktijk en studenten kunnen zelf op zoek naar materiaal dat aansluit bij hun leerbehoefte. Studenten krijgen op deze manier ruimte om hun eigen studieloopbaan uit te stippelen en interesses te voeden buiten de opleiding om. Het platform voorziet in deze behoefte door het open toegankelijk maken van al het leermateriaal dat wordt aangeboden.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="geen-account" class="w-full bg-section-image bg-no-repeat bg-center bg-cover">
                <div class="w-full bg-gray-800 bg-opacity-50">
                    <div class="container mx-auto flex flex-col place-items-center content-center py-32 md:py-46">
                        <span class="text-4xl sm:text-5xl text-center text-white font-helvetica-bld tracking-wider mb-12">NOG GEEN ACCOUNT?</span>
                        <a class="text-2xl sm:text-3xl bg-transparent hover:bg-green text-center text-green-200 hover:text-white font-helvetica-bld tracking-wider transition-colors border-green-200 border-solid border-8 rounded-full py-4 px-16" href="{{ route('register') }}">MELD JE AAN</a>
                    </div>
                </div>
            </div>
            <div id="proeflessen" class="w-full">
                <div class="container mx-auto flex flex-col pt-32 pb-20 px-6 sm:px-4 md:px-0">
                    <span class="text-4xl sm:text-5xl font-helvetica-bld tracking-wider text-pink pb-12">PROEFLESSEN</span>
                    <p class="w-full bg-white p-6 sm:p-14 font-helvetica-rom border-yellow border-solid border-10">Ben je benieuwd naar wat wij allemaal in huis hebben? Volg dan een proefles! Er is een selectie gemaakt van verschillende proeflessen, zodat je een goed beeld krijgt van de mogelijkheden op Ma online. Sommige lessen zijn gericht op bepaalde softwarepakketten, zoals bijv: Photoshop, Illustrator en Indesign.</p>
                </div>
                <div class="w-full container mx-auto pb-32">
                    <div class="gallery js-flickity font-helvetica-bld tracking-wider" data-flickity-options='{ "freeScroll": false, "wrapAround": true }'>
                        <div class="gallery-cell w-3/5 md:w-2/5 lg:w-1/5 bg-white p-14 mr-40">
                            <a class="flex flex-col place-items-center" href="#">
                                <span class="text-xl text-black md:text-2xl text-center pb-14">PHOTOSHOP</span>
                                <img src="{{ url('/images/Icon_photoshop.png') }}" alt="Photoshop icon">
                            </a>
                        </div>
                        <div class="gallery-cell w-3/5 md:w-2/5 lg:w-1/5 bg-white p-14 mr-40">
                            <a class="flex flex-col place-items-center" href="#">
                                <span class="text-xl text-black md:text-2xl text-center pb-14">ILLUSTRATOR</span>
                                <img src="{{ url('/images/Icon_illustrator.png') }}" alt="Illustrator icon">
                            </a>
                        </div>
                        <div class="gallery-cell w-3/5 md:w-2/5 lg:w-1/5 bg-white p-14 mr-40">
                            <a class="flex flex-col place-items-center" href="#">
                                <span class="text-xl text-black md:text-2xl text-center pb-14">AFTER EFFECTS</span>
                                <img src="{{ url('/images/Icon_after_effects.png') }}" alt="After effects icon">
                            </a>
                        </div>
                        <div class="gallery-cell w-3/5 md:w-2/5 lg:w-1/5 bg-white p-14 mr-40">
                            <a class="flex flex-col place-items-center" href="#">
                                <span class="text-xl text-black md:text-2xl text-center pb-14">XD</span>
                                <img src="{{ url('/images/Icon_XD.png') }}" alt="XD icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="w-full bg-gray-800 shadow-footer">
            <div class="container mx-auto">
                <footer class="ld-footer flex w-full flex-col md:flex-row py-8 font-helvetica-bld tracking-wider uppercase text-white">
                    <div class="flex flex-1 place-content-center items-center" >
                        <a class="text-xl p-4" href="#mediacollege">Mediacollege</a>
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <a class="text-xl p-4" href="#ma-online">Ma Online</a>
                    </div>
                    <div class="flex-1">
                        <a class="flex place-content-center items-center" href="#top">
                            <img class="w-2/4" src="{{ url('/images/Logo.png') }}" alt="logo-placeholder">
                        </a>
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <a class="text-xl p-4" href="#geen-account">Geen Account?</a>
                    </div>
                    <div class="flex flex-1 place-content-center items-center">
                        <a class="text-xl p-4" href="#proeflessen">Proeflessen</a>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
