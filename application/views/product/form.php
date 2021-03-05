<div class="card mb-3 shadow">
    <div class="card-header">
        <button class="btn btn-primary float-right" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
    </div>
    <div class="card-body">
        <form action="<?=base_url($action);?>" method="post" data-redirect="product" id="formSubmit">
        <h4>Data Kendaraan</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nama Kendaraan <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="name" class="form-control" id="name" placeholder="Nama Kendaraan" value="<?=isset($product->name) ? $product->name : '';?>">
                        <i class="text-danger small d-none" id="nameErr"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Tipe Kendaraan <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="type" class="form-control" id="type" placeholder="Tipe Kendaraan" value="<?=isset($product->type) ? $product->type : '';?>">
                        <i class="text-danger small d-none" id="typeErr"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nomor Polisi <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="police_number" class="form-control" id="police_number" placeholder="Nomor Polisi" value="<?=isset($product->police_number) ? $product->police_number : '';?>">
                        <i class="text-danger small d-none" id="police_numberErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Warna Kendaraan <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="color" class="form-control" id="color" placeholder="Warna Kendaraan" value="<?=isset($product->color) ? $product->color : '';?>">
                        <i class="text-danger small d-none" id="colorErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Merk Kendaraan <span class="text-danger">*</span></label>
                        <select name="merk" id="merk" class="select2 form-control">
                            <?php foreach($merk as $item){?>
                                <?php if(isset($product->merk_id)){?>
                                    <?php if($product->merk_id == $item->id){?>
                                        <option value="<?=$item->id?>" selected><?=$item->name?></option>
                                    <?php }?>
                                <?php }?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?php }?>
                        </select>
                        <i class="text-danger small d-none" id="merkErr"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Tahun <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="year" class="form-control" id="year" placeholder="Tahun" value="<?=isset($product->year) ? $product->year : '';?>">
                        <i class="text-danger small d-none" id="yearErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">CC Kendaraan <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="cc" class="form-control" id="cc" placeholder="CC Kendaraan" value="<?=isset($product->cc) ? $product->cc : '';?>">
                        <i class="text-danger small d-none" id="ccErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Bahan Bakar <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="fuel" class="form-control" id="fuel" placeholder="Bahan Bakar" value="<?=isset($product->fuel) ? $product->fuel : '';?>">
                        <i class="text-danger small d-none" id="fuelErr"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Transmisi <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="transmission" class="form-control" id="transmission" placeholder="Transmisi" value="<?=isset($product->transmission) ? $product->transmission : '';?>">
                        <i class="text-danger small d-none" id="transmissionErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Jarak Tempuh <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="mileage" class="form-control" id="mileage" placeholder="Jarak Tempuh" value="<?=isset($product->mileage) ? $product->mileage : '';?>">
                        <i class="text-danger small d-none" id="mileageErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Kondisi <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="condition" class="form-control" id="condition" placeholder="Kondisi" value="<?=isset($product->condition) ? $product->condition : '';?>">
                        <i class="text-danger small d-none" id="conditionErr"></i>
                    </div>
                </div>
            </div>
            <h4 class="mt-2">Lain - Lain</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Harga <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="price" class="form-control" id="price" placeholder="Harga" value="<?=isset($product->price) ? $product->price : '';?>">
                        <i class="text-danger small d-none" id="priceErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">DP Minimal <span class="text-danger">*</span></label>
                        <input autocomplete="off" type="text" name="minimal_dp" class="form-control" id="minimal_dp" placeholder="DP Minimal" value="<?=isset($product->minimal_dp) ? $product->minimal_dp : '';?>">
                        <i class="text-danger small d-none" id="minimal_dpErr"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Sold ? <span class="text-danger">*</span></label>
                        <select name="sold" id="sold" class="select2 form-control">
                            <?php if(isset($product->sold)) {?>
                                <?php if($product->sold == 'Y'){?>
                                    <option value="N">N</option>
                                    <option value="Y" selected>Y</option>
                                <?php } else {?>
                                    <option value="N" selected>N</option>
                                    <option value="Y">Y</option>
                                <?php } ?>
                            <?php } else {?>
                                <option value="N">N</option>
                                <option value="Y">Y</option>
                            <?php } ?>
                        </select>
                        <i class="text-danger small d-none" id="conditionErr"></i>
                    </div>
                </div>       
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">Deskripsi</label>
                    <textarea name="description" class="summernote" id="description" cols="30" rows="10"><?=isset($product->description) ? $product->description : '';?></textarea>
                </div>
            </div>
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