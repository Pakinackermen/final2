<?php

include_once "../config/connectDB.php";
include_once "../config/ftp.php";

/*
echo $idSetting = $_POST['idSetting'];
$class = new allDB();
$row = $class->select("setting WHERE id_setting = ".$idSetting);
$Row = $row->fetch_assoc();
echo "<br>".$Row['dir_src'];
 */

 
echo $idSetting = $_POST["idSetting"];
$classDB = new allDB();
$classConn = new FTP_connect("127.0.0.1", "backup", "");
// $classAllFtp = new allFtp();

$row = $classDB->select("setting WHERE id_setting = " . $idSetting);
$Row = $row->fetch_assoc();
echo "<br>dir_src=" . $Row["dir_src"];
echo "<br>id_setting=" . $Row["id_setting"];

$namefile = $Row["id_setting"];
$namefile .= ".zip";


// 7z e archive.zip -oc:\soft *.cpp -r
shell_exec('"C:\Program Files\7-Zip\7z.exe " x ' . $name_zip_file . '  -o'.$path ." -r");
$server = $classConn->getServer();
$ftp_username = $classConn->getUsername();
$ftp_password = $classConn->getPassword();

if ($classConn->dowload($namefile)) {
    $h4 = "การกู้ข้อมูล";
    $txt = "ท่านต้องการกู้ข้อมูลที่ " . $Row["dir_src"] . "";
    $action = "recovery_unzip.php";
    $value = $namefile;
    include_once "tamplat/success.php";
} else {
    $h4 = "การกู้ข้อมูล";
    $txt = "เกิดข้อผิดพลาดในการดำเนินการ กรุณาดำเนินการใหม่ภายหลัง ";
    include_once "tamplat/fail.php";
}

// $connection = ftp_connect($server);
// $login = ftp_login($connection, $ftp_username, $ftp_password);
// $connection = $classConn->connect_ftp($server);
// echo $connection == null ? "connect null" : "con not null";
// $dowloadFile = ftp_get($connection, "store/". $namefile, $namefile, FTP_BINARY);

// ftp_putAll($connection, 'store', '');
// ftp_close($connection);
// include 'recovery_unzip.php';
// unzipfile('store/m.zip');
