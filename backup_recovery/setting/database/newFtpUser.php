<?php 


class AddFtpUser{

	public function add_ftp_user ($username, $password) {   
        $filezilla = 'C:\xampp\FileZillaFTP\FileZilla Server.xml';
		if($password !== ''){
			echo $password = md5($password);
		}
		/*** create a SimpleXML object ***/ 
		if( ! $xml = simplexml_load_file($filezilla) ) 
		{
			echo "Unable to load XML file"; 
		}
		else 
		{ 	
			$this->addDir($username);
			print_r($xml->Users);
			$user = $xml->Users->addChild('User');
			$user->addAttribute('Name', $username);
			
			$option = $user->addChild('Option', $password);
			$option->addAttribute('Name', 'Pass');
			
			$option = $user->addChild('Option', '');
			$option->addAttribute('Name', 'Group');

			$option = $user->addChild('Option', '2');
			$option->addAttribute('Name', 'Bypass server userlimit');

			$option = $user->addChild('Option', '0');
			$option->addAttribute('Name', 'User Limit');

			$option = $user->addChild('Option', '0');
			$option->addAttribute('Name', 'IP Limit');

			$option = $user->addChild('Option', '1');
			$option->addAttribute('Name', 'Enabled');

			$option = $user->addChild('Option', '');
			$option->addAttribute('Name', 'Comments');

			$option = $user->addChild('Option', '2');
			$option->addAttribute('Name', 'ForceSsl');

			$filter = $user->addChild('IpFilter');
			$filter->addChild('Disallowed');
			$filter->addChild('Allowed');

					//PERMISSION START
			$permissions = $user->addChild('Permissions');			
			$permission = $permissions->addChild('Permission');			
			$permission->addAttribute('Dir','D:\\'.$username);

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'FileRead');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'FileWrite');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'FileDelete');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'FileAppend');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'DirCreate');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'DirDelete');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'DirList');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'DirSubdirs');

			$option = $permission->addChild('Option', '1');
			$option->addAttribute('Name', 'IsHome');

			$option = $permission->addChild('Option', '0');
			$option->addAttribute('Name', 'AutoCreate');

						//END PREMOISSION 
			
			$speed = $user->addChild('SpeedLimits');
			$speed->addAttribute('DlType', '0');
			$speed->addAttribute('DlLimit', '10');
			$speed->addAttribute('ServerDlLimitBypass', '2');
			$speed->addAttribute('UlType', '0');
			$speed->addAttribute('UlLimit', '10');
			$speed->addAttribute('ServerUlLimitBypass', '2');
			$speed->addChild('Download');
			$speed->addChild('Upload');

			$xml->asXML($filezilla);
		}
	}

	private function addDir($dir){		

		$ftp_user_name = 'root';
		$ftp_user_pass = '';
		$ftp_server = '127.0.0.1';
		// set up basic connection
		$conn_id = ftp_connect($ftp_server);

		// login with username and password
		$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
		
		if (ftp_mkdir($conn_id, $dir)) {
			echo 'Sucess MKDIR';
		} else {
			include_once "tamplat/fail.php";
			die();
		}

		// close the connection
		ftp_close($conn_id);
	}
}
?>