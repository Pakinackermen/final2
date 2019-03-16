<?php
include_once("change.php");
// echo "CheckData=".$_POST["checkdata"];
if (isset($_POST["checkdata"])) {
    $path = $_POST["checkdata"];

    if (is_dir($path)) {
        // echo $_POST['status'];
        // echo "CheckData=" . $_POST["checkdata"];
        databaseInsert($path);
        
    } else {
        $h4 = "ไม่สามารถดำเนินการได้";
        $txt = "กรุณาตรวจสอบการข้อมูลใหม่อีกครั้ง";
        include_once "tamplat/fail.php";

    }

}


function databaseInsert($path)
{
    date_default_timezone_set("Asia/Bangkok");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backup";

     $path = str_replace('\\', '/', $path);
    //  $path = str_replace('/', '//', $path);

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //get path
    $str_value = implode(directoryToArray($path, true));
    $Table = "checkdata";
    $column = ' `id`, `value`, `directory`, `datetime`, `status`';
    $id = "NULL,";
    $value = "'" . $str_value . "', ";
    $directory = "'". $path ."', ";
    $datetime = "'" . date("Y-m-d H:i:s") . "',";
    $statusDB = "'" . $_POST['status'] . "'";
    
    $valueInsert = $id.$value.$directory.$datetime.$statusDB;

     $insertDB = "INSERT INTO " . $Table . " ( " . $column . " ) VALUES ( " . $valueInsert . ")";
    if ($conn->query($insertDB)) {
         "=::TRUE::=";
        $h4 = "สำเร็จ";
        $txt = "ท่านได้ทำการตรวจสอบเรียบร้อยแล้ว";
        include_once "tamplat/success.php";

    } else {
         "=::FALSE::=" . $conn->connect_error;
        $h4 = "ไม่สามารถดำเดินการได้ กรุณาลองใหม่อีกครั้ง";
        $txt = "กรุณาลองใหม่อีกครั้ง";
        include_once "tamplat/fail.php";
    }
    $conn->close();
    changeCheckData($_POST['status'], $path); //change.php
}

function directoryToArray($directory, $recursive){

    $json = array();
    $data = array();
    $str_value = "";

    $array_items = array();
    if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..' && $file != 'Thumbs.db' && $file != 'error_log') {
                if (is_dir($directory . '/' . $file)) { //echo "$directory". '/' . "$file";
                    if ($recursive) {
                        $array_items = array_merge($array_items, directoryToArray($directory . '/' . $file, $recursive));
                    }
                } else {

                    $file = $directory . '/' . $file;
                    $newplace = preg_replace('/\/\//si', '/', $file);
                    $newplace = str_replace('..', '', $newplace);
                    //set value
                    $str_value = "{";
                    $str_value .= "path:" . $newplace;
                    $str_value .= "|hash:" . md5_file($file);
                    $str_value .= "|size:" . filesize($file);
                    $str_value .= "}";
                    $array_items[] = $str_value;
                }
            }
        } //while

        closedir($handle);
    }else{
        throw new Exception();
    }

    return $array_items;
}

//Start checkData
//databaseInsert();
