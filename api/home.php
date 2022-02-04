<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<div id="three-container"></div>

<div id="instructions">
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/three.js/r75/three.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/bas.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/TextGeometry.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/FontUtils.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/pnltri.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/175711/droid_sans_bold.typeface.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SITE</title>
<style>

  /*
  */
  
  body{
	margin:0;
	padding:0;
	font-family:"arial",heletica,sans-serif;
	font-size:12px;
    background: #2980b9 url('https://static.tumblr.com/03fbbc566b081016810402488936fbae/pqpk3dn/MRSmlzpj3/tumblr_static_bg3.png') repeat 0 0;
	-webkit-animation: 10s linear 0s normal none infinite animate;
	-moz-animation: 10s linear 0s normal none infinite animate;
	-ms-animation: 10s linear 0s normal none infinite animate;
	-o-animation: 10s linear 0s normal none infinite animate;
	animation: 10s linear 0s normal none infinite animate;
 
}
 
@-webkit-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@-moz-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@-ms-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@-o-keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
}
 
@keyframes animate {
	from {background-position:0 0;}
	to {background-position: 500px 0;}
} 

p {
	text-transform: uppercase;
	letter-spacing: .5em;
	display: inline-;
	border: 4px double ba(255,255,255,.25);
	border-width: 4px 0;
	padding: 1.5em 0em;
	position: absolute;
	top: 18%;
	left: 50%;
	width: 40em;
	margin: 0 0 0 -20em;
}
  
  span {

  	font: 700 3.5em/1 "Oswald", sans-serif;
  	letter-spacing: 0;
  	padding: .20em 0 .32  5em;
	  display: block;
	  margin: 0 auto;
  	text-shadow: 0 0 80px rgba(255,255,255,255);


    background: url(https://i.ibb.co/RDTnNrT/animated-text-fill.png) repeat-y;
	  -webkit-background-clip: text;
	  background-clip: text;


      -webkit-text-fill-color: transparent;
	    -webkit-animation: aitf 100s linear infinite;



	  -webkit-transform: translate3d(0,0,0);
	  -webkit-backface-visibility: hidden;
    }
    body {
  margin: 0;
  overflow: hidden;
}

#instructions {
  position: absolute;
  color: #fff;
  bottom: 0;
  padding-bottom: 6px;
  font-family: sans-serif;
  width: 100%;
  text-align: center;
  pointer-events: none;
}




@-webkit-keyframes aitf {
	0% { background-position: 0% 50%; }
	100% { background-position: 100% 50%; }
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
.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0);
    padding: 35px;
    border-radius: 18px;
}
a{
text-decoration: none;
color: white;
border: 3px ;
background-color: rgba(0, 0, 0, 0.1);
padding: 10px;
border-radius: 10px;
max-width: 100%;
-moz-transition: all 0.3s;
-webkit-transition: all 0.3s;
transition: all 0.3s;


}
a:hover{
    background-color: white;
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    
}
h1{
    text-align: center;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    position: absolute;
    top: 200px;
    left: 785px;
}
.lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: -10px;
  height: -10px;
  right: 130px;
  top: 100px;
  
}
.lds-spinner div {
  transform-origin:30px 30px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 1px;
  left: 32px;
  width: 6px;
  height: 15px;
  border-radius: 1%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}


#cd{
  text-decoration-line: none;
  -moz-transition: all 0.6s;
  -webkit-transition: all 0.6s;
   transition: all 0.6s;
   max-width: 100%;
   padding: 18px;
   border-radius: 18px;
   font-family: 'Bebas Neue', cursive;
   font-family: 'Roboto', sans-serif;
   
   
   
}

#cd:hover{
  -moz-transform: scale(1.6);
    -webkit-transform: scale(1.6);
    transform: scale(1.6);
    color: #23A6D5;

}

#log{
  text-decoration-line: none;
  -moz-transition: all 0.6s;
  -webkit-transition: all 0.6s;
   transition: all 0.6s;
   max-width: 100%;
   padding: 18px;
   text-shadow: 0px;
   border-radius: 18px;
   font-family: 'Bebas Neue', cursive;
   font-family: 'Roboto', sans-serif;
   
}

#log:hover{
    -moz-transform: scale(1.6);
    -webkit-transform: scale(1.6);
    transform: scale(1.6);
    color: #23A6D5;
 
  }


.sk-cube-grid {
  width: 45px;
  height: 45px;
  margin: 100px auto;
}

