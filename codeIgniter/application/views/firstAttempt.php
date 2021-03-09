<html>
<?php include('inc/header.php') ?>

<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <title>
        Dashboard
    </title>
</head>
<!-- <h2>List of students</h2>
<ul>
    <?php foreach ($data as $d) : ?>

        <li><?php echo ($d['name']) ?>,<?php echo ($d['age']) ?>,<?php echo ($d['gender']) ?></li>

    <?php endforeach ?>
</ul> -->


<div class="container">
    <div class="jumbotron">
        <h2 class="display-3" style="text-align: center;">ADMIN AND CO-ADMIN LOGIN</h2>
        <hr>
        <div class="my-4">
            <div class="row">
                <div class="col-lg-4">
                    <?php echo anchor("welcome/adminRegister", "Admin register", ['class' => 'btn btn-primary']) ?>
                </div>
                <div class="col-lg-4">
                    <?php echo anchor("welcome/adminLogin", "Admin login", ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('inc/footer.php') ?>

<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

</html>