{{-- TAILWIND --}}
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
{{-- TAILWIND --}}



<div class="bg-slate-100 w-full h-full">
    <div class="flex h-auto lg:w-[70%] w-full m-auto justify-between items-center">
        <div class="flex items-center">
            <div class="hidden md:block">
                <ul class="menu menu-horizontal space-x-2">
                    <li class="items-center justify-center rounded-md hover:bg-orange-600 bg-orange-500"><a
                            class="text-base text-black" href="#">Login</a></li>
                    <li class="items-center justify-center rounded-md hover:bg-orange-500"><a
                            class="text-base text-black" href="#">Home</a></li>
                    <li class="items-center justify-center rounded-md hover:bg-orange-500"><a
                            class="text-base text-black" href="#">Kontak</a>
                    </li>

                </ul>
            </div>
            <div class="md:hidden">
                <div class="drawer">
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <label for="my-drawer" class="text-black btn-circle swap swap-rotate">
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
                        <div class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                            <button class="hover:bg-orange-500 text-left w-full"><a href="#"
                                    class="block w-full px-4 py-2 text-slate-300">Home</a></button>
                            <button class="hover:bg-orange-500 text-left w-full"><a href="#"
                                    class="block w-full px-4 py-2 text-white">Kontak</a></button>
                            <button class="hover:bg-orange-500 text-left w-full"><a href="#"
                                    class="block w-full px-4 py-2 text-white">Login</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center">
            <a href="" class="font-sans text-[#2284BF] lg:text-xl text-base sm:text-base font-bold">SELLER.IN</a>
            <a href="#">
                <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo"
                    class=" p-2 2xl:h-18 xl:h-16 lg:h-16 md:h-14 sm:h-12 h-12">
            </a>
        </div>
    </div>
</div>
