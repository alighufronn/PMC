<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Stock Material
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
BPB STOCK
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Stock
<?= $this->endsection()?>

<?= $this->section('content') ?>

<style>
    /* Halaman BPB Stock */
    .footerrapdetail-2 {
      display: none;
    }
    @media (max-width: 401px) {
      .footerrapdetail-1 {
        display: none;
      }
      .footerrapdetail-2 {
        display: block;
      }
    }
</style>


<div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Stock Material</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Daftar BPB Stock</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <label for="" class="text-primary">DATA STOCK</label>
                                    <select name="" id="" class="form-control select2" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="card-body">
                                    <table id="data_stock" class="table table-bordered-row table-hover display table-sm text-xs">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">Kode</th>
                                                <th style="width: 55%;">Deskripsi</th>
                                                <th style="width: 10%;" class="text-center">Satuan</th>
                                                <th style="width: 10%;" class="text-center">Masuk</th>
                                                <th style="width: 10%;" class="text-center">Keluar</th>
                                                <th style="width: 10%;" class="text-center">Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="min-width: 80px;">120002004.01.000.000</td>
                                                <td style="min-width: 100px;">3 WAY MOTORIZED VALVE NR24-SR Ø 32 MM BELIMO</td>
                                                <td class="text-center">BUAH</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card sticky-top">
                                <div class="card-header">
                                    <label for="" class="text-primary">MUTASI MASUK/KELUAR</label>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mt-2">
                                            <div class="form-group">
                                                <div class="input-group input-group-sm">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                  </div>
                                                  <input type="text" class="form-control float-right" id="reservation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6 mt-2">
                                            <button type="button" class="btn btn-sm btn-info" style="width: 100%;"><i class="fa fa-print"></i> Print</button>
                                        </div>
                                        <div class="col-lg-3 col-6 mt-2">
                                            <button class="btn btn-sm btn-primary" style="width: 100%;"><i class="fa fa-plus"></i> BPB Stock</button>
                                        </div>
                                    </div>

                                    <table id="mutasi" class="table table-sm table-bordered-row table-hover text-xs display nowrap" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>BBM/BBK</th>
                                                <th>Tgl</th>
                                                <th>Supp/Pro</th>
                                                <th>Hrg Sat</th>
                                                <th class="text-center">Masuk</th>
                                                <th class="text-center">Keluar</th>
                                                <th class="text-center">Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>-<br>-</td>
                                                <td>2024-08-24</td>
                                                <td>STOCK AWAL</td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm text-right" name="" id="" value="0">
                                                </td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">2</td>
                                            </tr>
                                            <tr>
                                                <td>-<br>-</td>
                                                <td>2024-09-23</td>
                                                <td>STOCK AKHIR</td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm text-right" name="" id="" value="0">
                                                </td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <label for="" class="text-primary">DAFTAR BPB STOCK</label>
                                </div>
                                <div class="card-body">
                                    <table id="bpb_stock" class="table table-bordered-row  table-hover display table-sm text-xs" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No/Tanggal</th>
                                                <th>Material</th>
                                                <th class="text-center">Satuan</th>
                                                <th class="text-center">Qty BPB</th>
                                                <th class="text-center">Harga Satuan</th>
                                                <th class="text-center">Total Harga</th>
                                                <th class="text-center">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>00000000075<br>2020-07-02</td>
                                                <td>LONGDRAT GIP Ø 8 x 1000</td>
                                                <td class="text-center">BATANG</td>
                                                <td class="text-right">3.500</td>
                                                <td class="text-right">5.711</td>
                                                <td class="text-right">19.988.500</td>
                                                <td class="text-right">
                                                    <button type="button" title="Cetak" class="btn btn-sm btn-info"><i class="fa fa-print"></i></button>
                                                    <button type="button" title="Hapus" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card sticky-top">
                                <div class="card-header">
                                    <label for="" class="text-primary">DETAIL BPB STOCK</label>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <table id="detail_bpb" class="table table-sm table-bordered-row table-hover text-xs display nowrap" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>BBM/BBK</th>
                                                <th>Tgl</th>
                                                <th>Supp/Pro</th>
                                                <th>Hrg Sat</th>
                                                <th class="text-center">Masuk</th>
                                                <th class="text-center">Keluar</th>
                                                <th class="text-center">Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>-<br>-</td>
                                                <td>2024-08-24</td>
                                                <td>STOCK AWAL</td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">0</td>
                                                <td class="text-right">2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
        // Halaman BPB Stock
        $('#data_stock').DataTable({
          "paging": true,
          "lengthChange": true,
          "language": {
                  "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                  },
                  "search": "",
                  "searchPlaceholder": "Search",
                  "lengthMenu": "Show _MENU_",
                },
          "searching": true,
          "ordering": false,
          "info": false,
          "scrollX": true,
          "autoWidth": true,
          "responsive": true,
          "scrollY": "500px",
          "dom": '<"row"<"col-sm-5"l><"col-sm-7"f>>rt<"bottom"p><"clear">',
        });
        
        $(document).ready(function() {
            var table = $('#bpb_stock').DataTable({
                "paging": true,
                "lengthChange": true,
                "language": {
                  "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                  },
                  "search": "",
                  "searchPlaceholder": "Search",
                  "lengthMenu": "Show _MENU_",
                },
                "searching": true,
                "ordering": false,
                "info": false,
                "scrollX": true,
                "autoWidth": true,
                "responsive": true,
                "scrollY": "500px",
                "dom": '<"row"<"col-sm-5"l><"col-sm-7"f>>rt<"bottom"p><"clear">'
            });

            // Panggil columns.adjust() setelah inisialisasi tabel
            table.columns.adjust().draw();

            // Jika tabel berada dalam tab kedua
            $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                var target = $(e.target).attr("href"); 
                if (target === "custom-tabs-four-home") { 
                    table.columns.adjust().draw();
                }
            });
        });

        $('#mutasi').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": false,
          "scrollX": true,
          "autoWidth": true,
          "responsive": true,
        });

        $(document).ready(function() {
            var table = $('#detail_bpb').DataTable({
                "paging": true,
                "lengthChange": true,
                "language": {
                  "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                  },
                  "search": "",
                  "searchPlaceholder": "Search",
                  "lengthMenu": "Show _MENU_",
                },
                "searching": true,
                "ordering": false,
                "info": false,
                "scrollX": true,
                "autoWidth": true,
                "responsive": true,
                "scrollY": "250px",
                "dom": '<"row"<"col-sm-5"l><"col-sm-7"f>>rt<"bottom"p><"clear">'
            });

            // Panggil columns.adjust() setelah inisialisasi tabel
            table.columns.adjust().draw();

            // Jika tabel berada dalam tab kedua
            $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                var target = $(e.target).attr("href"); 
                if (target === "#custom-tabs-four-profile") { 
                    table.columns.adjust().draw();
                }
            });
        });
        
        $(document).ready(function() {
          var table = $('#bpb_stock').DataTable();

          $('#bpb_stock tbody').on('click', 'tr', function() {
              var data = table.row(this).data();
              alert('You clicked on ' + data[1] + '\'s row');
          });
        });

        $(document).ready(function() {
          var table = $('#data_stock').DataTable();

          $('#data_stock tbody').on('click', 'tr', function() {
              var data = table.row(this).data();
              alert('You clicked on ' + data[1] + '\'s row');
          });
        });
    })
</script>
<?= $this->endsection()?>