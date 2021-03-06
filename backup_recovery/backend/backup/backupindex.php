<?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
  $sessionUsername =  authentication::getSessionUsername();
?>

<?php

include_once 'C:\xampp\htdocs\backup_recovery\backend\config\connectDB.php';
include_once 'C:\xampp\htdocs\backup_recovery\backend\config\ftp.php';
include_once 'C:\xampp\htdocs\backup_recovery\backend\checkData\checkNewFile.php';

// set not show wanning and error
ini_set('log_errors', 'On');
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

$idSetting = $_POST['idSetting'];
$id_ftp = $_POST['id_ftp'];

if (isset($_POST['idSetting']) && $_POST['idSetting'] != "NULL" &&
    isset($_POST['id_ftp']) && $_POST['id_ftp'] != "NULL") {
        
    $class = new allDB();
    $row = $class->select("setting where id_setting = " . $idSetting);
    $filename = "";
    $Row = $row->fetch_assoc();
    $filename = $Row['id_setting'];
    $path = null;
    $path .= str_replace('\\', '/', $Row['dir_src']);
    $token = $Row['token_line'];

    try{              
        backupfile($filename, $path, $id_ftp, $token, $sessionUsername);

    }catch(Exception $e){
        $h4 = "ไม่สามารถทำรายการได้";
        $txt = "โปรดตรวจสอบข้อมูลที่กรอกไม่สามารถสำรองข้อมูลได้ขณะนี้";
        include_once "tamplat/fail.php";

    }
} else {
    $h4 = "ไม่สามารถทำรายการได้";
    $txt = "โปรดตรวจสอบข้อมูลที่กรอก.";
    include_once "tamplat/fail.php";
}

function backupfile($filename, $path, $id_ftp, $token, $sessionUsername)
{
    //  "PATH=" . $path . " filename=" . $filename;    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backup";
    $files_to_zip = array();
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    date_default_timezone_set("Asia/Bangkok");

    $date = date('Y-m-d-H-i-s');    
    $name_zip_file = $date . ".zip"; /* id table setting */
    $newFolder = $filename;
    // shell_exec('"C:\Program Files\7-Zip\7z.exe " a -r ' . $name_zip_file . ' -w ' . $path);
    // shell_exec('"C:\Program Files\7-Zip\7z.exe " a  ' . $name_zip_file . ' -w ' . $path);

    //ftp
    $ftp = "SELECT * FROM ftp WHERE id_ftp = " . $id_ftp;
    $result_id_ftp = $conn->query($ftp);
    $row_ftp = $result_id_ftp->fetch_assoc();
    $server = $row_ftp['ftp_server'];
    $ftp_username = $row_ftp['ftp_username'];
    $ftp_password = $row_ftp['ftp_password'];

    $filebackupDB = "INSERT INTO filebackup (`id_filebackup`, `id_setting`, `file_name`, `update_by` ,`ftp_by`) 
        VALUES (null, '$filename', '$name_zip_file', '$sessionUsername', '$ftp_username')";    
    $conn->query($filebackupDB);
    
    $connection = ftp_connect($server);
    $login = ftp_login($connection, $ftp_username, $ftp_password);

    if (ftp_mkdir($connection, $newFolder)) { //create folder
        // echo "successfully created $path\n";
    } 
    if (!$connection || !$login) {
        $h4 = "ไม่สามารถทำรายการได้ กรุณาตรวจสอบการส่งข้อมูล";
        $txt = "ขออภัยเกิดข้อผิดพลาดในการสำรองข้อมูลกรุณาตรวจสอบข้อมูลของท่าน ftp login";
        include_once "tamplat/fail.php";
        die();
    }else{
        databaseInsert($path, $sessionUsername); //when click botton insert checkData status B
        shell_exec('"C:\Program Files\7-Zip\7z.exe " a  ' . $name_zip_file . ' -w ' . $path);
    }

    $upload = ftp_put($connection, $newFolder."/".$name_zip_file, $name_zip_file, FTP_BINARY);
    if ($upload) { // send file
        $h4 = "สำเร็จ";
        $txt = "ท่านได้ทำการสำรองข้อมูลเรียบร้อยแล้ว";
        // include_once "tamplat/success.php";
    } else {
        $h4 = "ไม่สามารถทำรายการได้";
        $txt = "ขออภัยเกิดข้อผิดพลาดในการสำรองข้อมูลกรุณาตรวจสอบข้อมูลของท่าน ftp push";
        include_once "tamplat/fail.php";
        die();
    }

    include_once "linealert.php";
    ftp_close($connection);
    unlink($name_zip_file);

}
?>