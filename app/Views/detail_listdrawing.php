<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Detail Drawing
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Detail Drawing
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Detail Drawing
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

    <div class="card">
        <div class="card-body">
            <table id="detail-drawing" class="table table-hover table-bordered-row table-sm display text-sm" style="width: 100%;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    <tr>
                        <td></td>
                        <td>11672157</td>
                        <td>Lorem ipsum dolor sit.</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm text-sm" title="Edit"><i class="fa fa-edit"></i></button>
                        </td>
                    </tr>
                </tbody> -->
    </table>
        </div>
    </div>




    <script>
        $(document).ready(function() {
            function format(d) {
                return (
                    '<dl>' +
                    '<dt>Full name:</dt>' +
                    '<dd>' +
                    d.name +
                    '</dd>' +
                    '<dt>Extension number:</dt>' +
                    '<dd>' +
                    d.extn +
                    '</dd>' +
                    '<dt>Extra info:</dt>' +
                    '<dd>And any further details here (images etc)...</dd>' +
                    '</dl>'
                );
            }
            
            let table = new DataTable('#detail-drawing', {
                ajax: '../ajax/data/objects.txt',
                columns: [
                    {
                        className: 'dt-control',
                        orderable: false,
                        data: null,
                        defaultContent: ''
                    },
                    { data: 'gambar' },
                    { data: 'keterangan' },
                    { data: 'aksi' },
                ],
                order: [[1, 'asc']]
            });
            
            table.on('click', 'td.dt-control', function (e) {
                let tr = e.target.closest('tr');
                let row = table.row(tr);
            
                if (row.child.isShown()) {
                    row.child.hide();
                }
                else {
                    row.child(format(row.data())).show();
                }
            });
        });



        // $(document).ready(function() {
        //     function format(d) {
        //         // Buat konten untuk baris detail
        //         return '<div class="bg-light">' +
        //             '<table class="w-100" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        //                 '<tr>' +
        //                     '<th>Gambar</th>' +
        //                     '<th>Keterangan</th>' +
        //                     '<th>Aksi</th>' +
        //                 '</tr>' +
        //                 '<tr>' +
        //                     '<td>Gambar 1</td>' +
        //                     '<td>Keterangan Gambar 1</td>' +
        //                     '<td><button type="button" class="btn btn-xs text-sm btn-success">Move</button><button type="button" class="btn btn-xs text-sm btn-danger">Del</button></td>' +
        //                 '</tr>' +
        //             '</table>' +
        //             '</div>';
        //         }

        //     var table = $('#detail-drawing').DataTable({
        //         "lengthMenu": [20, 50, 100, 500],
        //         "responsive": true,
        //         "paging": true,
        //         "pagingType": "full_numbers",
        //         "language": {
        //           "paginate": {
        //             "first":    "",
        //             "previous": "‹",
        //             "next":     "›",
        //             "last":     ""
        //           }
        //         },
        //         "lengthChange": true,
        //         "searching": true,
        //         "ordering": true,
        //         "info": true,
        //         "scrollX": true,
        //         "autoWidth": true,
        //         "columns": [
        //           {
        //               "className": 'details-control',
        //               "orderable": false,
        //               "data": null,
        //               "defaultContent": ''
        //           },
        //           { "data": "gambar" },
        //           { "data": "keterangan" },
        //           { "data": "aksi" }
                    
        //         ],
        //         "order": [[1, 'asc']],
        //         "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>' + 'rtip',
        //     });
        //     table.buttons().container().appendTo('#printButton-material');


        //     $('#detail-drawing tbody').on('click', 'tr', 'td.details-control', function() {
              
        //         var tr = $(this).closest('tr');
        //         var row = table.row(tr);

        //         if (row.child.isShown()) {
        //             row.child.hide();
        //             tr.removeClass('shown');
        //         } else {
        //             row.child(format(row.data())).show();
        //             tr.addClass('shown');
        //         }
        //     });
        // });
    </script>





<?= $this->endsection()?>