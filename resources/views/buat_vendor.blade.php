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
                    <form action="{{ route('create_vendor') }}" method="POST" autocomplete="off" novalidate>
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
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <!-- <a href="#" class="btn btn-link">Cancel</a> -->
                                <button type="submit" class="btn btn-primary ms-auto">Kirim Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-lg-12">
                <div class="card">
                    <form action="{{ route('create_stock') }}" method="POST" autocomplete="off" novalidate>
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
                                        <input type="number" class="form-control" name="satuan" placeholder="Satuan">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Batch</label>
                                        <input type="number" class="form-control" name="batch" placeholder="Batch">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection