
<div class="row">
    <div class="col-md-7">
        <div class="card mb-3 shadow">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <?php foreach($collection as $item){?>
                        <div class="col-md-6">
                            <img src="<?=base_url()?>assets/backend/img/product/<?=$item->image?>" class="mt-3" alt="" width="100%">
                            <a href="#" onclick="deleteProduct('product/picture_delete/','<?=$item->id?>')" class="btn btn-danger btn-block text-center">Delete</a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card mb-3 shadow">
            <div class="card-header">
                <button class="btn btn-primary float-right" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
            </div>
            <div class="card-body">
                <form action="<?=base_url($action);?>" method="post" data-redirect="<?=$redirect?>" id="formSubmit">
                    <div class="row mb-4 mt-2">
                        <div class="col-12">
                            <label for="">Gambar <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <div class="card border-0">
                                    <?php if(isset($product->thumbnail)){?> 
                                        <img src="<?= base_url() ?>assets/backend/img/product/<?=$product->thumbnail?>" class="figure-img img-fluid rounded imgPreview" width="200" style="object-fit: cover;">
                                    <?php } ?>
                                    <img src="" class="figure-img img-fluid rounded imgPreview" width="200" style="object-fit: cover;">
                                </div>
                                <input type="file" class="form-control-file mt-3 imgChange" name="metaValue" id="metaValue">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-3" type="submit"><i class="fe fe-send"></i> Submit    </button>
                </form>
            </div>
        </div>
    </div>
</div>