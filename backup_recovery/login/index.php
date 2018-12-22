<html>
  <head>
    <title>ลงชื่อเข้าใช้ระบบ</title>
    <?php include '../link/linkup.php';?>
  </head>
  <body>
  <div class="card card-small mb-3">
                  <div class="card-header border-bottom">
                    <h6 class="d-flex justify-content-center">ผู้ดูแลระบบ</h6>
                  </div>
                  <div class="d-flex justify-content-center">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-3">
                    
                      <form action="login.php" method="POST">
                        
                        <!-- Seamless Input Groups -->
                        <strong class="text-muted d-block mb-2">ลงชื่อเข้าใช้</strong>
                        <div class="input-group mb-3">
                          <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">person</i>
                              </span>
                            </span>
                            <input type="text" class="col-md-auto w-80" id="username" placeholder="Username" name="username"> 
                          </div>
                        </div>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">lock</i>
                              </span>
                            </span>
                            <input type="password" class="col-md-auto w-80" id="password" placeholder="Password" name="password">
                            <span class="input-group-append">
                              
                              <button class="btn btn-white" type="submit">
                                <i class="material-icons">subdirectory_arrow_left</i>
                              </button>                           
                            </span>
                        </div>
                       
                        <!-- / Seamless Input Groups -->                        
                      </form>
                    </li>
                  </ul>
        </div>
                  
      <?php include '../link/linkdown.php';?>
  </body>
</html>
