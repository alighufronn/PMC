<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Dashboard
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>


            <div class="card card-default collapsed-card" id="card-monitoring">
              <div class="card-header">
                <h3 class="card-title">MONITORING LAPORAN HARIAN</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
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
                                        <th class="text-center" style="background-color: lightgray;">A</th>
                                        <td class="text-center">
                                            <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a1" checked>
                                                <label for="sep-a1">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a2" checked disabled>
                                                <label for="sep-a2">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a3">
                                                <label for="sep-a3">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a4">
                                                <label for="sep-a4">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a5">
                                                <label for="sep-a5">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a6">
                                                <label for="sep-a6">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a7">
                                                <label for="sep-a7">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a8">
                                                <label for="sep-a8">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a9">
                                                <label for="sep-a9">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a10">
                                                <label for="sep-a10">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a11">
                                                <label for="sep-a11">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a12">
                                                <label for="sep-a12">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a13">
                                                <label for="sep-a13">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-a14">
                                                <label for="sep-a14">
                                                </label>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: lightgray;">B</th>
                                        <td class="text-center">
                                            <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b1">
                                                <label for="sep-b1">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b2">
                                                <label for="sep-b2">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b3">
                                                <label for="sep-b3">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b4">
                                                <label for="sep-b4">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b5">
                                                <label for="sep-b5">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b6">
                                                <label for="sep-b6">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b7">
                                                <label for="sep-b7">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b8">
                                                <label for="sep-b8">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b9">
                                                <label for="sep-b9">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b10">
                                                <label for="sep-b10">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b11">
                                                <label for="sep-b11">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b12">
                                                <label for="sep-b12">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b13">
                                                <label for="sep-b13">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-b14">
                                                <label for="sep-b14">
                                                </label>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="background-color: lightgray;">C</th>
                                        <td class="text-center">
                                            <a href="#" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c1">
                                                <label for="sep-c1">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo('https://www.example.com')?>" target="_blank" title="Detail" class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c2">
                                                <label for="sep-c2">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c3">
                                                <label for="sep-c3">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c4">
                                                <label for="sep-c4">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c5">
                                                <label for="sep-c5">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c6" checked disabled>
                                                <label for="sep-c6">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c7">
                                                <label for="sep-c7">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c8">
                                                <label for="sep-c8">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c9" checked>
                                                <label for="sep-c9">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c10">
                                                <label for="sep-c10">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c11">
                                                <label for="sep-c11">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c12">
                                                <label for="sep-c12">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c13">
                                                <label for="sep-c13">
                                                </label>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" target="_blank"class="icheck-danger d-inline">
                                                <input type="checkbox" id="sep-c14">
                                                <label for="sep-c14">
                                                </label>
                                            </a>
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



            <script>
                // Halaman Monitoring Laporan Harian
            $(document).ready(function () {
              var table = $('#monitoring-laporan-harian').DataTable({
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
            });


            $(document).ready(function () {
                var table = $('#prestasi-subkon').DataTable({
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
            });
            </script>

<?= $this->endsection()?>