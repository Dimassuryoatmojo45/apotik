<form action="{{ route('create_transaksi_obat') }}" method="POST" autocomplete="off" novalidate>
    @csrf
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Jumlah Beli</label>
            <input type="number" class="form-control" name="kuantiti" placeholder="Jumlah Beli">
            <input type="number" name="obat_id" value="{{ $obat_id }}" hidden>
            <input type="number" name="apotik_id" value="{{ $apotik_id }}" hidden>
            <input type="text" name="nama_admin" value="{{ $nama_admin }}" hidden>
        </div>
    </div>
    <div class="card-footer text-end">
        <div class="d-flex">
            <!-- <a href="#" class="btn btn-link">Cancel</a> -->
            <button type="submit" class="btn btn-primary ms-auto">Kirim Data</button>
        </div>
    </div>
</form>