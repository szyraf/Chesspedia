<?php


//w zależności od wybranego języka załaduj odpowiednik plik językowy oraz inne ustawienia
if($_GET[lang] === 'en')	
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
	
	
	
	
	
	
//Tutaj szablon strony

$rand = rand();		//potrzebna by zawsze wczytywał bieżącą wersję pliku .css
echo <<<STRONA

<!DOCTYPE HTML>
<html lang="pl">

<head>

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

	<meta charset="utf-8"/>

	
</head>

<body>


	<!-- SELECTMENU wyboru języka	szczegóły: 
		wygląd przycisku: 	https://jqueryui.com/selectmenu/ 
		mechanika: 			http://api.jqueryui.com/selectmenu/
	-->
		

	

	<select name="lang" id="lang">
	  <option>{$jezyk_wybrany}</option>
	  <option>{$jezyk_dodatkowy}</option>
	</select>



	<!-- tutaj reszta strony -->
	
	<div id="bar">
	
		<h1 id="title">{$title}</h1>
		
		<div id="nav">
			<a href="index.php" class="nav" >Strona główna</a>
			<a href="index.php" class="nav" >Zasady gry</a>
		</div>
		
	</div>


	<div id="main">
	

	
		<p>{$tekst_01}</p>
		<p>{$tekst_02}</p>
	
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