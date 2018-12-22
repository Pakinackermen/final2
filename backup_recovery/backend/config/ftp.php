<?php
    
    class FTP_connect{
        
        var $server;
        var $ftp_username ;
        var $ftp_password ; 

        function __construct($server, $ftp_username, $ftp_password) {
            $this->server       = "localhost";
            $this->ftp_username   = $ftp_username;
            $this->ftp_password     = $ftp_password;
        }
        public function connect_ftp(){
            $connection = ftp_connect($this->server);
            $login = ftp_login($connection, $this->ftp_username, $this->ftp_password);
        }
        public function getServer(){                        
            return $this->server;
        }    
        public function getUsername(){
            return $this->ftp_username;
        }
        public function getPassword(){
            return $this->ftp_password;
        }
        
    }
    
?>