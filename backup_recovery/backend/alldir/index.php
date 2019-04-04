<?php
  include_once 'C:\xampp\htdocs\backup_recovery\pathContent\path.php';
  
  include_once Path::AuthonFile;
  $authen = new authentication();
  $authen->authen();
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
getcwd();
$pathAll = '';
$flagPathAll = false;
$item = shell_exec('cd ../../../&& dir /a:d /b');
if(isset($_GET['pathAll'])){
    $pathAll = 'cd '.$_GET['pathAll'].'\&& dir /a:d /b';
    $item = shell_exec($pathAll);    
    $flagPathAll = true;
}

$arr = str_split($item);
$flagC = false;
$flagColon = false;
$txt = '';
$txt2 = '';

foreach ($arr as $key => $value) {
    //   echo $txt2 = $value;
    
    if($value == "\n" && !$flagPathAll){
         $txt2 .= 'C:\xampp\htdocs\\'.$txt.'|';        
        $txt = '';
          '<br>37';
    }else if($value == "\n" && $flagPathAll){
        
          $txt2 .= $_GET['pathAll']."\\".$txt.'|';
           $txt = '';
           '<br>41';

    }else{
        $txt .= $value;
    }

    // if ($value == 'C') {
    //     $flagC = true;
    //     // echo "<br>";

    //     $txt2 .= $txt .= "|" . $value . ":";

    //     // echo "<br>";
    //     // echo $value ;

    // } elseif ($value == ':') {
    //     $flagColon = true;
    //     $txt .= $value;
    //     $value;
    //     // echo $value ;

    // } else {
    //     $txt .= $value;
    //     // echo $value ;
    // }

    // if ($flagC && $flagColon) {

    //     $flagC = false;
    //     $flagColon = false;
    //     $txt = '';
    // }

}


    

$txt2 = explode("|", $txt2); //array
$txt2 = array_filter($txt2, function ($e) {return $e !== 'C:';});
$txt2 = array_filter($txt2, function ($e) {return $e !== '';});

$txt2cut = '';

echo '<div class="col">
        <div class="form-row">
        <h1>ALL DIRECTORY</h1>
            <div class="form-group col-md-12 d-flex align-content-center flex-wrap ">';

foreach ($txt2 as $key => $value) {

    if (substr($value, 1)) {

    }
    if ( (stristr($value, '.git' ) === false) 
        && (stristr($value, 'backup_recovery') === false )
        && ( realpath(trim($value)) != '') ) {
            
                echo '<ul class="list-group col-md-6 ">';           
                echo '<li class="list-group-item ">';
                echo '<a href="/backup_recovery/backend/alldir/index.php?pathAll='.realpath(trim($value)).'">'.realpath(trim($value)).'</a>';
                echo '</li>';
                echo '</ul>';            
                            
            // echo realpath('C:\xampp\htdocs\backup');
            // echo "<br>";        
    }

}

    if($txt2 == null || isset($_GET['pathAll'])){

        
        echo '<ul class="list-group col-md-6 ">';           
        echo '<li class="list-group-item ">';         
        echo '<button class="btn btn-accent col-md-3 " onclick="window.history.back();">กลับ</button>';
        echo '</li>';
        echo '</ul>';   
    }
    
echo                        '</div>
                        </div>
                    </div>';

?>

<div class="col">
    <div class="form-row">

        <div class="form-group col-md-12">

            <div class="form-group col-md-12">
                <div></div>
            </div>
        </div>
    </div>
</div>