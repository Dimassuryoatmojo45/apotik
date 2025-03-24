@extends('layouts.app')

@section('content')
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
                    Transaksi Obat
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
            @if(Auth::user()->role_id == 1)
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
                                <h5 class="modal-title">Buat Transaksi Obat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('create_obat') }}" method="POST" autocomplete="off" novalidate>
                                <div class="modal-body">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Obat</label>
                                            <select class="form-select" name="stock_id">
                                                @foreach($dataTransaksiVendor as $dTV)
                                                <option value="{{ $dTV->id }}">{{ $dTV->nama_obat }} -
                                                    {{ $dTV->nama_perusahaan }} - {{ $dTV->batch }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Perbox</label>
                                            <input type="number" class="form-control" name="harga_perbox"
                                                placeholder="Harga Perbox">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Perstip</label>
                                            <input type="number" class="form-control" name="harga_perstip"
                                                placeholder="Harga Perstip">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga Persatuan</label>
                                            <input type="number" class="form-control" name="harga_persatuan"
                                                placeholder="Harga Persatuan">
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
            @endif
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
                                        <th>Harga Per Box</th>
                                        <th>Harga Per Stripe</th>
                                        <th>Harga Per Satuan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataObat as $do)
                                    <tr>
                                        <td data-label="Title">
                                            <div>{{ $do->nama_obat }}</div>
                                            <!-- <div class="text-secondary">Business Development</div> -->
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $do->harga_jual_per_box }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $do->harga_jual_per_strip }}
                                        </td>
                                        <td class="text-secondary" data-label="Role">
                                            {{ $do->harga_jual_per_satuan }}
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                                data-bs-target="#modal-transaksi" onclick="pilih_obat({{ $do->id }})">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="currentColor"
                                                    class="icon icon-tabler icons-tabler-filled icon-tabler-file-download">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 2l.117 .007a1 1 0 0 1 .876 .876l.007 .117v4l.005 .15a2 2 0 0 0 1.838 1.844l.157 .006h4l.117 .007a1 1 0 0 1 .876 .876l.007 .117v9a3 3 0 0 1 -2.824 2.995l-.176 .005h-10a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-14a3 3 0 0 1 2.824 -2.995l.176 -.005zm0 8a1 1 0 0 0 -1 1v3.585l-.793 -.792a1 1 0 0 0 -1.32 -.083l-.094 .083a1 1 0 0 0 0 1.414l2.5 2.5l.044 .042l.068 .055l.11 .071l.114 .054l.105 .035l.15 .03l.116 .006l.117 -.007l.117 -.02l.108 -.033l.081 -.034l.098 -.052l.092 -.064l.094 -.083l2.5 -2.5a1 1 0 0 0 0 -1.414l-.094 -.083a1 1 0 0 0 -1.32 .083l-.793 .791v-3.584a1 1 0 0 0 -.883 -.993zm2.999 -7.001l4.001 4.001h-4z" />
                                                </svg>
                                            </button>
                                            <div class="modal modal-blur fade" id="modal-transaksi" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Transaksi Obat</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" id="transaksi_obat_view">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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

function pilih_obat(obat_id) {
    var token = '{{ csrf_token() }}';
    var my_url = "{{ url('/form_obat') }}";
    var formData = {
        '_token': token,
        'obat_id': obat_id
    };
    $.ajax({
        method: 'POST',
        url: my_url,
        data: formData,
        // dataType: 'json',
        success: function(data) {
            $('#transaksi_obat_view').html(data);
        },
        error: function(data) {
            console.log(data);
        },

    });
}
</script>
@endsection