<?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
?>

<?php

include_once "connect.php";

// set not show wanning and error
ini_set('log_errors', 'On');
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$rootPath = 'C:\xampp\htdocs\\';
$namedata = $_POST['namedata'] = "NULL";

$dir_src = $_POST['dir_src'];
// $dir_src = realpath($dir_src);



$dir_src = str_replace("/", "//", $dir_src);
$dir_src = str_replace("\\", "\\\\", $dir_src);

$ftp_server = $_POST['ftp_server'];
$ftp_user = $_POST['ftp_user'];
$ftp_pass = $_POST['ftp_pass'];

$database_user = $_POST['database_user'];
$database_pass = $_POST['database_pass'];
$database_name = $_POST['database_name'];
$database_host = $_POST['database_host'];
$token_line = $_POST['token_line'];

$_username = $_POST['_username'];
$_password = md5($_POST['_password']);

if (isset($_POST['day'])) {
    $isday = $_POST['isday'];
} else {
    $isday = "N";
}
if (isset($_POST['week'])) {
    $isweek = $_POST['isweek'];
} else {
    $isweek = "N";
}
if (isset($_POST['month'])) {
    $ismouth = $_POST['ismonth'];
} else {
    $ismouth = "N";
}


mysqli_set_charset($conn, "utf8");

$sqlSetting = "INSERT INTO `setting` (
        `id_setting`,
        `name`,
        `dir_src`,
        `ftp_user`,
        `day`,
        `week`,
        `month`,
        `database_user`,
        `database_pass`,
        `database_name`,
        `database_host`,
        `token_line`)
        VALUES (NULL,
        '" . $namedata . "',
        '" . $dir_src . "',
        '" . $ftp_user . "',
        '" . $isday . "',
        '" . $isweek . "',
        '" . $ismouth . "',
        '" . $database_user . "',
        '" . $database_pass . "',
        '" . $database_name . "',
        '" . $database_host . "',
        '" . $token_line . "');";

$sqlFtp = "INSERT INTO `ftp` (
        `id_ftp`,
        `ftp_server`,
        `ftp_username`,
        `ftp_password`)
        VALUES (
        NULL,
        '" . $ftp_server . "',
        '" . $ftp_user . "',
        '" . $ftp_pass . "'
        );";

 $addnewUser = "INSERT INTO person (
    id_person,
    username,
    _password)
    VALUES(
        NULL,
        '" . $_username. "',
        '". $_password."'
    )";

if(!empty($_POST["add"])){
    if ($conn->query($sqlSetting) === true) {
        // echo "setting";
        include_once "tamplat/success.php";
    } else {
        include_once "tamplat/fail.php";
    }

}elseif(!empty($_POST['addnew'])) {
    if ($conn->query($addnewUser) === true) {
        // echo "person";
        include_once "tamplat/success.php";
    } else {
        include_once "tamplat/fail.php";
    }
}elseif(!empty($_POST['addFtp']) ){
    if ($conn->query($sqlFtp) === true) {
        // echo "ftp";
        include_once 'newFtpUser.php';
        include_once "tamplat/success.php";
        $addFtpUser = new AddFtpUser();
        $addFtpUser->add_ftp_user($ftp_user, $ftp_pass);
        shell_exec('C:\xampp\filezilla_reload_config.bat');        
    
    } else {
        echo 'addftp';
    include_once "tamplat/fail.php";
    }
}

$conn->close();
function checkInputPath($dir_src, $rootPath)
{
    // $rootServer = 'C:\xampp\htdocs\\';    
    if (!is_dir($rootPath . $dir_src)) {
        // create new file
        mkdir($rootPath . $dir_src, 0777, true);
            
        
    }
     $rootPath . $dir_src;

    return $rootPath . $dir_src;
}

