<?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
  $sessionUsername =  authentication::getSessionUsername();
?>

<?php

include_once "../config/connectDB.php";
include_once "../config/ftp.php";
include_once "../checkData/checkNewFile.php";

ini_set('log_errors', 'On');
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

try{
$idSetting = $_POST["idSetting"];//ชื่อโฟเดอร
$id_filebackup = $_POST["id_filebackup"];//ชื่อไฟล์
$classDB = new allDB();

//select path recovery
$setting = $classDB->select("setting WHERE id_setting = " . $idSetting);
$Setting = $setting->fetch_assoc();
//select name file
$filebackup = $classDB->select("filebackup WHERE id_filebackup = " . $id_filebackup. " AND update_by = '$sessionUsername'");
$Filebackup = $filebackup->fetch_assoc();
//select user ftp
$ftp = $classDB->select("ftp WHERE ftp_username = " ."'".$Filebackup['ftp_by']."'");
$Ftp = $ftp->fetch_assoc();

$path = $Setting['dir_src'];
$token = $Setting['token_line'];

$ftp_server = $Ftp['ftp_server'];
$ftp_username = $Ftp['ftp_username'];
$ftp_password = $Ftp['ftp_password'];

$name_zip_file = trim($Filebackup["file_name"], " ");

$classFtp = new FTP_connect($ftp_server , $ftp_username, $ftp_password);
// echo $name_zip_file .= ".zip";
$server = $classFtp->getServer();
$ftp_username = $classFtp->getUsername();
$ftp_password = $classFtp->getPassword();

// dowload($Filebackup, $foldel)
if ($classFtp->dowload($name_zip_file , $idSetting)) {
    $h4 = "การกู้ข้อมูล dowload";
    $txt = "ท่านได้ดำเนินการกู้คืนข้อมูลแล้ว ";
    // include_once "tamplat/success.php";
} else {
    $h4 = "การกู้ข้อมูล";
    $txt = "เกิดข้อผิดพลาดในการดำเนินการ ไม่มีข้อมูลที่ท่านต้องการ ";
    include_once "tamplat/fail.php";
    die();
}
if($path != null or $path != ""){

    databaseInsert(str_replace('\\', '/', $Setting['dir_src']), $sessionUsername); //when click botton insert checkData status R
}
// remove file
shell_exec('rmdir /s /q "'.$path.'"');
$PathCutSlash = explode("\\",$path);//ตัด split  /(slash)
$sizePathCutSlash = sizeof($PathCutSlash); 
$dataEndOfArray =  $PathCutSlash[$sizePathCutSlash - 1]; 
$xPath = str_replace($dataEndOfArray, "", $path); //path Unzip file
// // 7z e archive.zip -oc:\soft *.cpp -r
include_once "linealert.php";

shell_exec('"C:\Program Files\7-Zip\7z.exe " x ' . '"store\"' . $name_zip_file . '  -o' . $xPath." -r -y" );
unlink('store/' . $name_zip_file);

}catch(Exception $e){
    // throw new Exception('ERROR connecting database:+1 ');
$h4 = "การกู้ข้อมูล";
$txt = "เกิดข้อผิดพลาดในการดำเนินการ กรุณาดำเนินการใหม่ภายหลัง ".$e;
include_once "tamplat/fail.php";

}catch(mysqli_sql_exception $ex){
    throw new Exception('ERROR connecting database:+2 ' . $ex);

}