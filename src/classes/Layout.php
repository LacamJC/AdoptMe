<?php

// require_once './Layout/Header.php';

class Layout
{
    public static function Header()
    {
        echo ("
    
<header
    class='d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom'>
    <div class='col-md-3 mb-2 mb-md-0'>
        <a href='index.php' class='d-inline-flex link-body-emphasis text-decoration-none'>
            <img src='https://placehold.co/40x40' alt=''>
        </a>
    </div>

    <ul class='nav col-12 col-md-auto mb-2 justify-content-center mb-md-0'>
        <li><a href='../../index.php' class='nav-link px-2 link-secondary'>Home</a></li>
        <li><a href='./cadastro_pet.php' class='nav-link px-2'>Cadastro pet</a></li>
        <li><a href='./todos.php' class='nav-link px-2'>Ver pets</a></li>

        <li><a href='#' class='nav-link px-2'>Apoie-nos</a></li>
    </ul>

</header>

");
    }

    public static function Card(Pet $pet)
    {
        echo "
    <div class='card my-5' style='width: 18rem;'>
        <img src='https://placehold.co/286x180' class='card-img-top' alt='...'>
        <div class='card-body'>
            <p class='card-text'>Nome: {$pet->nome}</p>
            <p class='card-text'>Idade: {$pet->idade}</p>
        </div>
    </div>";
    }
}
