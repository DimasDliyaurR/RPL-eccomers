@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

              <div class="card">
                <h5 class="card-header">Profile Details / <span class="text-muted fw-light">{{ $user->username }}</span></h5>
                <!-- Account -->
                <hr class="my-0" />
                <div class="card-body">
                    <div class="row">
                      <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input class="form-control" type="text" id="firstName" value="{{ $user->first_name }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input class="form-control" type="text" id="lastName" value="{{ $user->last_name }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="text" id="email" value="{{ $user->email }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="organization" class="form-label">tempat tanggal lahir</label>
                        <input type="text" class="form-control" id="organization" value="{{ $user->tempat }} , {{ $user->tanggal_lahir }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">no telepon</label>
                        <input type="text" id="phoneNumber" class="form-control" value="{{ $user->no_tlp }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="address" value="{{ $user->alamat }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="state" class="form-label">jenis kelamin</label>
                        <input class="form-control" type="text" id="state" value="{{ $user->jns_kelamin }}" readonly/>
                      </div>
                      <div class="mb-3 col-md-6">
                        <label for="zipCode" class="form-label">pekerjaan</label>
                        <input type="text" class="form-control" id="zipCode" value="{{ $user->pekerjaan }}" readonly/>
                    </div>
                </div>
                <!-- /Account -->
              </div>
            </div>

              <div class="card mt-4">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                  <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                      <h6 class="alert-heading fw-bold mb-1">Apakah anda yakin ingin menghapus akun ini?</h6>
                      <p class="mb-0">Sekali Anda menghapus akun ini, maka akun tidak akan bisa dipulihkan. Mohon pastikan dengan hati-hati</p>
                    </div>
                  </div>
                  <form id="formAccountDeactivation">
                    <div class="form-check mb-3">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="accountActivation"
                        id="accountActivation"
                      />
                      <label class="form-check-label" for="accountActivation"
                        >Saya setuju dan bertanggung jawab untuk menghapus akun ini</label
                      >
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                  </form>
                </div>
              </div>
         

        <!-- / Layout page -->
    </div>
@endsection


<!--/ Striped Rows -->


<!-- / Content -->
