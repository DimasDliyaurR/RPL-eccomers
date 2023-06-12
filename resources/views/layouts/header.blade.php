<!-- Navbar Start -->
<nav class="sticky top-0 z-50 bg-white drop-shadow">
    <div class="container bg-transparent flex justify-between items-center py-4 px-8">
        <!-- Logo -->
        <div class="flex items-end">
            <img src="{{ asset('img/Logo.png') }}" alt="Logo" class="w-10 h-10">
            <a class="font-semibold text-primary" href="{{ url('/') }}">Furniture</a>
        </div>

        <!-- Menu -->
        <div class="flex gap-8">
            <div class="dropdown flex items-center" id="dropdown">
                <a class="hover:text-primary" id="menu-category">Kategori</a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-3 w-3 cursor-pointer">
                    <path
                        d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                </svg>

                <div class="list absolute mt-[9.3rem] shadow-md shadow-slate-600 z-50 flex flex-col gap-2 bg-white pt-3 pb-3 pl-2 pr-4 w-auto rounded-xl transition ease-in-out"
                    id="lists">
                    <a href=""
                        class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Knockdown
                        Furniture</a>
                    <a href=""
                        class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Mobile
                        Furniture</a>
                    <a href=""
                        class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Transformable
                        Furniture</a>
                </div>
            </div>
            <a href="#" class="hover:text-primary">Brand</a>
            <a href="#" class="hover:text-primary">Pesan</a>
        </div>

        <!-- Search Bar -->
        <div class="search flex items-center bg-slate-200 rounded-xl h-7 pl-2 hover:bg-slate-300">
            <input type="text" class="h-1 bg-transparent border-none focus:ring-transparent text-xs font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-3 mr-1">
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
        </div>

        <!-- Cart and Account -->
        <div class="cart-acc flex gap-4 items-center">
            <!-- Cart -->
            <a href="cart/{{ Auth::id() }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-5 w-5 hover:fill-primary">
                    <path
                        d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                </svg>
            </a>

            <!-- Account -->
            <div class="box-acc border-solid border-black border-x-2 border-y-2 p-[4px] rounded-full flex items-center justify-center cursor-pointer hover:fill-primary hover:border-primary"
                id="box-acc">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4">
                    <path
                        d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                </svg>
                <div class="acc absolute mt-[7rem] shadow-md shadow-slate-600 z-50 flex flex-col bg-white py-2 pl-2 pr-4 w-auto right-20 rounded-xl transition ease-in-out"
                    id="acc">
                    @if (Route::has('login'))
                        @auth
                            <a href="#"
                                class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Profil</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a :href="route('logout')"
                                    class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md"
                                    onclick="event.preventDefault();
                                  this.closest('form').submit();">{{ __('Logout') }}</a>
                            </form>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Register</a>
                            @endif
                            <a href="{{ route('login') }}"
                                class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Login</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
