<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BON BARANG KELUAR
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah BBK
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">NO DO/BPM</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Supervisor</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Pelaksana/Subkon</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="2" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success">Tambah Item</button>
            </div>
            <div class="card-body">
                <table id="bbk-sub-tambah" class="table display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">#</th>
                            <th style="width: 30%;">Deskripsi Material</th>
                            <th class="text-center" style="width: 14%;">Satuan</th>
                            <th class="text-center" style="width: 14%;">DO/BPM</th>
                            <th class="text-center" style="width: 14%;">BBK</th>
                            <th class="text-center" style="width: 14%;">Stock</th>
                            <th class="text-center" style="width: 9%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td style="min-width: 150px;">
                                <small>5590158</small><br>
                                AWG 22 MM BELDEN
                                <br><br>
                                <a href="#"><small class="font-italic">BPM: Kabel AWG 22 (2 Pair)</small></a>
                            </td>
                            <td class="text-center" style="min-width: 80px;">METER</td>
                            <td class="text-right" style="min-width: 80px;">1472.00</td>
                            <td style="min-width: 80px;"></td>
                            <td class="text-right" style="min-width: 80px;">7408.00</td>
                            <td class="text-center" style="text-wrap: nowrap;">
                                <button type="button" class="btn btn-sm btn-primary mt-1"><i class="fas fa-plus"></i></button>
                                <button type="button" class="btn btn-sm btn-danger mt-1"><i class="fas fa-times"></i></button>
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
        var table = $('#bbk-sub-tambah').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "lengthChange": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "400px",
        });
    });
</script>

<?= $this->endsection()?>