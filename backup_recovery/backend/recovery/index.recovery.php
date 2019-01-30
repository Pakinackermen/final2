<?php

include_once "../config/connectDB.php";
include_once "../config/ftp.php";
include_once "../checkData/checkNewFile.php";

/*
echo $idSetting = $_POST['idSetting'];
$class = new allDB();
$row = $class->select("setting WHERE id_setting = ".$idSetting);
$Row = $row->fetch_assoc();
echo "<br>".$Row['dir_src'];
 */
$idSetting = $_POST["idSetting"];
$classDB = new allDB();
$classConn = new FTP_connect("127.0.0.1", "backup", "");

$row = $classDB->select("setting WHERE id_setting = " . $idSetting);
$Row = $row->fetch_assoc();
$path = $Row["dir_src"]; 
$name_zip_file = $Row["id_setting"];
$name_zip_file .= ".zip";
$server = $classConn->getServer();
$ftp_username = $classConn->getUsername();
$ftp_password = $classConn->getPassword();

if ($classConn->dowload($name_zip_file)) {
    $h4 = "การกู้ข้อมูล";
    $txt = "ท่านได้ดำเนินการกู้คืนข้อมูลแล้ว ";
    // include_once "tamplat/success.php";
} else {
    $h4 = "การกู้ข้อมูล";
    $txt = "เกิดข้อผิดพลาดในการดำเนินการ กรุณาดำเนินการใหม่ภายหลัง ";
    // include_once "tamplat/fail.php";
}

if($path != null or $path != ""){
    databaseInsert($path); //when click botton insert checkData status R
}

// remove file
shell_exec('rmdir /s /q "'.$path.'"');
$PathCutSlash = explode("\\",$path);//ตัด split  /(slash)
$sizePathCutSlash = sizeof($PathCutSlash); 
$dataEndOfArray =  $PathCutSlash[$sizePathCutSlash - 1]; 
$xPath = str_replace($dataEndOfArray, "", $path); 
// // 7z e archive.zip -oc:\soft *.cpp -r
shell_exec('"C:\Program Files\7-Zip\7z.exe " x ' . '"store\"' . $name_zip_file . '  -o' . $xPath." -r -y" );
unlink('store/' . $name_zip_file);

