<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
PO Tambah
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
PO - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
PO Tambah
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    .header-2 {
      display: none;
    }

    .footer-2 {
      display: none;
    }
    @media (max-width: 386px) {
        .header-1 {
          display: none;
        }
        .header-2 {
          display: block;
        }

        .footer-1 {
          display: none;
        }
        .footer-2 {
          display: block;
        }
    }
</style>


<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="text-sm">Proyek</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Pilih Proyek --</option>
                                <option value="">Proyek 1</option>
                                <option value="">Proyek 2</option>
                                <option value="">Proyek 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Dasar PO</label>
                            <select name="" id="" class="form-control select">
                                <option value="nonbpb">Non BPB</option>
                                <option value="bpb">Dasar BPB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">BPB</label>
                            <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih BPB" style="width: 100%;">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tgl PO</label>
                            <input type="date" name="" id="" class="form-control text-sm" value="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Tgl Kirim</label>
                            <input type="date" name="" id="" class="form-control text-sm" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Jenis PO</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Dimonitor oleh</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="text-sm">KETERANGAN</label>
                            <textarea name="" id="" rows="1" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Dikirim ke:</label>
                            <select name="" id="" class="form-control select">
                                <option value=""></option>
                            </select>
                            <textarea name="" id="" rows="4" class="form-control mt-2"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="text-sm">Supplier</label>
                            <div class="btn-group" style="width: 100%;">
                                <select name="" id="" class="form-control select2" style="width: 100%;">
                                    <option value=""></option>
                                </select>
                                <button type="button" class="btn btn-primary" title="Edit Supplier"><i class="fas fa-pen"></i></button>
                            </div>
                            <textarea name="" id="" rows="4" class="form-control mt-2"></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Table -->
<div class="card">
    <div class="card-header header-1 bg-light">
        <!-- Button Simpan -->
        <button type="button" class="btn btn-primary mt-2">Simpan</button>
        <!-- End Button Simpan -->

        <!-- Button Tambah -->
        <button type="button" class="btn btn-success mt-2">Tambah Item</button>
        <!-- End Button Tambah -->

    </div>
    <div class="card-header header-2 bg-light">
        <div class="row">
            <!-- Button Simpan -->
            <div class="col-6">
                <button type="button" class="btn btn-primary mt-2" style="width: 100%;">Simpan</button>
            </div>
            <!-- End Button Simpan -->

            <!-- Button Tambah -->
            <div class="col-6">
                <button type="button" class="btn btn-success mt-2" style="width: 100%;">Tambah Item</button>
            </div>
            <!-- End Button Tambah -->
        </div>
    </div>
    <div class="card-body">
        <table id="po_tambah" class="table table-hover text-sm display nowrap" style="width: 100%;">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 25%;">Deskripsi Material</th>
                    <th class="text-center">Satuan</th>
                    <th class="text-center">Konversi</th>
                    <th class="text-center">QTY</th>
                    <th class="text-center">Dikirim</th>
                    <th class="text-center">Harga Satuan</th>
                    <th class="text-center" style="width: 15%;">Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-sm" rows="1" value="" style="min-width: 120px;"></textarea>
                            <small class="font-italic">Lorem, ipsum.</small>
                            <br>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-primary">BPB</button>
                                <button type="button" class="btn btn-sm btn-default text-danger"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-center" value="" style="min-width: 70px;">
                        <input type="text" class="form-control form-control-sm text-center mt-2" value="" style="min-width: 70px;">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right" value="" style="min-width: 70px;">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-bold text-right" value="" style="min-width: 50px;">
                        <input type="text" class="form-control form-control-sm text-right mt-2" value="" style="min-width: 50px;">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-bold text-right text-danger" value="" style="min-width: 50px;">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right" value="" style="min-width: 100px;">
                        <input type="text" class="form-control form-control-sm text-right mt-2" value="" style="min-width: 100px;">
                    </td>
                    <td class="text-right" style="min-width: 100px;"></td>
                    <td><button class="btn btn-sm btn-danger square" title="Hapus Detail"><i class="fas fa-times"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer footer-1">
        <!-- Button Simpan -->
        <button type="button" class="btn btn-primary mt-2">Simpan</button>
        <!-- End Button Simpan -->

        <!-- Button Tambah -->
        <button type="button" class="btn btn-success mt-2">Tambah Item</button>
        <!-- End Button Tambah -->
    </div>
    <div class="card-footer footer-2">
        <div class="row">
            <!-- Button Simpan -->
            <div class="col-6">
                <button type="button" class="btn btn-primary mt-2" style="width: 100%;">Simpan</button>
            </div>
            <!-- End Button Simpan -->

            <!-- Button Tambah -->
            <div class="col-6">
                <button type="button" class="btn btn-success mt-2" style="width: 100%;">Tambah Item</button>
            </div>
            <!-- End Button Tambah -->

        </div>
    </div>
