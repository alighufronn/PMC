<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
RAP HSE
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
TAMBAH RAP HSE
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah RAP
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Proyek</label>
                            <select name="" id="" class="form-control select form-control-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Rev</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Jumlah Pekerja (orang)</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal Mulai</label>
                            <input type="date" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">KETERANGAN</label>
                            <textarea name="" id="" rows="3" class="form-control form-control-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary mb-1"><i class="fas fa-save"></i> Simpan</button>
                <button type="button" class="btn btn-success mb-1"><i class="fas fa-plus-circle"></i> Tambah Item</button>
                <button type="button" class="btn btn-danger mb-1"><i class="fas fa-times-circle"></i> Hapus Semua Item</button>
            </div>
            <div class="card-body">
                <table id="tambah-rap-hse" class="table table-sm display" style="width: 100%;">
                    <thead class="table-bordered">
                        <tr>
                            <th class="text-center">#</th>
                            <th style="width: 33%;">Deskripsi Alat Kerja</th>
                            <th style="width: 15%;">Satuan</th>
                            <th class="text-center" style="width: 15%;">QTY</th>
                            <th style="width: 30%;">Catatan</th>
                            <th class="text-center" style="width: 7%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: fit-content;">1</td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" style="min-width: 120px;" value="BENDING PIPA METAL 20MM">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm" value="UNIT" style="min-width: 50px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="5" style="min-width: 50px;">
                            </td>
                            <td>
                                <textarea name="" id="" rows="1" class="form-control form-control-sm" style="min-width: 120px;"></textarea>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
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
        var table = $('#tambah-rap-hse').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "info": false,
            "ordering": false,
            "autoWidth": true,
            "responsive": true,
            "scrollY": "400px",
            "scrollX": true,
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>