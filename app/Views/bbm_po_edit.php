<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBM
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBM PO - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
BBM PO
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No. PO</label>
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
                            <input type="date" name="" id="" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="" class="text-sm">No Surat Jalan</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Wajib diisi" value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Supplier</label>
                            <textarea name="" id="" rows="3" class="form-control" placeholder="Sender"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="3" class="form-control" placeholder="Keterangan"></textarea>
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
        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
        <button type="button" class="btn btn-success mb-2">Tambah Item</button>
        <button type="button" class="btn btn-warning mb-2">Print</button>
    </div>
    <div class="card-body">
        <table id="bbm-po-edit" class="table display" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-center" style="width: 5%;">No</th>
                    <th style="width: 40%;">Deskripsi</th>
                    <th class="text-center" style="width: 15%;">Konversi</th>
                    <th class="text-center" style="width: 15%;">Qty</th>
                    <th class="text-center" style="width: 15%;">Satuan</th>
                    <th class="text-center" style="width: 10%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>
                        <textarea name="" id="" rows="1" class="form-control" style="min-width: 150px;">SENG BJLS 0.5 LOKFOM</textarea>
                        <small class="font-italic text-secondary">Seng "Lokfom" * BJLS 50</small>
                        <br>    
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm">PO</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-times text-danger"></i></button>
                        </div>
                    </td>
                    <td>
                        <div class="input-group" style="min-width: 125px;">
                            <div class="input-group-append">
                                <div class="input-group-text bg-warning">Konv.</div>
                            </div>
                            <input type="text" name="" id="" class="form-control text-right" value="1,935.00">
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-append">
                                <div class="input-group-text bg-light">PO</div>
                            </div>
                            <input type="text" name="" id="" class="form-control text-right" value="2">
                        </div>
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control text-right text-danger" style="min-width: 50px;" value="1,935.00">
                        <input type="text" name="" id="" class="form-control text-right mt-1" style="min-width: 50px;" value="2.00">
                    </td>
                    <td>
                        <input type="text" name="" id="" class="form-control" style="min-width: 50px;" value="KG">
                        <input type="text" name="" id="" class="form-control mt-1" style="min-width: 50px;" value="coiL">
                    </td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-danger"><i class="fas fa-times text-sm"></i></button>
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


<script>
    $(function() {
        var table = $('#bbm-po-edit').DataTable({
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