<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Tambah BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
TAMBAH BBM
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah BBM
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="form-group">
                    <label for="" class="text-sm">#No BBK</label>
                    <select name="" id="" class="form-control select2" style="width: 100%;">
                        <option value="">-- Pilih BBK --</option>
                        <option value="">00001</option>
                        <option value="">00002</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="form-group">
                    <label for="" class="text-sm">Tanggal BBK</label>
                    <input type="date" name="" id="" class="form-control" value="">
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="form-group">
                    <label for="" class="text-sm">Tanggal Terima</label>
                    <input type="date" name="" id="" class="form-control" value="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="" class="text-sm">#BBM</label>
                    <input type="text" name="" id="" class="form-control" value="">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="" class="text-sm">Keterangan</label>
                    <textarea name="" id="" rows="1" class="form-control"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer bg-light">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-warning">Print</button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        
    </div>
</div>

<?= $this->endsection()?>