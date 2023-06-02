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
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Stok</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>1</td>
              <td><a href="lihat-produk/produk-dtl" style="color: #697a8d;">LANDSKRONA</a></td>
              <td>Sofa</td>
              <td>20</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/lihat-produk/produk-edit"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td><a href="/lihat-produk/produk-dtl" style="color: #697a8d;">LANDSKRONA</a></td>
              <td>Sofa</td>
              <td>20</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/lihat-produk/produk-edit"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td><a href="/lihat-produk/produk-dtl" style="color: #697a8d;">LANDSKRONA</a></td>
              <td>Sofa</td>
              <td>20</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/lihat-produk/produk-edit"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td>4</td>
              <td><a href="/lihat-produk/produk-dtl" style="color: #697a8d;">LANDSKRONA</a></td>
              <td>Sofa</td>
              <td>20</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/lihat-produk/produk-edit"
                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                    >
                    <a class="dropdown-item" href="javascript:void(0);"
                      ><i class="bx bx-trash me-1"></i> Delete</a
                    >
                  </div>
                </div>
              </td>
            </tr>
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


