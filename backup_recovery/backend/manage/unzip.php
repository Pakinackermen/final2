<?php
  // dirname(__FILE__);  dir this file
  // $zip = new ZipArchive;
  // echo basename($deldir)."<br>";
date_default_timezone_set("Asia/Bangkok");


// getfileme('path file new', 'path file older');
function getfileme($namefile, $ftppath)
{
  include 'config/ftp.php';

  // include 'configftp.php';
  if (ftp_get($connection, $namefile, "$ftppath/$namefile", FTP_BINARY) ) {

  }
  ftp_close($connection);
  $getfile['namefile'] = $namefile;
  $getfile['ftppath'] = $ftppath;

  return $getfile;
}

// unzip
// unzip('mi.zip');
function unzipfile($namefileunzip)
{
  $filename = '';

  include 'configftp.php';

  $zip = new ZipArchive;
  if ($zip->open($namefileunzip) === TRUE) {
       for ($i = 0; $i < $zip->numFiles; $i++) {
         $filename = $zip->getNameIndex(0);
           // echo dirname($filename);
      }
      echo 'Unzip.........OK';
      $zip->extractTo(dirname(__FILE__));
       // echo ftp_pwd($connection);
       // ftp_delete($connection, 'abc2');
       // ftp_rmdir($connection, '/abc2');
       // ftp_close($connection);
       $zip->close();
  } else {
      echo 'Unzip failed';
  }
  return $filename;
}

// remotedirfile('/Pro2');
function removedirfile($va_string)
{
  include 'configftp.php';

  foreach ($contents = ftp_nlist($connection, $va_string) as $deldir) {
    // ftp_chdir($connection, $deldir);
    if (is_dir("ftp://$ftp_user_name:$ftp_user_pass@$server".$deldir)) {
        removedirfile($deldir);
      ftp_rmdir($connection, $deldir );
      echo "<div style='font-family: monospace;'>Remote Folder>> ".basename($deldir)."............OK</div>";
    }
    if ( is_file("ftp://$ftp_user_name:$ftp_user_pass@$server".$deldir) ) {
        ftp_delete($connection, $deldir);
        echo "<div style='font-family: monospace;'>Delete File>> ".basename($deldir)."............OK</div>";
    }

    // echo $deldir.".....del<br>";
    // echo dirname($deldir)."<br>";
    // echo basename($deldir)."<br>";
  }
   ftp_close($connection);
  return 0;
}// end removedirfile

// makedirfile('name file it dir', 'sub path in connect to ftp');
function makedirfile($namedir, $subpath)
{
  include 'configftp.php';

  foreach (directoryToArray($namedir,true) as $key) {

    $dirname = $subpath."/".dirname($key);

    // check dir by FTP
     if ( !is_dir("ftp://$ftp_user_name:$ftp_user_pass@$server/".$subpath."/".dirname($key) )) {

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

  // read dir set file name
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

// getfileme('path file new', 'path file older');
// $step1 =  getfileme(date("d-m-Y").".zip", "test_test/".date("d-m-Y").".zip");
$getfilethis =  getfileme(date("d-m-Y").".zip", "");
// echo $getfilethis['namefile'];
// echo $getfilethis['ftppath'];
//
// unzipfile(localfile);
unzipfile($getfilethis['namefile']);

// removedirfile('/'.'ftp file');
removedirfile('/'.$getfilethis["ftppath"]);

// makedirfile('local file', 'ftp file');
makedirfile('New', $getfilethis["ftppath"]);

   ?>
