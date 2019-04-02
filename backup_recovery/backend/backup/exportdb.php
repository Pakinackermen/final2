<?php
/**
 * This file contains the Backup_Database class wich performs
 * a partial or complete backup of any given MySQL database
 * @author Daniel López Azaña <daniloaz@gmail.com>
 * @version 1.0
 */

/**
 * Define database parameters here
 */

 // set not show wanning and error
ini_set('log_errors', 'On');
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);



// define("DB_USER", $userDB);
// define("DB_PASSWORD", $userDB);
// define("DB_NAME", $nameDb);
// define("DB_HOST", $host);
//define("TABLES", 'table1, table2, table3'); // Partial backup
// define("GZIP_BACKUP_FILE", false);  // Set to false if you want plain SQL backup files (not gzipped)
define("BACKUP_DIR", ''); // Comment this line to use same script's directory ('.')
define("TABLES", '*'); // Full backup
define("CHARSET", 'utf8');
define("BACKUP_NAME", '-' . date("mdY_His", time()) . '.sql');


$userDB = "";
$pasdDB = "";
$nameDb = "";
$host = "";

//  echo !empty($_POST['database_user']) ; //!= null ture
//  echo $pass = !empty($_POST['database_pass']); // ==null true 
//  echo !empty($_POST['database_name']) ;
//  echo !empty($_POST['database_host']);

  
if (!empty($_POST['database_user'])&&
!empty($_POST['database_name'])&&
!empty($_POST['database_host'])
) {
    $userDB = $_POST['database_user'];
    $passDB = $_POST['database_pass'];
    $nameDb = $_POST['database_name'];
    $host = $_POST['database_host'];

    
    $backupDatabase = new Backup_Database($host, $userDB, $passDB, $nameDb);
    $result = $backupDatabase->backupTables(TABLES, BACKUP_DIR) ? 'OK' : 'KO';
    // $backupDatabase->obfPrint('Backup result: ' . $result, 1);

    $h4 = 'ทำการสำรองข้อมูลฐานข้อมูลสำเร็จ';
    $txt = $nameDb.BACKUP_NAME;
    $backupDatabase->obfPrint( include_once "tamplat/success.php" , 1);


// Use $output variable for further processing, for example to send it by email
    $output = $backupDatabase->getOutput();
    if (php_sapi_name() != "cli") {
        echo '</div>';
    }
    $server = '127.0.0.1';
    $ftp_username = 'backup';
    $ftp_password = '';
    $connection = ftp_connect($server);
    $login = ftp_login($connection, $ftp_username, $ftp_password);    
    $newFolder = 'database';
    if (ftp_mkdir($connection, $newFolder)) {
        echo "successfully created $dir\n";
    }
    $upload = ftp_put($connection, $newFolder . "/" . $nameDb.BACKUP_NAME, $nameDb.BACKUP_NAME, FTP_BINARY);
    unlink($nameDb.BACKUP_NAME);

} else {
    $txt = "กรุณาทำรายการใหม่ภายหลังอีกครั้ง";
    $h4 = "ระบบขัดข้องข้อมูลไม่ถูกต้อง";
    include_once "tamplat/fail.php";
}

class sendvar{
 public function tester()
 {
   echo 'send success';
 }
}
/**
 * The Backup_Database class
 */
class Backup_Database {
    /**
     * Host where the database is located
     */
    var $host;

    /**
     * Username used to connect to database
     */
    var $username;

    /**
     * Password used to connect to database
     */
    var $passwd;

    /**
     * Database to backup
     */
    var $dbName;

    /**
     * Database charset
     */
    var $charset;

    /**
     * Database connection
     */
    var $conn;

    /**
     * Backup directory where backup files are stored
     */
    var $backupDir;

    /**
     * Output backup file
     */
     var $backupFile;

    /**
     * Use gzip compression on backup file
     */
    var $gzipBackupFile;

    /**
     * Content of standard output
     */
    var $output;

    /**
     * Constructor initializes database
     */
    public function __construct($host, $username, $passwd, $dbName, $charset = 'utf8') {
        $this->host            = $host;
        $this->username        = $username;
        $this->passwd          = $passwd;
        $this->dbName          = $dbName;
        $this->charset         = $charset;
        $this->conn            = $this->initializeDatabase();
        $this->backupDir       = BACKUP_DIR ? BACKUP_DIR : '.';
        $this->backupFile      = $this->dbName.BACKUP_NAME;
        // $this->gzipBackupFile  = defined('GZIP_BACKUP_FILE') ? GZIP_BACKUP_FILE : true;
        $this->output          = '';
    }

