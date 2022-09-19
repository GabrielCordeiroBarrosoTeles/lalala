<!DOCTYPE html>
<html lang="en">
<head>
                 <meta charset="UTF-8">
                 <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <title>Document</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <input type="text" name="nome">
        <br><br><input type="text" name="sobrenome">
        <br><br><input type="number" name="idade">
        <br><br><input type="submit" value="?OXES">
     </form>


<?php
include "conexao.php";
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];
$inserir = $con -> query("INSERT INTO piru VALUES(0,'$nome','$sobrenome','$idade)");
?>
</body>
</html>

