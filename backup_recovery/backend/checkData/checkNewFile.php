<?php


 "TEST CHECKDATA123<br>";
 $_POST["npathBackup"];
directoryToArray('../checkData', true);
function directoryToArray($directory, $recursive)
{   
    date_default_timezone_set("Asia/Bangkok");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backup";
    $json = array();
    $data = array();
    $str_value ="";

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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
                    


                    //set json
                    $str_value = "{";
                    $str_value .= "path:".$newplace;
                    $str_value .= "|hash:".md5_file($file);
                    $str_value .= "|size:".filesize($file);
                  echo  $str_value .= "}";                                                                               
                    $array_items[] = $str_value;
                }
            }
        }//while                

        closedir($handle);
    }
    $Table = "checkdata";
    $column = ' (`id`, `value`, `datetime`, `status`)';
    $value = "NULL,";
    $value .= "'".$str_value."',";
    $value .= "'".date("Y-m-d H:i:s")."',";
    $value .= "'C'";
    echo $insertDB = "INSERT INTO " . $Table . " ( " . $column . " ) VALUES ( " . $value . ")";
    // if ($conn->query($insertDB)) {
    //     echo "=::TRUE::=";
    // }else{
    //     echo "=::FALSE::=";

    // }        

    $conn->close();
    return $array_items;
}
