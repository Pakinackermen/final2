<?php 

function checkInputPath(){
    $rootServer = 'C:\xampp\htdocs\\';

    $dir_src = $_POST['dir_src'] = 'sql/\\\\\\/////aaaa';

    $dir_src = str_replace("/", "/", $dir_src);
    $arr1 = str_split($dir_src);

    $dir_src = str_replace("/", "//", $dir_src);
    $dir_src = str_replace("\\", "\\\\", $dir_src);


    if(!is_dir($rootServer.$dir_src) ){
        
        echo "No FILE";
        // create new file    
        if (!mkdir($rootServer.$dir_src, 0777, true)) {
            die();
        }
        $handle = opendir($rootServer.$dir_src);
        echo "Directory handle: $handle\n";
    }
}


function invalid($dir_src){
    preg_match('([/][/])', $dir_src, $matches);
    preg_match('([\\\][/])', $dir_src, $matches1);
    preg_match('([/][\\\])', $dir_src, $matches3);

    if( sizeof($matches) > 0
        || sizeof($matches3) > 0 
        || sizeof($matches3) > 0){
        return true;
    }
    return false;
}

function mb_basename($path){

    if (preg_match('@^.*[\\\\/]([^\\\\/]+)$@s', $path, $matches)) {
        return $matches[1];
    } else if (preg_match('@^([^\\\\/]+)$@s', $path, $matches)) {
        return $matches[1];
    }
    return '';
}

 


echo mb_basename($dir_src );
header('Location: backup_recovery');
