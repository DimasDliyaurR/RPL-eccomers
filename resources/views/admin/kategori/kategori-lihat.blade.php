@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!--Search-->
            <form class="d-flex mb-4" onsubmit="return false">
                @csrf
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
                                <th>Id Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($produk as $key => $pd)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $pd->id }}</td>
                                    <form action="/dashboard/kategori-update/{{ $pd->id }}">
                                        @csrf
                                        <td><input type="text" value="{{ $pd->nama_kategori }}"
                                                class="form-label rounded p-2 border border-opacity-10"
                                                name="nama_kategori">
                                        </td>
                                        <td>
                                            <button class="btn btn-primary"
                                                onclick="return confirm('Apakah yakin merubah kategori?')">Update</button>
                                        </td>
                                </tr>
                                </form>
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
