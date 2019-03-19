<?php
// changeCheckData('R');
// echo "<br>Change.php<br>";
function changeCheckData($status, $path)
{    

    include_once "../config/connectDB.php";
    $classDb = new allDB();
    $path = str_replace("\\", "/", $path);

    $sql = "checkdata ";
    $sql .= "WHERE status = '$status' ";
    $sql .= "AND directory = '$path' ";
    $sql .= "ORDER BY id ASC LIMIT 2";    
    

    $row = $classDb->select($sql);
    $value = 0;
    $_path = '';    
    $id =  array();
    $change = array();

    while ($checkdata = $row->fetch_assoc()) {
        $id[$value] = $checkdata["id"];
        $_path = $checkdata["directory"];
        $change[$value++] = $checkdata["value"];
    }

    checkFile($change, $id[0], $_path, $status);
}

function checkFile($change, $id_checkdata, $_path, $_status)
{
    
    date_default_timezone_set("Asia/Bangkok");
    $classDb = new allDB();
    $reduce = "";
    $newfile = "";
    $stateHashChange = array();

    $v1 = $change[0];
    $v2 = $change[1];
    $state = false;
    $v1 = str_replace("{", "", $v1);
    $v1 = str_replace("}", "|", $v1);
    $v1 = explode("|", $v1); //array
    $v1 = array_filter($v1, function ($e) {return $e !== '';});

    $v2 = str_replace("{", "", $v2);
    $v2 = str_replace("}", "|", $v2);
    $v2 = explode("|", $v2); //array
    $v2 = array_filter($v2, function ($e) {return $e !== '';});

    $countTable = 0;
    $checkNewAndReduce1 = $v1;
    $checkNewAndReduce2 = $v2;
    foreach ($v1 as $c1 => $item1) {
        $hashchange = '';
        $size = '';

        foreach ($v2 as $c2 => $item2) {

            if (stristr($item1, ":", true) === "path"
                && stristr($item2, ":", true) === "path") { //เป็น path ไหม
                if ($item1 === $item2) { // check path
                    // echo "เท่ากัน::$item1 === $item2<br>";
                    
                    ++$countTable;
                    if ($v1[$c1 + 1] !== $v2[$c2 + 1]) { //มีการแก้ไข check hash
                        // echo "มีการแก้ไข::$item1<br>";
                        //check modified file
                        echo 'Hash เปลี่ยน';
                        array_push($stateHashChange, $v1[$c1]);
                        array_push($stateHashChange, $v1[$c1 + 1]);
                        array_push($stateHashChange, $v1[$c1 + 2]);
                    }

                    unset($checkNewAndReduce1[$c1]);
                    unset($checkNewAndReduce1[$c1 + 1]);
                    unset($checkNewAndReduce1[$c1 + 2]);

                    unset($checkNewAndReduce2[$c2]);
                    unset($checkNewAndReduce2[$c2 + 1]);
                    unset($checkNewAndReduce2[$c2 + 2]);
                }

            }
        } // end loop 2
    }

    // insert DB
    $table = "changedata ";
    $column = ' `id_change`, `path`, `status`, `new`, `reduce`, `hash_change`, `id_checkdata`, `date` ';

    $reduce = setArrayTostring($checkNewAndReduce1); //reduce
    $newfile = setArrayTostring($checkNewAndReduce2); //new
    $hashchange = setArrayTostring($stateHashChange); //edit
    $datetime = date("Y-m-d H:i:s");

    $value = "NULL,";
    $value .= "'$_path',";
    $value .= "'$_status',";
    $value .= "'$newfile',";
    $value .= "'$reduce',";
    $value .= "'$hashchange',";
    $value .= "'$id_checkdata',";
    $value .= "'$datetime'";
    // echo "<br>Value::=" . $value .= "'$datetime'";

    $classDb->insert($table, $column, $value);

}
function setArrayTostring($convertArrayToString)
{
    $_setString = '';
    $count = 0;
    foreach ($convertArrayToString as $value) {
        $_setString .= $value . '|';
    }
    return $_setString;
}