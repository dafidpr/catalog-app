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
                        <input type="text" name="metaKey" class="form-control" id="metaKey" placeholder="Meta Key" value="<?= isset($item->meta_key) ? $item->meta_key : ''; ?>">
                        <i class="text-danger small d-none" id="metaKeyErr"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Meta Value</label>
                        <?php if ($item->groups == 'general') : ?>
                            <textarea class="form-control" name="metaValue" id="metaValue" placeholder="Meta Value"><?= isset($item->meta_value) ? $item->meta_value : ''; ?></textarea>
                        <?php elseif ($item->groups == 'image') : ?>
                            <div class="card border-0">
                                <img src="<?= base_url(); ?>assets/backend/img/<?= $item->meta_value; ?>" class="figure-img img-fluid rounded imgPreview" width="200" style="object-fit: cover;">
                            </div>
                            <input type="file" class="form-control-file mt-3 imgChange" name="metaValue" id="metaValue">
                        <?php endif; ?>
                        <i class="text-danger small d-none" id="metaValueErr"></i>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit"><i class="fe fe-send"></i> Submit </button>
        </form>
    </div>
</div>