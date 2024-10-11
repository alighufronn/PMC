<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPD
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BPD Ducting - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BPD Detail
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    .button-header-table2 {
        display: none;
    }

    @media (max-width: 337px) {
        .button-header-table2 {
            display: block;
        }

        .button-header-table {
            display: none;
        }
    }
</style>


<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">#RAP</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="00200-R0">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">PEKERJAAN</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="TATA UDARA">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-9">
                        <div class="form-group">
                            <label for="" class="text-sm">GEDUNG</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="DATA CENTER">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-3">
                        <div class="form-group">
                            <label for="" class="text-sm">LANTAI</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="1">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">UNIT/ZONA</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="PAHU-DHDL102-1">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">GAMBAR</label>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal MOS</label>
                            <input type="date" name="" id="" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-3">
                        <div class="form-group">
                            <label for="" class="text-sm">Req. No</label>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-9">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="1" class="form-control form-control-sm">KERJA + FRESH AIR</textarea>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                <label for="">Approval</label>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="icheck-default d-inline">
                        <input type="checkbox" id="pembuat" name="" value="">
                        <label for="pembuat" class="text-sm">Dibuat Oleh: <span class="text-primary">Joel Filando Putra E.</span></label>
                        <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                    </div>
                    <br><hr>
                    <div class="icheck-warning d-inline">
                        <input type="checkbox" id="sm" name="" value="">
                        <label for="sm" class="text-sm">SM: <span class="text-primary">Tunggak Widodo</span></label>
                        <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                    </div>
                    <br><hr>
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="engineering" name="" value="">
                        <label for="engineering" class="text-sm">Engineering: <span class="text-primary">Wawan Iswanto</span></label>
                        <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                    </div>
                    <br><hr>
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="pm" name="" value="">
                        <label for="pm" class="text-sm">PM: <span class="text-primary">Dodi Dasril</span></label>
                        <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                    </div>
                    <br><hr>
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="qs-manager" name="" value="">
                        <label for="qs-manager" class="text-sm">QS Manager: <span class="text-primary">Sukahar Hadi Susanto</span></label>
                        <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                    </div>
                    <br><hr>
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="pd" name="" value="">
                        <label for="pd" class="text-sm">PD: <span class="text-primary"></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-header">
                <label for="">Catatan</label>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header button-header-table bg-light">
        <button type="button" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn bg-success">Tambah Baris</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Aksi</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Import Detail</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Print</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Rekap</a>
        </div>
    </div>
    <div class="card-header button-header-table2 bg-light">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-primary w-100 mb-3">Simpan</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn bg-success w-100 mb-3">Tambah Baris</button>
            </div>
            <div class="col-12">
                <button type="button" class="btn btn-info dropdown-toggle w-100" data-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Import Detail</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Print</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Rekap</a>
                </div>
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
                            <input type="text" name="" id="" class="form-control form-control-sm" value="TFD" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="DUCTING" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="DUCTING LURUS" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="250 X 900 / 200 X 900 / R = SIKU DALAM" style="min-width: 240px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="80" style="min-width: 60px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="4" style="min-width: 60px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="4,25" style="min-width: 60px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="11,13" style="min-width: 60px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="9,94" style="min-width: 60px;">
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="TFD" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="DUCTING" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="DUCTING LURUS" style="min-width: 80px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm" value="250 X 900 / 200 X 900 / R = SIKU DALAM" style="min-width: 240px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="80" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="4" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="4,25" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="11,13" style="min-width: 40px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="9,94" style="min-width: 40px;">
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

<?= $this->endsection()?>