<div class="card mb-3 shadow">
    <div class="card-header">
        <button class="btn btn-primary float-right" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
    </div>
    <div class="card-body">
        <form action="<?=base_url($action);?>" method="post" data-redirect="angsuran" id="formSubmit">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="">Nama Angsuran <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="name" class="form-control" id="name" placeholder="Nama Angsuran" value="<?=isset($angsuran->name) ? $angsuran->name : '';?>">
                        <i class="text-danger small d-none" id="nameErr"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="">Periode Angsuran (Bulan) <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="periode" class="form-control" id="periode" placeholder="Periode Angsuran" value="<?=isset($angsuran->periode) ? $angsuran->periode : '';?>">
                        <i class="text-danger small d-none" id="periodeErr"></i>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit"><i class="fe fe-send"></i> Submit    </button>
        </form>
    </div>
</div>