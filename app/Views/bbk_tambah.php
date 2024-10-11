<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Tambah BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
TAMBAH BBK
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
                            <label for="" class="text-sm">#Gudang Tujuan</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih Gudang --</option>
                                <option value="">Gudang 1</option>
                                <option value="">Gudang 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">#BBK</label>
                            <input type="text" name="" id="" class="form-control" value="">
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
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success">Tambah Item</button>
                <button type="button" class="btn btn-warning">Print</button>
            </div>
            <div class="card-body">
                <table id="bbk-tambah" class="table display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 10%;">#Nomor</th>
                            <th style="width: 50%;">Deskripsi Material</th>
                            <th class="text-center" style="width: 15%;">Satuan</th>
                            <th class="text-center" style="width: 15%;">QTY</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">L.80.XXIV.06</td>
                            <td>SENG BJLS 0.8 LOKFOM</td>
                            <td class="text-center">KG</td>
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
        </div>
    </div>
</div>


<script>
    $(function() {
        var table = $('#bbk-tambah').DataTable({
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "paging": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "400px",
        });
    });
</script>

<?= $this->endsection()?>