<?= $this->extend('layout/page_layout') ?>

<?= $this->section('title') ?>
Approval Material
<?= $this->endsection()?>

<?= $this->section('page-title') ?>
Approval Material
<?= $this->endsection()?>

<?= $this->section('page-breadcrumb') ?>
Approval Material
<?= $this->endsection()?>

<!-- Main Content -->
<?= $this->section('content') ?>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group" style="width: 100%;">
                            <label for="">No.</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" style="width: 100%;">
                            <label>Description</label>
                            <textarea class="form-control" rows="1" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Specification Brand</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Proposal Brand</label>
                            <select name="" id="" class="form-control select2" style="width: 100%;">
                                <option>Brand 1</option>
                                <option>Brand 2</option>
                                <option>Brand 3</option>
                                <option>Brand 4</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Submission Document -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Submission Document</label>
                              <!-- Plan -->
                              <div class="input-group date" id="" data-target-input="nearest">
                                <div class="input-group-append" data-toggle="datetimepicker">
                                    <div class="input-group-text bg-info">Plan</div>
                                </div>
                                <input type="date" class="form-control"/>
                              </div>
                               <!-- End Plan -->

                               <!-- Actual -->
                               <div class="input-group date mt-2" id="" data-target-input="nearest">
                                <div class="input-group-append" data-toggle="datetimepicker">
                                    <div class="input-group-text">Actual</div>
                                </div>
                                <input type="date" class="form-control"/>
                              </div>
                               <!-- End Actual -->
                        </div>
                    </div>
                    <!-- End Submission Document -->

                    <!-- Approval Document -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Approval Document</label>
                              <!-- Plan -->
                              <div class="input-group date" id="" data-target-input="nearest">
                                <div class="input-group-append" data-toggle="datetimepicker">
                                    <div class="input-group-text bg-info">Plan</div>
                                </div>
                                <input type="date" class="form-control"/>
                              </div>
                               <!-- End Plan -->

                               <!-- Actual -->
                               <div class="input-group date mt-2" id="" data-target-input="nearest">
                                <div class="input-group-append" data-toggle="datetimepicker">
                                    <div class="input-group-text">Actual</div>
                                </div>
                                <input type="date" class="form-control"/>
                              </div>
                               <!-- End Actual -->
                        </div>
                    </div>
                    <!-- End Approval Document -->

                    <!-- PO/LOA -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>PO/DO</label>
                              <!-- Plan -->
                              <div class="input-group date" id="" data-target-input="nearest">
                                <div class="input-group-append" data-toggle="datetimepicker">
                                    <div class="input-group-text bg-info">Plan</div>
                                </div>
                                <input type="date" class="form-control"/>
                              </div>
                              <!-- End Plan -->

                               <!-- No -->
                                <!-- <input type="text" class="form-control mt-2" placeholder="No."> -->

                                <select name="" id="" class="form-control select mt-2">
                                    <option value="" selected="selected" disabled>No.</option>
                                    <option value="">No. 1</option>
                                    <option value="">No. 2</option>
                                    <option value="">No. 3</option>
                                </select>
                               <!-- End No -->

                               <!-- Tanggal -->
                                <input type="date" class="form-control mt-2">
                               <!-- End Tanggal -->
    
                               <!-- Actual -->
                               <!-- <div class="input-group date mt-2" id="" data-target-input="nearest">
                                <div class="input-group-append" data-toggle="datetimepicker">
                                    <div class="input-group-text">Actual</div>
                                </div>
                                <input type="date" class="form-control"/>
                              </div> -->
                               <!-- End Actual -->
                        </div>
                    </div>
                    <!-- End PO/LOA -->

                </div>
                
            </div>
            <div class="card-footer">
              <button class="btn btn-primary float-right">Submit</button>
            </div>
        </div>

        <!-- Table -->
        <!-- <div class="card">
            <div class="card-body">
                <div style="overflow-x: scroll;">
                    <table id="" class="table table-bordered table-hover display text-center text-sm" style="width: 150%;">
                        <thead class="">
                            <tr>
                                <th rowspan="2" style="width: 15%;">(REFF) No. MATAPP JKT 11 PROJECT</th>
                                <th rowspan="2" style="width: 15%;">Description</th>
                                <th rowspan="2" style="width: 10%;">Spesification Brand</th>
                                <th rowspan="2" style="width: 10%;">Proposal Brand</th>
                                <th colspan="2">SUBMISSION DOCUMENT</th>
                                <th colspan="2">APPROVAL DOCUMENT</th>
                                <th colspan="3">PO/DO</th>
                                <th rowspan="2">Remarks</th>
                                <th rowspan="2">Status</th>
                                <th rowspan="2">Aksi</th>
                            </tr>
                            <tr>
                                <td>Plan</td>
                                <td>Actual</td>
                                <td>Plan</td>
                                <td>Actual</td>
                                <td>Plan</td>
                                <td>No.</td>
                                <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left" >1</td>
                                <td class="text-left">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>A</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td><button class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                            </tr>
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
                                <td></td>
                                <td></td>
                                <td><span class="badge badge-warning">Approved w/ note</span></td>
                                <td><button class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                            </tr>
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
                                <td></td>
                                <td></td>
                                <td><span class="badge badge-danger">Rejected</span></td>
                                <td><button class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
        <!-- End Table -->

<?= $this->endsection()?>