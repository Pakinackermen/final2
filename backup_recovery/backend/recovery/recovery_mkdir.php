<?php 
    // makedirfile('name file it dir', 'sub path in connect to ftp');
    makedirfile('store');
function makedirfile($namedir)
{
    
  $server = '127.0.0.1';
  $ftp_username ="recovery";
  $ftp_password =""; 
  $connection = ftp_connect($server);
  $login = ftp_login($connection, $ftp_username, $ftp_password);

  foreach (directoryToArray($namedir,true) as $key) {

    // ตัด store ออก
    $dirname = substr(dirname($key),5);

    // check dir by FTP
     if ( !is_dir("ftp://$ftp_username:$ftp_password@$server/".dirname($key) )) {

       //create dir
       ftp_mkdir($connection, $dirname );
       echo "<div style='font-family: monospace;'>
             successfully created dir........". dirname($key)."...........OK<div>";
     }
     // create file
     // ftp_put(desination, souece)
      if ( ftp_put($connection, $dirname .'/'. basename($key), dirname($key) .'/'. basename($key), FTP_BINARY) ) {
        echo "<div style='font-family: monospace;'>
              successfully created file........". basename($key)."...........OK<div>";
      }
  }

    ftp_close($connection);
    return 0;
  }
  function directoryToArray($directory, $recursive) {
    $array_items = array();
    if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..' && $file != 'Thumbs.db' && $file != 'error_log') {

                if (is_dir($directory. '/' . $file)) {
                    if($recursive) {
                        $array_items = array_merge($array_items, directoryToArray($directory. '/' . $file, $recursive));
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