@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Striped Rows -->
            <div class="card mb-3">
                <div class="card-body">
                    <form action="/dashboard/kategori-tambah/tambah" method="POST"
                        enctype="application/x-www-form-urlencoded">

                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama Produk</label>
                            <input type="text" name="nama_kategori" class="form-control" id="basic-default-fullname"
                                placeholder="Nama Produk" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $('#summernote').summernote({
                placeholder: 'Deskripsi....',
                tabsize: 2,
                height: 100
            });
        </script>
    @endsection
