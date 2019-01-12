<?php

include_once("../config/connectDB.php");
include_once("../config/ftp.php");

/*
  echo $idSetting = $_POST['idSetting'];
$class = new allDB();
$row = $class->select("setting WHERE id_setting = ".$idSetting);
$Row = $row->fetch_assoc();
  echo "<br>".$Row['dir_src'];
  */    
function getfileme($namefile){
 
  if (ftp_get($connection, "store/".$namefile, $namefile, FTP_BINARY) ) {

    echo "
      <form action='../../core.php' method='post'> <div style='
          text-align: center;'><h1>ดาวน์โหลดข้อมูลสำเร็จ<br><button>กลับหน้าหลัก<br></button></h1></div>
      </form>"; 
  }   

  ftp_close($connection);    
}


  $classFTP = new FTP_connect("127.0.0.1","recovery","");
  
  $server = $classFTP->getServer();
  $ftp_username = $classFTP->getUsername();
  $ftp_password = $classFTP->getPassword();
      
  $connection = ftp_connect($server);
  $login = ftp_login($connection, $ftp_username, $ftp_password);
  // ftp_putAll($connection, 'store', '');
  ftp_close($connection);
// include 'recovery_unzip.php';
// unzipfile('store/m.zip');

?>