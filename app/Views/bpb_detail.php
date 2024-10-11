<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BPB
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BPB - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BPB Detail
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">No. RAP</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="form-group">
                            <label for="" class="text-sm">PEKERJAAN</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" value="">
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">#GAMBAR</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="form-group">
                            <label for="" class="text-sm">GEDUNG/LANTAI/UNIT</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" value="">
                                <input type="text" name="" id="" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">MOS</label>
                            <input type="date" name="" id="" class="form-control" value>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="" class="text-sm">BPB %</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control text-right value="" style="background-color: yellow;">
                                <div class="input-group-append">
                                    <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. SI</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea type="text" name="" id="" rows="1" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-danger">Hapus</button>
                <button type="button" class="btn btn-warning">Print</button>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Approval
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                Catatan
            </div>
        </div>
    </div>
</div>

<?= $this->endsection()?>