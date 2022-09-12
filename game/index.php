<?php
	$losowa = rand();


//-----ID PIONKÓW-----
//Król - k
//Hetman - h
//Goniec - g
//Skoczek - s
//Wieza - w
//Pion - p
//-----KOLORY-----
//c - czarny
//b - biały


$strona = <<<STRONA

<!DOCTYPE HTML>

<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Chesspedia | Gra</title>
	<link rel="stylesheet" type="text/css" href="style.css?{$losowa}">
	<script language='javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js'></script>
</head>
<body>


	<div id="tura">

		<img src='./img/krolB.svg' />

	</div>



	<div id="bierki-do-wyboruB" class="wyborybbb">
		<img id="do-wyboru-hetman"  class="wyborb" src="./img/hetmanB.svg"/><br/><br/>
		<img id="do-wyboru-goniec"  class="wyborb" src="./img/goniecB.svg"/><br/><br/>
		<img id="do-wyboru-skoczek" class="wyborb" src="./img/skoczekB.svg"/><br/><br/>
		<img id="do-wyboru-wieza"   class="wyborb" src="./img/wiezaB.svg"/><br/><br/>
    </div>

	<div id="bierki-do-wyboruC" class="wyboryccc">
		<img id="do-wyboru-hetman"  class="wyborc" src="./img/hetman.svg"/><br/><br/>
		<img id="do-wyboru-goniec"  class="wyborc" src="./img/goniec.svg"/><br/><br/>
		<img id="do-wyboru-skoczek" class="wyborc" src="./img/skoczek.svg"/><br/><br/>
		<img id="do-wyboru-wieza"   class="wyborc" src="./img/wieza.svg"/><br/><br/>
    </div>




	<div id="main">

		<table id="tabelka">
			<tbody>

				<tr>
					<th id="100" class="cell a">
						<img id="cw" class="childc" src="./img/wieza.svg"/>
					</th>
					<th id="101" class="cell b">
						<img id="cs" class="childc" src="./img/skoczek.svg"/>
					</th>
					<th id="102" class="cell a">
						<img id="cg" class="childc" src="./img/goniec.svg"/>
					</th>
					<th id="103" class="cell b">
						<img id="ch" class="childc" src="./img/hetman.svg"/>
					</th>
					<th id="104" class="cell a">
						<img id="ck" class="childc" src="./img/krol.svg"/>
					</th>
					<th id="105" class="cell b">
						<img id="cg" class="childc" src="./img/goniec.svg"/>
					</th>
					<th id="106" class="cell a">
						<img id="cs" class="childc" src="./img/skoczek.svg"/>
					</th>
					<th id="107" class="cell b">
						<img id="cw" class="childc" src="./img/wieza.svg"/>
					</th>

				</tr>

				<tr>
					<th id="200" class="cell b">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="201" class="cell a">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="202" class="cell b">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="203" class="cell a">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="204" class="cell b">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="205" class="cell a">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="206" class="cell b">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>
					<th id="207" class="cell a">
						<img id="cp" class="childc" src="./img/pion.svg"/>
					</th>

				</tr>

				<tr>
					<th id="300" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="301" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="302" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="303" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="304" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="305" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="306" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="307" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>

				</tr>

				<tr>
					<th id="400" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="401" class="cell a">

					</th>
					<th id="402" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="403" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="404" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="405" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="406" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="407" class="cell a">

					</th>

				</tr>

				<tr>
					<th id="500" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="501" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="502" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="503" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="504" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="505" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="506" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="507" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>

				</tr>

				<tr>
					<th id="600" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="601" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="602" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="603" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="604" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="605" class="cell a">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="606" class="cell b">
						<div style='width:60px; height:60px;' ></div>
					</th>
					<th id="607" class="cell a">

					</th>

				</tr>

				<tr>
					<th id="700" class="cell a">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="701" class="cell b">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="702" class="cell a">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="703" class="cell b">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="704" class="cell a">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="705" class="cell b">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="706" class="cell a">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>
					<th id="707" class="cell b">
						<img id="bp" class="childb" src="./img/pionB.svg"/>
					</th>

				</tr>

				<tr>
					<th id="800" class="cell b">
						<img id="bw" class="childb" src="./img/wiezaB.svg"/>
					</th>
					<th id="801" class="cell a">
						<img id="bs" class="childb" src="./img/skoczekB.svg"/>
					</th>
					<th id="802" class="cell b">
						<img id="bg" class="childb" src="./img/goniecB.svg"/>
					</th>
					<th id="803" class="cell a">
						<img id="bh" class="childb" src="./img/hetmanB.svg"/>
					</th>
					<th id="804" class="cell b">
						<img id="bk" class="childb" src="./img/krolB.svg"/>
					</th>
					<th id="805" class="cell a">
						<img id="bg" class="childb" src="./img/goniecB.svg"/>
					</th>
					<th id="806" class="cell b">
						<img id="bs" class="childb" src="./img/skoczekB.svg"/>
					</th>

					<th id="807" class="cell a">
						<img id="bw" class="childb" src="./img/wiezaB.svg"/>
					</th>

				</tr>

			</tbody>
		</table>
		
		
		
	</div>
	
	<div style="clear:both;">
		
		<a target="_blank" href="https://msp2knurow.edupage.org/">Miejska Szkoła Podstawowa nr 2 w Knurowie</a>	
		
		<br>
		oraz
		<br>
		
		<a target="_blank" href="https://www.facebook.com/KoloNaukoweKnurow/">Koło Naukowe Elektroniki i Informatyki w Knurowie</a>		
	

	</div>
	
</body>

<script src="game.js?{$losowa}"></script>



<script>



</script>



</html>
STRONA;


$wygrana = <<<WYGRANA

    <html>

    <head>
        <title>Chesspedia | Gra</title>
    </head>
    <body>

    </body>

    </html>

WYGRANA;

echo $strona;

?>
