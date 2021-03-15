<?php

$pagina = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRING);

$arrayPage = array(
    "home" => "home.php",
    "cadastro" => "frmCadastro.php",
    "listar" => "select.php",
    "sair" => "sair.php"    
);
if ($pagina) {
    $encontrou = false;

    foreach ($arrayPage as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("home.php");
    }
} else {
    require_once("home.php");
}
