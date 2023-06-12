@extends('layouts/template')

@section('content')

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <!--Search-->
    <form class="d-flex mb-4" onsubmit="return false">
      <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" style="width: 50%;"/>
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
              <th>Nama User</th>
              <th>tanggal pesan</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($pemesanan as $key => $p)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $p->first_name }} {{ $p->last_name }}</td>
                    <td>{{ $p->tanggal_pemesanan }}</td>
                    <td>alamat</td>
                    <td>{{ $p->status }}</td>
                    <td>
                        <a href="order-detail/{{ $p->id_pemesanan }}" class="btn btn-secondary">Detail</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Striped Rows -->
<!-- Content wrapper -->
</div>

@endsection 
