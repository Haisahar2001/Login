<!DOCTYPE html>
<html lang="en">

<?php

use App\Tools\Session;

include "header.php"; ?>
<base href="/Login/">

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

  <?php
  $logged = Session::get('loggedIn');
  
  if($logged){
    include "navbar.php";
    include "navbar_left.php";
  }
  ?>

    <?php include "content.php"; ?>

    <?php include "footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include "scripts.php"; ?>

</body>
</html>