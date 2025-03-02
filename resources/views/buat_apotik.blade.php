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
                    Apotik
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
                    <form action="{{ route('create_apotik') }}" method="POST" autocomplete="off" novalidate>
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Apotik</label>
                                        <input type="text" class="form-control" name="nama_apotik"
                                            placeholder="Nama Apotik">
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
                                        <label class="form-label">Alamat Apotik</label>
                                        <input type="text" class="form-control" name="alamat"
                                            placeholder="Alamat Apotik">
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