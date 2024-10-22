<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPAS
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BON PERMINTAAN ALAT SAFETY
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Edit BPAS
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. BPAS</label>
                            <input type="text" name="" id="" class="form-control" value="000001">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. RAP</label>
                            <input type="text" name="" id="" class="form-control" value="" placeholder="Budget">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="2023-02-08">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">MOS</label>
                            <input type="date" name="" id="" class="form-control" value="2023-02-27">
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
        <table id="bpas-edit" class="table display table-sm text-sm" style="width: 100%;">
            <thead>
                <tr>
                    <th style="width: 25%;">Deskripsi Alat Safety</th>
                    <th class="text-center" style="width: 9%;">Satuan</th>
                    <th class="text-center" style="width: 10%;">RAP</th>
                    <th class="text-center" style="width: 9%;">Total BPAs</th>
                    <th class="text-center" style="width: 9%;">Sisa BPAs</th>
                    <th style="width: 9%;" class="text-center">Qty BPAs</th>
                    <th style="width: 20%;">Catatan (Merk/Type/Kapasitas)</th>
                    <th style="width: 9%;" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="min-width: 120px;">SEPATU SAFETY</td>
                    <td class="text-center">PASANG</td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center">0</td>
                    <td>
                        <input type="text" name="" id="" class="form-control text-right form-control-sm" value="1" style="min-width: 60px;">
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control text-right form-control-sm" value="No 39 iis ilwansyah Workshop ( dapat 2 thn yang lalu )" style="min-width: 120px;">
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
        var table = $('#bpas-edit').DataTable({
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