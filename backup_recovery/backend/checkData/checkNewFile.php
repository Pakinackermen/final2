<?php

// $sql = "SELECT * FROM setting";
// $ftp = "SELECT * FROM ftp";
// $result = $conn->query($sql);
// $selectftp = $conn->query($ftp);
echo "TEST CHECKDATA<br>";
echo $_POST["npathBackup"];

function directoryToArray($directory, $recursive)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backup";
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
                    $Table = "report_new_fileserver";
                    $colume = "`id_newfileserver`, `name`, `hash`, `size`, `date_newfileserver`";
                    $value = "NULL, '" . $file . "','" . md5_file($file) . "', '";
                    $value .= filesize($file) . "', '" . date('d-m-Y') . "'";
                    // insert data base
                    $conn->insert($Table, $colume, $value);
                    $array_items[] = $newplace;
                }
            }
        }
        $conn->closeDB();
        closedir($handle);
    }
    return $array_items;
}
