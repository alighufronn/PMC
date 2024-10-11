<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Purchase Order
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
SUMMARY PO
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
SUMMARY PO by PERIOD
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>  

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <div class="input-group input-group-sm">
                        <div class="input-group-append">
                            <span class="input-group-text">Periode</span>
                        </div>
                        <input type="date" name="" id="" class="form-control text-xs" value="">
                        <div class="input-group-append">
                            <span class="input-group-text">s/d</span>
                        </div>
                        <input type="date" name="" id="" class="form-control text-xs" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">List PO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">List Material</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
               <table id="list-po" class="table text-sm display nowrap" style="width: 100%;">
                    <thead class="table-bordered">
                        <tr>
                            <th class="text-center">#KODE-PO</th>
                            <th>Approval</th>
                            <th class="text-center">Tgl Aprv</th>
                            <th class="text-center">Tgl PO</th>
                            <th>Supplier</th>
                            <th>Proyek</th>
                            <th>Td Tangan</th>
                            <th class="text-center">Sub Total</th>
                            <th class="text-center">PPN</th>
                            <th class="text-center">Total PO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">23522</td>
                            <td>
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="po_approval" name="" value="" checked>
                                    <label for="po_approval"></label>
                                </div>
                                <br>
                                <span class="badge badge-success">by: Lorem, ipsum.</span>
                            </td>
                            <td class="text-center">2024-08-26</td>
                            <td class="text-center">2024-08-21</td>
                            <td class="text-uppercase">Zenna jaya abadi</td>
                            <td class="text-uppercase">Wisma asia 1</td>
                            <td class="text-uppercase">Renny kariono</td>
                            <td class="text-right">49,009.58</td>
                            <td class="text-right">5,391.00</td>
                            <td class="text-right">54,400.58</td>
                        </tr>
                    </tbody>
                    <tfoot class="table-bordered">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>TOTAL</th>
                        <th>1,000,000.00</th>
                        <th>110,000.00</th>
                        <th>1,110.000.00</th>
                    </tfoot>
               </table>
            </div>
            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
               <table id="list-material" class="table text-sm" style="width: 100%;">
                    <thead class="table-bordered">
                        <tr>
                            <th style="width: 40%; text-wrap: nowrap;">Deskripsi Material</th>
                            <th class="text-center" style="width: 20%;">Satuan</th>
                            <th class="text-center" style="width: 20%;">QTY</th>
                            <th class="text-center" style="width: 20%;">HARGA</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr>
                            <td>"527B" AUSTIN Mid Executive Chair 527B Material : PU Upholstery Dimension : 67 cm x 48,5 cm x 48 cm x 51,5 cm Capacity : 300KG Features : Aluminum chair base, Adjustable tilting session, Synchronize mechanism, Fixed aluminum pp armrest</td>
                            <td class="text-center">unit</td>
                            <td class="text-right">10</td>
                            <td class="text-right"></td>
                        </tr>
                    </tbody>
               </table>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>



      <script>
        // Halaman Total PO
        $(document).ready(function() {
            var table = $('#list-po').DataTable({
                "lengthMenu": [20, 50, 100, 500],
                "paging": true,
                "language": {
                  "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                  }
                },
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "scrollX": true,
                "autoWidth": true,
                "scrollY": '500px',
                "responsive": true,
                "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>' + 'Brtip',
                "buttons": [
                    {
                        extend: 'copy',
                        className: 'mr-1 bg-gradient-secondary mt-3',
                    },
                    {
                        extend: 'excel',
                        className: 'mr-1 bg-gradient-secondary mt-3',
                    },
                    {
                        extend: 'pdf',
                        className: 'mr-1 bg-gradient-secondary mt-3',
                    },
                    {
                        extend: 'print',
                        className: 'bg-gradient-secondary mt-3',
                    },
                ],
            }).buttons().container().appendTo('#list-po_wrapper1 .col-md-6:eq(0)');
        });



        $(document).ready(function() {
            var table = $('#list-material').DataTable({
                "lengthMenu": [20, 50, 100, 500],
                "paging": true,
                "language": {
                  "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                  }
                },
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "scrollX": true,
                "scrollY": '500px',
                "autoWidth": true,
                "responsive": true,
                "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>' + 'Brt',
                "buttons": [
                    {
                        extend: 'excel',
                        className: 'mr-1 bg-gradient-secondary mt-3',
                    },
                    {
                        extend: 'pdf',
                        className: 'mr-1 bg-gradient-secondary mt-3',
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                          columns: [0, 1, 2] // Ganti dengan indeks kolom yang ingin dicetak
                        },
                        className: 'bg-gradient-secondary mt-3',
                    },
                ],
            });

            table.columns.adjust().draw();

            $(window).resize(function() {
                if ($(window).width() < 768) {
                    table.columns.adjust().draw();
                }
            });

            $('a[data-toggle="tab"], a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                table.columns.adjust().draw();
            });
        });
      </script>

<?= $this->endsection()?>