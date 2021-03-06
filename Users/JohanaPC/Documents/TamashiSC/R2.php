<!DOCTYPE html>
<html>
<head>
	<title>Confirmación</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="image/favicon.png" type="image/png">
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/elegant-fonts.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/respuesta.css">
	<link rel="stylesheet" type="text/css" href="css/queries.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="icon" href="img/logo-trans.png">
</head>
	<body>
		<header>
			<section id="top-log">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-sm-4 col-xs-2"></div>
						<div class="col-lg-4 col-sm-4 col-xs-8">
							<a href="index.html"><img class="logo" src="img/logo.png"></a>
						</div>
						<div class="col-lg-4 col-sm-4 col-xs-2"></div>
					</div>
				</div>
			</section>
		</header>
				<section>
			<div class="container">
<?php
session_start(); //esta linea tiene que ir antes de cualquier cosa, incluso de espacios 
ob_start(); 

$para =$_SESSION["parax"];
$asunto =$_SESSION["asuntox"];
$mensaje =$_SESSION["mensajex"];
$header=$_SESSION["headerx"];

mail ($para,$asunto,$mensaje,$header);
	?>
		</div>
		</section>
		<section>
			<div class="container-fluid">
				<div class="row mrgn">
					<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
						<h1>¡Hemos recibido tu orden satisfactoriamente!</h1> <h1> En breve nos comunicaremos contigo via Whatsapp ó correo electronico</h1>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>