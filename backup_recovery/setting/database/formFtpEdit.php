<?php
include_once "connect.php";
//FTP
// เลือก แก้ไข
$editftp = "SELECT * FROM ftp WHERE id_ftp = '" . $_POST['edit_ftp'] . "'";
$result1 = $conn->query($editftp);
$row1 = $result1->fetch_assoc();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<form action="update.php" method="post">
    <div class="card card-small mb-4">
        <div class="card-header border-bottom">
        <h6 class="m-0">แก้ไขผู้ใช้ FTP</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-2">
                <div class="row">
                    <div class="col">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <div class="form-group col-md-12">
                                    <label>Server</label>
                                    <input type="text"
                                    required
                                    class="form-control" id="pathfile"
                                    value="<?=$row1['ftp_server']?>" name="ftp_server"
                                    placeholder="Address">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>FTP User</label>
                                    <input type="text" class="form-control"
                                        required
                                        value="<?=$row1['ftp_username']?>"
                                        id="pathfile"
                                        name="ftp_user"
                                        placeholder="FTP User">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>FTP Password</label>
                                    <input type="password"
                                        class="form-control"
                                        value="<?=$row1['ftp_password']?>"
                                        id="pathfile"
                                        name="ftp_pass" placeholder="Password">
                                </div>
                                <div class="form-group col-md-12 justify-content-center">
                
                                <button type="submit" class="btn btn-primary col-md-6 " value="<?=$row1['id_ftp']?>" name="update">แก้ไข</button>
                                <button type="button" class="btn btn-accent col-md-3" onclick="window.history.back()" name="edit">กลับ</button>
                             </div>
                                </div>
                            </div>
                        </div>
            </li>
        </ul>
</form>