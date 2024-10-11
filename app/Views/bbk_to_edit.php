<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBK TO -
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Edit BBK
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. DO</label>
                            <div class="input-group">
                                <input type="text" name="" id="" class="form-control" value="">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="2024-03-21">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">Gudang Tujuan</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih Gudang Tujaun --</option>
                                <option value="" selected>GUDANG CIBUBUR 2023</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Up Bpk/Ibu:</label>
                            <textarea name="" id="" rows="2" class="form-control" placeholder="Penerima"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="3" class="form-control" placeholder="Keterangan">Mutasi dari Gudang Cibubur 2020 ke Gudang Cibubur 2023 Material all Besi i Beam</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
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

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                Catatan
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-light">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success">Tambah Item</button>
                <button type="button" class="btn btn-warning">Print</button>
            </div>
            <div class="card-body">
                <table id="bbk-to-edit" class="table display" style="width: 100%;">
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
                                <input type="text" name="" id="" class="form-control" value="BESI I BEAM BS 200 X 100 @3MTER" style="min-width: 150px;">
                                <small class="font-italic">Lorem, ipsum.</small><br>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary">DO</button>
                                    <button type="button" class="btn btn-sm btn-default"><i class="fas fa-times text-danger"></i></button>
                                </div>
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control" value="BATANG" style="min-width: 100px;">
                                <input type="text" name="" id="" class="form-control mt-1" value=""
                                style="min-width: 100px;">
                            </td>
                            <td>
                                <input type="text" name="" id="" class="form-control text-right" value="1.00" style="min-width: 100px;">
                                <input type="text" name="" id="" class="form-control text-right mt-1" value="0.00" style="min-width: 100px;">
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
    </div>
</div>



<script>
    $(function() {
        var table = $('#bbk-to-edit').DataTable({
            "paging": false,
            "ordering": false,
            "lengthChange": false,
            "info": false,
            "searching": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "500px",
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>