<?php

include_once "connect.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");

// update
if (isset($_POST['update'])) {    
    $dir_src = $_POST['dir_src'];
    $dir_src = str_replace("/", "/", $dir_src);
    $dir_src = str_replace("\\", "\\\\", $dir_src);
    $id_ftp = $_POST['id_ftp'];
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
        $isday = "";
    }
    if (isset($_POST['week'])) {
        $isweek = $_POST['isweek'];

    } else {
        $isweek = "";
    }
    if (isset($_POST['month'])) {
        $ismouth = $_POST['ismonth'];

    } else {
        $ismouth = "";
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
    $updateSQL .= "UPDATE ftp SET
        ftp_username = '$ftp_user',
        ftp_password = '$ftp_pass' WHERE id_ftp = " . $id_ftp;

    if ($conn->multi_query($updateSQL) === true) {
        include_once "success.php";

    } else {
        include_once "fail.php";
    }

}

?>

<?php

$conn->close();
?>