<?php

class Atributo
{
    private static $conn;
    private $data;

    public function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }

    public function __get($prop)
    {
        return $this->data[$prop];
    }

    public static function setConnection(PDO $conn)
    {
        self::$conn = $conn;
    }

    public static function all(){
        $sql = 'SELECT * FROM atributos';
        $result = self::$conn->query($sql);

        return $result->fetchObject(__CLASS__);
    }
}
