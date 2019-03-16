<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" -->
    <!-- crossorigin="anonymous"> -->

<form action="\backup_recovery\setting\database\insert.php" method="post">
    <div class="card card-small mb-4">
        <div class="card-header border-bottom">
            <h6 class="m-0">เพิ่มผู้ใช้งาน</h6>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item p-2">
                <div class="row">
                    <div class="col">
                        <div class="form-row">

                            <div class="form-group col-md-12">

                                <div class="form-group col-md-12">
                                    <label>User</label>
                                    <input type="text" class="form-control" name="_username" placeholder="Username">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="_password" placeholder="Password">
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="_passwordConfrim" placeholder="Confirm Password">
                                </div>
                                <div class="form-group col-md-12 justify-content-center">

                                    <button type="button" onclick="validate();" class="btn btn-primary col-md-6 " 
                                    value="addnew"
                                    name="addnew"
                                    id="btnAddNew"    
                                    >เพิ่ม</button>
                                    <button type="button" class="btn btn-accent col-md-4" onclick="window.history.back()">กลับ</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
        </ul>
</form>

<script>

    function validate() {
        let user = document.getElementsByName('_username')[0];
        let pass1 = document.getElementsByName('_password')[0];
        let pass2 = document.getElementsByName('_passwordConfrim')[0];
        
        console.log(pass1.value == pass2.value)
        

        if (pass1.value == pass2.value && 
            pass1.value &&
            pass2.value &&
            user.value) {
            console.log('BLUR TURE');
            document.getElementById("btnAddNew").setAttribute("type", "submit"); 
            document . getElementById("btnAddNew").addEventListener("click");
            // document.getElementById("addnew").submit();
        } else {
            alert("กรุณากรอกข้อมูลให้ครบถ้วนและรหัสผ่านต้องตรงกัน");
        }

    }
    console.log("PASS1", pass1.value);

</script>