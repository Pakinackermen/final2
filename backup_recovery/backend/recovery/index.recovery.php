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

/*
echo $idSetting = $_POST['idSetting'];
$class = new allDB();
$row = $class->select("setting WHERE id_setting = ".$idSetting);
$Row = $row->fetch_assoc();
echo "<br>".$Row['dir_src'];
 */
try{
$idSetting = $_POST["idSetting"];//ชื่อโฟเดอร
$id_filebackup = $_POST["id_filebackup"];//ชื่อไฟล์
$classDB = new allDB();
$classConn = new FTP_connect("127.0.0.1", "backup", "");
//select path recovery
$row = $classDB->select("setting WHERE id_setting = " . $idSetting);
//select name file
$namefile = $classDB->select("filebackup WHERE id_filebackup = " . $id_filebackup);
$Row = $row->fetch_assoc();
$Namefile = $namefile->fetch_assoc();

$path = $Row['dir_src'];
$token = $Row['token_line'];

$name_zip_file = trim($Namefile["file_name"], " ");

// echo $name_zip_file .= ".zip";
$server = $classConn->getServer();
$ftp_username = $classConn->getUsername();
$ftp_password = $classConn->getPassword();

// dowload($namefile, $foldel)
if ($classConn->dowload($name_zip_file , $idSetting)) {
    $h4 = "การกู้ข้อมูล dowload";
    $txt = "ท่านได้ดำเนินการกู้คืนข้อมูลแล้ว ";
    // include_once "tamplat/success.php";
} else {
    $h4 = "การกู้ข้อมูล";
    $txt = "เกิดข้อผิดพลาดในการดำเนินการ กรุณาดำเนินการใหม่ภายหลัง ";
    // include_once "tamplat/fail.php";
}
if($path != null or $path != ""){

    databaseInsert(str_replace('\\', '/', $Row['dir_src'])); //when click botton insert checkData status R
}
// remove file
shell_exec('rmdir /s /q "'.$path.'"');
$PathCutSlash = explode("\\",$path);//ตัด split  /(slash)
$sizePathCutSlash = sizeof($PathCutSlash); 
$dataEndOfArray =  $PathCutSlash[$sizePathCutSlash - 1]; 
$xPath = str_replace($dataEndOfArray, "", $path); //path Unzip file
// // 7z e archive.zip -oc:\soft *.cpp -r
// include_once "linealert.php";

shell_exec('"C:\Program Files\7-Zip\7z.exe " x ' . '"store\"' . $name_zip_file . '  -o' . $xPath." -r -y" );
unlink('store/' . $name_zip_file);

}catch(Exception $e){
    // throw new Exception('ERROR connecting database:+1 ');
$h4 = "การกู้ข้อมูล";
$txt = "เกิดข้อผิดพลาดในการดำเนินการ กรุณาดำเนินการใหม่ภายหลัง ";
include_once "tamplat/fail.php";

}catch(mysqli_sql_exception $ex){
    throw new Exception('ERROR connecting database:+2 ' . $ex);

}