<div class="card mb-3 shadow">
    <div class="card-header">
        <button class="btn btn-primary float-right" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
    </div>
    <div class="card-body">
        <form action="<?= base_url($action); ?>" method="post" data-redirect="settings" id="formSubmit" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="">Meta Key</label>
                        <input type="text" name="metaKey" class="form-control" id="metaKey" placeholder="Meta Key">
                        <i class="text-danger small d-none" id="metaKeyErr"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Meta Value</label>
                        <select class="form-control select2" name="metaValueType" id="metaValueType">
                            <option selected disabled>Select Meta Value Type</option>
                            <option value="general">General</option>
                            <option value="image">Image</option>
                        </select>
                    </div>
                    <div class="form-group" id="form-group">
                        <i class="text-danger small d-none" id="metaValueErr"></i>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit"><i class="fe fe-send"></i> Submit </button>
        </form>
    </div>
</div>