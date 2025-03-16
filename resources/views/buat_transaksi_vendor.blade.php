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
                    Transaski Vendor
                </h2>
            </div>
            <!-- Page title actions -->
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

            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report2">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-2">
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Buat Transaksi
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
                <div class="modal modal-blur fade" id="modal-report2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Buat Vendor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('create_stock') }}" method="POST" autocomplete="off" novalidate>
                                <div class="modal-body">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Obat</label>
                                            <input type="text" class="form-control text-uppercase" name="nama_obat"
                                                placeholder="Nama Obat">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Vendor</label>
                                            <select class="form-select" name="vendor_id">
                                                @foreach($dataVendor as $dv)
                                                <option value="{{ $dv->id }}">{{ $dv->nama_perusahaan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pembelian</label>
                                            <select class="form-select" name="status_pembelian">
                                                <option value="1">Belum Lunas</option>
                                                <option value="2">Lunas</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Isi Box</label>
                                            <input type="number" class="form-control" name="isi_box"
                                                placeholder="Isi Box">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Isi Perbox</label>
                                            <input type="number" class="form-control" name="isi_perbox"
                                                placeholder="Isi Perbox">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Isi Satuan</label>
                                            <input type="number" class="form-control" name="isi_satuan"
                                                placeholder="Isi Satuan">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Total Obat</label>
                                            <input type="number" class="form-control" name="total_obat"
                                                placeholder="Total Obat">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Perbox</label>
                                            <input type="number" class="form-control" name="harga_perbox"
                                                placeholder="Harga Perbox">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Perstripe</label>
                                            <input type="number" class="form-control" name="harga_perstripe"
                                                placeholder="Harga Perstripe">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Persatuan</label>
                                            <input type="number" class="form-control" name="harga_persatuan"
                                                placeholder="Harga Persatuan">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Total Pembelian</label>
                                            <input type="number" class="form-control" name="harga_total_pembelian"
                                                placeholder="Harga Total Pembelian">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Vendor</label>
                                            <select class="form-select" name="jenis_obat_id">
                                                @foreach($dataJenisObat as $dJo)
                                                <option value="{{ $dJo->id }}">{{ $dJo->deskripsi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <div class="d-flex">
                                        <!-- <a href="#" class="btn btn-link">Cancel</a> -->
                                        <button type="submit" class="btn btn-primary ms-auto">Kirim Data</button>
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
                        <h3 class="card-title">Report Transaksi</h3>
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Obat</th>
                                        <th>Nama Vendor</th>
                                        <th>Jenis Obat</th>
                                        <th>Pembelian</th>
                                        <th>Batch</th>
                                        <!-- <th class="w-1"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataTransaksiVendor as $dc)
                                    <tr>
                                        <td data-label="Title">
                                            <div>{{ $dc->nama_obat }}</div>
                                            <!-- <div class="text-secondary">Business Development</div> -->
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dc->nama_perusahaan }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dc->deskripsi }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dc->status_pembelian_id }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dc->batch }}
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