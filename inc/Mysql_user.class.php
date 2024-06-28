<?php

class Mysql_users{
    private $db;                
    public function __construct($db){
        $this->db=$db;        
    }
    public function getAll(){
        $query="SELECT * FROM users";        
        $this->db->execQuery($query);
        return $this->db->getAllRows();
    }

    public function insert($usuario,$nombre,$apellido,$dni,$email,$condicion,$password){
        $usuario=$this->db->escStr($usuario);
        $nombre=$this->db->escStr($nombre);
        $apellido=$this->db->escStr($apellido);
        $dni=$this->db->escStr($dni);
        $email=$this->db->escStr($email);
        $condicion=$this->db->escStr($condicion);
        $password=$this->db->escStr($password);

        $password=sha1($password);

        $query="INSERT INTO users ".
                "(usuario  ,nombre   ,apellido   ,dni   ,email ,condicion   ,password) values ".
               "('{$usuario}','{$nombre}','{$apellido}','{$dni}','{$email}','{$condicion}','{$password}')" ; 
        return $this->db->execQuery($query);
    }


    public function deleteById($id){
        $id=$this->db->escStr($id);
        
        $query="DELETE FROM users WHERE id={$id}";                
        return $this->db->execQuery($query);
    }

    public function updateById($id,$usuario,$nombre,$apellido,$dni,$email,$condicion,$password){
        $usuario=$this->db->escStr($id);
        $usuario=$this->db->escStr($usuario);
        $nombre=$this->db->escStr($nombre);
        $apellido=$this->db->escStr($apellido);
        $dni=$this->db->escStr($dni);
        $email=$this->db->escStr($email);
        $condicion=$this->db->escStr($condicion);
        $password=$this->db->escStr($password);

        $password=sha1($password);
        $query="UPDATE users ".
               "SET usuario='{$usuario}',nombre='{$nombre}',apellido='{$apellido}',dni='{$dni}',email='{$email}',condicion='{$condicion}',password='{$password}' ".
               "WHERE id={$id}";
        return $this->db->execQuery($query);
    }
    public function login($usuario,$password){
        
        $usuario=$this->db->escStr($usuario);
        $password=$this->db->escStr($password);

        $password=sha1($password);
        $query="SELECT id,usuario,nombre,apellido FROM users WHERE usuario = '{$usuario}' and password = '{$password}' and activo = 1;";                                            
        $this->db->execQuery($query);
        return $this->db->getOneRow();
    }
    
    public function getById($id){
        $id=$this->db->escStr($id);

        $query="SELECT * FROM users WHERE id={$id}";                
        $this->db->execQuery($query);
        return $this->db->getOneRow();
    }
    public function enableOrdissableById($id,$active){    
        
        $id=$this->db->escStr($id);

        $active=$this->db->escStr($active);    
        $query="UPDATE users ".
               "SET activo='{$active}'".
               "WHERE id={$id}";
        return $this->db->execQuery($query);
    }
}
?>