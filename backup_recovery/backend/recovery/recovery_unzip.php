<?php

date_default_timezone_set("Asia/Bangkok");
echo "unzip.php";
//getfileme('store/19-09-2018.zip', '19-09-2018.zip');

// unzip

if(isset($_POST["idSetting"])){
  unzipfile('store/' . $_POST["idSetting"]);

}

function unzipfile($namefileunzip)
{  
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
