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
                    <img src="./img/logo.png" width="110" height="33" viewBox="0 0 232 68" class="navbar-brand-image">
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Buat Akun Baru</h2>
                    <form action="{{ route('register') }}" method="post" autocomplete="off" novalidate>
                        @csrf
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
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    autocomplete="off">
                                <span class="input-group-text">
                                    <a href="" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Konfirmasi Password" required>
                            @error('password_confirmation')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" />
                                <span class="form-check-label">Agree the <a href="./terms-of-service.html"
                                        tabindex="-1">terms and policy</a>.</span>
                            </label>
                        </div> -->
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Buat Akun Baru</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center text-secondary mt-3">
                Sudah Punya Akun? <a href="/login" tabindex="-1">Masuk</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./js/tabler.min.js" defer></script>
    <script src="./js/demo.min.js" defer></script>
</body>

</html>