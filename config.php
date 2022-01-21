<?php
$dbHost ='localhost';
$dbUsername='root';
$dbPassword = 'root';
$dbName = 'user';

$conexao  = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($conexao->connect_errno)
{
    //echo "erro";
}
else
{
    
 // echo "Os dados foram enviados com sucesso para seu banco de dados!";

}
?>