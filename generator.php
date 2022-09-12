


<?php

    $szerokosc = $_POST['width'];
    $rozmiar = $_POST['size'];
	$kolor = $_POST['color'];
	$kolor_border = $_POST['color_border'];
	$kolor_tekst = $_POST['color_txt'];
	$border_okr = $_POST['border-radius'];
	
	if($rozmiar==0&&$szerokosc==0&&$kolor==0&&$kolor_border==0&&$kolor_tekst==0&&$border_okr==0)
	{
		$rozmiar = 10;
		$szerokosc = 200;
		$kolor = 'ff0000';
		$kolor_border = '000000';
		$kolor_tekst = 'ffffff';
		$border_okr = '5';
	}

	$losowa = rand();
	
$generator1 = <<<GENERATOR
<form method="post" action="">



    <a>Szerokość: </a><input type="text" value="{$szerokosc}" name="width" placeholder="Szerokość"/><br/><br/>
	
    <a>Rozmiar tekstu: </a><input type="text" value="{$rozmiar}" name="size" placeholder="Rozmiar czcionki"/><br/><br/>
	
	<a>Kolor nagłówka: #</a><input type="text" value="{$kolor}" name="color" placeholder="Kolor"/><br/><br/>
	
	<a>Kolor krawędzi: #</a><input type="text" value="{$kolor_border}" name="color_border" placeholder="Kolor"/><br/><br/>
	
	<a>Kolor tekstu: #</a><input type="text" value="{$kolor_tekst}" name="color_txt" placeholder="Kolor"/><br/><br/>
	
	<a>Zaokrąglone krawędzie: </a>
	<input type="text" value="{$border_okr}" name="border-radius" placeholder="Zaokrąglenie"/><br/><br/>
	
	<a>Stacja: </a><select name="stacja-wybor">
		<option>K001</option>
		<option>K002</option>
		<option>K003</option>
	</select><br/><br/>
	
	
	
    <input type="submit" value="Generuj widget"/>
</form>
GENERATOR;


	



	

	

$widget_01_lukowy = <<<WIDGET
<div style='width:{$szerokosc}px; text-align:center; border-style:solid; border-size:4px; border-radius:{$border_okr}px; border-color:#{$kolor_border}; padding-bottom:3px; background-color: white;'>
	<div id='stacja' style='border-bottom: 2px solid;border-color:#{$kolor_border}; background-color:#{$kolor}; color:#{$kolor_tekst}; width:inherit;'>
		<a style='font-family: Verdana; font-size:{$rozmiar}; '>Stacja pomiarowa:</br>Kuźnia Nieborowska: Knurowska</a></br>
	</div>
	<img src="https://smogknurow.cba.pl/stacje/K001/wykresy/K001-lukowy.svg" style="width: inherit;"/>
</div>	
WIDGET;


echo "$generator1";
echo "$widget_01_lukowy";

$widget_01 = htmlspecialchars($widget_01_lukowy);
echo "<br/><textarea class='kot' readonly width='500px'>$widget_01</textarea>";

echo "<link rel='stylesheet' type='text/css' href='style.css?{$losowa}'/>";

?>