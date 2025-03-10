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
                        Buat Apotik
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
                                <h5 class="modal-title">Formulir Buat Apotik</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('create_apotik') }}" method="POST" autocomplete="off" novalidate>
                                @csrf
                                <div class="modal-body">
                                    <div class="row row-deck row-cards">
                                        <div class="col-sm-12 col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama Apotik</label>
                                                                <input type="text" class="form-control"
                                                                    name="nama_apotik" placeholder="Nama Apotik">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal">
                                        Cancel
                                    </a>
                                    <a type="submit" class="btn btn-primary ms-auto mt-4">Kirim
                                        Data</a>
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
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Report Apotik</h3>
                            <div class="table-responsive">
                                <table class="table table-vcenter table-mobile-md card-table">
                                    <thead>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <th>Nama Apotik</th>
                                            <th>Nomor</th>
                                            <th>Alamat</th>
                                            <!-- <th class="w-1"></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataApotik as $dd)
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
                                            <td data-label="Title">
                                                <div>{{ $dd->nama_apotik }}</div>
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
</div>
@endsection