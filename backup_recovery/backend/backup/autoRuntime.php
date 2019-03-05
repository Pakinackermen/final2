<?php 
    include_once "../config/connectDB.php";
    date_default_timezone_set("Asia/Bangkok");

    $classDB = new allDB();
    $setting = $classDB->select("setting");
    // $setting = $classDB->select("ftp where ftp_username = ");
    $dateToTest = "2015-03-01";
    $lastday = date('t', strtotime($dateToTest));
    $cerrentTime = mktime(date("H"), 0, 0, date("m"), date("d"), date("Y"));

    while( $Row = $setting->fetch_assoc()){ 
        
        echo "<br>";        
        echo "Date NOW:".(int)$Row["day"];
        
        if((int)$Row["day"] <= (int)date("H") 
            && (int)$Row["day"] != 'N'
            && (int)$Row["day"]  != ''){
          
            echo "DAY";            
            $update = (int) date("d") + 1;
            $Table = "setting";
            $column = "day = " .$update;
            $id = "id_setting = ".$Row["id_setting"];           
            $classDB->update($Table, $column, $id);
        }
        if ($Row["week"] == date("w")) {
            echo "WEEK";
        }
        if ($Row["month"] == date("d")) {
            echo "MONTH";
        }
    }

echo "<br>";

    echo mktime(00, 0, 0, 3, 6, 2019);
    echo "<br>";
    echo mktime(date("H"), 0, 0, date("m"), date("d"), date("Y"));

    // echo mktime(hour, minute, second, month, day, year);

    // echo date("Y-m-d H:i:s");
    // echo "<br>";
    // echo date("d");
    // echo "<br>";
    // echo (int)date("d");
    // echo "<br>";
    // echo date("m");
    // echo "<br>";
    // echo date("Y");
    // echo "<br>";
    // echo date("H");
    // echo "<br>";
    // echo date("w");

?>


