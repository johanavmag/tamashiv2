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
			<div class="container-fluid">
				<div class="row mrgn">
					<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
						<h1>¡Hemos recibido tu opinión satisfactoriamente!</h1> 
						<h3> Seguiremos trabajando para ofrecerte el mejor servicio y la más alta calidad en los productos que tu tanto prefieres</h3>
					</div>
				</div>
			</div>
		</section>
<?php
	$nombre = $_POST["nombre"];
	$correo = $_POST["email"];
	$contenido = $_POST["mensaje"];

	$para = "tamashipruebaweb@gmail.com";
	$asunto = "Contacto Tamashi";
	
	$mensaje = "
	Nombre del remitente: ".$nombre."
	Correo: ".$correo."
	Comentario: ".$contenido."
	";

	$header  = 'From: ' . $correo . " \r\n"; 
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	
	//mail ($para,$asunto,$mensaje,$header);
?>

</body>
</html>