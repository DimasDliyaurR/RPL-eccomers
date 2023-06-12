@extends('template.main')
@section('content')
    <div class="container flex flex-col justify-center items-center h-[57vh]">
        <h2 class="text-4xl font-semibold">Terimakasih Sudah Bertransaksi!!</h2>
        <p class="text-2xl font-semibold mt-1">Pembayaran akan Kadaluarsa Setelah</p>
        <p id="count" class="text-4xl font-bold text-primary mt-6"></p>
        <p class="text-2xl font-semibold mt-6">Kode Pembayaran</p>
        <form action="/">
            @csrf
            <div class="flex flex-col my-4">
                <input type="file" class="border-2 rounded-md" required>
                <button class="bg-black text-white font-bold rounded-xl px-6 py-2 mt-2"
                    onclick="return alert('Pesan Sudah dikirim , barang sudah diproses')" id="select">SUBMIT</button>
            </div>
        </form>
    </div>
    <script></script>
    <script src="{{ asset('/js/script3.js') }}"></script>
@endsection
