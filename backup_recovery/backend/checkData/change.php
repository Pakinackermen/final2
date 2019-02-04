<?php
function changeCheckData($status)
{
    include_once "../config/connectDB.php";
    $classDb = new allDB();
    $sql = "checkdata ";
    $sql .= "WHERE status = " . $status = 'R';
    $sql .= " ORDER BY DESC LIMIT 2";
    $row = $classDb->select($sql);
    $value = 0;
    $change = array();

    while ($checkdata = $recoveryStep2->fetch_assoc()) {
        $change[$value++] = $checkdata["value"];
    }
}

function checkFile($change, $id_checkdata)
{
    date_default_timezone_set("Asia/Bangkok");
    $classDb = new allDB();

// $insertDB = "INSERT INTO " . $Table . " ( " . $column . " ) VALUES ( " . $value . ")";

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
    foreach ($v1 as $c1 => $item1) {        
        $hashchange = '';
        $stateCheckNewFile = true;
        $reduce = '';
        $addNew = '';
        foreach ($v2 as $c2 => $item2) {
            if ($c1 % 3 == 0) { //path
                ++$countTable;
                if ($item1 == $item2) {
                    $stateCheckNewFile = false; // false ไม่่มีไฟล์เพิ่ม
                    if ($v1[$c1 + 1] != $v2[$c2 + 1]) { //check hash
                        //มีการแก้ไข
                        $hashchange = $item1;
                    }
                } else {
                    $reduce = ($v1 == '') ? '' : $v1;
                    $addNew = ($v2 == '') ? '' : $v2;

                }
            }
        } // end loop 2
        if ($stateCheckNewFile) {
            
            // insert DB
            $table = "changedata ";
            $column = ' `id_change`, `new`, `reduce`, `size`, `id_checkdata`, `date` ';
            $datetime = date("Y-m-d H:i:s");

            $value = "NULL,";
            $value .= "'$newfile',";
            $value .= "'$reduce',";
            $value .= "'$size', ";
            $value .= "'$id_checkdata',";
            $value .= "'$datetime'";

            $classDb->insert($sql);

            // VALUES(null, 'path', '12323', '20', '2019-02-20 07:31:35');

        }

    }

}

// if ($c1 % 3 == 2) {
//     // str_replace('path:C:/xampp/', '', $item1); //pathตรงกันไหม
//     filesize_formatted((int) str_replace('size:', '', $item1)); //ขนาดเพิ่มหรือลด
// }
