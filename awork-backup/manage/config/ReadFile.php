
<?php
// $mig = hashDirectory('C:\xampp\htdocs');
// echo '<div style="font-family: monospace;">';
// echo $mig."</div>";

function hashDirectory($directory)
{
    if (! is_dir($directory))
    {
        // echo "No have dir";
        return false;
    }
    $files = array();
    $namefiles = '';
    $dir = dir($directory);// is Root Dir

    while (false !== ($file = $dir->read()))
    {
        if ($file != '.' and $file != '..')
        {   
			       echo "<div style='font-family: monospace;'>Hash>>".($file)."..............OK</div>";

             $namefiles .= $file;
            if (is_dir($directory . '/' . $file))
            {
                // echo "<div style='font-family: monospace;'>Hashdirectory>>".($file)."..............OK</div><br>";
                // echo '<div style="font-family: monospace;>directory hash>>'.$directory.'......................OK</div>';
                $files[] = hashDirectory($directory . '/' . $file);// dir + ชื่อไฟล์
            }
            else
            {

                $files[] = md5_file($directory . '/' . $file); // ทำการ md5 ไฟล์ทั้งหมด
            }
        }
    }
    $dir->close();
    return  md5(implode('', $files).$namefiles); //ได้ข้อความออกมาจาก md5_file และทำการ hash string ที่ได้

}


 ?>
