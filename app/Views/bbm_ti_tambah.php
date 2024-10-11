<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBM TI - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BBM TI
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. BBK Gudang Asal</label>
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
                            <label for="" class="text-sm">Gudang Asal</label>
                            <textarea name="" id="" rows="2" class="form-control" placeholder="Sender"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Catatan</label>
                            <textarea name="" id="" rows="2" class="form-control" placeholder="Catatan"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success">Tambah Item</button>
                <button type="button" class="btn btn-warning">Print</button>
            </div>
            <div class="card-body">
                <table id="bbm-ti-tambah" class="table display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th style="width: 40%;">Deskripsi</th>
                            <th class="text-center" style="width: 15%;">Qty Kirim</th>
                            <th class="text-center" style="width: 15%;">Qty Terima</th>
                            <th class="text-center" style="width: 15%;">Satuan</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 125px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 80px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 80px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 80px;">
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-light">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success">Tambah Item</button>
            </div>
        </div>
    </div>
</div>




<script>
    $(function() {
        var table = $('#bbm-ti-tambah').DataTable({
            "dom": "rt",
            "ordering": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "500px",
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>