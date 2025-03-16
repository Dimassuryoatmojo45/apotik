<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./css/tabler.min.css" rel="stylesheet" />
    <link href="./css/tabler-flags.min.css" rel="stylesheet" />
    <link href="./css/tabler-socials.min.css" rel="stylesheet" />
    <link href="./css/tabler-payments.min.css" rel="stylesheet" />
    <link href="./css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="./css/tabler-marketing.min.css" rel="stylesheet" />
    <link href="./css/demo.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    @import url('https://rsms.me/inter/inter.css');
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="/js/demo-theme.min.js"></script>
    <div class="page">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="./img/logo.svg" width="110" height="33" viewBox="0 0 232 68" class="navbar-brand-image">
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Buat Akun Baru</h2>
                    <form id="form_1" action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
                        @csrf
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
                            <input type="username" name="username" class="form-control" placeholder="Username"
                                autocomplete="off">
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
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="Password" autocomplete="off">
                                <span class="input-group-text">
                                    <a id="toggle-password" class="link-secondary" title="Show password"
                                        data-bs-toggle="tooltip">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                        <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
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
                                <input id="confirm_password" type="confirm_password" class="form-control"
                                    name="confirm_password" placeholder="Konfirmasi Password" autocomplete="off">
                                <span class="input-group-text">
                                    <a id="toggle-password_2" class="link-secondary" title="Show password"
                                        data-bs-toggle="tooltip">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                        <svg id="eye-icon-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
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
                        <div class="form-footer">
                            <button id="button_form_1" type="submit" class="btn btn-primary w-100" hidden>Buat Akun
                                Baru</button>
                            <button type="button" class="btn btn-primary w-100"
                                onclick="to_form(2,1)">Lanjutkan</button>
                        </div>
                    </form>

                    <form id="form_2" action="{{ route('create_apotik') }}" method="POST" autocomplete="off" novalidate
                        hidden>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Apotik</label>
                            <input type="text" class="form-control" name="nama_apotik" placeholder="Nama Apotik">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor Handphone</label>
                            <input type="number" class="form-control" name="no_hp" placeholder="Nomor Handphone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Apotik</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Apotik">
                        </div>
                        <div class="form-footer">
                            <button type="button" class="btn btn-primary w-100 mb-4"
                                onclick="to_form(1,2)">Kembali</button>
                            <button id="button_form_2" type="submit" class="btn btn-primary w-100" hidden>Buat Akun
                                Baru</button>
                            <button type="button" class="btn btn-primary w-100" onclick="input()">Buat Akun
                                Baru</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center text-secondary mt-3">
                Sudah Punya Akun? <a href="/login" tabindex="-1">Masuk</a>
            </div>
            <button id="cek_password" class="btn btn-2" data-bs-toggle="toast" data-bs-target="#toast-simple" hidden>
                Simple toast
            </button>
        </div>
    </div>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast " id="toast-simple" role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-autohide="true">
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
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./js/tabler.min.js" defer></script>
    <script src="./js/demo.min.js" defer></script>
    <script type="text/javascript">
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

    function to_form(id, di) {
        $("#form_" + id).prop('hidden', false)
        $("#form_" + di).prop('hidden', true)
    }

    function input() {
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        if (password == confirm_password) {
            $("#button_form_1").click();
            $("#button_form_2").click();
        } else {
            $("#cek_password").click();
        }


    }
    </script>
</body>

</html>