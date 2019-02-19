<?php
changeCheckData("'R'");
function changeCheckData($status)
{
    include_once "../config/connectDB.php";
    $classDb = new allDB();
    $sql = "checkdata ";
    $sql .= "WHERE status = " . $status;
    $sql .= " ORDER BY id DESC LIMIT 2";
    $row = $classDb->select($sql);
    $value = 0;
    $change = array();

    while ($checkdata = $row->fetch_assoc()) {
        echo "ID::=" . $checkdata["id"];
        $change[$value++] = $checkdata["value"];
    }

    checkFile($change, 20);
}

function checkFile($change, $id_checkdata)
{
    // print_r($change);
    date_default_timezone_set("Asia/Bangkok");
    $classDb = new allDB();
    $reduce = "";
    $newfile = "";
    $stateHashChange = true;
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
        $size = '';
        $stateCheckNewFile = true; //กรณี path ไม่ตรง
        $stateHashChange = true; //กรณีมีการแก้ไข

        foreach ($v2 as $c2 => $item2) {

            if (stristr($item1, ":", true) === "path" && stristr($item2, ":", true) === "path") { //เป็น path ไหม
                if ($item1 === $item2) { // check path ว่ามีเหมือนกันไหม ถ้าไม่เข้า if นี้สักรอบ แสดงว่ามีการลดหรือเพิ่ม
                    echo "<br>$item1 === $item2<br>";

                    unset($v1[$c1]);
                    unset($v2[$c2]);

                    ++$countTable;
                    $stateCheckNewFile = false; // false ไม่่มีไฟล์เพิ่ม
                    if ($v1[$c1 + 1] !== $v2[$c2 + 1]) { //check hash
                        //มีการแก้ไข
                        echo "มีการแก้ไข<br>";
                        $stateHashChange = true;
                        echo "<br>hashchange:" . $hashchange = $item1;
                    }
                }
                if ($stateCheckNewFile) {
                    echo "stateCheckNewFile";
                    echo "<br>reduce:" . $reduce = ($item1 == '') ? '' : $item1;
                    echo "<br>addnew:" . $newfile = ($item2 == '') ? '' : $item2;
                }

            }
        } // end loop 2
        if ($stateCheckNewFile) { //บันทึกเมื่อ
            // insert DB
            $table = "changedata ";
            $column = ' `id_change`, `new`, `reduce`, `hash_change`, `size`, `id_checkdata`, `date` ';
            $datetime = date("Y-m-d H:i:s");
/*
$value = "NULL,";
$value .= "'$newfile',";
$value .= "'$reduce',";
$value .= "'$hashchange',";
$value .= "'$size', ";
$value .= "'$id_checkdata',";
echo "<br>Value::=" . $value .= "'$datetime'";
 */
            // $classDb->insert($table, $column, $value);
            // VALUES(null, 'path', '12323', '20', '2019-02-20 07:31:35');
        }
    }
}

// if ($c1 % 3 == 2) {
//     // str_replace('path:C:/xampp/', '', $item1); //pathตรงกันไหม
//     filesize_formatted((int) str_replace('size:', '', $item1)); //ขนาดเพิ่มหรือลด
// }
