<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
BBK
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BBK SUB - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Edit BBK
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">NO DO/BPM</label>
                            <input type="text" name="" id="" class="form-control" value="BPM.P2201.02099">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tanggal</label>
                            <input type="date" name="" id="" class="form-control" value="2024-09-02">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Supervisor</label>
                            <input type="text" name="" id="" class="form-control" value="Denis Febriansyah">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Pelaksana/Subkon</label>
                            <input type="text" name="" id="" class="form-control" value="HARIAN (PENARIKAN KABEL BMS RO">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="text-sm">Keterangan</label>
                            <textarea name="" id="" rows="3" class="form-control">PENARIKAN KABEL BMS RO PCWMP-119/A-C, PCWMT-118, ROP-117, ROT-116, ROFP-106/A-C, SWT-105, CF-102/A , NEW PCWMP-119/A-C, CIPT-113, ROG-112/A, PC-ROG,  SERVER CABLE RACK</textarea>
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

    <div class="col-md-4">
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
        <table id="bbk-sub-edit" class="table display" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-center" style="width: 5%;">#</th>
                    <th style="width: 30%;">Deskripsi Material</th>
                    <th class="text-center" style="width: 14%;">Satuan</th>
                    <th class="text-center" style="width: 14%;">DO/BPM</th>
                    <th class="text-center" style="width: 14%;">QTY</th>
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
                    <td>
                        <input type="text" name="" id="" class="form-control text-right" value="1472.00" style="min-width: 80px;">
                    </td>
                    <td class="text-right" style="min-width: 80px;">7408.00</td>
                    <td class="text-center" style="text-wrap: nowrap;">
                        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus mt-1"></i></button>
                        <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times mt-1"></i></button>
                    </td>
                </tr>
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
                    <td>
                        <input type="text" name="" id="" class="form-control text-right" value="1472.00" style="min-width: 80px;">
                    </td>
                    <td class="text-right" style="min-width: 80px;">7408.00</td>
                    <td class="text-center" style="text-wrap: nowrap;">
                        <button type="button" class="btn btn-sm btn-primary"><i class="fas fa-plus mt-1"></i></button>
                        <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times mt-1"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(function() {
        $(document).ready(function() {
            var table = $('#bbk-sub-edit').DataTable({
                "paging": false,
                "ordering": false,
                "searching": false,
                "info": false,
                "lengthChange": false,
                "autoWidth": true,
                "responsive": true,
                "scrollX": true,
                "fixedHeader": true,
                "scrollY": "500px",
            });
            table.columns.adjust().draw();
        });
    });
</script>

<?= $this->endsection()?>