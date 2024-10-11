<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPAK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BON PERMINTAAN ALAT KERJA
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Edit BPAK
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. BPAK</label>
                            <input type="text" name="" id="" class="form-control" value="000031">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. RAP</label>
                            <input type="text" name="" id="" class="form-control" value="000006">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="2024-10-08">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">MOS</label>
                            <input type="date" name="" id="" class="form-control" value="2024-10-22">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                Catatan
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                Approval
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Simpan</button>
        <button type="button" class="btn btn-success mb-2"><i class="fas fa-plus-circle"></i> Tambah Item</button>
        <button type="button" class="btn btn-warning mb-2"><i class="fas fa-print"></i> Print</button>
    </div>
    <div class="card-body">
        <table id="bpak-edit" class="table display table-sm text-sm" style="width: 100%;">
            <thead>
                <tr>
                    <th style="width: 25%;">Deskripsi Alat Kerja</th>
                    <th class="text-center" style="width: 9%;">Satuan</th>
                    <th class="text-center" style="width: 10%;">RAP</th>
                    <th class="text-center" style="width: 9%;">Total BPAk</th>
                    <th class="text-center" style="width: 9%;">Sisa BPAk</th>
                    <th style="width: 9%;" class="text-center">Qty BPA</th>
                    <th style="width: 20%;">Catatan (Merk/Type/Kapasitas)</th>
                    <th style="width: 9%;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="min-width: 120px;">LAMPU SOROT</td>
                    <td class="text-center">BH</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">0</td>
                    <td>
                        <input type="text" name="" id="" class="form-control text-right form-control-sm" value="5" style="min-width: 60px;">
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control text-right form-control-sm" value="Untuk lampu kerja di Area Staff" style="min-width: 120px;">
                    </td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(function() {
        var table = $('#bpak-edit').DataTable({
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
        table.columns.adjust().draw();
    });
</script>


<?= $this->endsection()?>