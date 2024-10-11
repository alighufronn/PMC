<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Izin Kerja
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Izin Kerja
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Izin Kerja
<?= $this->endsection()?>

<?= $this->section('content') ?>

<div class="card card-default">
            <div class="card-body">
                <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Gedung</label>
                                        <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Gedung 1</option>
                                        <option>Gedung 2</option>
                                        <option>Gedung 3</option>
                                        <option>Gedung 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Lantai</label>
                                        <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Lantai 1</option>
                                        <option>Lantai 2</option>
                                        <option>Lantai 3</option>
                                        <option>Lantai 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Pekerjaan 1</option>
                                            <option>Pekerjaan 2</option>
                                            <option>Pekerjaan 3</option>
                                            <option>Pekerjaan 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Unit/Zona</label>
                                        <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Zona 1</option>
                                        <option>Zona 2</option>
                                        <option>Zona 3</option>
                                        <option>Zona 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Nama Pelaksana</label>
                                        <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Pelaksana 1</option>
                                        <option>Pelaksana 2</option>
                                        <option>Pelaksana 3</option>
                                        <option>Pelaksana 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="">Pekerja</label>
                                        <div style="overflow-y: scroll;">
                                            <table id="" class="table table-sm table-hover table-bordered display" style="max-height: 100px;">
                                                <thead class="text-sm">
                                                    <tr>
                                                        <th>Nama Pekerja</th>
                                                        <th>Jabatan</th>
                                                        <th>On Duty</th>
                                                        <th>Check</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="onduty_pekerja">
                                                                <label for="onduty_pekerja">
                                                                </label>
                                                              </div>
                                                        </td>
                                                        <td>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox" id="check_pekerja">
                                                                <label for="check_pekerja">
                                                                </label>
                                                              </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                             </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Fabrikasi</label>
                                    <table id="" class="table table-sm table-hover table-bordered" style="max-height: 25vw;">
                                        <thead class="text-sm">
                                            <tr>
                                                <th>Nama Pekerja</th>
                                                <th>Jabatan</th>
                                                <th>On Duty</th>
                                                <th>Check</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="checkbox" id="onduty_fabrikasi">
                                                        <label for="onduty_fabrikasi">
                                                        </label>
                                                      </div>
                                                </td>
                                                <td>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="checkbox" id="check_fabrikasi">
                                                        <label for="check_fabrikasi">
                                                        </label>
                                                      </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                     </table>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tools</label>
                                    <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i></button>
        
                                    <table id="" class="table table-sm table-hover table-bordered" style="max-height: 25vw;">
                                        <thead class="text-sm">
                                            <tr>
                                                <th>Alat Kerja</th>
                                                <th>Qty</th>
                                                <th>Status</th>
                                                <th>Check</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="checkbox" id="status">
                                                        <label for="status">
                                                        </label>
                                                      </div>
                                                </td>
                                                <td>
                                                    <div class="icheck-primary d-inline">
                                                        <input type="checkbox" id="check_alat">
                                                        <label for="check_alat">
                                                        </label>
                                                      </div>
                                                </td>
                                                <td><button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button></td>
                                            </tr>
                                        </tbody>
                                     </table>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="card card-body">
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" id="aman">
                                              <label for="aman">
                                                Aman
                                              </label>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" id="lengkap">
                                              <label for="lengkap">
                                                Lengkap
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    catatan
                                </div>
                            </div>
                        </div>
                        
                       
                        


                 </div>

                 
            </div>
            <div class="card-footer">
                <button class="btn btn-primary my-2">Submit</button>
            </div>
             
        </div>
        

<?= $this->endsection() ?>