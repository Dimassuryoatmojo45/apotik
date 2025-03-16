@extends('layouts.app')

@section('content')
<!-- Page header -->
<button id="cek_password" class="btn btn-2" data-bs-toggle="toast" data-bs-target="#toast-simple" hidden>
    Simple toast
</button>
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast " id="toast-simple" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
        <!-- <div class="toast-header">
                <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/002m.jpg)"></span>
                <strong class="me-auto">Mallory Hulme</strong>
                <small>11 mins ago</small>
                <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div> -->
        <div class="toast-body">
            Password Salah
        </div>
    </div>
</div>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Register
                </h2>
            </div>

            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <!-- <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-1">
                            New view
                        </a>
                    </span> -->
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-2">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Tambah Admin
                    </a>
                    <a class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-2">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                    </a>
                </div>
                <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Formulir Buat Admin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form action="{{ route('register_admin') }}" method="post" autocomplete="off" novalidate>
                                <div class="modal-body">
                                    @csrf

                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="nama_lengkap" name="nama_lengkap" class="form-control"
                                                placeholder="Nama Lengkap" autocomplete="off">
                                            @error('nama_lengkap')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="username" name="username" class="form-control"
                                                placeholder="Username" autocomplete="off">
                                            @error('username')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                            @error('email')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group input-group-flat">
                                                <input id="password" type="password" class="form-control"
                                                    name="password" placeholder="Password" autocomplete="off">
                                                <span class="input-group-text">
                                                    <a id="toggle-password" class="link-secondary" title="Show password"
                                                        data-bs-toggle="tooltip">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-1">
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                            <path
                                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                        </svg>
                                                    </a>
                                                </span>
                                            </div>
                                            @error('password')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <div class="input-group input-group-flat">
                                                <input id="confirm_password" type="confirm_password"
                                                    class="form-control" name="confirm_password"
                                                    placeholder="Konfirmasi Password" autocomplete="off">
                                                <span class="input-group-text">
                                                    <a id="toggle-password_2" class="link-secondary"
                                                        title="Show password" data-bs-toggle="tooltip">
                                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                                        <svg id="eye-icon-2" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="icon icon-1">
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                            <path
                                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                        </svg>
                                                    </a>
                                                </span>
                                            </div>
                                            @error('password')
                                            <div class="error">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="number" name="id_owner" class="form-control" value="{{ $user }}"
                                            hidden>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary w-100">Buat Akun Admin</button>
                                            <button id="button_form_1" type="submit" class="btn btn-primary w-100"
                                                hidden>Buat Akun
                                                Baru</button>
                                            <button type="button" class="btn btn-primary w-100" onclick="input()">Buat
                                                Akun
                                                Admin</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Admin</h3>
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <!-- <th>Nama Apotik</th> -->
                                        <th>Nomor</th>
                                        <th>Alamat</th>
                                        <!-- <th class="w-1"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_admin as $dd)
                                    <tr>
                                        <td data-label="Name">
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar avatar-2 me-2"
                                                    style="background-image: url(./static/avatars/010m.jpg)"></span>
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $dd->nama_lengkap }}</div>
                                                    <!-- <div class="text-secondary"><a href="#"
                                                                class="text-reset">{{ $dd->nama_lengkap }}</a></div> -->
                                                </div>
                                            </div>
                                        </td>
                                        <!-- <td data-label="Title">
                                            <div>{{ $dd->nama_apotik }}</div>
                                            <div class="text-secondary">Business Development</div>
                                        </td> -->
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dd->no_hp }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dd->alamat }}
                                        </td>
                                        <!-- <td>
                                                <div class="btn-list flex-nowrap">
                                                    <a href="#" class="btn btn-1">
                                                        Edit
                                                    </a>
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle align-text-top"
                                                            data-bs-toggle="dropdown">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">
                                                                Action
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                Another action
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td> -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('toggle-password').addEventListener('click', function() {
    var passwordField = document.getElementById('password');
    var eyeIcon = document.getElementById('eye-icon');

    // Toggle password visibility
    if (passwordField.type === "password") {
        passwordField.type = "text"; // Show password
        eyeIcon.setAttribute("d",
            "M12 6c4.418 0 8 4.482 8 6s-3.582 6-8 6-8-4.482-8-6 3.582-6 8-6zM12 8a2 2 0 100 4 2 2 0 000-4z"
        ); // Change icon to open eye
    } else {
        passwordField.type = "password"; // Hide password
        eyeIcon.setAttribute("d",
            "M12 6c4.418 0 8 4.482 8 6s-3.582 6-8 6-8-4.482-8-6 3.582-6 8-6zM12 8a2 2 0 100 4 2 2 0 000-4z"
        ); // Change icon back to closed eye
    }
});

document.getElementById('toggle-password_2').addEventListener('click', function() {
    var passwordField = document.getElementById('confirm_password');
    var eyeIcon = document.getElementById('eye-icon-2');

    // Toggle password visibility
    if (passwordField.type === "confirm_password") {
        passwordField.type = "text"; // Show password
        eyeIcon.setAttribute("d",
            "M12 6c4.418 0 8 4.482 8 6s-3.582 6-8 6-8-4.482-8-6 3.582-6 8-6zM12 8a2 2 0 100 4 2 2 0 000-4z"
        ); // Change icon to open eye
    } else {
        passwordField.type = "confirm_password"; // Hide password
        eyeIcon.setAttribute("d",
            "M12 6c4.418 0 8 4.482 8 6s-3.582 6-8 6-8-4.482-8-6 3.582-6 8-6zM12 8a2 2 0 100 4 2 2 0 000-4z"
        ); // Change icon back to closed eye
    }
});

function input() {
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    if (password == confirm_password) {
        $("#button_form_1").click();
    } else {
        $("#cek_password").click();
    }


}
</script>

@endsection