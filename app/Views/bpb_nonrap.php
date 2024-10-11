<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPB
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BPB - NONRAP
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BPB NonRAP
<?= $this->endsection()?>

<?= $this->section('content') ?>

<!-- Form -->
 <div class="card">
    <form action="" method="post">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Tanggal</label>
                        <input type="date" name="" id="" class="form-control text-sm">
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">PEKERJAAN</label>
                        <select name="" id="" class="form-control select text-sm" style="width: 100%;">
                            <option value="">123456789012345678901234567890</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="text-sm">GEDUNG/LANTAI</label>
                        <div class="input-group">
                            <input type="text" name="" id="" class="form-control text-sm" value="123456789012345678901234567890">
                            <input type="text" name="" id="" class="form-control text-sm" value="123456789012345678901234567890">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <label for="" class="text-sm">SUB PEKERJAAN</label>
                        <input type="text" name="" id="" class="form-control text-sm" value="123456789012345678901234567890">
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="form-group">
                        <label for="" class="text-sm">MOS</label>
                        <input type="date" name="" id="" class="form-control text-sm">
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="form-group">
                        <label for="" class="text-sm">#GAMBAR</label>
                        <input type="text" name="" id="" class="form-control text-sm" value="123456789012345678901234567890">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="form-group">
                        <label for="" class="text-sm">No. SI</label>
                        <input type="text" name="" id="" class="form-control text-sm" value="123456789012345678901234567890">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">KETERANGAN</label>
                        <textarea name="" id="" rows="1" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
 </div>

<!-- Table -->
 <div class="card">
    <div class="card-header bg-light">
        <button type="button" class="btn btn-warning">Tambah Item</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table text-sm display">
                <thead>
                    <tr>
                        <th>Deskripsi Material</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">QTY BPB</th>
                        <th>Catatan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="" id="" class="form-control" value="" style="min-width: 200px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control" value="" style="min-width: 100px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control" value="" style="min-width: 100px;">
                        </td>
                        <td>
                            <input type="text" name="" id="" class="form-control" value="" style="min-width: 200px;">
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger text-sm"><i><span class="fas fa-times"></span></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 </div>

<?= $this->endsection()?>