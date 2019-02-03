<?php

class FTP_connect
{

    public $server;
    public $ftp_username;
    public $ftp_password;
    private $connection;

    public function __construct($server, $ftp_username, $ftp_password)
    {
        $this->server = "localhost";
        $this->ftp_username = $ftp_username;
        $this->ftp_password = $ftp_password;
    }
    public function connect_ftp()
    {
        $this->connection = ftp_connect($this->server);
        $login = ftp_login($connection, $this->ftp_username, $this->ftp_password);
    }
    public function getServer()
    {
        return $this->server;
    }
    public function getUsername()
    {
        return $this->ftp_username;
    }
    public function getPassword()
    {
        return $this->ftp_password;
    }
    public function dowload($namefile, $foldel)
    {
        $connection = ftp_connect($this->server);
        $login = ftp_login($connection, $this->ftp_username, $this->ftp_password)
        or die("Could not connect to $ftp_server");
        $dowloadFile = ftp_get($connection, "../recovery/store/" . $namefile, $foldel.'/'.$namefile, FTP_BINARY);
        ftp_close($connection);
        return $dowloadFile;
    }
    public function upload()
    {
        $connection = ftp_connect($this->server);
        $login = ftp_login($connection, $this->ftp_username, $this->ftp_password)
        or die("Could not connect to $ftp_server");
        $uploadFile = ftp_put();
        ftp_close($connection);
        return $uploadFile;

    }
    public function newFolder($foldel)
    {
        
        $connection = ftp_connect($this->server);
        $login = ftp_login($connection, $this->ftp_username, $this->ftp_password);
        if (ftp_mkdir($conn_id, $dir)) {
            echo "successfully created $dir\n";
        } else {
            echo "There was a problem while creating $dir\n";
        }
        ftp_close($conn_id);

            }
}
