<?php

class FTP_connect
{

    public $server;
    public $ftp_username;
    public $ftp_password;

    public function __construct($server, $ftp_username, $ftp_password)
    {
        $this->server = $server;
        $this->ftp_username = $ftp_username;
        $this->ftp_password = $ftp_password;
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
    
}
