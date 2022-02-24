<?php
$dbHost ='sql5.freemysqlhosting.net';
$dbUsername='sql5474399';
$dbPassword = 'cssi7a3nxp';
$dbName = 'sql5474399';

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