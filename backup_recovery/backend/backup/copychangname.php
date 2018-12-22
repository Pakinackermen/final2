<?php
function directorylistArray($directory, $recursive) {
    $array_items = array();
    if ($handle = opendir($directory)) {
        while (false !== ($file = readdir($handle))) {

            if ($file != '.' && $file != '..' && $file != 'Thumbs.db' && $file != 'error_log') {
                if (is_dir($directory. '/' . $file)) {
                    if($recursive) {
                      echo $file;
                        $array_items = array_merge($array_items, directoryToArray($directory. '/' . $file, $recursive));

                    }
                } else {
                    $file = $directory . '/' . $file;
                    $array_items[] = preg_replace('/\/\//si', '/', $file);
                }
            }

        }
        // echo var_dump(count($array_items));
        // foreach ($array_items as $i  ) {
        //   echo basename($i);

        // }
        closedir($handle);
    }

    // listname($array_items);
    return $array_items;

}
function listname($listname = array())
{ $i ='';
  foreach ($listname as $i  ) {
    // echo basename($i);
  }

  return basename($i);
}
// directoryToArray('sqlfile', true);
// listname(directorylistArray('sqlfile', true));

 ?>
