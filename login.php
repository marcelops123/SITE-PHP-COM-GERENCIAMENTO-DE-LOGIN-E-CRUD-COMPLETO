<!DOCTYPE html>
<html lang="pt-br">
<head>
    

    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
font-family:  'Arial Rounded MT Bold', "Helvetica Rounded", Arial, sans-serif;
background-image: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
border-radius: 50%;
background-size: 300% 300%;
animation: colors 25s ease infinite;
height: 100vh;
width: 100vw;
padding: 0%;
margin: 0%
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
        div{
background-color: rgba(0, 0, 0, 0.5);
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
padding: 70px;
border-radius: 20px;
color: white;
}
.inputsubmit{
padding: 10px;
border:none;
outline:none ;
max-width: 100%;
-moz-transition: all 0.3s;
-webkit-transition: all 0.3s;
transition: all 0.3s;
}
.inputsubmit:hover{
-moz-transform: scale(1.1);
-webkit-transform: scale(1.1);
transform: scale(1.1);
}

.inputsubmit{
background-image: linear-gradient(to right, blue, red);
animation: colors 20s ease infinite;
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
cursor: pointer;
margin-top: 5px;
}
#sla{
background: #090979;
padding: 20px;
color: white;
font-size: 20px;
cursor: pointer;
border-radius: 12px;
box-sizing: border-box;
text-decoration: none;
line-height: 100px;
margin: 50px;
cursor: pointer;
max-width: 100%;
-moz-transition: all 0.3s;
-webkit-transition: all 0.3s;
transition: all 0.3s;
}

#sla:hover{
-moz-transform: scale(1.1);
-webkit-transform: scale(1.1);
transform: scale(1.1);
}

.lds-ring {
  display: inline-block;
  position: relative;
  width: 10px;
  height: -30px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin: 4%;
  border: 8px solid #fff;
  border-radius:50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #fff transparent transparent transparent;
  top: 90px;
right: 70px;
    
}



@-webkit-keyframes load3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes load3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
#email{
width: 270px;
margin-left: 20px;
margin-top: 35px;

}
#senha{
    width: 270px;
    margin-left: 20px;

  }

#login{
text-align: center;
margin-top: -50px;
color: #00ffff;
}

</style>
</head>
<body>
   

    </script>
    <a id ='sla' href="home.php">Voltar</a>
    <div>
        <h1 id="login">Login</h1>
        <form action="testLogin.php" method="POST">
        <input type ="text" id="email" name="email" placeholder="Email">&nbsp&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z"/>
</svg>
        <br>
        
        <br>
        <input type="password" id="senha" name="senha" placeholder="Senha">&nbsp&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
        <br>
        <br>
        <br>
      <input class ="inputsubmit" type="submit"  name="submit" value="Enviar">
      
        </form>
    </div>
    
</body>
</html>
<script>
</script>
   
</style>





</script>   