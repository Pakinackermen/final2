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
          include_once 'core/checkData/index.php';
        }elseif($page == 'report'){
          $report  = (isset($_GET['report'])) ?  $_GET['report'] : 'No page' ; 
          include 'core/report/index.php';
          if($report == 'backup'){
            include 'backend/report/report_backup.php';
          }elseif($report == 'recovery'){
            include 'backend/report/report_recovery.php';
          }elseif($report == 'checkdata'){
            include 'backend/report/report_checkdata.php';
          }else{
            include 'backend/report/report_backup.php';
          }
        }elseif($page == "setting"){
          include 'setting/index.setting.php';
        }elseif($page == 'Previous'){ //เลือก Path
          include 'backend/report/report_previous.php';
        }elseif($page == 'Previous2'){ //เลือกไฟล์ 1 ไฟล์ 2
          include 'backend/report/report_previous2.php';
        }      

        if($page == "No page" 
          && !isset($_GET["Backup"])
          && !isset($_GET["Recovery"])
          && !isset($_GET["CheckData"])){
          include_once "public/showImg.php";
        }
        // next report
        if(isset($_GET["Backup"])){
          include_once "backend/report/backupDetail.php";          
        }else if(isset($_GET["Recovery"])){
          include_once "backend/report/recoveryDetail.php";          
        }else if(isset($_GET["CheckData"])){
          include_once "backend/report/checkdataDetail.php";
        }                    
      ?>

  </main>
  </div>
  </div>
  <!-- core module -->
</body>
<?php include 'link/linkdown.php';?>


</html>