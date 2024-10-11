<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPB
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BON PERMINTAAN BARANG
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah BPB
<?= $this->endsection()?>

<?= $this->section('content') ?>

    <!-- Form -->
    <div class="card">
        <form action="" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. RAP</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control text-sm" value="">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary"><i class="fa fa-search text-sm"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control text-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="text-sm">GEDUNG/LANTAI</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control text-sm" value="">
                                <input type="text" name="" id="" class="form-control text-sm" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="text-sm">PEKERJAAN</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control text-sm" value="">
                                <input type="text" name="" id="" class="form-control text-sm" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">MOS</label>
                            <input type="date" name="" id="" class="form-control text-sm">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">BPB %</label>
                            <input type="input" name="" id="" class="form-control text-sm text-right" style="background-color: yellow;" value="">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">#GAMBAR</label>
                            <input type="text" name="" id="" class="form-control text-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. SI</label>
                            <input type="text" name="" id="" class="form-control text-sm" value="">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Jenis Pekerjaan</label>
                            <select name="" id="" class="form-control select text-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">KETERANGAN</label>
                            <textarea type="text" name="" id="" rows="1" class="form-control text-sm"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    
    <!-- Table -->
     <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-sm display">
                    <thead>
                        <tr class="text-center" sty>
                            <th style="min-width: 200px;">Deskripsi Material</th>
                            <th style="min-width: 80px;">Satuan</th>
                            <th style="min-width: 80px;">RAP</th>
                            <th style="min-width: 80px;">SD</th>
                            <th style="min-width: 80px;">TOTAL BPB RAP</th>
                            <th style="min-width: 80px;">SISA BPB RAP</th>
                            <th style="min-width: 80px;">SISA BPB TOTAL</th>
                            <th style="min-width: 80px;">QTY BPB</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     </div>

<?= $this->endsection()?>