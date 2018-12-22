<?php


  $server = '127.0.0.1';
  $ftp_user_name = 'wedsite';
  $ftp_user_pass= '';
  $connection = ftp_connect($server);
  $login = ftp_login($connection, $ftp_user_name, $ftp_user_pass);


 ?>
