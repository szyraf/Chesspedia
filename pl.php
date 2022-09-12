<?php



$title = <<<TITLE
Chesspedia
TITLE;

$main = <<<MAIN
Strona główna
MAIN;

$gameplay = <<<GAMEPLAY
Rozgrywka i cel gry
GAMEPLAY;

$games = <<<GAMES
Graj w szachy
GAMES;

$learn = <<<LEARN
Nauka
LEARN;

$CONTENT_main = <<<CONTENT_MAIN
<h2>Witaj na Chesspedii - stronie poświęconej szachom</h2>


CONTENT_MAIN;

$CONTENT_rules = <<<CONTENT_RULES
<h3>Rozgrywka</h3><hr>
<a>Pierwsze posunięcie wykonują białe, następnie gracze wykonują ruchy na przemian. Wykonanie ruchu jest obowiązkowe; nie można z niego zrezygnować, nawet wtedy, gdy ma on prowadzić do strat czy przegranej. Gra toczy się do zamatowania jednego z króli, rezygnacji gracza z dalszej gry lub gdy nastąpił remis, którego reguły opisano niżej. Dodatkowo jeśli gra ograniczona jest kontrolą czasu, to gracz, który przekroczył czas przegrywa.
Oficjalne zasady gry nie przewidują sposobu wyboru gracza grającego białymi bierkami.
O tym, kto gra białymi decydują jednak reguły danego turnieju
(rozgrywanego np. w systemie szwajcarskim czy kołowym) lub,
w przypadku gry amatorskiej, obopólna zgoda, gdzie korzysta się często z pewnej formy wyboru losowego:
jeden z graczy chowa wtedy białego piona w jednej dłoni, a czarnego w drugiej i pozostawia wskazanie
przeciwnikowi koloru bierek, którymi ten będzie grał, do wyboru.</a>
<br/><br/>

<iframe width="800" height="600" src="https://www.youtube.com/embed/lfUQbK3t9Mw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<h3>Zakończenie partii</h3><hr>
<a>Partia kończy się wygraną jednej ze stron, jeśli:</a>
<li>król przeciwnika został zamatowany</li>
<li>przeciwnik poddał partię(przy czym musi to być wyraznie zasygnalizowane, zwykle podanie ręki czy zatrzymanie zegara nie oznacza w świetle przepisów poddania partii)</li>
<li>przeciwnik przekroczył czas na wykonanie określonej liczby ruchów</li>
<a>Przy określaniu wyniku partii czasami jest konieczna ocena, czy gracz ma wystarczającą liczbę bierek, by dać mata przeciwnikowi. Za wystarczający materiał do zmatowania króla (stosuje się zasadę najmniej sensownej obrony) uważa się co najmniej:</a>
<li>piona</li>
<li>skoczka i gońca</li>
<li>dwa gońce</li>
<li>dwa skoczki</li>
<li>wieżę</li>
<li>hetmana</li>
<li>oraz wszystkie pozycje, których poprzez prawidłowe posunięcia można dać mata</li>
CONTENT_RULES;

$CONTENT_games = <<<CONTENT_GAMES
<li><a class="link" href="./game" title="Szachy klasyczne">Szachy klasyczne</a></li>
<li><a class="link" href="https://shogi.knei.pl" title="Japońskie szachy">Shōgi</a></li>
CONTENT_GAMES;

$CONTENT_learn = <<<CONTENT_LEARN
<li><a class="link" href="?lang=pl&cont=learna">Bierki szachowe</a></li>
<li><a class="link" href="?lang=pl&cont=learnb">Roszada</a></li>
<li><a class="link" href="?lang=pl&cont=learnc">Bicie w przelocie</a></li>
<li><a class="link" href="?lang=pl&cont=learnd">Promocja piona</a></li>
<li><a class="link" href="?lang=pl&cont=learne">Szach</a></li>
<li><a class="link" href="?lang=pl&cont=learnf">Pat</a></li>
<li><a class="link" href="?lang=pl&cont=learng">Mat</a></li>
CONTENT_LEARN;

