<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Group Material Stock
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Group Material Stock
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Group Material Stock
<?= $this->endsection()?>

<style>
    /* Halaman Group Material Stock */
    @media (max-width: 426px) {
        .tambah-groupmaterial {
            width: 100%;
        }
    }
</style>

<!-- Main Content -->
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary tambah-groupmaterial" data-toggle="modal" data-target="#modal-sm">Tambah Group Material</button>
    </div>
    <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <label for="" class="">GROUP MATERIAL STOCK</label>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="" class="text-sm">Deskripsi</label>
                    <input type="text" class="form-control" name="" id="" value="" placeholder="Deskripsi Material">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

    <div class="card-body">
        <table id="groupmaterial-stock" class="table table-sm text-sm table-bordered-row display nowrap" style="width: 100%;">
            <thead class="table-bordered">
                <tr>
                    <th style="display: none;"></th>
                    <th>#ID</th>
                    <th>Deskripsi Group</th>
                    <th class="text-center" style="width: 5%;">Periode Opname</th>
                    <th class="text-center" style="width: 5%;">Durasi Opname</th>
                    <th class="text-center" style="min-width: 175px;">Bulan Pelaksanaan</th>
                    <th class="text-center">Jumlah Jenis</th>
                    <th class="text-center">Total Qty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="display: none;"></td>
                    <td>1</td>
                    <td>
                        <input type="text" class="form-control form-control-sm" name="" id="" value="PIPA">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right" name="" id="" value="1">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right" name="" id="" value="1">
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="januari" value="januari" checked>
                                        <label for="januari" class="custom-control-label">Jan</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="februari" value="februari">
                                        <label for="februari" class="custom-control-label">Feb</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="maret" value="maret">
                                        <label for="maret" class="custom-control-label">Mar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="april" value="april">
                                        <label for="april" class="custom-control-label">Apr</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="mei" value="mei">
                                        <label for="mei" class="custom-control-label">Mei</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="juni" value="juni">
                                        <label for="juni" class="custom-control-label">Jun</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="juli" value="juli">
                                        <label for="juli" class="custom-control-label">Jul</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="agustus" value="agustus">
                                        <label for="agustus" class="custom-control-label">Agt</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="september" value="september">
                                        <label for="september" class="custom-control-label">Sep</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="oktober" value="oktober">
                                        <label for="oktober" class="custom-control-label">Okt</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="november" value="november">
                                        <label for="november" class="custom-control-label">Nov</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="desember" value="desember">
                                        <label for="desember" class="custom-control-label">Des</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">2,964</td>
                    <td class="text-right">-63</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<script>
    $(function() {
        // Halaman Group Material Stock
        $(document).ready(function() {
            function format(d) {
                return '<div class="">' +
                    '<table id="groupmaterial-stock-child" class="table display w-100" cellpadding="5" cellspacing="0" style="padding-left:50px;">' +
                        '<thead>' +
                            '<tr>' +
                                '<th>Deskripsi</th>' +
                                '<th class="text-center">Satuan</th>' +
                                '<th class="text-center">Stock</th>' +
                                '<th class="text-center">Last Opname</th>' +
                            '</tr>' +
                        '</thead>' +
                        '<tbody>' +
                            '<tr>' +
                                '<td> PIPA BS LIGHT Ø 150 MM </td>' +
                                '<td class="text-center"> BATANG </td>' +
                                '<td class="text-right"> 299 </td>' +
                                '<td class="text-center"> 24/01/2004 </td>' +
                            '</tr>' +
                        '</tbody>' +
                    '</table>' +
                    '</div>';
            }

            var table = $('#groupmaterial-stock').DataTable({
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
                "responsive": true,
                "columns": [
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    { "data": "id" },
                    { "data": "deskripsi" },
                    { "data": "periodeopname" },
                    { "data": "durasiopname" },
                    { "data": "bulanpelaksanaan" },
                    { "data": "jumlahjenis" },
                    { "data": "totalqty" }
                ],
                "order": [[1, 'asc']],
            });

            // Add event listener for opening and closing details
            $('#groupmaterial-stock tbody').on('click', 'tr', 'td.details-control', function() {
                var tr = $(this).closest('tr');
                var row = table.row(tr);

                if (row.child.isShown()) {
                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });
        
        });
    });
</script>

<?= $this->endsection()?>