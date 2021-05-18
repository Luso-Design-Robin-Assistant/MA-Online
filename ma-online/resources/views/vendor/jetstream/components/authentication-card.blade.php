<div class="ls-nav flex flex-row justify-between w-screen absolute px-20 py-10">
    <a href="/">
        <img class="ls-logo w-20" src="{{ url('/images/logo.png') }}" alt="logo-placeholder">
    </a>
    <button class="bg-transparent flex items-center text-white uppercase text-l md:text-2xl text-center hover:text-white transition-colors bg-green rounded-full py-2 md:py-2 px-6 md:px:12 font-semibold p-4 h-full" onclick="goBack()">Terug</button>
</div>
<div class="flex flex-col md:flex-row h-screen">
    <div class="ls-hero w-full h-80 md:h-screen md:w-6/12">
        <div class="bg-no-repeat h-80 md:h-screen bg-cover" style="background-image: url('/images/IMG_aanmelden_pagina.jpg')"></div>
    </div>
    <div class="ls-register h-full md:h-screen grey flex items-center bg-gray-100 w-full md:w-6/12 justify-center" style="background: #211F20; color: white">
        <div class="w-10/12">
            {{ $slot }}
        </div>
    </div>
</div>

<script>

    function goBack() {
        window.history.back();
    }

</script>
