<form action="{{ route('create_transaksi_obat') }}" method="POST" autocomplete="off" novalidate>
    @csrf
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <label class="form-label">Jumlah Beli</label>
                <input type="number" class="form-control" name="kuantiti" placeholder="Jumlah Beli">
            </div>
            <div class="col-12 col-md-6">
                <label class="form-label">Satuan</label>
                <select class="form-select" name="satuan">
                    <option value="1">Per Stripe</option>
                    <option value="2">Per Satuan</option>
                </select>
            </div>
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