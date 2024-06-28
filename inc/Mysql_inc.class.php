<?php

class Mysql_inc{
    public $db;
    public $connected;
    public $result;
    public $users;
    public $categoria;
    public $message;

    public function __construct(){
        $this->db=new Mysql_connect();
        $this->users=new Mysql_users($this->db);
        
        return $this->db;
    }


}

?>