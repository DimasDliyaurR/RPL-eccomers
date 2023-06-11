@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Striped Rows -->
            <div class="card mb-3">
                <div class="card-body">
                    <form action="tambah-produk/addNew" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama Produk</label><br>
                            @error('nama_produk')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="text" name="nama_produk" class="form-control" id="basic-default-fullname"
                                placeholder="Nama Produk" value="{{ old('nama_produk') }}" />
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Produk</label><br>
                            @error('gambar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input class="form-control" name="gambar" type="file" id="formFile" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kategori Produk</label><br>
                            @error('id_kategori')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <select name="id_kategori" class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example" style="width: 15%;">
                                <option value="" hidden selected>Pilih Kategori</option>
                                @foreach ($kategori as $key => $kt)
                                    <option value="{{ $kt->id }}" {{ old('id_kategori') == 1 ? 'selected' : '' }}>
                                        {{ $kt->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Stok</label><br>
                            @error('stok')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="number" name="stok" class="form-control" id="basic-default-fullname"
                                placeholder="Jumlah Stok" value="{{ old('stok') }}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Harga</label><br>
                            @error('harga')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <input type="number" name="harga" id="basic-default-phone" class="form-control phone-mask"
                                placeholder="Rp." value="{{ old('harga') }}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Deskripsi</label><br>
                            @error('deskripsi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <textarea name="deskripsi" id="summernote" class="form-control">{{ old('deskripsi') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <script>
                    $('#summernote').summernote({
                        placeholder: 'Deskripsi....',
                        tabsize: 2,
                        height: 100
                    });
                </script>
            @endsection
