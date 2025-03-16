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
@endsection