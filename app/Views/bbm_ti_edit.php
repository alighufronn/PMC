<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBM TI - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BBM TI
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. BBK Gudang Asal</label>
                            <input type="text" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="2023-12-23">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No Surat Jalan</label>
                            <input type="text" name="" id="" class="form-control" value="" placeholder="Wajib diisi" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Gudang Asal</label>
                            <textarea name="" id="" rows="3" class="form-control" placeholder="Sender"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Catatan</label>
                            <textarea name="" id="" rows="3" class="form-control" placeholder="Catatan">MUTASI MATERIAL BANTU SIKU UNP LONGNUT RUBBER BLOCK</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                Lampiran
            </div>
        </div>
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
</div>

<div class="card">
    <div class="card-header bg-light">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-success">Tambah Item</button>
        <button type="button" class="btn btn-warning">Print</button>
    </div>
    <div class="card-body">
        <table id="bbm-ti-edit" class="table display" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-center" style="width: 3%;">No</th>
                    <th style="width: 30%;">Deskripsi</th>
                    <th class="text-center" style="width: 10%;">Tipe</th>
                    <th class="text-center" style="width: 10%;">Merk</th>
                    <th class="text-center" style="width: 10%;">Warna</th>
                    <th class="text-center" style="width: 10%;">Qty Kirim</th>
                    <th class="text-center" style="width: 10%;">Qty Terima</th>
                    <th class="text-center" style="width: 10%;">Satuan</th>
                    <th class="text-center" style="width: 7%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>
                        <input type="text" name="" id="" class="form-control form-control-sm" value="" style="min-width: 130px;">
                    </td>
                    <td>
                        <select name="" id="" class="form-control form-control-sm select" style="min-width: 80px;">
                            <option value=""></option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="" class="form-control form-control-sm select" style="min-width: 80px;">
                            <option value=""></option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="" class="form-control form-control-sm select" style="min-width: 80px;">
                            <option value=""></option>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control form-control-sm text-right" value="0.00" style="min-width: 80px;">
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control form-control-sm text-right" value="0.00" style="min-width: 80px;">
                    </td>
                    <td>
                        <select name="" id="" class="form-control form-control-sm select" style="min-width: 80px;">
                            <option value=""></option>
                        </select>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-light">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-success">Tambah Item</button>
    </div>
</div>




<script>
    $(function() {
        var table = $('#bbm-ti-edit').DataTable({
            "paging": false,
            "searching": false,
            "ordering": false,
            "lengthChange": false,
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