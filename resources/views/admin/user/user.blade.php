@extends('layouts/template')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!--Search-->
            <form class="d-flex mb-4" onsubmit="return false">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search" style="width: 50%;" />
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
                                <th>Email</th>
                                <th>level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/user/user-dtl"><i
                                                        class="bx bx-edit-alt me-1"></i> detail</a>
                                                <a class="dropdown-item" href=""><i class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

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
