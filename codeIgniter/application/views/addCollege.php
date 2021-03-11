<html>

<?php include('inc/header.php') ?>

<div class="container">
    <?php echo form_open('admin/createCollege', ['class' => 'form-horizontal']) ?>

    <?php if ($message = $this->session->flashData()) : ?>

        <div class="row" style="margin-top: 3%;">
            <div class="col-md-6">
                <div class="alert alert-dismissible alert-success">
                    <?php echo $message['message'] ?>
                </div>
            </div>
        </div>

    <?php endif ?>


    <h1>Add college</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">College Name</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'collegeName', 'class' => 'form-control', 'placeholder' => 'Enter college name']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('collegeName', '<div class="text-danger">',  '</div>')  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3 control-label">Branch</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' => 'branch', 'class' => 'form-control', 'placeholder' => 'Enter branch']) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('branch', '<div class="text-danger">',  '</div>')  ?>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">ADD</button>
    <?php echo anchor("welcome/Dashboard", "Back", ['class' => 'btn btn-primary']) ?>
    <?php echo form_close() ?>
</div>






<?php include('inc/footer.php') ?>


</html>