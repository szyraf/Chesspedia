<?php


//w zależności od wybranego języka załaduj odpowiednik plik językowy oraz inne ustawienia
if($_GET['lang'] === 'en')
{
	require_once('en.php');
	$jezyk_wybrany 		= 'en';
	$jezyk_dodatkowy 	= 'pl';
}
else
{
	require_once('pl.php');
	$jezyk_wybrany 		= 'pl';
	$jezyk_dodatkowy 	= 'en';
}

$aktualna_strona = $_GET['cont'];

if($_GET['cont']=='main')
{
    $strona_content = $CONTENT_main;
}
else if($_GET['cont']=='rules')
{
    $strona_content = $CONTENT_rules;
}
else if($_GET['cont']=='games')
{
    $strona_content = $CONTENT_games;
}
else if($_GET['cont']=='learn')
{
    $strona_content = $CONTENT_learn;
}
else if($_GET['cont']=='learna')
{
    $strona_content = $CONTENT_learna;
}
else if($_GET['cont']=='learnb')
{
    $strona_content = $CONTENT_learnb;
}
else if($_GET['cont']=='learnc')
{
    $strona_content = $CONTENT_learnc;
}
else if($_GET['cont']=='learnd')
{
    $strona_content = $CONTENT_learnd;
}
else if($_GET['cont']=='learne')
{
    $strona_content = $CONTENT_learne;
}
else if($_GET['cont']=='learnf')
{
    $strona_content = $CONTENT_learnf;
}
else if($_GET['cont']=='learng')
{
    $strona_content = $CONTENT_learng;
}
else {
		$strona_content = $CONTENT_main;
}



if($_GET['c']=='a')
{
	$strona_second_content = $CONTENT_chessmen_1;
}
if($_GET['c']=='b')
{
	$strona_second_content = $CONTENT_chessmen_2;
}
if($_GET['c']=='c')
{
	$strona_second_content = $CONTENT_chessmen_3;
}
if($_GET['c']=='d')
{
	$strona_second_content = $CONTENT_chessmen_4;
}
if($_GET['c']=='e')
{
	$strona_second_content = $CONTENT_chessmen_5;
}
if($_GET['c']=='f')
{
	$strona_second_content = $CONTENT_chessmen_6;
}


//Tutaj szablon strony

$rand = rand();		//potrzebna by zawsze wczytywał bieżącą wersję pliku .css
echo <<<STRONA

<!DOCTYPE HTML>
<html lang="pl">

<head>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136669391-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136669391-1');
    </script>


    	<meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="style.css?{$losowa}">
    	<script language='javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js'></script>
    </head>
    <body>

	<!--
		DD przykład wykorzystania jQuery + jQuery-UI

		Korzystajcie z jQuery dla "mechaniki" strony: 	https://api.jquery.com/
		oraz jQuery-UI dla tworzenia przycisków itp: 	https://jqueryui.com/demos/

	-->


	<!-- jQuery  + jQuery-ui -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<link rel="stylesheet" href="index.css?{$rand}">

	<!--Czcionka Amarante i Amiko z google fonts-->
	<link href='https://fonts.googleapis.com/css?family=Amarante&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Amiko&subset=latin,latin-ext' rel='stylesheet' type='text/css'>




	<meta charset="utf-8"/>

	<title>{$title}</title>
	<link rel="shortcut icon" href="./img/favicon.ico">


</head>

<body>


	<!-- SELECTMENU wyboru języka	szczegóły:
		wygląd przycisku: 	https://jqueryui.com/selectmenu/
		mechanika: 			https://api.jqueryui.com/selectmenu/
	-->











	<!-- tutaj reszta strony -->



	<!--Pasek na górze strony-->
	<div id="bar">

		<div id="logo">
			<img height="100px" width="100px" href="?lang={$jezyk_wybrany}&cont=main" src="./img/chess.svg"/>
			<h1 href="?lang={$jezyk_wybrany}&cont=main" id="title">{$title}</h1>
		</div>

		<div id="nav">
			<a class="nav" href="?lang={$jezyk_wybrany}&cont=main">{$main} </a><a>|</a>
			<a class="nav " href="?lang={$jezyk_wybrany}&cont=rules"> {$gameplay}</a><a>|</a>
			<a class="nav bold" href="?lang={$jezyk_wybrany}&cont=games"> {$games}</a><a>|</a>
			<a class="nav" href="?lang={$jezyk_wybrany}&cont=learn"> {$learn}</a>
            <a class='buttonfajny' href='?lang={$jezyk_dodatkowy}&cont={$aktualna_strona}'>{$jezyk_dodatkowy}</a>
		</div>

	</div>



	<!--Content strony-->
	<div id="main">

        {$strona_content}
		{$strona_second_content}

	</div>





    <div id="footer">
        <h3>chesspedia2019@gmail.com</h3>
        
		<a target="_blank" href="https://msp2knurow.edupage.org/">Miejska Szkoła Podstawowa nr 2 w Knurowie</a>	
		
		<br>
		oraz
		<br>
		
		<a target="_blank" href="https://www.facebook.com/KoloNaukoweKnurow/">Koło Naukowe Elektroniki i Informatyki w Knurowie</a>		
	
		
		<!--
        <div style='width:200px; text-align:center; border-style:solid; border-size:4px; border-radius:5px; border-color:#000000; padding-bottom:3px; background-color: white;'>
			<div id='stacja' style='border-bottom: 2px solid;border-color:#000000; background-color:#ff0000; color:#ffffff; width:200;'>
				<a style='font-family: Verdana; font-size:0.75vw;'>Stacja pomiarowa:</br>Kuźnia Nieborowska: Knurowska</a></br>
			</div>
			<img src="https://smogknurow.cba.pl/stacje/K001/wykresy/K001-lukowy.svg" width="200px"/>
		</div>	
		-->
	
    </div>



	<!-- Skrypty JS umieszczamy na końcu - wykonają się dopiero po załadowaniu całej strony -->
	<script>

		//Najpierw zmienne globalne
		var lang = '{$jezyk_wybrany}';	//domyślna wartość ustalona przez php


		//Następnie główny skrypt uruchamiany po wgraniu strony
		$( function() {

			//formatuj (zrób ładny) selectmenu wyboru języka
			$( "#lang" ).selectmenu();

			//Gdy ktoś klikną w SELECTMENU i wybrał inny niż poprzednio język
			$( "#lang" ).selectmenu({
			  change: function( event, ui ) {

				//pobierz jaki język wybrano
				var lang = $("#lang").val();

				//przeładuj stronę żądając zmiany języka
				self.location = "http://szympatr.cba.pl?lang=" + lang;

			  }
			});

		} );



		//Na samym końcu funkcje jeśli ... utworzycie jakieś


	</script>



</body>

</html>
STRONA;


?>
