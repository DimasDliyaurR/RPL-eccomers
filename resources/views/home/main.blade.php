@extends('template.main')
@section('content')
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

        @foreach ($produk as $key => $pd)
            <!-- Product Box -->
            <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
                <a href="{{ asset('/order/' . $pd->id_produk) }}">
                    <div class="img overflow-hidden bg-secondary h-[13rem] w-[17rem] flex items-center">
                        <img src="{{ Storage::url($pd->gambar) }}" alt="Product" class="w-full">
                    </div>

                    <!-- Description Product -->
                    <div class="desc-box px-2">
                        <!-- Nama dan Harga -->
                        <div class="wrapped flex justify-between mt-8">
                            <!-- Nama Product -->
                            <div class="title-prod">
                                <a class="font-title font-[900] text-lg"
                                    href="{{ $pd->id_produk }}">{{ $pd->nama_produk }}</a>
                            </div>

                            <!-- Harga Produk -->
                            <div class="price text-sm mt-3">Rp{{ $pd->harga }}</div>
                        </div>

                        <!-- Tipe Produk -->
                        <div class="tipe-prod">
                            <p class="leading-none text-xs">{{ $pd->nama_kategori }}</p>
                        </div>

                        <!-- Keranjang dan Rating -->
                        <div class="rate-cart flex justify-between items-center mt-2">
                            <!-- Keranjang -->
                            <div class="button-cart">
                                <a href="cart-tambah/{{ $pd->id_produk }}"
                                    class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                    Keranjang</a>
                            </div>

                            <!-- Rating -->
                            <div class="star flex fill-yellow-300">
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        <!-- Product Box -->
        <div class="product w-[16rem] pb-10 rounded-md overflow-x-hidden shadow-sm shadow-secondary">
            <a href="aaksk">
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
                            <a href="#"
                                class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                Keranjang</a>
                        </div>

                        <!-- Rating -->
                        <div class="star flex fill-yellow-300">
                            <div class="star-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>

                            <div class="star-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>

                            <div class="star-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>

                            <div class="star-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>

                            <div class="star-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                    <path
                                        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
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
                        <a href="#"
                            class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                            Keranjang</a>
                    </div>

                    <!-- Rating -->
                    <div class="star flex fill-yellow-300">
                        <div class="star-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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
                        <a href="#"
                            class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                            Keranjang</a>
                    </div>

                    <!-- Rating -->
                    <div class="star flex fill-yellow-300">
                        <div class="star-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                        </div>

                        <div class="star-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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
                    <span
                        class="page w-7 h-7 flex items-center justify-center border border-secondary active cursor-pointer transition ease-in-out hover:bg-orange-300"
                        value="1">1</span>
                    <span
                        class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300"
                        value="2">2</span>
                    <span
                        class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300"
                        value="3">3</span>
                    <span
                        class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300"
                        value="4">4</span>
                    <span
                        class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300"
                        value="5">5</span>
                    <span
                        class="page w-7 h-7 flex items-center justify-center border border-secondary cursor-pointer transition ease-in-out hover:bg-orange-300"
                        value="6">6</span>
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
                                <a href="#"
                                    class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                    Keranjang</a>
                            </div>

                            <!-- Rating -->
                            <div class="star flex fill-yellow-300">
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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
                                <a href="#"
                                    class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                    Keranjang</a>
                            </div>

                            <!-- Rating -->
                            <div class="star flex fill-yellow-300">
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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
                                <a href="#"
                                    class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                    Keranjang</a>
                            </div>

                            <!-- Rating -->
                            <div class="star flex fill-yellow-300">
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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
                                <a href="#"
                                    class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                    Keranjang</a>
                            </div>

                            <!-- Rating -->
                            <div class="star flex fill-yellow-300">
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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
                                <a href="#"
                                    class="text-[0.50rem] font-normal border border-secondary px-2 py-[0.15rem] rounded-full">+
                                    Keranjang</a>
                            </div>

                            <!-- Rating -->
                            <div class="star flex fill-yellow-300">
                                <div class="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </div>

                                <div class="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-3 w-3">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
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



        <!-- Javascript -->
        <script src="{{ asset('/js/script.js') }}"></script>
    @endsection
