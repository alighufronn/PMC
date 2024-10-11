<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBK LL - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah BBK
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="2024-09-25">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="4" class="form-control" placeholder="Keterangan">Untuk digalvanis ke
PT. Optima Adhi Jaya
Jl. Rya Pekapuran, Kp. Sindangkarsa RT.002/RW.006, Sukamaju Baru, Tapos, Depok, Jawa Barat.
Up. Bp. Perdi
Untuk Proyek Wisma Asia 1
Berdasarkan email Logistik Pusat pada tanggal 25 September 2024
DO : 15323
BBK TO
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Approval
            </div>
            <div class="card-body">
                <div>
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="approval">
                        <label for="approval">
                            <span style="font-weight: lighter;">By: </span>
                            <span>Lorem, ipsum.</span>
                        </label>
                        <sub class=" float-right text-gray mt-2">dd/mm/yyyy</sub>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                Catatan
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header bg-light">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-success">Tambah Item</button>
        <button type="button" class="btn btn-warning">Print</button>
    </div>
    <div class="card-body">
        <table id="bbk-ll-edit" class="table display" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th style="width: 60%;">Deskripsi Material</th>
                    <th class="text-center" style="width: 15%;">Satuan</th>
                    <th class="text-center" style="width: 15%;">QTY</th>
                    <th class="text-center" style="width: 10%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>
                        <input type="text" name="" id="" class="form-control form-control-sm" value="FLANGE BUBUT BS JIS10K Ø 65 MM" style="min-width: 150px;">
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control form-control-sm" value="BUAH" style="min-width: 100px;">
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control form-control-sm text-right" value="4.00" style="min-width: 100px;">
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-light">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-success">Tambah Item</button>
        <button type="button" class="btn btn-warning">Print</button>
    </div>
</div>


<script>
    $(function() {
        var table = $('#bbk-ll-edit').DataTable({
            "paging": false,
            "searching": false,
            "lengthChange": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "400px",
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>