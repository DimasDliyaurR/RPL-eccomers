@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!--Search-->
            <form class="d-flex mb-4" action="/dashboard/user" method="GET">
                <input class="form-control me-1" type="text" placeholder="Search" name="search" aria-label="Search" style="width: 40%;"/>
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
                                <th>username</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="user/user-dtl/{{ $user->id }}"><i
                                                        class="bx bx-edit-alt me-1"></i> detail</a>
                                                <a class="dropdown-item" href=""><i class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">Tidak ada user yang ditemukan.</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Content wrapper -->
        </div>

        <!-- / Layout page -->
    </div>
@endsection


<!--/ Striped Rows -->


<!-- / Content -->
