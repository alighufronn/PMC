<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Edit RAP Alat Kerja
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
EDIT RAP ALAT KERJA
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Edit RAP
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Nomor</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Rev</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Proyek</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Jumlah Tenaga (orang)</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal Mulai</label>
                            <input type="date" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">KETERANGAN</label>
                            <textarea name="" id="" rows="1" class="form-control form-control-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Catatan
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="card sticky-top">
            <div class="card-header bg-primary">
                Approval
            </div>
            <div class="card-body">
                <div class="icheck-default d-inline">
                    <input type="checkbox" id="dibuat">
                    <label for="dibuat">
                        <span style="font-weight: lighter;">Dibuat: </span>
                        <span>Lorem, ipsum.</span>
                    </label>
                    <sub class=" float-right text-gray mt-2">dd/mm/yyyy</sub>
                    
                </div><br><br>
                <div class="dropdown-divider"></div>
                <div class="icheck-warning d-inline">
                    <input type="checkbox" id="diperiksa">
                    <label for="diperiksa">
                        <span style="font-weight: lighter;">Diperiksa [PM]: </span>
                        <span>Lorem, ipsum.</span>
                    </label>
                    <sub class=" float-right text-gray mt-2">dd/mm/yyyy</sub>
                    
                </div><br><br>
                <div class="dropdown-divider"></div>
                <div class="icheck-primary d-inline">
                    <input type="checkbox" id="disetujui">
                    <label for="disetujui">
                        <span style="font-weight: lighter;">Disetujui [PK]: </span>
                        <span>Lorem, ipsum.</span>
                    </label>
                    <sub class=" float-right text-gray mt-2">dd/mm/yyyy</sub>
                    
                </div><br><br>
                <div class="dropdown-divider"></div>
                <div class="icheck-primary d-inline">
                    <input type="checkbox" id="revisi">
                    <label for="revisi">
                        <span style="font-weight: lighter;">Direvisi: </span>
                        <span>Lorem, ipsum.</span>
                    </label>
                    <sub class=" float-right text-gray mt-2">dd/mm/yyyy</sub>
                    
                </div><br><br>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary mb-1"><i class="fas fa-save"></i> Simpan</button>
                <button type="button" class="btn btn-success mb-1"><i class="fas fa-plus"></i> Tambah Item</button>
                <button type="button" class="btn btn-warning mb-1"><i class="fas fa-print"></i> Print</button>
            </div>
            <div class="card-body">
                <table id="edit-alatkerja" class="table table-sm display" style="width: 100%;">
                    <thead class="table-bordered">
                        <tr>
                            <th class="text-center">#</th>
                            <th style="width: 33%;">Deskripsi Alat Kerja</th>
                            <th style="width: 10%;">Satuan</th>
                            <th class="text-center" style="width: 10%;">QTY</th>
                            <th class="text-center" style="width: 10%;">BPA</th>
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
                            <td class="text-right text-sm" style="min-width: 50px;">5</td>
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
        var table = $('#edit-alatkerja').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "info": false,
            "ordering": false,
            "autoWidth": true,
            "responsive": true,
            "scrollY": "500px",
            "scrollX": true,
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>