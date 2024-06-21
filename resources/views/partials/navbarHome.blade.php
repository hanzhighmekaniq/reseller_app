{{-- TAILWIND --}}
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/font.css') }}">
{{-- FONT --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
{{-- TAILWIND --}}


<div class=" fixed top-0 left-0 right-0 mx-auto bg-gray-100 w-full m-auto z-50 ">
    <div class=" w-full h-full ">
        <div class="flex items-center justify-between md:hidden">
            <div class="justify-start">
                <div class="drawer">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <label for="my-drawer" class="text-sky-800 btn-circle swap swap-rotate">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" />
                            <!-- hamburger icon -->
                            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32"
                                height="32" viewBox="0 0 512 512">
                                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                            </svg>
                            <!-- close icon -->
                            <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32"
                                height="32" viewBox="0 0 512 512">
                                <polygon
                                    points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                            </svg>
                        </label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer" class="drawer-overlay"></label>
                        <div class="menu p-4 w-80 min-h-full bg-gray-300 text-base-content">
                            <a href="#" class="flex items-center justify-start bg-transparent border-none px-2">
                                <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo"
                                    class="h-12 mr-2 ml-4 my-4">
                                <span
                                    class="font-sans text-sky-800 text-4xl font-bold pr-2 russo-one-regular">SELLER.IN</span>
                            </a>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Home</a></button>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Abaout</a></button>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Product</a></button>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Kontak</a></button>
                            <div class="flex justify-center py-4 items-center">
                            </div>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="/login"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Login</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="justify-end">
                <a href="#" class="flex items-center justify-center bg-transparent border-none px-2">
                    <span
                        class="font-sans text-[#2284BF] lg:text-xl text-base sm:text-base font-bold pr-2 russo-one-regular">SELLER.IN</span>
                    <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo"
                        class="p-2 2xl:h-18 xl:h-16 lg:h-16 md:h-14 sm:h-12 h-12">
                </a>
            </div>
        </div>
        <div class="items-center justify-between hidden md:flex xl:w-[70%] lg:m-auto">
            <div class="justify-start">
                <a href="#" class="flex items-center justify-center bg-transparent border-none px-2">
                    <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo"
                        class="p-2 2xl:h-18 xl:h-16 lg:h-16 md:h-14 sm:h-12 h-12">
                    <span
                        class="font-sans text-[#2284BF] lg:text-xl text-base sm:text-base font-bold pr-2 russo-one-regular">SELLER.IN</span>
                </a>
            </div>
            <div class="justify-end">
                <ul class="menu menu-horizontal space-x-2">
                    <li class="items-center justify-center rounded-md hover:bg-orange-500 bg-orange-500"><a
                            class="text-base font-semibold text-white" href="/login">Login</a></li>
                    <li class="items-center justify-center rounded-md hover:bg-orange-500"><a
                            class="text-base font-semibold text-slate-800" href="#">Home</a></li>
                    <li class="items-center justify-center rounded-md hover:bg-orange-500"><a
                            class="text-base font-semibold text-slate-800" href="#">About</a></li>
                    <li class="items-center justify-center rounded-md hover:bg-orange-500"><a
                            class="text-base font-semibold text-slate-800" href="#">Product</a></li>
                    <li class="items-center justify-center rounded-md hover:bg-orange-400"><a
                            class="text-base font-semibold text-slate-800" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
