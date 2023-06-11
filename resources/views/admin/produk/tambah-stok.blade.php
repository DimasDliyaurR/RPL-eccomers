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
                                <th>Tambah Stok</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($produk as $key => $pd)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pd->nama_produk }}</td>
                                    <td>{{ $pd->id_kategori }}</td>
                                    <td>{{ $pd->stok }}</td>

                                    <form action="/dashboard/tambah-stok/tmbStok/{{ $pd->id_produk }}" method="post">
                                        @csrf
                                        <td><input type="number" class="form-control" name="stok"
                                                id="basic-default-fullname" style="width: 80px;" /></td>
                                        <td>
                                            <button type="submit" class="btn btn-success w-20px">Tambah</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
        </div>
    </div>
@endsection