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

function ftp_putAll($conn_id, $src_dir, $dst_dir) {
    $directory = dir($src_dir);
    while($file = $directory->read()) { // do this for each file in the directory
        if ($file != "." && $file != "..") { // to prevent an infinite loop
            if (is_dir($src_dir."/".$file)) { // do the following if it is a directory
                if (!ftp_chdir($conn_id, $dst_dir."/".$file)) {
                    ftp_mkdir($conn_id, $dst_dir."/".$file); // create directories that do not yet exist
                }
                ftp_putAll($conn_id, $src_dir."/".$file, $dst_dir."/".$file); // recursive part
            } else {
                $upload = ftp_put($conn_id, $dst_dir."/".$file, $src_dir."/".$file, FTP_BINARY); // put the files
            }
        }
    }
    $directory->close();
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