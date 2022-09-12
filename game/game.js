//-------------------------------------------------------------------------------------------------------------------------------
//DO ZROBIENIA
//
//-------MECHANIKA:
//ROSZADA - SZYMON					!!!!!!!!!!!!!!!!!!DZIAŁA (BIAŁE I CZRNE) JEJ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//SZACH - SZYMON  					!!!!!!!!!!!!!!!!!!DZIAŁA (BIAŁE I CZRNE) JEJ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//MAT - PATRYQ PO TYM JAK SZYMON ZROBI SZACHA
//PAT - PATRYQ
//BICIE W PRZELOCIE - SZYMON
//
//----------GRAFIKA:
//ZBITE FIGURY NA PRAWO - PATRYQ
//
//-------------------------------------------------------------------------------------------------------------------------------

$("#bierki-do-wyboruB").hide();
$("#bierki-do-wyboruC").hide();

const ruchy = [];    //robimy tablice jak mogą poruszać się figury
//----------KRÓL_B----------
ruchy['bk'] = [[100, 0, 0, 0, 0, 0, 0],[-100, 0, 0, 0, 0, 0, 0],[1, 0, 0, 0, 0, 0, 0],[-1, 0, 0, 0, 0, 0, 0],[99, 0, 0, 0, 0, 0, 0],[-99, 0, 0, 0, 0, 0, 0],[101, 0, 0, 0, 0, 0, 0],[-101, 0, 0, 0, 0, 0, 0]]
//----------HETMAN_B----------
ruchy['bh'] = [[1, 2, 3, 4, 5, 6, 7],[-1, -2, -3, -4, -5, -6, -7],[100, 200, 300, 400, 500, 600, 700],[-100, -200, -300, -400, -500, -600, -700],[99, 198, 297, 396, 495, 594, 693],[-99, -198, -297, -396, -495, -594, -693],[101, 202, 303, 404, 505, 606, 707],[-101, -202, -303, -404, -505, -606, -707]]
//----------WIEZA_B----------
ruchy['bw'] = [[1, 2, 3, 4, 5, 6, 7],[-1, -2, -3, -4, -5, -6, -7],[100, 200, 300, 400, 500, 600, 700],[-100, -200, -300, -400, -500, -600, -700],[1, 2, 3, 4, 5, 6, 7],[-1, -2, -3, -4, -5, -6, -7],[100, 200, 300, 400, 500, 600, 700],[-100, -200, -300, -400, -500, -600, -700]]
//----------GONIEC_B----------
ruchy['bg'] = [[0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0],[99, 198, 297, 396, 495, 594, 693],[-99, -198, -297, -396, -495, -594, -693],[101, 202, 303, 404, 505, 606, 707],[-101, -202, -303, -404, -505, -606, -707]]
//----------SKOCZEK_B----------
ruchy['bs'] = [[199,0,0,0,0,0,0],[201,0,0,0,0,0,0],[-199,0,0,0,0,0,0],[-201,0,0,0,0,0,0],[102,0,0,0,0,0,0,0],[-102,0,0,0,0,0,0,0],[98,0,0,0,0,0,0,0],[-98,0,0,0,0,0,0,0]]
//----------PION_B----------
ruchy['bp'] = [[99,0,0,0,0,0,0],[101,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0]];

//----------KRÓL CZ----------
ruchy["ck"] =  [[100, 0, 0, 0, 0, 0, 0],[-100, 0, 0, 0, 0, 0, 0],[1, 0, 0, 0, 0, 0, 0],[-1, 0, 0, 0, 0, 0, 0],[99, 0, 0, 0, 0, 0, 0],[-99, 0, 0, 0, 0, 0, 0],[101, 0, 0, 0, 0, 0, 0],[-101, 0, 0, 0, 0, 0, 0]]
//----------HETMAN CZ----------
ruchy["ch"] = [[1, 2, 3, 4, 5, 6, 7],[-1, -2, -3, -4, -5, -6, -7],[100, 200, 300, 400, 500, 600, 700],[-100, -200, -300, -400, -500, -600, -700],[99, 198, 297, 396, 495, 594, 693],[-99, -198, -297, -396, -495, -594, -693],[101, 202, 303, 404, 505, 606, 707],[-101, -202, -303, -404, -505, -606, -707]]
//----------GONIEC CZ----------
ruchy["cg"] = [[0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0],[99, 198, 297, 396, 495, 594, 693],[-99, -198, -297, -396, -495, -594, -693],[101, 202, 303, 404, 505, 606, 707],[-101, -202, -303, -404, -505, -606, -707]]
//----------SKOCZEK CZ----------
ruchy["cs"] = [[199,0,0,0,0,0,0],[201,0,0,0,0,0,0],[-199,0,0,0,0,0,0],[-201,0,0,0,0,0,0],[102,0,0,0,0,0,0,0],[-102,0,0,0,0,0,0,0],[98,0,0,0,0,0,0,0],[-98,0,0,0,0,0,0,0]]
//----------WIEŻA CZ----------
ruchy["cw"] = [[1, 2, 3, 4, 5, 6, 7],[-1, -2, -3, -4, -5, -6, -7],[100, 200, 300, 400, 500, 600, 700],[-100, -200, -300, -400, -500, -600, -700],[1, 2, 3, 4, 5, 6, 7],[-1, -2, -3, -4, -5, -6, -7],[100, 200, 300, 400, 500, 600, 700],[-100, -200, -300, -400, -500, -600, -700]];
//----------PION CZ----------
ruchy["cp"] = [[-99,0,0,0,0,0,0],[-101,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0],[0,0,0,0,0,0,0]];


