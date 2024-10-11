<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
PO Detail
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
PO - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
PO Detail
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

        <!-- Form & Approval -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">#PO</label>
                                    <div class="input-group input-group-sm mb-3" style="width: 100%;">
                                        <input type="text" class="form-control text-sm" name="edNoPO" id="" value="XXXXXX">
                                        <div class="input-group-append">
                                          <button type="button" class="btn btn-primary" id="btn-cari-po" title="Cari PO"><i class="fa fa-search text-sm"></i></button>
                                          <button type="button" class="btn btn-danger" id="btn-hapus-rev" title="Hapus PO"><i class="fa fa-times text-sm"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Dasar PO</label>
                                    <select name="" id="dasarPO" class="form-control form-control-sm select text-sm">
                                        <option value="0" selected>Non BPB</option>
                                        <option value="1" selected>Dasar BPB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Tgl PO</label>
                                    <input type="date" class="form-control form-control-sm text-sm" name="" id="edtglPO" value="2024-10-10">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Tgl Kirim</label>
                                    <input type="date" class="form-control form-control-sm text-sm" name="" id="edtglKirim" value="2024-10-17">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Proyek</label>
                                    <select name="" id="pilihProyek" class="form-control select2" style="width: 100%;">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">BPB</label>
                                    <select name="" id="pilihBPB" class="select2" multiple="multiple" data-placeholder="Pilih BPB" style="width: 100%;" disabled>
                
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Jenis PO</label>
                                    <select name="" id="pilihJenisPO" class="form-control select2" style="width: 100%;" onchange="changeJenisPO(this)">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Dimonitor Oleh</label>
                                    <select name="" id="pilihMonitoredBy" class="form-control select2" style="width: 100%;">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Keterangan</label>
                                    <textarea name="" id="edKeterangan" rows="1" class="form-control" placeholder="Konten/isi PO"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Dikirim ke:</label>
                                    <select name="" id="pilihAlamatKirim" class="form-control select" onchange="changeAlamatKirim(this)">
                                        <option value=""></option>
                                    </select>
                                    <textarea name="" id="alamatKirim" rows="4" class="form-control text-sm mt-2" placeholder="Alamat kirim"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="text-sm">Supplier</label>
                                    <div class="btn-group" style="width: 100%;">
                                        <select name="" id="pilihSupplier" class="form-control select2" style="width: 100%;" onchange="changeSupplier(this)">
                                            <option value=""></option>
                                        </select>
                                        <button class="btn btn-primary" id="btn-edit-supplier" title="Edit Supplier"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <textarea name="" id="alamatSupplier" rows="4" class="form-control text-sm mt-2" placeholder="Alamat Supplier"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                Catatan
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            Approval
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="diajukan">
                                    <label for="diajukan" class="text-sm"><span style="font-weight: lighter;">Diajukan:</span> Lorem, ipsum.</label>
                                    <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                                </div>
                                <br><br>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="disetujui">
                                    <label for="disetujui" class="text-sm"><span style="font-weight: lighter;">Disetujui:</span> Lorem, ipsum dolor.</label>
                                    <sub class="float-right text-gray mt-2">dd/mm/yyyy</sub>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form & Approval -->

        <!-- Table -->
        <div class="card">
            <div class="card-header header-1 bg-light">
                <!-- Button Simpan -->
                <button type="button" id="btn-simpan" class="btn btn-primary mt-2">Simpan</button>
                <!-- End Button Simpan -->

                <!-- Button Tambah -->
                <button type="button" id="btn-tambah-item" class="btn btn-success mt-2">Tambah Item</button>
                <!-- End Button Tambah -->

                <!-- Button Action -->
                <button type="button" class="btn btn-info dropdown-toggle mt-2" data-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Cetak 1</a>
                  <a class="dropdown-item" href="#">Cetak 2</a>
                  <a class="dropdown-item" href="#">Cetak 3</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">PDF</a>
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
                              <a class="dropdown-item" href="#">Cetak 1</a>
                              <a class="dropdown-item" href="#">Cetak 2</a>
                              <a class="dropdown-item" href="#">Cetak 3</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Button Action -->
                </div>
            </div>
            <div class="card-body">
                <table id="tabel_PO" class="table table-hover text-sm display nowrap" style="width: 100%;">
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
                                    <textarea type="text" class="form-control form-control-sm" rows="3" value="" style="min-width: 120px;" readonly>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi molestiae autem sit cupiditate fugiat explicabo.</textarea>
                                    <small class="font-italic">Kawat Las LB-52 Ø 2,6 mm</small>
                                    <br>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">BPB</button>
                                        <button type="button" class="btn btn-sm btn-default text-danger"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm text-center" value="BTG" style="min-width: 70px;" readonly>
                                <input type="text" class="form-control form-control-sm text-center mt-2" value="m" style="min-width: 70px;" readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm text-right" value="1.50" style="min-width: 70px;" readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm text-bold text-right" value="3" style="min-width: 50px;" readonly>
                                <input type="text" class="form-control form-control-sm text-right mt-2" value="44" style="min-width: 50px;" readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm text-bold text-right text-danger" value="0" style="min-width: 50px;" readonly>
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm text-right" value="0" style="min-width: 100px;" readonly>
                                <input type="text" class="form-control form-control-sm text-right mt-2" value="0" style="min-width: 100px;" readonly>
                            </td>
                            <td class="text-right" style="min-width: 100px;">315,000.00</td>
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

                <!-- Button Action -->
                <button type="button" class="btn btn-info dropdown-toggle mt-2" data-toggle="dropdown">Aksi</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Cetak 1</a>
                  <a class="dropdown-item" href="#">Cetak 2</a>
                  <a class="dropdown-item" href="#">Cetak 3</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">PDF</a>
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
                              <a class="dropdown-item" href="#">Cetak 1</a>
                              <a class="dropdown-item" href="#">Cetak 2</a>
                              <a class="dropdown-item" href="#">Cetak 3</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Button Action -->
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
                            <textarea class="form-control" rows="6" placeholder="Catatan" id="catatan">Keterangan / Catatan</textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-sm">Ditandatangani oleh</label>
                            <input type="text" class="form-control" id="tandatangan" onClick="this.select();" placeholder="Tanda tangan">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-sm">Mata Uang / Kurs</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend" style="width: 30%;">
                                    <select id="pilihCurrency" class="form-control" onchange="changeCurrency(this)">
                                        <option value="1" selected >Rp</option> ;
                                          <option value="2">US$</option> ;
                                          <option value="3">SIN$</option> ;
                                          <option value="4">AU$</option> ;
                                          <option value="5">RM</option> ;
                                          <option value="6">€</option> ;
                                      </select>
                                </div>
                                <input type="text" id="kursRupiah" class="form-control text-right" value="1" onchange="changeKurs(this)" onClick="this.select();">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">

                        <div id="tabelSummaryPO">
                            <!-- SubTotal -->
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <label for="" class="col-form-label text-sm">SubTotal</label>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control text-danger text-right" id="" value="0.00" readonly>
                                </div>
                            </div>
                            <!-- End SubTotal -->

                            <!-- Discount 1 -->
                            <div class="row">
                                <div class="col-sm-3 col-12">
                                    <label for="" class="col-form-label text-sm">Disc 1</label>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="input-group mb-3">
                                        <input type="number" id="disc1Prosen" name="" class="form-control text-danger text-right" value="100.5" onchange="changeTotal(this)" onClick="this.select()" readonly>
                                        <div class="input-group-append">
                                        <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-6">
                                    <input type="text" id="disc1Value" name="" class="form-control text-danger text-right" value="0.00" onchange="changeTotal(this)" onClick="this.select()" readonly>
                                </div>
                            </div>
                            <!-- End Discount 1 -->

                            <!-- Discount 2 -->
                            <div class="row">
                                <div class="col-sm-3 col-15">
                                    <label for="" class="col-form-label text-sm">Disc 2</label>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="input-group mb-3">
                                        <input type="number" id="disc2Prosen" name="" class="form-control text-danger text-right" value="0.0" onchange="changeTotal(this)" onClick="this.select()" readonly>
                                        <div class="input-group-append">
                                        <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-6">
                                    <input type="text" id="disc2Value" class="form-control text-danger text-right" value="0.00" onchange="changeTotal(this)" onClick="this.select()" readonly>
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
                                        <input type="number" id="disc3Prosen" name="" class="form-control text-danger text-right" value="0.0" onchange="changeTotal(this)" onClick="this.select()" readonly>
                                        <div class="input-group-append">
                                        <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-6">
                                    <input type="text" id="disc3Value" class="form-control text-danger text-right" value="0.00" onchange="changeTotal(this)" onClick="this.select()" readonly>
                                </div>
                            </div>
                            <!-- End Discount 3 -->

                            <!-- PPN -->
                            <div class="row">
                                <div class="col-sm-3 col-12">
                                    <div class="custom-control custom-checkbox col-form-label">
                                        <input class="custom-control-input" type="checkbox" id="ppnCheck" name="ppnCheck" value="option1" onchange="changeTotal(this)" checked>
                                        <label for="ppnCheck" class="custom-control-label">PPN</label>
                                    </div>                            
                                </div>
                                <div class="col-sm-4 col-6">
                                    <div class="input-group mb-3">
                                        <input type="number" id="ppnProsen" class="form-control text-right" value="11.0" onchange="changeTotal(this)" onClick="this.select()" readonly>
                                        <div class="input-group-append">
                                        <span class="input-group-text text-xs"><i class="fas fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-6">
                                    <input type="text" class="form-control text-right" id="ppnValue" name="" value="0.00" readonly>
                                </div>
                            </div>
                            <!-- End PPN -->

                            <hr>

                            <!-- Grand Total -->
                            <div class="row">
                                <div class="col-sm-4 col-4 mb-3">
                                    <label for="" class="col-form-label text-primary text-sm">Grand Total &nbsp<cursym class="curSymbol">Rp</cursym>&nbsp&nbsp</label>
                                </div>
                                <div class="col-sm-3 col-1"></div>
                                <div class="col-sm-5 col-7">
                                    <input type="text" id="grandTotal" name="" class="form-control text-primary text-bold text-right" value="0.00" readonly>
                                </div>
                            </div>
                            <!-- End Grand Total -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End Grand Total -->


        <!-- Lampiran -->
        <div id="chat-container" class="chat-container col-12">
            <div class="card card-teal direct-chat direct-chat-success shadow-lg">
              <div class="card-header">
                <h3 class="card-title">Lampiran</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" id="remove-chat">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="direct-chat-messages">
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander the Great</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <img class="direct-chat-img" src="<?php echo('AdminLTE/dist/img/user1-128x128.jpg')?>" alt="Message User Image">
                    <div class="direct-chat-text">
                      Lampiran
                    </div>
                  </div>   
                </div>
              </div>
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn bg-teal">Send</button>
                      <button type="submit" class="btn btn-warning"><i class="fas fa-paperclip"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
        </div>

        <button type="button" id="chat-button" class="btn btn-warning back-to-top shadow-lg">
            <i class="fas fa-comments"></i>
            <div class="badge">1</div>
        </button>
        <!-- End Lampiran -->


        <script>
            $(function() {
                var table = $('#tabel_PO').DataTable({
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