<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture | Your Favourite Meubel</title>

  <link rel="shortcut icon" href="img/Logo.png" type="image/x-icon">

  <!-- Tailwind CSS -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <!-- Navbar Start -->
  <nav class="sticky top-0 z-50 bg-white drop-shadow">
    <div class="container bg-transparent flex justify-between items-center py-4 px-8">
      <!-- Logo -->
      <div class="flex items-end">
        <img src="img/Logo.png" alt="Logo" class="w-10 h-10">
        <a class="font-semibold text-primary" href="#">Furniture</a>
      </div>

      <!-- Menu -->
      <div class="flex gap-8">
        <div class="dropdown flex items-center" id="dropdown">
          <a class="hover:text-primary" id="menu-category">Kategori</a>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-3 w-3 cursor-pointer">
            <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
          </svg>

          <div class="list absolute mt-[9.3rem] shadow-md shadow-slate-600 z-50 flex flex-col gap-2 bg-white pt-3 pb-3 pl-2 pr-4 w-auto rounded-xl transition ease-in-out" id="lists">
            <a href="" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Knockdown
              Furniture</a>
            <a href="" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Mobile
              Furniture</a>
            <a href="" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Transformable
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
          <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
        </svg>
      </div>

      <!-- Cart and Account -->
      <div class="cart-acc flex gap-4 items-center">
        <!-- Cart -->
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-5 w-5 hover:fill-primary">
            <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
          </svg>
        </a>

        <!-- Account -->
        <div class="box-acc border-solid border-black border-x-2 border-y-2 p-[4px] rounded-full flex items-center justify-center cursor-pointer hover:fill-primary hover:border-primary" id="box-acc">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4">
            <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
          </svg>
          <div class="acc absolute mt-[7rem] shadow-md shadow-slate-600 z-50 flex flex-col bg-white py-2 pl-2 pr-4 w-auto right-20 rounded-xl transition ease-in-out" id="acc">
            @if (Route::has('login'))
            @auth
            <a href="#" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Profil</a>
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <a :href="route('logout')" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md" onclick="event.preventDefault();
                                  this.closest('form').submit();">{{ __('Logout') }}</a>
            </form>
            @else
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Register</a>
            @endif
            <a href="{{ route('login') }}" class="text-sm hover:bg-secondary transition ease-in-out delay-75 p-1 rounded-md">Login</a>
            @endauth
            @endif
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Section Image Start -->
  <section class="container shadow-md shadow-secondary">
    <div class="main-bg block relative">
      <img src="img/background-home.jpg" alt="bg">
      <div class="absolute flex top-0 w-full h-full bg-black bg-opacity-50 justify-center items-center">
        <p class="text-white font-extrabold text-5xl w-[40rem] text-center leading-[5rem] md:text-6xl">
          Get Your Ways To Be Aesthetic
        </p>
      </div>
    </div>
  </section>
  <!-- Section Image End -->

  <!-- Section Product Start -->
  <section class="container grid grid-cols-2 gap-10 justify-items-center my-10 py-10 px-5 md:grid-cols-4">

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Box -->
    <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
      <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
        <img src="img/example.jpg" alt="Product" class="w-full">
      </div>

      <!-- Description Product -->
      <div class="desc-box px-2">
        <!-- Nama dan Harga -->
        <div class="wrapped flex justify-between mt-8">
          <!-- Nama Product -->
          <div class="title-prod">
            <a class="font-title font-[900] text-lg" href="">Product Name</a>
          </div>

          <!-- Harga Produk -->
          <div class="price text-sm mt-3">Rp50.000</div>
        </div>

        <!-- Tipe Produk -->
        <div class="tipe-prod">
          <p class="leading-none text-xs">Tipe Produk</p>
        </div>

        <!-- Keranjang dan Rating -->
        <div class="rate-cart flex justify-between items-center mt-2">
          <!-- Keranjang -->
          <div class="button-cart">
            <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
              Keranjang</a>
          </div>

          <!-- Rating -->
          <div class="star flex fill-yellow-300">
            <div class="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>

            <div class="star-5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Section Product End -->

  <!-- Pagination -->
  <div class="pagination container flex justify-center items-center gap-3">
    <div class="arrow-left cursor-pointer">
      < </div>

        <div class="pages gap-3 flex items-center">
          <span class="page w-7 h-7 flex items-center justify-center border border-secondary active cursor-pointer transition ease-in-out hover:bg-orange-300" value="1">1</span>
          <span class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300" value="2">2</span>
          <span class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300" value="3">3</span>
          <span class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300" value="4">4</span>
          <span class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300" value="5">5</span>
          <span class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300" value="6">6</span>
        </div>

        <div class="arrow-right cursor-pointer"> > </div>
    </div>
    <!-- Pagination End -->

    <!-- Rekomendasi Section -->
    <section class="container">
      <!-- Title -->
      <div class="title border-b-primary border-b-2 border-solid my-10 pt-10 pb-3 px-5">
        <p class="text-2xl font-extrabold">Rekomendasi</p>
      </div>
      <!-- Title End -->

      <!-- Product Recom -->
      <div class="product-recom flex justify-around items-center">
        <!-- Product Box -->
        <div class="product w-56 pb-6 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
          <div class="img overflow-hidden bg-secondary h-32 w-56 flex items-center">
            <img src="img/example.jpg" alt="Product" class="w-full">
          </div>

          <!-- Description Product -->
          <div class="desc-box px-2">
            <!-- Nama dan Harga -->
            <div class="wrapped flex justify-between mt-8">
              <!-- Nama Product -->
              <div class="title-prod">
                <p class="font-title font-[900] text-lg">Product Name</p>
              </div>

              <!-- Harga Produk -->
              <div class="price text-sm mt-3">Rp50.000</div>
            </div>

            <!-- Tipe Produk -->
            <div class="tipe-prod">
              <p class="leading-none text-xs">Tipe Produk</p>
            </div>

            <!-- Keranjang dan Rating -->
            <div class="rate-cart flex justify-between items-center mt-2">
              <!-- Keranjang -->
              <div class="button-cart">
                <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                  Keranjang</a>
              </div>

              <!-- Rating -->
              <div class="star flex fill-yellow-300">
                <div class="star-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product w-56 pb-6 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
          <div class="img overflow-hidden bg-secondary h-32 w-56 flex items-center">
            <img src="img/example.jpg" alt="Product" class="w-full">
          </div>

          <!-- Description Product -->
          <div class="desc-box px-2">
            <!-- Nama dan Harga -->
            <div class="wrapped flex justify-between mt-8">
              <!-- Nama Product -->
              <div class="title-prod">
                <p class="font-title font-[900] text-lg">Product Name</p>
              </div>

              <!-- Harga Produk -->
              <div class="price text-sm mt-3">Rp50.000</div>
            </div>

            <!-- Tipe Produk -->
            <div class="tipe-prod">
              <p class="leading-none text-xs">Tipe Produk</p>
            </div>

            <!-- Keranjang dan Rating -->
            <div class="rate-cart flex justify-between items-center mt-2">
              <!-- Keranjang -->
              <div class="button-cart">
                <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                  Keranjang</a>
              </div>

              <!-- Rating -->
              <div class="star flex fill-yellow-300">
                <div class="star-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product w-56 pb-6 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
          <div class="img overflow-hidden bg-secondary h-32 w-56 flex items-center">
            <img src="img/example.jpg" alt="Product" class="w-full">
          </div>

          <!-- Description Product -->
          <div class="desc-box px-2">
            <!-- Nama dan Harga -->
            <div class="wrapped flex justify-between mt-8">
              <!-- Nama Product -->
              <div class="title-prod">
                <p class="font-title font-[900] text-lg">Product Name</p>
              </div>

              <!-- Harga Produk -->
              <div class="price text-sm mt-3">Rp50.000</div>
            </div>

            <!-- Tipe Produk -->
            <div class="tipe-prod">
              <p class="leading-none text-xs">Tipe Produk</p>
            </div>

            <!-- Keranjang dan Rating -->
            <div class="rate-cart flex justify-between items-center mt-2">
              <!-- Keranjang -->
              <div class="button-cart">
                <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                  Keranjang</a>
              </div>

              <!-- Rating -->
              <div class="star flex fill-yellow-300">
                <div class="star-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product w-56 pb-6 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
          <div class="img overflow-hidden bg-secondary h-32 w-56 flex items-center">
            <img src="img/example.jpg" alt="Product" class="w-full">
          </div>

          <!-- Description Product -->
          <div class="desc-box px-2">
            <!-- Nama dan Harga -->
            <div class="wrapped flex justify-between mt-8">
              <!-- Nama Product -->
              <div class="title-prod">
                <p class="font-title font-[900] text-lg">Product Name</p>
              </div>

              <!-- Harga Produk -->
              <div class="price text-sm mt-3">Rp50.000</div>
            </div>

            <!-- Tipe Produk -->
            <div class="tipe-prod">
              <p class="leading-none text-xs">Tipe Produk</p>
            </div>

            <!-- Keranjang dan Rating -->
            <div class="rate-cart flex justify-between items-center mt-2">
              <!-- Keranjang -->
              <div class="button-cart">
                <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                  Keranjang</a>
              </div>

              <!-- Rating -->
              <div class="star flex fill-yellow-300">
                <div class="star-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Product Box -->
        <div class="product w-56 pb-6 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
          <div class="img overflow-hidden bg-secondary h-32 w-56 flex items-center">
            <img src="img/example.jpg" alt="Product" class="w-full">
          </div>

          <!-- Description Product -->
          <div class="desc-box px-2">
            <!-- Nama dan Harga -->
            <div class="wrapped flex justify-between mt-8">
              <!-- Nama Product -->
              <div class="title-prod">
                <p class="font-title font-[900] text-lg">Product Name</p>
              </div>

              <!-- Harga Produk -->
              <div class="price text-sm mt-3">Rp50.000</div>
            </div>

            <!-- Tipe Produk -->
            <div class="tipe-prod">
              <p class="leading-none text-xs">Tipe Produk</p>
            </div>

            <!-- Keranjang dan Rating -->
            <div class="rate-cart flex justify-between items-center mt-2">
              <!-- Keranjang -->
              <div class="button-cart">
                <a href="#" class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                  Keranjang</a>
              </div>

              <!-- Rating -->
              <div class="star flex fill-yellow-300">
                <div class="star-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>

                <div class="star-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product End -->
    </section>
    <!-- Rekomendasi Section End -->

    <footer class="container mt-32  p-5 bg-secondary rounded-md">

      <div class="social-media-sect">
        <p class="text-slate-800 font-extrabold text-xl mt-3 text-center">Temukan Kami di Sosial Media!</p>

        <div class="our-socials flex items-center justify-center gap-x-2 mt-3">
          <!-- Instagram -->
          <a href="" class="fill-slate-700 hover:fill-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5">
              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg>
          </a>

          <!-- WhatsApp -->
          <a href="" class="fill-slate-700 hover:fill-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5">
              <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
            </svg>
          </a>

          <!-- Facebook -->
          <a href="" class="fill-slate-700 hover:fill-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5">
              <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
            </svg>
          </a>
        </div>
      </div>

      <div class="copyright">
        <p class="text-center mt-3 text-sm">&copyCopyright. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>

</html>