<?php

backupfile('');

  function backupfile($pathbackup)
  {

    include '../hashckeck/hashbackup.php';
    include '../functionhash/configftp.php';
    date_default_timezone_set("Asia/Bangkok");
    require('bk_zip.php'); /* include zip lib */

    $name_zip_file = date("d-m-Y"); /* get date now  */
    $name_zip_file .='.zip';
    $files_to_zip = directoryToArray('../test_test/',true);

    /*Zip file*/
    $result = create_zip($files_to_zip,$name_zip_file);
    /*Transfer file via FTP */

    $server = '127.0.0.1';
    $ftp_username ="ming";
    $ftp_password ="";
    $connection = ftp_connect($server);
    $login = ftp_login($connection, $ftp_username, $ftp_password);

    if (!$connection || !$login) { die('Connection attempt failed!'); }
       
    $upload = ftp_put($connection, $pathbackup."/".$name_zip_file,$name_zip_file, FTP_BINARY);
    if (!$upload) { echo 'FTP upload failed!'; }
    ftp_close($connection);

    unlink($name_zip_file);

  }
?>
