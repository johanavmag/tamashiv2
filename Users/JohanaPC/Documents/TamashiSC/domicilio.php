<!doctype html>
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
	<link rel="stylesheet" type="text/css" href="css/confirmacion.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
						<h1>Tamashi a domicilio</h1>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
<?php
	//////////  CARTA	/////////
	
	session_start();
	
	///Menú Corrido///
	$cmenu = $_POST["CMCorrido"];
	$pmenu=$cmenu*60;
	if(isset($_POST["MCorrido"]) && $cmenu >0)
	{$menu="<br>"."Nombre del Producto: Menú Corrido"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmenu."&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmenu;}
	else{$menu='';}
	//////////////////
	
	///////Rolls//////
	$cfrutal = $_POST["CR-Frutal"];
	$pfrutal=$cfrutal*35;
	if(isset($_POST["R-Frutal"]) && $cfrutal >0)
	{$frutal="<br>"." Nombre del Producto: Roll Frutal 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cfrutal." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pfrutal;}
	else{$frutal='';}

	$ccalifornia = $_POST["CR-California"];
	$pcalifornia=$ccalifornia*40;
	if(isset($_POST["R-California"]) && $ccalifornia >0)
	{$california="<br>"." Nombre del Producto: Roll California 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccalifornia." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcalifornia;}
	else{$california='';}
	
	$caguacate = $_POST["CR-Aguacate"];
	$paguacate=$caguacate*50;
	if(isset($_POST["R-Aguacate"]) && $caguacate >0)
	{$aguacate="<br>"." Nombre del Producto: Roll de Aguacate 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$caguacate." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$paguacate;}
	else{$aguacate='';}	
	
	$csudaremaki = $_POST["CR-Sudaremaki"];
	$psudaremaki=$csudaremaki*50;
	if(isset($_POST["R-Sudaremaki"]) && $csudaremaki >0)
	{$sudaremaki="<br>"." Nombre del Producto: Roll Sudaremaki 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$csudaremaki." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$psudaremaki;}
	else{$sudaremaki='';}
	
	$cqueso = $_POST["CR-Queso"];
	$pqueso=$cqueso*50;
	if(isset($_POST["R-Queso"]) && $cqueso >0)
	{$queso="<br>"." Nombre del Producto: Roll de Queso 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cqueso." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pqueso;}
	else{$queso='';}
	
	$ctampico = $_POST["CR-Tampico"];
	$ptampico=$ctampico*40;
	if(isset($_POST["R-Tampico"]) && $ctampico >0)
	{$tampico="<br>"." Nombre del Producto: Roll Tampico 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ctampico." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ptampico;}
	else{$tampico='';}
	
	$cmasago = $_POST["CR-Masago"];
	$pmasago=$cmasago*50;
	if(isset($_POST["R-Masago"]) && $cmenu >0)
	{$masago="<br>"." Nombre del Producto: Roll Masago 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmasago." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmasago;}
	else{$masago='';}
    //////////////////
	
	//Special Rolls///
	$cpine = $_POST["CS-Pine"];
	$ppine=$cpine*55;
	if(isset($_POST["R-Pine"]) && $cpine >0)
	{$pine="<br>"." Nombre del Producto: Roll Special Pine 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cpine." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ppine;}
	else{$pine='';}

	$cquesomaxi = $_POST["CS-QMaxi"];
	$pquesomaxi=$cquesomaxi*60;
	if(isset($_POST["S-QMaxi"]) && $cquesomaxi >0)
	{$quesomaxi="<br>"." Nombre del Producto: Roll Special Queso Maxi 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cquesomaxi." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pquesomaxi;}
	else{$quesomaxi='';}
	
	$cspicy = $_POST["CS-Spicy"];
	$pspicy=$cspicy*70;
	if(isset($_POST["S-Spicy"]) && $cspicy >0)
	{$spicy="<br>"." Nombre del Producto: Roll Special Spicy 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cspicy." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pspicy;}
	else{$spicy='';}
	
	$cmango = $_POST["CS-Mango"];
	$pmango=$cmango*55;
	if(isset($_POST["S-Mango"]) && $cmango >0)
	{$mango="<br>"." Nombre del Producto: Roll Special de Mango 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmango." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmango;}
	else{$mango='';}
	
	$ctornado = $_POST["CS-Tornado"];
	$ptornado=$ctornado*60;
	if(isset($_POST["S-Tornado"]) && $ctornado >0)
	{$tornado="<br>"." Nombre del Producto: Roll Special Tornado 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ctornado." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ptornado;}
	else{$tornado='';}
	
	$cebi = $_POST["CS-Ebi"];
	$pebi=$cebi*55;
	if(isset($_POST["S-Ebi"]) && $cebi >0)
	{$ebi="<br>"." Nombre del Producto: Roll Special Ebi 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cebi." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pebi;}
	else{$ebi='';}
	
	$cstampico = $_POST["CS-Tampico"];
	$pstampico=$cstampico*55;
	if(isset($_POST["S-Tampico"]) && $cstampico >0)
	{$stampico="<br>"." Nombre del Producto: Roll Special Tampico 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cstampico." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pstampico;}
	else{$stampico='';}
	
	$cdragon = $_POST["CS-Dragon"];
	$pdragon=$cdragon*55;
	if(isset($_POST["S-Dragon"]) && $cdragon >0)
	{$dragon="<br>"." Nombre del Producto: Roll Special Dragon 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cdragon." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pdragon;}
	else{$dragon='';}
	
	$cotoñito = $_POST["CS-Otoñito"];
	$potoñito=$cotoñito*55;
	if(isset($_POST["S-Otoñito"]) && $cotoñito >0)
	{$otoñito="<br>"." Nombre del Producto: Roll Special Otoñito 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cotoñito." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$potoñito;}
	else{$otoñito='';}
	//////////////////
	
	/////Tepanyaki////
	$ctepanyaki = $_POST["CTepanyaki"];
	$ptepanyaki=$ctepanyaki*40;
	if(isset($_POST["Tepanyaki"]) && $ctepanyaki >0)
	{$tepanyaki="<br>"." Nombre del Producto: Tepanyaki 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ctepanyaki." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ptepanyaki;}
	else{$tepanyaki='';}

	$ctepanyakires = $_POST["CTepanyaki-Res"];
	$ptepanyakires=$ctepanyakires*45;
	if(isset($_POST["Tepanyaki-Res"]) && $ctepanyakires >0)
	{$tepanyakires="<br>"." Nombre del Producto: Tepanyaki de Res	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ctepanyakires." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ptepanyakires;}
	else{$tepanyakires='';}
	
	$ctepanyakipollo = $_POST["CTepanyaki-Pollo"];
	$ptepanyakipollo=$ctepanyakipollo*45;
	if(isset($_POST["Tepanyaki-Pollo"]) && $ctepanyakipollo >0)
	{$tepanyakipollo="<br>"." Nombre del Producto: Tepanyaki de Pollo	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ctepanyakipollo." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ptepanyakipollo;}
	else{$tepanyakipollo='';}	
	
	$ctepanyakimixto = $_POST["CTepanyaki-Mixto"];
	$ptepanyakimixto=$ctepanyakimixto*55;
	if(isset($_POST["Tepanyaki-Mixto"]) && $ctepanyakimixto >0)
	{$tepanyakimixto="<br>"." Nombre del Producto: Tepanyaki Mixto	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ctepanyakimixto." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ptepanyakimixto;}
	else{$tepanyakimixto='';}
	//////////////////
	
	//////Yakitori////
	$cyakitoripollo = $_POST["CYakitori-Pollo"];
	$pyakitoripollo=$cyakitoripollo*15;
	if(isset($_POST["Yakitori-Pollo"]) && $cyakitoripollo >0)
	{$yakitoripollo="<br>"." Nombre del Producto: Yakitori de Pollo 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakitoripollo." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakitoripollo;}
	else{$yakitoripollo='';}

	$cyakitoriopollo = $_POST["CYakitoriO-Pollo"];
	$pyakitoriopollo=$cyakitoriopollo*40;
	if(isset($_POST["YakitoriO-Pollo"]) && $cyakitoriopollo >0)
	{$yakitoriopollo="<br>"." Nombre del Producto: Orden de Yakitori de Pollo 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakitoriopollo." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakitoriopollo;}
	else{$yakitoriopollo='';}
	
	$cyakitorires = $_POST["CYakitori-Res"];
	$pyakitorires=$cyakitorires*15;
	if(isset($_POST["Yakitori-Res"]) && $cyakitorires >0)
	{$yakitorires="<br>"." Nombre del Producto: Yakitori de Res 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakitorires." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakitorires;}
	else{$yakitorires='';}
	
	$cyakitoriores = $_POST["CYakitoriO-Res"];
	$pyakitoriores=$cyakitorires*40;
	if(isset($_POST["YakitoriO-Res"]) && $cyakitorires >0)
	{$yakitoriores="<br>"." Nombre del Producto: Orden de Yakitori de Res 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakitoriores." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakitoriores;}
	else{$yakitoriores='';}
	//////////////////
	
	//////Kakiage/////
	$ckakiage = $_POST["CKakiage"];
	$pkakiage=$ckakiage*30;
	if(isset($_POST["Kakiage"]) && $ckakiage >0)
	{$kakiage="<br>"." Nombre del Producto: Kakiage 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckakiage." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkakiage;}
	else{$kakiage='';}

	$ckakiageres = $_POST["CKakiage-Res"];
	$pkakiageres=$ckakiageres*45;
	if(isset($_POST["Kakiage-Res"]) && $ckakiageres >0)
	{$kakiageres="<br>"." Nombre del Producto: Kakiage de Res	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckakiageres." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkakiageres;}
	else{$kakiageres='';}
	//////////////////
	
	/////Kushiague////
	$ckushiaguequeso = $_POST["CKushiague-Queso"];
	$pkushiaguequeso=$ckushiaguequeso*11;
	if(isset($_POST["Kushiague-Queso"]) && $ckushiaguequeso >0)
	{$kushiaguequeso="<br>"." Nombre del Producto: Kushiague de Queso 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckushiaguequeso." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkushiaguequeso;}
	else{$kushiaguequeso='';}

	$ckushiagueoqueso = $_POST["CKushiagueO-Queso"];
	$pkushiagueoqueso=$ckushiagueoqueso*30;
	if(isset($_POST["KushiagueO-Queso"]) && $ckushiagueoqueso >0)
	{$kushiagueoqueso="<br>"." Nombre del Producto: Orden de Kushiague de Queso 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckushiagueoqueso." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkushiagueoqueso;}
	else{$kushiagueoqueso='';}
	
	$ckushiaguecamaron = $_POST["CKushiague-Camaron"];
	$pkushiaguecamaron=$ckushiaguecamaron*15;
	if(isset($_POST["kushiague-Camaron"]) && $ckushiaguecamaron >0)
	{$kushiaguecamaron="<br>"." Nombre del Producto: Kushiague de Camarón 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckushiaguecamaron." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkushiaguecamaron;}
	else{$kushiaguecamaron='';}
	
	$ckushiagueocamaron = $_POST["CKushiagueO-Camaron"];
	$pkushiagueocamaron=$ckushiaguecamaron*40;
	if(isset($_POST["KushiagueO-Camaron"]) && $ckushiaguecamaron >0)
	{$kushiagueocamaron="<br>"." Nombre del Producto: Orden de Kushiague de Camarón 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckushiagueocamaron." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkushiagueocamaron;}
	else{$kushiagueocamaron='';}
	
	$ckushiagueplatano = $_POST["CKushiague-Platano"];
	$pkushiagueplatano=$ckushiagueplatano*7;
	if(isset($_POST["Kushiague-Platano"]) && $ckushiagueplatano >0)
	{$kushiagueplatano="<br>"." Nombre del Producto: Kushiague de Platano 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckushiagueplatano." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkushiagueplatano;}
	else{$kushiagueplatano='';}
	
	$ckushiagueoplatano = $_POST["CKushiagueO-Platano"];
	$pkushiagueoplatano=$ckushiagueplatano*14;
	if(isset($_POST["kushiagueO-Platano"]) && $ckushiagueplatano >0)
	{$kushiagueoplatano="<br>"." Nombre del Producto: Orden de Kushiague de Platano 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ckushiagueoplatano." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pkushiagueoplatano;}
	else{$kushiagueoplatano='';}
	//////////////////
	
	/////Yakimeshi////
	$cyakimeshi = $_POST["CYakimeshi"];
	$pyakimeshi=$cyakimeshi*30;
	if(isset($_POST["Yakimeshi"]) && $cyakimeshi >0)
	{$yakimeshi="<br>"." Nombre del Producto: Yakimeshi 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakimeshi." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakimeshi;}
	else{$yakimeshi='';}
	
	$cyakimeshiajo = $_POST["CYakimeshi-Ajo"];
	$pyakimeshiajo=$cyakimeshiajo*35;
	if(isset($_POST["Yakimeshi-Ajo"]) && $cyakimeshiajo >0)
	{$yakimeshiajo="<br>"." Nombre del Producto: Yakimeshi de ajo	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakimeshiajo." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakimeshiajo;}
	else{$yakimeshiajo='';}

	$cyakimeshires = $_POST["CYakimeshi-Res"];
	$pyakimeshires=$cyakimeshires*40;
	if(isset($_POST["Yakimeshi-Res"]) && $cyakimeshires >0)
	{$yakimeshires="<br>"." Nombre del Producto: Yakimeshi de Res	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakimeshires." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakimeshires;}
	else{$yakimeshires='';}
	
	$cyakimeshipollo = $_POST["CYakimeshi-Pollo"];
	$pyakimeshipollo=$cyakimeshipollo*40;
	if(isset($_POST["Yakimeshi-Pollo"]) && $cyakimeshipollo >0)
	{$yakimeshipollo="<br>"." Nombre del Producto: Yakimeshi de Pollo	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakimeshipollo." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakimeshipollo;}
	else{$yakimeshipollo='';}	
	
	$cyakimeshimixto = $_POST["CYakimeshi-Mixto"];
	$pyakimeshimixto=$cyakimeshimixto*55;
	if(isset($_POST["Yakimeshi-Mixto"]) && $cyakimeshimixto >0)
	{$yakimeshimixto="<br>"." Nombre del Producto: Yakimeshi Mixto	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cyakimeshimixto." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pyakimeshimixto;}
	else{$yakimeshimixto='';}
	//////////////////
	
	//////Extras//////
	$cextrastampico = $_POST["CExtras-Tampico"];
	$pextrastampico=$cextrastampico*15;
	if(isset($_POST["Extras-Tampico"]) && $cextrastampico >0)
	{$extrastampico="<br>"." Nombre del Producto: Salsa Tampico 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cextrastampico." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pextrastampico;}
	else{$extrastampico='';}

	$cextrasanguila = $_POST["CExtras-Anguila"];
	$pextrasanguila=$cextrasanguila*15;
	if(isset($_POST["Extras-Anguila"]) && $cextrasanguila >0)
	{$extrasanguila="<br>"." Nombre del Producto: Salsa de Anguila	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cextrasanguila." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pextrasanguila;}
	else{$extrasanguila='';}
	
	$cextraslimon = $_POST["CExtras-Limon"];
	$pextraslimon=$cextraslimon*10;
	if(isset($_POST["Extras-Limon"]) && $cextraslimon >0)
	{$extraslimon="<br>"." Nombre del Producto: Salsa de Limon	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cextraslimon." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pextraslimon;}
	else{$extraslimon='';}
	//////////////////
	
	//Bebidas Frias///
	$clattehelado = $_POST["CBF-LatteH"];
	$plattehelado=$clattehelado*30;
	if(isset($_POST["BF-LatteH"]) && $clattehelado >0)
	{$lattehelado="<br>"." Nombre del Producto: Latte Helado 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$clattehelado." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$plattehelado;}
	else{$lattehelado='';}
	
	$cmoccahelado = $_POST["CBF-MoccaH"];
	$pmoccahelado=$cmoccahelado*35;
	if(isset($_POST["BF-MoccaH"]) && $cmoccahelado >0)
	{$moccahelado="<br>"." Nombre del Producto: Mocca Helado 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmoccahelado." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmoccahelado;}
	else{$moccahelado='';}	
	
	$cichai = $_POST["CBF-IChai"];
	$pichai=$cichai*35;
	if(isset($_POST["BF-IChai"]) && $cichai >0)
	{$ichai="<br>"." Nombre del Producto: Iced Chai 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cichai." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pichai;}
	else{$ichai='';}
	
	$cvoltage = $_POST["CBF-Voltage"];
	$pvoltage=$cvoltage*40;
	if(isset($_POST["BF-Voltage"]) && $cvoltage >0)
	{$voltage="<br>"." Nombre del Producto: Voltage 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cvoltage." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pvoltage;}
	else{$voltage='';}
	
	$cvvanilla = $_POST["CBF-VVanilla"];
	$pvvanilla=$cvvanilla*40;
	if(isset($_POST["BF-VVanilla"]) && $cvvanilla >0)
	{$vvanilla="<br>"." Nombre del Producto: Very Vanilla 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cvvanilla." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pvvanilla;}
	else{$vvanilla='';}
	
	$cchocolatei = $_POST["CBF-ChocolateI"];
	$pchocolatei=$cchocolatei*35;
	if(isset($_POST["BF-ChocolateI"]) && $cchocolatei >0)
	{$chocolatei="<br>"." Nombre del Producto: Chocolate Iced 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cchocolatei." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pchocolatei;}
	else{$chocolatei='';}
	
	$cblancoi = $_POST["CBF-BlancoI"];
	$pblancoi=$cblancoi*35;
	if(isset($_POST["BF-BlancoI"]) && $cblancoi >0)
	{$blancoi="<br>"." Nombre del Producto: Blanco Iced     "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cblancoi." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pblancoi;}
	else{$blancoi='';}
	
	$ccremeb = $_POST["CBF-CremeB"];
	$pcremeb=$ccremeb*40;
	if(isset($_POST["BF-CremeB"]) && $ccremeb >0)
	{$cremeb="<br>"." Nombre del Producto: Creme Brulee 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccremeb." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcremeb;}
	else{$cremeb='';}
	
	$cfresacocoa = $_POST["CBF-FresaCocoa"];
	$pfresacocoa=$cfresacocoa*35;
	if(isset($_POST["BF-FresaCocoa"]) && $cfresacocoa >0)
	{$fresacocoa="<br>"." Nombre del Producto: Fresa Cocoa 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cfresacocoa." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pfresacocoa;}
	else{$fresacocoa='';}
	
	$cmocharettoi = $_POST["CBF-MocharettoI"];
	$pmocharettoi=$cmocharettoi*35;
	if(isset($_POST["BF-MocharettoI"]) && $cmocharettoi >0)
	{$mocharettoi="<br>"." Nombre del Producto: Mocharetto Iced 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmocharettoi." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmocharettoi;}
	else{$mocharettoi='';}
	
	$ccherryh = $_POST["CBF-CherryH"];
	$pcherryh=$ccherryh*35;
	if(isset($_POST["BF-CherryH"]) && $ccherryh >0)
	{$cherryh="<br>"." Nombre del Producto: Helado Cherry 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccherryh." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcherryh;}
	else{$cherryh='';}
	
	$crefrescos = $_POST["CBF-Refrescos"];
	$prefrescos=$crefrescos*13;
	if(isset($_POST["BF-Refrescos"]) && $crefrescos >0)
	{$refrescos="<br>"." Nombre del Producto: Refrescos 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$crefrescos." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$prefrescos;}
	else{$refrescos='';}
	
	$cnaranjadas = $_POST["CBF-Naranjadas"];
	$pnaranjadas=$cnaranjadas*15;
	if(isset($_POST["BF-Naranjadas"]) && $cnaranjadas >0)
	{$naranjadas="<br>"." Nombre del Producto: Naranjadas 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cnaranjadas." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pnaranjadas;}
	else{$naranjadas='';}
	
	$climonadas = $_POST["CBF-Limonadas"];
	$plimonadas=$climonadas*15;
	if(isset($_POST["BF-Limonadas"]) && $climonadas >0)
	{$limonadas="<br>"." Nombre del Producto: Limonadas 	   "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$climonadas." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$plimonadas;}
	else{$limonadas='';}
	//////////////////
	
	//Bebidas Frias///
	$ccapuccino = $_POST["CBC-Capuccino"];
	$pcapuccino=$ccapuccino*25;
	if(isset($_POST["BC-Capuccino"]) && $ccapuccino >0)
	{$capuccino="<br>"." Nombre del Producto: Capuccino 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccapuccino." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcapuccino;}
	else{$capuccino='';}
	
	$camericano = $_POST["CBC-Americano"];
	$pamericano=$camericano*15;
	if(isset($_POST["BC-Americano"]) && $camericano >0)
	{$americano="<br>"." Nombre del Producto: Americano 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$camericano." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pamericano;}
	else{$americano='';}
	
	$cespresso = $_POST["CBC-Espresso"];
	$pespresso=$cespresso*17;
	if(isset($_POST["BC-Espresso"]) && $cespresso >0)
	{$espresso="<br>"." Nombre del Producto: espresso 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cespresso." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pespresso;}
	else{$espresso='';}
	
	$cmacchiato = $_POST["CBC-Macchiato"];
	$pmacchiato=$cmacchiato*18;
	if(isset($_POST["BC-Macchiato"]) && $cmacchiato >0)
	{$macchiato="<br>"." Nombre del Producto: Macchiato 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmacchiato." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmacchiato;}
	else{$macchiato='';}
	
	$cchialatte = $_POST["CBC-ChiaLatte"];
	$pchialatte=$cchialatte*28;
	if(isset($_POST["BC-ChiaLatte"]) && $cchialatte >0)
	{$chialatte="<br>"." Nombre del Producto: Chia Latte 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cchialatte." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pchialatte;}
	else{$chialatte='';}
	
	$cchocolate = $_POST["CBC-Chocolate"];
	$pchocolate=$cchocolate*25;
	if(isset($_POST["BC-Chocolate"]) && $cchocolate >0)
	{$chocolate="<br>"." Nombre del Producto: Chocolate 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cchocolate." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pchocolate;}
	else{$chocolate='';}
	
	$cchocoblanco = $_POST["CBC-ChocoBlanco"];
	$pchocoblanco=$cchocoblanco*25;
	if(isset($_POST["BC-ChocoBlanco"]) && $cchocoblanco >0)
	{$chocoblanco="<br>"." Nombre del Producto: Chocolate Blanco 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cchocoblanco." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pchocoblanco;}
	else{$chocoblanco='';}
	
	$ccocoa = $_POST["CBC-Cocoa"];
	$pcocoa=$ccocoa*25;
	if(isset($_POST["BC-Cocoa"]) && $ccocoa >0)
	{$cocoa="<br>"." Nombre del Producto: Cocoa 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccocoa." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcocoa;}
	else{$cocoa='';}
	
	$ccaramelate = $_POST["CBC-Caramelate"];
	$pcaramelate=$ccaramelate*30;
	if(isset($_POST["BC-Caramelate"]) && $ccaramelate >0)
	{$caramelate="<br>"." Nombre del Producto: Caramelate 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccaramelate." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcaramelate;}
	else{$caramelate='';}
	
	$cmoccab = $_POST["CBC-MoccaB"];
	$pmoccab=$cmoccab*30;
	if(isset($_POST["BC-MoccaB"]) && $cmoccab >0)
	{$moccab="<br>"." Nombre del Producto: Mocca Blanco 	  "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmoccab." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmoccab;}
	else{$moccab='';}
	
	$chotmus = $_POST["CBC-HotMus"];
	$photmus=$chotmus*35;
	if(isset($_POST["BC-HotMus"]) && $chotmus >0)
	{$hotmus="<br>"." Nombre del Producto: Hot Mudslide Mocca 	  "."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$chotmus." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$photmus;}
	else{$hotmus='';}	
	
	$cveryv = $_POST["CBC-VeryV"];
	$pveryv=$cveryv*30;
	if(isset($_POST["BC-VeryV"]) && $cveryv >0)
	{$veryv="<br>"." Nombre del Producto: Very Vainilla  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cveryv." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pveryv;}
	else{$veryv='';}
	
	$cmonchery = $_POST["CBC-MonChery"];
	$pmonchery=$cmonchery*35;
	if(isset($_POST["BC-MonChery"]) && $cmonchery >0)
	{$monchery="<br>"." Nombre del Producto: Mon Chery  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmonchery." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmonchery;}
	else{$monchery='';}
	
	$cstrawberry = $_POST["CBC-Strawberry"];
	$pstrawberry=$cstrawberry*25;
	if(isset($_POST["BC-Strawberry"]) && $cstrawberry >0)
	{$strawberry="<br>"." Nombre del Producto: Strawberry  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cstrawberry." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pstrawberry;}
	else{$strawberry='';}
	
	$cchery = $_POST["CBC-Chery"];
	$pchery=$cchery*25;
	if(isset($_POST["BC-Chery"]) && $cchery >0)
	{$chery="<br>"." Nombre del Producto: Chery  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cchery." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pchery;}
	else{$chery='';}
	
	$cvainilla = $_POST["CBC-Vainilla"];
	$pvainilla=$cvainilla*25;
	if(isset($_POST["BC-Vainilla"]) && $cvainilla >0)
	{$vainilla="<br>"." Nombre del Producto: Vainilla  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cvainilla." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pvainilla;}
	else{$vainilla='';}
	
	$cmocharetto = $_POST["CBC-Mocharetto"];
	$pmocharetto=$cmocharetto*25;
	if(isset($_POST["BC-Mocharetto"]) && $cmocharetto >0)
	{$mocharetto="<br>"." Nombre del Producto: Mocharetto  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cmocharetto." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pmocharetto;}
	else{$mocharetto='';}
	
	$ccoffealm = $_POST["CBC-CoffeAlm"];
	$pcoffealm=$ccoffealm*25;
	if(isset($_POST["BC-CoffeAlm"]) && $ccoffealm >0)
	{$coffealm="<br>"." Nombre del Producto: Coffe Almendrada  	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$ccoffealm." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$pcoffealm;}
	else{$coffealm='';}	
	//////////////////
	
	/////Postres/////
	$cpostretempura = $_POST["CPostre-Tempura"];
	$ppostretempura=$cpostretempura*35;
	if(isset($_POST["Postre-Tempura"]) && $cpostretempura >0)
	{$postretempura="<br>"." Nombre del Producto: Postre Tempura 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cpostretempura." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ppostretempura;}
	else{$postretempura='';}
	
	$cpostrebanana = $_POST["CPostre-Banana"];
	$ppostrebanana=$cpostrebanana*25;
	if(isset($_POST["Postre-Banana"]) && $cpostrebanana >0)
	{$postrebanana="<br>"." Nombre del Producto: <br>"."&nbsp; &nbsp; &nbsp; &nbsp;"."Postre Banana 	"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cpostrebanana." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ppostrebanana;}
	else{$postrebanana='';}
	
	$cpostrehelado = $_POST["CPostre-Helado"];
	$ppostrehelado=$cpostrehelado*15;
	if(isset($_POST["Postre-Helado"]) && $cpostrehelado >0)
	{$postrehelado="<br>"." Nombre del Producto: Postre Helado"."&nbsp; &nbsp; &nbsp; &nbsp;"."Cantidad: ".$cpostrehelado." 	&nbsp; &nbsp; &nbsp; &nbsp;"."Precio: ".$ppostrehelado;}
    else{$postrehelado='';}
	////////////////////////////
    
	$nombre = $_POST["nombre"];
	$correo = $_POST["email"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];
    $para = "tamashipruebaweb@gmail.com";
	$asunto = "Orden Tamashi";
	$total = $pmenu+$pfrutal+$pcalifornia+$paguacate+$psudaremaki+$pqueso+$ptampico+$pmasago+$ppine+$pquesomaxi+$pspicy+$pmango+$ptornado+$pebi+$pstampico+$pdragon+$potoñito+$ptepanyaki+$ptepanyakires
	+$ptepanyakipollo+$ptepanyakimixto+$pyakitoripollo+$pyakitoriopollo+$pyakitorires+$pyakitoriores+$pkakiage+$pkakiageres+$pkushiaguequeso+$pkushiagueoqueso
	+$pkushiaguecamaron+$pkushiagueocamaron+$pkushiagueplatano+$pkushiagueoplatano+$pyakimeshi+$pyakimeshiajo+$pyakimeshires+$pyakimeshipollo+$pyakimeshimixto
	+$pextrastampico+$pextrasanguila+$pextraslimon+$plattehelado+$pmoccahelado+$pichai+$pvoltage+$pvvanilla+$pchocolatei+$pblancoi
	+$pcremeb+$pfresacocoa+$pmocharettoi+$pcherryh+$prefrescos+$pnaranjadas+$plimonadas+$pcapuccino+$pamericano+$pespresso+$pmacchiato+$pchialatte+$pchocolate+$pchocoblanco+$pcocoa+$pcaramelate+$pmoccab+$photmus+$pveryv+$pmonchery+$pstrawberry+$pchery+$pvainilla
	+$pmocharetto+$pcoffealm+$ppostretempura+$ppostrebanana+$ppostrehelado; 
	$dorden = 
	$menu."".$frutal."".$california."".$aguacate."".$sudaremaki."".$queso."".$tampico."".$masago."".$pine."".$quesomaxi."".$spicy."".$mango."".$tornado."".$ebi."".$stampico."".$dragon."".$otoñito."".$tepanyaki."".$tepanyakires
	."".$tepanyakipollo."".$tepanyakimixto."".$yakitoripollo."".$yakitoriopollo."".$yakitorires."".$yakitoriores."".$kakiage."".$kakiageres."".$kushiaguequeso."".$kushiagueoqueso
	."".$kushiaguecamaron."".$kushiagueocamaron."".$kushiagueplatano."".$kushiagueoplatano."".$yakimeshi."".$yakimeshiajo."".$yakimeshires."".$yakimeshipollo."".$yakimeshimixto
	."".$extrastampico."".$extrasanguila."".$extraslimon."".$lattehelado."".$moccahelado."".$ichai."".$voltage."".$vvanilla."".$chocolatei."".$blancoi
	."".$cremeb."".$fresacocoa."".$mocharettoi."".$cherryh."".$refrescos."".$naranjadas."".$limonadas."".$capuccino."".$americano."".$espresso."".$macchiato."".$chialatte."".$chocolate."".$chocoblanco."".$cocoa."".$caramelate."".$moccab."".$hotmus."".$veryv."".$monchery."".$strawberry."".$chery."".$vainilla
	."".$mocharetto."".$coffealm."".$postretempura."".$postrebanana."".$postrehelado;
	
	$mensaje =
	'<html>'.
	'<head><title>Email con HTML</title></head>'.
	'<body>'.
			'<h2>Nombre:</h2>'. 
			'<h3>'.$nombre.'</h3>'. 
			'<h2>Correo:</h2>'. 
			'<h3>'.$correo.'</h3>'.
			'<h2>Teléfono:</h2>'. 
			'<h3>'.$telefono.'</h3>'.
			'<h2>Dirección:</h2>'. 
			'<h3>'.$direccion.'</h3>'.
			'<h2>Detalles:</h2>'. 
			'<h3>'.$dorden.'</h3>'. 
			'<h2>Total:</h2>'.
			'<h3>'.'$ '.$total.' . °°</h3> '.
	'</body>'.
	'</html>';
				
	$header  = 'From: ' . $correo . " \r\n"; 
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/html";
	
	/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["parax"]=$para;
$_SESSION["asuntox"]=$asunto;
$_SESSION["mensajex"]=$mensaje;
$_SESSION["headerx"]=$header;

	
	?>
		</div>
	</section>
	<section>
	<section>
			<div class="container-fluid">
				<div class="row mrgn">
					<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
						<h4>¡Verifica y Confirma tu Pedido!</h4> 
					</div>
					<div class="col-lg-12 col-sm-12 col-xs-12">
						<h2>Nombre:</h2> 
						<h3><?php echo $nombre?></h3> 
						<h2>Correo:</h2> 
						<h3><?php echo $correo?></h3> 
						<h2>Teléfono:</h2> 
						<h3><?php echo $telefono?></h3> 
						<h2>Dirección:</h2> 
						<h3><?php echo $direccion?></h3> 
						<h2>Pedido:</h2> 
						<h3><?php echo $dorden?></h3> 
						<h2>Total:</h2> 
						<h3>$ <?php echo $total?> . °°</h3> 
					</div>
				</div>
			</div>
		</section>
		</br>
		</br>
	
		<footer id="bttns">
			<div class="container">
				<div class="col-lg-1 col-sm-1"></div>
				<div class="col-lg-5 col-sm-5 col-xs-6">
					<a class="btns" href="javascript:history.back()"><button class="rd-bt">REGRESAR AL MENÚ</button></a>
				</div>
				<div class="col-lg-5 col-sm-5 col-xs-6">
					<a class="btns" href="R2.php"><button class="rd-bt rd-bt1" type="submit">CONFIRMA TU ORDEN</button></a>
				</div>
				<div class="col-lg-1 col-sm-1"></div>
			</div>
		</footer>
		
	</body>
</html>