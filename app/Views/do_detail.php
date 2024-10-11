<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
DO Detail
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
DO - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
DO Detail
<?= $this->endsection()?>

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


        <!-- Form -->
        <div class="row">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                          <div class="col-md-3 col-sm-6">
                              <div class="form-group">
                                  <label for="" class="text-sm">#DO</label>
                                  <div class="input-group input-group-sm mb-3" style="width: 100%;">
                                      <input type="text" class="form-control text-sm" name="" id="" value="">
                                      <div class="input-group-append">
                                        <button type="button" class="btn btn-primary" title="Cari DO"><i class="fa fa-search text-sm"></i></button>
                                        <button type="button" class="btn btn-danger" title="Hapus DO"><i class="fa fa-times text-sm"></i></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                              <div class="form-group">
                                  <label for="" class="text-sm">Dasar DO</label>
                                  <select name="" id="" class="form-control form-control-sm select text-sm">
                                      <option value=""></option>
                                      <option value="">1</option>
                                      <option value="">2</option>
                                      <option value="">3</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                              <div class="form-group">
                                  <label for="" class="text-sm">Tgl DO</label>
                                  <input type="date" class="form-control form-control-sm text-sm" name="" id="" value="">
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6">
                              <div class="form-group">
                                  <label for="" class="text-sm">Tgl Kirim</label>
                                  <input type="date" class="form-control form-control-sm text-sm" name="" id="" value="">
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-group">
                                  <label for="" class="text-sm">BPB</label>
                                  <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih BPB"style="width: 100%;">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class="text-sm">Gudang Asal</label>
                                  <select name="" id="" class="form-control select2" style="width: 100%">
                                      <option value=""></option>
                                      <option value="">1</option>
                                      <option value="">2</option>
                                      <option value="">3</option>
                                  </select>
                                  <textarea name="" id="" rows="4" class="form-control text-sm mt-2" placeholder="Alamat Gudang Asal"></textarea>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="" class="text-sm">Gudang Tujuan</label>
                                  <div class="btn-group" style="width: 100%;">
                                        <select name="" id="" class="form-control select2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                        <button class="btn btn-primary" title="Edit Supplier"><i class="fas fa-pen"></i></button>
                                  </div>
                                  <textarea name="" id="" rows="4" class="form-control text-sm mt-2" placeholder="Alamat Gudang Tujuan"></textarea>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header bg-navy">
                                Catatan
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            Approval
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="diajukan">
                                    <label for="diajukan" class="text-sm"><span style="font-weight: lighter;">By:</span> Lorem, ipsum.</label>
                                    <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form -->
        
        <!-- Table -->
        <div class="card">
            <div class="card-header header-1 bg-light">
                <!-- Button Simpan -->
                <button type="button" class="btn btn-primary mt-2">Simpan</button>
                <!-- End Button Simpan -->

                <!-- Button Tambah -->
                <button type="button" class="btn btn-success mt-2">Tambah Item</button>
                <!-- End Button Tambah -->

                <!-- Button Action -->
                <button type="button" class="btn btn-info dropdown-toggle mt-2" data-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Print 1</a>
                  <a class="dropdown-item" href="#">Print 2</a>
                </div>
                <!-- Button Action -->
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

                    <!-- Button Action -->
                    <div class="col-6">
                        <div class="input-group-prepend mt-3">
                            <button type="button" class="btn btn-info dropdown-toggle w-100" data-toggle="dropdown">Aksi</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Print 1</a>
                              <a class="dropdown-item" href="#">Print 2</a>
                            </div>
                          </div>
                    </div>
                    <!-- Button Action -->
                </div>
            </div>

            <div class="card-body">
                <table id="do_detail" class="table table-hover table-sm text-sm display" style="width: 100%">
                    <thead class="text-sm">
                    <tr>
                        <th>#</th>
                        <th style="width: 20%;">Deskripsi Material</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Qty</th>
                        <th class="text-center">Konv</th>
                        <th class="text-center">Kirim</th>
                        <th class="text-center">Group</th>
                        <th class="text-center">Harga Satuan</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Aksi</th>

                    </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>
                            <div class="form-group">
                                <textarea class="form-control form-control-sm" name="" id="" rows="3" style="min-width: 160px">Kawat Las LB-52 Ø 2,6 mm</textarea>
                                <small class="font-italic">Kawat Las LB-52 Ø 2,6 mm</small>
                                <br>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary">BPB</button>
                                    <button type="button" class="btn btn-sm btn-default text-danger"><i class="fas fa-times"></i></button>
                                </div>
                            </div>                                
                        </td>
                        <td>
                            <input type="text" style="min-width: 70px;" class="form-control form-control-sm text-center">
                            <input type="text" style="min-width: 70px;" class="form-control form-control-sm text-center mt-2">
                        </td>
                        <td>
                            <input type="text" style="min-width: 50px;" class="form-control form-control-sm text-right">
                        </td>
                        <td>
                            <input type="text" style="min-width: 70px;" class="form-control form-control-sm text-right">
                            <input type="text" style="min-width: 70px;" class="form-control form-control-sm text-right mt-2">
                        </td>
                        <td>
                            <input type="text" style="min-width: 50px;" class="form-control form-control-sm text-right">
                        </td>
                        <td>
                            <input type="text" style="min-width: 50px;" class="form-control form-control-sm text-right">
                        </td>
                        <td>
                            <input type="text" style="min-width: 50px;" class="form-control form-control-sm text-right">
                        </td>
                        <td>
                            <input type="text" style="min-width: 100px;" class="form-control form-control-sm text-right">
                        </td>
                        <td class="text-right" style="min-width: 100px;">1,000.00</td>
                        <td>
                            <button class="btn btn-sm btn-danger square" title="Hapus Detail"><i class="fas fa-times"></i></button>
                        </td>
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

                <!-- Button Action -->
                <button type="button" class="btn btn-info dropdown-toggle mt-2" data-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Print 1</a>
                  <a class="dropdown-item" href="#">Print 2</a>
                </div>
                <!-- Button Action -->
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

                    <!-- Button Action -->
                    <div class="col-6">
                        <div class="input-group-prepend mt-3">
                            <button type="button" class="btn btn-info dropdown-toggle w-100" data-toggle="dropdown">Aksi</button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Print 1</a>
                              <a class="dropdown-item" href="#">Print 2</a>
                            </div>
                        </div>
                    </div>
                    <!-- Button Action -->
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-4">
                      <textarea class="form-control form-control-sm mt-3" rows="3" placeholder="Catatan"></textarea>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <div class="form-group row mt-3">
                        <label for="" class="col-sm-4 col-form-label text-sm">Total DO</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control text-right form-control-sm" id="inputEmail3" value="0.00" readonly>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Table -->




        <script>
            $(function() {
                var table = $('#do_detail').DataTable({
                    "paging": false,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": false,
                    "info": false,
                    "autoWidth": true,
                    "responsive": true,
                    "scrollY": '400px',
                    "fixedHeader": true,
                    "scrollX": true,
                });
                table.columns.adjust().draw();
            });
        </script>

<?= $this->endsection()?>