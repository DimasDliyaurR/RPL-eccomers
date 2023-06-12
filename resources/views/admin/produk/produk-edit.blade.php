@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Striped Rows -->
            <div class="card mb-3">
                <div class="card-body">
                    @foreach ($produk as $key => $pd)
                        <form action="/dashboard/lihat-produk/produk-edit/updProduk/{{ $pd->id_produk }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Nama Produk</label><br>
                                @error('nama_produk')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" name="nama_produk" class="form-control" id="basic-default-fullname"
                                    value="{{ $pd->nama_produk }}" placeholder="Nama Produk" />
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar Produk</label><br>
                                <input class="form-control" name="gambar" type="file" id="formFile"
                                    value="{{ old('gambar', $pd->gambar) }}" />
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Kategori Produk</label><br>
                                @error('id_kategori')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <select name="id_kategori" class="form-select" id="exampleFormControlSelect1"
                                    aria-label="Default select example" style="width: 15%;">
                                    <option value={{ $pd->id_kategori }} selected hidden>{{ $pd->nama_kategori }}</option>
                                    @foreach ($kategori as $item => $kt)
                                        <option value="{{ $kt->id }}">{{ $kt->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-email">Stok</label><br>
                                @error('stok')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" name="stok" class="form-control" id="basic-default-fullname"
                                    value="{{ $pd->stok }}" placeholder="Jumlah Stok" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Harga</label><br>
                                @error('harga')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <input type="text" name="harga" id="basic-default-phone"
                                    class="form-control phone-mask" value="{{ $pd->harga }}" placeholder="Rp." />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Deskripsi</label><br>
                                @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <textarea id="summernote" name="deskripsi" class="form-control" placeholder="Deskripsi Produk" style="height: 300px;">{{ $pd->deskripsi }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    @endforeach
                    <script>
                        $('#summernote').summernote({
                            placeholder: 'Deskripsi....',
                            tabsize: 2,
                            height: 100
                        });
                    </script>

                </div>
            </div>
        </div>
    @endsection
