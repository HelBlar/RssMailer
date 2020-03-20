<?php
namespace includes;

class DbConf
{
    private $serv = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "mailer";
    
    
    public function connect(){
        $conn = new \mysqli($this->serv,$this->dbuser,$this->dbpass,$this->dbname);
        
        return $conn;
    }
}

?>