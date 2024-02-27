<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style/hm.css">
    <link href="style/font.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <title>Hipnoterapi</title>
</head>

<header class="bg-white py-16 px-32 shadow-xl fixed top-0 w-full z-50 tablet:py-8 tablet:px-16 ">
    <nav class="flex justify-between ">
    <a href="#" class="text-3xl hover:text-custom-second-color tablet:text-base"><h1>Hypno<span class="font-bold">Teraphy</span></h1></a>
    <ul class="text-2xl flex gap-16 text-gray-500 tablet:gap-8">
        <a href="/"><li class="font-normal hover:text-custom-second-color tablet:text-base">Home</li></a>
        <a href="/#about"><li class="font-normal hover:text-custom-second-color tablet:text-base">About Me</li></a>
        <a href="#"><li class="font-normal hover:text-custom-second-color tablet:text-base">HypnoTeraphy</li></a>
        <a href="/service"><li class="font-normal hover:text-custom-second-color tablet:text-base">Services</li></a>
    </ul>
    <a href="#" class="text-s text-white bg-gradient-to-br from-cyan-400 to-cyan-800 py-2 px-5 
    tablet:py-1.5 rounded-full hover:bg-gradient-to-tl from cyan-400 to cyan-800 tablet:text-[8px]">Contact Me</a>
    </nav>
</header> 

<body class="bg-custom-main-color">
    <section class="pricelist" id="pricelist">
        <div class="price-container">
            <div class="price-content">
                <h1 class="poppins-bold text-center hs">Price List</h1>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Paket konsultasi Self Mental Health</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold ">Rp.400.000 / 3x Pertemuan</h5>
                                    <button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button>                                   
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Slimming Diet</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.200.000 / 1x Pertemuan</h5>
                                    <button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button>                                  
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Paket Hemat Berhenti Merokok</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.130.000 / 1x Pertemuan</h5>
                                    <button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button>                                   
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Konsulti Pasutri</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.140.000 / 1x Pertemuan</h5>
                                    <button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button>                                  
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-list m-2 mt-4 p-3 py-2 rounded-4">
                    <div class="row text-start">
                        <div class="col d-flex align-items-center">
                        <div class="form-check ms-3 mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="border: 2px solid black">
                            <label class="form-check-label" for="flexCheckDefault">
                                <p class="poppins-semibold">Kangen Water</p>
                            </label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="row justify-content-end">
                                <div class="col d-flex flex-column align-items-end">
                                    <h5 class="text-end me-4 poppins-bold">Rp.6.000 / botol 600ml</h5>
                                    <button class="ubt btn btn-info mt-2 me-4 p-1 px-3 rounded-pill shadow-sm text-white poppins-regular">lihat Detail</button>                                     
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="alamat" id="alamat">
        <div class="alamat-container">
            <h1 class="poppins-bold text-center hs mb-5 me-4">Alamat</h1>
            <div class="alamat-content container">
                <div class="row container">
                    <div class="col d-flex justify-content-center"> {{-- map 1 --}}
                        <div class="row align-items-center shadow ms-5" style="background-color: white; width: 65%">
                                <div class="col mx-1 d-flex justify-content-center py-3">
                                    <div class="mapouter">
                                        <div class="gmap_canvas rounded-4">
                                            <iframe width="450" height="173" id="gmap_canvas" src="https://maps.google.com/maps?q=Hipnoterapi+Cibalong&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://online.stopwatch-timer.net/">timer for kids</a><br><a href="https://textcaseconvert.com/"></a><br><style>.mapouter{position: relative;text-align: right;height: 173px;width: 344px;}</style><a href="https://www.mapembed.net">map box</a>
                                            <style>.gmap_canvas{overflow: hidden;background: none !important;height: 173px;width: 344px;}</style>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-start poppins-semibold ps-4 py-2">Hipnoterapi Cibalong</h4>
                                <p class="text-start ps-4 poppins-light pb-4">Kp. Bantarpayung, RT.002/RW.003,
                                    Singajaya, Kec. Cibalong, Kabupaten Tasikmalaya, Jawa Barat 46185</p>
                                <div class="ps-4 p-2 pb-4">
                                    <i></i><a class="link-primary" style="cursor: pointer">View Larger map</a>                                        
                                </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center"> {{-- map 1 --}}
                        <div class="row align-items-center shadow me-5" style="background-color: white; width: 65%">
                                <div class="col mx-1 d-flex justify-content-center py-3">
                                    <div class="mapouter">
                                        <div class="gmap_canvas rounded-4">
                                            <iframe width="344" height="173" id="gmap_canvas" src="https://maps.google.com/maps?q=Praktik+dr.+Ade+Ilyas+Mukmin%2C+Jl.+Ranca+Senggang%2C+RT.05%2FRW.08%2C+Cibunigeulis%2C+Bungursari%2C+Tasikmalaya+Regency%2C%C2%A0West%C2%A0Java%C2%A046151&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            <a href="https://online.stopwatch-timer.net/">timer for kids</a><br><a href="https://textcaseconvert.com/"></a><br><style>.mapouter{position: relative;text-align: right;height: 173px;width: 344px;}</style><a href="https://www.mapembed.net">embedding maps in website</a>
                                            <style>.gmap_canvas{overflow: hidden;background: none !important;height: 173px;width: 344px;}</style>
                                        </div>
                                    </div>                    
                                </div>
                                <h4 class="text-start poppins-semibold ps-4 py-2">Praktik dr. Ade Ilyas Mukmin</h4>
                                <p class="text-start ps-4 poppins-light pb-4">Jl. Ranca Senggang, RT.05/RW.08, Cibunigeulis, Kec. Bungursari, Kab. Tasikmalaya, Jawa Barat 46151</p>
                                <div class="ps-4 p-2 pb-4">
                                    <i></i><a class="link-primary" style="cursor: pointer">View Larger map</a>                                        
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>