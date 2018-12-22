<?php
//user info
$username = "test";
$crypt = "5555";
$password = md5($crypt);
$userDir = "D:";

//location of filezilla
$fileloc = "C:/xampp/FileZillaFTP/";
$filelocfile = ($fileloc."FileZilla Server.xml");
//echo $filelocfile;

////////////////
// start add filezilla user
////////////////

//Check to see if user name is already used
$fp = fopen($filelocfile,"r");
$data = fread($fp,filesize($filelocfile));
$pos1 = strpos($data,'<User Name="'.$username.'"');//find user name

fclose($fp);

//if user not found .. add
if($pos1 == false){
    echo "adding user......";

    // user setting for FileZilla FTP

    $fileread = 1;   //Files Read  1 = YES  0 = NO
    $filewrite = 1;  //Files Write
    $filedelete = 1; //Files Delete
    $fileappend = 1; //Files Append, must have Write on
    $dircreate = 1;  //Directory Create
    $dirdelete = 1;  //Directory Delete
    $dirlist = 1;    //Directory List
    $dirsubdirs = 1; //Directory + Subdirs
    
    // Aktuelle Config wird eingelesen
    $lines = file($filelocfile);

    // echo var_dump($lines);

    // Copy Config for backup
    // rename($filelocfile, $fileloc . date("Y-m-d;H-i-s")." FileZilla Server.xml" );
    rename($filelocfile, $fileloc . date("Y-m-d")." FileZilla Server.xml" );

    // open Config for writing 
    $file = fopen($filelocfile,"a+");

    for($i=0; $i < sizeof($lines); $i++)
    {
        fwrite ($file, $lines[$i]);
        
            // write new information on top of list after "<Users>" 
            if (strstr($lines[$i],"<Users>"))
            {
                fwrite($file, 
                    '<User Name="'.$username.'">
                            <Option Name="Pass">'.$password.'</Option>
                            <Option Name="Group"></Option>
                            <Option Name="Bypass server userlimit">0</Option>
                            <Option Name="User Limit">0</Option>
                            <Option Name="IP Limit">0</Option>
                            <Option Name="Enabled">1</Option>
                            <Option Name="Comments"></Option>
                            <Option Name="ForceSsl">0</Option>
                            <IpFilter>
                                <Disallowed />
                                <Allowed />
                            </IpFilter>
                            <Permissions>
                                <Permission Dir="D:">
                                    <Option Name="FileRead">' . $fileread . '</Option>
                                    <Option Name="FileWrite">' . $filewrite . '</Option>
                                    <Option Name="FileDelete">' . $filedelete . '</Option>
                                    <Option Name="FileAppend">' . $fileappend . '</Option>
                                    <Option Name="DirCreate">' . $dircreate . '</Option>
                                    <Option Name="DirDelete">' . $dirdelete . '</Option>
                                    <Option Name="DirList">' . $dirlist . '</Option>
                                    <Option Name="DirSubdirs">' . $dirsubdirs . '</Option>
                                    <Option Name="IsHome">1</Option>
                                    <Option Name="AutoCreate">0</Option>
                                </Permission>
                            </Permissions>
                            <SpeedLimits DlType="0" DlLimit="10" ServerDlLimitBypass="0" UlType="0" UlLimit="10" ServerUlLimitBypass="0">
                                <Download />
                                <Upload />
                            </SpeedLimits>
                        </User>
                ');
            }
    }

    // Close xml file
    fclose($file);

    //added user now reload FileZilla Server XML file to add user
    passthru($fileloc.'filezillaserver.exe /reload-config');
    echo (" filezilla reloaded, user active");

}
else{
    echo "user name ".$username." already used";//did not add user, user name already used
}

////////////////
// end add filezilla user
////////////////
?>