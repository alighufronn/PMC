<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Drawing
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Drawing
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Drawing
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    #kategori option {
        max-height: 100px;
        overflow-y: auto;
    }

    @media (max-width: 575px) {
        .btn-tambahdata {
            width: 100%;
        }
        .btn-filterkategori {
            width: 80%;
        }
        .btn-tambahkategori {
            width: 18%;
        }
    }
</style>

        <!-- Table -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6 mt-2">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-7 mb-2">
                                    <select name="kategori" id="kategoriDropdown" class="form-control select2" style="width: 100%;">
                                        <option value="">-- Semua Kategori --</option>
                                        
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-warning mb-4 btn-filterkategori">Filter</button>
                                    <button type="button" class="btn btn-success mb-4 btn-tambahkategori" data-toggle="modal" data-target="#modal-sm"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <button type="button" class="btn btn-primary float-right btn-tambahdata" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
            </div>


            <!-- Add Kategori Modal -->
            <form action="" method="post">
                <div class="modal fade" id="modal-sm">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <strong>Tambah Kategori</strong>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" required>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn bg-gray" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- End Kategori Modal -->

            <!-- Add List Drawing Modal -->
            <form action="/save" method="POST" id="myForm" enctype="">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <span>
                            <strong style="font-size: large;">Buat List Drawing</strong>
                        </span>
                        <button type="button" id="xButton" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="drawing_reference" class="text-sm">Drawing Reference</label>
                                            <input type="text" name="drawing_reference" id="drawing_reference" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="sub_drawing" class="text-sm">Sub Drawing</label>
                                            <input type="text" class="form-control" name="sub_drawing" id="sub_drawing" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="description" class="text-sm">Description</label>
                                            <textarea name="description" id="description" class="form-control" rows="1" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="kategori" class="text-sm">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Kategori</option>

                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="form-group">
                                            <label for="pic" class="text-sm">PIC</label>
                                            <select name="pic" id="pic" class="form-control select2" required>
                                                <option value="">Select PIC</option>
                                                
                                            </select>
                                            <input type="hidden" name="pic2" id="pic2">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-group">
                                            <label for="skala" class="text-sm">Skala</label>
                                            <input type="text" name="skala" id="skala" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6">
                                        <div class="form-group">
                                            <label for="type" class="text-sm">Type</label>
                                            <select name="type" id="type" class="form-control select2" required>
                                                <option value="">Select Type</option>
                                                
                                            </select>
                                            <input type="hidden" name="type2" id="type2">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="submission" class="text-sm">Submission</label>
                                            <div class="input-group date" id="" data-target-input="nearest">
                                                <div class="input-group-append" data-toggle="datetimepicker">
                                                    <div class="input-group-text text-sm bg-info">Plan</div>
                                                </div>
                                                <input type="date" class="form-control" name="submission_plan" id="submission_plan" required/>
                                            </div>
                                    
                                            <div class="input-group date mt-2" id="" data-target-input="nearest">
                                                <div class="input-group-append" data-toggle="datetimepicker">
                                                    <div class="input-group-text text-sm">Actual</div>
                                                </div>
                                                <input type="date" class="form-control" name="submission_actual" id="submission_actual" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 sol-sm-6">
                                        <div class="form-group">
                                            <label for="" class="text-sm">Gambar</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="drawing_file[]" multiple id="drawing_file" required>
                                                    <label class="custom-file-label" for="drawing_file">Pilih Gambar</label>
                                                </div>
                                            <!-- <input type="text" name="keterangan_file" id="keterangan_file" class="form-control mt-2" placeholder="Keterangan Gambar" required> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" id="closeButton" class="btn bg-gray" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary start" style="font-weight: 400;">Submit</button>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            <!-- End List Drawing Modal -->

            <div class="card-body">
                <div    >
                <form action="" method="POST" enctype="">

                        <table id="myTable" class="table table-bordered table-hover text-center text-sm display">
                            <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">DRAWING REFERENCE (IFC)</th>
                                    <th rowspan="2">SUB DRAWING</th>
                                    <th rowspan="2">Kategori</th>
                                    <th rowspan="2">Description</th>
                                    <th rowspan="2">PIC</th>
                                    <th rowspan="2">Skala</th>
                                    <th rowspan="2">Type</th>
                                    <th colspan="2">Submission</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <td>Plan</td>
                                    <td>Actual</td>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
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
                                        <?php
                                            switch ('approved') {
                                                case 'approved':
                                                    $badgeClass = 'badge-success';
                                                    $statusText = 'Approved';
                                                    break;
                                                case 'approved-note':
                                                    $badgeClass = 'badge-warning';
                                                    $statusText = 'Approved w/ note';
                                                    break;
                                                case 'rejected':
                                                    $badgeClass = 'badge-danger';
                                                    $statusText = 'Rejected';
                                                    break;
                                                case 'pending':
                                                    $badgeClass = 'badge-info';
                                                    $statusText = 'Pending';
                                                    break;
                                                default:
                                                    $badgeClass = 'badge-secondary';
                                                    $statusText = 'Unknown';
                                                    break;
                                            }
                                        ?>
                                        <td><span class="badge <?= $badgeClass ?>"><?= $statusText ?></span></td>
                                        <td>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>

                </form>
                
                </div>
            </div>
        </div>
        <!-- End Table -->





<script>
    var baseUrl = "<?= base_url(); ?>";
</script>

<!-- Multiple File Input -->
<script>
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = '';
        for (var i = 0; i < this.files.length; i++) {
            fileName += this.files[i].name + ', ';
        }
        fileName = fileName.slice(0, -2); // Remove the last comma and space
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
        
        // Display file names in a separate div
        var fileList = document.getElementById('fileList');
        fileList.innerHTML = '<strong>Selected files:</strong> ' + fileName;
    });
</script>

<!-- DataTables -->
<script>
    $(document).ready(function() {
        var table = $('#myTable').DataTable({
            "scrollX": true,
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "fixedHeader": true,
            "lengthMenu": [[20, 50, 100, -1],[20, 50, 100, "All"]],
            "language": {
                "lengthMenu": "Show _MENU_",
                "search": "",
                "searchPlaceholder": "Search", 
                "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                }
            },
        });

        table.on('length.dt', function() {
            table.columns.adjust();
        });

        $('#myTable tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            var id = $(this).data('id');
            window.open('https://www.example.com', '_blank');
        });

    });



    $(window).on('resize', function() {
    $('#myTable').DataTable().columns.adjust();
    });

    $('#myTable').on('draw.dt', function() {
    $('#myTable').DataTable().columns.adjust();
    });

    
</script>

<?= $this->endsection()?>

