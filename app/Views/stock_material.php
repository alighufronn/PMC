<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Stock Material
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
STOCK MATERIAL
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Stock
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    
</style>

<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="stock-material-tab" data-toggle="pill" href="#stock-material" role="tab" aria-controls="stock-material" aria-selected="true">Stock Material</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade show active" id="stock-material" role="tabpanel" aria-labelledby="stock-material-tab">
           
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-sm btn-primary mb-2" title="Print Stock"><i class="fas fa-print"></i> Print</button>
                            <button type="button" class="btn btn-sm btn-warning mb-2" title="Print Stock + Harga"><i class="fas fa-print"></i> Print $</button>
                            <table id="material" class="table table-sm display" style="width: 100%; font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Material</th>
                                        <th>Satuan</th>
                                        <th class="text-center">Masuk</th>
                                        <th class="text-center">Keluar</th>
                                        <th class="text-center">Stock</th>
                                        <th>Status</th>
                                        <th class="text-center">Harga Sat.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-href="#" style="line-height: 130%;">
                                        <td>
                                            <small>0</small><br>
                                            SENG BJLS 0.8 LOKFOM <br>
                                            <strong>#L.80.XXIV.06</strong>
                                        </td>
                                        <td class="text-center" style="text-wrap: nowrap;">KG</td>
                                        <td class="text-right" style="text-wrap: nowrap;">2,170.00</td>
                                        <td class="text-right" style="text-wrap: nowrap;">772.77</td>
                                        <td class="text-right" style="text-wrap: nowrap;">1,397.23</td>
                                        <td>
                                            <select name="" id="" class="form-control form-control-sm select" style="min-width: 80px;">
                                                <option value="">Utuh</option>
                                                <option value="">Terpakai</option>
                                                <option value="">HABIS</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control form-control-sm text-right" value="23,214" style="min-width: 80px;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card sticky-top">
                        <div class="card-header">
                            <!-- <label for="" class="text-primary">MUTASI MASUK/KELUAR</label> -->
                            <label for="" class="text-primary">MUTASI: <span class="text-secondary">SENG BJLS 0.8 LOKFOM#L.80.XXIV.06</span></label>
                        </div>
                        
                        <div class="card-body">
                            <button type="button" class="btn btn-sm btn-primary" title="Print Stock"><i class="fas fa-print"></i> Print</button>
                            <button type="button" class="btn btn-sm btn-warning" title="Print Stock + Harga"><i class="fas fa-print"></i> Print $</button>
                            
                        </div>
                        <table id="mutasi" class="table display table-sm" style="width: 100%; font-size: 13px;">
                            <thead>
                                <tr>
                                    <th>BBM/BBK</th>
                                    <th>Tgl</th>
                                    <th>Supp/Pro</th>
                                    <th class="text-center">Masuk</th>
                                    <th class="text-center">Keluar</th>
                                    <th class="text-center">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="line-height: 130%;">
                                    <td style="text-wrap: nowrap;">
                                        BM-00461 <br>
                                        -
                                    </td>
                                    <td>2024-09-20</td>
                                    <td>
                                        TI <br>
                                        <small>L.80.XXIV.06</small>
                                    </td>
                                    <td class="text-right">2,170.00</td>
                                    <td class="text-right">.0</td>
                                    <td class="text-right">2,170.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>




  <script>
    $(function() {
        var table = $('#material').DataTable({
            "paging": false,
            "searching": true,
            "lengthChange": false,
            "ordering": false,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "500px",
            "language": {
                "search": "",
                "searchPlaceholder": "Search",
            },
        });
        table.columns.adjust().draw();
        
        $('#material tbody').on('click', 'tr', function() {
            var href = $(this).data('href');
            if (href) {
                window.location.href = href;
            }
        });




        var table = $('#mutasi').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
            "scrollX": true,
            "scrollY": "350px",
        });
    });
  </script>

<?= $this->endsection()?>