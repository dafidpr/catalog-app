<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Tambah Angsuran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body"> 
            <form action="<?=base_url($action);?>" method="post" data-redirect="<?=$redirect?>" id="formSubmit">
                <div class="form-group">
                    <label for="">Pilih Angsuran <span class="text-danger">*</span></label>
                    <select name="angsuran" class="select2 form-control" id="angsuran">
                        <?php foreach ($angsuran as $val) {?>
                            <option value="<?=$val->id?>"><?=$val->name .' - x '.$val->periode.' bln'?></option>
                        <?php }?>
                    </select>
                    <i class="text-danger small d-none" id="angsuranErr"></i>
                </div>
                <div class="form-group">
                    <label for="">Nominal <span class="text-danger">*</span></label>
                    <input type="text" name="nominal" id ="nominal" autocomplete="off" class="form-control">
                    <i class="text-danger small d-none" id="nominalErr"></i>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary mb-2" type="submit"><i class="fe fe-send"></i> Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>