<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1 style="color: white;padding-top: 8px;">
                <?php
                session_start();
                echo '<h1>Seja bem vindo ' . $_SESSION['usuarioNome'] . '.</h1>';
                ?>
            </h1>
            <p>Curso de PHP com Mysql</p> 
        </div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">                    
                    <li class="nav-item">
                        <a class="nav-link" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=cadastro">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Visualizar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=sair">Sair</a>
                    </li>  
                </ul>
            </div>  
        </nav>
        <?php
        require_once 'util/requestPage.php';
        ?>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <p>Footer</p>
        </div>
    </body>
</html>
