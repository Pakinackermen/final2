<?php
ini_set('post_max_size', '64M');

include_once "config/connectDB.php";

$status = $_POST['status'];
$dirSrc = cleanSpaces( str_replace("\\", "/", $_POST['dir_src']) );

$noHave = "ไม่มี";

$count = 0;
$class = new allDB();
$sql = "changedata where status = '$status' ";
 $sql .= "AND path = '$dirSrc'";
$row = $class->select($sql);

// echo $_POST['dir_src'];
// echo $_POST['status'];
function cleanSpaces($string){
    while (substr($string, 0, 1) == " ") {
        $string = substr($string, 1);
        cleanSpaces($string);
    }
    while (substr($string, -1) == " ") {
        $string = substr($string, 0, -1);
        cleanSpaces($string);
    }
    return $string;
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
    <div class="row" name="checkDisable">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">ตรวจสอบข้อมูล</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">ไดเรกทอรี่</th>
                                <th scope="col" class="border-0">การเพิ่ม</th>
                                <th scope="col" class="border-0">การลด</th>
                                <th scope="col" class="border-0">การเปลี่ยนแปลง</th>
                                <th scope="col" class="border-0">วันที่</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- <a href="#" target="_blank">เพิ่มเติม</a> -->
                            <?php
                        while ($Row = $row->fetch_assoc()) { 
                             ?>
                            <tr>
                                <td><?=++$count?></td>
                                <td><?=$Row["path"]?></td>
                                <td>
                                    <form action="core.php?previousDetail='true'" method="post">
                                        <?=$Row["new"]== '' ? $noHave:
                                        '<button class="btn btn-link" 
                                        type="submit"
                                        name="new"
                                        value="'.$Row["new"].'">เพิมเติม</button>'
                                        ?>
                                    </form>
                                </td>
                                <td>
                                    <form action="core.php?previousDetail='true'" method="post">
                                        <?=$Row["reduce"]== '' ? $noHave:
                                        '<button class="btn btn-link" 
                                        type="submit"
                                        name="reduce"
                                        value="'.$Row["reduce"].'">เพิมเติม</button>'
                                        ?>
                                    </form>
                                </td>
                                <td>
                                    <form action="core.php?previousDetail='true'" method="post">
                                        <?=$Row["hash_change"]== '' ? $noHave:
                                        '<button class="btn btn-link" 
                                        type="submit"
                                        name="hash_change"
                                        value="'.$Row["hash_change"].'">เพิมเติม</button>'
                                        ?>
                                    </form>
                                </td>
                                <td>
                                    <?=$Row["date"]?>
                                </td>

                            </tr>

                            <?php }?>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>