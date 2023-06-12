@extends('template.main')
@section('content')
    <section class="container">
        {{-- Container Barang --}}
        <div class="container flex items-start mt-10 gap-10">
            {{-- Detail Pembelian --}}
            <div class="main-container w-2/3 box-border">
                <div class="detail-barang rounded-xl shadow-xl py-10 px-10 box-border">
                    <h2 class="font-bold text-3xl border-b border-primary pb-3">Pembelian</h2>
                    <h4 class="font-bold text-lg mt-5">Kategori Produk</h4>
                    <p class="text-detail text-sm">Kota Asal</p>

                    {{-- Image --}}
                    <div class="container-bottom mt-5 flex items-start">
                        <div class="container-img w-48 h-48 rounded-xl relative overflow-hidden flex items-center">
                            <img class="absolute" src="img/example.jpg" alt="">
                        </div>

                        {{-- Isi Detail --}}
                        <div class="spesifikasi ml-10 mt-4">
                            <p class="font-semibold">Nama Produk</p>
                            <p class="text-detail mt-2">Spesifikasi</p>
                            <p class="font-semibold text-3xl mt-16">Rp50.000</p>
                        </div>
                    </div>
                </div>

                {{-- Pengiriman --}}
                <div class="pengiriman w-full mt-4 box-border rounded-xl shadow-xl py-10 px-10">
                    <h3 class="text-2xl font-bold border-b border-primary pb-3">Pengiriman</h3>

                    <p class="mt-3 text-lg">Rumah - Nama User (Nomor Telepon)</p>
                    <p class="text-detail">Alamat</p>
                    <p class="mt-3 text-lg">Pos Tujuan</p>
                </div>
            </div>

            {{-- Detail Bayar --}}
            <div class="detail-bayar w-1/3 shadow-xl py-10 px-10 rounded-xl box-border">
                <h2 class="font-bold text-2xl border-b border-primary pb-3">Detail Pembayaran</h2>

                <div class="detail-harga flex gap-20 text-sm mt-7">
                    <div class="text-detail flex flex-col gap-3">
                        <p>Harga Produk</p>
                        <p>Harga Ongkos Kirim</p>
                        <p>Diskon</p>

                        <p class="mt-52">Total</p>
                    </div>
                    <div class="text-black font-semibold flex flex-col gap-3">
                        <p>Rp50.000</p>
                        <p>Rp22.000</p>
                        <p>0</p>

                        <p class="mt-52 text-2xl">Rp72.000</p>
                    </div>
                </div>

                <div class="metode mt-6 relative">
                    <p class="font-semibold">Metode Pembayaran</p>
                    <div class="relative mt-2">
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300  px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline focus:ring-0 focus:border-gray-300">
                            <option>BRI</option>
                            <option>BCA</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M2 6a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm2-2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2H4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <form action="{{ asset('count') }}">
                        @csrf
                        <button type="submit"
                            class="bg-primary w-full text-white py-3 mt-5 rounded-xl hover:bg-orange-600">Bayar
                            Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/js/script2.js') }}"></script>
@endsection
