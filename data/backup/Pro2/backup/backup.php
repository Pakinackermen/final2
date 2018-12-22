<?php
date_default_timezone_set("Asia/Bangkok");
require('bk_zip.php'); /* include zip lib */
require('bk_db.php'); /*include export code lib*/
$name_zip_file = date("d-m-Y"); /* get date now  */
$name_zip_file .='.zip';
$files_to_zip = directoryToArray('../../Pro2',true);
/*Export DB*/
echo backup_tables('127.0.0.1','root','','hotels');
/*Zip file*/
$result = create_zip($files_to_zip,$name_zip_file);
/*Transfer file via FTP */
$server = '127.0.0.1';
$ftp_user_name="ming";
$ftp_user_pass="1234";
$connection = ftp_connect($server);
$login = ftp_login($connection, $ftp_user_name, $ftp_user_pass);
if (!$connection || !$login) { die('Connection attempt failed!'); }
include '../functionhash/hash.php';
$upload = ftp_put($connection, $name_zip_file,$name_zip_file, FTP_BINARY);
if (!$upload) { echo 'FTP upload failed!'; }
ftp_close($connection);
/*Delete file zip and sql after backup*/
$files_db = glob("*.sql");
foreach($files_db as $file_db) {
    if(is_file($file_db)) {
        unlink($file_db);
    }
}
unlink($name_zip_file);
?>
