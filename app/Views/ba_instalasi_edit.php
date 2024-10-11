<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BA | Edit
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BA INSTALASI - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
EDIT BA INST
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<!-- Form -->
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control form-control-sm text-sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">GEDUNG</label>
                            <select name="" id="" class="form-control form-control-sm select text-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">LANTAI</label>
                            <select name="" id="" class="form-control form-control-sm select text-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">PEKERJAAN</label>
                            <select name="" id="" class="form-control form-control-sm select text-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">UNIT/ZONA</label>
                            <select name="" id="" class="form-control form-control-sm select text-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">TIPE BA</label>
                            <select name="" id="" class="form-control form-control-sm select text-sm">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="text-sm">Catatan/Keterangan</label>
                    <textarea name="" id="" rows="5" class="form-control" placeholder="Catatan tentang Berita Acara"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-warning">Tambah Lampiran</button>
        <button type="button" class="btn btn-danger">Hapus BA</button>
    </div>
</div>

<!-- Content -->
 
 <div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <a href="https://th.bing.com/th/id/OIG3.XLhndnSdMjyoq5oKFN08?w=1024&h=1024&rs=1&pid=ImgDetMain" target="_blank">
                    <img src="https://th.bing.com/th/id/OIG3.XLhndnSdMjyoq5oKFN08?w=1024&h=1024&rs=1&pid=ImgDetMain" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; background-color: black;" loading="lazy">
                </a>
                <input type="file" name="" id="actual-btn" hidden>
                <label for="actual-btn" class="btn btn-warning w-100 text-sm mt-3">Choose File</label>
                <div class="form-group">
                    <label for="" class="text-sm">Catatan</label>
                    <textarea class="form-control form-control-sm" name="" id="" rows="4"></textarea>
                </div>
            </div>
          </div>
    </div>
    
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <a href="https://th.bing.com/th/id/OIG2.PANYlvmafvi5TsucA2YA?w=1024&h=1024&rs=1&pid=ImgDetMain" target="_blank">
                    <img src="https://th.bing.com/th/id/OIG2.PANYlvmafvi5TsucA2YA?w=1024&h=1024&rs=1&pid=ImgDetMain" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; background-color: black;">
                </a>
                <input type="file" name="" id="actual-btn" hidden>
                <label for="actual-btn" class="btn btn-warning w-100 text-sm mt-3">Choose File</label>
                <div class="form-group">
                    <label for="" class="text-sm">Catatan</label>
                    <textarea class="form-control form-control-sm" name="" id="" rows="4"></textarea>
                </div>
            </div>
          </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <a href="https://th.bing.com/th?id=OIP.yuAatczpYNsNeBnMlul86AHaEo&w=316&h=197&c=8&rs=1&qlt=90&o=6&cb=13&dpr=1.5&pid=3.1&rm=2" target="_blank">
                    <img src="https://th.bing.com/th?id=OIP.yuAatczpYNsNeBnMlul86AHaEo&w=316&h=197&c=8&rs=1&qlt=90&o=6&cb=13&dpr=1.5&pid=3.1&rm=2" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; background-color: black;">
                </a>
                <input type="file" name="" id="actual-btn" hidden>
                <label for="actual-btn" class="btn btn-warning w-100 text-sm mt-3">Choose File</label>
                <div class="form-group">
                    <label for="" class="text-sm">Catatan</label>
                    <textarea class="form-control form-control-sm" name="" id="" rows="4"></textarea>
                </div>
            </div>
          </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <a href="https://th.bing.com/th?id=OIP.a3E9Dtf3ARslrXuKIWjHogHaNK&w=187&h=333&c=8&rs=1&qlt=90&o=6&cb=13&dpr=1.5&pid=3.1&rm=2" target="_blank">
                    <img src="https://th.bing.com/th?id=OIP.a3E9Dtf3ARslrXuKIWjHogHaNK&w=187&h=333&c=8&rs=1&qlt=90&o=6&cb=13&dpr=1.5&pid=3.1&rm=2" style="width: 100%; aspect-ratio: 1/1; object-fit: contain; background-color: black;">
                </a>
                <input type="file" name="" id="actual-btn" hidden>
                <label for="actual-btn" class="btn btn-warning w-100 text-sm mt-3">Choose File</label>
                <div class="form-group">
                    <label for="" class="text-sm">Catatan</label>
                    <textarea class="form-control form-control-sm" name="" id="" rows="4"></textarea>
                </div>
            </div>
          </div>
    </div>
    
 </div>
<?= $this->endsection()?>