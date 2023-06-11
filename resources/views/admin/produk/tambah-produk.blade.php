@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Striped Rows -->
            <div class="card mb-3">
                <div class="card-body">
                    <form action="/dashboard/tambah-produk/addNew" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" id="basic-default-fullname"
                                placeholder="Nama Produk" />
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Produk</label>
                            <input class="form-control" name="image" type="file" id="formFile" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kategori Produk</label>
                            <select name="id_kategori" class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" style="width: 15%;">
                                <option selected hidden class="text-secondary">Pilih Kategori</option>
                                @foreach ($kategori as $key => $pd)
                                    <option value="{{ $pd->id }}">{{ $pd->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Stok</label>
                            <input type="text" name="stok" class="form-control" id="basic-default-fullname"
                                placeholder="Jumlah Stok" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Harga</label>
                            <input type="text" name="harga" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="Rp." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Deskripsi</label>
                            <textarea name="deskripsi" id="summernote" class="form-control"></textarea>

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
