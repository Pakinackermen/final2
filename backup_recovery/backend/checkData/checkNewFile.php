<?php

$_POST["checkdata"];
$_POST['status'];
function databaseInsert(Type $var = null)
{
    date_default_timezone_set("Asia/Bangkok");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backup";

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //get path
    $str_value = implode(directoryToArray('../manage', true));
    $Table = "checkdata";
    $column = ' `id`, `value`, `datetime`, `status`';
    $value = "NULL,";
    $value .= "'" . $str_value . "',";
    $value .= "'" . date("Y-m-d H:i:s") . "',";
    $value .= "'".$_POST['status']."'";

    echo $insertDB = "INSERT INTO " . $Table . " ( " . $column . " ) VALUES ( " . $value . ")";
    if ($conn->query($insertDB)) {
        echo "=::TRUE::=";
    } else {
        echo "=::FALSE::=". $conn->connect_error;

    }
    $conn->close();

}

function directoryToArray($directory, $recursive)
{

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
    }

   
    return $array_items;
}

//Start checkData
//databaseInsert();