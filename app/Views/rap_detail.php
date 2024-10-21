<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
RAP Detail
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
RAP - 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
RAP Detail
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">#RAP</label>
                                        <div class="input-group input-group-sm mb-3" style="width: 100%;">
                                            <input type="text" class="form-control text-sm" name="" id="" value="">
                                            <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" title="Cari RAP"><i class="fa fa-search text-sm"></i></button>
                                            <button type="button" class="btn btn-warning" title="Revisi"><i class="fa fa-recycle text-sm"></i></button>
                                            <button type="button" class="btn btn-danger" title="Hapus RAP"><i class="fa fa-times text-sm"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">GEDUNG</label>
                                        <input type="text" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">LANTAI</label>
                                        <input type="text" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">PEKERJAAN</label>
                                        <select name="" id="" class="form-control form-control-sm select">
                                            <option value=""></option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">SUB PEKERJAAN</label>
                                        <input type="text" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">UNIT/ZONA</label>
                                        <div class="input-group input-group-sm mb-3" style="width: 100%;">
                                            <input type="text" class="form-control text-sm" name="" id="" value="">
                                            <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" title="Tambah Unit"><i class="fa fa-plus text-sm"></i></button>
                                            <button type="button" class="btn btn-danger" title="Hapus Unit"><i class="fa fa-times text-sm"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="" class="text-sm">GAMBAR</label>
                                        <input type="text" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="" class="text-sm">JENIS KONTRAK</label>
                                        <select name="" id="" class="form-control form-control-sm select">
                                            <option value=""></option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="" class="text-sm">No SI</label>
                                        <input type="text" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-3">
                                    <div class="form-group">
                                        <label for="" class="text-sm">Terima Gambar</label>
                                        <input type="date" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-3">
                                    <div class="form-group">
                                        <label for="" class="text-sm">Selesai Hitung</label>
                                        <input type="date" class="form-control form-control-sm" name="" id="" value="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">SUPERVISOR</label>
                                        <select name="" id="" class="form-control form-control-sm select">
                                            <option value=""></option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">PELAKSANA</label>
                                        <select name="" id="" class="form-control form-control-sm select">
                                            <option value=""></option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="text-sm">KETERANGAN</label>
                                        <div class="input-group input-group-sm mb-3" style="width: 100%;">
                                            <textarea class="form-control text-sm" rows="1" name="" id=""></textarea>
                                            <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" title="Import Data Material"><i class="fa fa-plus text-sm"></i></button>
                                            <button type="button" class="btn btn-warning" title="Print"><i class="fa fa-print text-sm"></i></button>
                                            <button type="button" class="btn btn-default" title="Print Lengkap"><i class="fa fa-print text-sm"></i></button>
                                            </div>
                                        </div>
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
                                <div class="card-header bg-primary">
                                    <label for="">Approval</label>
                                </div>
                                <div class="card-body">
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="qsmaterial" name="qsmaterial" value="">
                                        <label for="qsmaterial">QS Material: Nama</label>
                                        <span class="float-right text-xs text-secondary">DD/MM/YYYY</span>
                                        <hr>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="pm" name="pm" value="">
                                        <label for="pm">PM: Nama</label>
                                        <span class="float-right text-xs text-secondary">DD/MM/YYYY</span>
                                        <hr>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="qsmanager" name="qsmanager" value="">
                                        <label for="qsmanager">QS Manager: Nama</label>
                                        <span class="float-right text-xs text-secondary">DD/MM/YYYY</span>
                                        <hr>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="projectdirector" name="projectdirector" value="">
                                        <label for="projectdirector">Project Director: Nama</label>
                                        <span class="float-right text-xs text-secondary">DD/MM/YYYY</span>
                                        <hr>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="checkbox" id="dir" name="dir" value="">
                                        <label for="dir">Approval DIR ? [STATUS]</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    Catatan
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

    <div class="card">
        <div class="card-header bg-light">
            <button type="button" class="btn btn-primary mb-1" title="Rekap per Group Acara">Rekap</button>
            <button type="button" class="btn btn-warning mb-1" title="Berita Acara Pekerjaan">Berita Acara</button>
            <button type="button" class="btn btn-success mb-1" title="Laporan Pekerjaan">Laporan Pekerjaan</button>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="custom-control custom-switch custom-switch-off-default custom-switch-on-primary">
                  <input type="checkbox" class="custom-control-input" id="customSwitch3">
                  <label class="custom-control-label" for="customSwitch3">Tampilkan / Sembunyikan RAP Qty 0</label>
                </div>
            </div>
            <table id="rap-detail" class="table text-sm table-bordered-row table-striped table-hover display" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Deskripsi Material</th>
                        <th>Sat</th>
                        <th>R0</th>
                        <th>Prev</th>
                        <th>Now</th>
                        <th>BPB</th>
                        <th>BPM</th>
                        <th>BBK</th>
                        <th>Pasang</th>
                        <th>Progress</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td style="min-width: 150px;">EAG + OBD + Sock 150 x 150 x Ø 100 mm  <br><span class="badge badge-primary mx-1">DIFFUSER</span><span class="badge badge-warning mx-1">kg</span></td>
                        <td> M²</td>
                        <td class="text-center">330</td>
                        <td class="text-center">135</td>
                        <td class="text-center">135.0</td>
                        <td class="text-right">0</td>
                        <td class="text-right">0</td>
                        <td class="text-right">0</td>
                        <td class="text-right">0</td>
                        <td class="text-right">0</td>
                        <td>
                            <textarea name="" id="" rows="1" class="form-control form-control-sm text-sm" style="min-width: 125px;"></textarea>
                        </td>
                        <td class="text-right"><button type="button" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

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
            var table = $('#rap-detail').DataTable({
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