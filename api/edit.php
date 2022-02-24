<?php

if(!empty($_GET['id']))
{

include_once('config.php');

$id = $_GET['id'];
$sqlSelect = "SELECT * FROM user WHERE id=$id";
$result = $conexao->query($sqlSelect);

if($result->num_rows > 0)
{
    while($user_data = mysqli_fetch_assoc($result))
    {
    $nome = ($user_data['nome']);
    $email = ($user_data['email']);
    $senha = ($user_data['senha']);
    $telefone = ($user_data['telefone']);
    $genero = ($user_data['genero']);
    $data_nasc =  ($user_data['data_nasc']);
    $estado = ($user_data['estado']);
    $cidade = ($user_data['cidade']);
    $endereco = ($user_data['endereco']);
    }
        
}
else
{
    header('Location: sistema.php');
}

}

else
{
    header('Location: sistema.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<link>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|Formulário|</title>
    <style>
body {
font-family:  'Arial Rounded MT Bold', "Helvetica Rounded", Arial, sans-serif;
background-image: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
border-radius: 50%;
background-size: 300% 300%;
animation: colors 10s ease infinite;
height: 100vh;
width: 100vw;
padding: 0%;
margin: 0%


 }@keyframes colors {
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
  
.box {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: rgba(0, 0, 0, 0.7);
padding: 15px;
border-radius: 15px;
width: 20%;
color: white;

}
fieldset {
border: 3px solid dodgerblue;
}
legend {
border: 1px solid dodgerblue;
padding: 10px;
text-align: center;
background-color: dodgerblue;
border-radius: 8px;
}
.inputBox {
    position: relative;
    }
.inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 1.5px;
    }
    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }
    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput {
top: -20px;
font-size: 12px;
color: dodgerblue;

}
#data_nascimento{
border: none;
padding: 8px;
border-radius: 10px;
outline: none;
font-size: 15px;

}
#update {
background-image: linear-gradient(to right, blue, red);
animation: colors 15s ease infinite;
background-size: 300% 300%;
width: 100%;
border: none;
padding: 15px;
color: white;
font-size: 15px;
cursor: pointer;
border-radius: 10px;
box-sizing: border-box;
transition: all 400ms ease;
text-align: center;
}
#sla{
background: rgb(2,0,36);

animation: colors 15s ease infinite;
background-size: 150% 150%;
border: none;
padding: 20px;
color: white;
font-size: 20px;
cursor: pointer;
border-radius: 12px;
box-sizing: border-box;
transition: all 400ms ease;
outline: none;
position: relative;
text-decoration: none;
line-height: 100px;
margin: 50px;
}

</style>
</head>
<body>
<a id ='sla' href="sistema.php">Voltar</a>
    <div class="box">
     <form action ="saveEdit.php" method="POST">
         
    <fieldset>
        
<legend><b>FORMULÁRIO DE CLIENTES</b></legend>
    <br>
    <div class="inputBox">
<input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
<label for ="nome" class= "labelInput">Nome completo</label>
</div>
<br><br>
     <div class="inputBox">
    <input type="txt" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
    <label for ="nome" class= "labelInput">Email</label>
</div>
<br><br>
<div class="inputBox">
    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
    <label for ="nome" class= "labelInput">Senha</label>
</div>
<br><br>
     
    <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser"  value="<?php echo $telefone ?>"required>
        <label for ="nome" class= "labelInput">Telefone</label>
        <br>
        <br>



    </div>
<p>Sexo: </p>

<input type="radio" name="genero" id="masculino" value="Masculino" <?php  echo $genero == 'Masculino' ? 'checked' : '' ?> required>
<label for="masculino">Masculino</label>
<br>

<div class="inputBox"></div>

<input type="radio" name="genero" id="feminino" value="Feminino" <?php echo $genero == 'Feminino' ? 'checked' : '' ?> required>
<label for="feminino">Feminino</label>
<br>

<div class="inputBox"></div>

<input type="radio" name="genero" id="outro" value="Outro" <?php echo $genero == 'Outro' ? 'checked' : '' ?> required>
<label for="outro">Outro</label>
<br>


<div class="inputBox">
    <br>
    <br>
   
    <label for ="data_nascimento"><b>Data de nascimento:</b></label>
    <br>
    <br>

    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"  required>

    <br>
    <br>
    <br>

    <div class="inputBox"></div>

    <div class="inputBox">
        
    <div class="inputBox">
    <input type="txt" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
    <label for ="nome" class= "labelInput">Estado</label>
       </div>
        <br>
        <br>
        <br>

    <div class="inputBox">
        <input type="text" name="cidade" id="cidade" class="inputUser"  value="<?php echo $cidade ?>"required>
        <label for ="cidade" class= "labelInput">Cidade</label>
        <br>
        <br>
        <br>


        <div class="inputBox">
            <input type="text" name="endereco" id="endereco" class="inputUser"  value="<?php echo $endereco ?>"required>
            <label for ="nome" class= "labelInput">Endereço</label>
            <br>
            <br>
            <br>

            <div class="inputBox">
        </div>
        <input type="hidden" name="id" value="<?php echo $id  ?>">
        <input type ="submit" name="update" id="update" value="Enviar">
            

    
        </fieldset>
    
    
    
    

     </form>


    </div>
    
</body>

</html>
