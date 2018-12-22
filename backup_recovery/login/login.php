<?php
session_start();
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
    $_SESSION['username'] = $row["username"];
    header('Location: ../core.php');
    
} else {
    echo "<div style='text-align: center'><h1 >Wrong!! Signin again</h1>";
    echo "<button onclick='goBack()'>signin </button>";
    echo "</div>";
}
$conn->close();
?>
<script src="login.js"></script>