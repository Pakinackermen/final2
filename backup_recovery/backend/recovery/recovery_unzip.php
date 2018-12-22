<?php

date_default_timezone_set("Asia/Bangkok");
/*
getfileme('store/19-09-2018.zip', '19-09-2018.zip');

getfileme('new path/filename', 'older path');
function getfileme($namefile, $ftppath){
 
  $server = '127.0.0.1';
  $ftp_username ="backup";
  $ftp_password =""; 
    
  $connection = ftp_connect($server);
  $login = ftp_login($connection, $ftp_username, $ftp_password);
  if (ftp_get($connection, $namefile, $ftppath, FTP_BINARY) ) {

    echo "Get file Success"; 
  }
  ftp_close($connection);  
}
*/

// unzip
// unzipfile('store/m.zip');
function unzipfile($namefileunzip)
{
  $filename = '';

  $zip = new ZipArchive;
  if ($zip->open($namefileunzip) === TRUE) {
      
      echo 'Unzip.........OK<BR>';
      echo $dir =  __DIR__."\store";
      $zip->extractTo(__DIR__."/store");      
      $zip->close();
      unlink($namefileunzip);

  } else {
      echo 'Unzip failed';
  }
  return $filename;
}

   ?>
