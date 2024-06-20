<!DOCTYPE html>
<html class="bg-slate-200" lang="en">

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
        <div
            class="pt-16  text-black font-semibold  lg:m-auto md:grid md:grid-cols-2 xl:grid-cols-5 lg:gap-10 xl:gap-2 lg:pt-18 2xl:grid-cols-7">
            <div class="m-auto xl:col-span-2 2xl:col-span-3">
                <div class="flex justify-start items-center space-x-2 p-4 md:flex-col md:items-start">
                    <img class="h-24 ml-4 md:h-28 lg:h-44 xl:h-56 2xl:h-72  "
                        src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="">
                    <p class="text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl poppins-extrabold-italic text-sky-800">
                        SELLER.IN</p>
                </div>
                <p class="text-base font-sans  px-4 text-xl">Tingkatkan kualitas bisnis anda bersama <span
                        class="russo-one-regular">SELLER.IN</span></p>
                <a href="/register" class="bg-sky-800 mt-4 mx-4 py-3 px-6 rounded-md inline-block">
                    <p class="w-auto h-auto text-white">GABUNG/DAFTAR</p>
                </a>
            </div>
            <div class="rounded-xl xl:col-span-3 2xl:col-span-4">
                <img src="{{ asset('landing-page/img/tahu-pentol.png') }}" alt="TahuPentol"
                    class=" w-full p-4 m-auto h-96 rounded-3xl object-cover md:h-96 lg:h-[500px] xl:h-[650px] 2xl:h-[800px] sm:h-full ">
            </div>
        </div>





        <div class="md:grid grid md:grid-cols-1 2xl:grid-cols-7">
            <div class="rounded-xl 2xl:col-span-5 m-auto">
                <img src="{{ asset('landing-page/img/piscok.jpg') }}" alt="TahuPentol"
                    class=" w-full m-auto rounded-3xl object-cover p-4 2xl:h-[800px] h-full">
            </div>
            <div class="flex justify-start p-4 mx-auto items-start 2xl:col-span-2 md:flex-col md:items-end">
                <p class="boogaloo-regular text-center text-6xl text-sky-800">
                    About Seller.in <br>
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
        <div class="h-auto w-full bg-slate-200">
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

        <footer class="bg-gray-300">
            <div class="items-center justify-center text-center m-auto mt-10 pt-10">
                <p class="text-2xl footer-title text-slate-800 ml-4">Hubungi Kami<br> <span class="text-lg">Untuk
                        informasi lebih lanjut</span></p>
            </div>
            <div
                class="grid grid-cols-1  p-10 gap-4  text-neutral-content sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:w-[70%] lg:m-auto ">
                <div class="flex items-center xl:justify-center">
                    <img src="{{ asset('landing-page/img/email.png') }}" class="w-28 p-4">
                    <p class="text-2xl footer-title text-slate-800 ml-4">Email<br> <span
                            class="text-base">info@seller.in</span></p>
                </div>
                <div class="flex items-center xl:justify-center">
                    <img src="{{ asset('landing-page/img/location.png') }}" class="w-28 p-4">
                    <p class="text-2xl footer-title text-slate-800 ml-4">Alamat<br><span class="text-base">A108 Adam
                            Street, New York, NY 535022</span></p>
                </div>
                <div class="flex items-center xl:justify-center">
                    <img src="{{ asset('landing-page/img/phone-call.png') }}" class="w-28 p-4">
                    <p class="text-2xl footer-title text-slate-800 ml-4">Telepon<br><span class="text-base">+1 5589
                            55488 55</span></p>
                </div>
            </div>
            <div class="container m-auto py-2">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Seller.in 2024</span>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
