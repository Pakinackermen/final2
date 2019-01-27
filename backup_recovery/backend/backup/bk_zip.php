<?php
include_once "../config/connectDB.php";
echo "BK_ZIP.php";
/* creates a compressed zip file */
function create_zip($files = array(), $destination = '', $overwrite = false)
{
    //if the zip file already exists and overwrite is false, return false
    if (file_exists($destination) && !$overwrite) {return false;}
    //vars
    $valid_files = array();
    //if files were passed in...
    if (is_array($files)) {
        //cycle through each file
        foreach ($files as $file) {
            //make sure the file exists
            if (file_exists($file)) {
                $valid_files[] = $file;

            }
        }
    }
    //if we have good files...
    if (count($valid_files)) {
        //create the archive
        $zip = new ZipArchive();
        if ($zip->open($destination, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
            return false;
        }
        //add the files
        foreach ($valid_files as $file) {
            echo "<br>Zip".$file;
            $zip->addEmptyDir($file);
            if(is_file($file)){
                $zip->addFile($file, $file);
            }                                    
        }
        //debug
        //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;

        //close the zip -- done!
        $zip->close();
        //check to make sure the file exists
        return file_exists($destination);
    } else {
        return false;
    }
}
function directoryToArray($directory, $recursive)
{
    $class_allDB = new allDB();

    $array_items = array();
    $array_directory = array();
    $array_all = array();
    if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {

            if ($file != '.' && $file != '..' && $file != 'Thumbs.db' && $file != 'error_log') {
                if (is_dir($directory . '/' . $file)) {
                    //echo "$directory". '/' . "$file<br>";                    
                    if ($recursive) {
                        $array_items[] = $directory . '/' . $file;
                        $array_items = array_merge($array_items, directoryToArray($directory . '/' . $file, $recursive));
                    }

                    // $file = $directory . '/' . $file;
                    // $newplace = preg_replace('/\/\//si', '/', $file);
                    // $array_directory[] = $newplace;

                } else {

                    $file = $directory . '/' . $file;
                    $newplace = preg_replace('/\/\//si', '/', $file);

                    $array_items[] = $newplace;                    
                    // echo $file . "<br>";
                }
            }
        }


        $class_allDB->closeDB();
        closedir($handle);
    }
    return $array_items;
}
