<?php
include_once("../config/connectDB.php");

/* creates a compressed zip file */
function create_zip($files = array(),$destination = '', $overwrite = false) {
    //if the zip file already exists and overwrite is false, return false
    if(file_exists($destination) && !$overwrite) { return false; }
    //vars
    $valid_files = array();
    //if files were passed in...
    if(is_array($files)) {
        //cycle through each file
        foreach($files as $file) {
            //make sure the file exists
          if(file_exists($file)) {
                $valid_files[] = $file;
                
            }
        }
    }
    //if we have good files...
    if(count($valid_files)) {
        //create the archive
        $zip = new ZipArchive();
        if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
            return false;
        }
        //add the files
        foreach($valid_files as $file) {
            $zip->addEmptyDir($file);
            $zip->addFile($file,$file);
        }
        //debug
        //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;

        //close the zip -- done!
        $zip->close();

        //check to make sure the file exists
        return file_exists($destination);
    }
    else
    {
        return false;
    }
}
function directoryToArray($directory, $recursive) {
    $class_allDB = new allDB();
    
          
    $array_items = array();
    if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' && $file != '..' && $file != 'Thumbs.db' && $file != 'error_log') {
                if (is_dir($directory. '/' . $file)) { //echo "$directory". '/' . "$file";                             
                    if($recursive) {
                        $array_items = array_merge($array_items, directoryToArray($directory. '/' . $file, $recursive));
                    }
                } else {
                    
                    $file = $directory . '/' . $file;                     
                    $newplace = preg_replace('/\/\//si', '/', $file);
                    $Table = "report_new_fileserver";
                    $colume = "`id_newfileserver`, `name`, `hash`, `size`, `date_newfileserver`";                     
                    $value = "NULL, '".$file."','".md5_file($file)."', '";
                    $value .= filesize($file)."', '".date('d-m-Y')."'";     
                    // insert data base                                                                         
                    $class_allDB->insert($Table, $colume, $value);
                    $array_items[] = $newplace;
                }
            }
        }
        $class_allDB->closeDB();
        closedir($handle);
    }
    return $array_items;
}
?>
