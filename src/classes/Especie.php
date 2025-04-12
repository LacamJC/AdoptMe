<?php 

class Especie{
    private static $conn; 
    private $data;
    public function __set($prop, $value){
        $this->data[$prop] = $value;
    }

    public function __get($prop){
        return $this->data[$prop];
    }
 
    public static function setConnection(PDO $conn){
        self::$conn = $conn;
    }

    public static function getEspecie($id_especie){
        $sql = "SELECT * FROM especies WHERE id = '{$id_especie}'";
        $result = self::$conn->query($sql);
        
        return $result->fetchObject(__CLASS__);
    }



}