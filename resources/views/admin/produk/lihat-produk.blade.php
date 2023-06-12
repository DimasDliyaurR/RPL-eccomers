@extends('layouts/template')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!--Search-->
            <form class="d-flex mb-4" action="/dashboard/tambah-stok" method="GET">
                <input class="form-control me-1" type="text" placeholder="Search" name="search" aria-label="Search"
                    style="width: 40%;" />
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <!--Search-->
            <!-- Striped Rows -->
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Gambar</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($produk as $key => $pd)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ Storage::url($pd->gambar) }}" alt="aAJSNJ" width="80"
                                            height="80"></td>
                                    </td>
                                    <td><a href="lihat-produk/produk-dtl/{{ $pd->id_produk }}"
                                            style="color: #697a8d;">{{ $pd->nama_produk }}</a></td>
                                    <td>{{ $pd->nama_kategori }}</td>
                                    <td>{{ $pd->stok }}</td>
                                    <td>{{ $pd->harga }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu d-absolute">
                                                <a class="dropdown-item"
                                                    href="lihat-produk/produk-edit/{{ $pd->id_produk }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>

                                                <!-- Striped Rows -->
                                                <div class="card">
                                                    <div class="table-responsive text-nowrap">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nomor</th>
                                                                    <th>Nama Produk</th>
                                                                    <th>Kategori</th>
                                                                    <th>Stok</th>
                                                                    <th>Harga</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="table-border-bottom-0">

                                                                @foreach ($produk as $key => $pd)
                                                                    <tr>
                                                                        <td>{{ $key + 1 }}</td>
                                                                        <td><a href="lihat-produk/produk-dtl/{{ $pd->id_produk }}"
                                                                                style="color: #697a8d;">{{ $pd->nama_produk }}</a>
                                                                        </td>
                                                                        <td>{{ $pd->nama_kategori }}</td>
                                                                        <td>{{ $pd->stok }}</td>
                                                                        <td>{{ number_format($pd->harga, 0, ',', '.') }}
                                                                        </td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <button type="button"
                                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                                    data-bs-toggle="dropdown">
                                                                                    <i
                                                                                        class="bx bx-dots-vertical-rounded"></i>
                                                                                </button>
                                                                                <div class="dropdown-menu d-absolute">
                                                                                    <a class="dropdown-item"
                                                                                        href="lihat-produk/produk-edit/{{ $pd->id_produk }}"><i
                                                                                            class="bx bx-edit-alt me-1"></i>
                                                                                        Edit</a>

                                                                                    <form
                                                                                        action="lihat-produk/dltProduk/{{ $pd->id_produk }}"
                                                                                        method="POST">
                                                                                        @method('DELETE')
                                                                                        @csrf
                                                                                        <button type="submit"
                                                                                            class="dropdown-item">
                                                                                            <i class="bx bx-trash me-1"></i>
                                                                                            Delete
                                                                                        </button>
                                                                                    </form>
                                                                                </div>

                                                                            </div>
                                                    </div>

                                                    <!-- / Content -->


                                                    <div class="content-backdrop fade"></div>
                                                </div>
                                                <!-- Content wrapper -->
                                            </div>
                            @endforeach
                            @endforeach
                        @endsection
                        <!-- Content wrapper -->
