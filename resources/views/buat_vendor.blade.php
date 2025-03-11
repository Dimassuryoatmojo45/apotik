@extends('layouts.app')

@section('content')
<!-- Page header -->
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
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="nama_perusahaan"
                                                        placeholder="Nama Perusahaan">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Nomor Handphone</label>
                                                    <input type="number" class="form-control" name="no_hp"
                                                        placeholder="Nomor Handphone">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Alamat Perusahaan</label>
                                                    <input type="text" class="form-control" name="alamat"
                                                        placeholder="Alamat Perusahaan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                    <a type="submit" class="btn btn-primary btn-5 ms-auto">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Kirim Data
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
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
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Obat</label>
                                                    <input type="text" class="form-control" name="nama_obat"
                                                        placeholder="Nama Obat">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Total Pembelian</label>
                                                    <input type="number" class="form-control" name="total_pembelian"
                                                        placeholder="Total Pembelian">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Jumlah Isi Perbox</label>
                                                    <input type="text" class="form-control" name="jumlah_isi_perbox"
                                                        placeholder="Jumlah Isi Perbox">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Satuan</label>
                                                    <input type="number" class="form-control" name="satuan"
                                                        placeholder="Satuan">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Batch</label>
                                                    <input type="number" class="form-control" name="batch"
                                                        placeholder="Batch">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <div class="d-flex">
                                            <!-- <a href="#" class="btn btn-link">Cancel</a> -->
                                            <button type="submit" class="btn btn-primary ms-auto">Kirim Data</button>
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
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Report Transaksi</h3>
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <tr>
                                        <th>Nama Obat</th>
                                        <th>Total Pembelian</th>
                                        <th>Jumlah Isi Perbox</th>
                                        <th>Satuan</th>
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
                                            {{ $dc->total_pembelian }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dc->jumlah_isi_perbox }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $dc->satuan }}
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
@endsection