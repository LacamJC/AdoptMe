<?php
try {
    $user = new stdClass;
    $user->usuario = $_POST['nome_usuario'];
    $user->email = $_POST['email'];
    $user->senha = $_POST['senha'];
    $user->confirma = $_POST['confirma_senha'];
    foreach ($user as $prop => $value) {
        if (empty($value)) {
            throw new Exception("$prop vazio");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
