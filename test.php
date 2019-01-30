<?php
// date_default_timezone_set('Asia/Bangkok');

// $timezone = date_default_timezone_get();
// $date = date('m/d/Y h:i:s ', time());
// $date = date('Y-m-d H:i:s');

// echo "The current server timezone is: " . $timezone."<br>";
// echo $date ."The current server timezone is: " . $date;

// $array = array('lastname', 'email', 'phone');
// echo $comma_separated = implode(",", $array);
// echo $comma_separated = implode($data);

// Delimiters may be slash, dot, or hyphen
// $date = "04/30/1973";
// list($month, $day, $year) = split('[/.-]', $date);
// echo "Month= $month Day= $day; Year= $year<br />\n";

// $arr = array('Hello', 'World!', 'Beautiful', 'Day!');
// implode($arr);
// echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
// echo "\tCheckDataRun";
// echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
// echo __DIR__;
// $path = 'C:\xampp\htdocs\backup_recovery\core\report';
// $pathBackup = "myzip2";
// '"C:\Program Files\7-Zip\7z.exe " a -r ' .$pathBackup.'.zip -w '. $path;
// shell_exec('"C:\Program Files\7-Zip\7z.exe " a -r ' . $pathBackup . '.zip -w ' . $path);

// echo shell_exec("cd");
// echo shell_exec("backup");
// echo shell_exec("quit");







// sleep(5);

// $line_api = 'https://notify-api.line.me/api/notify';
// $access_token = 'D1Uyqtjz5ejEYtHzGNXFhfQmLTNQFEHk1a2DSzhsjf4';

// $str = "TEST SEND LINE"; //$_POST['msg']; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
// $image_thumbnail_url = ''; // ขนาดสูงสุด 240×240px JPEG
// $image_fullsize_url = ''; // ขนาดสูงสุด 1024×1024px JPEG
// $sticker_package_id = 1; // Package ID ของสติกเกอร์
// $sticker_id = 2; // ID ของสติกเกอร์

// $message_data = array(
//     'message' => $str,
//     'imageThumbnail' => $image_thumbnail_url,
//     'imageFullsize' => $image_fullsize_url,
//     'stickerPackageId' => $sticker_package_id,
//     'stickerId' => $sticker_id,
// );

// $result = send_notify_message($line_api, $access_token, $message_data);
// echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
// echo "VALUE::=";
// print_r($result);
// echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";

// function send_notify_message($line_api, $access_token, $message_data)
// {
//     $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $access_token);

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $line_api);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $message_data);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     $result = curl_exec($ch);
//     // Check Error
//     if (curl_error($ch)) {
//         $return_array = array('status' => '000: send fail', 'message' => curl_error($ch));
//         echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
//         echo "Send Message Success";
//         echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";

//     } else {
//         $return_array = json_decode($result, true);
//         echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
//         echo "Send Message Success";
//         echo "\n<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\n";
        
//     }
//     curl_close($ch);
//     return $return_array;
// }
// sleep(10);



$dir = 'www';

$conn_id = ftp_connect("localhost");

$login_result = ftp_login($conn_id, 'backup', '');


if (ftp_mkdir($conn_id, $dir)) {
    echo "successfully created $dir\n";
} else {    
    echo "There was a problem while creating $dir\n";
}
ftp_close($conn_id);

