@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!--Search-->
            <form class="d-flex mb-4" onsubmit="return false">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" style="width: 50%;" />
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
                                    <td><a href="lihat-produk/produk-dtl" style="color: #697a8d;">{{ $pd->nama_produk }}</a>
                                    </td>
                                    <td>{{ $pd->id_kategori }}</td>
                                    <td>{{ $pd->stok }}</td>
                                    <td>{{ $pd->harga }}</td>
                                    <td>{!! strip_tags($pd->deskripsi) !!}</td>
                                    <td>
                </div>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu d-absolute z-3">
                        <a class="dropdown-item" href="/dashboard/edit-produk/{{ $pd->id_produk }}"><i
                                class="bx bx-edit-alt me-1"></i> Edit</a>

                        <a class="dropdown-item" href="lihat-produk/dltProduk/{{ $pd->id_produk }}"><i
                                class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <!--/ Striped Rows -->


            <!-- / Content -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection
<!-- Content wrapper -->
