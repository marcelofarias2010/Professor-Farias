<?php
include './conexao/conectMysqli.php';


if (isset($_GET['id'])) {
    $Acao = "Editar";
    $sql = "SELECT * FROM MyGuests WHERE id={$_GET['id']}";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $Id = $row["id"];
        $Nome = $row["firstname"];
        $Sobrenome = $row["lastname"];
        $Email = $row["email"];
    }
} else {
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sobrenome = "";
    $Email = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de cadastro</title>
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
        <div class="container" style="background: #ccc">
            <h2 class="display-2">Formulário de cadastro</h2>           
     
            <div>
                <form method="post" action="prepareStatement.php">  
                    <input type="hidden" id="Acao" name="Acao"  value="<?php echo $Acao; ?>">
                    <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
                    <div class="form-group">Name: <input class="form-control" type="text" name="nome" value="<?php echo $Nome; ?>"></div>          
                    <div class="form-group">Sobrenome: <input class="form-control" type="text" name="sobrenome" value="<?php echo $Sobrenome; ?>"> </div>         
                    <div class="form-group">E-mail: <input class="form-control" type="text" name="email" value="<?php echo $Email; ?>"></div>            
                    <input class="btn btn-outline-success" type="submit" name="submit" value="<?php echo $Acao; ?>">  
                    
                </form>
            </div>            
        </div>

    </body>
</html>
