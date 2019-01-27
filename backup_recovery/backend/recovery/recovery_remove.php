
<?php

echo str_replace("\\", "-", "C:\\xampp\htdocs\data\backup");
removedirfile(str_replace("\\", "/", "C:\\xampp\htdocs\data\backup"));
function removedirfile($_delfile)
{
    $server = '127.0.0.1';
    $ftp_username = "recovery";
    $ftp_password = "";
    $connection = ftp_connect($server);
    $login = ftp_login($connection, $ftp_username, $ftp_password);
    foreach ($variable as $key => $value) {
        # code...
    }
    foreach (directoryToArray($_delfile, true) as $deldir) {
        // ftp_chdir($connection, $deldir);
        if (is_dir($deldir)) {
            removedirfile($deldir);
            rmdir($deldir);
            echo "<div style='font-family: monospace;'>Remote Folder>> " . basename($deldir) . "............OK</div>";
        }
        if (is_file($deldir)) {
            unlink($deldir);
            echo "<div style='font-family: monospace;'>Delete File>> " . basename($deldir) . "............OK</div>";
        }

        echo $deldir . ".....del<br>";
        echo dirname($deldir) . "<br>";
        echo basename($deldir) . "<br>";
    }

    ftp_close($connection);
    return 0;
}
// directoryToArray('store/', true);
function directoryToArray($directory, $recursive)
{
    $array_items = array();
    if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..' && $file != 'Thumbs.db' && $file != 'error_log') {

                if (is_dir($directory . '/' . $file)) {
                    if ($recursive) {
                        $array_items = array_merge($array_items, directoryToArray($directory . '/' . $file, $recursive));

                    }
                } else {
                    $file = $directory . '/' . $file;
                    $array_items[] = preg_replace('/\/\//si', '/', $file);
                }
            }
        }
        closedir($handle);
    }
    return $array_items;
}
?>