<html>

<?php include('inc/header.php') ?>

<div class="container">
    <?php echo form_open('welcome/adminSignup', ['class' => 'form-horizontal']) ?>
    <h1>ADMIN REGISTER</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Username</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'Enter username']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Gender</label>
                <div class="col-md-9">
                    <select name="gender" class="col-lg-9">
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Role</label>
                <div class="col-md-9">
                    <select name="role_id" class="col-lg-9">
                        <option value="">Select</option>
                        <?php foreach ($roles as $role) : ?>
                            <option value=<?php echo $role->roleName ?>><?php echo $role->roleName ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter password']) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Password Again</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'confpwd', 'class' => 'form-control', 'placeholder' => 'Enter password again']) ?>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    <?php echo anchor("welcome/Dashboard", "Back", ['class' => 'btn btn-primary']) ?>
    <?php echo form_close() ?>
</div>






<?php include('inc/footer.php') ?>


</html>