$CONTENT_learna = <<<CONTENT_LEARNA
Bierka szachowa – wspólne określenie pionów i figur występujących w grze w szachy.
<a>Początkowo każdy z graczy dysponuje zestawem następujących bierek w swoim kolorze (białym lub czarnym):<a><br/>
<li>1x <a class="link" href="?lang=pl&cont=learna&c=a">król</a></li>
<li>1x <a class="link" href="?lang=pl&cont=learna&c=b">hetman</a></li>
<li>2x <a class="link" href="?lang=pl&cont=learna&c=c">goniec</a></li>
<li>2x <a class="link" href="?lang=pl&cont=learna&c=d">skoczek</a></li>
<li>2x <a class="link" href="?lang=pl&cont=learna&c=e">wieża</a></li>
<li>8x <a class="link" href="?lang=pl&cont=learna&c=f">pion</a></li>
CONTENT_LEARNA;

$CONTENT_learnb = <<<CONTENT_ROSZADA
<h1>Roszada</h1>
<a>Roszada składa się z posunięcia króla o dwa pola w stronę wieży, a następnie umieszczeniu
wieży po drugiej stronie króla na polu z nim sąsiadującym. Roszada jest możliwa wyłącznie wtedy,
gdy spełnione są następujące warunki:</a>
<li>Król jak i wieża biorąca udział w roszadzie nie wykonały żadnego posunięcia.</li>
<li>Między królem a wieżą nie ma innych bierek.</li>
<li>Król nie może być szachowany, nie może przechodzić ani zakończyć ruchu na polu atakowanym przez bierkę przeciwnika.</li>
<li>Król oraz wieża muszą znajdować się w tym samym rzędzie.</li>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/GTT_1tr_tzU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_ROSZADA;

$CONTENT_learnc = <<<CONTENT_BICIE
<h1>Bicie w przelocie</h1>

<a>Jeśli gracz A wykona ruch pionem o dwa pola, zaś gracz B ma piona w piątym, pztrząc z jego perspektywy, rzędzie
i sąsiadującej kolumnie, to pion gracza B może zbić piona gracza A tak, jak dgyby wykonał on posunięcie o jedno
pole. Bicie to można wykonać tylko w ruchy bezpośrednio po ruchu pionem o dwa pola.</a>
CONTENT_BICIE;

$CONTENT_learnd = <<<CONTENT_BICIE
<h1>Promocja piona</h1>
<a>Jeśli pion osiągnie ósmy rząd, to wówczas jest on promowany (zamieniany) na hetmana,
wieżę, gońca lub skoczka tego samego koloru, przy czym wybór zależy od gracza (zwykle jest to hetman).
Wybór nie ogranicza się do poprzednio zbitych bierek,
stąd teoretycznie możliwe jest posiadanie przez gracza dziewięciu hetmanów albo dziesięciu wież,
gońców albo skoczków (o ile tylko wszystkie piony będą promowane i żadna z figur danego rodzaju nie
zostanie zbita). W przypadku braku potrzebnej bierki gracz powinien wezwać sędziego, aby ten ją dostarczył</a>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/SVCLjuvhRDA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_BICIE;

$CONTENT_learne = <<<CONTENT_SZACH
<h1>Szach</h1>
Szach – sytuacja w partii szachów, w której król jest zagrożony zabiciem w następnym posunięciu.
Inaczej mówiąc, szach jest wtedy, gdy król znajdzie się w zasięgu działania (bicia) bierki przeciwnika.
Jeśli przeciwnik wykonał ruch, który spowodował taką sytuację, mówi się,
że król jest w szachu lub jest szachowany. W szachowej notacji algebraicznej szacha oznacza się znakiem +.
Gracz, którego król jest w szachu ma obowiązek wyeliminować groźbę jedną z trzech metod:
<li>przesunąć króla na pole niebędące w szachu</li>
<li>zbić bierkę szachującą króla</li>
<li>zasłonić króla przed szachem własną bierką</li>
<a>Króla nigdy nie można pozostawiać w szachu. Niedozwolone jest również wykonanie posunięcia,
które doprowadzi do szacha własnego króla.</a>
CONTENT_SZACH;

