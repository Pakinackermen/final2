<?php
session_start();
// set not show wanning and error
ini_set('log_errors', 'On');
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from person where username = '".$_POST['username']."' and _password = '".md5($_POST['password'])."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();    
    $_SESSION['id_person'] = $row['id_person'];
    $_SESSION['username'] = $row["username"];
    $_SESSION['_password'] = $row['_password'];

    header('Location: ../core.php');   
    
} else {    

    $h4 = 'ไม่สามารถเข้าสู้ระบบได้';
    $txt = 'ผู้ใช้หรือรหัสผ่านไม่ถูกต้องลองใหม่อีกครั้ง';
    include_once "tamplat/fail.php";
}


$conn->close();
?>
<script src="login.js"></script>