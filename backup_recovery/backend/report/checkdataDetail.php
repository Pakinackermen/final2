<?php
/* TEST SUCCES
 *    $class = new allDB();
 *    $row = $class->select("setting");
 *    while($row->fetch_assoc()) {
 *       echo "test ROW<br>";
 *   }
 */
include_once "config/connectDB.php";
$backupDetail = new allDB();

if (isset($_GET["CheckData"])) {
    echo $idCheckdata = $_GET["CheckData"];
    $row = $backupDetail->select("checkdata where id = " . $idCheckdata);
    $Row = $row->fetch_assoc();

    $value = $Row["value"];
    $value = str_replace("{", "", $value);
    $value = str_replace("}", "|", $value);
    $value = explode("|", $value); //array
    $value = array_filter($value, function ($e) {return $e !== '';});

} else {

}
function filesize_formatted($sizeFile)
{
    $bytes = $sizeFile;
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
    }
}

?>

<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-6 text-center text-sm-left mb-0">
                <!-- <h4 class="col-12 col-sm-12 text-center">รายงานการสำรองข้อมูล</h4> -->
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">รายละเอียดการกู้คืน</h6>
                    <h6 class="m-0"><?=str_replace('C:/xampp/', '', $Row["directory"])?></h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Path</th>
                          <th scope="col" class="border-0">Hash</th>
                          <th scope="col" class="border-0">Size</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

$countTable = 0;
foreach ($value as $count => $item) {
    // echo "<br>".$count."+++++++<br>";
    // echo "<br>".$item;

    if ($count % 3 == 0) {
        echo " <tr>
    <td  >" . ++$countTable . "</td>";

        echo "<td class='text-left'>" . str_replace('path:C:/xampp/', '', $item) . "</td>";
    }
    if ($count % 3 == 1) {
        echo "<td>" . str_replace('hash:', '', $item) . "</td>";

    }
    if ($count % 3 == 2) {
        echo "<td>" . filesize_formatted((int) str_replace('size:', '', $item)) . "</td>";
        echo "</tr> ";
    }
    ?>

                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>