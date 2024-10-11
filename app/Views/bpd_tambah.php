<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPD
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Tambah BPD 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BPD Tambah
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    .card-tambah {
        width: 100%;
    }

    @media (min-width: 768px) {
        .card-tambah {
            width: 75%;
        }
    }

    .button-header-table2 {
        display: none;
    }

    @media (max-width: 521px) {
        .button-header-table2 {
            display: block;
        }
        .button-header-table {
            display: none;
        }
    }
</style>

<div class="d-flex justify-content-center">
    <div class="card card-tambah">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">PEKERJAAN</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Pekerjaan --</option>
                            <option value="">Pekerjaan 1</option>
                            <option value="">Pekerjaan 2</option>
                            <option value="">Pekerjaan 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">SUB PEKERJAAN</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Sub Pekerjaan --</option>
                            <option value="">Sub Pekerjaan 1</option>
                            <option value="">Sub Pekerjaan 2</option>
                            <option value="">Sub Pekerjaan 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">GEDUNG</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Gedung --</option>
                            <option value="">Gedung 1</option>
                            <option value="">Gedung 2</option>
                            <option value="">Gedung 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">LANTAI</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Lantai --</option>
                            <option value="">Lantai 1</option>
                            <option value="">Lantai 2</option>
                            <option value="">Lantai 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="text-sm">UNIT/ZONA</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Unit/Zona --</option>
                            <option value="">Zona 1</option>
                            <option value="">Zona 2</option>
                            <option value="">Zona 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="form-group">
                        <label for="" class="text-sm">#GAMBAR</label>
                        <input type="text" name="" id="" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="form-group">
                        <label for="" class="text-sm">#RAP</label>
                        <input type="text" name="" id="" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Tanggal</label>
                        <input type="date" name="" id="" class="form-control text-sm" value="">
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Tanggal MOS</label>
                        <input type="date" name="" id="" class="form-control text-sm" value="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="text-sm">KETERANGAN</label>
                        <textarea name="" id="" rows="2" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header button-header-table bg-light">
        <button type="button" class="btn btn-info mb-2"><i class="fas fa-plus-circle"></i> Import Detail</button>
        <button type="button" class="btn btn-success mb-2"><i class="fas fa-plus-circle"></i> Tambah Baris</button>
        <button type="button" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Simpan</button>
        <button type="button" class="btn btn-warning mb-2"><i class="fas fa-print"></i> Print</button>
    </div>
    <div class="card-header button-header-table2 bg-light">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-info mb-2 w-100"><i class="fas fa-plus-circle"></i> Import Detail</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-success mb-2 w-100"><i class="fas fa-plus-circle"></i> Tambah Baris</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary mb-2 w-100"><i class="fas fa-save"></i> Simpan</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-warning mb-2 w-100"><i class="fas fa-print"></i> Print</button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-sm display">
                <thead>
                    <tr>
                        <th>JOIN</th>
                        <th>JENIS</th>
                        <th>NAMA</th>
                        <th>UKURAN</th>
                        <th class="text-center">BJLS</th>
                        <th class="text-center">QTY (PCS)</th>
                        <th class="text-center">M'</th>
                        <th class="text-center">M2 Produksi</th>
                        <th class="text-center">M2 Netto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 240px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="" style="min-width: 40px;">
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



<script>
    $(function() {
        var table = $('#bpd-tambah').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollY": '500px',
            "fixedHeader": true,
            "scrollX": true
        });

        table.columns.adjust().draw();
    })
</script>

<?= $this->endsection()?>