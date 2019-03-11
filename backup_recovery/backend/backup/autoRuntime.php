<?php
include_once "../config/connectDB.php";
// include_once "backupindex.php";
date_default_timezone_set("Asia/Bangkok");
$_POST['status'] = "B";
$classDB = new allDB();
$setting = $classDB->select("setting");

while ($Row = $setting->fetch_assoc()) {
    $id_setting = $Row["id_setting"];
    $day = explode(",", $Row["day"]);
    $week = explode(",", $Row["week"]);
    $month = $Row["month"];

    echo "<br>";
    // echo "Date NOW:===" . (int) $Row["day"];
    // mktime(hour, minute, second, month, day, year);

    // day
    if ($day[0] != 'N') {                
        // echo $day[1];
       
        $getDay = mktime($day[0], 0, 0, date("m"), date("d"), date("Y"));
        $cerrentDate = mktime(15, 0, 0, date("m"), date("d"), date("Y"));
        
        // echo $getDay == $cerrentDate && $day[1] == $cerrentDate ? "TURE":"F";
        
        echo $day[1] == $cerrentDate ? "D1 T":"D1 F";
        echo $getDay == $cerrentDate ? "GET T":"GET F";        
        if ($getDay == $cerrentDate && $day[1] == $cerrentDate) {
            
            $day[1] = mktime(date("H"), 0, 0, date("m"), date("d") + 1, date("Y"));
            $Table = "setting";
            $column = "day = " . "'" . $day[0] . "," . $day[1] . "'";
            $id = "id_setting = " . $id_setting;
            $classDB->update($Table, $column, $id);
        } elseif ($day[0] == 15 && $day[1] == null) {           
            $day[1] = mktime(15, 0, 0, date("m"), date("d"), date("Y"));
            $Table = "setting";
            $column = "day = " ."'". $day[0] . "," . $day[1]."'";
            $id = "id_setting = " . $id_setting;
            $classDB->update($Table, $column, $id);
        }
    }

    // week
    if ($week[0] == date("w") && $week[1] == weekOfMonth(date("Y-m-d"))) {
        $week[1] = (int) weekOfMonth(date("Y-m-d")) + 1;
        $Table = "setting";
        $column = "week = '" . $week[0] . ',' . $week[1] . "'";
        $id = "id_setting = " . $id_setting;
        $classDB->update($Table, $column, $id);

    } elseif ($week[0] == date("w") && $week[1] == null) {

        $week[1] = weekOfMonth(date("Y-m-d"));
        $Table = "setting";
        $column = "week = '" . $week[0] . ',' . $week[1] . "'";
        $id = "id_setting = " . $id_setting;
        $classDB->update($Table, $column, $id);
    }

    // month
    $getDatabaseMonth = mktime(0, 0, 0, date("m"), (int) $month, date("Y"));
    $cerrentDate = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
    if ($getDatabaseMonth == $cerrentDate) {
        $month = (int) $month + 1;
        $Table = "setting";
        $column = "month = " . $month;
        $id = "id_setting = " . $id_setting;
        $classDB->update($Table, $column, $id);
    }
}

function weekOfMonth($strDate)
{
    $dateArray = explode("-", $strDate);
    $date = new DateTime();
    $date->setDate($dateArray[0], $dateArray[1], $dateArray[2]);
    return floor((date_format($date, 'j') - 1) / 7) + 1;
}

// echo "<br>";
// echo weekOfMonth(date("Y-m-d"));
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
// echo date("d");
