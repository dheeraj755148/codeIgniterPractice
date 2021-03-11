<?php include('inc/header.php') ?>


<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
<div class="container">
    <style>
        .btn {
            margin-left: 10px;
        }
    </style>
    <h1>Admin dashboard</h1>
    <?php $username = ($this->session->userData('username')) ?>
    <p>Welcome, <?php echo $username ?></p>
    <div class="row">
        <?php echo anchor("admin/addCollege", "Add College", ['class' => 'btn btn-primary']) ?>
        <?php echo anchor("admin/addStudent", "Add Student", ['class' => 'btn btn-primary']) ?>
        <?php echo anchor("admin/addCoadmin", "Add Coadmin", ['class' => 'btn btn-primary']) ?>
    </div>
    <div class="row" style="margin-top: 4%;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>College Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Gender</th>
                    <th>Branch</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>No records found</td>
                </tr>
            </tbody>
        </table>
    </div>





</div>








<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>



<?php include('inc/footer.php') ?>