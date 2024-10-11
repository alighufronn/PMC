<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBK PO - 
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
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. BBM</label>
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
                            <label for="" class="text-sm">Gudang Tujuan</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih Gudang Tujuan --</option>
                                <option value="">Gudang 1</option>
                                <option value="">Gudang 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Up Bpk/Ibu:</label>
                            <textarea name="" id="" rows="1" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">

            </div>
            <div class="card-body">
                <table id="bbk-po-tambah" class="table display" style="width: 100%;">
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
                                <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 80px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 80px;">
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-light">

            </div>
        </div>
    </div>
</div>




<script>
    $(function() {
        var table = $('#bbk-po-tambah').DataTable({
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "paging": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "500px",
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>