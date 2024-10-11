<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Modules & Roles
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
MODULES & ROLES 
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Module
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">ROLES</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="card-body">
                <table id="roles" class="table table-sm text-sm display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>ROLE CODE</th>
                            <th>ROLE NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACCOUNTING</td>
                            <td>Accounting</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">MODULES</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                </div>
            </div>
            <div class="card-body">
                <table id="modules" class="table table-sm text-sm display" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>GROUP CODE</th>
                            <th>GROUP NAME</th>
                            <th>MODULE CODE</th>
                            <th>MODULE NAME</th>
                            <th>TYPE</th>
                            <th>PAGE ADDRESS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ACCOUNTING</td>
                            <td>Accounting</td>
                            <td>APV_DIR</td>
                            <td>Approval Direksi</td>
                            <td>menu</td>
                            <td>apvdir</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">ROLE RIGHT</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
        <table id="role-right" class="table table-sm text-sm display" style="width: 100%;">
            <thead>
                <tr>
                    <th>ROLE CODE</th>
                    <th>MODULE GROUP</th>
                    <th>MODULE CODE</th>
                    <th>MODULE NAME</th>
                    <th class="text-center">VIEW</th>
                    <th class="text-center">CREATE</th>
                    <th class="text-center">EDIT</th>
                    <th class="text-center">DELETE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ACCOUNTING</td>
                    <td>LOGISTIK</td>
                    <td>ADD_PO</td>
                    <td>Add PO</td>
                    <td class="text-center">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="view">
                            <label for="view"></label>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="create">
                            <label for="create"></label>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="edit">
                            <label for="edit"></label>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="icheck-primary d-inline">
                            <input type="checkbox" id="delete">
                            <label for="delete"></label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<script>
    $(function() {
        $.fn.DataTable.ext.pager.numbers_length = 4;

        var table = $('#roles').DataTable({
            "dom": "frt",
            "ordering": true,
            "responsive": true,
            "autoWidth": true,
            "scrollX": true,
            "scrollY": "400px",
            "language": {
                "search": "",
                "searchPlaceholder": "Search",
                "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                }
            }
        });

        var table = $('#modules').DataTable({
            "paging": true,
            "searching": true,
            "info": true,
            "lengthChange": true,
            "ordering": true,
            "responsive": true,
            "autoWidth": true,
            "scrollX": true,
            "scrollY": "400px",
            "lengthMenu": [[25, 50, 100,, 500 -1], [25, 50, 100, 500, "All"]],
            "pagingType": "full_numbers",
            "language": {
                "lengthMenu": "Show _MENU_",
                "search": "",
                "searchPlaceholder": "Search",
                "paginate": {
                    "first":    "",
                    "previous": "‹",
                    "next":     "›",
                    "last":     ""
                },
            }
        });

        var table = $('#role-right').DataTable({
            "paging": true,
            "searching": true,
            "info": true,
            "lengthChange": true,
            "ordering": true,
            "responsive": true,
            "autoWidth": true,
            "scrollX": true,
            "scrollY": "400px",
            "lengthMenu": [[25, 50, 100,, 500 -1], [25, 50, 100, 500, "All"]],
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
            }
        });

        table.columns.adjust().draw();
    });
</script>

<?= $this->endsection()?>