<?php

class Pet
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
        $sql = "SELECT * FROM pet";
        // echo $sql;
        $result = self::$conn->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS,__CLASS__);
    }

    public function save()
    {
        if(empty($this->data['id_especie']) or empty($this->data['nome'])){
            print_r($this);
            throw new Exception('Preencha todos os campos');
        }
        if (empty($this->data['id'])) {
            $id = $this->getLastId() + 1;
            $sql = "INSERT INTO pet(id, nome, idade, id_especie) " .
                "VALUES(
                '{$id}',
                '{$this->nome}',
                '{$this->idade}',
                '{$this->id_especie}'
            )";
        }else{
            $sql = "UPDATE pet SET " . 
            " nome = '{$this->nome}'" . 
            " idade = '{$this->idade}' ". 
            " WHERE id ={$this->id}";
            // print $sql . '<br>';
            return self::$conn->exec($sql);

        }

        echo $sql . '<br>';
        return self::$conn->exec($sql);
    }

    public function drop(){
        $sql = "DELETE FROM pet";
        // echo $sql;
        return self::$conn->exec($sql);
    }

    public function getLastId(){
        $sql = "SELECT max(id) as max FROM pet";
        $result = self::$conn->query($sql);
        $data = $result->fetch(PDO::FETCH_OBJ);
        return $data->max;

    }
}