    protected function initializeDatabase() {
        try {
            $conn = mysqli_connect($this->host, $this->username, $this->passwd, $this->dbName);
            if (mysqli_connect_errno()) {
                $txt = "กรุณาตรวจสอบข้อมูลที่ท่านกรอก";
                $h4 = "ระบบขัดข้อง";
                include_once "tamplat/fail.php";

                // throw new Exception('ERROR connecting database: ' . mysqli_connect_error());
                die();
            }
            if (!mysqli_set_charset($conn, $this->charset)) {
                mysqli_query($conn, 'SET NAMES '.$this->charset);
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            die();
        }

        return $conn;
    }

    /**
     * Backup the whole database or just some tables
     * Use '*' for whole database or 'table1 table2 table3...'
     * @param string $tables
     */
    public function backupTables($tables = '*') {
        try {
            /**
            * Tables to export
            */
            if($tables == '*') {
                $tables = array();
                $result = mysqli_query($this->conn, 'SHOW TABLES');
                while($row = mysqli_fetch_row($result)) {
                    $tables[] = $row[0];
                }
            } else {
                $tables = is_array($tables) ? $tables : explode(',', str_replace(' ', '', $tables));
            }

            $sql = 'CREATE DATABASE IF NOT EXISTS '.$this->dbName.";\n\n";
            $sql .= 'SET FOREIGN_KEY_CHECKS=0;'."\n\n";
            $sql .= 'USE `'.$this->dbName."`;\n\n";

            /**
            * Iterate tables
            */
            foreach($tables as $table) {
                // $this->obfPrint("Backing up `".$table."` table...".str_repeat('.', 50-strlen($table)), 0, 0);
                // $this->obfPrint("Backup ".$table." table...", 0, 0);


                /**
                 * CREATE TABLE
                 */
                $sql .= 'DROP TABLE IF EXISTS `'.$table.'`;';
                $row = mysqli_fetch_row(mysqli_query($this->conn, 'SHOW CREATE TABLE `'.$table.'`'));
                $sql .= "\n\n".$row[1].";\n\n";

                /**
                 * INSERT INTO
                 */

                $row = mysqli_fetch_row(mysqli_query($this->conn, 'SELECT COUNT(*) FROM `'.$table.'`'));
                $numRows = $row[0];

                // Split table in batches in order to not exhaust system memory
                $batchSize = 1000; // Number of rows per batch
                $numBatches = intval($numRows / $batchSize) + 1; // Number of while-loop calls to perform
                for ($b = 1; $b <= $numBatches; $b++) {

                    $query = 'SELECT * FROM `'.$table.'` LIMIT '.($b*$batchSize-$batchSize).','.$batchSize;
                    $result = mysqli_query($this->conn, $query);
                    $numFields = mysqli_num_fields($result);

                    for ($i = 0; $i < $numFields; $i++) {
                        $rowCount = 0;
                        while($row = mysqli_fetch_row($result)) {
                            $sql .= 'INSERT INTO `'.$table.'` VALUES(';
                            for($j=0; $j<$numFields; $j++) {
                                if (isset($row[$j])) {
                                    $row[$j] = addslashes($row[$j]);
                                    $row[$j] = str_replace("\n","\\n",$row[$j]);
                                    $sql .= '"'.$row[$j].'"' ;
                                } else {
                                    $sql.= 'NULL';
                                }

                                if ($j < ($numFields-1)) {
                                    $sql .= ',';
                                }
                            }

                            $sql.= ");\n";
                            // $sql.= ");";

                        }
                    }

                    $this->saveFile($sql);
                    $sql = '';
                }

                $sql.="\n\n\n";

                $this->obfPrint(" ");
            }

            if ($this->gzipBackupFile) {
                $this->gzipBackupFile();
            } else {
                // $this->obfPrint('Backup file succesfully ' . $this->backupDir.'/'.$this->backupFile, 1, 1);
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * Save SQL to file
     * @param string $sql
     */
    protected function saveFile(&$sql) {
        if (!$sql) return false;

        try {

            if (!file_exists($this->backupDir)) {
                mkdir($this->backupDir, 0777, true);
            }

            file_put_contents($this->backupDir.'/'.$this->backupFile, $sql, FILE_APPEND | LOCK_EX);

        } catch (Exception $e) {
            print_r($e->getMessage());
            return false;
        }

        return true;
    }

    /*
     * Gzip backup file
     *
     * @param integer $level GZIP compression level (default: 9)
     * @return string New filename (with .gz appended) if success, or false if operation fails
     */
    protected function gzipBackupFile($level = 9) {
        if (!$this->gzipBackupFile) {
            return true;
        }

        $source = $this->backupDir . '/' . $this->backupFile;
        $dest =  $source . '.gz';

        $this->obfPrint('Gzipping backup file to ' . $dest . '... ', 1, 0);

        $mode = 'wb' . $level;
        if ($fpOut = gzopen($dest, $mode)) {
            if ($fpIn = fopen($source,'rb')) {
                while (!feof($fpIn)) {
                    gzwrite($fpOut, fread($fpIn, 1024 * 256));
                }
                fclose($fpIn);
            } else {
                return false;
            }
            gzclose($fpOut);
            if(!unlink($source)) {
                return false;
            }
        } else {
            return false;
        }

        $this->obfPrint('OK');
        return $dest;
    }

    /**
     * Prints message forcing output buffer flush
     *
     */
    public function obfPrint ($msg = '', $lineBreaksBefore = 0, $lineBreaksAfter = 1) {
        if (!$msg) {
            return false;
        }

        $output = '';

        if (php_sapi_name() != "cli") {
            $lineBreak = "<br />";
        } else {
            $lineBreak = "\n";
        }

        if ($lineBreaksBefore > 0) {
            for ($i = 1; $i <= $lineBreaksBefore; $i++) {
                $output .= $lineBreak;
            }
        }

        $output .= $msg;

        if ($lineBreaksAfter > 0) {
            for ($i = 1; $i <= $lineBreaksAfter; $i++) {
                // $output .= $lineBreak;
            }
        }


        // Save output for later use
        $this->output .= str_replace('<br />', '\n', $output);

        // echo $output;


        if (php_sapi_name() != "cli") {
            ob_flush();
        }

        $this->output .= " ";

        flush();
    }

    /**
     * Returns full execution output
     *
     */
    public function getOutput() {
        return $this->output;
    }
}

/**
 * Instantiate Backup_Database and perform backup
 */

// Report all errors
error_reporting(E_ALL);
// Set script max execution time
set_time_limit(900); // 15 minutes
if (php_sapi_name() != "cli") {
    echo '<div style="font-family: monospace;">';
}





