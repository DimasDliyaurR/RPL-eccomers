@extends('template.main')
@section('content')

{{-- Container Barang --}}
<section class="container">
  {{-- Detail Pembelian --}}
  <div class="container w-full mt-10">
    <div class="detail-barang rounded-xl shadow-xl py-10 px-10 box-border">
      <h2 class="font-bold text-3xl border-b border-primary pb-3">Keranjang</h2>

      {{-- Product --}}
      <div class="container-bottom mt-10 flex items-center">
        <div class="container-img w-48 h-48 rounded-xl relative overflow-hidden flex items-center">
          <img class="absolute" src="img/example.jpg" alt="">
        </div>

        {{-- Isi Detail --}}
        <div class="spesifikasi ml-10 flex flex-col gap-4">
          <p class="font-semibold text-xl">Nama Produk</p>
          <p class="text-detail">Spesifikasi</p>
          <p class="text-detail">Kategori</p>
          <p class="font-semibold text-lg">Rp50.000</p>
        </div>
      </div>

      {{-- Product --}}
      <div class="container-bottom mt-10 flex items-center">
        <div class="container-img w-48 h-48 rounded-xl relative overflow-hidden flex items-center">
          <img class="absolute" src="img/example.jpg" alt="">
        </div>

        {{-- Isi Detail --}}
        <div class="spesifikasi ml-10 flex flex-col gap-4">
          <p class="font-semibold text-xl">Nama Produk</p>
          <p class="text-detail">Spesifikasi</p>
          <p class="text-detail">Kategori</p>
          <p class="font-semibold text-lg">Rp50.000</p>
        </div>
      </div>

      {{-- Product --}}
      <div class="container-bottom mt-10 flex items-center">
        <div class="container-img w-48 h-48 rounded-xl relative overflow-hidden flex items-center">
          <img class="absolute" src="img/example.jpg" alt="">
        </div>

        {{-- Isi Detail --}}
        <div class="spesifikasi ml-10 flex flex-col gap-4">
          <p class="font-semibold text-xl">Nama Produk</p>
          <p class="text-detail">Spesifikasi</p>
          <p class="text-detail">Kategori</p>
          <p class="font-semibold text-lg">Rp50.000</p>
        </div>
      </div>

      <div class="total-cart flex justify-end">
        <p class="font-semibold text-lg">Total Harga :</p>
      </div>
      <div class="total-price flex justify-end">
        <p class="font-bold text-4xl text-primary">Rp50.000</p>
      </div>
    </div>
  </div>
</section>

@endsection