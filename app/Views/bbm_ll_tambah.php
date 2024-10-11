<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBM LL - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BBM LL
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="" id="" class="form-control" value=""">
                    </div>
                </div>
                <div class="col-md-12 col-sm-6">
                    <div class="form-group">
                        <label for="">Gudang Asal</label>
                        <select name="" id="" class="form-control select2" style="width: 100%;">
                            <option value="">-- Pilih Gudang Asal --</option>
                            <option value="">Gudang 1</option>
                            <option value="">Gudang 2</option>
                            <option value="">Gudang 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="" id="" rows="4" class="form-control" placeholder="Catatan"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <button type="button" class="btn btn-success mb-2">Tambah Item</button>
                <button type="button" class="btn btn-warning mb-2">Print</button>
            </div>
            <div class="card-body">
                <table id="bbm-ll-tambah" class="table display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">No</th>
                            <th style="width: 55%;">Deskripsi</th>
                            <th class="text-center" style="width: 15%;">Qty</th>
                            <th class="text-center" style="width: 15%;">Satuan</th>
                            <th class="text-center" style="width: 10%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <input type="text" name="" id="" class="form-control" style="min-width: 180px;" value="FLEXIBLE CONDUIT METAL 32 MM HITAM">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control text-right" style="min-width: 100px;" value="37.00">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control" style="min-width: 100px;" value="METER">
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-light">
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <button type="button" class="btn btn-success mb-2">Tambah Item</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(function() {
        var table = $('#bbm-ll-tambah').DataTable({
            "paging": false,
            "searching": false,
            "lengthChange": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "500px",
        });
        table.columns.adjust().draw();
    });
</script>
<?= $this->endsection()?>