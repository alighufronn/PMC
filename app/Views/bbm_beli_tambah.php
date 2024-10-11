<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBM BL - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BBM BL
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
        <div class="card sticky-top">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="">No. Nota</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Catatan</label>
                    <textarea name="" id="" rows="4" class="form-control" placeholder="Catatan"></textarea>
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
                <table id="bbm-beli-tambah" class="table table-sm display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th style="width: 50%;">Deskripsi</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Satuan</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <textarea name="" id="" rows="2" class="form-control form-control-sm" style="min-width: 150px;"></textarea>
                                <small class="font-italic">Lorem, ipsum.</small>
                                <br>
                                <div class="btn-group mt-1">
                                    <button type="button" class="btn btn-primary btn-sm">RAP</button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-times text-danger"></i></button>
                                </div>
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" style="min-width: 90px;" value="">
                                <div class="input-group input-group-sm mt-1">
                                    <div class="input-group-append">
                                        <div class="input-group-text bg-warning">Konv.</div>
                                    </div>
                                    <input type="text" name="" id="" class="form-control text-right" value="">
                                </div>
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-center" value="">
                                <input type="text" name="" id="" class="form-control form-control-sm text-center font-italic mt-1" value="">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" style="min-width: 90px;" value="">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" style="min-width: 90px;" value="">
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
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
        var table = $('#bbm-beli-tambah').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "lengthChange": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollY": "500px",
            "scrollX": true,
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>