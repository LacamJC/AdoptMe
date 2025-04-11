<?php 

require_once('../classes/Pet.php');
try{
    $conn = new PDO('sqlite:../database/gerenciador.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    Pet::setConnection($conn);


    $nome = $_POST["nome_pet"];
    $idade = $_POST["idade_pet"];
    $especie = $_POST["especie_pet"];
    $pet = new Pet;
    $pet->nome = $nome; 
    $pet->idade = $idade;
    $pet->id_especie = $especie;

    
    // $pet->drop();
    $pet->save();
    header("location: http://localhost/pacoca/src/views/todos.php");
    
}catch(Exception $e){
    echo $e->getMessage();
}