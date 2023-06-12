@extends('template.main')
@section('content')
    <section class="container flex mt-10 px-16 items-start border-b border-primary pb-20">
        <!-- Left Side Part -->
        <div class="left-side flex justify-center items-center relative">
            <div id="prev"
                class="btn absolute top-1/2 -translate-y-1/2 cursor-pointer bg-secondary opacity-50 hover:opacity-100 rounded-full z-[100] -left-8 p-2 transition-all ease-linear delay-[0.1s]">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </div>
            <div class="image-container h-96 max-w-sm w-full overflow-hidden rounded-xl">
                <div class="carousel flex items-center h-full w-full transition-all ease-in-out delay-[0.3s]">
                    <img src="{{ asset('/img/example.jpg') }}" alt="" />
                    <img src="{{ asset('/img/example.jpg') }}" alt="" />
                    <img src="{{ asset('/img/example.jpg') }}" alt="" />
                </div>
            </div>
            <div id="next"
                class="btn absolute top-1/2 -translate-y-1/2 cursor-pointer bg-secondary opacity-50 hover:opacity-100 rounded-full z-[100] -right-8 p-2 transition-all ease-linear delay-[0.1s]">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
            </div>
        </div>
        <!-- Left Side Part -->

        <!-- Right Side -->
        <div class="right-side ml-36 flex-grow">
            <!-- Judul -->
            @foreach ($produk as $pd)
                <h2 class="font-bold text-3xl border-b-2 border-secondary pb-10 uppercase">{{ $pd->nama_produk }}</h2>

                <!-- Harga -->
                <p class="py-3 text-primary text-3xl">Rp {{ $pd->harga }}</p>

                <!-- Pengiriman -->
                <div class="pengiriman flex gap-36 text-detail mt-4">
                    <div class="title-pengirman box-border w-36">
                        <p>Pengiriman</p>
                    </div>
                    <div class="part-pengiriman flex items-center gap-24 w-full">
                        <div class="tujuan pb-5 flex flex-col gap-3 box-border">
                            <p>Pengiriman ke</p>
                            <p>Ongkos Kirim</p>
                        </div>
                        <div class="ongkir flex flex-col relative box-border">
                            <div class="select-container flex justify-center items-center h-2 absolute -top-2 -left-3">
                                <select name="" id=""
                                    class="border-none rounded-xl appearance-none focus:ring-0 hover:text-primary text-black">
                                    <option value="" default>Pilih Opsi</option>
                                    <option value="">Jabodetabek pos 1</option>
                                    <option value="">Jabodetabek pos 2</option>
                                </select>
                            </div>
                            <p class="mt-4 text-black">Rp0-30.000</p>
                        </div>
                    </div>
                </div>

                <!-- Color -->
                <div class="warna flex gap-36 text-detail mt-4">
                    <div class="title-warna box-border w-36">
                        <p>Warna</p>
                    </div>
                    <div class="jenis-warna grid grid-cols-4 box-border pt-1 w-full">
                        <div
                            class="part-warna px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer warna-active">
                            Biru</div>
                        <div
                            class="part-warna px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer">
                            Merah</div>
                        <div
                            class="part-warna px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer">
                            Natural</div>
                        <div
                            class="part-warna px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer">
                            Coklat</div>
                        <div
                            class="part-warna px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer">
                            Pelangi</div>
                    </div>
                </div>

                <!-- Tipe -->
                <div class="tipe flex gap-36 text-detail mt-4">
                    <div class="title-tipe box-border w-36">
                        <p>Tipe</p>
                    </div>
                    <div class="jenis-tipe grid grid-cols-4 box-border pt-1 w-full">
                        <div
                            class="part-tipe px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer tipe-active">
                            Tipe 1</div>
                        <div
                            class="part-tipe px-4 mr-4 mb-4 rounded-md flex justify-center border-primary border-2 text-black cursor-pointer">
                            Tipe 2</div>
                    </div>
                </div>

                <!-- Jumlah -->
                <div class="flex gap-36 text-detail mt-4">
                    <div class="box-border w-36">
                        <p>Jumlah</p>
                    </div>
                    <div class="flex items-center w-full gap-1">
                        <p class="text-lg text-primary font-medium cursor-pointer" id="min">-</p>
                        <div class="box-num box-border px-7 border-primary border">
                            <p class="text-black" id="quan"></p>
                        </div>
                        <p class="text-lg text-primary font-medium cursor-pointer" id="plus">+</p>
                    </div>
                </div>

                <!-- Submit -->
                <div class="submit-btn flex items-center mt-14">
                    <!-- Button -->
                    <a href="{{ asset('detail') }}"
                        class="bg-primary py-1 px-16 text-white hover:bg-orange-600 rounded-md">Beli
                        Sekarang</a>

                    <!-- Cart -->
                    <a href="#">
                        <div
                            class="cart ml-5 border border-primary p-2 fill-primary hover:bg-primary hover:fill-white rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" class="">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                        </div>
                    </a>
                </div>
        </div>
    </section>
    <!-- Product Session End -->


    <!-- Deskripsi Start -->
    <section class="container mt-5 border-b border-primary pb-20 pr-20">
        <h2 class="text-black font-bold text-3xl">Deskripsi Produk</h2>
        {!! $pd->deskripsi !!}
    </section>
    <!-- Deskripsi End -->
    @endforeach


    <!-- Ulasan Produk Start -->
    <div class="container mx-auto mt-5">
        <h2 class="text-black font-bold text-3xl">Ulasan</h2>
        <form id="commentForm" class="mt-4">
            @csrf
            <!-- Rating -->
            <div class="container mx-auto">
                <h2 class="text-lg font-medium mb-4 ml-4">Rating Produk</h2>
                <div id="ratingStars" class="flex items-center ml-4">
                    <svg id="star1" class="h-6 w-6 text-detail cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    <svg id="star2" class="h-6 w-6 text-detail cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    <svg id="star3" class="h-6 w-6 text-detail cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    <svg id="star4" class="h-6 w-6 text-detail cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                    <svg id="star5" class="h-6 w-6 text-detail cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                    </svg>
                </div>
                <p id="ratingValue">Nilai Rating = <span id="currentRating" class="font-bold">0</span></p>
            </div>


            <!-- Komentar -->
            <div class="mb-4 mt-10">
                <label for="comment" class="block text-lg font-medium mb-4 ml-4">Pesan</label>
                <textarea id="comment" class="border-none w-full h-80 focus:ring-primary" placeholder="Tulis Pesanmu Disini..."></textarea>
            </div>
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-orange-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 35 31"
                    fill="none">
                    <path
                        d="M0.200073 30.7429L35.0001 15.8286L0.200073 0.914307V12.5143L25.0572 15.8286L0.200073 19.1429V30.7429Z"
                        fill="white" />
                </svg>
            </button>
            <div id="commentSection" class="border border-primary p-4 mt-10 rounded-md">
                <!-- Komentar akan ditambahkan di sini menggunakan JavaScript -->
            </div>
        </form>
    </div>
    <!-- Ulasan Produk End -->
    <script src="{{ asset('/js/script2.js') }}"></script>
@endsection
