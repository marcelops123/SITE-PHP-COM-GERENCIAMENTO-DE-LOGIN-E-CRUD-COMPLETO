<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
  Spice up your type with CSS
  <span>
    Animated text fill
  </span>
  &mdash; no JavaScript required &mdash;
</p>
<style>
    body { font: 400 1em/1.5 "Neuton"; background: #090d00; color: rgba(255,255,255,.25); text-align: center; margin: 0 }
p {
	text-transform: uppercase;
	letter-spacing: .5em;
	display: inline-block;
	border: 4px double rgba(255,255,255,.25);
	border-width: 4px 0;
	padding: 1.5em 0em;
	position: absolute;
	top: 18%;
	left: 50%;
	width: 40em;
	margin: 0 0 0 -20em;
}
  
  span {

  	font: 700 4em/1 "Oswald", sans-serif;
  	letter-spacing: 0;
  	padding: .25em 0 .325em;
	  display: block;
	  margin: 0 auto;
  	text-shadow: 0 0 80px rgba(255,255,255,.5);


      background: url(https://i.ibb.co/RDTnNrT/animated-text-fill.png) repeat-y;
	  -webkit-background-clip: text;
	  background-clip: text;


      -webkit-text-fill-color: transparent;
	  -webkit-animation: aitf 80s linear infinite;



	  -webkit-transform: translate3d(0,0,0);
	  -webkit-backface-visibility: hidden;
    }




@-webkit-keyframes aitf {
	0% { background-position: 0% 50%; }
	100% { background-position: 100% 50%; }
}


</style>
</body>
</html>