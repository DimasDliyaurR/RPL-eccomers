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
                                <th>id Kategori</th>
                                <th>Nama Kategori</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                            @foreach ($kategori as $key => $pd)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <form action="/dashboard/kategori-update/{{ $pd->id_kategori }}" method="post">
                                        @csrf
                                        <td><input type="text" class="form-control" name="nama_kategori"
                                                id="basic-default-fullname" style="width: 80px;"
                                                value="{{ $pd->nama_kategori }}" /></td>
                                        <td>
                                            <button class="btn btn-info w-20px">Update</button>
                                        </td>
                                    </form>
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
