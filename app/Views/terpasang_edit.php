<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Edit Laporan
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Laporan Pekerjaan
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Edit Laporan
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
        color: lightgray;
    }
    .placeholder-white::-ms-placeholder {
        color: lightgray;
    }
</style>

    <!-- Form -->
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">Tanggal</label>
                                <input type="date" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">GEDUNG</label>
                                <input type="text" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">LANTAI</label>
                                <input type="text" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">PEKERJAAN</label>
                                <input type="text" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">UNIT/ZONA</label>
                                <input type="text" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">#RAP</label>
                                <input type="text" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">#GAMBAR</label>
                                <input type="text" class="form-control" name="" id="" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">Pelaksana/Subkon</label>
                                <select name="" id="" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Pilih Subkon --</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">Foreman</label>
                                <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Foreman" style="width: 100%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">Skills</label>
                                <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">Semi</label>
                                <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Semi" style="width: 100%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <label for="" class="text-sm">Helper</label>
                                <select name="" id="" class="select2" multiple="multiple" data-placeholder="Pilih Helper" style="width: 100%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="" class="text-sm">Keterangan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="" id="" rows="1">
                                </div>                                
                            </div>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <label for="" class="text-sm">Approval</label>
                            <div class="input-group">
                                <div class="icheck-primary d-inline">
                                    <input type="checkbox" id="approval">
                                    <label for="approval" class="text-sm">Belum diperiksa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            Catatan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-3 col-6">
                            <div class="form-group">
                                <label for="" class="text-sm">Man Power</label>
                                <input type="number" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-6">
                            <div class="form-group">
                                <label for="" class="text-sm">Prestasi</label>
                                <input type="number" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-6">
                            <div class="form-group">
                                <label for="" class="text-sm">Mandays</label>
                                <input type="number" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 col-6">
                            <div class="form-group">
                                <label for="" class="text-sm">Prestasi Zona</label>
                                <input type="number" class="form-control form-control-sm" readonly>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary float-right" disabled>Simpan</button>
            <button type="button" class="btn btn-danger">Hapus</button>
        </div>
    </div>
    <!-- End Form -->


    <!-- Table -->
    <div class="card">
        <div class="card-body">
            <table id="laporan-edit" class="table table-striped table-hover text-sm display">
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
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-primary" style="min-width: 70px;" value=""></td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold bg-lime" style="min-width: 70px;" value=""></td>
                    </tr>
                    <tr>
                        <td class="text-center text-bold">1</td>
                        <td class="deskripsimaterial-nowrap">Pipa PVC AW Ø 150 mm</td>
                        <td class="text-center">m</td>
                        <td><input type="text" class="form-control form-control-sm text-center text-bold" style="min-width: 70px;" value=""></td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
                            <input type="text" class="form-control form-control-sm text-right mt-2 text-bold" style="min-width: 70px; background-color: yellow;" value="" placeholder="Saat ini">
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-right text-bold bg-olive placeholder-white" style="min-width: 70px;" value="" placeholder="Lalu">
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
            var table = $('#laporan-edit').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": true,
                "responsive": true,
                "scrollY": '500px',
                "fixedHeader": true,
                "scrollX": true,
                "fixedColumns": {
                    leftColumns: 2,
                },
            });

            table.columns.adjust().draw();

            // Halaman Terpasang Edit
        });
    </script>
    

<?= $this->endsection()?>