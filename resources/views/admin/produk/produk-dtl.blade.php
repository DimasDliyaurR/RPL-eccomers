@extends('layouts/template')

@section('content')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <a href="/dashboard/lihat-produk">
      <button type="submit" class="btn btn-primary w-20px">Kembali</button>
    </a>

      <div class="card p-4 mt-4">
        <div class="row">
          <!-- Bootstrap carousel -->
          <!-- Kolom kiri-->
          <div class="col-md">
            <div id="carouselExample" class="carousel slide" style="max-width: 300px; margin: 0 auto;" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block" src="{{ Storage::url('gambar/' . $produk->gambar) }}" alt="First slide" style="max-width: 300px; height: auto;">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="/assets/img/elements/2.jpg" alt="Second slide" style="max-width: 300px; height: auto;">
                </div>
                <div class="carousel-item">
                  <img class="d-block" src="/assets/img/elements/18.jpg" alt="Third slide" style="max-width: 300px; height: auto;">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
          
    
          <!-- Bootstrap crossfade carousel -->
    
          <!-- Kolom kiri-->
          <div class="col-md d-flex align-items-center">
            <div class="container">
              <table class="table table-borderless" style="width: 350px;">
                <tbody>
                  <tr>
                    <td class="px-0">Nama Produk</td>
                    <td>:</td>
                    <td>{{ $produk->nama_produk }}</td>
                  </tr>
                  <tr>
                    <td class="px-0">Kategori</td>
                    <td>:</td>
                    <td>{{ $produk->nama_kategori }}</td>
                  </tr>
                  <tr>
                    <td class="px-0">Jumlah Stok</td>
                    <td>:</td>
                    <td>{{ $produk->stok }}</td>
                  </tr>
                  <tr>
                    <td class="px-0">Harga</td>
                    <td>:</td>
                    <td>{{ number_format($produk->harga, 0, ',', '.') }}</td>
                  </tr>
                </tbody>
              </table>
              
              <div class="d-flex gap-3 mt-3">
                <a href="/dashboard/tambah-stok">
                  <button type="submit" class="btn btn-success w-20px">Tambah Stok</button>
                </a>
                <a href="/dashboard/lihat-produk/produk-edit/{{ $produk->id_produk }}">
                  <button type="submit" class="btn btn-primary w-20px">Edit</button>
                </a>
                <form id="deleteForm{{ $produk->id_produk }}" action="/dashboard/lihat-produk/dltProduk/{{ $produk->id_produk }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger w-20px" onclick="return confirmDelete(event, {{ $produk->id_produk }})">Delete</button>
                </form>
              </div> 
            </div>
          </div>
        </div>
        <script>
          function confirmDelete(event, id) {
            event.preventDefault(); // Menghentikan tindakan default formulir
            
            // Menampilkan konfirmasi dialog
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
              document.getElementById('deleteForm' + id).submit(); // Mengirim formulir jika dikonfirmasi
            }
          }
        </script>

  </div>

  <div class="card mt-4 p-5">
    <h5>Deskripsi</h5>
    {!! str_replace('<script>', '', $produk->deskripsi) !!}
  </div>

  <!-- Content wrapper -->
  </div>
<!-- / Layout page -->
</div>

@endsection
