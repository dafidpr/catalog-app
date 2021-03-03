<div class="card mb-3 shadow">
    <div class="card-header">
        <button class="btn btn-primary float-right" type="button" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
    </div>
    <div class="card-body">
        <div class="col-md-6 col-12 mx-auto">
            <form action="<?=base_url($action);?>" method="post" data-redirect="user" id="formSubmit">
                <div class="form-group">
                    <label for="">Old Password</label>
                    <input type="text" name="oldPassword" id="old_password" class="form-control" placeholder="Old Password">
                    <i class="text-danger small d-none" id="oldPassErr"></i>
                </div>
                <div class="form-group">
                    <label for="">New Password</label>
                    <input type="password" name="newPassword" id="old_password" class="form-control" placeholder="Old Password">
                    <i class="text-danger small d-none" id="newPassErr"></i>
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="old_password" class="form-control" placeholder="Old Password">
                    <i class="text-danger small d-none" id="confirmPasswordErr"></i>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><i class="fe fe-send"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>