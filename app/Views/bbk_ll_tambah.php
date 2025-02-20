<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBK LL - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah BBK
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Tanggal</label>
                        <input type="date" name="" id="" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Keterangan</label>
                        <textarea name="" id="" rows="4" class="form-control" placeholder="Keterangan"></textarea>
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
            </div>
            <div class="card-body">
                <table id="bbk-ll-tambah" class="table display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th style="width: 60%;">Deskripsi Material</th>
                            <th class="text-center" style="width: 15%;">Satuan</th>
                            <th class="text-center" style="width: 15%;">QTY</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 150px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 100px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 100px;">
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success">Tambah Item</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(function() {
        var table = $('#bbk-ll-tambah').DataTable({
            "paging": false,
            "ordering": false,
            "lengthChange": false,
            "searching": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "400px",
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>