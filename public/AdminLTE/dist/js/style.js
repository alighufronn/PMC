    $(function () {
        $("#example1").DataTable({
          "responsive": true, 
          "lengthChange": false, 
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        // Halaman Terpasang Edit
        $('#example2').DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": true,
          "ordering": false,
          "info": false,
          "autoWidth": true,
          "responsive": true,
          "scrollY": '400px',
          "fixedHeader": true,
          "scrollX": true,
          "fixedColumns": {
              leftColumns: 2,
          },
        });

        // Halaman PO dan DO Detail
        $('#example3').DataTable({
          "paging": false,
          "lengthChange": true,
          "searching": true,
          "ordering": false,
          "info": false,
          "autoWidth": true,
          "responsive": true,
          "scrollY": '400px',
          "fixedHeader": true,
          "scrollX": true,
        });

        // Halaman BPB Stock
        $('#data_stock').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": false,
          "info": false,
          "scrollX": true,
          "autoWidth": true,
          "responsive": true,
          "scrollY": "500px",
          "dom": '<"top"l><"top"f>rt<"bottom"p><"clear">',
        });
        
        $(document).ready(function() {
            var table = $('#bpb_stock').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": false,
                "scrollX": true,
                "autoWidth": true,
                "responsive": true,
                "scrollY": "500px",
                "dom": '<"top"l><"top"f>rt<"bottom"p><"clear">'
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
                "searching": true,
                "ordering": false,
                "info": false,
                "scrollX": true,
                "autoWidth": true,
                "responsive": true,
                "scrollY": "250px",
                "dom": '<"top"l><"top"f>rt<"bottom"p><"clear">'
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
                "paging": true,
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
                    { "data": "group" },
                    { "data": "dipakai" },
                    { "data": "deskripsimaterial" },
                    { "data": "satuan" },
                    { "data": "jmlgudang" },
                    { "data": "totalstock" },
                    { "data": "aksi" }
                    
                ],
                "order": [[1, 'asc']],
                // "buttons": [
                //     {
                //         text: '<i class="fas fa-plus"></i>',
                //         className: 'bg-primary',
                //         action: function ( e, dt, node, config ) {
                //             alert('Button Add clicked');
                //         }
                //     },
                //     {
                //         text: '<div class="custom-control custom-checkbox">' +
                //         '<input class="custom-control-input" type="checkbox" id="tampilkan" value="option1">' +
                //         '<label for="tampilkan" class="custom-control-label">Tampilkan tidak dipakai</label>' +
                //         '</div>',
                //         className: 'bg-light',
                        
                //     },
                //     'print'
                // ],
            });

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

        // Halaman Group Material Stock
        $(document).ready(function() {
            function format(d) {
                return '<div class="bg-light">' +
                    '<table class="table table-bordered-row w-100" cellpadding="5" cellspacing="0" style="padding-left:50px;">' +
                        '<tr>' +
                            '<th>Deskripsi</th>' +
                            '<th class="text-center">Satuan</th>' +
                            '<th class="text-center">Stock</th>' +
                            '<th class="text-center">Last Opname</th>' +
                        '</tr>' +
                        '<tr>' +
                            '<td> PIPA BS LIGHT Ø 150 MM </td>' +
                            '<td class="text-center"> BATANG </td>' +
                            '<td class="text-right"> 299 </td>' +
                            '<td class="text-center"> 24/01/2004 </td>' +
                        '</tr>' +
                    '</table>' +
                    '</div>';
                }

            var table = $('#groupmaterial-stock').DataTable({
                "lengthMenu": [20, 50, 100, 500],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
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

        
        // $(document).ready(function() {
        //     $('#groupmaterial-stock').DataTable({
        //       "lengthMenu": [20, 50, 100, 500],
        //       "paging": true,
        //       "lengthChange": true,
        //       "searching": true,
        //       "ordering": false,
        //       "info": true,
        //       "scrollX": true,
        //       "autoWidth": false,
        //       "responsive": true,
        //     });

        //     $('[data-widget="expandable-table"]').on('click', function() {
        //         var $this = $(this);
        //         var $next = $this.next('.expandable-body');
                
        //         if ($this.attr('aria-expanded') === 'true') {
        //             $this.attr('aria-expanded', 'false');
        //             $next.hide();
        //         } else {
        //             $this.attr('aria-expanded', 'true');
        //             $next.show();
        //         }
        //   });
        // });

        

    });
