<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Dashboard
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    .usedChecked {
        cursor: pointer;
    }
</style>

<div class="card card-default collapsed-card" id="card-monitoring">
    <div class="card-header" style="background-color: yellow;">
      <h3 class="card-title">MONITORING LAPORAN HARIAN</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool text-secondary" data-card-widget="collapse"><i class="fas fa-plus"></i>
        </button>
      </div>
    </div>
    <div class="card-body" style="overflow-x: hidden;">
      <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label text-sm">Periode</label>
                <div class="col-sm-4">
                    <input type="date" name="" id="" class="form-control form-control-sm" value="">
                </div>
                <label for="" class="col-sm-2 col-form-label text-sm text-center">s/d</label>
                <div class="col-sm-4">
                    <input type="date" name="" id="" class="form-control form-control-sm" value="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            
        </div>
      </div>

      <div class="card">
          <div class="card-body">
              <div class="table-responsive">
              <table id="monitoring-laporan-harian-hse" class="table text-xs display" style="width: 100%;">
                      <thead>
                          <tr>
                              <th style="background-color: lightgray;" colspan="15">MONITORING LAPORAN HARIAN HSE</th>
                          </tr>
                          <tr>
                              <th class="text-center" style="width: 3%; background-color: lightgray;">HSE STAFF</th>
                              <th class="text-center" style="width: 3%;">1</th>
                              <th class="text-center" style="width: 3%;">2</th>
                              <th class="text-center" style="width: 3%;">3</th>
                              <th class="text-center" style="width: 3%;">4</th>
                              <th class="text-center" style="width: 3%;">5</th>
                              <th class="text-center" style="width: 3%;">6</th>
                              <th class="text-center" style="width: 3%;">7</th>
                              <th class="text-center" style="width: 3%;">8</th>
                              <th class="text-center" style="width: 3%;">9</th>
                              <th class="text-center" style="width: 3%;">10</th>
                              <th class="text-center" style="width: 3%;">11</th>
                              <th class="text-center" style="width: 3%;">12</th>
                              <th class="text-center" style="width: 3%;">13</th>
                              <th class="text-center" style="width: 3%;">14</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th class="text-center" style="background-color: lightgray;">Nama Staff</th>
                              <td class="text-center">
                                  <div title="Detail" class="icheck-danger d-inline usedChecked" data-toggle="modal" data-target="#modal-laporan-hse">
                                      <input type="checkbox" id="sep-hsea1" checked disabled>
                                      <label for="sep-hsea1">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                <div title="Detail" class="icheck-danger d-inline usedChecked" data-toggle="modal" data-target="#modal-laporan-hse">
                                    <input type="checkbox" id="sep-hsea1" checked disabled>
                                    <label for="sep-hsea1">
                                    </label>
                                </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea3">
                                      <label for="sep-hsea3">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea4">
                                      <label for="sep-hsea4">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea5">
                                      <label for="sep-hsea5">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea6">
                                      <label for="sep-hsea6">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea7">
                                      <label for="sep-hsea7">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea8">
                                      <label for="sep-hsea8">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea9">
                                      <label for="sep-hsea9">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea10">
                                      <label for="sep-hsea10">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea11">
                                      <label for="sep-hsea11">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea12">
                                      <label for="sep-hsea12">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea13">
                                      <label for="sep-hsea13">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsea14">
                                      <label for="sep-hsea14">
                                      </label>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <th class="text-center" style="background-color: lightgray;">Nama Staff</th>
                              <td class="text-center">
                                  <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb1">
                                      <label for="sep-hseb1">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb2">
                                      <label for="sep-hseb2">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb3">
                                      <label for="sep-hseb3">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb4">
                                      <label for="sep-hseb4">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb5">
                                      <label for="sep-hseb5">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb6">
                                      <label for="sep-hseb6">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb7">
                                      <label for="sep-hseb7">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb8">
                                      <label for="sep-hseb8">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb9">
                                      <label for="sep-hseb9">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb10">
                                      <label for="sep-hseb10">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb11">
                                      <label for="sep-hseb11">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb12">
                                      <label for="sep-hseb12">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb13">
                                      <label for="sep-hseb13">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hseb14">
                                      <label for="sep-hseb14">
                                      </label>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <th class="text-center" style="background-color: lightgray;">Nama Staff</th>
                              <td class="text-center">
                                  <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec1">
                                      <label for="sep-hsec1">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec2">
                                      <label for="sep-hsec2">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec3">
                                      <label for="sep-hsec3">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec4">
                                      <label for="sep-hsec4">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec5">
                                      <label for="sep-hsec5">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec6">
                                      <label for="sep-hsec6">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec7">
                                      <label for="sep-hsec7">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec8">
                                      <label for="sep-hsec8">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec9">
                                      <label for="sep-hsec9">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec10">
                                      <label for="sep-hsec10">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec11">
                                      <label for="sep-hsec11">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec12">
                                      <label for="sep-hsec12">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec13">
                                      <label for="sep-hsec13">
                                      </label>
                                  </div>
                              </td>
                              <td class="text-center">
                                  <div class="icheck-danger d-inline">
                                      <input type="checkbox" id="sep-hsec14">
                                      <label for="sep-hsec14">
                                      </label>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
              </table>
              </div>
          </div>
      </div>
    </div>
  </div>

            <div class="card card-default collapsed-card" id="card-monitoring">
              <div class="card-header" style="background-color: red; color: white;">
                <h3 class="card-title">MONITORING LAPORAN HARIAN</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool text-white" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="overflow-x: hidden;">
                
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <select name="" id="" class="form-control select2" style="width: 100%;">
                            
                        </select>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7 mt-3">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label text-sm">Periode</label>
                            <div class="col-sm-4">
                                <input type="date" name="" id="" class="form-control form-control-sm" value="">
                            </div>
                            <label for="" class="col-sm-2 col-form-label text-sm text-center">s/d</label>
                            <div class="col-sm-4">
                                <input type="date" name="" id="" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="monitoring-laporan-harian" class="table text-xs display" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="background-color: lightgray;" colspan="15">MONITORING LAPORAN HARIAN</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 3%; background-color: lightgray;">Supervisor</th>
                                        <th class="text-center" style="width: 3%;">1</th>
                                        <th class="text-center" style="width: 3%;">2</th>
                                        <th class="text-center" style="width: 3%;">3</th>
                                        <th class="text-center" style="width: 3%;">4</th>
                                        <th class="text-center" style="width: 3%;">5</th>
                                        <th class="text-center" style="width: 3%;">6</th>
                                        <th class="text-center" style="width: 3%;">7</th>
                                        <th class="text-center" style="width: 3%;">8</th>
                                        <th class="text-center" style="width: 3%;">9</th>
                                        <th class="text-center" style="width: 3%;">10</th>
                                        <th class="text-center" style="width: 3%;">11</th>
                                        <th class="text-center" style="width: 3%;">12</th>
                                        <th class="text-center" style="width: 3%;">13</th>
                                        <th class="text-center" style="width: 3%;">14</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" style="background-color: lightgray;">Nama Staff</th>
                                        <td class="text-center">
                                            <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a1" checked disabled>
                                                <label for="sep-a1">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a2" checked disabled>
                                                <label for="sep-a2">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a3">
                                                <label for="sep-a3">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a4">
                                                <label for="sep-a4">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a5">
                                                <label for="sep-a5">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a6">
                                                <label for="sep-a6">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a7">
                                                <label for="sep-a7">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a8">
                                                <label for="sep-a8">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a9">
                                                <label for="sep-a9">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a10">
                                                <label for="sep-a10">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a11">
                                                <label for="sep-a11">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a12">
                                                <label for="sep-a12">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a13">
                                                <label for="sep-a13">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a14">
                                                <label for="sep-a14">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: lightgray;">Nama Staff</th>
                                        <td class="text-center">
                                            <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b1">
                                                <label for="sep-b1">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b2">
                                                <label for="sep-b2">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b3">
                                                <label for="sep-b3">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b4">
                                                <label for="sep-b4">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b5">
                                                <label for="sep-b5">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b6">
                                                <label for="sep-b6">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b7">
                                                <label for="sep-b7">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b8">
                                                <label for="sep-b8">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b9">
                                                <label for="sep-b9">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b10">
                                                <label for="sep-b10">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b11">
                                                <label for="sep-b11">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b12">
                                                <label for="sep-b12">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b13">
                                                <label for="sep-b13">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b14">
                                                <label for="sep-b14">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: lightgray;">Nama Staff</th>
                                        <td class="text-center">
                                            <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c1">
                                                <label for="sep-c1">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c2">
                                                <label for="sep-c2">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c3">
                                                <label for="sep-c3">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c4">
                                                <label for="sep-c4">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c5">
                                                <label for="sep-c5">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c6">
                                                <label for="sep-c6">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c7">
                                                <label for="sep-c7">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c8">
                                                <label for="sep-c8">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c9">
                                                <label for="sep-c9">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c10">
                                                <label for="sep-c10">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c11">
                                                <label for="sep-c11">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c12">
                                                <label for="sep-c12">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c13">
                                                <label for="sep-c13">
                                                </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c14">
                                                <label for="sep-c14">
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                        </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="prestasi-subkon" class="table text-xs display" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th colspan="15" style="background-color: lightgray;">PRESTASI SUBKON</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 3%; background-color: lightgray;">Subkon</th>
                                        <th class="text-center">1</th>
                                        <th class="text-center">2</th>
                                        <th class="text-center">3</th>
                                        <th class="text-center">4</th>
                                        <th class="text-center">5</th>
                                        <th class="text-center">6</th>
                                        <th class="text-center">7</th>
                                        <th class="text-center">8</th>
                                        <th class="text-center">9</th>
                                        <th class="text-center">10</th>
                                        <th class="text-center">11</th>
                                        <th class="text-center">12</th>
                                        <th class="text-center">13</th>
                                        <th class="text-center">14</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td style="background-color: lightgray;"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="modal-laporan-hse">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header bg-light">
                      <span>
                        <h4 class="modal-title">LIST LAPORAN HARIAN - HSE</h4>
                        <p class="text-sm">HSE Staff: <span class="text-bold">Nama HSE</span> - <span>2024-10-22</span></p>
                    </span>
                      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table id="laporanharian-hse" class="table text-xs display">
                        <thead class="table-bordered">
                            <tr>
                                <th style="width: 12.5%;">NOMOR</th>
                                <th style="width: 12.5%;">RAP</th>
                                <th style="width: 12.5%;">SUBKON</th>
                                <th style="width: 12.5%;">GEDUNG/LANTAI</th>
                                <th style="width: 12.5%;">PEKERJAAN/SUB</th>
                                <th style="width: 12.5%;">UNIT</th>
                                <th style="width: 12.5%;">MANDAYS</th>
                                <th style="width: 12.5%;">PRESTASI ZONA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background-color: lightgray;">00011</td>
                                <td>00010</td>
                                <td></td>
                                <td>COLO 3 <br> COLO 3</td>
                                <td>LISTRIK KABEL GROUNDING</td>
                                <td>GROUNDING</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="background-color: lightgray;">00011</td>
                                <td>00010</td>
                                <td></td>
                                <td>COLO 3 <br> COLO 3</td>
                                <td>LISTRIK KABEL GROUNDING</td>
                                <td>GROUNDING</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer justify-content-between bg-light">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Pilih</button>
                    </div>
                  </div>
                </div>
              </div>



            <script>
                // Halaman Monitoring Laporan Harian
                $(document).ready(function () {
                    var table_monitor = $('#monitoring-laporan-harian').DataTable({
                        "dom": '',
                        "paging": false,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": false,
                        "info": false,
                        "autoWidth": false,
                        "responsive": true,
                        "fixedHeader": true,
                        "scrollX": true,
                        "fixedColumns": {
                            leftColumns: 1,
                        },
                    });

                    var table_monitorhse = $('#monitoring-laporan-harian-hse').DataTable({
                        "dom": '',
                        "paging": false,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": false,
                        "info": false,
                        "autoWidth": false,
                        "responsive": true,
                        "fixedHeader": true,
                        "scrollX": true,
                        "fixedColumns": {
                            leftColumns: 1,
                        },
                    });

                    var table_laporanhse = $('#laporanharian-hse').DataTable({
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": true,
                        "responsive": true,
                        "scrollX": true,
                        "scrollY": "200px",
                        "language": {
                            "search": "",
                            "searchPlaceholder": "Search",
                            "lengthMenu": "Show _MENU_",
                            "paginate": {
                                "first":    "",
                                "previous": "‹",
                                "next":     "›",
                                "last":     ""
                            },
                        },
                        "select": true,
                        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                    });
                    $('#modal-laporan-hse').on('shown.bs.modal', function () {
                        table_laporanhse.columns.adjust().draw();
                    });


                    var table_subkon = $('#prestasi-subkon').DataTable({
                        "dom": '',
                        "paging": false,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": false,
                        "info": false,
                        "autoWidth": false,
                        "responsive": true,
                        "fixedHeader": true,
                        "scrollX": true,
                        "fixedColumns": {
                            leftColumns: 1,
                        },
                    });

                    $('.usedChecked').on('click', function() {
                        $('#modal-laporan-hse').modal('show');
                    });
                });
            </script>

<?= $this->endsection()?>