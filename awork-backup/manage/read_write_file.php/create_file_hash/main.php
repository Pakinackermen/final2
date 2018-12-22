<?php
//สร้างไฟล์สำหรับตรวจสอบการ check file ที่ได้จากการ Hash

function CreateFileHashCheck($path, $text, $filename){

	include  '../../config/ReadFile.php';
	include  '../../config/ftp.php';

		$mes = hashDirectory('...ยังไม่มี');
		// $mes = hashDirectory('C:\xampp\htdocs\filewedsite\test_test');
		//
		// echo "<div style='font-family: monospace;font-size: 16px;'>
		// 		Hash successfully>>".($mes)."..............OK
		// 	  </div>";

		if (is_file("ftp://$ftp_user_name:$ftp_user_pass@$server/$path/$filename") )  {

		      ftp_delete($connection, "/$path/$filename");

		      $handle = fopen("ftp://$ftp_user_name:$ftp_user_pass@$server/$path/$filename", "w");

		}else {

		      $handle = fopen("ftp://$ftp_user_name:$ftp_user_pass@$server/$path/$filename", "w");
		}

		fwrite($handle, $mes);

    		echo "<div style='font-family: monospace;font-size: 14px;'>
    				    Create file $text..............OK
    			    </div>";
		fclose($handle);
		ftp_close($connection);
}


 ?>
