<?php
include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = ($_POST['nome']);
    $email = ($_POST['email']);
    $senha = ($_POST['senha']);
    $telefone = ($_POST['telefone']);
    $genero = ($_POST['genero']);
    $data_nasc =  ($_POST['data_nascimento']);
    $estado = ($_POST['estado']);
    $cidade = ($_POST['cidade']);
    $endereco = ($_POST['endereco']);

    $sqlUpdate = "UPDATE usuarios SET nome ='$nome', email='$email',senha='$senha',telefone='$telefone',genero='$genero', data_nasc='$data_nasc', estado='$estado', cidade='$cidade', endereco='$endereco' 
    WHERE ID='$id'";

  $result =$conexao->query($sqlUpdate);
    

}
header('Location: sistema.php');


?>