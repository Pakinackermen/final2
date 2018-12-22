<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backup";

$namedata = $_POST['namedata'] = "NULL";

$dir_src = $_POST['dir_src'];
$dir_src = str_replace("/", "//", $dir_src);
$dir_src = str_replace("\\", "\\\\", $dir_src);

$ftp_server = "127.0.0.1";
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8");

$sql = "INSERT INTO `setting` (
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
$sql .= "INSERT INTO `ftp` (
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

if ($conn->multi_query($sql) === true) {
    include_once "success.php";
    include_once "fail.php";

} else {
   include_once "fail.php";

}

$conn->close();
