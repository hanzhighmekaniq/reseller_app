<!DOCTYPE html>
<html class="bg-white scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller.in</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/animasi.css') }}" rel="stylesheet">
</head>


{{-- NAVBAR --}}
@include('partials.navbarHome')




<body id="home" class="bg-white">
    {{-- BODY --}}
    <div class="w-full h-full">
        <div
            class="pb-14 text-black font-semibold flex flex-col-reverse lg:m-auto md:grid md:grid-cols-2 lg:gap-10 xl:gap-2 lg:pt-18 ">
            <div class="rounded-xl m-auto flex justify-center sm:flex sm:justify-center md:justify-center">
                <img src="{{ asset('landing-page/img/jajanbiru.png') }}" alt="TahuPentol"
                    class="h-auto flex justify-center sm:w-[600px] md:w-[500px] lg:w-[600px] xl:w-[650px] 2xl:w-[850px]">
            </div>
            <div class="m-auto px-8 lg:px-10 xl:pl-10 lg:pb-16 xl:pb-20 2xl:pr-28 sm:py-8 ">
                <div class="flex justify-end pb-4 items-center md:grid md:grid-cols-1 space-x-2 md:">
                    <div class="md:flex justify-end md:pb-4 lg:pb-6">
                        <img class="h-24 md:h-36 lg:h-48 xl:h-56 2xl:h-64 "
                            src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="">
                    </div>
                    <div class="md:flex justify-end">
                        <p class="text-6xl lg:text-7xl xl:text-8xl 2xl:text-9xl poppins-extrabold-italic text-sky-800">
                            SELLER.IN</p>
                    </div>
                </div>
                <p class="text-base text-end sm:text-lg 2xl:pl-20  xl:text-xl 2xl:text-xl font-sans  2xl:pb-4">
                    Tingkatkan kualitas bisnis Anda Dengan
                    platform kami, Anda akan mendapatkan alat dan dukungan yang Anda butuhkan untuk sukses di dunia
                    perdagangan digital.
                </p>
            </div>
            <div id="tentangkami">
            </div>
        </div>


        <div class="md:grid md:grid-cols-2 lg:grid-cols-2 2xl:grid-cols-2 mb-24">
            <div class=" mx-auto items-start md:flex-col md:items-end">
                <div class="p-4 m-auto flex items-center justify-center">
                    <div class="m-auto flex items-center justify-center h-1 w-12  bg-orange-500 mx-2 "></div>
                    <p class="tracking-wider text-lg  text-black">Tentang Kami</p>
                    <div class="m-auto flex items-center justify-center h-1 w-12 bg-orange-500 mx-2 "></div>
                </div>
                <div class="text-center text-3xl text-gray-900 font-semibold pb-8">
                    <h5>SELLER.IN platform bisnis untuk reseller</h5>
                </div>
                <div class="pl-16">
                    <p class="text-lg text-left font-serif text-black 2xl:text-xl">
                        "Seller" adalah istilah yang digunakan untuk merujuk kepada seseorang atau entitas yang menjual
                        barang atau jasa kepada konsumen atau pelanggan. Istilah ini umumnya digunakan dalam konteks
                        perdagangan, baik secara offline maupun online.
                        <span id="more-text" class="hidden xl:inline-block">
                            <br>
                            SELLER.IN dirancang untuk memudahkan para pebisnis dalam mengelola dan meningkatkan kualitas
                            bisnis mereka. Kami menawarkan berbagai alat dan fitur yang membantu Anda mengoptimalkan
                            penjualan, manajemen produk, dan laporan keuangan dengan mudah dan efisien.
                            <br>
                            <br>
                            Selain itu, SELLER.IN juga berkontribusi dalam menciptakan peluang pekerjaan bagi IRT (Ibu
                            Rumah Tangga) dan pelajar. Kami mendukung IRT dalam memproduksi barang-barang unik dan
                            kreatif serta memberikan pelajar kesempatan untuk mengembangkan keterampilan bisnis mereka
                            sejak dini.
                            <br><br>
                            Bergabunglah dengan SELLER.IN dan tingkatkan kualitas bisnis Anda dengan dukungan dan alat
                            yang tepat untuk sukses di dunia perdagangan digital.

                        </span>
                    </p>
                    <button id="read-more" class="mt-4 text-blue-500 hover:underline" onclick="toggleReadMore()">Baca
                        Selengkapnya</button>
                </div>


            </div>
            <div class="p-4 flex justify-center items-center">
                <img src="{{ asset('landing-page/img/hppp.png') }}" alt="" class="2xl:h-[700px] 2xl:w-auto">
            </div>
            <div id="produk">
            </div>
        </div>


        <div class="h-auto w-full">
            <div class="p-4 m-auto flex items-center justify-center">
                <div class="m-auto flex items-center justify-center h-1 w-12  bg-orange-500 mx-2 "></div>
                <p class="tracking-wider text-lg  text-black">Produk</p>
                <div class="m-auto flex items-center justify-center h-1 w-12 bg-orange-500 mx-2 "></div>
            </div>
            <div class="text-center text-3xl text-black font-semibold pb-8">
                <h5>Kami Menyediakan Berbagai Jenis Produk:</h5>
            </div>

            <div class="px-14 py-6 w-full h-auto flex  justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-4">
                    <div class=" ">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-xl">RISOL</h2>
                        </div>
                        <div class="h-80 ">
                            <img src="{{ asset('landing-page/img/risol-menu.jpg') }}" alt="RISOL"
                                class="h-full rounded-md  w-full object-cover" />
                        </div>
                    </div>

                    <div class="">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-xl">TAHU PENTOL</h2>
                        </div>
                        <div class="h-80 ">
                            <img src="{{ asset('landing-page/img/tahupentol-menu.webp') }}" alt="TAHU PENTOL"
                                class="h-full rounded-md w-full object-cover" />
                        </div>
                    </div>

                    <div class="">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-xl">KRIPIK</h2>
                        </div>
                        <div class="h-80 ">
                            <img src="{{ asset('landing-page/img/kripik-menu.jpg') }}" alt="KRIPIK"
                                class="h-full rounded-md w-full object-cover" />
                        </div>
                    </div>

                    <div class="">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-xl">PISANG COKLAT</h2>
                        </div>
                        <div class="h-80 ">
                            <img src="{{ asset('landing-page/img/piscok-menu.webp') }}" alt="PISANG COKLAT"
                                class="h-full rounded-md w-full object-cover" />
                        </div>
                    </div>

                    <div class="">
                        <div class="flex justify-center items-center p-4 text-center">
                            <h2 class="text-sky-800 luckiest-guy-regular text-xl">BASRENG</h2>
                        </div>
                        <div class="h-80 ">
                            <img src="{{ asset('landing-page/img/basreng-menu.jpg') }}" alt="BASRENG"
                                class="h-full rounded-md w-full object-cover" />
                        </div>
                    </div>

                    <!-- Tambahkan konten card lainnya di sini -->
                </div>
            </div>
            <div id="kontak">

            </div>
        </div>


        <div class="my-36 max-w-md sm:max-w-2xl md:max-w-2xl lg:max-w-4xl xl:max-w-full mx-auto xl:px-12 ">
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
                                class="mb-2 font-semibold text-black">Nama</label><input type="text"
                                id="nama"
                                class="rounded-md border-2 bg-white px-2 h-8 xl:h-10 focus:border-orange-500 focus:ring-0"
                                value=""></div>
                        <div class="flex flex-col my-5 xl:my-7"><label for="email"
                                class="mb-2 font-semibold text-black">Email</label><input type="email"
                                id="email"
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
                                <div class="flex items-center  my-4 ">
                                    <p>545 Mavis Island, IL 99191</p>
                                </div>
                                <div class="flex items-center  my-4">
                                    <p>+2034 4040 3030</p>
                                </div>
                                <div class="flex items-center  my-4">
                                    <p>hello@gmail.com</p>
                                </div>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-lg font-semibold">Hubungi Kami</h2>
                            <ul class="text-gray-400  font-medium">
                                <div class="flex items-center  my-4 "><svg class="text-orange-500 mr-2"
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 1024 1024" class="text-[#A4074D] mr-2" height="24"
                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M515.664-.368C305.76-.368 128 178.4 128 390.176c0 221.76 206.032 448.544 344.624 607.936.528.64 22.929 25.52 50.528 25.52h2.449c27.6 0 49.84-24.88 50.399-25.52 130.064-149.52 320-396.048 320-607.936C896 178.4 757.344-.368 515.664-.368zm12.832 955.552c-1.12 1.12-2.753 2.369-4.193 3.409-1.472-1.008-3.072-2.288-4.255-3.408l-16.737-19.248C371.92 785.2 192 578.785 192 390.176c0-177.008 148.224-326.56 323.664-326.56 218.528 0 316.336 164 316.336 326.56 0 143.184-102.128 333.296-303.504 565.008zm-15.377-761.776c-106.032 0-192 85.968-192 192s85.968 192 192 192 192-85.968 192-192-85.968-192-192-192zm0 320c-70.576 0-129.473-58.816-129.473-129.408 0-70.576 57.424-128 128-128 70.624 0 128 57.424 128 128 .032 70.592-55.903 129.408-126.527 129.408z">
                                        </path>
                                    </svg>
                                    <p>545 Mavis Island, IL 99191</p>
                                </div>
                                <div class="flex items-center  my-4"><svg class="text-orange-500 mr-2"
                                        stroke ="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-[#A4074D] mr-2"
                                        height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <p>+2034 4040 3030</p>
                                </div>
                                <div class="flex items-center  my-4"><svg class="text-orange-500 mr-2"
                                        stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 1024 1024" class="text-[#A4074D] mr-2" height="24"
                                        width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z">
                                        </path>
                                    </svg>
                                    <p>hello@gmail.com</p>
                                </div>
                            </ul>
                        </div>

                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8">
                <div class="sm:text-center"><span class="text-sm text-gray-400">© 2024 <a class="hover:text-gray-300"
                            href="/">SELLER.IN</a>. All Rights Reserved.</span></div>
            </div>
        </footer>

</body>
<script>
    function toggleReadMore() {
        var moreText = document.getElementById("more-text");
        var readMoreButton = document.getElementById("read-more");

        if (moreText.classList.contains("hidden")) {
            moreText.classList.remove("hidden");
            readMoreButton.innerText = "Baca Lebih Sedikit";
        } else {
            moreText.classList.add("hidden");
            readMoreButton.innerText = "Baca Selengkapnya";
        }
    }

    function adjustReadMoreLink() {
        var moreText = document.getElementById("more-text");
        var readMoreButton = document.getElementById("read-more");

        if (window.innerWidth >= 1280) { // xl breakpoint
            readMoreButton.classList.add("hidden");
        } else {
            readMoreButton.classList.remove("hidden");
        }
    }

    window.addEventListener('resize', adjustReadMoreLink);
    document.addEventListener('DOMContentLoaded', adjustReadMoreLink);
</script>


</html>
