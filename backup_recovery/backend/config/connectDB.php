 <?php

/* TEST SUCCES
*    $class = new allDB();
*    $row = $class->select("setting");
*    while($row->fetch_assoc()) {
*       echo "test ROW<br>";
*   }     
INSERT INTO `report_new_fileserver` (`id_newfileserver`, `name`, `hash`, `size`, `data_newfileserver`) 
    VALUES (NULL, 'index.php', '998378er9ew09re', '34', '34545', 'path'); 
*/

class connectDB{

    
    public function __construct($servername = "localhost",
                            $username = "root",
                            $password = "",
                            $dbname = "backup" )  {                                                                                             
        return $conn = new mysqli($servername, $username, $password, $dbname);           
    }        
}
    
class allDB extends connectDB{      
    
    public function closeDB(){
        $conn = parent::__construct();
        return $conn->close();
    }
    public function select($Table) {  
        $conn = parent::__construct();        
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }                          
        // SELECT column_name(s) FROM table_name                 
        $select = "select * from ".$Table;        
        return $result = $conn->query($select);                               
    }      
                    
    public function insert($Table, $column, $value) {  
        $conn = parent::__construct();        
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }                   
                         
        $insertDB = "INSERT INTO ".$Table." ( ".$column." ) VALUES ( ".$value.")";
        return $result = $conn->query($insertDB);    
        // INSERT INTO table_name (column1, column2, column3,...)
        // VALUES (value1, value2, value3,...)                                   
    }         

     public function update($Table, $column, $id) {  
        $conn = parent::__construct();                
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }        
        // UPDATE table_name
        // SET column1=value, column2=value2,...
        // WHERE some_column=some_value                                       
        $update = "UPDATE ".$Table." SET ".$column." WHERE ".$id;        
        return $result = $conn->query($update);                           
    }  

    public function delete($Table, $id) {  
        $conn = parent::__construct();        
        if ($conn->connect_error) { 
            die("Connection failed: " . $conn->connect_error);
        }                
        // DELETE FROM table_name
        // WHERE some_column = some_value                              
        $delete = "DELETE FROM ".$Table." WHERE ".$id;        
        return $result = $conn->query($delete);                                      
    }                         
}

 
?> 
