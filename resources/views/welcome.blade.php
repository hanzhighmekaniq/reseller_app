<!DOCTYPE html>
<html class="bg-slate-200 scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller.in</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/animasi.css') }}" rel="stylesheet">
</head>

<body class="bg-slate-200">

    {{-- NAVBAR --}}
    @include('partials.navbarHome')

    {{-- BODY --}}
    <div class="w-full h-full">
        <div id="home"
            class="pt-16 text-black font-semibold  lg:m-auto md:grid md:grid-cols-2 xl:grid-cols-4 lg:gap-10 xl:gap-2 lg:pt-18 ">
            <div class="m-auto px-8 xl:col-span-2 ">
                <div class="flex justify-center m-auto items-center space-x-2 p-4 md:flex-col md:items-start md:ml-4">
                    <img class="h-24 ml-4 md:h-28 lg:h-44 xl:h-56 2xl:h-72 md:mb-4 lg:mb-6 xl:mb-8 2xl:mb-10 "
                        src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="">
                    <p class="text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl  poppins-extrabold-italic text-sky-800">
                        SELLER.IN</p>
                </div>
                <p class="text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl font-sans  px-4 2xl:pb-4">Tingkatkan
                    kualitas bisnis anda bersama <span class="russo-one-regular">SELLER.IN</span><br>Klik tombol dibawah
                    ini untuk mendaftarkan diri sebagai RESELLER</p>
                <a href="/register" class="bg-sky-800 mt-4 mx-4 py-3 px-6 rounded-md inline-block">
                    <p class="w-auto h-auto text-white">DAFTAR</p>
                </a>
            </div>
            <div class="rounded-xl xl:col-span-2 ">
                <img src="{{ asset('landing-page/img/Hp.png') }}" alt="TahuPentol"
                    class=" w-auto p-4 m-auto h-96 rounded-3xl md:h-96 lg:h-[500px] xl:h-[650px] 2xl:h-[800px] sm:h-full ">
            </div>
        </div>





        <div id="tentangkami" class="mt-16 md:grid grid md:grid-cols-1 2xl:grid-cols-7">
            <div class="rounded-xl 2xl:col-span-5 m-auto">
                <img src="{{ asset('landing-page/img/piscok.jpg') }}" alt="TahuPentol"
                    class=" w-full m-auto rounded-3xl object-cover p-4 2xl:h-[800px] h-full">
            </div>
            <div class="flex justify-start p-4 mx-auto items-start 2xl:col-span-2 md:flex-col md:items-end">
                <p class="boogaloo-regular text-center text-6xl text-sky-800">
                    Tentang Kami Seller.in <br>
                    <span class="text-xl p-0 font-serif font-normal text-end justify-end items-end leading-normal">
                        "Seller" adalah istilah yang digunakan untuk merujuk kepada seseorang atau entitas yang menjual
                        barang atau jasa kepada konsumen atau pelanggan. Istilah ini umumnya digunakan dalam konteks
                        perdagangan, baik secara offline maupun online. SELLER.IN sebuah perusahaan yang menciptakan
                        peluang pekerjaan bagi IRT Dan Pelajar. Mengkombinasikan IRT (Ibu Rumah Tangga) membuat produk
                        seperti:
                    </span>
                </p>
            </div>

        </div>
        <div id="produk" class="h-auto w-full bg-slate-200">
            <p class="boogaloo-regular text-sky-800 text-6xl my-6 text-center">PRODUCT</p>
            <div class="px-12 py6 w-full h-auto m-auto justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <div class="card bg-gray-100 shadow-2xl overflow-hidden">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-3xl">RISOL</h2>
                        </div>
                        <div class="h-72 px-4 pb-2">
                            <img src="{{ asset('landing-page/img/risol-menu.jpg') }}" alt="RISOL"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="card bg-gray-100 shadow-2xl overflow-hidden">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-3xl">TAHU PENTOL</h2>
                        </div>
                        <div class="h-72 px-4 pb-2">
                            <img src="{{ asset('landing-page/img/tahupentol-menu.webp') }}" alt="RISOL"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="card bg-gray-100 shadow-2xl overflow-hidden">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-3xl">KRIPIK</h2>
                        </div>
                        <div class="h-72 px-4 pb-2">
                            <img src="{{ asset('landing-page/img/kripik-menu.jpg') }}" alt="RISOL"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="card bg-gray-100 shadow-2xl overflow-hidden">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-3xl">PISANG COKLAT</h2>
                        </div>
                        <div class="h-72 px-4 pb-2">
                            <img src="{{ asset('landing-page/img/piscok-menu.webp') }}" alt="RISOL"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <div class="card bg-gray-100 shadow-2xl overflow-hidden">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-3xl">BASRENG</h2>
                        </div>
                        <div class="h-72 px-4 pb-2">
                            <img src="{{ asset('landing-page/img/basreng-menu.jpg') }}" alt="RISOL"
                                class="h-full w-full object-cover" />
                        </div>
                    </div>
                    <!-- Tambahkan konten card lainnya di sini -->
                </div>
            </div>
        </div>


        <div id="kontak"
            class="my-36 max-w-xs sm:max-w-sm md:max-w-2xl lg:max-w-4xl xl:max-w-full mx-auto xl:px-12 ">
            <div class="shadow-lg border rounded-xl py-7">
                <div class="xl:flex xl:items-center">
                    <form action="" class="px-5 xl:px-14  xl:w-1/2">
                        <div class="flex items-center justify-center mt-7 mb-3">
                            <div class="h-1 w-12 bg-orange-500 mr-4"></div>
                            <p class="tracking-wider text-lg  text-black">Kontak</p>
                            <div class="h-1 w-12 bg-orange-500 ml-4"></div>
                        </div>
                        <h1 class="text-center text-4xl font-semibold text-black">Hubungi Kami</h1>
                        <div class="flex flex-col my-5 xl:my-7"><label for="nama"
                                class="mb-2 font-semibold text-black">Nama</label><input type="text" id="nama"
                                class="rounded-md border-2 bg-white px-2 h-8 xl:h-10 focus:border-orange-500 focus:ring-0"
                                value=""></div>
                        <div class="flex flex-col my-5 xl:my-7"><label for="email"
                                class="mb-2 font-semibold text-black">Email</label><input type="email" id="email"
                                class="rounded-md border-2 bg-white px-2 h-8 xl:h-10 focus:border-orange-500 focus:ring-0"
                                value=""></div>
                        <div class="flex flex-col my-5 xl:my-7"><label for="pesan"
                                class="mb-2 font-semibold text-black">Pesan</label>
                            <textarea name="pesan" id="pesan"
                                class="rounded-md border-2 bg-white px-2 h-20 xl:h-28 focus:border-orange-500 focus:ring-0"></textarea>
                        </div>


                        <button
                            class="bg-orange-500 font-semibold text-white px-2.5 py-2 rounded-lg w-full">Submit</button>
                    </form>
                    <div class="xl:w-1/3 mx-auto">
                        <div class="bg-orange-500 bg-opacity-20 rounded-2xl mt-10 mx-auto w-fit xl:w-full"><img
                                src="{{ asset('landing-page/img/contact-us.png') }}" alt=""
                                class="w-72 h-72 mx-auto xl:w-full xl:h-full"></div>

                    </div>
                </div>
                <div class=" m-auto  lg:flex justify-center items-center p-8 pb-4 lg:space-x-6  font-semibold">
                    <div class="flex items-center justify-center my-4 "><svg class="text-orange-500 mr-2"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            class="text-[#A4074D] mr-2" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M515.664-.368C305.76-.368 128 178.4 128 390.176c0 221.76 206.032 448.544 344.624 607.936.528.64 22.929 25.52 50.528 25.52h2.449c27.6 0 49.84-24.88 50.399-25.52 130.064-149.52 320-396.048 320-607.936C896 178.4 757.344-.368 515.664-.368zm12.832 955.552c-1.12 1.12-2.753 2.369-4.193 3.409-1.472-1.008-3.072-2.288-4.255-3.408l-16.737-19.248C371.92 785.2 192 578.785 192 390.176c0-177.008 148.224-326.56 323.664-326.56 218.528 0 316.336 164 316.336 326.56 0 143.184-102.128 333.296-303.504 565.008zm-15.377-761.776c-106.032 0-192 85.968-192 192s85.968 192 192 192 192-85.968 192-192-85.968-192-192-192zm0 320c-70.576 0-129.473-58.816-129.473-129.408 0-70.576 57.424-128 128-128 70.624 0 128 57.424 128 128 .032 70.592-55.903 129.408-126.527 129.408z">
                            </path>
                        </svg>
                        <p>545 Mavis Island, IL 99191</p>
                    </div>
                    <div class="flex items-center justify-center my-4"><svg class="text-orange-500 mr-2"
                            stroke ="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round" class="text-[#A4074D] mr-2"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        <p>+2034 4040 3030</p>
                    </div>
                    <div class="flex items-center justify-center my-4"><svg class="text-orange-500 mr-2"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            class="text-[#A4074D] mr-2" height="24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z">
                            </path>
                        </svg>
                        <p>hello@gmail.com</p>
                    </div>
                </div>

            </div>

        </div>


        <footer class="bg-[#1A2434] text-white">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-10 md:mb-0"><a class="flex items-center gap-x-3" href="/"> <img
                                src="" alt=""><span
                                class="self-center text-2xl font-semibold whitespace-nowrap">SELLER.IN</span></a>
                        <p class="text-gray-400 mt-5">SELLER.IN merupakan website resseler yang dapat diakses
                            melalui internet.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div>
                            <h2 class="mb-6 text-lg font-semibold">Halaman</h2>
                            <ul class="text-gray-400  font-medium">
                                <li class="mb-3"><a class="hover:text-gray-300" href="/">Beranda</a></li>
                                <li class="mb-3"><a class="hover:text-gray-300" href="/">Tentang Kami</a>
                                </li>
                                <li class="mb-3"><a class="hover:text-gray-300" href="/">Produk</a></li>
                                <li class="mb-3"><a class="hover:text-gray-300" href="/">Kontak</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-lg font-semibold">Layanan</h2>
                            <ul class="text-gray-400  font-medium">
                                <li class="mb-3"><a class="hover:text-gray-300" href="/">Tes Kraeplin</a>
                                </li>
                                <li class="mb-3"><a class="hover:text-gray-300" href="/">Tes DISC</a></li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-lg font-semibold">Sosial Media</h2>
                            <div class="flex gap-4 text-gray-400"><a class="hover:text-gray-300" href="/"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 320 512" height="20" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg></a><a class="hover:text-gray-300" href="/"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 512 512" height="20" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg></a><a class="hover:text-gray-300" href="/"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 448 512" height="20" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg></a><a class="hover:text-gray-300" href="/"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 448 512" height="20" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                        </path>
                                    </svg></a><a class="hover:text-gray-300" href="/"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 576 512" height="20" width="20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                        </path>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8">
                <div class="sm:text-center"><span class="text-sm text-gray-400">© 2024 <a class="hover:text-gray-300"
                            href="/">SELLER.IN</a>. All Rights Reserved.</span></div>
            </div>
        </footer>
    </div>

</body>

</html>
