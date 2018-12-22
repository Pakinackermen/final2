<?php

 echo hashDirectory('C:\xampp\htdocs\Pro2');
function hashDirectory($directory)
{
    if (! is_dir($directory))
    {
        // echo "No have dir";
        return false;
    }
    $files = array();
    $dir = dir($directory);// is Root Dir

    while (false !== ($file = $dir->read()))
    {
        if ($file != '.' and $file != '..')
        {
            if (is_dir($directory . '/' . $file))
            {
                // echo $directory.' file>>'.$file.'<br>';
                $files[] = hashDirectory($directory . '/' . $file);// dir + ชื่อไฟล์
            }
            else
            {
                $files[] = md5_file($directory . '/' . $file); // จัดการกับ / เสร็จทำการ md5 ไฟล์ทั้งหมด
            }
        }
    }
    $dir->close();
    return md5(implode('', $files)); //ได้ข้อความออกมาจาก md5_file และทำการ hash string ที่ได้
}
 ?>
