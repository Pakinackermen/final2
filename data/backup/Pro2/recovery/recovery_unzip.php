
<?php
$server = '127.0.0.1';
$ftp_user_name="ming";
$ftp_user_pass="1234";

// define some variables
$local_file = '31-05-20182.zip'; // file in save
$server_file = '31-05-2018.zip'; // file get to server

// set up basic connection
$conn_id = ftp_connect($server);
// $connection = ftp_connect($server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to download $server_file and save to $local_file
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "Successfully written to file name $local_file\n";
} else {
    echo "There was a problem\n";
}

// close the connection
ftp_close($conn_id);

?>
