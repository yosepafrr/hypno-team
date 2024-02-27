<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @extends('vendor.asse')

    <title>Hipnoterapi</title>
    @vite('resources/css/app.css')
</head>
<header class="bg-white py-12 px-32 shadow-xl fixed top-0 w-full z-50 tablet:py-8 tablet:px-16 ">
    <nav class="flex justify-between ">
    <a href="#" class="text-xl hover:text-custom-second-color tablet:text-base"><h1>Hypno<span class="font-bold">Teraphy</span></h1></a>
    <ul class="text-xl flex gap-16 text-gray-500 tablet:gap-8">
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">Home</li></a>
        <a href="#about"><li class="font-normal hover:text-custom-second-color tablet:text-base">About Me</li></a>
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">HypnoTeraphy</li></a>
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">Services</li></a>
    </ul>
    <a href="#" class="text-xs text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-2 px-5 tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800 tablet:text-[8px]">Contact Me</a>
    </nav>
</header>                                               
<body>

    {{-- @extends('nav.nav') --}}

    {{-- <img src="images/Hypno-bg.jpg" class="position-absolute">

    <div class="container px-0 py-0 m-0 position-absolute top-50 start-50 translate-middle">
        <div class="row mx-auto d-flex justify-content-center text-center" style="width: 75vw">
            <div class="col my-auto me-5 text-center" style="width: 20vw">
                <h1 class="text-white poppins-bold hp">Hipnoterapi</h1>
                <h5 class="mt-3 text-white">"Efektifitas Terapi Penyakit Kejiwaan"</h5>
                <button class="ubt btn btn-info mt-2 p-2 px-4 rounded-pill shadow-sm text-white">Kunjungi</button>
            </div>
        </div>
    </div> --}}
</body>
</html>