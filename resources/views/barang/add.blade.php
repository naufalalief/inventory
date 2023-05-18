<div class="card card-dark shadow">
    <div class="card-header">
        <h3 class="card-title">Tambah Barang</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body" style="display: block;">
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-body" style="display: block;">
                        <div class="form-group">
                            <label for="VendorName">Nama Barang</label>
                            <input type="text" class="form-control" id="VendorName" placeholder="Masukkan Nama"
                                min="1" max="12">
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="form-group">
                            <label for="VendorName">Stok Barang</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">pcs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body" style="display: block;">
                        <div class="form-group">
                            <label for="select2_example">Jenis</label>
                            <select class="form-control select2" style="width: 100%;" id="select2_example"
                                name="select2_example">
                                <option value="" disabled selected>Pilih Jenis</option>
                                <option value="1">Pilihan 1</option>
                                <option value="2">Pilihan 2</option>
                                <option value="3">Pilihan 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="form-group">
                            <label for="VendorAddress">Harga</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Masukkan Harga">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer" style="display: block;">
                <button type="submit" class="btn btn-dark float-right">Tambah</button>
            </div>
        </form>
    </div>
</div>
