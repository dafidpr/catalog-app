<div class="card mb-3 shadow">
    <div class="card-header">
        <button class="btn btn-primary float-right" onclick="window.history.back()"><i class="fe fe-arrow-left"></i> Back</button>
    </div>
    <div class="card-body">
        <form action="<?=base_url($action);?>" method="post" data-redirect="user" id="formSubmit">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input autocomplete="off" type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?=isset($user->name) ? $user->name : '';?>">
                        <i class="text-danger small d-none" id="nameErr"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input autocomplete="off" type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?=isset($user->email) ? $user->email : '';?>">
                        <i class="text-danger small d-none" id="emailErr"></i>
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <input autocomplete="off" type="text" name="role" class="form-control" id="role" placeholder="Role" value="<?=isset($user->role) ? $user->role : '';?>">
                        <i class="text-danger small d-none" id="roleErr"></i>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input autocomplete="off" type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?=isset($user->username) ? $user->username : '';?>">
                        <i class="text-danger small d-none" id="userErr"></i>
                    </div>
                    <div class="form-group <?=isset($user->password) ? 'd-none' : '';?>">
                        <label for="">Password</label>
                        <input autocomplete="off" type="password" name="password" class="form-control" id="Password" placeholder="Password" value="<?=isset($user->password) ? $user->password : '';?>">
                        <i class="text-danger small d-none" id="passErr"></i>
                    </div>
                    <div class="form-group <?=isset($user->password) ? 'd-none' : '';?>">
                        <label for="">Confirm Password</label>
                        <input autocomplete="off" type="password" name="confirmPass" class="form-control" id="confirmPass" placeholder="Confirm Password">
                        <i class="text-danger small d-none" id="confirmPassErr"></i>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-3" type="submit"><i class="fe fe-send"></i> Submit    </button>
        </form>
    </div>
</div>