const pola_szachowane_przez_b = [];
const pola_szachowane_przez_c = [];


for(y=0; y<=809; y++)                     //wykonujemy funkcję zerującą 64 razy
{
    pola_szachowane_przez_b[y]=0;
	pola_szachowane_przez_c[y]=0;
}


var pole_aktualne;                                      //
var pole_docelowe;                                      //
var pole_docelowe4;
var id_pionka;                                          //ustawiamy zmienne globalne
var id_pionka2;											//
var id_pionka3;											//
var id_pionka4;
var licznik;                                            //
var tura=1;                                             //
var przelicznik;										//
var przelicznik2;										//
var sprawdzacz_b;										//
var y;
var o;
var pole_docelowe2;
var pole_aktualne2;
var pole_aktualne3;
var pole_aktualne4;
var tak_jest;
var wybory = 0;
var aaaa;
var bbbb;
var cccc;
var gggg;
var abb;
var baa;
var ck_sz;
var bk_sz;
var szach_b;
var szach_c;
var minus_tysiac = -1000;
var krotka_w_b=1;
var krotka_w_c=1;
var dluga_w_b=1;
var dluga_w_c=1;
var krol_r_b=1;
var krol_r_c=1;
var bicie_w_przelocie_b;
var bicie_w_przelocie_c;
var przelot_c;
var przelot_b;
var spr_mat;
var spr4;
var tak_jest2;

