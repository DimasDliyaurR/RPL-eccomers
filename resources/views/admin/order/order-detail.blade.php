@extends('layouts/template')

@section('content')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Striped Rows -->
    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Produk</th>
              <th>kategori</th>
              <th>jumlah</th>
              <th>harga</th>
              <th>total harga</th>

            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($pemesanan as $key => $p)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $p->nama_produk }}</td>
              <td>{{ $p->nama_kategori }}</td>
              <td>{{ $p->jumlah }}</td>
              <td>{{ number_format($p->harga, 0, ',', '.') }}</td>
              <td>{{ number_format($p->total, 0, ',', '.') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Striped Rows -->
<!-- Content wrapper -->
</div>

@endsection 
