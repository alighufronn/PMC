<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBM PO - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BBM PO
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. PO</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" value="">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No Surat Jalan</label>
                            <input type="text" name="" id="" class="form-control" value="" placeholder="Wajib diisi">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Supplier</label>
                            <textarea name="" id="" rows="2" class="form-control" placeholder="Sender"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="2" class="form-control" placeholder="Keterangan"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <button type="button" class="btn btn-success mb-2">Tambah Item</button>
                <button type="button" class="btn btn-warning mb-2">Print</button>
            </div>
            <div class="card-body">
                <table id="bbm-po-tambah" class="table display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th style="width: 40%;">Deskripsi</th>
                            <th class="text-center" style="width: 15%;">Konversi</th>
                            <th class="text-center" style="width: 15%;">Qty</th>
                            <th class="text-center" style="width: 15%;">Satuan</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <textarea name="" id="" rows="1" class="form-control form-control-sm" style="min-width: 150px;"></textarea>
                                <small class="font-italic text-secondary">Lorem, ipsum.</small><br>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm">PO</button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-times text-danger"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="input-group input-group-sm" style="min-width: 100px;">
                                    <div class="input-group-append">
                                        <div class="input-group-text bg-warning">Konv.</div>
                                    </div>
                                    <input type="text" name="" id="" class="form-control text-right" value="">
                                </div>
                                <div class="input-group input-group-sm mt-1">
                                    <div class="input-group-append">
                                        <div class="input-group-text bg-light">PO</div>
                                    </div>
                                    <input type="text" name="" id="" class="form-control text-right" value="">
                                </div>
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right text-danger" style="min-width: 50px;" value="">
                                <input type="text" name="" id="" class="form-control form-control-sm text-right mt-1" style="min-width: 50px;" value="">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" style="min-width: 50px;" value="">
                                <input type="text" name="" id="" class="form-control form-control-sm mt-1" style="min-width: 50px;" value="">
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-times text-sm"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-light">
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <button type="button" class="btn btn-success mb-2">Tambah Item</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(function() {
        var table = $('#bbm-po-tambah').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "lengthChange": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "500px",
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>