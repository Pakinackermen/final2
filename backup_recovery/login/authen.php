<?php
class authentication{
        
function authen(){

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        
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
        echo $sql = "select * from person where username = '".$_SESSION['username']."' and _password = '".$_SESSION['_password']."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();  
            if( (!$row['username'] === $_SESSION['username']) || $_SESSION['username'] == ''){
                $h4 = 'เกิดความพลาด';
                $txt = 'กรุณากลับระบุตัวตนใหม่';
                include 'tamplat/fail.php';
                header('Location:\backup_recovery');
                
            }
        }else{
            $h4 = 'เกิดความพลาด';
            $txt = 'กรุณากลับระบุตัวตนใหม่';
            include 'tamplat/fail.php';
            header('Location: \backup_recovery\index.php');
            
        }
    $conn->close();
    }

    

}
?>