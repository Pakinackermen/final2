<?php 
    include_once "../config/connectDB.php";
    date_default_timezone_set("Asia/Bangkok");

    $classDB = new allDB();
    $setting = $classDB->select("setting");
    $setting = $classDB->select("ftp where ftp_username = ");

    while( $Row = $setting->fetch_assoc()){
        echo $Row["id_setting"]."<br>";
        if($Row["day"] == date("w")){
            // echo "document.forms[0].submit();";
        }
        if ($Row["week"] == date("w")) {

        }
        if ($Row["month"] == date("H")) {
            
        }
    }

    
    // echo date("Y-m-d H:i:s");
    // echo "<br>";
    // echo date("D");
    // echo "<br>";
    // echo date("d");
    // echo "<br>";
    // echo date("m");
    // echo "<br>";
    // echo date("Y");
    echo "<br>";
    echo date("H");
    // echo "<br>";
    // echo date("w");
   
?>

<form action="" method="post" name="autoBackup">
    <input type="hidden" name="idSetting">
</form>