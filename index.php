<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela de Login</title>
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
        <div class="container" style="background: #ccc;margin-top: 200px;padding-bottom: 30px;">
            <h2 class="display-2 text-center">Formulário de Login</h2>                  
            <form method="post" action="valida.php">  
                <div class="row">
                    <div class="col-2"></div>
                    <div class="form-group col-4">
                        Usuário: <input class="form-control" type="text" name="usuario" placeholder="Usuário">
                    </div>          
                    <div class="form-group col-4" >
                        Senha: <input class="form-control" type="password" name="senha" placeholder="*****"> 
                    </div>   
                </div> 
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <input class="btn btn-primary btn-block" type="submit" name="acao" value="Login"> 
                    </div>
                    <div class="col-2"></div>
                </div>
            </form>
            <p class="text-center text-danger">
                <?php
                if (isset($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
                ?>
            </p>
        </div>
    </body>
</html>