$( document ).on( "click", "img", function()            //jeżeli klikamy na jakąś figure
{
	if(wybory == 0)
	{
		if(tura==1)                                     //jeżeli tura białych
		{
			if($(this).hasClass('childb')==true)        //jeżeli klikniemy na białego
			{
				wyczysc();                              //czyścimy podświetlenia
				id_pionka = $(this).attr('id');                 //sprawdzamy jaki to pionek
				pole_aktualne = $(this).parent().attr('id');    //sprawdzamy na jakim jest polu
				$("#"+pole_aktualne).addClass('selected');
				
				for(m=0; m<=809; m++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_b[m]=0;
				}
				for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
                {
					pola_atakowane_przez_b(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                }
				for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
                {
                    sprawdz(p,id_pionka,tura);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                }
				bbbb = 0;
				/*
				for(k=0; k<=808; k++)
				{
					if(pola_szachowane_przez_c[k] > 0)
					{
					//alert(k);
					}
				}*/
			}
		}
		else                               //jeżeli tura czarnych
		{
			if($(this).hasClass('childc')==true)        //jeżeli klikniemy na czarnego
			{
				wyczysc();                              //czyścimy podświetlenia
				id_pionka = $(this).attr('id');                 //sprawdzamy jaki to pionek
				pole_aktualne = $(this).parent().attr('id');    //sprawdzamy na jakim jest polu
				$("#"+pole_aktualne).addClass('selected');
				
                for(m=0; m<=809; m++)                     //wykonujemy funkcję sprawdzającą 64 razy
    			{
					pola_szachowane_przez_c[m]=0;
				}
				for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
                {
					pola_atakowane_przez_c(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                }
                for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
                {
                    sprawdz(p,id_pionka,tura);
                }
			}
		}
        if($(this).parent().hasClass('opponent')==true)     //jeżeli przeciwnik
        {
			pole_docelowe = $(this).parent().attr('id');         //patrzymy gdzie on jest
			$("#" + pole_docelowe).html(    $("#" + pole_aktualne).html() );    //zbijamy go
			$("#" + pole_aktualne).html( "<div style='width:60px; height:60px;' ></div>" );                                  //i zostawiamy za sobą puste pole

            for(m=0; m<=809; m++)                     //wykonujemy funkcję sprawdzającą 64 razy
        	{
				pola_szachowane_przez_b[m]=0;
                pola_szachowane_przez_c[m]=0;
			}
			for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
			{
				pola_atakowane_przez_b(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                pola_atakowane_przez_c(p,minus_tysiac,minus_tysiac);
			}
            wyczysc();                              //czyścimy podświetlenia
			szach();
			
			
            pion_na_hetmana(pole_docelowe,id_pionka);				//GDY PION PRZECHODZI NA KONIEC
			zmiana_tury();
            
        }
	}
});


$(document).on("click", "#szukaj", function(){
	alert($("#szukajid").val());
});


//-----------------------------------------------------------------------------
//FUNKCJA PRZEJCIA NA PODŚWIETLONE MIEJSCA

$(document).on("click", "th", function()
{
	
	if(wybory == 0)
	{
		pole_docelowe = $(this).attr('id');
		console.log(id_pionka+">>"+pole_docelowe);

		if($("#" + pole_docelowe).hasClass('dot'))
		{
			id_pionka3 = $("#" + pole_aktualne).children().attr('id');
			
			if(id_pionka3 == "bk" && pole_docelowe == 806 && pole_aktualne == 804)
			{
				$("#805").html($("#807").html());
				$("#807").html("<div style='width:60px; height:60px;' ></div>");
				krotka_w_b = 0;
				krol_r_b = 0;
			}
			if(id_pionka3 == "bk" && pole_docelowe == 802 && pole_aktualne == 804)
			{
				$("#803").html($("#800").html());
				$("#800").html("<div style='width:60px; height:60px;' ></div>");
				dluga_w_b = 0;
				krol_r_b = 0;
			}
			if(id_pionka3 == "ck" && pole_docelowe == 106 && pole_aktualne == 104)
			{
				$("#105").html($("#107").html());
				$("#107").html("<div style='width:60px; height:60px;' ></div>");
				krotka_w_c = 0;
				krol_r_c = 0;
			}
			if(id_pionka3 == "ck" && pole_docelowe == 102 && pole_aktualne == 104)
			{
				$("#103").html($("#100").html());
				$("#100").html("<div style='width:60px; height:60px;' ></div>");
				dluga_w_c = 0;
				krol_r_c = 0;
			}
			if(id_pionka3=="bw" &&  pole_aktualne == 807)
			{
				krotka_w_b = 0;
			}
			if(id_pionka3=="bw" &&  pole_aktualne == 800)
			{
				dluga_w_b = 0;
			}
			if(id_pionka3=="cw" &&  pole_aktualne == 107)
			{
				krotka_w_c = 0;
			}
			if(id_pionka3=="cw" &&  pole_aktualne == 100)
			{
				dluga_w_c = 0;
			}
			if(id_pionka3=="bk" &&  pole_aktualne == 804)
			{
				krol_r_b = 0;
			}
			if(id_pionka3=="ck" &&  pole_aktualne == 104)
			{
				krol_r_c = 0;
			}
			//USTAW FIGURE DO POLA KLIKNIETEGO
			$("#" + pole_docelowe).html(     $("#" + pole_aktualne).html()     );
			//WYCZYSC POLE POPRZEDNIE
			$("#" + pole_aktualne).html( 	"<div style='width:60px; height:60px;' ></div>" );
			
            for(m=0; m<=809; m++)                     //wykonujemy funkcję sprawdzającą 64 razy
    		{
				pola_szachowane_przez_b[m]=0;
				pola_szachowane_przez_c[m]=0;
			}
			for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
			{
				pola_atakowane_przez_b(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				pola_atakowane_przez_c(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			}
			wyczysc();
			szach();
			//GDY PION PRZECHODZI NA KONIEC
			pole_aktualne = $(this).attr('id');  //numer pola
			id_pionka = $(this).children().attr('id');   //figura
			
			
			pion_na_hetmana(pole_aktualne,id_pionka);
			zmiana_tury();
            
            
            
		}
		else if($("#" + pole_docelowe).hasClass('opponent'))
		{
			pole_docelowe = $(this).attr('id');
			
			if(tura == 1)
			{
				if(bicie_w_przelocie_b != 0)
				{
					if(pole_docelowe==(bicie_w_przelocie_b - 100))
					{
						//USTAW FIGURE DO POLA KLIKNIETEGO
						$("#" + pole_docelowe).html(     $("#" + pole_aktualne).html()     );
						//WYCZYSC POLE POPRZEDNIE
						$("#" + pole_aktualne).html( 	"<div style='width:60px; height:60px;' ></div>" );
						$("#" + bicie_w_przelocie_b).html( 	"<div style='width:60px; height:60px;' ></div>" );
					}
				}
			}
			else
			{
				if(bicie_w_przelocie_c != 0)
				{
					if(pole_docelowe==(bicie_w_przelocie_c + 100))
					{
						//USTAW FIGURE DO POLA KLIKNIETEGO
						$("#" + pole_docelowe).html(     $("#" + pole_aktualne).html()     );
						//WYCZYSC POLE POPRZEDNIE
						$("#" + pole_aktualne).html( 	"<div style='width:60px; height:60px;' ></div>" );
						$("#" + bicie_w_przelocie_c).html( 	"<div style='width:60px; height:60px;' ></div>" );
					}
				}
			}
			wyczysc();
			szach();
			pole_aktualne = $(this).attr('id');  //numer pola
			id_pionka = $(this).children().attr('id');   //figura
			zmiana_tury();
            
		}
		else if(!$("#" + pole_docelowe).hasClass('selected'))
		{
			wyczysc();
		}
	}
});

//---------------------------------------------------------------
//FUNKCJA KTÓRA SPRAWIA ŻE JAK PION PRZEJDZIE DO KOŃCA TO ZAMIENIA SIE W HETMANA
function pion_na_hetmana(num,figura)
{
    if(figura=="bp"||figura=="cp")
    {
        if(figura=="bp")
        {
            if(num>99 && num<110)
            {
                pole_ojcaimatki = $("#" + num).attr('id');
				$("#tura").html( "<img src='./img/krolB.svg' />" );
				$("#bierki-do-wyboruB").show();
				wybory = 1;
            }
        }
        if(figura=="cp")
        {
            if(num>799 && num<810)
            {
                pole_ojcaimatki = $("#" + num).attr('id');
				$("#tura").html( "<img src='./img/krol.svg' />" );
				$("#bierki-do-wyboruC").show();
				wybory = 1;
            }
        }
    }
}


$(document).on("click", ".wyborb", function()
{
	id_wyboru = $(this).attr('id');

	if(id_wyboru=="do-wyboru-hetman")
	{
		$("#" + pole_ojcaimatki).html("<img id='bh' class='childb' src='./img/hetmanB.svg'/>");
	}
	if(id_wyboru=="do-wyboru-goniec")
	{
		$("#" + pole_ojcaimatki).html("<img id='bg' class='childb' src='./img/goniecB.svg'/>");
	}
	if(id_wyboru=="do-wyboru-skoczek")
	{
		$("#" + pole_ojcaimatki).html("<img id='bs' class='childb' src='./img/skoczekB.svg'/>");
	}
	if(id_wyboru=="do-wyboru-wieza")
	{
		$("#" + pole_ojcaimatki).html("<img id='bw' class='childb' src='./img/wiezaB.svg'/>");
	}
	wybory = 0;
	$("#tura").html( "<img src='./img/krol.svg' />" );
	$("#bierki-do-wyboruB").hide();
	tura = 0;
	
	for(m=0; m<=809; m++)                     //wykonujemy funkcję sprawdzającą 64 razy
	{
		pola_szachowane_przez_b[m]=0;
		pola_szachowane_przez_c[m]=0;
	}
	for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
	{
		pola_atakowane_przez_b(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		pola_atakowane_przez_c(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}
	szach();
});

$(document).on("click", ".wyborc", function()
{
	id_wyboru = $(this).attr('id');

	if(id_wyboru=="do-wyboru-hetman")
	{
		$("#" + pole_ojcaimatki).html("<img id='ch' class='childc' src='./img/hetman.svg'/>");
	}
	if(id_wyboru=="do-wyboru-goniec")
	{
		$("#" + pole_ojcaimatki).html("<img id='cg' class='childc' src='./img/goniec.svg'/>");
	}
	if(id_wyboru=="do-wyboru-skoczek")
	{
		$("#" + pole_ojcaimatki).html("<img id='cs' class='childc' src='./img/skoczek.svg'/>");
	}
	if(id_wyboru=="do-wyboru-wieza")
	{
		$("#" + pole_ojcaimatki).html("<img id='cw' class='childc' src='./img/wieza.svg'/>");
	}
	wybory = 0;
	$("#tura").html( "<img src='./img/krolB.svg' />" );
	$("#bierki-do-wyboruC").hide();
	tura = 1;
	
	for(m=0; m<=809; m++)                     //wykonujemy funkcję sprawdzającą 63 razy
	{
		pola_szachowane_przez_b[m]=0;
		pola_szachowane_przez_c[m]=0;
	}
	for(p=0; p<=7; p++)                     //wykonujemy funkcję sprawdzającą 7 razy
	{
		pola_atakowane_przez_b(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		pola_atakowane_przez_c(p,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	}
	szach();
});


//-----------------------------------------------------------------------------


//FUNKCJA DO CZYSZCZENIA Z KLASY DOT ORAZ CZERWONE POLA
function wyczysc()
{
	licznik = 0;
	while(licznik<808)
	{
		$("#" + licznik).removeClass("dot");
		$("#" + licznik).removeClass("opponent");
		$("#" + licznik).removeClass("selected");
		licznik++;
	}
}

//SKANUJE PLANSZE W POSZUKIWANIU "TARGET" - TARGET MUSI BYĆ ID TEGO CZEGOS
function skanuj_plansze(target)
{
	licznik = 0;
	alert("działa");

	while(licznik < 808)
	{
		if($("#" + licznik).children().attr('id')==true)
		{
			alert("znaleziono");
		}
		licznik++;
	}
}

//-----------------------------------------------------------------------------
//FUNKCJA ZMIANY TURY Z 1 NA 2 I Z 2 NA 1
function zmiana_tury()
{
	if(przelot_b==1)
	{
		przelot_b = 0;
	}
	else
	{
		bicie_w_przelocie_b = 0;
	}
	if(przelot_c==1)
	{
		przelot_c = 0;
	}
	else
	{
		bicie_w_przelocie_c = 0;
	}
	if(wybory == 0)
	{
		if(tura==1)
		{
			tura=0;
			$("#tura").html( "<img src='./img/krol.svg' />" );
		}
		else
		{
			tura=1;
			$("#tura").html( "<img src='./img/krolB.svg' />" );
		}
        
        /*
        spr_mat=0;
        for(gggg=0; gggg<=7; gggg++)
        {
			alert("gggg");
            alert(gggg);
            mat(gggg);
        }
        alert("spr");
        alert(spr_mat);
        if(spr_mat == 0)
        {
            alert("Szach mat");
        }
		*/
	}
}

//-------------------------------------------------------------------------------

function szach()
{
	for(v=0; v<=808; v++)
	{
		if($("#" + v).children().attr('id')=="ck")
		{
			ck_sz = v;
		}
		if($("#" + v).children().attr('id')=="bk")
		{
			bk_sz = v;
		}
	}
	szach_b = 0;
	szach_c = 0;
	
	for(v=0; v<=808; v++)
	{
		if(pola_szachowane_przez_b[v]==1)
		{
			if(v==ck_sz)
			{
				szach_c = 1;
			}
		}
		if(pola_szachowane_przez_c[v]==1)
		{
			if(v==bk_sz)
			{
				szach_b = 1;
			}
		}
	}
}

//FUNKCJA KTÓRA POTEM POMOŻE W SZACHU CZARNYCH


//--------------------------------------------------------------------------------NIE RUSZAĆ -OK
function pola_atakowane_przez_b(num,p_d,spr,spr2)
{
	y=0;
	while(y <= 808)
	{
		pole_aktualne2 = $("#" + y).attr('id');
		
		if(pole_aktualne2 != p_d)
		{
			id_pionka2 = $("#" + y).children().attr('id');
			tak_jest = 0;
			
			for(n=1; n<=8; n++)
			{
				for(q=0; q<=7; q++)
				{
					if(pole_aktualne2 == (n * 100) + q)
					{
						tak_jest = 1;
					}
				}
			}
			if(tak_jest == 1)
			{
				if(($("#" + y).children().hasClass('childb')==true))
				{
					sprawdzacz_b = 1;
					
					for(u=0; u<=7; u++)
					{
						tak_jest = 0;
						
						if(ruchy[id_pionka2][num][u] != 0)
						{
							pole_docelowe2 = pole_aktualne2 - ruchy[id_pionka2][num][u];
							
							if(pole_docelowe2 > 0)
							{
								for(n=1; n<=8; n++)
								{
									for(q=0; q<=7; q++)
									{
										if(pole_docelowe2 == (n * 100) + q)
										{
											tak_jest = 1;
										}
									}
								}
								if(tak_jest == 1)
								{
									if(sprawdzacz_b == 1)
									{
										if(($("#" + pole_docelowe2).children().hasClass('childb')==false)  &&  ($("#" + pole_docelowe2).children().hasClass('childc')==false) && pole_docelowe2!=p_d)
										{
											pola_szachowane_przez_b[pole_docelowe2] = 1;																	//przeszkoda
										}
										else if($("#"+pole_docelowe2).children().hasClass('childc')==true || $("#"+pole_docelowe2).children().hasClass('childb')==true || pole_docelowe2==p_d)
										{
											pola_szachowane_przez_b[pole_docelowe2] = 1;
											
											if($("#" + pole_docelowe2).children().attr('id') == "ck" || pole_docelowe2 == spr || pole_docelowe2 == spr2)
											{

											}
											else
											{
												sprawdzacz_b = 0;
											}
										}
										else
										{																													//brak przeszkody
											sprawdzacz_b = 0;																								//wyłącz sprawdzanie przeszkody
										}
									}
									else
									{																													//brak przeszkody
										sprawdzacz_b = 0;																								//wyłącz sprawdzanie przeszkody
									}
								}
							}
						}
					}
				}
			}
		}
		y++;
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------

//FUNKCJA KTÓRA POTEM POMOŻE W SZACHU BIAŁYCH



//--------------------------------------------------------------------------------NIE RUSZAĆ -OK
function pola_atakowane_przez_c(num,p_d,spr,spr2)
{
	y=0;
	while(y <= 808)
	{
		pole_aktualne2 = $("#" + y).attr('id');
		
		if(pole_aktualne2 != p_d)
		{
			id_pionka2 = $("#" + y).children().attr('id');
			tak_jest = 0;
			
			for(n=1; n<=8; n++)
			{
				for(q=0; q<=7; q++)
				{
					if(pole_aktualne2 == (n * 100) + q)
					{
						tak_jest = 1;
					}
				}
			}
			if(tak_jest == 1)
			{
				if(($("#" + y).children().hasClass('childc')==true))
				{
					sprawdzacz_b = 1;
					
					for(u=0; u<=7; u++)
					{
						tak_jest = 0;
						
						if(ruchy[id_pionka2][num][u] != 0)
						{
							pole_docelowe2 = pole_aktualne2 - ruchy[id_pionka2][num][u];
							
							if(pole_docelowe2 > 0)
							{
								for(n=1; n<=8; n++)
								{
									for(q=0; q<=7; q++)
									{
										if(pole_docelowe2 == (n * 100) + q)
										{
											tak_jest = 1;
										}
									}
								}
								if(tak_jest == 1)
								{
									if(sprawdzacz_b == 1)
									{
										if(($("#" + pole_docelowe2).children().hasClass('childc')==false)  &&  ($("#" + pole_docelowe2).children().hasClass('childb')==false) && pole_docelowe2!=p_d)
										{
											pola_szachowane_przez_c[pole_docelowe2] = 1;																	//przeszkoda
										}
										else if($("#"+pole_docelowe2).children().hasClass('childb')==true || $("#"+pole_docelowe2).children().hasClass('childc')==true || pole_docelowe2==p_d)
										{
											pola_szachowane_przez_c[pole_docelowe2] = 1;
											
											if($("#" + pole_docelowe2).children().attr('id') == "bk" || pole_docelowe2 == spr || pole_docelowe2 == spr2)
											{

											}
											else
											{
												sprawdzacz_b = 0;
											}
										}
										else
										{																													//brak przeszkody
											sprawdzacz_b = 0;																								//wyłącz sprawdzanie przeszkody
										}
									}
									else
									{																													//brak przeszkody
										sprawdzacz_b = 0;																								//wyłącz sprawdzanie przeszkody
									}
								}
							}
						}
					}
				}
			}
		}
		y++;
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------

function mat(num)
{

}


//----------------------------------------------------------------------------
//FUNKCJA WSKAZYWANIA PÓL DO KTÓRYCH MOGĄ DOSTAĆ SIE PIONKI
function sprawdz(num, chess, turaa)
{
	
	if(chess=="bp"||chess=="cp")          //jeżeli to są pionki
	{
		if(turaa==1)                      //jeżeli są to pionki białych
		{
			pole_docelowe = pole_aktualne-100;            //daj podświetlenie że mogą pójść jeden do przodu

			if(($("#" + pole_docelowe).children().hasClass('childb')==false)  &&  ($("#" + pole_docelowe).children().hasClass('childc')==false))  //jeżeli nie są zajęte
			{
				for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_c[jjjj]=0;
				}
				for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
				{
					pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				}
				szach();
				
				if(szach_b == 0)
				{
					$("#" + pole_docelowe).addClass('dot');
				}
				if(pole_aktualne>699 && pole_aktualne<710)       //jeżeli pionki są na polu startowym
				{
					pole_docelowe = pole_aktualne-200;           //to jest możliwość posunięcia się o dwa pola
					
					if(($("#" + pole_docelowe).children().hasClass('childb')==false)  &&  ($("#" + pole_docelowe).children().hasClass('childc')==false))  //jeżeli nie są zajęte przez inne figury(białe lub czarne)
					{
						for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
						{
							pola_szachowane_przez_c[jjjj]=0;
						}
						for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
						{
							pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
						}
						szach();
						
						if(szach_b == 0)
						{
							$("#" + pole_docelowe).addClass('dot');
							bicie_w_przelocie_c = pole_docelowe;
							przelot_c = 1;
						}
					}
				}
			}
			pole_docelowe = pole_aktualne-99;
			
			if($("#" + pole_docelowe).children().hasClass('childc')==true || (bicie_w_przelocie_b-100) == pole_docelowe)        //sprawdzamy czy jest może jakiś przeciwnik do zbicia na ukosie
			{
				for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_c[jjjj]=0;
				}
				for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
				{
					if((bicie_w_przelocie_b-100) == pole_docelowe)
					{
						pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne,bicie_w_przelocie_b);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
					else
					{
						pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
					
				}
				szach();
				
				if(szach_b == 0)
				{
					$("#" + pole_docelowe).addClass('opponent');
				}
			}
			pole_docelowe = pole_aktualne-101;
			
			if($("#" + pole_docelowe).children().hasClass('childc')==true || (bicie_w_przelocie_b-100) == pole_docelowe)        //sprawdzamy czy jest może jakiś przeciwnik do zbicia na drugim ukosie
			{
				for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_c[jjjj]=0;
				}
				for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
				{
					if((bicie_w_przelocie_b-100) == pole_docelowe)
					{
						pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne,bicie_w_przelocie_b);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
					else
					{
						pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
				}
				szach();
				
				if(szach_b == 0)
				{
					$("#" + pole_docelowe).addClass('opponent');
				}
			}
		}
		else                              //jeżeli są to pionki czarnych  TO ROBIMY TAK SAMO JAK BIAŁYCH TYLKO WSZYSTKO W DRUGĄ STRONĘ
		{
			pole_docelowe = pole_aktualne - -100;
			
			if(($("#" + pole_docelowe).children().hasClass('childc')==false)  &&  ($("#" + pole_docelowe).children().hasClass('childb')==false))
			{
				for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_b[jjjj]=0;
				}
				for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
				{
					pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				}
				szach();
				
				if(szach_c == 0)
				{
					$("#" + pole_docelowe).addClass('dot');
				}
				if(pole_aktualne>199 && pole_aktualne<210)
				{
					pole_docelowe = pole_aktualne - -200;
					
					if(($("#" + pole_docelowe).children().hasClass('childc')==false)  &&  ($("#" + pole_docelowe).children().hasClass('childb')==false))
					{
						for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
						{
							pola_szachowane_przez_b[jjjj]=0;
						}
						for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
						{
							pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
						}
						szach();
						
						if(szach_c == 0)
						{
							$("#" + pole_docelowe).addClass('dot');
							bicie_w_przelocie_b = pole_docelowe;
							przelot_b = 1;
						}
					}
				}
			}
			pole_docelowe = pole_aktualne - -99;
			
			if($("#" + pole_docelowe).children().hasClass('childb')==true || (bicie_w_przelocie_c + 100) == pole_docelowe)
			{
				for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_b[jjjj]=0;
				}
				for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
				{
					if((bicie_w_przelocie_b - -100) == pole_docelowe)
					{
						pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne,bicie_w_przelocie_c);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
					else
					{
						pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
				}
				szach();
				
				if(szach_c == 0)
				{
					$("#" + pole_docelowe).addClass('opponent');
				}
			}
			pole_docelowe = pole_aktualne - -101;
			
			if($("#" + pole_docelowe).children().hasClass('childb')==true || (bicie_w_przelocie_c + 100) == pole_docelowe)
			{
				for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
				{
					pola_szachowane_przez_b[jjjj]=0;
				}
				for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
				{
					if((bicie_w_przelocie_b - -100) == pole_docelowe)
					{
						pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne,bicie_w_przelocie_c);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
					else
					{
						pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
					}
				}
				szach();
				
				if(szach_c == 0)
				{
					$("#" + pole_docelowe).addClass('opponent');
				}
			}
		}
	}
	else              //jeżeli to nie są pionki tylko inne figury
	{
		licznik = 0;
		
		while(licznik <= 7)                                           //pętla poruszania się (8 razy)
		{
			if(ruchy[chess][num][licznik] != 0)
			{
				pole_docelowe = pole_aktualne-ruchy[chess][num][licznik];
				tak_jest = 0;
				
				for(n=1; n<=8; n++)
				{
					for(q=0; q<=7; q++)
					{
						if(pole_docelowe == (n * 100) + q)
						{
							tak_jest = 1;
						}
					}
				}
				if(tak_jest == 1)
				{
					if(turaa == 1)                                              //biali
					{
						//////////////////////////////////////////////////////////////////////////       ROSZADA
						if(chess=="bk")
						{
							if(krol_r_b == 1 && krotka_w_b == 1)
							{
								if(($("#805").children().hasClass('childb')==false)  &&  ($("#805").children().hasClass('childc')==false))
								{
									if(($("#806").children().hasClass('childb')==false)  &&  ($("#806").children().hasClass('childc')==false))
									{
										if(pola_szachowane_przez_c[804]==0 && pola_szachowane_przez_c[805]==0 && pola_szachowane_przez_c[806]==0)
										{
											$("#806").addClass('dot');
										}
									}
								}
							}
							if(krol_r_b == 1 && dluga_w_b == 1)
							{
								if(($("#801").children().hasClass('childb')==false)  &&  ($("#801").children().hasClass('childc')==false))
								{
									if(($("#802").children().hasClass('childb')==false)  &&  ($("#802").children().hasClass('childc')==false))
									{
										if(($("#803").children().hasClass('childb')==false)  &&  ($("#803").children().hasClass('childc')==false))
										{
											if(pola_szachowane_przez_c[802]==0 && pola_szachowane_przez_c[803]==0 && pola_szachowane_przez_c[804]==0)
											{
												$("#802").addClass('dot');
											}
										}
									}
								}
							}
						}
						if(($("#" + pole_docelowe).children().hasClass('childb')==false)  &&  ($("#" + pole_docelowe).children().hasClass('childc')==false))
						{
							if(chess=="bk")
							{
								for(eee=0; eee<=809; eee++)                     //wykonujemy funkcję sprawdzającą 64 razy
								{
									pola_szachowane_przez_b[eee]=0;
									pola_szachowane_przez_c[eee]=0;
								}
								for(sss=0; sss<=7; sss++)                     //wykonujemy funkcję sprawdzającą 7 razy
								{
									pola_atakowane_przez_b(sss,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
									pola_atakowane_przez_c(sss,minus_tysiac,minus_tysiac);
								}
								bbbb=0;
								
								for(v=0; v<=808; v++)
								{
									if(pola_szachowane_przez_c[v]==1)
									{
										if(v==pole_docelowe)
										{
											bbbb++;
										}
									}
								}
								if(bbbb==0)
								{
									$("#" + pole_docelowe).addClass('dot');
								}	
							}
							else
							{
								for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
								{
									pola_szachowane_przez_c[jjjj]=0;
								}
								for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
								{
									pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								}
								szach();
								
								if(szach_b == 0)
								{
									$("#" + pole_docelowe).addClass('dot');
								}
							}
						}
						else if($("#"+pole_docelowe).children().hasClass('childc')==true)
						{
							if(chess=="bk")
							{
								bbbb=0;
								
								for(v=0; v<=808; v++)
								{
									if(pola_szachowane_przez_c[v]==1)
									{
										if(v==pole_docelowe)
										{
											bbbb++;
										}
									}
								}
								if(bbbb==0)
								{	
									$("#" + pole_docelowe).addClass('opponent');
								}
							}
							else
							{
								for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
								{
									pola_szachowane_przez_c[jjjj]=0;
								}
								for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
								{
									pola_atakowane_przez_c(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								}
								szach();
								
								if(szach_b == 0)
								{
									$("#" + pole_docelowe).addClass('opponent');
								}
							}
						  break;
						}
						else
						{
						  break;
						}
					}
					if(turaa == 0)                                              //czarni
					{
						if(chess=="ck")
						{
							if(krol_r_c == 1 && krotka_w_c == 1)
							{
								if(($("#105").children().hasClass('childb')==false)  &&  ($("#105").children().hasClass('childc')==false))
								{
									if(($("#106").children().hasClass('childb')==false)  &&  ($("#106").children().hasClass('childc')==false))
									{
										if(pola_szachowane_przez_b[104]==0 && pola_szachowane_przez_b[105]==0 && pola_szachowane_przez_b[106]==0)
										{
											$("#106").addClass('dot');
										}
									}
								}
							}
							if(krol_r_c == 1 && dluga_w_c == 1)
							{
								if(($("#101").children().hasClass('childb')==false)  &&  ($("#101").children().hasClass('childc')==false))
								{
									if(($("#102").children().hasClass('childb')==false)  &&  ($("#102").children().hasClass('childc')==false))
									{
										if(($("#103").children().hasClass('childb')==false)  &&  ($("#103").children().hasClass('childc')==false))
										{
											if(pola_szachowane_przez_b[102]==0 && pola_szachowane_przez_b[103]==0 && pola_szachowane_przez_b[104]==0)
											{
												$("#102").addClass('dot');
											}
										}
									}
								}
							}
						}
						if(($("#" + pole_docelowe).children().hasClass('childc')==false)  &&  ($("#" + pole_docelowe).children().hasClass('childb')==false))
						{
							if(chess=="ck")
							{
								for(eee=0; eee<=809; eee++)                     //wykonujemy funkcję sprawdzającą 64 razy
								{
									pola_szachowane_przez_b[eee]=0;
									pola_szachowane_przez_c[eee]=0;
								}
								for(sss=0; sss<=7; sss++)                     //wykonujemy funkcję sprawdzającą 7 razy
								{
									pola_atakowane_przez_b(sss,minus_tysiac,minus_tysiac);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
									pola_atakowane_przez_c(sss,minus_tysiac,minus_tysiac);
								}
								bbbb=0;
								
								for(v=0; v<=808; v++)
								{
									if(pola_szachowane_przez_b[v]==1)
									{
										if(v==pole_docelowe)
										{
											bbbb++;
										}
									}
								}
								if(bbbb==0)
								{
									$("#" + pole_docelowe).addClass('dot');
								}
							}
							else
							{
								for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
								{
									pola_szachowane_przez_b[jjjj]=0;
								}
								for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
								{
									pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								}
								szach();
								
								if(szach_c == 0)
								{
									$("#" + pole_docelowe).addClass('dot');
								}
							}
						}
						else if($("#"+pole_docelowe).children().hasClass('childb')==true)
						{
							if(chess=="ck")
							{
								bbbb=0;
								
								for(v=0; v<=808; v++)
								{
									if(pola_szachowane_przez_b[v]==1)
									{
										if(v==pole_docelowe)
										{
											bbbb++;
										}
									}
								}
								if(bbbb==0)
								{
									$("#" + pole_docelowe).addClass('opponent');
								}
							}
							else
							{
								for(jjjj=0; jjjj<=809; jjjj++)                     //wykonujemy funkcję sprawdzającą 64 razy
								{
									pola_szachowane_przez_b[jjjj]=0;
								}
								for(oooo=0; oooo<=7; oooo++)                     //wykonujemy funkcję sprawdzającą 7 razy
								{
									pola_atakowane_przez_b(oooo,pole_docelowe,pole_aktualne);					////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
								}
								szach();
								
								if(szach_c == 0)
								{
									$("#" + pole_docelowe).addClass('opponent');
								}
							}
							break;
						}
						else
						{
							break;
						}
					}
				}
			}
			licznik++;
		}
	}
}