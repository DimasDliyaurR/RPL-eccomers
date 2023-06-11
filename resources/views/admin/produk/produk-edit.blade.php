@extends('layouts/template')

@section('content')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Striped Rows -->
      <div class="card mb-3">
        <div class="card-body">
          <form action="updProduk/{{ $produk->id_produk }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Produk</label><br>
              @error('nama_produk')
              <span class="text-danger">{{ $message }}</span>
              @enderror
              <input type="text" name="nama_produk" class="form-control" id="basic-default-fullname" 
              value="{{ $produk->nama_produk }}" placeholder="Nama Produk"/>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar Produk</label><br>
                <input class="form-control" name="gambar" type="file" id="formFile" value="{{ old('gambar', $produk->gambar) }}"/>
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlSelect1" class="form-label">Kategori Produk</label><br>
              @error('id_kategori')
              <span class="text-danger">{{ $message }}</span>
              @enderror
              <select name="id_kategori" class="form-select" id="exampleFormControlSelect1" 
                aria-label="Default select example" style="width: 15%;">
                <option value={{ $produk->id_kategori }} selected>{{ $produk->nama_kategori }}</option>
                <option value="1">Meja</option>
                <option value="2">Sofa</option>
                <option value="3">Kursi</option>
                <option value="4">Lemari</option>
                <option value="5">Kasur</option>
                <option value="6">Rak</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Stok</label><br>
              @error('stok')
              <span class="text-danger">{{ $message }}</span>
              @enderror
              <input type="text" name="stok" class="form-control" id="basic-default-fullname" value="{{ $produk->stok }}" placeholder="Jumlah Stok" />
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-phone">Harga</label><br>
              @error('harga')
              <span class="text-danger">{{ $message }}</span>
              @enderror
              <input type="text" name="harga" id="basic-default-phone" class="form-control phone-mask"
                value="{{ $produk->harga }}" placeholder="Rp." />
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-message">Deskripsi</label><br>
              @error('deskripsi')
              <span class="text-danger">{{ $message }}</span>
              @enderror
              <textarea
                id="summernote"
                name="deskripsi"
                class="form-control"
                placeholder="Deskripsi Produk"
                style="height: 300px; "
              >{!!  $produk->deskripsi  !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>

          <script>
            $('#summernote').summernote({
              placeholder: 'Deskripsi....',
              tabsize: 2,
              height: 100
            });
          </script>

        </div>
      </div>
  </div>

@endsection         