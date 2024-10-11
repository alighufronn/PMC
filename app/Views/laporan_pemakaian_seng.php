<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Laporan Seng
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
LAPORAN PEMAKAIAN SENG
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Laporan Seng
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus-circle"></i> Tambah</button>
    </div>
</div>

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <label for="">LAPORAN PEMAKAIAN SENG</label>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="text-sm">#No Coil</label>
                                <select name="" id="" class="form-control select">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="" class="text-sm">Nama Material</label>
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="text-sm">BBM M'</label>
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="text-sm">BBM Kg</label>
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="text-sm">Stock M'</label>
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="text-sm">Stock Kg</label>
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Item</button>
                    <button type="button" class="btn btn-warning"><i class="fas fa-print"></i> Cetak</button>
                </div>
            </div>

            <!-- Table -->
             <label for="" class="text-sm">Pemakaian Seng:</label>
             <div style="overflow-x: scroll; max-height: 400px;">
                <table id="pemakaian-seng" class="table display table-sm text-sm" style="width: 100%; overflow-y: scroll;">
                    <thead class="sticky-top shadow-sm">
                        <tr>
                            <th>Tgl</th>
                            <th style="width: 25%;">Proyek</th>
                            <th>M'</th>
                            <th>Kg</th>
                            <th>BPD</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="date" name="" id="" class="form-control form-control-sm" value="2024-09-11" style="min-width: 80px;">
                            </td>
                            <td>
                                <select name="" id="" class="form-control form-control-sm select" style="min-width: 150px;">
                                    <option value="" selected>WORKSHOP CIBUBUR</option>
                                    <option value="">THAMRIN NINE AGORA</option>
                                    <option value="">ATMAJAYA</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="3.72" style="min-width: 60px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="29.79" style="min-width: 60px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control form-control-sm text-right" value="00191" style="min-width: 60px;">
                            </td>
                            <td>
                                <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                 </table>
             </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

<?= $this->endsection()?>