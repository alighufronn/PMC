<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Master Material Stock
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Master Material Stock
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Material Stock
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    /* Halaman Master Material Stock */
    .material2 {
      display: none;
    }
    @media (max-width: 767px) {
      .material1 {
        display: none;
      }
      .material2 {
        display: block;
      }

      #buttonTambah-material1 {
        display: none;
      }
      #buttonTampil-material1 {
        display: none;
      }
    }     
</style>

    <div class="card">
        <div class="card-header bg-light">
                <button type="button" id="buttonTambah-material1" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-default" id="buttonTampil-material1">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tampil1" name="" value="option1">
                        <label for="tampil1" class="custom-control-label">Tampil tidak dipakai</label>
                    </div>
                </button>
            
            <div class="material2">
                <div class="row">
                    <div class="col-sm-6 col-3 mb-3">
                        <button type="button" id="buttonTambah-material2" class="btn btn-primary w-100"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="col-sm-6 col-9 mb-3">
                        <button type="button" class="btn btn-default text-sm w-100" id="buttonTampil-material2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="tampil2" name="" value="option1">
                                <label for="tampil2" class="custom-control-label">Tampil tidak dipakai</label>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <span id="printButton-material"></span>

        </div>
        <div class="card-body">
            <table id="material-stock" class="table table-hover table-bordered-row table-sm text-sm display" style="width: 100%;">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">#ID</th>
                        <th class="text-center">Group</th>
                        <th class="text-center">Dipakai</th>
                        <th>Deskripsi Material</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">Jml Gudang</th>
                        <th class="text-center">Total Stock</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>11672157</td>
                        <td>
                            <select name="" id="" class="form-control form-control-sm select">
                                <option value="" selected></option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </td>
                        <td class="text-center">
                            <span style="display: none;">yes</span>
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" id="dipakai-id1" name="" value="yes" checked>
                                <label for="dipakai-id1"></label>
                            </div>
                        </td>
                        <td>2 WAY MOTORIZED VALVE Ø 125 MM HONEYWELL</td>
                        <td class="text-center">BUAH</td>
                        <td class="text-right">1</td>
                        <td class="text-right">-2.00</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm text-sm" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11672157</td>
                        <td>
                            <select name="" id="" class="form-control form-control-sm select">
                                <option value="" selected></option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </td>
                        <td class="text-center">
                            <span style="display: none;">no</span>
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" id="dipakai-id2" name="" value="no">
                                <label for="dipakai-id2"></label>
                            </div>
                        </td>
                        <td>2 WAY MOTORIZED VALVE Ø 125 MM HONEYWELL</td>
                        <td class="text-center">BUAH</td>
                        <td class="text-right">1</td>
                        <td class="text-right">-2.00</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm text-sm" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>


    <script>
        // Halaman Master Material Stock
        $(document).ready(function() {
            function format(d) {
                // Buat konten untuk baris detail
                return '<div class="bg-light">' +
                    '<table class="w-100" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                        '<tr>' +
                            '<th>Gudang</th>' +
                            '<th>Deskripsi</th>' +
                            '<th>Satuan</th>' +
                            '<th>Masuk</th>' +
                            '<th>Keluar</th>' +
                            '<th>Stock</th>' +
                            '<th>Aksi</th>' +
                        '</tr>' +
                        '<tr>' +
                            '<td>RRP PHASE 2</td>' +
                            '<td>'+ d.deskripsimaterial +'</td>' +
                            '<td>'+ d.satuan +'</td>' +
                            '<td>0</td>' +
                            '<td>0</td>' +
                            '<td>0</td>' +
                            '<td><button type="button" class="btn btn-xs text-sm btn-success">Move</button><button type="button" class="btn btn-xs text-sm btn-danger">Del</button></td>' +
                        '</tr>' +
                    '</table>' +
                    '</div>';
                }

            var table = $('#material-stock').DataTable({
                // "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>' + '<"row"<"col-sm-12"B>>' + 'rtip',
                "lengthMenu": [20, 50, 100, 500],
                "responsive": true,
                "paging": true,
                "pagingType": "full_numbers",
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
                "columns": [
                  {
                      "className": 'details-control',
                      "orderable": false,
                      "data": null,
                      "defaultContent": ''
                  },
                  { "data": "id" },
                  { "data": "group" },
                  { "data": "dipakai" },
                  { "data": "deskripsimaterial" },
                  { "data": "satuan" },
                  { "data": "jmlgudang" },
                  { "data": "totalstock" },
                  { "data": "aksi" }
                    
                ],
                "order": [[1, 'asc']],
                "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>' + 'Brtip',
                "buttons": [
                    {
                        extend: 'print',
                        exportOptions: {
                          columns: [1, 3, 4, 5, 6, 7] // Ganti dengan indeks kolom yang ingin dicetak
                        },
                        text: 'Print',
                        className: 'btn btn-info col-sm',
                    }
                ]
            });
            table.buttons().container().appendTo('#printButton-material');


            // Add event listener for opening and closing details
            $('#material-stock tbody').on('click', 'tr', 'td.details-control', function() {
              
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });

            // $('#material-stock').DataTable({
            //   "paging": true,
            //   "lengthChange": true,
            //   "searching": true,
            //   "ordering": true,
            //   "info": true,
            //   "scrollX": true,
            //   "autoWidth": false,
            //   "responsive": true,
            //   // "buttons": ["print"]
            // });

            // $('[data-widget="expandable-table"]').on('click', function() {
            //     var $this = $(this);
            //     var $next = $this.next('.expandable-body');
                
            //     if ($this.attr('aria-expanded') === 'true') {
            //         $this.attr('aria-expanded', 'false');
            //         $next.hide();
            //     } else {
            //         $this.attr('aria-expanded', 'true');
            //         $next.show();
            //     }
            // });
        });
    </script>
<?= $this->endsection()?>