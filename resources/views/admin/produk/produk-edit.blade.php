@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Striped Rows -->
            <div class="card mb-3">
                <div class="card-body">
                    <form action="/dashboard/edit-produk-update/{{ $produk->id_produk }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" id="basic-default-fullname"
                                value="{{ $produk->nama_produk }}" placeholder="Nama Produk" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Produk</label>
                            <input class="form-control" name="image" type="file" id="formFile"
                                value="{{ $produk->id_kategori }}" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kategori Produk</label>
                            <select name="id_kategori" class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" style="width: 15%;">
                                <option selected>{{ $produk->id_kategori }}</option>
                                <option value="1">Meja</option>
                                <option value="2">Sofa</option>
                                <option value="3">Kursi</option>
                                <option value="4">Lemari</option>
                                <option value="5">Kasur</option>
                                <option value="6">Rak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Stok</label>
                            <input type="text" name="stok" class="form-control" id="basic-default-fullname"
                                value="{{ $produk->stok }}" placeholder="Jumlah Stok" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Harga</label>
                            <input type="text" name="harga" id="basic-default-phone" class="form-control phone-mask"
                                value="{{ $produk->harga }}" placeholder="Rp." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Deskripsi</label>
                            <textarea id="summernote" name="deskripsi" class="form-control" placeholder="Deskripsi Produk" style="height: 300px; ">{{ $produk->deskripsi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