.sk-cube-grid .sk-cube {
  width: 33%;
  height: 33%;
  background-color: #363636	;
  float: left;
  -webkit-animation: sk-cubeGridScaleDelay 1.8s infinite ease-in-out;
          animation: sk-cubeGridScaleDelay 1.8s infinite ease-in-out; 
}
.sk-cube-grid .sk-cube1 {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s; }
.sk-cube-grid .sk-cube2 {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s; }
.sk-cube-grid .sk-cube3 {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s; }
.sk-cube-grid .sk-cube4 {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s; }
.sk-cube-grid .sk-cube5 {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s; }
.sk-cube-grid .sk-cube6 {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s; }
.sk-cube-grid .sk-cube7 {
  -webkit-animation-delay: 0s;
          animation-delay: 0s; }
.sk-cube-grid .sk-cube8 {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s; }
.sk-cube-grid .sk-cube9 {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s; }

@-webkit-keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    -webkit-transform: scale3D(1, 1, 1);
            transform: scale3D(1, 1, 1);
  } 35% {
    -webkit-transform: scale3D(0, 0, 1);
            transform: scale3D(0, 0, 1); 
  }
}

@keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    -webkit-transform: scale3D(1, 1, 1);
            transform: scale3D(1, 1, 1);
  } 35% {
    -webkit-transform: scale3D(0, 0, 1);
            transform: scale3D(0, 0, 1);
  } 
}

#cube{
margin-top: 550px;  
margin-left: 960px;
display: inline-block;
position: relative;
}

#sbv{
  position: absolute;
    top: 18%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0);
    padding: 30px;
    border-radius: 18px;
}
#marcelin{
font-size: 18px;
color: rgb(255, 0, 0);
padding: 20px;
font-family: 'Bebas Neue', cursive;
font-family: 'Roboto', sans-serif;
}


.Iam {
  
  padding: 1em 11em;
  font: normal 40px/50px Montserrat, sans-serif;
  color: #999;
  margin-top: -95px

}
.Iam p {
  height: 50px;
  float: left;
  margin-right: 0.3em;
  margin-top: 450px;
  margin-left: -900px
}
.Iam b {
  float: left;
  overflow: hidden;
  position: relative;
  height: 50px;
  top: 40px;
}
.Iam .innerIam {
  display: inline-block;
  color: #e74c3c;
  position: relative;
  white-space: nowrap;
  top: 0;
  left: 0;


/*animation*/
-webkit-animation:move 5s;
   -moz-animation:move 5s;
    -ms-animation:move 5s;
     -o-animation:move 5s;
        animation:move 5s;
/*animation-iteration-count*/
-webkit-animation-iteration-count:infinite;
   -moz-animation-iteration-count:infinite;
    -ms-animation-iteration-count:infinite;
     -o-animation-iteration-count:infinite;
        animation-iteration-count:infinite;
/*animation-delay*/
-webkit-animation-delay:1s;
   -moz-animation-delay:1s;
    -ms-animation-delay:1s;
     -o-animation-delay:1s;
        animation-delay:1s;
}
@keyframes move{
0%  { top: 0px; }
20% { top: -50px; }
40% { top: -100px; }
60% { top: -150px; }
80% { top: -200px; }
}

@-webkit-keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
@-moz-keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
@-o-keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}
@keyframes move {
    0%  { top: 0px; }
    20% { top: -50px; }
    40% { top: -100px; }
    60% { top: -150px; }
    80% { top: -200px; }
}

</style>
</head>
<body>
<p id="marcelin">
  MEU SITE
  <span>
    SEJA BEM VINDO!
  </span>
  &mdash; by: Marcelin&mdash;
</p>

<div class="box">
<a id ='log' href="login.php">Login</a>
 <svg xmlns="http://www.w3.org/2000/svg" id="login" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
 
&nbsp <a id="cd" href="formulario.php">&nbspCadastre-se</a>
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
</div>
</div>
<div id ="cube" class="sk-cube-grid">
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="sk-cube sk-cube1"></div>
  <div class="sk-cube sk-cube2"></div>
  <div class="sk-cube sk-cube3"></div>
  <div class="sk-cube sk-cube4"></div>
  <div class="sk-cube sk-cube5"></div>
  <div class="sk-cube sk-cube6"></div>
  <div class="sk-cube sk-cube7"></div>
  <div class="sk-cube sk-cube8"></div>
  <div class="sk-cube sk-cube9"></div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="Iam">

<p>Site beta</p>
<b>
  <div class="innerIam">
    em desenvolvimento<br /> 
    em progresso<br />
    feito em PHP<br />
    para treinamento<br />
    por: Marcelin
    </div>
</b>

</div>
</body>
</html>

  

    

