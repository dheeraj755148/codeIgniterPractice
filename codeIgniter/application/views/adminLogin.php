<html>

<?php include('inc/header.php') ?>

<div class="container">
    <?php echo form_open('welcome/adminSignin', ['class' => 'form-horizontal']) ?>

    <?php if ($message = $this->session->flashData()) : ?>

        <div class="row" style="margin-top: 3%;">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-danger">
                    <?php echo $message['message'] ?>
                </div>
            </div>
        </div>

    <?php endif ?>


    <h1>ADMIN LOGIN</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('email', '<div class="text-danger">',  '</div>')  ?>
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
        <div class="col-md-6">
            <?php echo form_error('password', '<div class="text-danger">',  '</div>')  ?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">LOGIN</button>
    <?php echo anchor("welcome/Dashboard", "Back", ['class' => 'btn btn-primary']) ?>
    <?php echo form_close() ?>
</div>






<?php include('inc/footer.php') ?>


</html>