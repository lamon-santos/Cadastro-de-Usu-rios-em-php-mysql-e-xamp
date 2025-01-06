<?php
    require_once('conexao.php'); // Inclui o arquivo conexao.php na página atual para que possamos utilizar a classe db
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $objDb = new db(); // Instancia a classe db em um objeto chamado objDb
    $link = $objDb->conecta_mysql(); // Conecta ao banco de dados
    $sql = "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario', '$email', '$senha')"; // Cria a query SQL
    // Executa a query SQL
    if(mysqli_query($link, $sql)){
        echo 'Usuário registrado com sucesso!';
    }else{
        echo 'Erro ao registrar o usuário!';
    }
?>