</div>
<!-- End Table -->

<!-- Grand Total -->
<div class="card">
    <div class="card-body">
        <div class="row">

            <div class="col-md-5">
                <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Enter ..." >Keterangan / Catatan</textarea>
                </div>
                <div class="form-group">
                    <label for="" class="text-sm">Ditandatangani oleh</label>
                    <input type="text" class="form-control" id="" placeholder="" >
                </div>
                <div class="form-group">
                    <label for="" class="text-sm">Mata Uang / Kurs</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend" style="width: 30%;">
                            <select class="form-control">
                                <option value="">IDR</option>
                                <option value="">USD</option>
                                <option value="">EUR</option>
                                <option value="">GBP</option>
                                <option value="">JPY</option>
                              </select>
                        </div>
                        <input type="text" class="form-control text-right" value="0.0" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">

                <!-- SubTotal -->
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <label for="inputEmail3" class="col-form-label text-sm">SubTotal</label>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control text-danger text-right" id="inputEmail3" value="0.00" >
                    </div>
                </div>
                <!-- End SubTotal -->

                <!-- Discount 1 -->
                <div class="row">
                    <div class="col-sm-3 col-12">
                        <label for="inputEmail3" class="col-form-label text-sm">Disc 1</label>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control text-danger text-right" value="0.00" >
                            <div class="input-group-append">
                              <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-5 col-6">
                        <input type="text" class="form-control text-danger text-right" id="inputEmail3" value="0.00" >
                    </div>
                </div>
                <!-- End Discount 1 -->

                <!-- Discount 2 -->
                <div class="row">
                    <div class="col-sm-3 col-15">
                        <label for="inputEmail3" class="col-form-label text-sm">Disc 2</label>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control text-danger text-right" value="0.0" >
                            <div class="input-group-append">
                              <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-5 col-6">
                        <input type="text" class="form-control text-danger text-right" id="inputEmail3" value="0.00" >
                    </div>
                </div>
                <!-- End Discount 2 -->

                <!-- Discount 3 -->
                <div class="row">
                    <div class="col-sm-3 col-12">
                        <strong class="text-sm disc-3">Pembulatan / Disc 3</strong>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control text-danger text-right" value="0.0" >
                            <div class="input-group-append">
                              <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-5 col-6">
                        <input type="text" class="form-control text-danger text-right" id="inputEmail3" value="0.00" >
                    </div>
                </div>
                <!-- End Discount 3 -->

                <!-- PPN -->
                <div class="row">
                    <div class="col-sm-3 col-12">
                        <div class="custom-control custom-checkbox col-form-label">
                            <input class="custom-control-input" type="checkbox" id="ppn" value="option1" checked>
                            <label for="ppn" class="custom-control-label">PPN</label>
                        </div>                            
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control text-right" value="0.00" >
                            <div class="input-group-append">
                              <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                            </div>
                          </div>
                    </div>
                    <div class="col-sm-5 col-6">
                        <input type="text" class="form-control text-right" id="inputEmail3" value="0.00" >
                    </div>
                </div>
                <!-- End PPN -->

                <hr>

                <!-- Grand Total -->
                <div class="row">
                    <div class="col-sm-4 col-4 mb-3">
                        <label for="" class="col-form-label text-primary text-sm">Grand Total</label>
                    </div>
                    <div class="col-sm-3 col-1"></div>
                    <div class="col-sm-5 col-7">
                        <input type="text" class="form-control text-primary text-bold text-right" id="inputEmail3" value="0.00" >
                    </div>
                </div>
                <!-- End Grand Total -->


            </div>
        </div>
    </div>
</div>
<!-- End Grand Total -->



<script>
    $(function() {
        var table = $('#po_tambah').DataTable({
            "paging": false,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            // "scrollY": '400px',
            "fixedHeader": true,
            "scrollX": true,
        });
        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>