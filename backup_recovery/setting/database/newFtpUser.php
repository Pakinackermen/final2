<?php 

add_ftp_user('addFinal','','test' ,'');

	function add_ftp_user ($userid, $password, $username , $permisPath) {
        // $filezilla = 'FileZilla Server.xml';
        $filezilla = 'writing.xml';
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
			print_r($xml->Users);
			$user = $xml->Users->addChild('User');
			$user->addAttribute('Name', $userid);
			
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
			$permission->addAttribute('Dir','a-a-a-a-a');

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

?>