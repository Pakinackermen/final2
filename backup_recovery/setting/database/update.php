<?php
//set not show wanning and error
ini_set('log_errors', 'On');
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

include_once "connect.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");

// update
if (isset($_POST['update'])) {
    
    $dir_src = $_POST['dir_src'];  
    $dir_src = realpath($dir_src);  
    $dir_src = str_replace("/", "/", $dir_src);
    $dir_src = str_replace("\\", "\\\\", $dir_src);
    
    $oldPath = $_POST['oldPath'];   

    $id_ftp = $_POST['update'];
    $ftp_server = $_POST['ftp_server'];
    $ftp_user = $_POST['ftp_user'];
    $ftp_pass = $_POST['ftp_pass'];
    $database_user = $_POST['database_user'];
    $database_pass = $_POST['database_pass'];
    $database_name = $_POST['database_name'];
    $database_host = $_POST['database_host'];
    $token_line = $_POST['token_line'];

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

    $updateSQL = "UPDATE `setting` SET
        `dir_src`= '$dir_src',
        `ftp_user`= '$ftp_user',
        `day`= '$isday',
        `week`= '$isweek',
        `month`='$ismouth',
        `database_user`= '$database_user',
        `database_pass`= '$database_pass',
        `database_name`= '$database_name',
        `database_host`= '$database_host',
        `token_line`= '$token_line' WHERE `id_setting` ='" . $_POST['update'] . "' ;";
    // FTP table
    $updateFtp .= "UPDATE ftp SET
        ftp_server = '$ftp_server',
        ftp_username = '$ftp_user',
        ftp_password = '$ftp_pass' WHERE id_ftp = " . $id_ftp;

    if (isset($_POST['ftp_server'])) {

        if ($conn->multi_query($updateFtp) === true) {            
            include "tamplat/success.php";

        } else {
            include_once "tamplat/fail.php";
        }
    } else {
        
        if(rename($oldPath, $_POST['dir_src'])){            
            
            if ($conn->multi_query($updateSQL) === true ) {
                // rename($oldPath, $_POST['dir_src']);
                include "tamplat/success.php";

            } else {
                include_once "tamplat/fail.php";

            }
        }else{
            include_once "tamplat/fail.php";
        }//rename
    }

}

?>

<?php

$conn->close();
?>