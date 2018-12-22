<!doctype html>
<html class="no-js h-100" lang="en">

<head>
  <?php include 'link/linkup.php'; ?>
</head>

<body class="h-100">
  <!-- Main Sidebar -->
  <?php include 'public/main_nav.php';?>
  <!-- End Main Sidebar -->

  <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

    <!-- include page -->
    <?php
          
        $page  = (isset($_GET['page'])) ?  $_GET['page'] : 'No page' ;        
        if($page == 'backup'){
          include 'core/backup/index.php';
        }elseif($page == 'recovery'){
          include 'core/recovery/index.php';
        }elseif($page == 'check'){
          include 'core/checkData/index.php';
        }elseif($page == 'report'){
          $report  = (isset($_GET['report'])) ?  $_GET['report'] : 'No page' ; 
          include 'core/report/index.php';
          if($report == 'backup'){
            include 'core/report/report_backup.php';
          }elseif($report == 'recovery'){
            include 'core/report/report_recovery.php';
          }else{
            include 'core/report/report_fileserver.php';
          }
        }elseif($page == "setting"){
          include 'setting/index.setting.php';
        }
      
      ?>

  </main>
  </div>
  </div>
  <!-- core module -->
</body>
<?php include 'link/linkdown.php';?>


</html>