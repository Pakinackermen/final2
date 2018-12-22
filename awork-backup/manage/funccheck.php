<?php

      include 'config/ftp.php';

      $connectFTP = "ftp://$ftp_user_name:$ftp_user_pass@$server/";

      $handle = fopen($connectFTP."hashbackup.txt", "r");
      echo $content = fread($handle, filesize($connectFTP."hashbackup.txt"));

      $handle = fopen($connectFTP."chackhash.txt", "r");
      echo $content2 = fread($handle, filesize($connectFTP."chackhash.txt"));

      if ($content != $content2) {
          include 'linealert.php';
          include 'unzip.php';
        }


echo "successfully";
fclose($handle);

?>
