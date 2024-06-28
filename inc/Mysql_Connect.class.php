<?php

class Mysql_connect{
    public $db;
    public $connect;
    public $result;

    public function __construct(){
        $this->db=new mysqli(SERVIDOR,USUARIO,PASSWORD,BD);
        $this->db->set_charset("utf8");
        if($this->db->connect_error){
            $this->connect=false;
            die("Error de conexion: ".$this->db->connect_error);
        }else{
            $this->connect=true;
        }
    }

    public function execQuery($query){
        if(DB_DEBUG==1) echo "<br>\n"."Query->".$query;
        if ($this->connect){
            $this->result=mysqli_query($this->db,$query);
            if (!$this->result){
                echo "Error: ".mysqli_error($this->db);                
            }
        }else{
            return 0;
        }
        return $this->result;
    }

    public function numRows(){
        return mysqli_num_rows($this->result); 
    }
    public function getOneRow(){
        return mysqli_fetch_assoc($this->result);
    }

    public function getAllRows(){
        $resultArray=[];        
        while ($row=$this->getOneRow()){
            $resultArray[]=$row;           
        }
        return $resultArray;
    }

    public function showResult($result){
        echo "<table>";
            foreach($result as $row){
                echo "<tr>";
                foreach($row as $data){
                    echo "<td>".$data."</td>";
                }
                echo "<tr>".LN;
            }
        echo "</table>";
    }
    public function escStr($str){
        return $this->db->real_escape_string($str);
    }
}

?>