@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Striped Rows -->
            <div class="card mb-3">
                <div class="card-body">
                    <form action="/dashboard/kategori-tambah/tambah" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Nama Kategori</label>
                            <input type="text" name="nama_kategori" id="basic-default-phone"
                                class="form-control phone-mask" />
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