$CONTENT_learnf = <<<CONTENT_PAT
Sytuacja w szachach, w której jeden z graczy nie może wykonać żadnego podunięcia zgodnie z przepisami, ale jego król
nie jest szachowany. Zgodnie z zasadami pat natychmiast kończy partię remisem
<iframe width="800" height="600" src="https://www.youtube.com/embed/OLBOVfRayZY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_PAT;

$CONTENT_learng = <<<CONTENT_MAT
<a>Sytuacja w szachach, w której jednej ze stron jest szachowany i nie ma żadnego dozwolonego ruchu, aby się przed szachem obronić lub od niego uciec. Mat kończy grę porażką gracza, którego król został zamatowany. Danie przeciwnikowi mata jest celem gry.</a>
<br/><iframe width="800" height="600" src="https://www.youtube.com/embed/xSA42O03jv0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_MAT;

$CONTENT_chessmen_1 = <<<CONTENT_CHESSMEN_1
<h1>Król</h1>
<img height="200px" width="200px" title="Ruch króla" src="./img/king.svg"/></br>
<a>Król może poruszać się o jedno pole w poziomie, pionie oraz na ukos. Najwyżej raz w grze król może wykonać specjalny ruch zwany <a class="link" href="#">roszadą</a>.</a>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/T-IBsCGNRaw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_CHESSMEN_1;

$CONTENT_chessmen_2 = <<<CONTENT_CHESSMEN_2
<h1>Hetman</h1>
<img height="200px" width="200px" title="Ruch hetmana" src="./img/hetman.svg"/><br/>
<a>Hetman może poruszać się o dowolną liczbę pól w poziomie, pionie oraz na ukos.
Łączy w ten sposób ruch wieży i gońca.</a>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/ulLAxfDIjNE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_CHESSMEN_2;

$CONTENT_chessmen_3 = <<<CONTENT_CHESSMEN_3
<h1>Goniec</h1>
<img height="200px" width="200px" title="Ruch gońca" src="./img/goniec.svg"/><br/>
<a>Goniec może poruszać się o dowolną liczbę wolnych pól po przekątnej.</a>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/InQgCVtbNmA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_CHESSMEN_3;

$CONTENT_chessmen_4 = <<<CONTENT_CHESSMEN_4
<h1>Skoczek</h1>
<img height="200px" width="200px" title="Ruch skoczka" src="./img/skoczek.svg"/><br/>
<a>Skoczek rusza się na najbliższe pole nie znajdujące się w tym samym rzędzie, kolumnie lub przekątnej; innymi słowy
poruszają się one o dwa pola na kształt wieży, a następnie na jedno pole prostopadle do tego kierunku. Ruch
skoczka porównuje się do litery "L".</a>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/uwLY062xLu4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_CHESSMEN_4;

$CONTENT_chessmen_5 = <<<CONTENT_CHESSMEN_5
<h1>Wieża</h1>
<img height="200px" width="200px" title="Ruch wieży" src="./img/wieza.svg"/><br/>
<a>Wieża porusza się o dowolną liczbę pól w poziomie i pionie.</a>
<br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/dhH7nNj81vI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_CHESSMEN_5;

$CONTENT_chessmen_6 = <<<CONTENT_CHESSMEN_6
<h1>Pion</h1>
<img height="200px" width="200px" title="Ruch piona" src="./img/oin.svg"/> <br/>
<a>Pion ma najbardziej rozbudowane zasady poruszania się:</a>
<li>Pion może poruszać się o jedno pole naprzód, o ile jest ono wolne.
W pierwszym ruchu ma możliwość przesunięcia się o dwa pola o ile obydwa są wolne</li>
<li>Piony są jedynymi bierkami, które biją inaczej niż się poruszają. Mogą one zbić wrogą bierkę, jeśli znajduję się ona
 na jednym z dwóch pól sąsiadujących z polem przed nimi(tzn. z pól na ukos przed nimi), lecz nie mogą się tam
 ruszyć, jeśli pola te są wolne.</li>
 <br/><br/><iframe width="800" height="600" src="https://www.youtube.com/embed/pUpieWttXqA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
CONTENT_CHESSMEN_6;

?>