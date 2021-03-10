<?php include('inc/header.php') ?>


<div class="container">

    <h1>Admin dashboard</h1>
    <?php $username = ($this->session->userData('username')) ?>
    <p>Welcome, <?php echo $username ?></p>
</div>












<?php include('inc/footer.php') ?>