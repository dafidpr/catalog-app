<div class="card mb-3 shadow">
    <div class="card-header">
        <button class="btn btn-primary float-right" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
    </div>
    <div class="card-body">
        <form action="<?=base_url($action);?>" method="post" data-redirect="slider" id="formSubmit">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="">Title <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?=isset($slider->title) ? $slider->title : '';?>">
                        <i class="text-danger small d-none" id="titleErr"></i>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group">
                        <label for="">Subtitle <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Subtitle" value="<?=isset($slider->subtitle) ? $slider->subtitle : '';?>">
                        <i class="text-danger small d-none" id="subtitleErr"></i>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <label for="">Gambar <span class="text-danger">*</span></label>
                    <div class="form-group">
                        <div class="card border-0">
                            <?php if(isset($slider->image)){?> 
                                <img src="<?= base_url() ?>assets/backend/img/slider/<?=$slider->image?>" class="figure-img img-fluid rounded imgPreview" width="200" style="object-fit: cover;">
                            <?php } else { ?>
                                <img src="" class="figure-img img-fluid rounded imgPreview" width="200" style="object-fit: cover;">
                            <?php }  ?>
                        </div>
                        <input type="file" class="form-control-file mt-3 imgChange" name="metaValue" id="metaValue">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit"><i class="fe fe-send"></i> Submit    </button>
        </form>
    </div>
</div>