<?php
session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>|SISTEMA|</title>
    <style>
body {
font-family:  'Arial Rounded MT Bold', "Helvetica Rounded", Arial, sans-serif;
background-image: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
border-radius: 50%;
background-size: 300% 300%;
animation: colors 30s ease infinite;
height: 100vh;
width: 100vw;
padding: 0%;
margin: 0%;
text-align: center;
}
@keyframes colors {
0% {
       background-position: 0% 50%;
   }
50% {
        background-position: 100% 50%;
    }
100% { 
        background-position: 0% 50%;

    }
}

#navbar {


background-image: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
animation: colors 28s ease infinite;
padding: 18px;
background-size: 300% 300%;
margin-top: -0.5%;
margin-bottom: -1%;


}
h1{
    color: white;
}
#mstm{
color: white;
font-family:  'Arial Rounded MT Bold', "Helvetica Rounded", Arial, sans-serif;
}
 #sair{
color: white;
width: 80px;
margin-top: 5px;
background-color: Transparent;
background-repeat:no-repeat;
-moz-transition: all 0.5s;
-webkit-transition: all 0.5s;
transition: all 0.5s;

}


#sair:hover {
    background-color: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
}

#botao{
  background-color: #00BFFF;
  border-color: transparent;
  max-width: 100%;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
#botao:hover{
-moz-transform: scale(1.2);
-webkit-transform: scale(1.2);
transform: scale(1.2); 
}

#botaolixeira {
background-color: #00BFFF;
border-color: transparent;
max-width: 100%;
-moz-transition: all 0.5s;
-webkit-transition: all 0.5s;
transition: all 0.5s;
}


#botaolixeira:hover{
-moz-transform: scale(1.2);
-webkit-transform: scale(1.2);
transform: scale(1.2);
}



#botadd{
  background-color: #00BFFF;
  border-color: transparent;
   max-width: 100%;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}

#botadd:hover{
-moz-transform: scale(1.2);
-webkit-transform: scale(1.2);
transform: scale(1.2);
}


</style>
</head>
<body>
    
<nav  class="navbar navbar-light bg-light">
  <div id="navbar" class="container-fluid">
    <a id="mstm" class="navbar-brand" href="#">MEU SISTEMA</a>
    <a href="sair.php" class="btn btn-light me-3" id="sair">SAIR</button></a>
    
  </div>
  <div>

  
  </div>
  
      
  
</nav>
<br>
<br>
<?php

echo "<h1>Bem vindo, <u>$logado</u></h1>"
?>
<div>
<br>
<br>
<div class = "m-5">
<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SENHA</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">SEXO</th>
      <th scope="col">DATA_NASC</th>
      <th scope="col">ESTADO</th>
      <th scope="col">CIDADE</th>
      <th scope="col">ENDERECO</th>      
      <th scope="col">EDITAR</th>


    </tr>
  </thead>
 
    </tr>
  </tbody>
  <?php
while($user_data = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$user_data['id']."</td>";
echo "<td>".$user_data['nome']."</td>";
echo "<td>".$user_data['email']."</td>";
echo "<td>".$user_data['senha']."</td>";
echo "<td>".$user_data['telefone']."</td>";
echo "<td>".$user_data['genero']."</td>";
echo "<td>".$user_data['data_nasc']."</td>";
echo "<td>".$user_data['estado']."</td>";
echo "<td>".$user_data['cidade']."</td>";
echo "<td>".$user_data['endereco']."</td>";
echo "<td>
<a>
<a href='add.php?id=$user_data[id]' class='btn btn-primary' id='botadd'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-square-fill' viewBox='0 0 16 16'>
<path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z'/>
</svg>
</a>
<a class='btn btn-primary' id='botao' href='edit.php?id=$user_data[id]'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>
</a>


<a>
<a href='delete.php?id=$user_data[id]' class='btn btn-primary' id='botaolixeira'>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' id ='botaolixeira' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</a>



</td>";



echo "<td>";

}

?>
</table>

</div>
</body>
</html>

</div>

