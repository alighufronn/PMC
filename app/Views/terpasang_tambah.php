<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Tambah Laporan
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Laporan Pekerjaan
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Tambah Laporan
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

<style>
    .deskripsimaterial-nowrap {
        text-wrap: nowrap;
    }

    @media (max-width: 450px) {
        .deskripsimaterial-nowrap {
            text-wrap: wrap;
        }
    }

    .placeholder-white::-webkit-input-placeholder {
        color: lightgray;
    }
    .placeholder-white::-moz-placeholder {
        color:  lightgray;
    }
    .placeholder-white::-ms-placeholder {
        color:  lightgray;
    }
</style>

<!-- Form -->
<div class="card">
    <form action="#" method="">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">GEDUNG</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Gedung --</option>
                            <option value="">Gedung 1</option>
                            <option value="">Gedung 2</option>
                            <option value="">Gedung 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">LANTAI</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Lantai --</option>
                            <option value="">Lantai 1</option>
                            <option value="">Lantai 2</option>
                            <option value="">Lantai 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">PEKERJAAN</label>
                        <select name="" id="" class="form-control select">
                            <option value="">-- Pekerjaan --</option>
                            <option value="">Pekerjaan 1</option>
                            <option value="">Pekerjaan 2</option>
                            <option value="">Pekerjaan 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">UNIT/ZONA</label>
                        <div class="input-group">
                            <select name="" id="" class="form-control select">
                                <option value="">-- Unit/Zona --</option>
                                <option value="">Zona 1</option>
                                <option value="">Zona 2</option>
                                <option value="">Zona 3</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">#RAP</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">#GAMBAR</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Pelaksana/Subkon</label>
                        <select name="" id="" class="form-control select2" style="width: 100%;">
                            <option value="">-- Pelaksana/Subkon --</option>
                            <option value="">Subkon 1</option>
                            <option value="">Subkon 2</option>
                            <option value="">Subkon 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Foreman</label>
                        <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Foreman" style="width: 100%;">
                            <option>Foreman 1</option>
                            <option>Foreman 2</option>
                            <option>Foreman 3</option>
                            <option>Foreman 4</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Skills</label>
                        <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%;">
                            <option>Skill 1</option>
                            <option>Skill 2</option>
                            <option>Skill 3</option>
                            <option>Skill 4</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Semi</label>
                        <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Semi Skill" style="width: 100%;">
                            <option>Semi 1</option>
                            <option>Semi 2</option>
                            <option>Semi 3</option>
                            <option>Semi 4</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <label for="" class="text-sm">Helper</label>
                        <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Helper" style="width: 100%;">
                            <option>Helper 1</option>
                            <option>Helper 2</option>
                            <option>Helper 3</option>
                            <option>Helper 4</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Simpan</button>
            <button type="button" class="btn btn-success"><i class="fas fa-plus-circle"></i> Tambah Item</button>
        </div>
    </form>
</div>
<!-- End Form -->

<!-- Table -->
<div class="card">
    <div class="card-body">
        <table id="laporan-tambah" class="table table-striped table-hover text-sm display">
            <thead class="table-bordered">
                <tr style="text-transform: uppercase;">
                    <th rowspan="2" class="bg-secondary text-center" style="width: 5%; vertical-align: middle;">#</th>
                    <th rowspan="2" class="bg-secondary text-center" style="width: 40%; vertical-align: middle;">Deskripsi Material</th>
                    <th rowspan="2" class="bg-secondary text-center" style="width: 8%; vertical-align: middle;">Sat</th>
                    <th rowspan="2" class="text-center" style="width: 8%; vertical-align: middle;">BBK</th>
                    <th class="text-center" style="width: 8%;">25%</th>
                    <th class="text-center" style="width: 8%;">25%</th>
                    <th class="text-center" style="width: 8%;">25%</th>
                    <th class="text-center" style="width: 8%;">15%</th>
                    <th class="text-center" style="width: 8%;">10%</th>
                    <th rowspan="2" class="text-center" style="width: 8%; vertical-align: middle;">Progress</th>
                    <th rowspan="2" class="text-center" style="width: 8%; vertical-align: middle;">Total Progress</th>
                    <th rowspan="2" class="text-center" style="width: 8%; vertical-align: middle;">Prestasi</th>
                </tr>
                <tr style="text-transform: uppercase;">
                    <th class="text-center" style="width: 8%; vertical-align: middle;">Persiapan</th>
                    <th class="text-center" style="width: 8%; vertical-align: middle;">Terpasang</th>
                    <th class="text-center" style="width: 8%; vertical-align: middle;">Install Fix</th>
                    <th class="text-center" style="width: 8%; vertical-align: middle;">Checklist & Test</th>
                    <th class="text-center" style="width: 8%; vertical-align: middle;">BA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center text-bold">1</td>
                    <td class="deskripsimaterial-nowrap">Lorem ipsum dolor sit amet.</td>
                    <td class="text-center">m</td>
                    <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right bg-olive placeholder-white text-bold" style="min-width: 70px;" value="" placeholder="Lalu">
                        <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right bg-olive placeholder-white text-bold" style="min-width: 70px;" value="" placeholder="Lalu">
                        <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right bg-olive placeholder-white text-bold" style="min-width: 70px;" value="" placeholder="Lalu">
                        <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right bg-olive placeholder-white text-bold" style="min-width: 70px;" value="" placeholder="Lalu">
                        <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right bg-olive placeholder-white text-bold" style="min-width: 70px;" value="" placeholder="Lalu">
                        <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm text-right bg-olive placeholder-white text-bold" style="min-width: 70px;" value="" placeholder="Lalu">
                        <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                    </td>
                    <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                    <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End Table -->



<!-- DataTables -->
 <script>
    $(function() {
        var table = $('#laporan-tambah').DataTable({
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
        
        table.columns.adjust().draw();
    })
 </script>


<?= $this->endsection()?>