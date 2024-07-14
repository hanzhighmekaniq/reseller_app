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

<script>
    // JavaScript to handle scroll event
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('shadow-md');
            navbar.classList.add('bg-white');
        } else {
            navbar.classList.remove('shadow-md');
        }
    });
</script>
<div class="top-0  mx-auto sticky bg-white bg-opacity-0  w-full m-auto z-50 ">
    <nav id="navbar" class=" w-full h-full  ">
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
                            <a href="#home" class="flex items-center justify-start bg-transparent border-none px-2">
                                <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo"
                                    class="h-12 mr-2 ml-4 my-4">
                                <span
                                    class="font-sans text-sky-800 text-4xl font-bold pr-2 russo-one-regular">SELLER.IN</span>
                            </a>

                            <button class="hover:bg-orange-400 text-left w-full"><a href="#home"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Beranda</a></button>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#tentangkami"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Tentang
                                    Kami</a></button>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#produk"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Produk</a></button>
                            <button class="hover:bg-orange-400 text-left w-full"><a href="#kontak"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Kontak</a></button>
                            <div class="flex justify-center py-4 items-center">
                            </div>
                            <a class="hover:bg-orange-400 text-left w-full"><a href="/login"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Login</a></a>
                            <a class="hover:bg-orange-400 text-left w-full"><a href="/login"
                                    class="block w-full px-6 py-2 text-slate-800 font-semibold text-lg">Daftar</a></a>
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

        {{-- TAMPILAN BESAR --}}
        <div class=" items-center justify-between hidden md:flex xl:w-[70%] lg:m-auto">
            <div class="flex space-x-4 items-center">
                <a href="#" class="flex items-center justify-center bg-transparent border-none px-2">
                    <img src="{{ asset('sb-admin-2/img/SELLER_new.png') }}" alt="Seller Logo"
                        class="p-2 2xl:h-18 xl:h-16 lg:h-16 md:h-14 sm:h-12 h-12">
                    <span
                        class="font-sans text-[#2284BF] lg:text-xl text-base sm:text-base font-bold pr-2 russo-one-regular">SELLER.IN</span>
                </a>
            </div>

            <div class="flex space-x-4 items-center">
                <ul class="flex space-x-4">
                    <li class="rounded-md hover:bg-orange-500">
                        <a class="block px-4 py-2 text-base font-semibold hover:text-white text-slate-800  "
                            href="#home">Beranda</a>
                    </li>
                    <li class="rounded-md hover:bg-orange-500">
                        <a class="block px-4 py-2 text-base font-semibold hover:text-white text-slate-800 "
                            href="#tentangkami">Tentang
                            Kami</a>
                    </li>
                    <li class="rounded-md hover:bg-orange-500">
                        <a class="block px-4 py-2 text-base font-semibold hover:text-white text-slate-800 "
                            href="#produk">Produk</a>
                    </li>
                    <li class="rounded-md hover:bg-orange-500">
                        <a class="block px-4 py-2 text-base font-semibold hover:text-white text-slate-800 "
                            href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="flex space-x-4 items-center">
                {{-- <button
                    class="border-2 border-orange-500 bg-orange-500 text-white px-6 py-2 rounded-md text-base font-semibold transition duration-300 ease-in-out"
                    onclick="my_modal_3.showModal()">
                    Masuk
                </button> --}}
                <a href="/login"
                    class="border-2 border-orange-500 text-orange-500 px-6 py-2 rounded-md text-base font-semibold transition duration-300 ease-in-out">
                    Login
                </a>
                <a href="/register"
                    class="border-2 border-orange-500 text-orange-500 px-6 py-2 rounded-md text-base font-semibold transition duration-300 ease-in-out">
                    Daftar
                </a>
            </div>

        </div>
    </nav>
</div>



<dialog id="my_modal_3" class="modal ">
    <div class="bg-white modal-box p-0">


        <form method="dialog" class="flex justify-end px-2 pt-2">
            <button class="btn btn-sm btn-circle btn-ghost  top-0 right-0 mt-1 mr-1">✕</button>
        </form>


        <form class="px-6 pb-6" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                <input id="email" type="email"
                    class="mt-1 block w-full px-3 py-2 border bg-white rounded-md text-black shadow-sm focus:outline-none focus:ring-sky-800 focus:border-sky-800 text-sm sm:text-sm
                    @error('email') border-red-500 @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback text-sm text-red-600 mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="mt-1 block w-full px-3 py-2 border bg-white rounded-md  shadow-sm focus:outline-none focus:ring-sky-800 focus:border-sky-800 sm:text-sm @error('password') border-red-500 @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback text-sm text-red-600 mt-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-4">
                <div class="flex items-center">
                    <input type="checkbox"
                        class="h-4 w-4 border-gray-300 rounded focus:ring-sky-800 text-indigo-600 shadow-sm focus:border-skyring-sky-800 {{ old('remember') ? 'bg-indigo-600 border-transparent' : 'bg-white' }}"
                        name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="ml-2 block text-sm text-gray-900" for="remember">{{ __('Ingat saya') }}</label>
                </div>

            </div>

            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-800">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <hr class="my-4">
                <div class="text-center">
                    <a class="text-sm text-indigo-600 hover:text-skyring-sky-800"
                        href="{{ route('password.request') }}">{{ __('Lupa Pasword?') }}</a>
                </div>
            @endif
        </form>
    </div>
</dialog>
