
<?php 
    include 'config/connectDB.php';
    
    $class = new allDB();
    $row = $class->select("report_new_fileserver ORDER BY id_newfileserver ASC");
    
?>
<script>



</script>
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-6  text-sm-left mb-0">                
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="">
              <div class="card mb-4 text-center" style="width: 15rem;">
                <!-- <div class="card-body ">
                  <h6 class="card-title">ต้องการเพิ่ม</h6>      
                  <h6 class="card-title">0</h6>
                  <h6 class="card-title">ไฟล์</h6>  
                  <a href="#" class="card-link">บันทึก</a>         
                </div> -->
              </div>
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">รายงานการเพิ่มลดและขนาดของไฟล์</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">ชื่อ</th>                                                                    
                          <th scope="col" class="border-0">แฮช</th>
                          <th scope="col" class="border-0">ขนาด</th>  
                          <th scope="col" class="border-0">วันที่</th>  
                          <th scope="col" class="border-0">เพิ่ม</th> 
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      // SELECT DATABASE
                        $count = 0;
                        while($col = $row->fetch_assoc()) {                           
                          // $col['id_newfileserver']
                      ?>
                        <tr class="text-left">
                          <td><?=++$count?></td>
                          <td><?=$col['name']?></td>                                              
                          <td><?=$col['hash']?></td>  
                          <td><?=$col['size']?> Mb</td>
                          <td><?=$col['date_newfileserver']?></td> 
                          <td>                        
                              <div class="custom-control custom-toggle custom-toggle-sm mb-1">
                                <input type="checkbox" id="customToggle1<?=$col['id_newfileserver']?>" 
                                  name="customToggle1" class="custom-control-input" value="<?=$col['id_newfileserver']?>" >
                                <label onclick="test(<?=$col['id_newfileserver']?>)" class="custom-control-label" for="customToggle1<?=$col['id_newfileserver']?>"></label>
                              </div>
                            </td>    
                        </tr>     
                      <?php } ?>                  
                      </tbody>
                    </table>                            
                  </div>
                </div>
              </div>
            </div>
<!-- <script src="report.js"></script> -->
<script>
var list = [];
function test(id){
  var checked = document.querySelectorAll('input.custom-control-input:checked');

  // list.push(id)  
  // list.forEach( (item, index) => {    
    
  // })
  console.log(checked.length);
  // var textinputs = document.querySelectorAll('input[type=checkbox]');
// if(textinputs.checked){
//     alert(textinputs.value);
  

  
  
  
  
  // var checked = document.querySelectorAll('input:checked');
  // var checkbox = document.querySelectorAll('input[type=checkbox]');
  // console.log(checkbox.length);
  //   if (checked.length >= 0) {
        
  //       console.log(checked.length + 1 +' checkboxes checked');
        
  //   } else {
  //       // there are some checked checkboxes
  //       console.log('no checkboxes checked');
  //   }
}
  
</script>