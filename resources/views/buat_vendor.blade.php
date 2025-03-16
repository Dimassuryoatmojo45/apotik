@extends('layouts.app')

@section('content')
<!-- Page header -->
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div class="toast" id="toast-simple" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true"
        data-bs-delay="5000">
        <div class="toast-header">
            <span class="avatar avatar-xs me-2" style="background-image: url(./static/avatars/002m.jpg)"></span>
            <strong class="me-auto">Hasta Dewa</strong>
            <!-- <small>11 mins ago</small> -->
            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Berhasil Input Data
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
                    Vendor
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-2">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Buat Vendor
                    </a>
                    <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal"
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
                                <h5 class="modal-title">Buat Vendor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('create_vendor') }}" method="POST" autocomplete="off" novalidate>
                                <div class="modal-body">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Perusahaan</label>
                                            <input type="text" class="form-control" name="nama_perusahaan"
                                                placeholder="Nama Perusahaan">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Handphone</label>
                                        <input type="number" class="form-control" name="no_hp"
                                            placeholder="Nomor Handphone">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat Perusahaan</label>
                                        <input type="text" class="form-control" name="alamat"
                                            placeholder="Alamat Perusahaan">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-5 ms-auto">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Kirim Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal"
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
    </div>
</div>

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Report Vendor</h3>
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Perusahaan</th>
                                        <th>Nomor</th>
                                        <th>Alamat</th>
                                        <!-- <th class="w-1"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataVendor as $dd)
                                    <tr>
                                        <td data-label="Title">
                                            <div>{{ $dd->nama_perusahaan }}</div>
                                            <div class="text-secondary">Business Development</div>
                                        </td>
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
// Tunggu hingga halaman selesai dimuat
window.addEventListener('DOMContentLoaded', function() {
    @if(session('success'))
    var toastElement = document.getElementById('toast-simple');
    var toast = new bootstrap.Toast(toastElement);
    toast.show(); // Menampilkan toast
    @endif
});
</script>
@endsection