@extends('layouts/template')

@section('content')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <!-- Striped Rows -->
      <div class="card mb-3">
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Produk</label>
              <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nama Produk"/>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Gambar Produk</label>
                <input class="form-control" type="file" id="formFile" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Stok</label>
              <input type="text" class="form-control" id="basic-default-fullname" placeholder="Jumlah Stok" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-phone">Harga</label>
              <input
                type="text"
                id="basic-default-phone"
                class="form-control phone-mask"
                placeholder="Rp."
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-message">Deskripsi</label>
              <textarea
                id="basic-default-message"
                class="form-control"
                placeholder="Deskripsi Produk"
                style="height: 300px; "
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
  </div>

@endsection         