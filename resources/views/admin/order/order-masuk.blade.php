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
              <th>Produk Order</th>
              <th>Nama User</th>
              <th>Alamat</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>1</td>
              <td>LANDSKRONA</td>
              <td>Julian Anshori</td>
              <td>Perumahan Indah, Jakarta</td>
              <td>
                <button type="submit" class="btn btn-primary">detail</button>
              </td>
            </tr>

            <tr>
              <td>2</td>
             <td>LANDSKRONA</td>
              <td>Julian Anshori</td>
              <td>Perumahan Indah, Jakarta</td>
              <td>
                  <button type="submit" class="btn btn-primary">detail</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
             <td>LANDSKRONA</td>
              <td>Julian Anshori</td>
              <td>Perumahan Indah, Jakarta</td>
              <td>
                <button type="submit" class="btn btn-primary">detail</button>
              </td>
            </tr>

            <tr>
              <td>4</td>
             <td>LANDSKRONA</td>
              <td>Julian Anshori</td>
              <td>Perumahan Indah, Jakarta</td>
              <td>
                <button type="submit" class="btn btn-primary">detail</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Striped Rows -->
<!-- Content wrapper -->
</div>

@endsection 
